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
php php*php php@versionphp php php php php$Idphp:php BlogInfoResultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Utils
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Utilsphp.phpphp'php;


php/php*php*
php php*php Representsphp aphp singlephp Technoratiphp BlogInfophp queryphp resultphp objectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Technorati
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Technoratiphp_BlogInfoResult
php{
php php php php php/php*php*
php php php php php php*php Technoratiphp weblogphp urlphp,php ifphp queriedphp URLphp isphp aphp validphp weblogphp.
php php php php php php*
php php php php php php*php php@varphp php php php php Zendphp_Uriphp_Http
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_urlphp;

php php php php php/php*php*
php php php php php php*php Technoratiphp weblogphp,php ifphp queriedphp URLphp isphp aphp validphp weblogphp.
php php php php php php*
php php php php php php*php php@varphp php php php php Zendphp_Servicephp_Technoratiphp_Weblog
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_weblogphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp uniquephp blogsphp linkingphp thisphp blog
php php php php php php*
php php php php php php*php php@varphp php php php php integer
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_inboundBlogsphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp incomingphp linksphp tophp thisphp blog
php php php php php php*
php php php php php php*php php@varphp php php php php integer
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_inboundLinksphp;


php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp objectphp objectphp fromphp DOMphp Documentphp.
php php php php php php*
php php php php php php*php php@paramphp php php DomDocumentphp php$domphp thephp ReSTphp fragmentphp forphp thisphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DomDocumentphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Weblog
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Weblogphp.phpphp'php;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php/php/resultphp/weblogphp'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_weblogphp php=php newphp Zendphp_Servicephp_Technoratiphp_Weblogphp(php$resultphp-php>itemphp(php0php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php followphp thephp samephp behaviorphp ofphp blogPostTags
php php php php php php php php php php php php php/php/php andphp raisephp anphp Exceptionphp ifphp thephp URLphp isphp notphp aphp validphp weblog
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Technoratiphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Technoratiphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Technoratiphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Yourphp URLphp isphp notphp aphp recognizedphp Technoratiphp weblogphp"php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php/php/resultphp/urlphp/textphp(php)php'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php/php/php fetchedphp URLphp oftenphp doensphp'tphp includephp schema
php php php php php php php php php php php php php php php php php/php/php andphp thisphp issuephp causesphp thephp followingphp linephp tophp fail
php php php php php php php php php php php php php php php php php$thisphp-php>php_urlphp php=php Zendphp_Servicephp_Technoratiphp_Utilsphp:php:normalizeUriHttpphp(php$resultphp-php>itemphp(php0php)php-php>dataphp)php;
php php php php php php php php php php php php php}php catchphp(Zendphp_Servicephp_Technoratiphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>getWeblogphp(php)php instanceofphp Zendphp_Servicephp_Technoratiphp_Weblogphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_urlphp php=php php$thisphp-php>getWeblogphp(php)php-php>getUrlphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php/php/resultphp/inboundblogsphp/textphp(php)php'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>php_inboundBlogsphp php=php php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;

php php php php php php php php php$resultphp php=php php$xpathphp-php>queryphp(php'php/php/resultphp/inboundlinksphp/textphp(php)php'php)php;
php php php php php php php php ifphp php(php$resultphp-php>lengthphp php=php=php php1php)php php$thisphp-php>php_inboundLinksphp php=php php(intphp)php php$resultphp-php>itemphp(php0php)php-php>dataphp;

php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp weblogphp URLphp.
php php php php php php*
php php php php php php*php php@returnphp php Zendphp_Uriphp_Http
php php php php php php*php/
php php php php publicphp functionphp getUrlphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp weblogphp.
php php php php php php*
php php php php php php*php php@returnphp php Zendphp_Servicephp_Technoratiphp_Weblog
php php php php php php*php/
php php php php publicphp functionphp getWeblogphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_weblogphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp numberphp ofphp uniquephp blogsphp linkingphp thisphp blogphp.
php php php php php php*
php php php php php php*php php@returnphp php integerphp thephp numberphp ofphp inboundphp blogs
php php php php php php*php/
php php php php publicphp functionphp getInboundBlogsphp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php php$thisphp-php>php_inboundBlogsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp numberphp ofphp incomingphp linksphp tophp thisphp blogphp.
php php php php php php*
php php php php php php*php php@returnphp php integerphp thephp numberphp ofphp inboundphp links
php php php php php php*php/
php php php php publicphp functionphp getInboundLinksphp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php php$thisphp-php>php_inboundLinksphp;
php php php php php}

php}
