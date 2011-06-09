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
php php*php php@versionphp php php php php$Idphp:php Xlsxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp/OpenXmlphp.phpphp'php;

php/php*php*
php php*php Xlsxphp documentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Documentphp_Xlsxphp extendsphp Zendphp_Searchphp_Lucenephp_Documentphp_OpenXml
php{
php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php SpreadsheetML
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_SPREADSHEETMLphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/spreadsheetmlphp/php2php0php0php6php/mainphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php DrawingML
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_DRAWINGMLphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/drawingmlphp/php2php0php0php6php/mainphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Sharedphp Strings
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_SHAREDSTRINGSphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/officeDocumentphp/php2php0php0php6php/relationshipsphp/sharedStringsphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Worksheetphp relation
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_WORKSHEETRELATIONphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/officeDocumentphp/php2php0php0php6php/relationshipsphp/worksheetphp'php;

php php php php php/php*php*
php php php php php php*php Xmlphp Schemaphp php-php Slidephp notesphp relation
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp SCHEMAphp_SLIDENOTESRELATIONphp php=php php'httpphp:php/php/schemasphp.openxmlformatsphp.orgphp/officeDocumentphp/php2php0php0php6php/relationshipsphp/notesSlidephp'php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$fileName
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php$fileNamephp,php php$storeContentphp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php'ZipArchivephp'php,php falsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'MSphp Officephp documentsphp processingphp functionalityphp requiresphp Zipphp extensionphp tophp bephp loadedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Documentphp dataphp holders
php php php php php php php php php$sharedStringsphp php=php arrayphp(php)php;
php php php php php php php php php$worksheetsphp php=php arrayphp(php)php;
php php php php php php php php php$documentBodyphp php=php arrayphp(php)php;
php php php php php php php php php$corePropertiesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Openphp OpenXMLphp package
php php php php php php php php php$packagephp php=php newphp ZipArchivephp(php)php;
php php php php php php php php php$packagephp-php>openphp(php$fileNamephp)php;

php php php php php php php php php/php/php Readphp relationsphp andphp searchphp forphp officeDocument
php php php php php php php php php$relationsXmlphp php=php php$packagephp-php>getFromNamephp(php'php_relsphp/php.relsphp'php)php;
php php php php php php php php ifphp php(php$relationsXmlphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Invalidphp archivephp orphp corruptedphp php.xlsxphp filephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$relationsphp php=php simplexmlphp_loadphp_stringphp(php$relationsXmlphp)php;
php php php php php php php php foreachphp php(php$relationsphp-php>Relationshipphp asphp php$relphp)php php{
php php php php php php php php php php php php ifphp php(php$relphp[php"Typephp"php]php php=php=php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_OFFICEDOCUMENTphp)php php{
php php php php php php php php php php php php php php php php php/php/php Foundphp officephp documentphp!php Readphp relationsphp forphp workbookphp.php.php.
php php php php php php php php php php php php php php php php php$workbookRelationsphp php=php simplexmlphp_loadphp_stringphp(php$packagephp-php>getFromNamephp(php php$thisphp-php>absoluteZipPathphp(dirnamephp(php$relphp[php"Targetphp"php]php)php php.php php"php/php_relsphp/php"php php.php basenamephp(php$relphp[php"Targetphp"php]php)php php.php php"php.relsphp"php)php)php php)php;
php php php php php php php php php php php php php php php php php$workbookRelationsphp-php>registerXPathNamespacephp(php"relphp"php,php Zendphp_Searchphp_Lucenephp_Documentphp_OpenXmlphp:php:SCHEMAphp_RELATIONSHIPphp)php;

php php php php php php php php php php php php php php php php php/php/php Readphp sharedphp strings
php php php php php php php php php php php php php php php php php$sharedStringsPathphp php=php php$workbookRelationsphp-php>xpathphp(php"relphp:Relationshipphp[php@Typephp=php'php"php php.php Zendphp_Searchphp_Lucenephp_Documentphp_Xlsxphp:php:SCHEMAphp_SHAREDSTRINGSphp php.php php"php'php]php"php)php;
php php php php php php php php php php php php php php php php php$sharedStringsPathphp php=php php(stringphp)php$sharedStringsPathphp[php0php]php[php'Targetphp'php]php;
php php php php php php php php php php php php php php php php php$xmlStringsphp php=php simplexmlphp_loadphp_stringphp(php$packagephp-php>getFromNamephp(php php$thisphp-php>absoluteZipPathphp(dirnamephp(php$relphp[php"Targetphp"php]php)php php.php php"php/php"php php.php php$sharedStringsPathphp)php)php php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$xmlStringsphp)php php&php&php issetphp(php$xmlStringsphp-php>siphp)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$xmlStringsphp-php>siphp asphp php$valphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$valphp-php>tphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$sharedStringsphp[php]php php=php php(stringphp)php$valphp-php>tphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(issetphp(php$valphp-php>rphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$sharedStringsphp[php]php php=php php$thisphp-php>php_parseRichTextphp(php$valphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Loopphp relationsphp forphp workbookphp andphp extractphp worksheetsphp.php.php.
php php php php php php php php php php php php php php php php foreachphp php(php$workbookRelationsphp-php>Relationshipphp asphp php$workbookRelationphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$workbookRelationphp[php"Typephp"php]php php=php=php Zendphp_Searchphp_Lucenephp_Documentphp_Xlsxphp:php:SCHEMAphp_WORKSHEETRELATIONphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$worksheetsphp[php strphp_replacephp(php php'rIdphp'php,php php'php'php,php php(stringphp)php$workbookRelationphp[php"Idphp"php]php)php php]php php=php simplexmlphp_loadphp_stringphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$packagephp-php>getFromNamephp(php php$thisphp-php>absoluteZipPathphp(dirnamephp(php$relphp[php"Targetphp"php]php)php php.php php"php/php"php php.php dirnamephp(php$workbookRelationphp[php"Targetphp"php]php)php php.php php"php/php"php php.php basenamephp(php$workbookRelationphp[php"Targetphp"php]php)php)php php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Sortphp worksheets
php php php php php php php php ksortphp(php$worksheetsphp)php;

php php php php php php php php php/php/php Extractphp contentsphp fromphp worksheets
php php php php php php php php foreachphp php(php$worksheetsphp asphp php$sheetKeyphp php=php>php php$worksheetphp)php php{
php php php php php php php php php php php php foreachphp php(php$worksheetphp-php>sheetDataphp-php>rowphp asphp php$rowphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$rowphp-php>cphp asphp php$cphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Determinephp dataphp type
php php php php php php php php php php php php php php php php php php php php php$dataTypephp php=php php(stringphp)php$cphp[php"tphp"php]php;
php php php php php php php php php php php php php php php php php php php php switchphp php(php$dataTypephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"sphp"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Valuephp isphp aphp sharedphp string
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(stringphp)php$cphp-php>vphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$sharedStringsphp[intvalphp(php$cphp-php>vphp)php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php"bphp"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Valuephp isphp boolean
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php$cphp-php>vphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php php'php0php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$valuephp php=php=php php'php1php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(boolphp)php$cphp-php>vphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php"inlineStrphp"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Valuephp isphp richphp textphp inline
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_parseRichTextphp(php$cphp-php>isphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp php"ephp"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Valuephp isphp anphp errorphp message
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(stringphp)php$cphp-php>vphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php$cphp-php>vphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Valuephp isphp aphp string
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php$cphp-php>vphp;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp forphp numericphp values
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$valuephp)php php&php&php php$dataTypephp php!php=php php'sphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php php(intphp)php$valuephp)php php$valuephp php=php php(intphp)php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php elseifphp php(php$valuephp php=php=php php(floatphp)php$valuephp)php php$valuephp php=php php(floatphp)php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php elseifphp php(php$valuephp php=php=php php(doublephp)php$valuephp)php php$valuephp php=php php(doublephp)php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$documentBodyphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
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
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'bodyphp'php,php implodephp(php'php php'php,php php$documentBodyphp)php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:UnStoredphp(php'bodyphp'php,php implodephp(php'php php'php,php php$documentBodyphp)php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Storephp metaphp dataphp properties
php php php php php php php php foreachphp php(php$corePropertiesphp asphp php$keyphp php=php>php php$valuephp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php$keyphp,php php$valuephp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Storephp titlephp php(ifphp notphp presentphp inphp metaphp dataphp)
php php php php php php php php ifphp php(php!issetphp(php$corePropertiesphp[php'titlephp'php]php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'titlephp'php,php php$fileNamephp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp richphp textphp XML
php php php php php php*
php php php php php php*php php@paramphp SimpleXMLElementphp php$is
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_parseRichTextphp(php$isphp php=php nullphp)php php{
php php php php php php php php php$valuephp php=php arrayphp(php)php;

php php php php php php php php ifphp php(issetphp(php$isphp-php>tphp)php)php php{
php php php php php php php php php php php php php$valuephp[php]php php=php php(stringphp)php$isphp-php>tphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$isphp-php>rphp asphp php$runphp)php php{
php php php php php php php php php php php php php php php php php$valuephp[php]php php=php php(stringphp)php$runphp-php>tphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php'php'php,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp Xlsxphp documentphp fromphp aphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$fileName
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Documentphp_Xlsx
php php php php php php*php/
php php php php publicphp staticphp functionphp loadXlsxFilephp(php$fileNamephp,php php$storeContentphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Documentphp_Xlsxphp(php$fileNamephp,php php$storeContentphp)php;
php php php php php}
php}
