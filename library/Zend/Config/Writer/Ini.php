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
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Iniphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Configphp_Writer
php php*php/
requirephp_oncephp php'Zendphp/Configphp/Writerphp/FileAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Writerphp_Iniphp extendsphp Zendphp_Configphp_Writerphp_FileAbstract
php{
php php php php php/php*php*
php php php php php php*php Stringphp thatphp separatesphp nestingphp levelsphp ofphp configurationphp dataphp identifiers
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_nestSeparatorphp php=php php'php.php'php;

php php php php php/php*php*
php php php php php php*php Ifphp truephp thephp iniphp stringphp isphp renderedphp inphp thephp globalphp namespacephp withoutphp sectionsphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_renderWithoutSectionsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Setphp thephp nestphp separator
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@returnphp Zendphp_Configphp_Writerphp_Ini
php php php php php php*php/
php php php php publicphp functionphp setNestSeparatorphp(php$separatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_nestSeparatorphp php=php php$separatorphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ifphp renderingphp shouldphp occourphp withoutphp sectionsphp orphp notphp.
php php php php php php*
php php php php php php*php Ifphp setphp tophp truephp,php thephp INIphp filephp isphp renderedphp withoutphp sectionsphp completely
php php php php php php*php intophp thephp globalphp namespacephp ofphp thephp INIphp filephp.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$withoutSections
php php php php php php*php php@returnphp Zendphp_Configphp_Writerphp_Ini
php php php php php php*php/
php php php php publicphp functionphp setRenderWithoutSectionsphp(php$withoutSectionsphp=truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_renderWithoutSectionsphp php=php php(boolphp)php$withoutSectionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp Zendphp_Configphp intophp aphp INIphp configphp stringphp.
php php php php php php*
php php php php php php*php php@sincephp php1php.php1php0
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$iniStringphp php php php=php php'php'php;
php php php php php php php php php$extendsphp php php php php php=php php$thisphp-php>php_configphp-php>getExtendsphp(php)php;
php php php php php php php php php$sectionNamephp php=php php$thisphp-php>php_configphp-php>getSectionNamephp(php)php;

php php php php php php php php ifphp(php$thisphp-php>php_renderWithoutSectionsphp php=php=php truephp)php php{
php php php php php php php php php php php php php$iniStringphp php.php=php php$thisphp-php>php_addBranchphp(php$thisphp-php>php_configphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$sectionNamephp)php)php php{
php php php php php php php php php php php php php$iniStringphp php.php=php php'php[php'php php.php php$sectionNamephp php.php php'php]php'php php.php php"php\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>php_addBranchphp(php$thisphp-php>php_configphp)
php php php php php php php php php php php php php php php php php php php php php php php php.php php php"php\nphp"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_sortRootElementsphp(php$thisphp-php>php_configphp)php;
php php php php php php php php php php php php foreachphp php(php$configphp asphp php$sectionNamephp php=php>php php$dataphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php(php$dataphp instanceofphp Zendphp_Configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$iniStringphp php.php=php php$sectionName
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php php=php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>php_prepareValuephp(php$dataphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"php\nphp"php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$extendsphp[php$sectionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$sectionNamephp php.php=php php'php php:php php'php php.php php$extendsphp[php$sectionNamephp]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$iniStringphp php.php=php php'php[php'php php.php php$sectionNamephp php.php php'php]php'php php.php php"php\nphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>php_addBranchphp(php$dataphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"php\nphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$iniStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp branchphp tophp anphp INIphp stringphp recursively
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addBranchphp(Zendphp_Configphp php$configphp,php php$parentsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$iniStringphp php=php php'php'php;

php php php php php php php php foreachphp php(php$configphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$groupphp php=php arrayphp_mergephp(php$parentsphp,php arrayphp(php$keyphp)php)php;

php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$iniStringphp php.php=php php$thisphp-php>php_addBranchphp(php$valuephp,php php$groupphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$iniStringphp php.php=php implodephp(php$thisphp-php>php_nestSeparatorphp,php php$groupphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php'php php=php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>php_prepareValuephp(php$valuephp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$iniStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp aphp valuephp forphp INI
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_prepareValuephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_integerphp(php$valuephp)php php|php|php isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}php elseifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php(php$valuephp php?php php'truephp'php php:php php'falsephp'php)php;
php php php php php php php php php}php elseifphp php(strposphp(php$valuephp,php php'php"php'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php'php"php'php php.php php$valuephp php.php php php'php"php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Configphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Valuephp canphp notphp containphp doublephp quotesphp php"php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Rootphp elementsphp thatphp arephp notphp assignedphp tophp anyphp sectionphp needsphp tophp be
php php php php php php*php onphp thephp topphp ofphp configphp.
php php php php php php*
php php php php php php*php php@seephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/issuesphp/browsephp/ZFphp-php6php2php8php9
php php php php php php*php php@paramphp php Zendphp_Config
php php php php php php*php php@returnphp Zendphp_Config
php php php php php php*php/
php php php php protectedphp functionphp php_sortRootElementsphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$configArrayphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php$sectionsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php removephp sectionsphp fromphp configphp array
php php php php php php php php foreachphp php(php$configArrayphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$sectionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php unsetphp(php$configArrayphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php readdphp sectionsphp tophp thephp end
php php php php php php php php foreachphp php(php$sectionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$configArrayphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Configphp(php$configArrayphp)php;
php php php php php}
php}
