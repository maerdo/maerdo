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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*
php php*php Imagephp formphp element
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php2php3php2php8php php2php0php1php0php-php0php5php-php3php0php php1php5php:php0php9php:php0php6Zphp bittarmanphp php$
php php*php/
classphp Zendphp_Formphp_Elementphp_Imagephp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Whatphp viewphp helperphp tophp usephp whenphp usingphp viewphp helperphp decorator
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'formImagephp'php;

php php php php php/php*php*
php php php php php php*php Imagephp source
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$srcphp;

php php php php php/php*php*
php php php php php php*php Imagephp value
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_imageValuephp;

php php php php php/php*php*
php php php php php php*php Loadphp defaultphp decorators
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadDefaultDecoratorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>loadDefaultDecoratorsIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$decoratorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'Tooltipphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Imagephp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Errorsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'ddphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Labelphp'php,php arrayphp(php'tagphp'php php=php>php php'dtphp'php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp imagephp path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Image
php php php php php php*php/
php php php php publicphp functionphp setImagephp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>srcphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp imagephp path
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>srcphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp imagephp valuephp tophp usephp whenphp submitted
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Image
php php php php php php*php/
php php php php publicphp functionphp setImageValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_imageValuephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp imagephp valuephp tophp usephp whenphp submitted
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getImageValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_imageValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thisphp elementphp usedphp tophp submitphp thephp formphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isCheckedphp(php)
php php php php php{
php php php php php php php php php$imageValuephp php=php php$thisphp-php>getImageValuephp(php)php;
php php php php php php php php returnphp php(php(nullphp php!php=php=php php$imageValuephp)php php&php&php php(php$thisphp-php>getValuephp(php)php php=php=php php$imageValuephp)php)php;
php php php php php}

php}
