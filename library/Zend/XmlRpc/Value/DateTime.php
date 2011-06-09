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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DateTimephp.phpphp php2php3php5php5php2php php2php0php1php0php-php1php2php-php1php8php php1php3php:php2php0php:php5php5Zphp ramonphp php$
php php*php/


php/php*php*
php php*php Zendphp_XmlRpcphp_Valuephp_Scalar
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp/Scalarphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Valuephp_DateTimephp extendsphp Zendphp_XmlRpcphp_Valuephp_Scalar
php{
php php php php php/php*php*
php php php php php php*php PHPphp compatiblephp formatphp stringphp forphp XMLphp/RPCphp datetimephp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_phpFormatStringphp php=php php'Ymdphp\php\THphp:iphp:sphp'php;

php php php php php/php*php*
php php php php php php*php ISOphp compatiblephp formatphp stringphp forphp XMLphp/RPCphp datetimephp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_isoFormatStringphp php=php php'yyyyMMddTHHphp:mmphp:ssphp'php;

php php php php php/php*php*
php php php php php php*php Setphp thephp valuephp ofphp aphp dateTimephp.isophp8php6php0php1php nativephp type
php php php php php php*
php php php php php php*php Thephp valuephp isphp inphp isophp8php6php0php1php formatphp,php minusphp anyphp timezonephp informationphp orphp dashes
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Integerphp ofphp thephp unixphp timestampphp orphp anyphp stringphp thatphp canphp bephp parsed
php php php php php php*php php php php php php php php php php php php php php php php php php php php php tophp aphp unixphp timestampphp usingphp thephp PHPphp strtotimephp(php)php function
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php selfphp:php:XMLRPCphp_TYPEphp_DATETIMEphp;

php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp-php>toStringphp(php$thisphp-php>php_isoFormatStringphp)php;
php php php php php php php php php}php elseifphp php(php$valuephp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp-php>formatphp(php$thisphp-php>php_phpFormatStringphp)php;
php php php php php php php php php}php elseifphp php(isphp_numericphp(php$valuephp)php)php php{php php/php/php Thephp valuephp isphp numericphp,php wephp makephp surephp itphp isphp anphp integer
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php datephp(php$thisphp-php>php_phpFormatStringphp,php php(intphp)php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$timestampphp php=php strtotimephp(php$valuephp)php;
php php php php php php php php php php php php ifphp php(php$timestampphp php=php=php=php falsephp php|php|php php$timestampphp php=php=php php-php1php)php php{php php/php/php cannotphp convertphp thephp valuephp tophp aphp timestamp
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Valuephp_Exceptionphp(php'Cannotphp convertphp givenphp valuephp php\php'php'php.php php$valuephp php.php'php\php'php tophp aphp timestampphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php datephp(php$thisphp-php>php_phpFormatStringphp,php php$timestampphp)php;php php/php/php Convertphp thephp timestampphp tophp isophp8php6php0php1php format
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp valuephp ofphp thisphp objectphp asphp isophp8php6php0php1php dateTimephp value
php php php php php php*
php php php php php php*php php@returnphp intphp Asphp aphp Unixphp timestamp
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}
php}
