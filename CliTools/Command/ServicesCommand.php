<?php


namespace Ling\Light_Cli\CliTools\Command;


use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;


/**
 * The ServicesCommand class.
 *
 *
 *
 */
class ServicesCommand extends LightCliBaseCommand
{


    /**
     * @implementation
     */
    protected function doRun(InputInterface $input, OutputInterface $output)
    {

        $verbose = $input->hasFlag("v");


        $services = $this->container->all();
        sort($services);
        $nbItems = count($services);
        $this->msg("<b>$nbItems</b> service(s) found:" . PHP_EOL);
        foreach ($services as $service) {
            if (true === $verbose) {
                $instance = $this->container->get($service);
                $this->msg('- <b>' . $service . '</b>: ' . $instance::class . PHP_EOL);
            } else {
                $this->msg('- <b>' . $service . '</b>' . PHP_EOL);
            }
        }
    }





}