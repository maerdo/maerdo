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
php php*php php@versionphp php php php php$Idphp:php SegmentMergerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentInfophp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentMerger
php{
php php php php php/php*php*
php php php php php php*php Targetphp segmentphp writer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_StreamWriter
php php php php php php*php/
php php php php privatephp php$php_writerphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp docsphp inphp aphp newphp segment
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_docCountphp;

php php php php php/php*php*
php php php php php php*php Aphp setphp ofphp segmentsphp tophp bephp merged
php php php php php php*
php php php php php php*php php@varphp arrayphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php/
php php php php privatephp php$php_segmentInfosphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp tophp signalphp,php thatphp mergephp isphp alreadyphp done
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_mergeDonephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Fieldphp map
php php php php php php*php php[php<segmentphp_namephp>php]php[php<fieldphp_numberphp>php]php php=php>php php<targetphp_fieldphp_numberphp>
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_fieldsMapphp php=php arrayphp(php)php;



php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Createsphp newphp segmentphp mergerphp withphp php$directoryphp asphp targetphp tophp mergephp segmentsphp into
php php php php php php*php andphp php$namephp asphp aphp namephp ofphp newphp segment
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$directoryphp,php php$namephp)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_StreamWriterphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentWriterphp/StreamWriterphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_writerphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_StreamWriterphp(php$directoryphp,php php$namephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp segmnetphp tophp aphp collectionphp ofphp segmentsphp tophp bephp merged
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php$segment
php php php php php php*php/
php php php php publicphp functionphp addSourcephp(Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php$segmentInfophp)
php php php php php{
php php php php php php php php php$thisphp-php>php_segmentInfosphp[php$segmentInfophp-php>getNamephp(php)php]php php=php php$segmentInfophp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Dophp mergephp.
php php php php php php*
php php php php php php*php Returnsphp numberphp ofphp documentsphp inphp newlyphp createdphp segment
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp mergephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_mergeDonephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Mergephp isphp alreadyphp donephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_segmentInfosphp)php <php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp numberphp ofphp segmentsphp tophp bephp mergedphp php(php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php countphp(php$thisphp-php>php_segmentInfosphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_mergeFieldsphp(php)php;
php php php php php php php php php$thisphp-php>php_mergeNormsphp(php)php;
php php php php php php php php php$thisphp-php>php_mergeStoredFieldsphp(php)php;
php php php php php php php php php$thisphp-php>php_mergeTermsphp(php)php;

php php php php php php php php php$thisphp-php>php_mergeDonephp php=php truephp;

php php php php php php php php returnphp php$thisphp-php>php_writerphp-php>closephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Mergephp fieldsphp information
php php php php php php*php/
php php php php privatephp functionphp php_mergeFieldsphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php foreachphp php(php$segmentInfophp-php>getFieldInfosphp(php)php asphp php$fieldInfophp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_fieldsMapphp[php$segNamephp]php[php$fieldInfophp-php>numberphp]php php=php php$thisphp-php>php_writerphp-php>addFieldInfophp(php$fieldInfophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp fieldphp'sphp normalizationphp factors
php php php php php php*php/
php php php php privatephp functionphp php_mergeNormsphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_writerphp-php>getFieldInfosphp(php)php asphp php$fieldInfophp)php php{
php php php php php php php php php php php php ifphp php(php$fieldInfophp-php>isIndexedphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$segmentInfophp-php>hasDeletionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$srcNormphp php=php php$segmentInfophp-php>normVectorphp(php$fieldInfophp-php>namephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$normphp php php php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$docsphp php php php php=php php$segmentInfophp-php>countphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$docsphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$segmentInfophp-php>isDeletedphp(php$countphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$normphp php.php=php php$srcNormphp[php$countphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_writerphp-php>addNormphp(php$fieldInfophp-php>namephp,php php$normphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_writerphp-php>addNormphp(php$fieldInfophp-php>namephp,php php$segmentInfophp-php>normVectorphp(php$fieldInfophp-php>namephp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp fieldsphp information
php php php php php php*php/
php php php php privatephp functionphp php_mergeStoredFieldsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_docCountphp php=php php0php;

php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php$fdtFilephp php=php php$segmentInfophp-php>openCompoundFilephp(php'php.fdtphp'php)php;

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$segmentInfophp-php>countphp(php)php;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$fieldCountphp php=php php$fdtFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php$storedFieldsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp2php php=php php0php;php php$countphp2php <php php$fieldCountphp;php php$countphp2php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$fieldNumphp php=php php$fdtFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$bitsphp php=php php$fdtFilephp-php>readBytephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$fieldInfophp php=php php$segmentInfophp-php>getFieldphp(php$fieldNumphp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php(php$bitsphp php&php php2php)php)php php{php php/php/php Textphp data
php php php php php php php php php php php php php php php php php php php php php php php php php$storedFieldsphp[php]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Fieldphp(php$fieldInfophp-php>namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fdtFilephp-php>readStringphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldInfophp-php>isIndexedphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$bitsphp php&php php1php php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{php php php php php php php php php php php php php/php/php Binaryphp data
php php php php php php php php php php php php php php php php php php php php php php php php php$storedFieldsphp[php]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Fieldphp(php$fieldInfophp-php>namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fdtFilephp-php>readBinaryphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldInfophp-php>isIndexedphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$bitsphp php&php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$segmentInfophp-php>isDeletedphp(php$countphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docCountphp+php+php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_writerphp-php>addStoredFieldsphp(php$storedFieldsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Mergephp fieldsphp information
php php php php php php*php/
php php php php privatephp functionphp php_mergeTermsphp(php)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueuephp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermsPriorityQueuephp.phpphp'php;

php php php php php php php php php$segmentInfoQueuephp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueuephp(php)php;

php php php php php php php php php$segmentStartIdphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php$segmentStartIdphp php=php php$segmentInfophp-php>resetTermsStreamphp(php$segmentStartIdphp,php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp:php:SMphp_MERGEphp_INFOphp)php;

php php php php php php php php php php php php php/php/php Skipphp php"emptyphp"php segments
php php php php php php php php php php php php ifphp php(php$segmentInfophp-php>currentTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$segmentInfoQueuephp-php>putphp(php$segmentInfophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_writerphp-php>initializeDictionaryFilesphp(php)php;

php php php php php php php php php$termDocsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php(php$segmentInfophp php=php php$segmentInfoQueuephp-php>popphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Mergephp positionsphp array
php php php php php php php php php php php php php$termDocsphp php+php=php php$segmentInfophp-php>currentTermPositionsphp(php)php;

php php php php php php php php php php php php ifphp php(php$segmentInfoQueuephp-php>topphp(php)php php=php=php=php nullphp php|php|
php php php php php php php php php php php php php php php php php$segmentInfoQueuephp-php>topphp(php)php-php>currentTermphp(php)php-php>keyphp(php)php php!php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$segmentInfophp-php>currentTermphp(php)php-php>keyphp(php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Wephp gotphp newphp term
php php php php php php php php php php php php php php php php ksortphp(php$termDocsphp,php SORTphp_NUMERICphp)php;

php php php php php php php php php php php php php php php php php/php/php Addphp termphp ifphp itphp'sphp containedphp inphp anyphp document
php php php php php php php php php php php php php php php php ifphp php(countphp(php$termDocsphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_writerphp-php>addTermphp(php$segmentInfophp-php>currentTermphp(php)php,php php$termDocsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$termDocsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$segmentInfophp-php>nextTermphp(php)php;
php php php php php php php php php php php php php/php/php checkphp,php ifphp segmentphp dictionaryphp isphp finished
php php php php php php php php php php php php ifphp php(php$segmentInfophp-php>currentTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php/php Putphp segmentphp backphp intophp thephp priorityphp queue
php php php php php php php php php php php php php php php php php$segmentInfoQueuephp-php>putphp(php$segmentInfophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_writerphp-php>closeDictionaryFilesphp(php)php;
php php php php php}
php}
