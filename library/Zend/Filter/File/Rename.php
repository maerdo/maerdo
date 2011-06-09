<php?php
php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webphp atphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Renamephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Filephp_Renamephp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Internalphp arrayphp ofphp arrayphp(sourcephp,php targetphp,php overwritephp)
php php php php php php*php/
php php php php protectedphp php$php_filesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php Optionsphp argumentphp mayphp bephp eitherphp aphp stringphp,php aphp Zendphp_Configphp objectphp,php orphp anphp arrayphp.
php php php php php php*php Ifphp anphp arrayphp orphp Zendphp_Configphp objectphp,php itphp acceptsphp thephp followingphp keysphp:
php php php php php php*php php'sourcephp'php php php php php=php>php Sourcephp filenamephp orphp directoryphp whichphp willphp bephp renamed
php php php php php php*php php'targetphp'php php php php php=php>php Targetphp filenamephp orphp directoryphp,php thephp newphp namephp ofphp thephp sourcefile
php php php php php php*php php'overwritephp'php php=php>php Shallphp existingphp filesphp bephp overwrittenphp php?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Targetphp filephp orphp directoryphp tophp bephp renamed
php php php php php php*php php@paramphp php stringphp php$targetphp Sourcephp filenamephp orphp directoryphp php(deprecatedphp)
php php php php php php*php php@paramphp php boolphp php$overwritephp Shouldphp existingphp filesphp bephp overwrittenphp php(deprecatedphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'targetphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Invalidphp optionsphp argumentphp providedphp tophp filterphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php1php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php$sourcephp php php php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php$overwritephp php=php falsephp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argvphp)php)php php{
php php php php php php php php php php php php php php php php php$overwritephp php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$optionsphp[php'sourcephp'php]php php php php php=php php$sourcephp;
php php php php php php php php php php php php php$optionsphp[php'overwritephp'php]php php=php php$overwritephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFilephp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp filesphp tophp renamephp andphp theirphp newphp namephp andphp location
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFilephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp filephp orphp directoryphp asphp targetphp,php deletingphp existingphp ones
php php php php php php*
php php php php php php*php Arrayphp acceptsphp thephp followingphp keysphp:
php php php php php php*php php'sourcephp'php php php php php=php>php Sourcephp filenamephp orphp directoryphp whichphp willphp bephp renamed
php php php php php php*php php'targetphp'php php php php php=php>php Targetphp filenamephp orphp directoryphp,php thephp newphp namephp ofphp thephp sourcefile
php php php php php php*php php'overwritephp'php php=php>php Shallphp existingphp filesphp bephp overwrittenphp php?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Oldphp filephp orphp directoryphp tophp bephp rewritten
php php php php php php*php php@returnphp Zendphp_Filterphp_Filephp_Rename
php php php php php php*php/
php php php php publicphp functionphp setFilephp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>addFilephp(php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp newphp filephp orphp directoryphp asphp targetphp tophp thephp existingphp ones
php php php php php php*
php php php php php php*php Arrayphp acceptsphp thephp followingphp keysphp:
php php php php php php*php php'sourcephp'php php php php php=php>php Sourcephp filenamephp orphp directoryphp whichphp willphp bephp renamed
php php php php php php*php php'targetphp'php php php php php=php>php Targetphp filenamephp orphp directoryphp,php thephp newphp namephp ofphp thephp sourcefile
php php php php php php*php php'overwritephp'php php=php>php Shallphp existingphp filesphp bephp overwrittenphp php?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Oldphp filephp orphp directoryphp tophp bephp rewritten
php php php php php php*php php@returnphp Zendphp_Filterphp_Filephp_Rename
php php php php php php*php/
php php php php publicphp functionphp addFilephp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'targetphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp php(php'Invalidphp optionsphp tophp renamephp filterphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_convertOptionsphp(php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp onlyphp thephp newphp filenamephp withoutphp movingphp it
php php php php php php*php Butphp existingphp filesphp willphp bephp erasedphp whenphp thephp overwritephp optionphp isphp true
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp php Fullphp pathphp ofphp filephp tophp change
php php php php php php*php php@paramphp php booleanphp php$sourcephp Returnphp internalphp informations
php php php php php php*php php@returnphp stringphp Thephp newphp filenamephp whichphp hasphp beenphp set
php php php php php php*php/
php php php php publicphp functionphp getNewNamephp(php$valuephp,php php$sourcephp php=php falsephp)
php php php php php{
php php php php php php php php php$filephp php=php php$thisphp-php>php_getFileNamephp(php$valuephp)php;
php php php php php php php php ifphp php(php$filephp[php'sourcephp'php]php php=php=php php$filephp[php'targetphp'php]php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!filephp_existsphp(php$filephp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$filephp[php'overwritephp'php]php php=php=php truephp)php php&php&php php(filephp_existsphp(php$filephp[php'targetphp'php]php)php)php)php php{
php php php php php php php php php php php php unlinkphp(php$filephp[php'targetphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(filephp_existsphp(php$filephp[php'targetphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(sprintfphp(php"Filephp php'php%sphp'php couldphp notphp bephp renamedphp.php Itphp alreadyphp existsphp.php"php,php php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$sourcephp)php php{
php php php php php php php php php php php php returnphp php$filephp;
php php php php php php php php php}

php php php php php php php php returnphp php$filephp[php'targetphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Renamesphp thephp filephp php$valuephp tophp thephp newphp namephp setphp before
php php php php php php*php Returnsphp thephp filephp php$valuephp,php removingphp allphp butphp digitphp characters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Fullphp pathphp ofphp filephp tophp change
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php php@returnphp stringphp Thephp newphp filenamephp whichphp hasphp beenphp setphp,php orphp falsephp whenphp therephp werephp errors
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$filephp php php php=php php$thisphp-php>getNewNamephp(php$valuephp,php truephp)php;
php php php php php php php php ifphp php(isphp_stringphp(php$filephp)php)php php{
php php php php php php php php php php php php returnphp php$filephp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php renamephp(php$filephp[php'sourcephp'php]php,php php$filephp[php'targetphp'php]php)php;

php php php php php php php php ifphp php(php$resultphp php=php=php=php truephp)php php{
php php php php php php php php php php php php returnphp php$filephp[php'targetphp'php]php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(sprintfphp(php"Filephp php'php%sphp'php couldphp notphp bephp renamedphp.php Anphp errorphp occuredphp whilephp processingphp thephp filephp.php"php,php php$valuephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp forphp creatingphp thephp filephp array
php php php php php php*php Supportsphp singlephp andphp nestedphp arrays
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_convertOptionsphp(php$optionsphp)php php{
php php php php php php php php php$filesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_convertOptionsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php"sourcephp"php:
php php php php php php php php php php php php php php php php php php php php php$filesphp[php'sourcephp'php]php php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'targetphp'php php:
php php php php php php php php php php php php php php php php php php php php php$filesphp[php'targetphp'php]php php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'overwritephp'php php:
php php php php php php php php php php php php php php php php php php php php php$filesphp[php'overwritephp'php]php php=php php(booleanphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$filesphp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php php$filesphp[php'sourcephp'php]php php=php php'php*php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$filesphp[php'targetphp'php]php)php)php php{
php php php php php php php php php php php php php$filesphp[php'targetphp'php]php php=php php'php*php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$filesphp[php'overwritephp'php]php)php)php php{
php php php php php php php php php php php php php$filesphp[php'overwritephp'php]php php=php falsephp;
php php php php php php php php php}

php php php php php php php php php$foundphp php=php falsephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp[php'sourcephp'php]php php=php=php php$filesphp[php'sourcephp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$keyphp]php php=php php$filesphp;
php php php php php php php php php php php php php php php php php$foundphp php php php php php php php php php php php php php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$foundphp)php php{
php php php php php php php php php php php php php$countphp php php php php php php php php php php php php php php php php=php countphp(php$thisphp-php>php_filesphp)php;
php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$countphp]php php=php php$filesphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp resolvephp thephp requestedphp source
php php php php php php*php andphp returnphp allphp otherphp relatedphp parameters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filephp Filenamephp tophp getphp thephp informationsphp for
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getFileNamephp(php$filephp)
php php php php php{
php php php php php php php php php$renamephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp[php'sourcephp'php]php php=php=php php'php*php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$renamephp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$renamephp php php php php php php php php php php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$renamephp[php'sourcephp'php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$valuephp[php'sourcephp'php]php php=php=php php$filephp)php php{
php php php php php php php php php php php php php php php php php$renamephp php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$renamephp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$filephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$renamephp[php'targetphp'php]php)php orphp php(php$renamephp[php'targetphp'php]php php=php=php php'php*php'php)php)php php{
php php php php php php php php php php php php php$renamephp[php'targetphp'php]php php=php php$renamephp[php'sourcephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_dirphp(php$renamephp[php'targetphp'php]php)php)php php{
php php php php php php php php php php php php php$namephp php=php basenamephp(php$renamephp[php'sourcephp'php]php)php;
php php php php php php php php php php php php php$lastphp php=php php$renamephp[php'targetphp'php]php[strlenphp(php$renamephp[php'targetphp'php]php)php php-php php1php]php;
php php php php php php php php php php php php ifphp php(php(php$lastphp php!php=php php'php/php'php)php andphp php(php$lastphp php!php=php php'php\php\php'php)php)php php{
php php php php php php php php php php php php php php php php php$renamephp[php'targetphp'php]php php.php=php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$renamephp[php'targetphp'php]php php.php=php php$namephp;
php php php php php php php php php}

php php php php php php php php returnphp php$renamephp;
php php php php php}
php}
