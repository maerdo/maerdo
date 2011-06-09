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
php php*php php@versionphp php php php php$Idphp:php Docxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp/OpenXmlphp.phpphp'php;

php/php*php*
php php*php Docxphp documentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Documentphp_Docxphp extendsphp Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp php{
php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php WordprocessingML
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_WORDPROCESSINGMLphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/wordprocessingmlphp/php2php0php0php6php/mainphp'php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$fileName
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php$fileNamephp,php php$storeContentphp)php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php'ZipArchivephp'php,php falsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'MSphp Officephp documentsphp processingphp functionalityphp requiresphp Zipphp extensionphp tophp bephp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Documentphp dataphp holders
php php php php php php php php php$documentBodyphp php=php arrayphp(php)php;
php php php php php php php php php$corePropertiesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Openphp OpenXMLphp package
php php php php php php php php php$packagephp php=php newphp ZipArchivephp(php)php;
php php php php php php php php php$packagephp-php>openphp(php$fileNamephp)php;

php php php php php php php php php/php/php Readphp relationsphp andphp searchphp forphp officeDocument
php php php php php php php php php$relationsXmlphp php=php php$packagephp-php>getFromNamephp(php'php_relsphp/php.relsphp'php)php;
php php php php php php php php ifphp php(php$relationsXmlphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Invalidphp archivephp orphp corruptedphp php.docxphp filephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$relationsphp php=php simplexmlphp_loadphp_stringphp(php$relationsXmlphp)php;
php php php php php php php php foreachphp(php$relationsphp-php>Relationshipphp asphp php$relphp)php php{
php php php php php php php php php php php php ifphp php(php$relphp php[php"Typephp"php]php php=php=php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_OFFICEDOCUMENTphp)php php{
php php php php php php php php php php php php php php php php php/php/php Foundphp officephp documentphp!php Readphp inphp contentsphp.php.php.
php php php php php php php php php php php php php php php php php$contentsphp php=php simplexmlphp_loadphp_stringphp(php$packagephp-php>getFromNamephp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>absoluteZipPathphp(dirnamephp(php$relphp[php'Targetphp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php/php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php basenamephp(php$relphp[php'Targetphp'php]php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php php$contentsphp-php>registerXPathNamespacephp(php'wphp'php,php Zendphp_Searchphp_Lucenephp_Documentphp_Docxphp:php:SCHEMAphp_WORDPROCESSINGMLphp)php;
php php php php php php php php php php php php php php php php php$paragraphsphp php=php php$contentsphp-php>xpathphp(php'php/php/wphp:bodyphp/wphp:pphp'php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$paragraphsphp asphp php$paragraphphp)php php{
php php php php php php php php php php php php php php php php php php php php php$runsphp php=php php$paragraphphp-php>xpathphp(php'php.php/php/wphp:rphp/php*php[namephp(php)php php=php php"wphp:tphp"php orphp namephp(php)php php=php php"wphp:brphp"php]php'php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$runsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Paragraphphp doesnphp'tphp containphp anyphp textphp orphp breaks
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$runsphp asphp php$runphp)php php{
php php php php php php php php php php php php php php php php php php php php php ifphp php(php$runphp-php>getNamephp(php)php php=php=php php'brphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp element
php php php php php php php php php php php php php php php php php php php php php php php php php php$documentBodyphp[php]php php=php php'php php'php;
php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php$documentBodyphp[php]php php=php php(stringphp)php$runphp;
php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Addphp spacephp afterphp eachphp paragraphphp.php Sophp theyphp arephp notphp boundphp togetherphp.
php php php php php php php php php php php php php php php php php php php php php$documentBodyphp[php]php php=php php'php php'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Readphp corephp properties
php php php php php php php php php$corePropertiesphp php=php php$thisphp-php>extractMetaDataphp(php$packagephp)php;

php php php php php php php php php/php/php Closephp file
php php php php php php php php php$packagephp-php>closephp(php)php;

php php php php php php php php php/php/php Storephp filename
php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'filenamephp'php,php php$fileNamephp,php php'UTFphp-php8php'php)php)php;

php php php php php php php php php/php/php Storephp contents
php php php php php php php php ifphp php(php$storeContentphp)php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'bodyphp'php,php implodephp(php'php'php,php php$documentBodyphp)php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:UnStoredphp(php'bodyphp'php,php implodephp(php'php'php,php php$documentBodyphp)php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Storephp metaphp dataphp properties
php php php php php php php php foreachphp php(php$corePropertiesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php$keyphp,php php$valuephp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Storephp titlephp php(ifphp notphp presentphp inphp metaphp dataphp)
php php php php php php php php ifphp php(php!php issetphp(php$corePropertiesphp[php'titlephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'titlephp'php,php php$fileNamephp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp Docxphp documentphp fromphp aphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$fileName
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Documentphp_Docx
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Documentphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp loadDocxFilephp(php$fileNamephp,php php$storeContentphp php=php falsephp)php php{
php php php php php php php php ifphp php(php!isphp_readablephp(php$fileNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Documentphp_Exceptionphp(php'Providedphp filephp php\php'php'php php.php php$fileNamephp php.php php'php\php'php isphp notphp readablephp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Documentphp_Docxphp(php$fileNamephp,php php$storeContentphp)php;
php php php php php}
php}
