Ling/Light_Cli
================
2021-01-07 --> 2021-01-14




Table of contents
===========

- [HelpCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/HelpCommand.md) &ndash; The HelpCommand class.
    - [LightCliBaseCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/__construct.md) &ndash; Builds the LightCliBaseCommand instance.
    - [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md) &ndash; Sets the container.
    - [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md) &ndash; Runs the command.
- [LightCliBaseCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand.md) &ndash; The LightCliBaseCommand class.
    - [LightCliBaseCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/__construct.md) &ndash; Builds the LightCliBaseCommand instance.
    - [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md) &ndash; Sets the container.
    - [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md) &ndash; Runs the command.
- [ListCommand](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand.md) &ndash; The ListCommand class.
    - [ListCommand::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/ListCommand/__construct.md) &ndash; Builds the ListCommand instance.
    - [LightCliBaseCommand::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/setContainer.md) &ndash; Sets the container.
    - [LightCliBaseCommand::run](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Command/LightCliBaseCommand/run.md) &ndash; Runs the command.
- [LightCliApplication](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplication.md) &ndash; The LightCliApplication class.
    - [LightCliApplication::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplication/__construct.md) &ndash; Builds the Application instance.
    - [LightCliApplication::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplication/setContainer.md) &ndash; Sets the container.
    - Application::registerCommand &ndash; Registers a command with the given aliases.
    - AbstractProgram::setLogger &ndash; Sets the logger.
    - AbstractProgram::setLoggerChannel &ndash; Sets the loggerChannel.
    - AbstractProgram::setErrorIsVerbose &ndash; Sets the errorIsVerbose.
    - AbstractProgram::setUseExitStatus &ndash; Sets the useExitStatus.
    - AbstractProgram::run &ndash; Starts the interactive program.
- [LightCliApplicationInterface](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplicationInterface.md) &ndash; The LightCliApplicationInterface interface.
    - [LightCliApplicationInterface::getAppId](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplicationInterface/getAppId.md) &ndash; Returns the appId of the application.
    - [LightCliApplicationInterface::getCommands](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplicationInterface/getCommands.md) &ndash; Returns the array of commands provided by the application.
- [LightCliBaseApplication](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliBaseApplication.md) &ndash; The LightCliBaseApplication class.
    - [LightCliBaseApplication::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliBaseApplication/__construct.md) &ndash; Builds the Application instance.
    - [LightCliBaseApplication::getCommands](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliBaseApplication/getCommands.md) &ndash; Returns the array of commands provided by the application.
    - [LightCliBaseApplication::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliBaseApplication/setContainer.md) &ndash; Sets the light service container interface.
    - Application::registerCommand &ndash; Registers a command with the given aliases.
    - AbstractProgram::setLogger &ndash; Sets the logger.
    - AbstractProgram::setLoggerChannel &ndash; Sets the loggerChannel.
    - AbstractProgram::setErrorIsVerbose &ndash; Sets the errorIsVerbose.
    - AbstractProgram::setUseExitStatus &ndash; Sets the useExitStatus.
    - AbstractProgram::run &ndash; Starts the interactive program.
    - [LightCliApplicationInterface::getAppId](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliApplicationInterface/getAppId.md) &ndash; Returns the appId of the application.
- [LightCliCommandInterface](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface.md) &ndash; The LightCliCommandInterface interface.
    - [LightCliCommandInterface::getName](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getName.md) &ndash; Returns the name of the command.
    - [LightCliCommandInterface::getDescription](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getDescription.md) &ndash; Returns the description of the command.
    - [LightCliCommandInterface::getAliases](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getAliases.md) &ndash; Returns the aliases used by this command.
    - [LightCliCommandInterface::getFlags](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getFlags.md) &ndash; Returns the array of flags available for this command, which form is name => description.
    - [LightCliCommandInterface::getOptions](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getOptions.md) &ndash; Returns the array of available options for this command, which form is name => optionItem.
    - [LightCliCommandInterface::getParameters](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/CliTools/Program/LightCliCommandInterface/getParameters.md) &ndash; Returns the parameters available for this command.
- [LightCliException](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Exception/LightCliException.md) &ndash; The LightCliException class.
- [LightCliFormatHelper](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper.md) &ndash; The LightCliFormatHelper class.
    - [LightCliFormatHelper::getConceptFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getConceptFmt.md) &ndash; Returns the bashtml format for a concept, which is usually defined in the conception notes.
    - [LightCliFormatHelper::getCommandFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getCommandFmt.md) &ndash; Returns the bashtml format for a command.
    - [LightCliFormatHelper::getCommandLineOptionFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getCommandLineOptionFmt.md) &ndash; Returns the bashtml format for a command line option.
    - [LightCliFormatHelper::getCommandLineFlagFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getCommandLineFlagFmt.md) &ndash; Returns the bashtml format for a command line flag.
    - [LightCliFormatHelper::getCommandLineParameterFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getCommandLineParameterFmt.md) &ndash; Returns the bashtml format for a command line parameter.
    - [LightCliFormatHelper::getBannerFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getBannerFmt.md) &ndash; Returns the bashtml format for a banner.
    - [LightCliFormatHelper::getFileFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getFileFmt.md) &ndash; Returns the bashtml format for a file.
    - [LightCliFormatHelper::getUrlFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getUrlFmt.md) &ndash; Returns the bashtml format for an url.
    - [LightCliFormatHelper::getHeaderFmt](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Helper/LightCliFormatHelper/getHeaderFmt.md) &ndash; Returns the bashtml format for a header.
- [LightCliService](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService.md) &ndash; The LightCliService class.
    - [LightCliService::__construct](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService/__construct.md) &ndash; Builds the LightCliService instance.
    - [LightCliService::setContainer](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService/setContainer.md) &ndash; Sets the container.
    - [LightCliService::setOptions](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService/setOptions.md) &ndash; Sets the options.
    - [LightCliService::registerCliApp](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService/registerCliApp.md) &ndash; Register a light cli app.
    - [LightCliService::getCliApps](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli/Service/LightCliService/getCliApps.md) &ndash; Returns the cliApps of this instance.


Dependencies
============
- [Bat](https://github.com/lingtalfi/Bat)
- [CliTools](https://github.com/lingtalfi/CliTools)
- [Light](https://github.com/lingtalfi/Light)

