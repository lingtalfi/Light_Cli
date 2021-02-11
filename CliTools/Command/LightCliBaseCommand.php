<?php


namespace Ling\Light_Cli\CliTools\Command;

use Ling\CliTools\Command\CommandInterface;
use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;
use Ling\Light\ServiceContainer\LightServiceContainerAwareInterface;
use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light_Cli\CliTools\Program\LightCliApplication;
use Ling\Light_Cli\Exception\LightCliException;

/**
 * The LightCliBaseCommand class.
 */
abstract class LightCliBaseCommand implements CommandInterface, LightServiceContainerAwareInterface
{


    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected $container;


    /**
     * This property holds the application for this instance.
     * @var LightCliApplication
     */
    protected LightCliApplication $application;


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


    //--------------------------------------------
    // LightServiceContainerAwareInterface
    //--------------------------------------------
    /**
     * @implementation
     */
    public function setContainer(LightServiceContainerInterface $container)
    {
        $this->container = $container;
    }

    //--------------------------------------------
    // CommandInterface
    //--------------------------------------------
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
     * Sets the application.
     *
     * @param LightCliApplication $application
     */
    public function setApplication(LightCliApplication $application)
    {
        $this->application = $application;
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