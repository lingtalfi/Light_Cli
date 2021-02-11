Light cli, conception notes
==========
2021-01-05 -> 2021-02-02




The major ideas behind **light cli** are:

- creating only ONE script for all cli apps, instead of one script per cli app
- having access to the light (initialized) instance, from the cli apps
- a create app command



Preparation
---------
2021-01-05 -> 2021-01-14

Before you can use our cli, we recommend that you do yourself a favor and add this alias to your bash/shell environment:

```sh
alias light='php -f ./scripts/Ling/Light_Cli/light-cli.php -- '
```

That way, you just need to **cd** to your application and type your **light** commands.

Everything in this document assumes that you have this shortcut ready.

If you prefer to not add that alias, you can still follow our document, but everytime we use the **light** command, you'll have to manually
replace it with `php -f ./scripts/Ling/Light_Cli/light-cli.php -- ` every time.



Usage theory
------
2021-01-05 -> 2021-01-14


The **light** command (alias to our script as described in the [preparation section](#preparation)) can be used in the following manners:

- light \<appId> <command> (\<args>)?
- light \<alias> (\<args>)?
- light \<specialExpression>


The first form is the most common.
The second form is internally transposed to the first form, but it allows for less verbose commands. 
The third form is reserved for our plugin's own commands, such as **help** for instance.




Some fictive examples of the first form:

- light lpi import Ling.Bat
- light mailer send johndoe@gmail.com --subject="Long time no see" --message="Hi there, how is it going? Long time no see..."


Some fictive examples of the second form:

- light import Ling.Bat
- light sendMail johndoe@gmail.com --subject="Long time no see" --message="Hi there, how is it going? Long time no see..."


Some fictive examples of the third form:

- light help



Plugin authors register their **cli app** using an identifier (**appId**).

Plugin authors also register their aliases if any, so for instance an author could register the following alias:

- import = lpi import


Different plugin authors could potentially register the same alias, for instance: 

- import = appId1 import
- import = appId2 doImportItem


When this happens, we ask the user to make up his/her mind and select the command he/she wants to execute. 





Usage commands
---------
2021-01-05 -> 2021-02-02


### help

displays a help message.

### list

- list \<filter>?: displays the list of registered third party application commands and aliases.
  - Arguments:
    - Parameters:
        - \<filter>: filters the list using either an int or a string.
            - If it's a string, it filters the list using that string. We search in **appId commands** and **aliases**.
                 By default, the filter expression matches any part of the string.
                To make it match only the beginning of the string, prefix the string with the dollar symbol ($).
            - If it's an int, it's a number given by this list command. Each number represents a unique appId command or alias.
    - Flags:
        - -v: verbose, whether to display all the details about each command (flags, options, parameters, etc...).
  
    
### app_init

- app_init: builds a light application in the current directory
  
    







Plugin authors
-------------
2021-01-05 -> 2021-01-08


Plugin authors, to get started, create your [CliTools](https://github.com/lingtalfi/CliTools) program, and implement our **LightCliApplicationInterface** interface.
Read the source code of the interface to understand what it's all about.

When our application will call yours, it will pass the following:

- input: a [CommandLineInput](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Input/CommandLineInput.md) instance 
- output: an [Output](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/Output.md) instance 


Once this is done, you just need to register your cli application, using the regular service registration system in light, and using our main service's **registerCliApp** method.






