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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Ldif
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Encoderphp.phpphp php2php1php0php0php5php php2php0php1php0php-php0php2php-php0php9php php1php3php:php1php6php:php2php6Zphp sgehrigphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Ldifphp_Encoderphp providesphp methodsphp tophp encodephp andphp decodephp LDAPphp dataphp intophp/fromphp LDIFphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Ldif
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Ldifphp_Encoder
php{
php php php php php/php*php*
php php php php php php*php Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'sortphp'php php php php php=php>php truephp,
php php php php php php php php php'versionphp'php php=php>php php1php,
php php php php php php php php php'wrapphp'php php php php php=php>php php7php8
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_versionWrittenphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php arrayphp_mergephp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp thephp stringphp php$stringphp intophp anphp arrayphp ofphp LDIFphp items
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$stringphp)
php php php php php{
php php php php php php php php php$encoderphp php=php newphp selfphp(arrayphp(php)php)php;
php php php php php php php php returnphp php$encoderphp-php>php_decodephp(php$stringphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp thephp stringphp php$stringphp intophp anphp arrayphp ofphp LDIFphp items
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_decodephp(php$stringphp)
php php php php php{
php php php php php php php php php$itemsphp php=php arrayphp(php)php;
php php php php php php php php php$itemphp php=php arrayphp(php)php;
php php php php php php php php php$lastphp php=php nullphp;
php php php php php php php php foreachphp php(explodephp(php"php\nphp"php,php php$stringphp)php asphp php$linephp)php php{
php php php php php php php php php php php php php$linephp php=php rtrimphp(php$linephp,php php"php\xphp0php9php\xphp0Aphp\xphp0Dphp\xphp0php0php\xphp0Bphp"php)php;
php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(substrphp(php$linephp,php php0php,php php1php)php php=php=php=php php'php php'php php&php&php php$lastphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$lastphp[php2php]php php.php=php substrphp(php$linephp,php php1php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(substrphp(php$linephp,php php0php,php php1php)php php=php=php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php^php(php[aphp-zphp0php-php9php;php-php]php+php)php(php:php[php:<php]php?php\sphp*php)php(php[php^php:<php]php*php)php$php/iphp'php,php php$linephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php strtolowerphp(php$matchesphp[php1php]php)php;
php php php php php php php php php php php php php php php php php$typephp php=php trimphp(php$matchesphp[php2php]php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$matchesphp[php3php]php;
php php php php php php php php php php php php php php php php ifphp php(php$lastphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pushAttributephp(php$lastphp,php php$itemphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php=php php'versionphp'php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(countphp(php$itemphp)php php>php php0php php&php&php php$namephp php=php=php=php php'dnphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$itemsphp[php]php php=php php$itemphp;
php php php php php php php php php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$lastphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$lastphp php=php arrayphp(php$namephp,php php$typephp,php php$valuephp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(trimphp(php$linephp)php php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$lastphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pushAttributephp(php$lastphp,php php$itemphp)php;
php php php php php php php php php}
php php php php php php php php php$itemsphp[php]php php=php php$itemphp;
php php php php php php php php returnphp php(countphp(php$itemsphp)php>php1php)php php?php php$itemsphp php:php php$itemsphp[php0php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushesphp aphp decodedphp attributephp tophp thephp stack
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$attribute
php php php php php php*php php@paramphp arrayphp php$entry
php php php php php php*php/
php php php php protectedphp functionphp php_pushAttributephp(arrayphp php$attributephp,php arrayphp php&php$entryphp)
php php php php php{
php php php php php php php php php$namephp php=php php$attributephp[php0php]php;
php php php php php php php php php$typephp php=php php$attributephp[php1php]php;
php php php php php php php php php$valuephp php=php php$attributephp[php2php]php;
php php php php php php php php ifphp php(php$typephp php=php=php=php php'php:php:php'php)php php{
php php php php php php php php php php php php php$valuephp php=php basephp6php4php_decodephp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$namephp php=php=php=php php'dnphp'php)php php{
php php php php php php php php php php php php php$entryphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$entryphp[php$namephp]php)php php&php&php php$valuephp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$entryphp[php$namephp]php[php]php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$entryphp[php$namephp]php php=php php(php$valuephp php!php=php=php php'php'php)php php?php arrayphp(php$valuephp)php php:php arrayphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp php$valuephp intophp aphp LDIFphp representation
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$valuephp php php Thephp valuephp tophp bephp encoded
php php php php php php*php php@paramphp php arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp stringphp Thephp encodedphp value
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$valuephp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$encoderphp php=php newphp selfphp(php$optionsphp)php;
php php php php php php php php returnphp php$encoderphp-php>php_encodephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recursivephp driverphp whichphp determinesphp thephp typephp ofphp valuephp tophp bephp encoded
php php php php php php*php andphp thenphp dispatchesphp tophp thephp appropriatephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$valuephp Thephp valuephp tophp bephp encoded
php php php php php php*php php@returnphp stringphp Encodedphp value
php php php php php php*php/
php php php php protectedphp functionphp php_encodephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_encodeStringphp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_encodeAttributesphp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(php$valuephp instanceofphp Zendphp_Ldapphp_Nodephp)php php{
php php php php php php php php php php php php returnphp php$valuephp-php>toLdifphp(php$thisphp-php>php_optionsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodesphp php$stringphp accordingphp tophp RFCphp2php8php4php9
php php php php php php*
php php php php php php*php php@linkphp httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php8php4php9php.html
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@paramphp php boolenphp php$basephp6php4
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeStringphp(php$stringphp,php php&php$basephp6php4php php=php nullphp)
php php php php php{
php php php php php php php php php$stringphp php=php php(stringphp)php$stringphp;
php php php php php php php php ifphp php(php!isphp_numericphp(php$stringphp)php php&php&php emptyphp(php$stringphp)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php SAFEphp-INITphp-CHARphp php=php php%xphp0php1php-php0php9php php/php php%xphp0Bphp-php0Cphp php/php php%xphp0Ephp-php1Fphp php/
php php php php php php php php php php*php php php php php php php php php php php php php php php php php php php%xphp2php1php-php3php9php php/php php%xphp3Bphp php/php php%xphp3Dphp-php7F
php php php php php php php php php php*php php php php php php php php php php php php php php php php php;php anyphp valuephp <php=php php1php2php7php exceptphp NULphp,php LFphp,php CRphp,
php php php php php php php php php php*php php php php php php php php php php php php php php php php php;php SPACEphp,php colonphp php(php"php:php"php,php ASCIIphp php5php8php decimalphp)
php php php php php php php php php php*php php php php php php php php php php php php php php php php php;php andphp lessphp-thanphp php(php"<php"php php,php ASCIIphp php6php0php decimalphp)
php php php php php php php php php php*
php php php php php php php php php php*php/
php php php php php php php php php$unsafephp_initphp_charphp php=php arrayphp(php0php,php php1php0php,php php1php3php,php php3php2php,php php5php8php,php php6php0php)php;
php php php php php php php php php/php*
php php php php php php php php php php*php SAFEphp-CHARphp php php php php php php=php php%xphp0php1php-php0php9php php/php php%xphp0Bphp-php0Cphp php/php php%xphp0Ephp-php7F
php php php php php php php php php php*php php php php php php php php php php php php php php php php php;php anyphp valuephp <php=php php1php2php7php decimalphp exceptphp NULphp,php LFphp,
php php php php php php php php php php*php php php php php php php php php php php php php php php php php;php andphp CR
php php php php php php php php php php*php/
php php php php php php php php php$unsafephp_charphp php php php php php php=php arrayphp(php0php,php php1php0php,php php1php3php)php;

php php php php php php php php php$basephp6php4php php=php falsephp;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$stringphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$charphp php=php ordphp(substrphp(php$stringphp,php php$iphp,php php1php)php)php;
php php php php php php php php php php php php ifphp php(php$charphp php>php=php php1php2php7php)php php{
php php php php php php php php php php php php php php php php php$basephp6php4php php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$iphp php=php=php=php php0php php&php&php inphp_arrayphp(php$charphp,php php$unsafephp_initphp_charphp)php)php php{
php php php php php php php php php php php php php php php php php$basephp6php4php php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}php elsephp ifphp php(inphp_arrayphp(php$charphp,php php$unsafephp_charphp)php)php php{
php php php php php php php php php php php php php php php php php$basephp6php4php php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php/php Testphp forphp endingphp space
php php php php php php php php ifphp php(substrphp(php$stringphp,php php-php1php)php php=php=php php'php php'php)php php{
php php php php php php php php php php php php php$basephp6php4php php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$basephp6php4php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$stringphp php=php basephp6php4php_encodephp(php$stringphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodesphp anphp attributephp withphp php$namephp andphp php$valuephp accordingphp tophp RFCphp2php8php4php9
php php php php php php*
php php php php php php*php php@linkphp httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php8php4php9php.html
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$name
php php php php php php*php php@paramphp php arrayphp|stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeAttributephp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php ifphp php(countphp(php$valuephp)php <php php1php)php php{
php php php php php php php php php php php php returnphp php$namephp php.php php'php:php php'php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$valuephp asphp php$vphp)php php{
php php php php php php php php php php php php php$basephp6php4php php=php nullphp;
php php php php php php php php php php php php php$vphp php=php php$thisphp-php>php_encodeStringphp(php$vphp,php php$basephp6php4php)php;
php php php php php php php php php php php php php$attributephp php=php php$namephp php.php php'php:php'php;
php php php php php php php php php php php php ifphp php(php$basephp6php4php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$attributephp php.php=php php'php:php php'php php.php php$vphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$attributephp php.php=php php'php php'php php.php php$vphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'wrapphp'php]php)php php&php&php strlenphp(php$attributephp)php php>php php$thisphp-php>php_optionsphp[php'wrapphp'php]php)php php{
php php php php php php php php php php php php php php php php php$attributephp php=php trimphp(chunkphp_splitphp(php$attributephp,php php$thisphp-php>php_optionsphp[php'wrapphp'php]php,php PHPphp_EOLphp php.php php'php php'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$outputphp php.php=php php$attributephp php.php PHPphp_EOLphp;
php php php php php php php php php}
php php php php php php php php returnphp trimphp(php$outputphp,php PHPphp_EOLphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodesphp aphp collectionphp ofphp attributesphp accordingphp tophp RFCphp2php8php4php9
php php php php php php*
php php php php php php*php php@linkphp httpphp:php/php/wwwphp.faqsphp.orgphp/rfcsphp/rfcphp2php8php4php9php.html
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeAttributesphp(arrayphp php$attributesphp)
php php php php php{
php php php php php php php php php$stringphp php=php php'php'php;
php php php php php php php php php$attributesphp php=php arrayphp_changephp_keyphp_casephp(php$attributesphp,php CASEphp_LOWERphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_versionWrittenphp php&php&php arrayphp_keyphp_existsphp(php'dnphp'php,php php$attributesphp)php php&php&php issetphp(php$thisphp-php>php_optionsphp[php'versionphp'php]php)
php php php php php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'objectclassphp'php,php php$attributesphp)php)php php{
php php php php php php php php php php php php php$stringphp php.php=php sprintfphp(php'versionphp:php php%dphp'php,php php$thisphp-php>php_optionsphp[php'versionphp'php]php)php php.php PHPphp_EOLphp;
php php php php php php php php php php php php php$thisphp-php>php_versionWrittenphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'sortphp'php]php)php php&php&php php$thisphp-php>php_optionsphp[php'sortphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php ksortphp(php$attributesphp,php SORTphp_STRINGphp)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'objectclassphp'php,php php$attributesphp)php)php php{
php php php php php php php php php php php php php php php php php$ocphp php=php php$attributesphp[php'objectclassphp'php]php;
php php php php php php php php php php php php php php php php unsetphp(php$attributesphp[php'objectclassphp'php]php)php;
php php php php php php php php php php php php php php php php php$attributesphp php=php arrayphp_mergephp(arrayphp(php'objectclassphp'php php=php>php php$ocphp)php,php php$attributesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dnphp'php,php php$attributesphp)php)php php{
php php php php php php php php php php php php php php php php php$dnphp php=php php$attributesphp[php'dnphp'php]php;
php php php php php php php php php php php php php php php php unsetphp(php$attributesphp[php'dnphp'php]php)php;
php php php php php php php php php php php php php php php php php$attributesphp php=php arrayphp_mergephp(arrayphp(php'dnphp'php php=php>php php$dnphp)php,php php$attributesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php foreachphp php(php$attributesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$stringphp php.php=php php$thisphp-php>php_encodeAttributephp(php$keyphp,php php$valuephp)php php.php PHPphp_EOLphp;
php php php php php php php php php}
php php php php php php php php returnphp trimphp(php$stringphp,php PHPphp_EOLphp)php;
php php php php php}
php}