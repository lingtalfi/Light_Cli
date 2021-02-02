[Back to the Ling/Light_Cli api](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli.md)



The ListCommand class
================
2021-01-07 --> 2021-02-02






Introduction
============

The ListCommand class.
This command will display the list of all registered appId-command and/or aliases.



Class synopsis
==============


class <span class="pl-k">ListCommand</span> extends [LightCliBaseCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand.md) implements [CommandInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Command/CommandInterface.md) {

- Inherited properties
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightCliBaseCommand::$container](#property-container) ;

- Methods
    - protected [doRun](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/doRun.md)(Ling\CliTools\Input\InputInterface $input, [Ling\CliTools\Output\OutputInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/OutputInterface.md) $output) : void

- Inherited methods
    - public [LightCliBaseCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/__construct.md)() : void
    - public [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void
    - public [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md)(Ling\CliTools\Input\InputInterface $input, [Ling\CliTools\Output\OutputInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/OutputInterface.md) $output) : mixed
    - protected [LightCliBaseCommand::error](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/error.md)(string $msg) : void

}






Methods
==============

- [ListCommand::doRun](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/doRun.md) &ndash; Runs the command.
- [LightCliBaseCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/__construct.md) &ndash; Builds the LightCliBaseCommand instance.
- [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md) &ndash; Sets the container.
- [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md) &ndash; Runs the command.
- [LightCliBaseCommand::error](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/error.md) &ndash; Throws an exception.





Location
=============
Ling\Light_Cli\CliTools\Command\ListCommand<br>
See the source code of [Ling\Light_Cli\CliTools\Command\ListCommand](https://github.com/lingtalfi/Light_Cli/blob/master/CliTools/Command/ListCommand.php)



SeeAlso
==============
Previous class: [LightCliBaseCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand.md)<br>Next class: [LightCliApplication](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplication.md)<br>
