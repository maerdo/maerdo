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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Termphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Aphp Termphp representsphp aphp wordphp fromphp textphp.php php Thisphp isphp thephp unitphp ofphp searchphp.php php Itphp is
php php*php composedphp ofphp twophp elementsphp,php thephp textphp ofphp thephp wordphp,php asphp aphp stringphp,php andphp thephp namephp of
php php*php thephp fieldphp thatphp thephp textphp occuredphp inphp,php anphp internedphp stringphp.
php php*
php php*php Notephp thatphp termsphp mayphp representphp morephp thanphp wordsphp fromphp textphp fieldsphp,php butphp also
php php*php thingsphp likephp datesphp,php emailphp addressesphp,php urlsphp,php etcphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php{
php php php php php/php*php*
php php php php php php*php Fieldphp namephp orphp fieldphp numberphp php(dependingphp fromphp contextphp)
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php publicphp php$fieldphp;

php php php php php/php*php*
php php php php php php*php Termphp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$textphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$textphp,php php$fieldphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>fieldphp php=php php(php$fieldphp php=php=php=php nullphp)php?php php Zendphp_Searchphp_Lucenephp:php:getDefaultSearchFieldphp(php)php php:php php$fieldphp;
php php php php php php php php php$thisphp-php>textphp php php=php php$textphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp termphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>fieldphp php.php chrphp(php0php)php php.php php$thisphp-php>textphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp termphp prefix
php php php php php php*
php php php php php php*php php@paramphp stringphp php$str
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getPrefixphp(php$strphp,php php$lengthphp)
php php php php php{
php php php php php php php php php$prefixBytesphp php=php php0php;
php php php php php php php php php$prefixCharsphp php=php php0php;
php php php php php php php php whilephp php(php$prefixBytesphp <php strlenphp(php$strphp)php php php&php&php php php$prefixCharsphp <php php$lengthphp)php php{
php php php php php php php php php php php php php$charBytesphp php=php php1php;
php php php php php php php php php php php php ifphp php(php(ordphp(php$strphp[php$prefixBytesphp]php)php php&php php0xCphp0php)php php=php=php php0xCphp0php)php php{
php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$prefixBytesphp]php)php php&php php0xphp2php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$prefixBytesphp]php)php php&php php0xphp1php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$prefixBytesphp php+php php$charBytesphp php>php strlenphp(php$strphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php wrongphp character
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$prefixCharsphp+php+php;
php php php php php php php php php php php php php$prefixBytesphp php+php=php php$charBytesphp;
php php php php php php php php php}

php php php php php php php php returnphp substrphp(php$strphp,php php0php,php php$prefixBytesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp UTFphp-php8php stringphp length
php php php php php php*
php php php php php php*php php@paramphp stringphp php$str
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getLengthphp(php$strphp)
php php php php php{
php php php php php php php php php$bytesphp php=php php0php;
php php php php php php php php php$charsphp php=php php0php;
php php php php php php php php whilephp php(php$bytesphp <php strlenphp(php$strphp)php)php php{
php php php php php php php php php php php php php$charBytesphp php=php php1php;
php php php php php php php php php php php php ifphp php(php(ordphp(php$strphp[php$bytesphp]php)php php&php php0xCphp0php)php php=php=php php0xCphp0php)php php{
php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$bytesphp]php)php php&php php0xphp2php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$strphp[php$bytesphp]php)php php&php php0xphp1php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$bytesphp php+php php$charBytesphp php>php strlenphp(php$strphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php wrongphp character
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$charsphp+php+php;
php php php php php php php php php php php php php$bytesphp php+php=php php$charBytesphp;
php php php php php php php php php}

php php php php php php php php returnphp php$charsphp;
php php php php php}
php}

