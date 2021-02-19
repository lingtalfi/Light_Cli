<?php


namespace Ling\Light_Cli\CliTools\Command;


use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Output\OutputInterface;
use Ling\UniverseTools\MetaInfoTool;
use Ling\UniverseTools\PlanetTool;


/**
 * The PlanetsCommand class.
 *
 *
 *
 */
class PlanetsCommand extends LightCliBaseCommand
{


    /**
     * @implementation
     */
    protected function doRun(InputInterface $input, OutputInterface $output)
    {

        $uniDir = $this->application->getCurrentDirectory() . "/universe";
        if (true === is_dir($uniDir)) {
            $planetDirs = PlanetTool::getPlanetDirs($uniDir);
            foreach ($planetDirs as $planetDir) {
                $version = MetaInfoTool::getVersion($planetDir);
                $planetDotName = PlanetTool::getPlanetDotNameByPlanetDir($planetDir);
                $this->msg("- $planetDotName: $version" . PHP_EOL);
            }

        } else {
            $this->errorMsg("Universe dir not found in: $uniDir." . PHP_EOL);

        }

    }
}