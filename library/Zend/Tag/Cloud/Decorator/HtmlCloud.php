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
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@subpackagephp Cloud
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HtmlCloudphp.phpphp php2php0php1php0php4php php2php0php1php0php-php0php1php-php0php6php php2php1php:php2php6php:php0php1Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php php*php/
requirephp_oncephp php'Zendphp/Tagphp/Cloudphp/Decoratorphp/Cloudphp.phpphp'php;

php/php*php*
php php*php Simplephp HTMLphp decoratorphp forphp clouds
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Tag
php php*php php@usesphp php php php php php Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Tagphp_Cloudphp_Decoratorphp_HtmlCloudphp extendsphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Encodingphp tophp use
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp HTMLphp tags
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_htmlTagsphp php=php arrayphp(
php php php php php php php php php'ulphp'php php=php>php arrayphp(php'classphp'php php=php>php php'Zendphp_Tagphp_Cloudphp'php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Separatorphp forphp thephp singlephp tags
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_separatorphp php=php php'php php'php;

php php php php php/php*php*
php php php php php php*php Getphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encoding
php php php php php php*
php php php php php php*php php@paramphp string
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloudphp_Decoratorphp_HtmlCloud
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp HTMLphp tagsphp surroundingphp allphp tags
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$htmlTags
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloudphp_Decoratorphp_HtmlCloud
php php php php php php*php/
php php php php publicphp functionphp setHtmlTagsphp(arrayphp php$htmlTagsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_htmlTagsphp php=php php$htmlTagsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp HTMLphp tagphp map
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHtmlTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_htmlTagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp separatorphp betweenphp thephp singlephp tags
php php php php php php*
php php php php php php*php php@paramphp php string
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloudphp_Decoratorphp_HtmlCloud
php php php php php php*php/
php php php php publicphp functionphp setSeparatorphp(php$separatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_separatorphp php=php php$separatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp tagphp separator
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSeparatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_separatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tags
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(arrayphp php$tagsphp)
php php php php php{
php php php php php php php php php$cloudHtmlphp php=php implodephp(php$thisphp-php>getSeparatorphp(php)php,php php$tagsphp)php;

php php php php php php php php php$encphp php=php php$thisphp-php>getEncodingphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getHtmlTagsphp(php)php asphp php$keyphp php=php>php php$dataphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$htmlTagphp php php php php=php php$keyphp;
php php php php php php php php php php php php php php php php php$attributesphp php=php php'php'php;

php php php php php php php php php php php php php php php php foreachphp php(php$dataphp asphp php$paramphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$attributesphp php.php=php php'php php'php php.php php$paramphp php.php php'php=php"php'php php.php htmlspecialcharsphp(php$valuephp,php ENTphp_COMPATphp,php php$encphp)php php.php php'php"php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$htmlTagphp php php php php=php php$dataphp;
php php php php php php php php php php php php php php php php php$attributesphp php=php php'php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$cloudHtmlphp php=php sprintfphp(php'<php%php1php$sphp%php3php$sphp>php%php2php$s<php/php%php1php$sphp>php'php,php php$htmlTagphp,php php$cloudHtmlphp,php php$attributesphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$cloudHtmlphp;
php php php php php}
php}
