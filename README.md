Light_Cli
===========
2021-01-07 -> 2021-01-14


A command line interface for the light framework.



This is a [Light plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).

This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.

```bash
uni import Ling/Light_Cli
```

Or just download it and place it where you want otherwise.






Summary
===========

- [Light_Cli api](https://github.com/lingtalfi/Light_Cli/blob/master/doc/api/Ling/Light_Cli.md) (generated
  with [DocTools](https://github.com/lingtalfi/DocTools))
- [Services](#services)
- Pages
    - [Conception notes](https://github.com/lingtalfi/Light_Cli/blob/master/doc/pages/conception-notes.md)

Images
=========

![light cli list command example](https://lingtalfi.com/img/universe/Light_Cli/light-cli-list.png)




Services
=========


Here is an example of the service configuration:

```yaml
cli:
    instance: Ling\Light_Cli\Service\LightCliService
    methods:
        setContainer:
            container: @container()
        setOptions:
            options: [ ]







```

History Log
=============

- 1.0.0 -- 2021-01-07

    - initial commit