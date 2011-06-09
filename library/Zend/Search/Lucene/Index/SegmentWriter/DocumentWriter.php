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
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DocumentWriterphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentWriterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_DocumentWriterphp extendsphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriter
php{
php php php php php/php*php*
php php php php php php*php Termphp Dictionary
php php php php php php*php Arrayphp ofphp thephp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objects
php php php php php php*php Correspondingphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp objectphp storedphp inphp thephp php$php_termDictionaryInfos
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_termDictionaryphp;

php php php php php/php*php*
php php php php php php*php Documentsphp,php whichphp containphp thephp term
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_termDocsphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php$namephp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$directoryphp,php php$namephp)php;

php php php php php php php php php$thisphp-php>php_termDocsphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_termDictionaryphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp documentphp tophp thisphp segmentphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Documentphp php$document
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addDocumentphp(Zendphp_Searchphp_Lucenephp_Documentphp php$documentphp)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Similarityphp.phpphp'php;

php php php php php php php php php$storedFieldsphp php=php arrayphp(php)php;
php php php php php php php php php$docNormsphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$similarityphp php php php=php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp:php:getDefaultphp(php)php;

php php php php php php php php foreachphp php(php$documentphp-php>getFieldNamesphp(php)php asphp php$fieldNamephp)php php{
php php php php php php php php php php php php php$fieldphp php=php php$documentphp-php>getFieldphp(php$fieldNamephp)php;

php php php php php php php php php php php php ifphp php(php$fieldphp-php>storeTermVectorphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp termphp vectorphp storingphp support
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Storephp termphp vectorphp functionalityphp isphp notphp supportedphp yetphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$fieldphp-php>isIndexedphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$fieldphp-php>isTokenizedphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;

php php php php php php php php php php php php php php php php php php php php php$analyzerphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$analyzerphp-php>setInputphp(php$fieldphp-php>valuephp,php php$fieldphp-php>encodingphp)php;

php php php php php php php php php php php php php php php php php php php php php$positionphp php php php php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$tokenCounterphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php whilephp php(php(php$tokenphp php=php php$analyzerphp-php>nextTokenphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenCounterphp+php+php;

php php php php php php php php php php php php php php php php php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$tokenphp-php>getTermTextphp(php)php,php php$fieldphp-php>namephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$termKeyphp php=php php$termphp-php>keyphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_termDictionaryphp[php$termKeyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Newphp term
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDictionaryphp[php$termKeyphp]php php=php php$termphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Existingphp termphp,php butphp newphp termphp entry
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$positionphp php+php=php php$tokenphp-php>getPositionIncrementphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php[php]php php=php php$positionphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$tokenCounterphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Fieldphp containsphp emptyphp valuephp.php Treatphp itphp asphp nonphp-indexedphp andphp nonphp-tokenized
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp php=php clonephp(php$fieldphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>isIndexedphp php=php php$fieldphp-php>isTokenizedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docNormsphp[php$fieldphp-php>namephp]php php=php chrphp(php$similarityphp-php>encodeNormphp(php php$similarityphp-php>lengthNormphp(php$fieldphp-php>namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenCounterphp)php*
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$documentphp-php>boostphp*
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>boostphp php)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php(php$fieldUtfphp8Valuephp php=php php$fieldphp-php>getUtfphp8Valuephp(php)php)php php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Fieldphp containsphp emptyphp valuephp.php Treatphp itphp asphp nonphp-indexedphp andphp nonphp-tokenized
php php php php php php php php php php php php php php php php php php php php php$fieldphp php=php clonephp(php$fieldphp)php;
php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>isIndexedphp php=php php$fieldphp-php>isTokenizedphp php=php falsephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$fieldUtfphp8Valuephp,php php$fieldphp-php>namephp)php;
php php php php php php php php php php php php php php php php php php php php php$termKeyphp php=php php$termphp-php>keyphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_termDictionaryphp[php$termKeyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Newphp term
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDictionaryphp[php$termKeyphp]php php=php php$termphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Existingphp termphp,php butphp newphp termphp entry
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termDocsphp[php$termKeyphp]php[php$thisphp-php>php_docCountphp]php[php]php php=php php0php;php php/php/php position

php php php php php php php php php php php php php php php php php php php php php$docNormsphp[php$fieldphp-php>namephp]php php=php chrphp(php$similarityphp-php>encodeNormphp(php php$similarityphp-php>lengthNormphp(php$fieldphp-php>namephp,php php1php)php*
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$documentphp-php>boostphp*
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>boostphp php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$fieldphp-php>isStoredphp)php php{
php php php php php php php php php php php php php php php php php$storedFieldsphp[php]php php=php php$fieldphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>addFieldphp(php$fieldphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_fieldsphp asphp php$fieldNamephp php=php>php php$fieldphp)php php{
php php php php php php php php php php php php ifphp php(php!php$fieldphp-php>isIndexedphp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_normsphp[php$fieldNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNamephp]php php=php strphp_repeatphp(chrphp(php$similarityphp-php>encodeNormphp(php php$similarityphp-php>lengthNormphp(php$fieldNamephp,php php0php)php php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docCountphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$docNormsphp[php$fieldNamephp]php)php)php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNamephp]php php.php=php php$docNormsphp[php$fieldNamephp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNamephp]php php.php=php chrphp(php$similarityphp-php>encodeNormphp(php php$similarityphp-php>lengthNormphp(php$fieldNamephp,php php0php)php php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>addStoredFieldsphp(php$storedFieldsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Dumpphp Termphp Dictionaryphp php(php.tisphp)php andphp Termphp Dictionaryphp Indexphp php(php.tiiphp)php segmentphp files
php php php php php php*php/
php php php php protectedphp functionphp php_dumpDictionaryphp(php)
php php php php php{
php php php php php php php php ksortphp(php$thisphp-php>php_termDictionaryphp,php SORTphp_STRINGphp)php;

php php php php php php php php php$thisphp-php>initializeDictionaryFilesphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termDictionaryphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php$thisphp-php>addTermphp(php$termphp,php php$thisphp-php>php_termDocsphp[php$termIdphp]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>closeDictionaryFilesphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Closephp segmentphp,php writephp itphp tophp diskphp andphp returnphp segmentphp info
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_docCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dumpFNMphp(php)php;
php php php php php php php php php$thisphp-php>php_dumpDictionaryphp(php)php;

php php php php php php php php php$thisphp-php>php_generateCFSphp(php)php;

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentInfophp.phpphp'php;

php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp(php$thisphp-php>php_directoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp)php;
php php php php php}

php}

