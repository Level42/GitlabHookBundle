[< Return](https://github.com/Level42/GitlabHookBundle/blob/master/README.md "< Return")


1) Installation
----------------------------------
Download bundle in src/Level42/GitlabHookBundle

or add in your composer.json file

    "require": {
        ...
        "level42/gitlabhook-bundle": "0.1-dev"
        ...
    },
    
If you don't have Composer yet, download it following the instructions on 
[http://getcomposer.org/](http://getcomposer.org/ "http://getcomposer.org/").

2) Use
-------------------------------
Use "level42.gitlab.services.hook" service.
The method "analyseHook" take one argument : the hook message (string, not converted to json).
In return, a Hook object.

3) Changelog
-------------------------------
#### Version 0.1
Date : 2013-07-06
First stable version