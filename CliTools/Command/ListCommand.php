<?php


namespace Ling\Light_Cli\CliTools\Command;


use Ling\Bat\StringTool;
use Ling\CliTools\Helper\BashtmlStringTool;
use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;
use Ling\Light_Cli\CliTools\Program\LightCliApplicationInterface;
use Ling\Light_Cli\Helper\LightCliFormatHelper;
use Ling\Light_Cli\Service\LightCliService;


/**
 * The ListCommand class.
 * This command will display the list of all registered appId-command and/or aliases.
 *
 *
 *
 */
class ListCommand extends LightCliBaseCommand
{


    /**
     * This property holds the indentInc for this instance.
     * @var int
     */
    private $indentInc;


    /**
     * Builds the ListCommand instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->indentInc = 4;
    }


    /**
     * @implementation
     */
    protected function doRun(InputInterface $input, OutputInterface $output)
    {


        $cmdFmt = LightCliFormatHelper::getCommandFmt();
        $pmtFmt = LightCliFormatHelper::getCommandLineParameterFmt();
        $optionFmt = LightCliFormatHelper::getCommandLineOptionFmt();
        $flagFmt = LightCliFormatHelper::getCommandLineFlagFmt();
        $headerFmt = LightCliFormatHelper::getHeaderFmt();

        $ind = str_repeat(" ", $this->indentInc);
        $ind2 = str_repeat(" ", $this->indentInc * 2);
        $ind3 = str_repeat(" ", $this->indentInc * 3);
        $ind4 = str_repeat(" ", $this->indentInc * 4);


        $filter = $input->getParameter(2);
        $verbose = $input->hasFlag("v");

        if (null !== $filter && is_numeric($filter)) {
            $verbose = true;
        }


        /**
         * @var $lc LightCliService
         */
        $lc = $this->container->get('cli');
        $cliApps = $lc->getCliApps();
        $list = $this->buildListFromCliApps($cliApps);

        $hasStringFilter = false;
        if (null !== $filter && false === is_numeric($filter)) {
            $hasStringFilter = true;
        }

        //--------------------------------------------
        // USER CHOOSES AN INDEX
        //--------------------------------------------
        if (null !== $filter && is_numeric($filter)) {
            if (array_key_exists($filter, $list)) {
                $list = [$list[$filter]];
            }
        }

        //--------------------------------------------
        // DISPLAY THE LIST
        //--------------------------------------------
        foreach ($list as $item) {
            $line = '';
            $index = $item['index'];
            $type = $item['type'];
            $name = $item['name'];
            $description = $item['description'] ?? null;
            $parameters = $item['parameters'] ?? [];
            $options = $item['options'] ?? [];
            $flags = $item['flags'] ?? [];


            if (true === $hasStringFilter) {
                if (false === $this->filterMatch($filter, $name)) {
                    continue;
                }
            }


            switch ($type) {
                case "appCommand":


                    $line = "<b>$index</b>. <$cmdFmt>$name</$cmdFmt>";
                    foreach ($parameters as $parameter => $info) {
                        list($desc, $isMandatory) = $info;
                        $line .= " <$pmtFmt><$parameter>";
                        if (false === $isMandatory) {
                            $line .= '?';
                        }
                        $line .= "</$pmtFmt>";
                    }


                    foreach ($flags as $name => $desc) {
                        $isLong = (strlen($name) > 1);
                        $dashPrefix = '-';
                        if (true === $isLong) {
                            $dashPrefix .= '-';
                        }
                        $line .= " <$flagFmt>$dashPrefix" . $name . "</$flagFmt>";
                    }


                    if ($options) {
                        $line .= " (opts=";
                        $c = 0;
                        foreach ($options as $name => $info) {
                            if (0 !== $c) {
                                $line .= ", ";
                            }
                            $line .= "<$optionFmt>$name</$optionFmt>";
                            $c++;
                        }
                        $line .= ")";
                    }


                    if (false === $verbose) {
                        $description = $this->trimLongText($description);
                        $line .= ": " . trim($this->indent($description, 1)) . PHP_EOL;
                    } else {
                        $line .= PHP_EOL;
                    }

                    if (true === $verbose) {

                        $line .= "$ind<$headerFmt>Description</$headerFmt>:" . PHP_EOL;
                        $line .= StringTool::indent($description, 2 * $this->indentInc) . PHP_EOL;


                        if ($parameters) {
                            $line .= "$ind<$headerFmt>Parameters</$headerFmt>:" . PHP_EOL;
                            foreach ($parameters as $parameter => $info) {
                                list($desc, $isMandatory) = $info;
                                $line .= $this->indent("<$pmtFmt>$parameter</$pmtFmt>: $desc", 2) . PHP_EOL;
                            }
                        }
                        if ($options) {

                            $line .= "$ind<$headerFmt>Options</$headerFmt>:" . PHP_EOL;
                            foreach ($options as $option => $info) {

                                $desc = $info['desc'] ?? '';
                                $values = $info['values'] ?? [];
                                $line .= $this->indent("<$optionFmt>$option</$optionFmt>: $desc", 2) . PHP_EOL;

                                if ($values) {
                                    $line .= $this->indent("Possible values are:", 3) . PHP_EOL;
                                    foreach ($values as $itemName => $itemDesc) {
                                        $line .= "$ind4- <b>$itemName</b>";
                                        if (null !== $itemDesc) {
                                            $line .= ": $itemDesc";
                                        }
                                        $line .= PHP_EOL;
                                    }
                                }
                            }
                        }
                        if ($flags) {
                            $line .= "$ind<$headerFmt>Flags</$headerFmt>:" . PHP_EOL;
                            foreach ($flags as $name => $desc) {
                                $nbDash = 1;
                                if (strlen($name) > 1) {
                                    $nbDash = 2;
                                }
                                $line .= $this->indent("<$flagFmt>" . str_repeat('-', $nbDash) . "$name</$flagFmt>: $desc", 2) . PHP_EOL;
                            }
                        }
                    }
                    break;
                case "alias":
                    $dest = $item['dest'];
                    $dstIndex = $this->getIndexByCommand($dest, $list);
                    $line = "<b>$index</b>. <$cmdFmt>$name</$cmdFmt>: an alias to the <$cmdFmt>$dest</$cmdFmt> command (<b>#$dstIndex</b>)." . PHP_EOL;
                    break;
                default:
                    $this->error("Unknown list type: $type.");
                    break;
            }
            $output->write($line);
        }


    }




    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the given string with the first line indented by the given indentLevel, and subsequent lines indented with the given number + $indentInc.
     *
     *
     * @param string $s
     * @param int $indentLevel
     * @return string
     */
    private function indent(string $s, int $indentLevel): string
    {
        return str_repeat(' ', $indentLevel * $this->indentInc) . trim(StringTool::indent($s, ($indentLevel + 1) * $this->indentInc));
    }


    /**
     * Returns a trimmed version of the given description.
     *
     * @param string|null $description
     * @return string
     */
    private function trimLongText(string $description = null): string
    {
        if (null === $description) {
            return "";
        }
        $trimLength = 100;
        if (mb_strlen($description) > $trimLength) {
            $description = substr($description, 0, $trimLength) . "...";
            $description = BashtmlStringTool::fixTrimmedStringFormatting($description);
        }
        return $description;
    }


    /**
     * Returns the index number of the given command.
     *
     * @param string $cmdName
     * @param array $list
     * @return int
     * @throws \Exception
     */
    private function getIndexByCommand(string $cmdName, array $list): int
    {
        foreach ($list as $item) {
            if ($cmdName === $item['name']) {
                return (int)$item['index'];
            }
        }
        $this->error("Command not found in the given list: $cmdName.");
    }


    /**
     * Builds and returns a list of all appId command and aliases.
     *
     * The array is the one described in the conception notes, it basically contains all information.
     *
     * It's an array of trigger id (an int) => item, each item has the following structure:
     * - index: int, the index number for this command
     * - type: string (alias|appCommand), the type of the trigger
     * - name: string, the name of the appCommand or alias
     * - ?dest: string, only for alias: the full command the alias is referring to
     * - ?description: string, the description of the appCommand. This is just for appCommands, aliases don't have a description.
     *
     * The extra properties below are only available when options.args=true, and for appCommands only (i.e. not aliases)
     *
     * - flags: array of name => description
     * - options: array of name => description|list, with list an array of name => ?description.
     * - parameters: array of name => description
     *
     *
     *
     *
     *
     *
     * @param array $cliApps
     * @return array
     */
    private function buildListFromCliApps(array $cliApps): array
    {
        $args = true;


        $ret = [];
        $triggerId = 1;
        foreach ($cliApps as $app) {
            /**
             * @var $app LightCliApplicationInterface
             */
            $appId = $app->getAppId();
            $commands = $app->getCommands();
            foreach ($commands as $command) {
                $name = $command->getName();
                $description = $command->getDescription();
                $aliases = $command->getAliases();


                if (true === $args) {
                    $flags = $command->getFlags();
                    $cmdOptions = $command->getOptions();
                    $parameters = $command->getParameters();
                }


                $ret[$triggerId] = [
                    'index' => $triggerId,
                    'type' => 'appCommand',
                    'name' => $appId . " " . $name,
                    'description' => $description,
                ];
                if (true === $args) {
                    $ret[$triggerId]["flags"] = $flags;
                    $ret[$triggerId]["options"] = $cmdOptions;
                    $ret[$triggerId]["parameters"] = $parameters;
                }

                foreach ($aliases as $alias => $aliasDst) {
                    $triggerId++;

                    $ret[$triggerId] = [
                        'index' => $triggerId,
                        'type' => 'alias',
                        'name' => $alias,
                        'dest' => $aliasDst,
                    ];
                }


                $triggerId++;
            }
        }
        return $ret;
    }


    /**
     * Returns whether the given filter matches the given expression.
     * If the dollar symbol ($) is the first char, it means that the expression must start with the rest of the filter.
     * Otherwise, it means that the expression must contain the filter.
     *
     *
     *
     * @param string $filter
     * @param string $expr
     * @return bool
     */
    private function filterMatch(string $filter, string $expr): bool
    {
        if ('$' === substr($filter, 0, 1)) {
            $filter = substr($filter, 1);
            return (0 === strpos($expr, $filter));
        } else {
            return (false !== strpos($expr, $filter));
        }
    }

}