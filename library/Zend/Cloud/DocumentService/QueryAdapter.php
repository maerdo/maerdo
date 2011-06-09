<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Thisphp interfacephp describesphp thephp APIphp thatphp concretephp queryphp adapterphp shouldphp implement
php php*
php php*php Commonphp interfacephp forphp documentphp storagephp servicesphp inphp thephp cloudphp.php Thisphp interface
php php*php supportsphp mostphp documentphp servicesphp andphp providesphp somephp flexibilityphp for
php php*php vendorphp-specificphp featuresphp andphp requirementsphp viaphp anphp optionalphp php$optionsphp arrayphp in
php php*php eachphp methodphp signaturephp.php Classesphp implementingphp thisphp interfacephp shouldphp implement
php php*php URIphp constructionphp forphp collectionsphp andphp documentsphp fromphp thephp parametersphp givenphp inphp each
php php*php methodphp andphp thephp accountphp dataphp passedphp inphp tophp thephp constructorphp.php Classes
php php*php implementingphp thisphp interfacephp arephp alsophp responsiblephp forphp securityphp;php accessphp control
php php*php isnphp'tphp currentlyphp supportedphp inphp thisphp interfacephp,php althoughphp wephp arephp considering
php php*php accessphp controlphp supportphp inphp futurephp versionsphp ofphp thephp interfacephp.php Query
php php*php optimizationphp mechanismsphp arephp alsophp notphp supportedphp inphp thisphp versionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php{
php php php php php/php*php*
php php php php php php*php SELECTphp clausephp php(fieldsphp tophp bephp selectedphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$select
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$selectphp)php;

php php php php php/php*php*
php php php php php php*php FROMphp clausephp php(tablephp namephp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$from
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp fromphp(php$fromphp)php;

php php php php php/php*php*
php php php php php php*php WHEREphp clausephp php(conditionsphp tophp bephp usedphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$where
php php php php php php*php php@paramphp mixedphp php$valuephp Valuephp orphp arrayphp ofphp valuesphp tophp bephp insertedphp insteadphp ofphp php?
php php php php php php*php php@paramphp stringphp php$opphp Operationphp tophp usephp tophp joinphp wherephp clausesphp php(ANDphp/ORphp)
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp wherephp(php$wherephp,php php$valuephp php=php nullphp,php php$opphp php=php php'andphp'php)php;

php php php php php/php*php*
php php php php php php*php WHEREphp clausephp forphp itemphp ID
php php php php php php*
php php php php php php*php Thisphp onephp shouldphp bephp usedphp whenphp fetchingphp specificphp rowsphp sincephp somephp adapters
php php php php php php*php havephp specialphp syntaxphp forphp primaryphp keys
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Rowphp IDphp forphp thephp document
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp whereIdphp(php$valuephp)php;

php php php php php/php*php*
php php php php php php*php LIMITphp clausephp php(howphp manyphp rowsphp otphp returnphp)
php php php php php php*
php php php php php php*php php@paramphp intphp php$limit
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$limitphp)php;

php php php php php/php*php*
php php php php php php*php ORDERphp BYphp clausephp php(sortingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sortphp Columnphp tophp sortphp by
php php php php php php*php php@paramphp stringphp php$directionphp Directionphp php-php ascphp/desc
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php php php php php php*php/
php php php php publicphp functionphp orderphp(php$sortphp,php php$directionphp php=php php'ascphp'php)php;

php php php php php/php*php*
php php php php php php*php Assemblephp thephp queryphp intophp aphp formatphp thephp adapterphp canphp utilize
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php)php;
php}
