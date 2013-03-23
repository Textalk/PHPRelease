PHPRelease
==========

phprelease manages your package release.

Features
---------

- Automatically version bumping for composer, onion, phpdoc or class const.
- Support Composer.
- Support Onion.
- Support version parsing from PHPDoc or class const.
- Git tagging.
- Simplest config.


Usage
-----

Create phprelease.ini config file:

```ini
Steps = BumpVersion, GitTag
```


The release steps may contains script files, simply insert the script path and 
phprelease will run it for you. the return code from the script 0 means we are 
going to the next step.

```ini
Steps = BumpVersion, scripts/compile, GitTag
```
