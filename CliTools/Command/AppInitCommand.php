<?php


namespace Ling\Light_Cli\CliTools\Command;


use Ling\BabyYaml\BabyYamlUtil;
use Ling\Bat\FileListTool;
use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;
use Ling\Light_Cli\Helper\LightCliFormatHelper;


/**
 * The AppInitCommand
 *
 */
class AppInitCommand extends LightCliBaseCommand
{


    /**
     * @implementation
     */
    protected function doRun(InputInterface $input, OutputInterface $output)
    {

        $file = LightCliFormatHelper::getFileFmt();

        $appDir = __DIR__ . "/../../assets/light-app-standalone";
        $appDir = realpath($appDir);
        $currentDir = $this->application->getCurrentDirectory();

        $output->write("Copying light app boilerplate from <$file>$appDir</$file> to <$file>$currentDir</$file>." . PHP_EOL);

        $listFile = __DIR__ . "/../../assets/app-init-state.byml";
        $files = BabyYamlUtil::readFile($listFile);
        FileListTool::copyFileListToDir($files, $appDir, $currentDir);


    }


}