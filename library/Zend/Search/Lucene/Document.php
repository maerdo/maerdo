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
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Documentphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Fieldphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Fieldphp.phpphp'php;


php/php*php*
php php*php Aphp Documentphp isphp aphp setphp ofphp fieldsphp.php Eachphp fieldphp hasphp aphp namephp andphp aphp textualphp valuephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Document
php{

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp Zendphp_Searchphp_Lucenephp_Fieldphp objectsphp wherephp thephp keysphp tophp the
php php php php php php*php arrayphp arephp thephp namesphp ofphp thephp fieldsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_fieldsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Fieldphp boostphp factor
php php php php php php*php Itphp'sphp notphp storedphp directlyphp inphp thephp indexphp,php butphp affectsphp onphp normalizationphp factor
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php publicphp php$boostphp php=php php1php.php0php;

php php php php php/php*php*
php php php php php php*php Proxyphp methodphp forphp getFieldValuephp(php)php,php providesphp morephp convenientphp accessphp to
php php php php php php*php thephp stringphp valuephp ofphp aphp fieldphp.
php php php php php php*
php php php php php php*php php@paramphp php php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFieldValuephp(php$offsetphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp aphp fieldphp objectphp tophp thisphp documentphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Fieldphp php$field
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Document
php php php php php php*php/
php php php php publicphp functionphp addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp php$fieldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php php=php php$fieldphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp withphp thephp namesphp ofphp thephp fieldsphp inphp thisphp documentphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFieldNamesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_fieldsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp Zendphp_Searchphp_Lucenephp_Fieldphp objectphp forphp aphp namedphp fieldphp inphp thisphp documentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Field
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php$fieldNamephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$fieldNamephp,php php$thisphp-php>php_fieldsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php"Fieldphp namephp php\php"php$fieldNamephp\php"php notphp foundphp inphp documentphp.php"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_fieldsphp[php$fieldNamephp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp stringphp valuephp ofphp aphp namedphp fieldphp inphp thisphp documentphp.
php php php php php php*
php php php php php php*php php@seephp php_php_getphp(php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFieldValuephp(php$fieldNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFieldphp(php$fieldNamephp)php-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp stringphp valuephp ofphp aphp namedphp fieldphp inphp UTFphp-php8php encodingphp.
php php php php php php*
php php php php php php*php php@seephp php_php_getphp(php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFieldUtfphp8Valuephp(php$fieldNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFieldphp(php$fieldNamephp)php-php>getUtfphp8Valuephp(php)php;
php php php php php}
php}
