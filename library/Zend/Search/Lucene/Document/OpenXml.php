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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php OpenXmlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp.phpphp'php;


php/php*php*
php php*php OpenXMLphp documentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp extendsphp Zendphp_Searchphp_Lucenephp_Document
php{
php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Relationships
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_RELATIONSHIPphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/packagephp/php2php0php0php6php/relationshipsphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Officephp document
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_OFFICEDOCUMENTphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/officeDocumentphp/php2php0php0php6php/relationshipsphp/officeDocumentphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Corephp properties
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_COREPROPERTIESphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/packagephp/php2php0php0php6php/relationshipsphp/metadataphp/corephp-propertiesphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Dublinphp Core
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_DUBLINCOREphp php=php php'httpphp:php/php/purlphp.orgphp/dcphp/elementsphp/php1php.php1php/php'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Dublinphp Corephp Terms
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_DUBLINCORETERMSphp php=php php'httpphp:php/php/purlphp.orgphp/dcphp/termsphp/php'php;

php php php php php/php*php*
php php php php php php*php Extractphp metadataphp fromphp document
php php php php php php*
php php php php php php*php php@paramphp ZipArchivephp php$packagephp php php php ZipArchivephp OpenXMLphp package
php php php php php php*php php@returnphp arrayphp php php php Keyphp-valuephp pairsphp containingphp documentphp metaphp data
php php php php php php*php/
php php php php protectedphp functionphp extractMetaDataphp(ZipArchivephp php$packagephp)
php php php php php{
php php php php php php php php php/php/php Dataphp holders
php php php php php php php php php$corePropertiesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Readphp relationsphp andphp searchphp forphp corephp properties
php php php php php php php php php$relationsphp php=php simplexmlphp_loadphp_stringphp(php$packagephp-php>getFromNamephp(php"php_relsphp/php.relsphp"php)php)php;
php php php php php php php php foreachphp php(php$relationsphp-php>Relationshipphp asphp php$relphp)php php{
php php php php php php php php php php php php ifphp php(php$relphp[php"Typephp"php]php php=php=php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_COREPROPERTIESphp)php php{
php php php php php php php php php php php php php php php php php/php/php Foundphp corephp propertiesphp!php Readphp inphp contentsphp.php.php.
php php php php php php php php php php php php php php php php php$contentsphp php=php simplexmlphp_loadphp_stringphp(
php php php php php php php php php php php php php php php php php php php php php$packagephp-php>getFromNamephp(dirnamephp(php$relphp[php"Targetphp"php]php)php php.php php"php/php"php php.php basenamephp(php$relphp[php"Targetphp"php]php)php)
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$contentsphp-php>childrenphp(Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_DUBLINCOREphp)php asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$corePropertiesphp[php$childphp-php>getNamephp(php)php]php php=php php(stringphp)php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$contentsphp-php>childrenphp(Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_COREPROPERTIESphp)php asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$corePropertiesphp[php$childphp-php>getNamephp(php)php]php php=php php(stringphp)php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$contentsphp-php>childrenphp(Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_DUBLINCORETERMSphp)php asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$corePropertiesphp[php$childphp-php>getNamephp(php)php]php php=php php(stringphp)php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$corePropertiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp absolutephp zipphp path
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp absoluteZipPathphp(php$pathphp)php php{
php php php php php php php php php$pathphp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php DIRECTORYphp_SEPARATORphp,php php$pathphp)php;
php php php php php php php php php$partsphp php=php arrayphp_filterphp(explodephp(DIRECTORYphp_SEPARATORphp,php php$pathphp)php,php php'strlenphp'php)php;
php php php php php php php php php$absolutesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$partphp)php php{
php php php php php php php php php php php php ifphp php(php'php.php'php php=php=php php$partphp)php continuephp;
php php php php php php php php php php php php ifphp php(php'php.php.php'php php=php=php php$partphp)php php{
php php php php php php php php php php php php php php php php arrayphp_popphp(php$absolutesphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$absolutesphp[php]php php=php php$partphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php/php'php,php php$absolutesphp)php;
php php php php php}
php}
