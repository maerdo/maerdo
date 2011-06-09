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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Isbnphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Isbnphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp AUTOphp php php php php=php php'autophp'php;
php php php php constphp ISBNphp1php0php php php=php php'php1php0php'php;
php php php php constphp ISBNphp1php3php php php=php php'php1php3php'php;
php php php php constphp INVALIDphp php=php php'isbnInvalidphp'php;
php php php php constphp NOphp_ISBNphp php=php php'isbnNoIsbnphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitionsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php=php>php php"Invalidphp typephp givenphp.php Stringphp orphp integerphp expectedphp"php,
php php php php php php php php selfphp:php:NOphp_ISBNphp php=php>php php"php'php%valuephp%php'php isphp nophp validphp ISBNphp numberphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Allowedphp typephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php selfphp:php:AUTOphp;

php php php php php/php*php*
php php php php php php*php Separatorphp characterphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_separatorphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Setphp upphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp php$optionsphp isphp notphp valid
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php preparephp options
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp optionsphp providedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp type
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'typephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTypephp(php$optionsphp[php'typephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp separator
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'separatorphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setSeparatorphp(php$optionsphp[php'separatorphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp inputphp formatphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_detectFormatphp(php)
php php php php php{
php php php php php php php php php/php/php preparephp separatorphp andphp patternphp list
php php php php php php php php php$sepphp php php php php php php=php quotemetaphp(php$thisphp-php>php_separatorphp)php;
php php php php php php php php php$patternsphp php=php arrayphp(php)php;
php php php php php php php php php$lengthsphp php php=php arrayphp(php)php;

php php php php php php php php php/php/php checkphp forphp ISBNphp-php1php0
php php php php php php php php ifphp php(php$thisphp-php>php_typephp php=php=php selfphp:php:ISBNphp1php0php php|php|php php$thisphp-php>php_typephp php=php=php selfphp:php:AUTOphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$sepphp)php)php php{
php php php php php php php php php php php php php php php php php$patternphp php=php php'php/php^php[php0php-php9php]php{php9php}php[php0php-php9Xphp]php{php1php}php$php/php'php;
php php php php php php php php php php php php php php php php php$lengthphp php php=php php1php0php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$patternphp php=php php"php/php^php[php0php-php9php]php{php1php,php7php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php,php7php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php,php7php}php[php{php$sepphp}php]php{php1php}php[php0php-php9Xphp]php{php1php}php$php/php"php;
php php php php php php php php php php php php php php php php php$lengthphp php php=php php1php3php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$patternsphp[php$patternphp]php php=php selfphp:php:ISBNphp1php0php;
php php php php php php php php php php php php php$lengthsphp[php$patternphp]php php php=php php$lengthphp;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp forphp ISBNphp-php1php3
php php php php php php php php ifphp php(php$thisphp-php>php_typephp php=php=php selfphp:php:ISBNphp1php3php php|php|php php$thisphp-php>php_typephp php=php=php selfphp:php:AUTOphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$sepphp)php)php php{
php php php php php php php php php php php php php php php php php$patternphp php=php php'php/php^php[php0php-php9php]php{php1php3php}php$php/php'php;
php php php php php php php php php php php php php php php php php$lengthphp php php=php php1php3php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$patternphp php=php php"php/php^php[php0php-php9php]php{php1php,php9php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php,php5php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php,php9php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php,php9php}php[php{php$sepphp}php]php{php1php}php[php0php-php9php]php{php1php}php$php/php"php;
php php php php php php php php php php php php php php php php php$lengthphp php php=php php1php7php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$patternsphp[php$patternphp]php php=php selfphp:php:ISBNphp1php3php;
php php php php php php php php php php php php php$lengthsphp[php$patternphp]php php php=php php$lengthphp;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp patternphp list
php php php php php php php php foreachphp php(php$patternsphp asphp php$patternphp php=php>php php$typephp)php php{
php php php php php php php php php php php php ifphp php(php(strlenphp(php$thisphp-php>php_valuephp)php php=php=php php$lengthsphp[php$patternphp]php)php php&php&php pregphp_matchphp(php$patternphp,php php$thisphp-php>php_valuephp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$typephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interfacephp.
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp aphp validphp ISBNphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php php&php&php php!isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php switchphp php(php$thisphp-php>php_detectFormatphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:ISBNphp1php0php:
php php php php php php php php php php php php php php php php php/php/php sum
php php php php php php php php php php php php php php php php php$isbnphp1php0php php=php strphp_replacephp(php$thisphp-php>php_separatorphp,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php$sumphp php php php php=php php0php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php9php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$sumphp php+php=php php(php1php0php php-php php$iphp)php php*php php$isbnphp1php0php{php$iphp}php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php checksum
php php php php php php php php php php php php php php php php php$checksumphp php=php php1php1php php-php php(php$sumphp php%php php1php1php)php;
php php php php php php php php php php php php php php php php ifphp php(php$checksumphp php=php=php php1php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$checksumphp php=php php'php0php'php;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$checksumphp php=php=php php1php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$checksumphp php=php php'Xphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ISBNphp1php3php:
php php php php php php php php php php php php php php php php php/php/php sum
php php php php php php php php php php php php php php php php php$isbnphp1php3php php=php strphp_replacephp(php$thisphp-php>php_separatorphp,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php$sumphp php php php php=php php0php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php1php2php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$iphp php%php php2php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$sumphp php+php=php php$isbnphp1php3php{php$iphp}php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$sumphp php+php=php php3php php*php php$isbnphp1php3php{php$iphp}php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php checksum
php php php php php php php php php php php php php php php php php$checksumphp php=php php1php0php php-php php(php$sumphp php%php php1php0php)php;
php php php php php php php php php php php php php php php php ifphp php(php$checksumphp php=php=php php1php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$checksumphp php=php php'php0php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOphp_ISBNphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php validate
php php php php php php php php ifphp php(substrphp(php$thisphp-php>php_valuephp,php php-php1php)php php!php=php php$checksumphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOphp_ISBNphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp separatorphp charactersphp.
php php php php php php*
php php php php php php*php Itphp isphp allowedphp onlyphp emptyphp stringphp,php hyphenphp andphp spacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$separator
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp php$separatorphp isphp notphp valid
php php php php php php*php php@returnphp Zendphp_Validatephp_Isbnphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setSeparatorphp(php$separatorphp)
php php php php php{
php php php php php php php php php/php/php checkphp separator
php php php php php php php php ifphp php(php!inphp_arrayphp(php$separatorphp,php arrayphp(php'php-php'php,php php'php php'php,php php'php'php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp ISBNphp separatorphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_separatorphp php=php php$separatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp separatorphp charactersphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSeparatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_separatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp allowedphp ISBNphp typephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp php$typephp isphp notphp valid
php php php php php php*php php@returnphp Zendphp_Validatephp_Isbnphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php/php/php checkphp type
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php arrayphp(selfphp:php:AUTOphp,php selfphp:php:ISBNphp1php0php,php selfphp:php:ISBNphp1php3php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp ISBNphp typephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allowedphp ISBNphp typephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}
php}
