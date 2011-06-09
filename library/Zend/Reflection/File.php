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
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php9php0php4php php2php0php1php0php-php0php2php-php0php4php php1php6php:php1php8php:php1php8Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Class
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Classphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Function
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Functionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Filephp implementsphp Reflector
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filepathphp php php php php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_docCommentphp php php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_startLinephp php php php php php php php=php php1php;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_endLinephp php php php php php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp[php]
php php php php php php*php/
php php php php protectedphp php$php_requiredFilesphp php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Reflectionphp_Classphp[php]
php php php php php php*php/
php php php php protectedphp php$php_classesphp php php php php php php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Reflectionphp_Functionphp[php]
php php php php php php*php/
php php php php protectedphp php$php_functionsphp php php php php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentsphp php php php php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filephp)
php php php php php{
php php php php php php php php php$fileNamephp php=php php$filephp;

php php php php php php php php ifphp php(php(php$fileRealpathphp php=php realpathphp(php$fileNamephp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$fileRealpathphp php=php selfphp:php:findRealpathInIncludePathphp(php$filephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$fileRealpathphp php|php|php php!inphp_arrayphp(php$fileRealpathphp,php getphp_includedphp_filesphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Filephp php'php php.php php$filephp php.php php'php mustphp bephp requiredphp beforephp itphp canphp bephp reflectedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fileNamephp php=php php$fileRealpathphp;
php php php php php php php php php$thisphp-php>php_contentsphp php=php filephp_getphp_contentsphp(php$thisphp-php>php_fileNamephp)php;
php php php php php php php php php$thisphp-php>php_reflectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp realpathphp ofphp filephp basedphp onphp includephp_path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fileName
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp findRealpathInIncludePathphp(php$fileNamephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php$includePathsphp php=php Zendphp_Loaderphp:php:explodeIncludePathphp(php)php;
php php php php php php php php whilephp php(countphp(php$includePathsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$filePathphp php=php arrayphp_shiftphp(php$includePathsphp)php php.php DIRECTORYphp_SEPARATORphp php.php php$fileNamephp;

php php php php php php php php php php php php ifphp php(php php(php$foundRealpathphp php=php realpathphp(php$filePathphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$foundRealpathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Export
php php php php php php*
php php php php php php*php Requiredphp byphp thephp Reflectorphp interfacephp.
php php php php php php*
php php php php php php*php php@todophp php php Whatphp shouldphp thisphp dophp?
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp exportphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp filephp namephp ofphp thephp reflectedphp file
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFileNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fileNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp startphp linephp php-php Alwaysphp php1php,php stayingphp consistentphp withphp thephp Reflectionphp API
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getStartLinephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_startLinephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp endphp linephp php/php numberphp ofphp lines
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getEndLinephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_endLinephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp docphp comment
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDocCommentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docCommentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp docblock
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Reflectionphp classphp tophp use
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp getDocblockphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Docblockphp'php)
php php php php php{
php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp)php;
php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Docblockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Docblockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp reflectionphp classesphp ofphp thephp classesphp foundphp insidephp thisphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp usephp forphp instances
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Classphp instances
php php php php php php*php/
php php php php publicphp functionphp getClassesphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Classphp'php)
php php php php php{
php php php php php php php php php$classesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_classesphp asphp php$classphp)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$classphp)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$classesphp[php]php php=php php$instancephp;
php php php php php php php php php}
php php php php php php php php returnphp php$classesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp reflectionphp functionsphp ofphp thephp functionsphp foundphp insidephp thisphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp usephp forphp instances
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Functions
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Functionphp'php)
php php php php php{
php php php php php php php php php$functionsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_functionsphp asphp php$functionphp)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$functionphp)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Functionphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Functionphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$functionsphp[php]php php=php php$instancephp;
php php php php php php php php php}
php php php php php php php php returnphp php$functionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp reflectionphp classphp ofphp aphp givenphp classphp foundphp inphp thisphp file
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php$name
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Reflectionphp classphp tophp usephp whenphp creatingphp reflectionphp instance
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Class
php php php php php php*php php@throwsphp Zendphp_Reflectionphp_Exceptionphp forphp invalidphp classphp namephp orphp invalidphp reflectionphp class
php php php php php php*php/
php php php php publicphp functionphp getClassphp(php$namephp php=php nullphp,php php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Classphp'php)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php resetphp(php$thisphp-php>php_classesphp)php;
php php php php php php php php php php php php php$selectedphp php=php currentphp(php$thisphp-php>php_classesphp)php;
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$selectedphp)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp givenphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$instancephp;
php php php php php php php php php}

php php php php php php php php ifphp php(inphp_arrayphp(php$namephp,php php$thisphp-php>php_classesphp)php)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp givenphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$instancephp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Classphp byphp namephp php'php php.php php$namephp php.php php'php notphp foundphp.php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fullphp contentsphp ofphp file
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contentsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp tophp string
php php php php php php*
php php php php php php*php Requiredphp byphp thephp Reflectorphp interface
php php php php php php*
php php php php php php*php php@todophp php php Whatphp shouldphp thisphp serializationphp lookphp likephp?
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Thisphp methodphp doesphp thephp workphp ofphp php"reflectingphp"php thephp file
php php php php php php*
php php php php php php*php Usesphp PHPphp'sphp tokenizerphp tophp performphp filephp reflectionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_reflectphp(php)
php php php php php{
php php php php php php php php php$contentsphp php=php php$thisphp-php>php_contentsphp;
php php php php php php php php php$tokensphp php php php=php tokenphp_getphp_allphp(php$contentsphp)php;

php php php php php php php php php$functionTrappedphp php=php falsephp;
php php php php php php php php php$classTrappedphp php php php php=php falsephp;
php php php php php php php php php$requireTrappedphp php php=php falsephp;
php php php php php php php php php$openBracesphp php php php php php php=php php0php;

php php php php php php php php php$thisphp-php>php_checkFileDocBlockphp(php$tokensphp)php;

php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php*php Tokensphp arephp charactersphp representingphp symbolsphp orphp arrays
php php php php php php php php php php php php php php*php representingphp stringsphp.php Thephp keysphp/valuesphp inphp thephp arraysphp are
php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php*php php-php php0php php=php>php tokenphp idphp,
php php php php php php php php php php php php php php*php php-php php1php php=php>php stringphp,
php php php php php php php php php php php php php php*php php-php php2php php=php>php linephp number
php php php php php php php php php php php php php php*
php php php php php php php php php php php php php php*php Tokenphp IDphp'sphp arephp explainedphp herephp:
php php php php php php php php php php php php php php*php httpphp:php/php/wwwphp.phpphp.netphp/manualphp/enphp/tokensphp.phpphp.
php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$tokenphp)php)php php{
php php php php php php php php php php php php php php php php php$typephp php php php php=php php$tokenphp[php0php]php;
php php php php php php php php php php php php php php php php php$valuephp php php php=php php$tokenphp[php1php]php;
php php php php php php php php php php php php php php php php php$lineNumphp php=php php$tokenphp[php2php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Itphp'sphp aphp symbol
php php php php php php php php php php php php php php php php php/php/php Maintainphp thephp countphp ofphp openphp braces
php php php php php php php php php php php php php php php php ifphp php(php$tokenphp php=php=php php'php{php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$openBracesphp+php+php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$tokenphp php=php=php php'php}php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$openBracesphp-php-php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php php/php/php Namephp ofphp something
php php php php php php php php php php php php php php php php casephp Tphp_STRINGphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$functionTrappedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_functionsphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$functionTrappedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$classTrappedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_classesphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$classTrappedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php continuephp;

php php php php php php php php php php php php php php php php php/php/php Requiredphp filephp namesphp arephp Tphp_CONSTANTphp_ENCAPSEDphp_STRING
php php php php php php php php php php php php php php php php casephp Tphp_CONSTANTphp_ENCAPSEDphp_STRINGphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$requireTrappedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_requiredFilesphp[php]php php=php php$valuephp php.php"php\nphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php$requireTrappedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php continuephp;

php php php php php php php php php php php php php php php php php/php/php Functions
php php php php php php php php php php php php php php php php casephp Tphp_FUNCTIONphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$openBracesphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$functionTrappedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php/php/php Classes
php php php php php php php php php php php php php php php php casephp Tphp_CLASSphp:
php php php php php php php php php php php php php php php php casephp Tphp_INTERFACEphp:
php php php php php php php php php php php php php php php php php php php php php$classTrappedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php/php/php Allphp typesphp ofphp requires
php php php php php php php php php php php php php php php php casephp Tphp_REQUIREphp:
php php php php php php php php php php php php php php php php casephp Tphp_REQUIREphp_ONCEphp:
php php php php php php php php php php php php php php php php casephp Tphp_INCLUDEphp:
php php php php php php php php php php php php php php php php casephp Tphp_INCLUDEphp_ONCEphp:
php php php php php php php php php php php php php php php php php php php php php$requireTrappedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php/php/php Defaultphp casephp:php dophp nothing
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_endLinephp php=php countphp(explodephp(php"php\nphp"php,php php$thisphp-php>php_contentsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp php/php checkphp aphp filephp levelphp docblock
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tokensphp Arrayphp ofphp tokenizerphp tokens
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkFileDocBlockphp(php$tokensphp)php php{
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php$typephp php php php php=php php$tokenphp[php0php]php;
php php php php php php php php php php php php php$valuephp php php php=php php$tokenphp[php1php]php;
php php php php php php php php php php php php php$lineNumphp php=php php$tokenphp[php2php]php;
php php php php php php php php php php php php ifphp(php(php$typephp php=php=php Tphp_OPENphp_TAGphp)php php|php|php php(php$typephp php=php=php Tphp_WHITESPACEphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}php elseifphp php(php$typephp php=php=php Tphp_DOCphp_COMMENTphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_docCommentphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_startLinephp php php=php php$lineNumphp php+php substrphp_countphp(php$valuephp,php php"php\nphp"php)php php+php php1php;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Onlyphp whitespacephp isphp allowedphp beforephp filephp docblocks
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
