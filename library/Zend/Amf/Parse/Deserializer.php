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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parse
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Deserializerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp cassphp thatphp allphp deserializerphp mustphp implementphp.
php php*
php php*php Logicphp forphp deserializationphp ofphp thephp AMFphp envelopphp isphp basedphp onphp resourcesphp supplied
php php*php byphp Adobephp Blazephp DSphp.php Forphp andphp examplephp ofphp deserializationphp pleasephp reviewphp thephp BlazeDS
php php*php sourcephp treephp.
php php*
php php*php php@seephp php php php php php php php httpphp:php/php/opensourcephp.adobephp.comphp/svnphp/opensourcephp/blazedsphp/trunkphp/modulesphp/corephp/srcphp/javaphp/flexphp/messagingphp/iophp/amfphp/
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parse
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Amfphp_Parsephp_Deserializer
php{
php php php php php/php*php*
php php php php php php*php Thephp rawphp stringphp thatphp representsphp thephp AMFphp requestphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Amfphp_Parsephp_InputStream
php php php php php php*php/
php php php php protectedphp php$php_streamphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Parsephp_InputStreamphp php$stream
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Amfphp_Parsephp_InputStreamphp php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp php=php php$streamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp forphp AMFphp markerphp typesphp andphp callsphp thephp appropriatephp methods
php php php php php php*php forphp deserializingphp thosephp markerphp typesphp.php Markersphp arephp thephp dataphp typephp of
php php php php php php*php thephp followingphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$typeMarker
php php php php php php*php php@returnphp mixedphp Whateverphp thephp dataphp typephp isphp ofphp thephp markerphp inphp php
php php php php php php*php/
php php php php publicphp abstractphp functionphp readTypeMarkerphp(php$markerTypephp php=php nullphp)php;
php}
