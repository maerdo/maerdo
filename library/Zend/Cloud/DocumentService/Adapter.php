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
php php*php Commonphp interfacephp forphp documentphp storagephp servicesphp inphp thephp cloudphp.php Thisphp interface
php php*php supportsphp mostphp documentphp servicesphp andphp providesphp somephp flexibilityphp for
php php*php vendorphp-specificphp featuresphp andphp requirementsphp viaphp anphp optionalphp php$optionsphp arrayphp in
php php*php eachphp methodphp signaturephp.php Classesphp implementingphp thisphp interfacephp shouldphp implement
php php*php URIphp constructionphp forphp collectionsphp andphp documentsphp fromphp thephp parametersphp givenphp inphp each
php php*php methodphp andphp thephp accountphp dataphp passedphp inphp tophp thephp constructorphp.php Classes
php php*php implementingphp thisphp interfacephp arephp alsophp responsiblephp forphp securityphp;php accessphp control
php php*php isnphp'tphp currentlyphp supportedphp inphp thisphp interfacephp,php althoughphp wephp arephp considering
php php*php accessphp controlphp supportphp inphp futurephp versionsphp ofphp thephp interfacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Cloudphp_DocumentServicephp_Adapter
php{
php php php php php/php/php HTTPphp adapterphp tophp usephp forphp connections
php php php php constphp HTTPphp_ADAPTERphp php=php php'httpphp_adapterphp'php;

php php php php php/php*php*
php php php php php php*php Createphp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp createCollectionphp(php$namephp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteCollectionphp(php$namephp,php php$optionsphp php=php nullphp)php;

php php php php php php php php/php*php*
php php php php php php*php Listphp collectionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp arrayphp Listphp ofphp collectionphp names
php php php php php php*php/
php php php php publicphp functionphp listCollectionsphp(php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Listphp allphp documentsphp inphp aphp collection
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php publicphp functionphp listDocumentsphp(php$collectionNamephp,php arrayphp php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Insertphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php Zendphp_Cloudphp_DocumentServicephp_Documentphp php$documentphp Documentphp tophp insert
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp insertDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Replacephp document
php php php php php php*php Thephp newphp documentphp replacesphp thephp existingphp documentphp withphp thephp samephp IDphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp Zendphp_Cloudphp_DocumentServicephp_Documentphp php$document
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp replaceDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Updatephp document
php php php php php php*php Thephp fieldsphp ofphp thephp existingphp documentsphp willphp bephp updatedphp.
php php php php php php*php Fieldsphp notphp specifiedphp inphp thephp setphp willphp bephp leftphp asphp-isphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php mixedphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$documentIDphp Documentphp IDphp,php adapterphp-dependentphp,php orphp documentphp containingphp updates
php php php php php php*php php@paramphp php arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$fieldsetphp Setphp ofphp fieldsphp tophp update
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp updateDocumentphp(php$collectionNamephp,php php$documentIDphp,php php$fieldsetphp php=php nullphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp document
php php php php php php*
php php php php php php*php php@paramphp stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp mixedphp php php$documentIDphp Documentphp IDphp,php adapterphp-dependent
php php php php php php*php php@paramphp arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteDocumentphp(php$collectionNamephp,php php$documentIDphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Fetchphp singlephp documentphp byphp ID
php php php php php php*
php php php php php php*php Willphp returnphp falsephp ifphp thephp documentphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@paramphp stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp mixedphp php$documentIDphp Documentphp IDphp,php adapterphp-dependent
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php publicphp functionphp fetchDocumentphp(php$collectionNamephp,php php$documentIDphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Queryphp forphp documentsphp storedphp inphp thephp documentphp servicephp.php Ifphp aphp stringphp isphp passedphp in
php php php php php php*php php$queryphp,php thephp queryphp stringphp willphp bephp passedphp directlyphp tophp thephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php stringphp php$query
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp fieldphp sets
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$collectionNamephp,php php$queryphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Createphp queryphp statement
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fields
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$fieldsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp servicephp client
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)php;
php}
