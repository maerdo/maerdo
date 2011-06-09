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
php php*php php@versionphp php php php php$Idphp:php PregReplacephp.phpphp php2php1php0php8php5php php2php0php1php0php-php0php2php-php1php8php php2php1php:php0php8php:php3php9Zphp thomasphp php$
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
classphp Zendphp_Filterphp_PregReplacephp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Patternphp tophp match
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_matchPatternphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Replacementphp pattern
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_replacementphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Isphp unicodephp enabledphp?
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php staticphp protectedphp php$php_unicodeSupportEnabledphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Isphp Unicodephp Supportphp Enabledphp Utilityphp function
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php staticphp publicphp functionphp isUnicodeSupportEnabledphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_unicodeSupportEnabledphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php_determineUnicodeSupportphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_unicodeSupportEnabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp cachephp thephp regexphp neededphp tophp determinephp ifphp unicodephp supportphp isphp available
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php staticphp protectedphp functionphp php_determineUnicodeSupportphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_unicodeSupportEnabledphp php=php php(php@pregphp_matchphp(php'php/php\pLphp/uphp'php,php php'aphp'php)php)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php Supportedphp optionsphp are
php php php php php php*php php php php php php'matchphp'php php php php=php>php matchingphp pattern
php php php php php php*php php php php php php'replacephp'php php=php>php replacephp withphp this
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'matchphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'replacephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'matchphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMatchPatternphp(php$optionsphp[php'matchphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'replacephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setReplacementphp(php$optionsphp[php'replacephp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp matchphp patternphp forphp thephp regexphp beingphp calledphp withinphp filterphp(php)
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$matchphp php-php samephp asphp thephp firstphp argumentphp ofphp pregphp_replace
php php php php php php*php php@returnphp Zendphp_Filterphp_PregReplace
php php php php php php*php/
php php php php publicphp functionphp setMatchPatternphp(php$matchphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchPatternphp php=php php$matchphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentlyphp setphp matchphp pattern
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMatchPatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_matchPatternphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp Replacementphp patternphp/stringphp forphp thephp pregphp_replacephp calledphp inphp filter
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$replacementphp php-php samephp asphp thephp secondphp argumentphp ofphp pregphp_replace
php php php php php php*php php@returnphp Zendphp_Filterphp_PregReplace
php php php php php php*php/
php php php php publicphp functionphp setReplacementphp(php$replacementphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_replacementphp php=php php$replacementphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentlyphp setphp replacementphp value
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getReplacementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_replacementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp regexpphp replacementphp asphp filter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_matchPatternphp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(getphp_classphp(php$thisphp)php php.php php'php doesphp notphp havephp aphp validphp MatchPatternphp setphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp pregphp_replacephp(php$thisphp-php>php_matchPatternphp,php php$thisphp-php>php_replacementphp,php php$valuephp)php;
php php php php php}

php}
