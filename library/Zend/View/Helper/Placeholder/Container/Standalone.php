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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Standalonephp.phpphp php2php0php1php4php3php php2php0php1php0php-php0php1php-php0php8php php1php5php:php1php7php:php1php1Zphp matthewphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Registryphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Basephp classphp forphp targettedphp placeholderphp helpers
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalonephp extendsphp Zendphp_Viewphp_Helperphp_Abstractphp implementsphp IteratorAggregatephp,php Countablephp,php ArrayAccess
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php php php php php php*php/
php php php php protectedphp php$php_registryphp;

php php php php php/php*php*
php php php php php php*php Registryphp keyphp underphp whichphp containerphp registersphp itself
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp;

php php php php php/php*php*
php php php php php php*php Flagphp wheterphp tophp automaticallyphp escapephp outputphp,php mustphp alsophp be
php php php php php php*php enforcedphp inphp thephp childphp classphp ifphp php_php_toStringphp/toStringphp isphp overriden
php php php php php php*php php@varphp book
php php php php php php*php/
php php php php protectedphp php$php_autoEscapephp php=php truephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setRegistryphp(Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp:php:getRegistryphp(php)php)php;
php php php php php php php php php$thisphp-php>setContainerphp(php$thisphp-php>getRegistryphp(php)php-php>getContainerphp(php$thisphp-php>php_regKeyphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp registry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php php php php php php*php/
php php php php publicphp functionphp getRegistryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp registryphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp php$registry
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp autophp escapingphp shouldphp bephp used
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$autoEscapephp whetherphp orphp notphp tophp autophp escapephp output
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php php php php php*php/
php php php php publicphp functionphp setAutoEscapephp(php$autoEscapephp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_autoEscapephp php=php php(php$autoEscapephp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp whetherphp autoEscapingphp isphp enabledphp orphp disabled
php php php php php php*
php php php php php php*php returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAutoEscapephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoEscapephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Escapephp aphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_escapephp(php$stringphp)
php php php php php{
php php php php php php php php php$encphp php=php php'UTFphp-php8php'php;
php php php php php php php php ifphp php(php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Interface
php php php php php php php php php php php php php&php&php methodphp_existsphp(php$thisphp-php>viewphp,php php'getEncodingphp'php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$encphp php=php php$thisphp-php>viewphp-php>getEncodingphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp htmlspecialcharsphp(php(stringphp)php php$stringphp,php ENTphp_COMPATphp,php php$encphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp containerphp onphp whichphp tophp operate
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp php$container
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php php php php php*php/
php php php php publicphp functionphp setContainerphp(Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp php$containerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp placeholderphp container
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getContainerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php setphp propertyphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php php$containerphp[php$keyphp]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php retrievephp property
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php ifphp php(issetphp(php$containerphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$containerphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php checkphp ifphp propertyphp isphp set
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php returnphp issetphp(php$containerphp[php$keyphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php unsetphp property
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php ifphp php(issetphp(php$containerphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$containerphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overload
php php php php php php*
php php php php php php*php Proxyphp tophp containerphp methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php ifphp php(methodphp_existsphp(php$containerphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php$returnphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php$containerphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php php php php ifphp php(php$returnphp php=php=php=php php$containerphp)php php{
php php php php php php php php php php php php php php php php php/php/php Ifphp thephp containerphp isphp returnedphp,php wephp reallyphp wantphp thephp currentphp object
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Methodphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp existphp'php)php;
php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php throwphp php$ephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Stringphp representation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp stringphp representation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php returnphp countphp(php$containerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php offsetExists
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetExistsphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php offsetGet
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetGetphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php offsetSet
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetSetphp(php$offsetphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php offsetUnset
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>offsetUnsetphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php IteratorAggregatephp:php getphp Iterator
php php php php php php*
php php php php php php*php php@returnphp Iterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContainerphp(php)php-php>getIteratorphp(php)php;
php php php php php}
php}
