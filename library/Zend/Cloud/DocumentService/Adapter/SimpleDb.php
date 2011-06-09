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

requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Adapterphp/AbstractAdapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Adapterphp/SimpleDbphp/Queryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp.phpphp'php;
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Attributephp.phpphp'php;

php/php*php*
php php*php SimpleDBphp adapterphp forphp documentphp servicephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDb
php php php php extendsphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php{
php php php php php/php*
php php php php php php*php Optionsphp arrayphp keysphp forphp thephp SimpleDBphp adapterphp.
php php php php php php*php/
php php php php constphp AWSphp_ACCESSphp_KEYphp php php php=php php'awsphp_accesskeyphp'php;
php php php php constphp AWSphp_SECRETphp_KEYphp php php php=php php'awsphp_secretkeyphp'php;

php php php php constphp ITEMphp_NAMEphp php php php php php php php php=php php'ItemNamephp'php;

php php php php constphp MERGEphp_OPTIONphp php php php php php=php php"mergephp"php;
php php php php constphp RETURNphp_DOCUMENTSphp php=php php"returnphp_documentsphp"php;

php php php php constphp DEFAULTphp_QUERYphp_CLASSphp php=php php'Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp_Queryphp'php;


php php php php php/php*php*
php php php php php php*php SQSphp servicephp instancephp.
php php php php php php*php php@varphp Zendphp_Servicephp_Amazonphp_SimpleDb
php php php php php php*php/
php php php php protectedphp php$php_simpleDbphp;

php php php php php/php*php*
php php php php php php*php Classphp tophp utilizephp forphp newphp queryphp objects
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_queryClassphp php=php php'Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp_Queryphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp optionsphp providedphp tophp constructorphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_simpleDbphp php=php newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp(
php php php php php php php php php php php php php$optionsphp[selfphp:php:AWSphp_ACCESSphp_KEYphp]php,php php$optionsphp[selfphp:php:AWSphp_SECRETphp_KEYphp]
php php php php php php php php php)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sqsphp-php>getHttpClientphp(php)php-php>setAdapterphp(php$optionsphp[selfphp:php:HTTPphp_ADAPTERphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:DOCUMENTphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDocumentClassphp(php$optionsphp[selfphp:php:DOCUMENTphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:DOCUMENTSETphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDocumentSetClassphp(php$optionsphp[selfphp:php:DOCUMENTSETphp_CLASSphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[selfphp:php:QUERYphp_CLASSphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setQueryClassphp(php$optionsphp[selfphp:php:QUERYphp_CLASSphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp createCollectionphp(php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_simpleDbphp-php>createDomainphp(php$namephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp domainphp creationphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteCollectionphp(php$namephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_simpleDbphp-php>deleteDomainphp(php$namephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp collectionphp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp collectionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listCollectionsphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php TODOphp packagephp thisphp inphp Pages
php php php php php php php php php php php php php$domainsphp php=php php$thisphp-php>php_simpleDbphp-php>listDomainsphp(php)php-php>getDataphp(php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp collectionphp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domainsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp documents
php php php php php php*
php php php php php php*php Returnsphp aphp keyphp/valuephp arrayphp ofphp documentphp namesphp tophp documentphp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Namephp ofphp collectionphp forphp whichphp tophp listphp documents
php php php php php php*php php@paramphp php arrayphp|nullphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php publicphp functionphp listDocumentsphp(php$collectionNamephp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$queryphp php=php php$thisphp-php>selectphp(php'php*php'php)php-php>fromphp(php$collectionNamephp)php;
php php php php php php php php php$itemsphp php=php php$thisphp-php>queryphp(php$collectionNamephp,php php$queryphp,php php$optionsphp)php;
php php php php php php php php returnphp php$itemsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Insertphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp intophp whichphp tophp insertphp document
php php php php php php*php php@paramphp php arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$document
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp insertDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$documentphp)php)php php{
php php php php php php php php php php php php php$documentphp php=php php php$thisphp-php>php_getDocumentFromArrayphp(php$documentphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_simpleDbphp-php>putAttributesphp(
php php php php php php php php php php php php php php php php php$collectionNamephp,
php php php php php php php php php php php php php php php php php$documentphp-php>getIDphp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_makeAttributesphp(php$documentphp-php>getIDphp(php)php,php php$documentphp-php>getFieldsphp(php)php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp insertionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Replacephp anphp existingphp documentphp withphp aphp newphp version
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$document
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp replaceDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$documentphp)php)php php{
php php php php php php php php php php php php php$documentphp php=php php php$thisphp-php>php_getDocumentFromArrayphp(php$documentphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Invalidphp documentphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Deletephp documentphp firstphp,php thenphp insertphp.php PutAttributesphp alwaysphp keepsphp any
php php php php php php php php php/php/php fieldsphp notphp referencedphp inphp thephp payloadphp,php butphp presentphp inphp thephp document
php php php php php php php php php$documentIdphp php=php php$documentphp-php>getIdphp(php)php;
php php php php php php php php php$fieldsphp php php php php php=php php$documentphp-php>getFieldsphp(php)php;
php php php php php php php php php$docClassphp php php php=php getphp_classphp(php$documentphp)php;
php php php php php php php php php$thisphp-php>deleteDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp)php;

php php php php php php php php php$documentphp php php php=php newphp php$docClassphp(php$fieldsphp,php php$documentIdphp)php;
php php php php php php php php php$thisphp-php>insertDocumentphp(php$collectionNamephp,php php$documentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp documentphp.php Thephp newphp documentphp replacesphp thephp existingphp documentphp.
php php php php php php*
php php php php php php*php Optionphp php'mergephp'php specifiesphp tophp addphp allphp attributesphp php(ifphp truephp)php or
php php php php php php*php specificphp attributesphp php(php"attrphp"php php=php>php truephp)php insteadphp ofphp replacingphp themphp.
php php php php php php*php Byphp defaultphp,php attributesphp arephp replacedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionName
php php php php php php*php php@paramphp php mixedphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$documentIdphp Documentphp IDphp,php adapterphp-dependent
php php php php php php*php php@paramphp php arrayphp|Zendphp_Cloudphp_DocumentServicephp_Documentphp php$fieldsetphp Setphp ofphp fieldsphp tophp update
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp updateDocumentphp(php$collectionNamephp,php php$documentIdphp,php php$fieldsetphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$fieldsetphp php&php&php php$documentIdphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php php$fieldsetphp php php php=php php$documentIdphp-php>getFieldsphp(php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$documentIdphp)php)php php{
php php php php php php php php php php php php php php php php php$documentIdphp php=php php$documentIdphp-php>getIdphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php$fieldsetphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$documentIdphp)php)php php{
php php php php php php php php php php php php php php php php php$documentIdphp php=php php$fieldsetphp-php>getIdphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$fieldsetphp php=php php$fieldsetphp-php>getFieldsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$replacephp php=php arrayphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$optionsphp[selfphp:php:MERGEphp_OPTIONphp]php)php)php php{
php php php php php php php php php php php php php/php/php nophp mergephp optionphp php-php wephp replacephp all
php php php php php php php php php php php php foreachphp php(php$fieldsetphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$replacephp[php$keyphp]php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp[selfphp:php:MERGEphp_OPTIONphp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$fieldsetphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$optionsphp[selfphp:php:MERGEphp_OPTIONphp]php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php ifphp therephp'sphp mergephp keyphp,php wephp addphp itphp,php otherwisephp wephp replacephp it
php php php php php php php php php php php php php php php php php php php php php$replacephp[php$keyphp]php php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php php/php/php otherwisephp php$replacephp isphp emptyphp php-php allphp isphp merged

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_simpleDbphp-php>putAttributesphp(
php php php php php php php php php php php php php php php php php$collectionNamephp,
php php php php php php php php php php php php php php php php php$documentIdphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_makeAttributesphp(php$documentIdphp,php php$fieldsetphp)php,
php php php php php php php php php php php php php php php php php$replace
php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp updatephp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp documentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp fromphp whichphp tophp deletephp document
php php php php php php*php php@paramphp php mixedphp php php$documentphp Documentphp IDphp orphp Documentphp objectphp.
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteDocumentphp(php$collectionNamephp,php php$documentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$documentphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp)php php{
php php php php php php php php php php php php php$documentphp php=php php$documentphp-php>getIdphp(php)php;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_simpleDbphp-php>deleteAttributesphp(php$collectionNamephp,php php$documentphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp deletionphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp singlephp documentphp byphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php mixedphp php$documentIdphp Documentphp IDphp,php adapterphp-dependent
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php publicphp functionphp fetchDocumentphp(php$collectionNamephp,php php$documentIdphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$attributesphp php=php php$thisphp-php>php_simpleDbphp-php>getAttributesphp(php$collectionNamephp,php php$documentIdphp)php;
php php php php php php php php php php php php ifphp php(php$attributesphp php=php=php falsephp php|php|php countphp(php$attributesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_resolveAttributesphp(php$attributesphp,php truephp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp fetchingphp documentphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp forphp documentsphp storedphp inphp thephp documentphp servicephp.php Ifphp aphp stringphp isphp passedphp in
php php php php php php*php php$queryphp,php thephp queryphp stringphp willphp bephp passedphp directlyphp tophp thephp servicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$collectionNamephp Collectionphp name
php php php php php php*php php@paramphp php stringphp php$query
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php publicphp functionphp queryphp(php$collectionNamephp,php php$queryphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$returnDocsphp php=php issetphp(php$optionsphp[selfphp:php:RETURNphp_DOCUMENTSphp]php)
php php php php php php php php php php php php php php php php php php php php php?php php(boolphp)php php$optionsphp[selfphp:php:RETURNphp_DOCUMENTSphp]
php php php php php php php php php php php php php php php php php php php php php:php truephp;

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$queryphp instanceofphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp_Queryphp)php php{
php php php php php php php php php php php php php php php php php$queryphp php=php php$queryphp-php>assemblephp(php$collectionNamephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_simpleDbphp-php>selectphp(php$queryphp)php;
php php php php php php php php php}php catchphp(Zendphp_Servicephp_Amazonphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Errorphp onphp documentphp queryphp:php php'php.php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_getDocumentSetFromResultSetphp(php$resultphp,php php$returnDocsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp queryphp statement
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fields
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp_Query
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$fieldsphp php=php nullphp)
php php php php php{
php php php php php php php php php$queryClassphp php=php php$thisphp-php>getQueryClassphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$queryClassphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$queryClassphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp php=php newphp php$queryClassphp(php$thisphp)php;
php php php php php php php php php$defaultClassphp php=php selfphp:php:DEFAULTphp_QUERYphp_CLASSphp;
php php php php php php php php ifphp php(php!php$queryphp instanceofphp php$defaultClassphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Queryphp classphp mustphp extendphp php'php php.php selfphp:php:DEFAULTphp_QUERYphp_CLASSphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp-php>selectphp(php$fieldsphp)php;
php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp servicephp client
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_SimpleDb
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_simpleDbphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp arrayphp ofphp keyphp-valuephp pairsphp tophp arrayphp ofphp Amazonphp attributes
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_makeAttributesphp(php$namephp,php php$attributesphp)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$attributesphp asphp php$keyphp php=php>php php$attrphp)php php{
php php php php php php php php php php php php php$resultphp[php]php php=php newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Attributephp(php$namephp,php php$keyphp,php php$attrphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp arrayphp ofphp Amazonphp attributesphp tophp arrayphp ofphp keyphp-valuephp pairs
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_resolveAttributesphp(php$attributesphp,php php$returnDocumentphp php=php falsephp)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$attributesphp asphp php$attrphp)php php{
php php php php php php php php php php php php php$valuephp php=php php$attrphp-php>getValuesphp(php)php;
php php php php php php php php php php php php ifphp php(countphp(php$valuephp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php nullphp;
php php php php php php php php php php php php php}php elseifphp php(countphp(php$valuephp)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$valuephp[php0php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php$attrphp-php>getNamephp(php)php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp asphp documentphp objectphp?
php php php php php php php php ifphp php(php$returnDocumentphp)php php{
php php php php php php php php php php php php php$documentClassphp php=php php$thisphp-php>getDocumentClassphp(php)php;
php php php php php php php php php php php php returnphp newphp php$documentClassphp(php$resultphp,php php$attrphp-php>getItemNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp suitablephp documentphp fromphp arrayphp ofphp fields
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$document
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php protectedphp functionphp php_getDocumentFromArrayphp(php$documentphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$documentphp[selfphp:php:ITEMphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php php$documentphp[selfphp:php:ITEMphp_NAMEphp]php;
php php php php php php php php php php php php php php php php unsetphp(php$documentphp[selfphp:php:ITEMphp_NAMEphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Fieldsphp arrayphp shouldphp containphp thephp keyphp fieldphp php'php.Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php;
php php php php php php php php php php php php unsetphp(php$documentphp[Zendphp_Cloudphp_DocumentServicephp_Documentphp:php:KEYphp_FIELDphp]php)php;
php php php php php php php php php}

php php php php php php php php php$documentClassphp php=php php$thisphp-php>getDocumentClassphp(php)php;
php php php php php php php php returnphp newphp php$documentClassphp(php$documentphp,php php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp DocumentSetphp fromphp aphp SimpleDbphp resultset
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Amazonphp_SimpleDbphp_Pagephp php$resultSet
php php php php php php*php php@paramphp php boolphp php$returnDocs
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_DocumentSet
php php php php php php*php/
php php php php protectedphp functionphp php_getDocumentSetFromResultSetphp(Zendphp_Servicephp_Amazonphp_SimpleDbphp_Pagephp php$resultSetphp,php php$returnDocsphp php=php truephp)
php php php php php{
php php php php php php php php php$docsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$resultSetphp-php>getDataphp(php)php asphp php$itemphp)php php{
php php php php php php php php php php php php php$docsphp[php]php php=php php$thisphp-php>php_resolveAttributesphp(php$itemphp,php php$returnDocsphp)php;
php php php php php php php php php}

php php php php php php php php php$setClassphp php=php php$thisphp-php>getDocumentSetClassphp(php)php;
php php php php php php php php returnphp newphp php$setClassphp(php$docsphp)php;
php php php php php}
php}
