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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Authorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Utils
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Utilsphp.phpphp'php;


php/php*php*
php php*php Representsphp aphp weblogphp Authorphp objectphp.php Itphp usuallyphp belongsphp tophp aphp Technoratiphp accountphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_Author
php{
php php php php php/php*php*
php php php php php php*php Authorphp firstphp name
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_firstNamephp;

php php php php php/php*php*
php php php php php php*php Authorphp lastphp name
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_lastNamephp;

php php php php php/php*php*
php php php php php php*php Technoratiphp accountphp username
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_usernamephp;

php php php php php/php*php*
php php php php php php*php Technoratiphp accountphp description
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_descriptionphp;

php php php php php/php*php*
php php php php php php*php Technoratiphp accountphp biography
php php php php php php*
php php php php php php*php php@varphp php php php php string
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_biophp;

php php php php php/php*php*
php php php php php php*php Technoratiphp accountphp thumbnailphp picturephp URLphp,php ifphp any
php php php php php php*
php php php php php php*php php@varphp php php php php nullphp|Zendphp_Uriphp_Http
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_thumbnailPicturephp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp objectphp fromphp DOMphp Elementphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomElementphp php$domphp thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomElementphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/firstnamephp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setFirstNamephp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/lastnamephp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setLastNamephp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/usernamephp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setUsernamephp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/descriptionphp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setDescriptionphp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/biophp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setBiophp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php.php/thumbnailpicturephp/textphp(php)php'php,php php$domphp)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>setThumbnailPicturephp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp Authorphp firstphp namephp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php Authorphp firstphp name
php php php php php php*php/
php php php php publicphp functionphp getFirstNamephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_firstNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Authorphp lastphp namephp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php Authorphp lastphp name
php php php php php php*php/
php php php php publicphp functionphp getLastNamephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_lastNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Technoratiphp accountphp usernamephp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php Technoratiphp accountphp username
php php php php php php*php/
php php php php publicphp functionphp getUsernamephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_usernamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Technoratiphp accountphp descriptionphp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php Technoratiphp accountphp description
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_descriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Technoratiphp accountphp biographyphp.
php php php php php php*
php php php php php php*php php@returnphp php stringphp php Technoratiphp accountphp biography
php php php php php php*php/
php php php php publicphp functionphp getBiophp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_biophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp Technoratiphp accountphp thumbnailphp picturephp.
php php php php php php*
php php php php php php*php php@returnphp php nullphp|Zendphp_Uriphp_Httpphp php Technoratiphp accountphp thumbnailphp picture
php php php php php php*php/
php php php php publicphp functionphp getThumbnailPicturephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_thumbnailPicturephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp authorphp firstphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$inputphp php php firstphp Namephp inputphp value
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setFirstNamephp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_firstNamephp php=php php(stringphp)php php$inputphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp authorphp lastphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$inputphp php php lastphp Namephp inputphp value
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setLastNamephp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_lastNamephp php=php php(stringphp)php php$inputphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Technoratiphp accountphp usernamephp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$inputphp php php usernamephp inputphp value
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setUsernamephp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_usernamephp php=php php(stringphp)php php$inputphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Technoratiphp accountphp biographyphp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$inputphp php php biographyphp inputphp value
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setBiophp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_biophp php=php php(stringphp)php php$inputphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Technoratiphp accountphp descriptionphp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$inputphp php php descriptionphp inputphp value
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_descriptionphp php=php php(stringphp)php php$inputphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Technoratiphp accountphp thumbnailphp picturephp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|Zendphp_Uriphp_Httpphp php$inputphp thumbnailphp picturephp URI
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Authorphp php php$thisphp instance
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Technoratiphp_Exceptionphp ifphp php$inputphp isphp anphp invalidphp URI
php php php php php php*php php php php php php php php php php php(viaphp Zendphp_Servicephp_Technoratiphp_Utilsphp:php:normalizeUriHttpphp)
php php php php php php*php/
php php php php publicphp functionphp setThumbnailPicturephp(php$inputphp)php php{
php php php php php php php php php$thisphp-php>php_thumbnailPicturephp php=php Zendphp_Servicephp_Technoratiphp_Utilsphp:php:normalizeUriHttpphp(php$inputphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
