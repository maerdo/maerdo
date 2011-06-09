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
php php*php php@versionphp php php php php$Idphp:php HeadTitlephp.phpphp php2php3php3php8php8php php2php0php1php0php-php1php1php-php1php9php php0php0php:php3php7php:php5php5Zphp ramonphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalonephp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Containerphp/Standalonephp.phpphp'php;

php/php*php*
php php*php Helperphp forphp settingphp andphp retrievingphp titlephp elementphp forphp HTMLphp head
php php*
php php*php php@usesphp php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HeadTitlephp extendsphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Standalone
php{
php php php php php/php*php*
php php php php php php*php Registryphp keyphp forphp placeholder
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp php=php php'Zendphp_Viewphp_Helperphp_HeadTitlephp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp autophp-translationphp isphp enabled
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_translatephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Translationphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Translatephp_Adapter
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php Defaultphp titlephp renderingphp orderphp php(iphp.ephp.php orderphp inphp whichphp eachphp titlephp attachedphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultAttachOrderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Retrievephp placeholderphp forphp titlephp elementphp andphp optionallyphp setphp state
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$title
php php php php php php*php php@paramphp php stringphp php$setType
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadTitle
php php php php php php*php/
php php php php publicphp functionphp headTitlephp(php$titlephp php=php nullphp,php php$setTypephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$setTypephp php=php=php=php nullphp php&php&php php$thisphp-php>getDefaultAttachOrderphp(php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$setTypephp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp;
php php php php php php php php php}php elseifphp php(php$setTypephp php=php=php=php nullphp php&php&php php$thisphp-php>getDefaultAttachOrderphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$setTypephp php=php php$thisphp-php>getDefaultAttachOrderphp(php)php;
php php php php php php php php php}
php php php php php php php php php$titlephp php=php php(stringphp)php php$titlephp;
php php php php php php php php ifphp php(php$titlephp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php ifphp php(php$setTypephp php=php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:SETphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setphp(php$titlephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$setTypephp php=php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:PREPENDphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>prependphp(php$titlephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>appendphp(php$titlephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp defaultphp orderphp tophp addphp titles
php php php php php php*
php php php php php php*php php@paramphp stringphp php$setType
php php php php php php*php/
php php php php publicphp functionphp setDefaultAttachOrderphp(php$setTypephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$setTypephp,php arrayphp(
php php php php php php php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:APPENDphp,
php php php php php php php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:SETphp,
php php php php php php php php php php php php Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstractphp:php:PREPEND
php php php php php php php php php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php"Youphp mustphp usephp aphp validphp attachphp orderphp:php php'PREPENDphp'php,php php'APPENDphp'php orphp php'SETphp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultAttachOrderphp php=php php$setTypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp attachphp orderphp,php ifphp anyphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDefaultAttachOrderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultAttachOrderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp translationphp Adapterphp forphp translation
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp php$translate
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadTitle
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatephp)
php php php php php{
php php php php php php php php ifphp php(php$translatephp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatephp;
php php php php php php php php php}php elseifphp php(php$translatephp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatephp-php>getAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php"Youphp mustphp setphp anphp instancephp ofphp Zendphp_Translatephp orphp Zendphp_Translatephp_Adapterphp"php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp translationphp object
php php php php php php*
php php php php php php*php Ifphp nonephp isphp currentlyphp registeredphp,php attemptsphp tophp pullphp itphp fromphp thephp registry
php php php php php php*php usingphp thephp keyphp php'Zendphp_Translatephp'php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_translatorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Translatephp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setTranslatorphp(Zendphp_Registryphp:php:getphp(php'Zendphp_Translatephp'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablesphp translation
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadTitle
php php php php php php*php/
php php php php publicphp functionphp enableTranslationphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_translatephp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disablesphp translation
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_HeadTitle
php php php php php php*php/
php php php php publicphp functionphp disableTranslationphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_translatephp php=php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Turnphp helperphp intophp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$indent
php php php php php php*php php@paramphp php stringphp|nullphp php$locale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$indentphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$indentphp php=php php(nullphp php!php=php=php php$indentphp)
php php php php php php php php php php php php php php php php php?php php$thisphp-php>getWhitespacephp(php$indentphp)
php php php php php php php php php php php php php php php php php:php php$thisphp-php>getIndentphp(php)php;

php php php php php php php php php$itemsphp php=php arrayphp(php)php;

php php php php php php php php ifphp(php$thisphp-php>php_translatephp php&php&php php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$itemsphp[php]php php=php php$translatorphp-php>translatephp(php$itemphp,php php$localephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$itemsphp[php]php php=php php$itemphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$outputphp php=php php'php'php;
php php php php php php php php ifphp(php(php$prefixphp php=php php$thisphp-php>getPrefixphp(php)php)php)php php{
php php php php php php php php php php php php php$outputphp php php.php=php php$prefixphp;
php php php php php php php php php}
php php php php php php php php php$outputphp php.php=php implodephp(php$separatorphp,php php$itemsphp)php;
php php php php php php php php ifphp(php(php$postfixphp php=php php$thisphp-php>getPostfixphp(php)php)php)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$postfixphp;
php php php php php php php php php}

php php php php php php php php php$outputphp php=php php(php$thisphp-php>php_autoEscapephp)php php?php php$thisphp-php>php_escapephp(php$outputphp)php php:php php$outputphp;

php php php php php php php php returnphp php$indentphp php.php php'php<titlephp>php'php php.php php$outputphp php.php php'<php/titlephp>php'php;
php php php php php}
php}
