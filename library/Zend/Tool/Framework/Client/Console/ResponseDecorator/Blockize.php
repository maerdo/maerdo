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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Clientphp/Responsephp/ContentDecoratorphp/Interfacephp.phpphp"php;

php/php*php*
php php*php Takephp aphp textphp andphp blockphp itphp intophp severalphp linesphp ofphp aphp fixedphp lengthphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Blockizephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ResponseDecoratorphp_Blockize
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Clientphp_Responsephp_ContentDecoratorphp_Interface
php{
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'blockizephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php intphp php$lineLength
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp decoratephp(php$contentphp,php php$lineLengthphp)
php php php php php{
php php php php php php php php ifphp(intvalphp(strvalphp(php$lineLengthphp)php)php php!php=php php$lineLengthphp)php php{
php php php php php php php php php php php php php$lineLengthphp php=php php7php2php;
php php php php php php php php php}

php php php php php php php php php/php/php breakphp apartphp thephp messagephp intophp wrappedphp chunks
php php php php php php php php php$linesphp php=php explodephp(PHPphp_EOLphp,php wordwrapphp(php$contentphp,php php$lineLengthphp,php PHPphp_EOLphp,php falsephp)php)php;
php php php php php php php php php$contentphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$linesphp ASphp php$linephp)php php{
php php php php php php php php php php php php ifphp(strlenphp(trimphp(php$linephp)php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(strlenphp(php$linephp)php <php php$lineLengthphp)php php{
php php php php php php php php php php php php php php php php php$linephp php.php=php strphp_repeatphp(php"php php"php,php php$lineLengthphp-strlenphp(php$linephp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$contentphp[php]php php=php php$linephp;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(PHPphp_EOLphp,php php$contentphp)php;
php php php php php}
php}
