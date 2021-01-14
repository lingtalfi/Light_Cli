[Back to the Ling/Light_Cli api](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli.md)



The ListCommand class
================
2021-01-07 --> 2021-01-14






Introduction
============

The ListCommand class.
This command will display the list of all registered appId-command and/or aliases.



Class synopsis
==============


class <span class="pl-k">ListCommand</span> extends [LightCliBaseCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand.md) implements [CommandInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Command/CommandInterface.md) {

- Properties
    - private int [$indentInc](#property-indentInc) ;

- Inherited properties
    - protected [Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) [LightCliBaseCommand::$container](#property-container) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/__construct.md)() : void
    - protected [doRun](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/doRun.md)(Ling\CliTools\Input\InputInterface $input, [Ling\CliTools\Output\OutputInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/OutputInterface.md) $output) : void
    - private [indent](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/indent.md)(string $s, int $indentLevel) : string
    - private [trimLongText](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/trimLongText.md)(?string $description = null) : string
    - private [getIndexByCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/getIndexByCommand.md)(string $cmdName, array $list) : int
    - private [buildListFromCliApps](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/buildListFromCliApps.md)(array $cliApps) : array
    - private [filterMatch](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/filterMatch.md)(string $filter, string $expr) : bool

- Inherited methods
    - public [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md)([Ling\Light\ServiceContainer\LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md) $container) : void
    - public [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md)(Ling\CliTools\Input\InputInterface $input, [Ling\CliTools\Output\OutputInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/OutputInterface.md) $output) : int
    - protected [LightCliBaseCommand::error](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/error.md)(string $msg) : void

}




Properties
=============

- <span id="property-indentInc"><b>indentInc</b></span>

    This property holds the indentInc for this instance.
    
    

- <span id="property-container"><b>container</b></span>

    This property holds the container for this instance.
    
    



Methods
==============

- [ListCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/__construct.md) &ndash; Builds the ListCommand instance.
- [ListCommand::doRun](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/doRun.md) &ndash; Runs the command.
- [ListCommand::indent](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/indent.md) &ndash; Returns the given string with the first line indented by the given indentLevel, and subsequent lines indented with the given number + $indentInc.
- [ListCommand::trimLongText](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/trimLongText.md) &ndash; Returns a trimmed version of the given description.
- [ListCommand::getIndexByCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/getIndexByCommand.md) &ndash; Returns the index number of the given command.
- [ListCommand::buildListFromCliApps](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/buildListFromCliApps.md) &ndash; Builds and returns a list of all appId command and aliases.
- [ListCommand::filterMatch](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/filterMatch.md) &ndash; Returns whether the given filter matches the given expression.
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
