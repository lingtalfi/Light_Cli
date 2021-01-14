<?php


namespace Ling\Light_Cli\CliTools\Command;

use Ling\CliTools\Command\CommandInterface;
use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;
use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_Cli\Exception\LightCliException;

/**
 * The LightCliBaseCommand class.
 */
abstract class LightCliBaseCommand implements CommandInterface
{


    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected $container;


    /**
     * Builds the LightCliBaseCommand instance.
     */
    public function __construct()
    {
        $this->container = null;
    }


    /**
     * Runs the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    abstract protected function doRun(InputInterface $input, OutputInterface $output);

    /**
     * Sets the container.
     *
     * @param LightServiceContainerInterface $container
     */
    public function setContainer(LightServiceContainerInterface $container)
    {
        $this->container = $container;
    }


    /**
     * @implementation
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        try {
            $this->doRun($input, $output);
        } catch (\Exception $e) {
            $output->write($e);
        }
    }



    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Throws an exception.
     *
     * @param string $msg
     */
    protected function error(string $msg)
    {
        throw new LightCliException($msg);
    }
}