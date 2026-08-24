# Custom Stubs

Stubs are generated directly from the source using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP >=8.2

## Setup

Generate stubs and excludes with single command

```shell
bash boot.sh
```

## What this package ships

Consumers install `generated/*.json` only — lists of class, function, interface,
trait and constant names for [PHP-Scoper](https://github.com/humbug/php-scoper)
to leave unprefixed.

Everything else in this repository (`source/`, `stubs/`, the finders and the
shell scripts) is how those lists are produced, and is excluded from the
distributed archive by `.gitattributes`.

## Licence

This package is licensed **GPL-2.0-or-later**. See [LICENSE](LICENSE).

### Why

`stubs/*.php` are generated from the plugins listed in `source/composer.json`
and reproduce their signatures and docblocks verbatim. That makes them
derivative works of code that is itself GPL-2.0-or-later:

| Source | Licence |
| --- | --- |
| WordPress | GPL-2.0-or-later |
| WooCommerce | GPL-3.0-or-later |
| The Events Calendar, Event Tickets | GPL-2.0-or-later |
| Gravity Forms | GPL-2.0-or-later |
| CMB2 | GPL-2.0-or-later |
| Message Board | GPL-2.0-or-later |
| Knowledgebase | GPL-2.0-or-later |

The generated JSON files list symbol *names* only and carry no code, but they
ship under the same licence for simplicity.

### Third-party notice

This package repackages a subset of other people's work. It is useless without
the plugins it describes, and it is not affiliated with or endorsed by any of
them. Copyright in each stub file remains with the original plugin's authors;
the `@author` and `@copyright` tags in those files are preserved deliberately.

The generator scripts (`boot.sh`, `generate.sh`, `finder-*.php`,
`generate-excludes.inc.php`) are original work and are covered by the same
licence.
