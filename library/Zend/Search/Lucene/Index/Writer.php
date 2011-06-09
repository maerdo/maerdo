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
php php*php php@versionphp php php php php$Idphp:php Writerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_LockManagerphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/LockManagerphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_Writer
php{
php php php php php/php*php*
php php php php php php*php php@todophp Implementphp Analyzerphp substitution
php php php php php php*php php@todophp Implementphp Zendphp_Searchphp_Lucenephp_Storagephp_DirectoryRAMphp andphp Zendphp_Searchphp_Lucenephp_Storagephp_FileRAMphp tophp usephp itphp for
php php php php php php*php php php php php php php temporaryphp indexphp files
php php php php php php*php php@todophp Directoryphp lockphp processing
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Numberphp ofphp documentsphp requiredphp beforephp thephp bufferedphp inphp-memory
php php php php php php*php documentsphp arephp writtenphp intophp aphp newphp Segment
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$maxBufferedDocsphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Largestphp numberphp ofphp documentsphp everphp mergedphp byphp addDocumentphp(php)php.
php php php php php php*php Smallphp valuesphp php(ephp.gphp.php,php lessphp thanphp php1php0php,php0php0php0php)php arephp bestphp forphp interactivephp indexingphp,
php php php php php php*php asphp thisphp limitsphp thephp lengthphp ofphp pausesphp whilephp indexingphp tophp aphp fewphp secondsphp.
php php php php php php*php Largerphp valuesphp arephp bestphp forphp batchedphp indexingphp andphp speedierphp searchesphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp PHPphp_INTphp_MAX
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$maxMergeDocsphp php=php PHPphp_INTphp_MAXphp;

php php php php php/php*php*
php php php php php php*php Determinesphp howphp oftenphp segmentphp indicesphp arephp mergedphp byphp addDocumentphp(php)php.
php php php php php php*
php php php php php php*php Withphp smallerphp valuesphp,php lessphp RAMphp isphp usedphp whilephp indexingphp,
php php php php php php*php andphp searchesphp onphp unoptimizedphp indicesphp arephp fasterphp,
php php php php php php*php butphp indexingphp speedphp isphp slowerphp.
php php php php php php*
php php php php php php*php Withphp largerphp valuesphp,php morephp RAMphp isphp usedphp duringphp indexingphp,
php php php php php php*php andphp whilephp searchesphp onphp unoptimizedphp indicesphp arephp slowerphp,
php php php php php php*php indexingphp isphp fasterphp.
php php php php php php*
php php php php php php*php Thusphp largerphp valuesphp php(php>php php1php0php)php arephp bestphp forphp batchphp indexphp creationphp,
php php php php php php*php andphp smallerphp valuesphp php(<php php1php0php)php forphp indicesphp thatphp arephp interactivelyphp maintainedphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$mergeFactorphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Filephp systemphp adapterphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_Directory
php php php php php php*php/
php php php php privatephp php$php_directoryphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Changesphp counterphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_versionUpdatephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp segmentsphp,php createdphp byphp indexphp writer
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_newSegmentsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp segmentsphp tophp bephp deletedphp onphp commit
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_segmentsToDeletephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentphp segmentphp tophp addphp documents
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_DocumentWriter
php php php php php php*php/
php php php php privatephp php$php_currentSegmentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp objectsphp forphp thisphp indexphp.
php php php php php php*
php php php php php php*php Itphp'sphp aphp referencephp tophp thephp correspondingphp Zendphp_Searchphp_Lucenephp:php:php$php_segmentInfosphp array
php php php php php php*
php php php php php php*php php@varphp arrayphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php/
php php php php privatephp php$php_segmentInfosphp;

php php php php php/php*php*
php php php php php php*php Indexphp targetphp formatphp version
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_targetFormatVersionphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp indexfilesphp extensions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp staticphp php$php_indexExtensionsphp php=php arrayphp(php'php.cfsphp'php php=php>php php'php.cfsphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.cfxphp'php php=php>php php'php.cfxphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.fnmphp'php php=php>php php'php.fnmphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.fdxphp'php php=php>php php'php.fdxphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.fdtphp'php php=php>php php'php.fdtphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.tisphp'php php=php>php php'php.tisphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.tiiphp'php php=php>php php'php.tiiphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.frqphp'php php=php>php php'php.frqphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.prxphp'php php=php>php php'php.prxphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.tvxphp'php php=php>php php'php.tvxphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.tvdphp'php php=php>php php'php.tvdphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.tvfphp'php php=php>php php'php.tvfphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.delphp'php php=php>php php'php.delphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php.stiphp'php php=php>php php'php.stiphp'php php)php;


php php php php php/php*php*
php php php php php php*php Createphp emptyphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp integerphp php$generation
php php php php php php*php php@paramphp integerphp php$nameCount
php php php php php php*php/
php php php php publicphp staticphp functionphp createIndexphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php$generationphp,php php$nameCountphp)
php php php php php{
php php php php php php php php ifphp php(php$generationphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Createphp indexphp inphp prephp-php2php.php1php mode
php php php php php php php php php php php php foreachphp php(php$directoryphp-php>fileListphp(php)php asphp php$filephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$filephp php=php=php php'deletablephp'php php|php|
php php php php php php php php php php php php php php php php php php php php php$filephp php=php=php php'segmentsphp'php php php|php|
php php php php php php php php php php php php php php php php php php php php issetphp(selfphp:php:php$php_indexExtensionsphp[php substrphp(php$filephp,php strlenphp(php$filephp)php-php4php)php]php)php php|php|
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php\php.fphp\dphp+php$php/iphp'php,php php$filephp)php php/php*php matchesphp php<segmentphp_namephp>php.fphp<decimalphp_nmberphp>php filephp namesphp php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$directoryphp-php>deleteFilephp(php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$segmentsFilephp php=php php$directoryphp-php>createFilephp(php'segmentsphp'php)php;
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;

php php php php php php php php php php php php php/php/php writephp versionphp php(initializedphp byphp currentphp timephp)
php php php php php php php php php php php php php$segmentsFilephp-php>writeLongphp(roundphp(microtimephp(truephp)php)php)php;

php php php php php php php php php php php php php/php/php writephp namephp counter
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php$nameCountphp)php;
php php php php php php php php php php php php php/php/php writephp segmentphp counter
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php0php)php;

php php php php php php php php php php php php php$deletableFilephp php=php php$directoryphp-php>createFilephp(php'deletablephp'php)php;
php php php php php php php php php php php php php/php/php writephp counter
php php php php php php php php php php php php php$deletableFilephp-php>writeIntphp(php0php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$genFilephp php=php php$directoryphp-php>createFilephp(php'segmentsphp.genphp'php)php;

php php php php php php php php php php php php php$genFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFEphp)php;
php php php php php php php php php php php php php/php/php Writephp generationphp twophp times
php php php php php php php php php php php php php$genFilephp-php>writeLongphp(php$generationphp)php;
php php php php php php php php php php php php php$genFilephp-php>writeLongphp(php$generationphp)php;

php php php php php php php php php php php php php$segmentsFilephp php=php php$directoryphp-php>createFilephp(Zendphp_Searchphp_Lucenephp:php:getSegmentFileNamephp(php$generationphp)php)php;
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFDphp)php;

php php php php php php php php php php php php php/php/php writephp versionphp php(initializedphp byphp currentphp timephp)
php php php php php php php php php php php php php$segmentsFilephp-php>writeLongphp(roundphp(microtimephp(truephp)php)php)php;

php php php php php php php php php php php php php/php/php writephp namephp counter
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php$nameCountphp)php;
php php php php php php php php php php php php php/php/php writephp segmentphp counter
php php php php php php php php php php php php php$segmentsFilephp-php>writeIntphp(php0php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Openphp thephp indexphp forphp writing
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp arrayphp php$segmentInfos
php php php php php php*php php@paramphp integerphp php$targetFormatVersion
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp php$cleanUpLock
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php&php$segmentInfosphp,php php$targetFormatVersionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_directoryphp php php php php php php php php php php php=php php$directoryphp;
php php php php php php php php php$thisphp-php>php_segmentInfosphp php php php php php php php php=php php&php$segmentInfosphp;
php php php php php php php php php$thisphp-php>php_targetFormatVersionphp php=php php$targetFormatVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp documentphp tophp thisphp indexphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Documentphp php$document
php php php php php php*php/
php php php php publicphp functionphp addDocumentphp(Zendphp_Searchphp_Lucenephp_Documentphp php$documentphp)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_DocumentWriterphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentWriterphp/DocumentWriterphp.phpphp'php;

php php php php php php php php ifphp php(php$thisphp-php>php_currentSegmentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentSegmentphp php=
php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_DocumentWriterphp(php$thisphp-php>php_directoryphp,php php$thisphp-php>php_newSegmentNamephp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_currentSegmentphp-php>addDocumentphp(php$documentphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_currentSegmentphp-php>countphp(php)php php>php=php php$thisphp-php>maxBufferedDocsphp)php php{
php php php php php php php php php php php php php$thisphp-php>commitphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_maybeMergeSegmentsphp(php)php;

php php php php php php php php php$thisphp-php>php_versionUpdatephp+php+php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp ifphp wephp havephp anythingphp tophp merge
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php privatephp functionphp php_hasAnythingToMergephp(php)
php php php php php{
php php php php php php php php php$segmentSizesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php$segmentSizesphp[php$segNamephp]php php=php php$segmentInfophp-php>countphp(php)php;
php php php php php php php php php}

php php php php php php php php php$mergePoolphp php php php=php arrayphp(php)php;
php php php php php php php php php$poolSizephp php php php php=php php0php;
php php php php php php php php php$sizeToMergephp php=php php$thisphp-php>maxBufferedDocsphp;
php php php php php php php php asortphp(php$segmentSizesphp,php SORTphp_NUMERICphp)php;
php php php php php php php php foreachphp php(php$segmentSizesphp asphp php$segNamephp php=php>php php$sizephp)php php{
php php php php php php php php php php php php php/php/php Checkphp,php ifphp segmentphp comesphp intophp aphp newphp mergingphp block
php php php php php php php php php php php php whilephp php(php$sizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php php php php php php/php/php Mergephp previousphp blockphp ifphp itphp'sphp largephp enough
php php php php php php php php php php php php php php php php ifphp php(php$poolSizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$mergePoolphp php php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$poolSizephp php php php php=php php0php;

php php php php php php php php php php php php php php php php php$sizeToMergephp php*php=php php$thisphp-php>mergeFactorphp;

php php php php php php php php php php php php php php php php ifphp php(php$sizeToMergephp php>php php$thisphp-php>maxMergeDocsphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$mergePoolphp[php]php php=php php$thisphp-php>php_segmentInfosphp[php$segNamephp]php;
php php php php php php php php php php php php php$poolSizephp php+php=php php$sizephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$poolSizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp segmentsphp ifphp necessary
php php php php php php*php/
php php php php privatephp functionphp php_maybeMergeSegmentsphp(php)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_LockManagerphp:php:obtainOptimizationLockphp(php$thisphp-php>php_directoryphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_hasAnythingToMergephp(php)php)php php{
php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseOptimizationLockphp(php$thisphp-php>php_directoryphp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp segmentsphp listphp tophp bephp surephp allphp segmentsphp arephp notphp mergedphp yetphp byphp anotherphp process
php php php php php php php php php/php/
php php php php php php php php php/php/php Segmentphp mergingphp functionalityphp isphp concentratedphp inphp thisphp classphp andphp surrounded
php php php php php php php php php/php/php byphp optimizationphp lockphp obtainingphp/releasingphp.
php php php php php php php php php/php/php php_updateSegmentsphp(php)php refreshesphp segmentsphp listphp fromphp thephp latestphp indexphp generationphp.
php php php php php php php php php/php/php Sophp onlyphp newphp segmentsphp canphp bephp addedphp tophp thephp indexphp whilephp wephp arephp mergingphp somephp alreadyphp existing
php php php php php php php php php/php/php segmentsphp.
php php php php php php php php php/php/php Newlyphp addedphp segmentsphp willphp bephp alsophp includedphp intophp thephp indexphp byphp thephp php_updateSegmentsphp(php)php call
php php php php php php php php php/php/php eitherphp byphp anotherphp processphp orphp byphp thephp currentphp processphp withphp thephp commitphp(php)php callphp atphp thephp endphp ofphp php_mergeSegmentsphp(php)php methodphp.
php php php php php php php php php/php/php Thatphp'sphp guaranteedphp byphp thephp serialisationphp ofphp php_updateSegmentsphp(php)php executionphp usingphp exclusivephp locksphp.
php php php php php php php php php$thisphp-php>php_updateSegmentsphp(php)php;

php php php php php php php php php/php/php Performphp standardphp autophp-optimizationphp procedure
php php php php php php php php php$segmentSizesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php$segmentSizesphp[php$segNamephp]php php=php php$segmentInfophp-php>countphp(php)php;
php php php php php php php php php}

php php php php php php php php php$mergePoolphp php php php=php arrayphp(php)php;
php php php php php php php php php$poolSizephp php php php php=php php0php;
php php php php php php php php php$sizeToMergephp php=php php$thisphp-php>maxBufferedDocsphp;
php php php php php php php php asortphp(php$segmentSizesphp,php SORTphp_NUMERICphp)php;
php php php php php php php php foreachphp php(php$segmentSizesphp asphp php$segNamephp php=php>php php$sizephp)php php{
php php php php php php php php php php php php php/php/php Checkphp,php ifphp segmentphp comesphp intophp aphp newphp mergingphp block
php php php php php php php php php php php php whilephp php(php$sizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php php php php php php/php/php Mergephp previousphp blockphp ifphp itphp'sphp largephp enough
php php php php php php php php php php php php php php php php ifphp php(php$poolSizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_mergeSegmentsphp(php$mergePoolphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$mergePoolphp php php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$poolSizephp php php php php=php php0php;

php php php php php php php php php php php php php php php php php$sizeToMergephp php*php=php php$thisphp-php>mergeFactorphp;

php php php php php php php php php php php php php php php php ifphp php(php$sizeToMergephp php>php php$thisphp-php>maxMergeDocsphp)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseOptimizationLockphp(php$thisphp-php>php_directoryphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$mergePoolphp[php]php php=php php$thisphp-php>php_segmentInfosphp[php$segNamephp]php;
php php php php php php php php php php php php php$poolSizephp php+php=php php$sizephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$poolSizephp php>php=php php$sizeToMergephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_mergeSegmentsphp(php$mergePoolphp)php;
php php php php php php php php php}

php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseOptimizationLockphp(php$thisphp-php>php_directoryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp specifiedphp segments
php php php php php php*
php php php php php php*php php$segmentsphp isphp anphp arrayphp ofphp SegmentInfophp objects
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$segments
php php php php php php*php/
php php php php privatephp functionphp php_mergeSegmentsphp(php$segmentsphp)
php php php php php{
php php php php php php php php php$newNamephp php=php php$thisphp-php>php_newSegmentNamephp(php)php;

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentMergerphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentMergerphp.phpphp'php;
php php php php php php php php php$mergerphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentMergerphp(php$thisphp-php>php_directoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp)php;
php php php php php php php php foreachphp php(php$segmentsphp asphp php$segmentInfophp)php php{
php php php php php php php php php php php php php$mergerphp-php>addSourcephp(php$segmentInfophp)php;
php php php php php php php php php php php php php$thisphp-php>php_segmentsToDeletephp[php$segmentInfophp-php>getNamephp(php)php]php php=php php$segmentInfophp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php php$newSegmentphp php=php php$mergerphp-php>mergephp(php)php;
php php php php php php php php ifphp php(php$newSegmentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_newSegmentsphp[php$newSegmentphp-php>getNamephp(php)php]php php=php php$newSegmentphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>commitphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp segmentsphp filephp byphp addingphp currentphp segmentphp tophp aphp list
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_updateSegmentsphp(php)
php php php php php{
php php php php php php php php php/php/php Getphp anphp exclusivephp indexphp lock
php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:obtainWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php php/php/php Writephp downphp changesphp forphp thephp segments
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segInfophp)php php{
php php php php php php php php php php php php php$segInfophp-php>writeChangesphp(php)php;
php php php php php php php php php}


php php php php php php php php php$generationphp php=php Zendphp_Searchphp_Lucenephp:php:getActualGenerationphp(php$thisphp-php>php_directoryphp)php;
php php php php php php php php php$segmentsFilephp php php php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(Zendphp_Searchphp_Lucenephp:php:getSegmentFileNamephp(php$generationphp)php,php falsephp)php;
php php php php php php php php php$newSegmentFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(Zendphp_Searchphp_Lucenephp:php:getSegmentFileNamephp(php+php+php$generationphp)php,php falsephp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$genFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php'segmentsphp.genphp'php,php falsephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Searchphp_Lucenephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php'isphp notphp readablephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$genFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php'segmentsphp.genphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$genFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFEphp)php;
php php php php php php php php php/php/php Writephp generationphp php(firstphp copyphp)
php php php php php php php php php$genFilephp-php>writeLongphp(php$generationphp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php Writephp formatphp marker
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_targetFormatVersionphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php1php)php php{
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFDphp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_targetFormatVersionphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php3php)php php{
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFCphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Readphp srcphp filephp formatphp identifier
php php php php php php php php php php php php php$formatphp php=php php$segmentsFilephp-php>readIntphp(php)php;
php php php php php php php php php php php php ifphp php(php$formatphp php=php=php php(intphp)php0xFFFFFFFFphp)php php{
php php php php php php php php php php php php php php php php php$srcFormatphp php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_PREphp_php2php_php1php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$formatphp php=php=php php(intphp)php0xFFFFFFFDphp)php php{
php php php php php php php php php php php php php php php php php$srcFormatphp php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php1php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$formatphp php=php=php php(intphp)php0xFFFFFFFCphp)php php{
php php php php php php php php php php php php php php php php php$srcFormatphp php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php3php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Unsupportedphp segmentsphp filephp formatphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$versionphp php=php php$segmentsFilephp-php>readLongphp(php)php php+php php$thisphp-php>php_versionUpdatephp;
php php php php php php php php php php php php php$thisphp-php>php_versionUpdatephp php=php php0php;
php php php php php php php php php php php php php$newSegmentFilephp-php>writeLongphp(php$versionphp)php;

php php php php php php php php php php php php php/php/php Writephp segmentphp namephp counter
php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$segmentsFilephp-php>readIntphp(php)php)php;

php php php php php php php php php php php php php/php/php Getphp numberphp ofphp segmentsphp offset
php php php php php php php php php php php php php$numOfSegmentsOffsetphp php=php php$newSegmentFilephp-php>tellphp(php)php;
php php php php php php php php php php php php php/php/php Writephp dummyphp dataphp php(segmentphp counterphp)
php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php0php)php;

php php php php php php php php php php php php php/php/php Readphp numberphp ofphp segemnts
php php php php php php php php php php php php php$segmentsCountphp php=php php$segmentsFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php php$segmentsphp php=php arrayphp(php)php;
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$segmentsCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$segNamephp php=php php$segmentsFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php$segSizephp php=php php$segmentsFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$srcFormatphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_PREphp_php2php_php1php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php prephp-php2php.php1php indexphp format
php php php php php php php php php php php php php php php php php php php php php$delGenphp php php php php php php php php php php php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$hasSingleNormFilephp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php$numFieldphp php php php php php php php php php php=php php(intphp)php0xFFFFFFFFphp;
php php php php php php php php php php php php php php php php php php php php php$isCompoundBytephp php php php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$docStoreOptionsphp php php php=php nullphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$delGenphp php=php php$segmentsFilephp-php>readLongphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$srcFormatphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreOffsetphp php=php php$segmentsFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docStoreOffsetphp php!php=php php(intphp)php0xFFFFFFFFphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreSegmentphp php php php php php php php php=php php$segmentsFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreIsCompoundFilephp php=php php$segmentsFilephp-php>readBytephp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreOptionsphp php=php arrayphp(php'offsetphp'php php php php php php=php>php php$docStoreOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'segmentphp'php php php php php=php>php php$docStoreSegmentphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'isCompoundphp'php php=php>php php(php$docStoreIsCompoundFilephp php=php=php php1php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreOptionsphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreOptionsphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$hasSingleNormFilephp php=php php$segmentsFilephp-php>readBytephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$numFieldphp php php php php php php php php php php=php php$segmentsFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php php php php php php php php php php$normGensphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$numFieldphp php!php=php php(intphp)php0xFFFFFFFFphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp1php php=php php0php;php php$countphp1php <php php$numFieldphp;php php$countphp1php+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$normGensphp[php]php php=php php$segmentsFilephp-php>readLongphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$isCompoundBytephp php php php php=php php$segmentsFilephp-php>readBytephp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$segNamephp,php php$thisphp-php>php_segmentsToDeletephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Loadphp segmentphp ifphp necessary
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_segmentInfosphp[php$segNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$isCompoundBytephp php=php=php php0xFFphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Thephp segmentphp isphp notphp aphp compoundphp file
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$isCompoundphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$isCompoundBytephp php=php=php php0xphp0php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Thephp statusphp isphp unknown
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$isCompoundphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$isCompoundBytephp php=php=php php0xphp0php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Thephp segmentphp isphp aphp compoundphp file
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$isCompoundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentInfophp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_segmentInfosphp[php$segNamephp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp(php$thisphp-php>php_directoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$segNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$segSizephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$delGenphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docStoreOptionsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$hasSingleNormFilephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$isCompoundphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Retrievephp actualphp deletionsphp filephp generationphp number
php php php php php php php php php php php php php php php php php php php php php php php php php$delGenphp php=php php$thisphp-php>php_segmentInfosphp[php$segNamephp]php-php>getDelGenphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeStringphp(php$segNamephp)php;
php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$segSizephp)php;
php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeLongphp(php$delGenphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_targetFormatVersionphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docStoreOptionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$docStoreOffsetphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeStringphp(php$docStoreSegmentphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeBytephp(php$docStoreIsCompoundFilephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Setphp DocStoreOffsetphp tophp php-php1
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$docStoreOptionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Releasephp indexphp writephp lock
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Indexphp conversionphp tophp lowerphp formatphp versionphp isphp notphp supportedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeBytephp(php$hasSingleNormFilephp)php;
php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$numFieldphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$numFieldphp php!php=php php(intphp)php0xFFFFFFFFphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$normGensphp asphp php$normGenphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeLongphp(php$normGenphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeBytephp(php$isCompoundBytephp)php;

php php php php php php php php php php php php php php php php php php php php php$segmentsphp[php$segNamephp]php php=php php$segSizephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$segmentsFilephp-php>closephp(php)php;

php php php php php php php php php php php php php$segmentsCountphp php=php countphp(php$segmentsphp)php php+php countphp(php$thisphp-php>php_newSegmentsphp)php;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_newSegmentsphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeStringphp(php$segNamephp)php;
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$segmentInfophp-php>countphp(php)php)php;

php php php php php php php php php php php php php php php php php/php/php deletephp filephp generationphp:php php-php1php php(therephp isphp nophp deletephp filephp yetphp)
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_targetFormatVersionphp php=php=php Zendphp_Searchphp_Lucenephp:php:FORMATphp_php2php_php3php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php docStoreOffsetphp:php php-php1php php(segmentphp doesnphp'tphp usephp sharedphp docphp storephp)
php php php php php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php HasSingleNormFile
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeBytephp(php$segmentInfophp-php>hasSingleNormFilephp(php)php)php;
php php php php php php php php php php php php php php php php php/php/php NumField
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;
php php php php php php php php php php php php php php php php php/php/php IsCompoundFile
php php php php php php php php php php php php php php php php php$newSegmentFilephp-php>writeBytephp(php$segmentInfophp-php>isCompoundphp(php)php php?php php1php php:php php-php1php)php;

php php php php php php php php php php php php php php php php php$segmentsphp[php$segmentInfophp-php>getNamephp(php)php]php php=php php$segmentInfophp-php>countphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_segmentInfosphp[php$segNamephp]php php=php php$segmentInfophp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_newSegmentsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$newSegmentFilephp-php>seekphp(php$numOfSegmentsOffsetphp)php;
php php php php php php php php php php php php php$newSegmentFilephp-php>writeIntphp(php$segmentsCountphp)php;php php php/php/php Updatephp segmentsphp count
php php php php php php php php php php php php php$newSegmentFilephp-php>closephp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php*php*php Restorephp previousphp indexphp generationphp php*php/
php php php php php php php php php php php php php$generationphp-php-php;
php php php php php php php php php php php php php$genFilephp-php>seekphp(php4php,php SEEKphp_SETphp)php;
php php php php php php php php php php php php php/php/php Writephp generationphp numberphp twice
php php php php php php php php php php php php php$genFilephp-php>writeLongphp(php$generationphp)php;php php$genFilephp-php>writeLongphp(php$generationphp)php;

php php php php php php php php php php php php php/php/php Releasephp indexphp writephp lock
php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php php php php php php/php/php Throwphp thephp exception
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Writephp generationphp php(secondphp copyphp)
php php php php php php php php php$genFilephp-php>writeLongphp(php$generationphp)php;


php php php php php php php php php/php/php Checkphp ifphp anotherphp updatephp orphp readphp processphp isphp notphp runningphp now
php php php php php php php php php/php/php Ifphp yesphp,php skipphp cleanphp-upphp procedure
php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_LockManagerphp:php:escalateReadLockphp(php$thisphp-php>php_directoryphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Cleanphp-upphp directory
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$filesToDeletephp php=php arrayphp(php)php;
php php php php php php php php php php php php php$filesTypesphp php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$filesNumbersphp php php=php arrayphp(php)php;

php php php php php php php php php php php php php/php/php listphp ofphp php.delphp filesphp ofphp currentlyphp usedphp segments
php php php php php php php php php php php php php/php/php eachphp segmentphp canphp havephp severalphp generationsphp ofphp php.delphp files
php php php php php php php php php php php php php/php/php onlyphp lastphp shouldphp notphp bephp deleted
php php php php php php php php php php php php php$delFilesphp php=php arrayphp(php)php;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_directoryphp-php>fileListphp(php)php asphp php$filephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$filephp php=php=php php'deletablephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'deletablephp'php file
php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php0php;php php/php/php deletephp thisphp filephp firstphp,php sincephp itphp'sphp notphp usedphp startingphp fromphp Lucenephp vphp2php.php1
php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php0php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$filephp php=php=php php'segmentsphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'segmentsphp'php file
php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php1php;php php/php/php secondphp filephp tophp bephp deletedphp php"zerophp"php versionphp ofphp segmentsphp filephp php(Lucenephp prephp-php2php.php1php)
php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php0php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php^segmentsphp_php[aphp-zAphp-Zphp0php-php9php]php+php$php/iphp'php,php php$filephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'segmentsphp_xxxphp'php file
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp itphp'sphp notphp aphp justphp createdphp generationphp file
php php php php php php php php php php php php php php php php php php php php ifphp php(php$filephp php!php=php Zendphp_Searchphp_Lucenephp:php:getSegmentFileNamephp(php$generationphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php2php;php php/php/php firstphp groupphp ofphp filesphp forphp deletions
php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php(intphp)basephp_convertphp(substrphp(php$filephp,php php9php)php,php php3php6php,php php1php0php)php;php php/php/php orderedphp byphp segmentphp generationphp numbers
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php(php^php_php(php[aphp-zAphp-Zphp0php-php9php]php+php)php)php\php.fphp\dphp+php$php/iphp'php,php php$filephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php onephp ofphp perphp segmentphp filesphp php(php'php<segmentphp_namephp>php.fphp<decimalphp_numberphp>php'php)
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp itphp'sphp notphp onephp ofphp thephp segmentsphp inphp thephp currentphp segmentsphp set
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$segmentsphp[php$matchesphp[php1php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php3php;php php/php/php secondphp groupphp ofphp filesphp forphp deletions
php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php(intphp)basephp_convertphp(php$matchesphp[php2php]php,php php3php6php,php php1php0php)php;php php/php/php orderphp byphp segmentphp number
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php(php^php_php(php[aphp-zAphp-Zphp0php-php9php]php+php)php)php(php_php(php[aphp-zAphp-Zphp0php-php9php]php+php)php)php\php.delphp$php/iphp'php,php php$filephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php onephp ofphp perphp segmentphp filesphp php(php'php<segmentphp_namephp>php_php<delphp_generationphp>php.delphp'php wherephp php<segmentphp_namephp>php isphp php'php_php<segmentphp_numberphp>php'php)
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp itphp'sphp notphp onephp ofphp thephp segmentsphp inphp thephp currentphp segmentsphp set
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$segmentsphp[php$matchesphp[php1php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php3php;php php/php/php secondphp groupphp ofphp filesphp forphp deletions
php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php(intphp)basephp_convertphp(php$matchesphp[php2php]php,php php3php6php,php php1php0php)php;php php/php/php orderphp byphp segmentphp number
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$segmentNumberphp php=php php(intphp)basephp_convertphp(php$matchesphp[php2php]php,php php3php6php,php php1php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$delGenerationphp php=php php(intphp)basephp_convertphp(php$matchesphp[php4php]php,php php3php6php,php php1php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$delFilesphp[php$segmentNumberphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$delFilesphp[php$segmentNumberphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$delFilesphp[php$segmentNumberphp]php[php$delGenerationphp]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(issetphp(selfphp:php:php$php_indexExtensionsphp[substrphp(php$filephp,php strlenphp(php$filephp)php-php4php)php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php onephp ofphp perphp segmentphp filesphp php(php'php<segmentphp_namephp>php.php<extphp>php'php)
php php php php php php php php php php php php php php php php php php php php php$segmentNamephp php=php substrphp(php$filephp,php php0php,php strlenphp(php$filephp)php php-php php4php)php;
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp itphp'sphp notphp onephp ofphp thephp segmentsphp inphp thephp currentphp segmentsphp set
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$segmentsphp[php$segmentNamephp]php)php php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_currentSegmentphp php=php=php=php nullphp php php|php|php php php$thisphp-php>php_currentSegmentphp-php>getNamephp(php)php php!php=php php$segmentNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php3php;php php/php/php secondphp groupphp ofphp filesphp forphp deletions
php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php(intphp)basephp_convertphp(substrphp(php$filephp,php php1php php/php*php skipphp php'php_php'php php*php/php,php strlenphp(php$filephp)php-php5php)php,php php3php6php,php php1php0php)php;php php/php/php orderphp byphp segmentphp number
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$maxGenNumberphp php=php php0php;
php php php php php php php php php php php php php/php/php processphp php.delphp filesphp ofphp currentlyphp usedphp segments
php php php php php php php php php php php php foreachphp php(php$delFilesphp asphp php$segmentNumberphp php=php>php php$segmentDelFilesphp)php php{
php php php php php php php php php php php php php php php php ksortphp(php$delFilesphp[php$segmentNumberphp]php,php SORTphp_NUMERICphp)php;
php php php php php php php php php php php php php php php php arrayphp_popphp(php$delFilesphp[php$segmentNumberphp]php)php;php php/php/php removephp lastphp deletephp filephp generationphp fromphp candidatesphp forphp deleting

php php php php php php php php php php php php php php php php endphp(php$delFilesphp[php$segmentNumberphp]php)php;
php php php php php php php php php php php php php php php php php$lastGenNumberphp php=php keyphp(php$delFilesphp[php$segmentNumberphp]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$lastGenNumberphp php>php php$maxGenNumberphp)php php{
php php php php php php php php php php php php php php php php php php php php php$maxGenNumberphp php=php php$lastGenNumberphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$delFilesphp asphp php$segmentNumberphp php=php>php php$segmentDelFilesphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$segmentDelFilesphp asphp php$delGenerationphp php=php>php php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp[php]php php=php php$filephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesTypesphp[php]php php php php php=php php4php;php php/php/php thirdphp groupphp ofphp filesphp forphp deletions
php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp[php]php php php=php php$segmentNumberphp*php$maxGenNumberphp php+php php$delGenerationphp;php php/php/php orderphp byphp php<segmentphp_numberphp>php,php<delphp_generationphp>php pair
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Reorderphp filesphp forphp deleting
php php php php php php php php php php php php arrayphp_multisortphp(php$filesTypesphp,php php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$filesNumbersphp,php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$filesToDeletephp,php SORTphp_ASCphp,php SORTphp_STRINGphp)php;

php php php php php php php php php php php php foreachphp php(php$filesToDeletephp asphp php$filephp)php php{
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php/php*php*php Skipphp sharedphp docstorephp segmentsphp deletingphp php*php/
php php php php php php php php php php php php php php php php php php php php php/php*php*php php@todophp Processphp php'php.cfxphp'php filesphp tophp checkphp ifphp themphp arephp alreadyphp unusedphp php*php/
php php php php php php php php php php php php php php php php php php php php ifphp php(substrphp(php$filephp,php strlenphp(php$filephp)php-php4php)php php!php=php php'php.cfxphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_directoryphp-php>deleteFilephp(php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Searchphp_Lucenephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php'Canphp\php'tphp deletephp filephp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Thatphp'sphp notphp php"filephp isphp underphp processingphp orphp alreadyphp deletedphp"php exception
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Passphp itphp through
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Returnphp readphp lockphp intophp thephp previousphp state
php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:deEscalateReadLockphp(php$thisphp-php>php_directoryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Onlyphp releasephp resourcesphp ifphp anotherphp indexphp readerphp isphp runningphp now
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_segmentsToDeletephp asphp php$segNamephp)php php{
php php php php php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_indexExtensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_directoryphp-php>purgeFilephp(php$segNamephp php.php php$extphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Cleanphp-upphp php_segmentsToDeletephp container
php php php php php php php php php$thisphp-php>php_segmentsToDeletephp php=php arrayphp(php)php;


php php php php php php php php php/php/php Releasephp indexphp writephp lock
php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php php/php/php Removephp unusedphp segmentsphp fromphp segmentsphp list
php php php php php php php php foreachphp php(php$thisphp-php>php_segmentInfosphp asphp php$segNamephp php=php>php php$segmentInfophp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$segmentsphp[php$segNamephp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_segmentInfosphp[php$segNamephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp currentphp changes
php php php php php php*php/
php php php php publicphp functionphp commitphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_currentSegmentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$newSegmentphp php=php php$thisphp-php>php_currentSegmentphp-php>closephp(php)php;
php php php php php php php php php php php php ifphp php(php$newSegmentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_newSegmentsphp[php$newSegmentphp-php>getNamephp(php)php]php php=php php$newSegmentphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_currentSegmentphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_updateSegmentsphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Mergesphp thephp providedphp indexesphp intophp thisphp indexphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$readers
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addIndexesphp(php$readersphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp implementation
php php php php php php php php php php*php/
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergesphp allphp segmentsphp togetherphp intophp newphp one
php php php php php php*
php php php php php php*php Returnsphp truephp onphp successphp andphp falsephp ifphp anotherphp optimizationphp orphp autophp-optimizationphp process
php php php php php php*php isphp runningphp now
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp optimizephp(php)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_LockManagerphp:php:obtainOptimizationLockphp(php$thisphp-php>php_directoryphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp segmentsphp listphp tophp bephp surephp allphp segmentsphp arephp notphp mergedphp yetphp byphp anotherphp process
php php php php php php php php php/php/
php php php php php php php php php/php/php Segmentphp mergingphp functionalityphp isphp concentratedphp inphp thisphp classphp andphp surrounded
php php php php php php php php php/php/php byphp optimizationphp lockphp obtainingphp/releasingphp.
php php php php php php php php php/php/php php_updateSegmentsphp(php)php refreshesphp segmentsphp listphp fromphp thephp latestphp indexphp generationphp.
php php php php php php php php php/php/php Sophp onlyphp newphp segmentsphp canphp bephp addedphp tophp thephp indexphp whilephp wephp arephp mergingphp somephp alreadyphp existing
php php php php php php php php php/php/php segmentsphp.
php php php php php php php php php/php/php Newlyphp addedphp segmentsphp willphp bephp alsophp includedphp intophp thephp indexphp byphp thephp php_updateSegmentsphp(php)php call
php php php php php php php php php/php/php eitherphp byphp anotherphp processphp orphp byphp thephp currentphp processphp withphp thephp commitphp(php)php callphp atphp thephp endphp ofphp php_mergeSegmentsphp(php)php methodphp.
php php php php php php php php php/php/php Thatphp'sphp guaranteedphp byphp thephp serialisationphp ofphp php_updateSegmentsphp(php)php executionphp usingphp exclusivephp locksphp.
php php php php php php php php php$thisphp-php>php_updateSegmentsphp(php)php;

php php php php php php php php php$thisphp-php>php_mergeSegmentsphp(php$thisphp-php>php_segmentInfosphp)php;

php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseOptimizationLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp namephp forphp newphp segment
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_newSegmentNamephp(php)
php php php php php{
php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:obtainWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php php$generationphp php=php Zendphp_Searchphp_Lucenephp:php:getActualGenerationphp(php$thisphp-php>php_directoryphp)php;
php php php php php php php php php$segmentsFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(Zendphp_Searchphp_Lucenephp:php:getSegmentFileNamephp(php$generationphp)php,php falsephp)php;

php php php php php php php php php$segmentsFilephp-php>seekphp(php1php2php)php;php php/php/php php1php2php php=php php4php php(intphp,php filephp formatphp markerphp)php php+php php8php php(longphp,php indexphp versionphp)
php php php php php php php php php$segmentNameCounterphp php=php php$segmentsFilephp-php>readIntphp(php)php;

php php php php php php php php php$segmentsFilephp-php>seekphp(php1php2php)php;php php/php/php php1php2php php=php php4php php(intphp,php filephp formatphp markerphp)php php+php php8php php(longphp,php indexphp versionphp)
php php php php php php php php php$segmentsFilephp-php>writeIntphp(php$segmentNameCounterphp php+php php1php)php;

php php php php php php php php php/php/php Flashphp outputphp tophp guaranteephp thatphp wrongphp valuephp willphp notphp bephp loadedphp betweenphp unlockphp and
php php php php php php php php php/php/php returnphp php(whichphp callsphp php$segmentsFilephp destructorphp)
php php php php php php php php php$segmentsFilephp-php>flushphp(php)php;

php php php php php php php php Zendphp_Searchphp_Lucenephp_LockManagerphp:php:releaseWriteLockphp(php$thisphp-php>php_directoryphp)php;

php php php php php php php php returnphp php'php_php'php php.php basephp_convertphp(php$segmentNameCounterphp,php php1php0php,php php3php6php)php;
php php php php php}

php}
