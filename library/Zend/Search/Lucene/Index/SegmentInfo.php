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
php php*php php@versionphp php php php php$Idphp:php SegmentInfophp.phpphp php2php2php9php8php7php php2php0php1php0php-php0php9php-php2php1php php1php0php:php3php9php:php5php3Zphp alexanderphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermsStreamphp/Interfacephp.phpphp'php;


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Similarityphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/FieldInfophp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermInfophp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp implementsphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php"Fullphp scanphp vsphp fetchphp"php boundaryphp.
php php php php php php*
php php php php php php*php Ifphp filterphp selectivityphp isphp lessphp thanphp thisphp valuephp,php thenphp fullphp scanphp isphp performed
php php php php php php*php php(sincephp termphp entriesphp fetchingphp hasphp somephp additionalphp overheadphp)php.
php php php php php php*php/
php php php php constphp FULLphp_SCANphp_VSphp_FETCHphp_BOUNDARYphp php=php php5php;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp docsphp inphp aphp segment
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_docCountphp;

php php php php php/php*php*
php php php php php php*php Segmentphp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_namephp;

php php php php php/php*php*
php php php php php php*php Termphp Dictionaryphp Index
php php php php php php*
php php php php php php*php Arrayphp ofphp arraysphp php(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objectsphp arephp representedphp asphp arraysphp because
php php php php php php*php ofphp performancephp considerationsphp)
php php php php php php*php php[php0php]php php-php>php php$termValue
php php php php php php*php php[php1php]php php-php>php php$termFieldNum
php php php php php php*
php php php php php php*php Correspondingphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp objectphp storedphp inphp thephp php$php_termDictionaryInfos
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termDictionaryphp;

php php php php php/php*php*
php php php php php php*php Termphp Dictionaryphp Indexphp TermInfos
php php php php php php*
php php php php php php*php Arrayphp ofphp arraysphp php(Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp objectsphp arephp representedphp asphp arraysphp because
php php php php php php*php ofphp performancephp considerationsphp)
php php php php php php*php php[php0php]php php-php>php php$docFreq
php php php php php php*php php[php1php]php php-php>php php$freqPointer
php php php php php php*php php[php2php]php php-php>php php$proxPointer
php php php php php php*php php[php3php]php php-php>php php$skipOffset
php php php php php php*php php[php4php]php php-php>php php$indexPointer
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termDictionaryInfosphp;

php php php php php/php*php*
php php php php php php*php Segmentphp fieldsphp.php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp objectsphp forphp thisphp segment
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_fieldsphp;

php php php php php/php*php*
php php php php php php*php Fieldphp positionsphp inphp aphp dictionaryphp.
php php php php php php*php php(Termphp dictionaryphp containsphp fileldsphp orderedphp byphp namesphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_fieldsDicPositionsphp;


php php php php php/php*php*
php php php php php php*php Associativephp arrayphp wherephp thephp keyphp isphp thephp filephp namephp andphp thephp valuephp isphp dataphp offset
php php php php php php*php inphp aphp compoundphp segmentphp filephp php(php.csfphp)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_segFilesphp;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp wherephp thephp keyphp isphp thephp filephp namephp andphp thephp valuephp isphp filephp sizephp php(php.csfphp)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_segFileSizesphp;

php php php php php/php*php*
php php php php php php*php Deletephp filephp generationphp number
php php php php php php*
php php php php php php*php php-php2php meansphp autodetectphp latestphp deletephp generation
php php php php php php*php php-php1php meansphp php'therephp isphp nophp deletephp filephp'
php php php php php php*php php php0php meansphp prephp-php2php.php1php formatphp deletephp file
php php php php php php*php php Xphp specifiesphp usedphp deletephp file
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_delGenphp;

php php php php php/php*php*
php php php php php php*php Segmentphp hasphp singlephp normsphp file
php php php php php php*
php php php php php php*php Ifphp truephp thenphp onephp php.nrmphp filephp isphp usedphp forphp allphp fields
php php php php php php*php Otherwisephp php.fNphp filesphp arephp used
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_hasSingleNormFilephp;

php php php php php/php*php*
php php php php php php*php Usephp compoundphp segmentphp filephp php(php*php.cfsphp)php tophp collectphp allphp otherphp segmentphp files
php php php php php php*php php(excludingphp php.delphp filesphp)
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_isCompoundphp;


php php php php php/php*php*
php php php php php php*php Filephp systemphp adapterphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp_Filesystem
php php php php php php*php/
php php php php privatephp php$php_directoryphp;

php php php php php/php*php*
php php php php php php*php Normalizationphp factorsphp.
php php php php php php*php Anphp arrayphp fieldNamephp php=php>php normVector
php php php php php php*php normVectorphp isphp aphp binaryphp stringphp.
php php php php php php*php Eachphp bytephp correspondsphp tophp anphp indexedphp documentphp inphp aphp segmentphp and
php php php php php php*php encodesphp normalizationphp factorphp php(floatphp valuephp,php encodedphp by
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp:php:encodeNormphp(php)php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_normsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp deletedphp documentsphp.
php php php php php php*php bitsetphp ifphp bitsetphp extensionphp isphp loadedphp orphp arrayphp otherwisephp.
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php privatephp php$php_deletedphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$thisphp-php>php_deletedphp updatephp flag
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_deletedDirtyphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp segmentphp usesphp sharedphp docphp store
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_usesSharedDocStorephp;

php php php php php/php*
php php php php php php*php Sharedphp docphp storephp optionsphp.
php php php php php php*php Itphp'sphp anphp assotiativephp arrayphp withphp thephp followingphp itemsphp:
php php php php php php*php php-php php'offsetphp'php php php php php php=php>php php$docStoreOffsetphp php php php php php php php php php php Thephp startingphp documentphp inphp thephp sharedphp docphp storephp filesphp wherephp thisphp segmentphp'sphp documentsphp begin
php php php php php php*php php-php php'segmentphp'php php php php php=php>php php$docStoreSegmentphp php php php php php php php php php Thephp namephp ofphp thephp segmentphp thatphp hasphp thephp sharedphp docphp storephp filesphp.
php php php php php php*php php-php php'isCompoundphp'php php=php>php php$docStoreIsCompoundFilephp php php Truephp,php ifphp compoundphp filephp formatphp isphp usedphp forphp thephp sharedphp docphp storephp filesphp php(php.cfxphp filephp)php.
php php php php php php*php/
php php php php privatephp php$php_sharedDocStoreOptionsphp;


php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp stringphp php php php php php$name
php php php php php php*php php@paramphp integerphp php php php php$docCount
php php php php php php*php php@paramphp integerphp php php php php$delGen
php php php php php php*php php@paramphp arrayphp|nullphp php$docStoreOptions
php php php php php php*php php@paramphp booleanphp php php php php$hasSingleNormFile
php php php php php php*php php@paramphp booleanphp php php php php$isCompound
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php$namephp,php php$docCountphp,php php$delGenphp php=php php0php,php php$docStoreOptionsphp php=php nullphp,php php$hasSingleNormFilephp php=php falsephp,php php$isCompoundphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_directoryphp php=php php$directoryphp;
php php php php php php php php php$thisphp-php>php_namephp php php php php php php=php php$namephp;
php php php php php php php php php$thisphp-php>php_docCountphp php php=php php$docCountphp;

php php php php php php php php ifphp php(php$docStoreOptionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_usesSharedDocStorephp php php php php=php truephp;
php php php php php php php php php php php php php$thisphp-php>php_sharedDocStoreOptionsphp php=php php$docStoreOptionsphp;

php php php php php php php php php php php php ifphp php(php$docStoreOptionsphp[php'isCompoundphp'php]php)php php{
php php php php php php php php php php php php php php php php php$cfxFilephp php php php php php php php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$docStoreOptionsphp[php'segmentphp'php]php php.php php'php.cfxphp'php)php;
php php php php php php php php php php php php php php php php php$cfxFilesCountphp php=php php$cfxFilephp-php>readVIntphp(php)php;

php php php php php php php php php php php php php php php php php$cfxFilesphp php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$cfxFileSizesphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$cfxFilesCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataOffsetphp php=php php$cfxFilephp-php>readLongphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$countphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$cfxFileSizesphp[php$fileNamephp]php php=php php$dataOffsetphp php-php endphp(php$cfxFilesphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$fileNamephp php php php php php php php php php php php php=php php$cfxFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$cfxFilesphp[php$fileNamephp]php php=php php$dataOffsetphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$countphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$cfxFileSizesphp[php$fileNamephp]php php=php php$thisphp-php>php_directoryphp-php>fileLengthphp(php$docStoreOptionsphp[php'segmentphp'php]php php.php php'php.cfxphp'php)php php-php php$dataOffsetphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_sharedDocStoreOptionsphp[php'filesphp'php]php php php php php php=php php$cfxFilesphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sharedDocStoreOptionsphp[php'fileSizesphp'php]php php=php php$cfxFileSizesphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hasSingleNormFilephp php=php php$hasSingleNormFilephp;
php php php php php php php php php$thisphp-php>php_delGenphp php php php php php php php php php php php php=php php$delGenphp;
php php php php php php php php php$thisphp-php>php_termDictionaryphp php php php php=php nullphp;


php php php php php php php php ifphp php(php$isCompoundphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_isCompoundphp php php php php=php php$isCompoundphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp prephp-php2php.php1php segmentphp orphp isCompoundphp isphp setphp tophp php'unknownphp'
php php php php php php php php php php php php php/php/php Detectphp ifphp segmentphp usesphp compoundphp file
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php/php/php Tryphp tophp openphp compoundphp file
php php php php php php php php php php php php php php php php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$namephp php.php php'php.cfsphp'php)php;

php php php php php php php php php php php php php php php php php/php/php Compoundphp filephp isphp found
php php php php php php php php php php php php php php php php php$thisphp-php>php_isCompoundphp php=php truephp;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Searchphp_Lucenephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php'isphp notphp readablephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Compoundphp filephp isphp notphp foundphp orphp isphp notphp readable
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_isCompoundphp php=php falsephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_segFilesphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_isCompoundphp)php php{
php php php php php php php php php php php php php$cfsFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$namephp php.php php'php.cfsphp'php)php;
php php php php php php php php php php php php php$segFilesCountphp php=php php$cfsFilephp-php>readVIntphp(php)php;

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$segFilesCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$dataOffsetphp php=php php$cfsFilephp-php>readLongphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$countphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_segFileSizesphp[php$fileNamephp]php php=php php$dataOffsetphp php-php endphp(php$thisphp-php>php_segFilesphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$fileNamephp php=php php$cfsFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_segFilesphp[php$fileNamephp]php php=php php$dataOffsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$countphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_segFileSizesphp[php$fileNamephp]php php=php php$thisphp-php>php_directoryphp-php>fileLengthphp(php$namephp php.php php'php.cfsphp'php)php php-php php$dataOffsetphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$fnmFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.fnmphp'php)php;
php php php php php php php php php$fieldsCountphp php=php php$fnmFilephp-php>readVIntphp(php)php;
php php php php php php php php php$fieldNamesphp php=php arrayphp(php)php;
php php php php php php php php php$fieldNumsphp php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_fieldsphp php=php arrayphp(php)php;

php php php php php php php php forphp php(php$countphp=php0php;php php$countphp <php php$fieldsCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$fieldNamephp php=php php$fnmFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php$fieldBitsphp php=php php$fnmFilephp-php>readBytephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$countphp]php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp(php$fieldNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldBitsphp php&php php0xphp0php1php php/php*php fieldphp isphp indexedphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$countphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldBitsphp php&php php0xphp0php2php php/php*php termvectorsphp arephp storedphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldBitsphp php&php php0xphp1php0php php/php*php normsphp arephp omittedphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldBitsphp php&php php0xphp2php0php php/php*php payloadsphp arephp storedphp php*php/php)php;
php php php php php php php php php php php php ifphp php(php$fieldBitsphp php&php php0xphp1php0php)php php{
php php php php php php php php php php php php php php php php php/php/php normsphp arephp omittedphp forphp thephp indexedphp field
php php php php php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$countphp]php php=php strphp_repeatphp(chrphp(Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp:php:encodeNormphp(php1php.php0php)php)php,php php$docCountphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$fieldNumsphp[php$countphp]php php php=php php$countphp;
php php php php php php php php php php php php php$fieldNamesphp[php$countphp]php php=php php$fieldNamephp;
php php php php php php php php php}
php php php php php php php php arrayphp_multisortphp(php$fieldNamesphp,php SORTphp_ASCphp,php SORTphp_REGULARphp,php php$fieldNumsphp)php;
php php php php php php php php php$thisphp-php>php_fieldsDicPositionsphp php=php arrayphp_flipphp(php$fieldNumsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_delGenphp php=php=php php-php2php)php php{
php php php php php php php php php php php php php/php/php SegmentInfophp constructorphp isphp invokedphp fromphp indexphp writer
php php php php php php php php php php php php php/php/php Autodetectphp currentphp deletephp filephp generationphp number
php php php php php php php php php php php php php$thisphp-php>php_delGenphp php=php php$thisphp-php>php_detectLatestDelGenphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Loadphp deletions
php php php php php php php php php$thisphp-php>php_deletedphp php=php php$thisphp-php>php_loadDelFilephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp detetionsphp file
php php php php php php*
php php php php php php*php Returnsphp bitsetphp orphp anphp arrayphp dependingphp onphp bitsetphp extensionphp availability
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_loadDelFilephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_delGenphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php/php/php Therephp isphp nophp deletephp filephp forphp thisphp segment
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_delGenphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp segmentphp withphp prephp-php2php.php1php formatphp deletephp file
php php php php php php php php php php php php php/php/php Tryphp tophp loadphp deletionsphp file
php php php php php php php php php php php php returnphp php$thisphp-php>php_loadPrephp2php1DelFilephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Itphp'sphp php2php.php1php+php formatphp deleteionsphp file
php php php php php php php php php php php php returnphp php$thisphp-php>php_loadphp2php1DelFilephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp prephp-php2php.php1php detetionsphp file
php php php php php php*
php php php php php php*php Returnsphp bitsetphp orphp anphp arrayphp dependingphp onphp bitsetphp extensionphp availability
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_loadPrephp2php1DelFilephp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php php'php.delphp'php filesphp alwaysphp storedphp inphp aphp separatephp file
php php php php php php php php php php php php php/php/php Segmentphp compoundphp isphp notphp used
php php php php php php php php php php php php php$delFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$thisphp-php>php_namephp php.php php'php.delphp'php)php;

php php php php php php php php php php php php php$byteCountphp php=php php$delFilephp-php>readIntphp(php)php;
php php php php php php php php php php php php php$byteCountphp php=php ceilphp(php$byteCountphp/php8php)php;
php php php php php php php php php php php php php$bitCountphp php php=php php$delFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php ifphp php(php$bitCountphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$delBytesphp php=php php'php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$delBytesphp php=php php$delFilephp-php>readBytesphp(php$byteCountphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$delBytesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$deletionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$byteCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$bytephp php=php ordphp(php$delBytesphp[php$countphp]php)php;
php php php php php php php php php php php php php php php php php php php php forphp php(php$bitphp php=php php0php;php php$bitphp <php php8php;php php$bitphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$bytephp php&php php(php1<php<php$bitphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$deletionsphp[php$countphp*php8php php+php php$bitphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$deletionsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Searchphp_Lucenephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php'isphp notphp readablephp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Therephp isphp nophp deletionphp file
php php php php php php php php php php php php php$thisphp-php>php_delGenphp php=php php-php1php;

php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp php2php.php1php+php formatphp detetionsphp file
php php php php php php*
php php php php php php*php Returnsphp bitsetphp orphp anphp arrayphp dependingphp onphp bitsetphp extensionphp availability
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php privatephp functionphp php_loadphp2php1DelFilephp(php)
php php php php php{
php php php php php php php php php$delFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$thisphp-php>php_namephp php.php php'php_php'php php.php basephp_convertphp(php$thisphp-php>php_delGenphp,php php1php0php,php php3php6php)php php.php php'php.delphp'php)php;

php php php php php php php php php$formatphp php=php php$delFilephp-php>readIntphp(php)php;

php php php php php php php php ifphp php(php$formatphp php=php=php php(intphp)php0xFFFFFFFFphp)php php{
php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php php php php php$deletionsphp php=php bitsetphp_emptyphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$deletionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$byteCountphp php=php php$delFilephp-php>readIntphp(php)php;
php php php php php php php php php php php php php$bitCountphp php php=php php$delFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php php$delFileSizephp php=php php$thisphp-php>php_directoryphp-php>fileLengthphp(php$thisphp-php>php_namephp php.php php'php_php'php php.php basephp_convertphp(php$thisphp-php>php_delGenphp,php php1php0php,php php3php6php)php php.php php'php.delphp'php)php;
php php php php php php php php php php php php php$byteNumphp php=php php0php;

php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php$dgapphp php=php php$delFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php$nonZeroBytephp php=php php$delFilephp-php>readBytephp(php)php;

php php php php php php php php php php php php php php php php php$byteNumphp php+php=php php$dgapphp;


php php php php php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php forphp php(php$bitphp php=php php0php;php php$bitphp <php php8php;php php$bitphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$nonZeroBytephp php&php php(php1<php<php$bitphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php bitsetphp_inclphp(php$deletionsphp,php php$byteNumphp*php8php php+php php$bitphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$deletionsphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php forphp php(php$bitphp php=php php0php;php php$bitphp <php php8php;php php$bitphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$nonZeroBytephp php&php php(php1<php<php$bitphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$deletionsphp[php$byteNumphp*php8php php+php php$bitphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php(countphp(php$deletionsphp)php php>php php0php)php php?php php$deletionsphp php:php nullphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}php whilephp php(php$delFilephp-php>tellphp(php)php <php php$delFileSizephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php php$formatphp isphp actuallyphp bytephp count
php php php php php php php php php php php php php$byteCountphp php=php ceilphp(php$formatphp/php8php)php;
php php php php php php php php php php php php php$bitCountphp php php=php php$delFilephp-php>readIntphp(php)php;

php php php php php php php php php php php php ifphp php(php$bitCountphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$delBytesphp php=php php'php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$delBytesphp php=php php$delFilephp-php>readBytesphp(php$byteCountphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$delBytesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$deletionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$byteCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$bytephp php=php ordphp(php$delBytesphp[php$countphp]php)php;
php php php php php php php php php php php php php php php php php php php php forphp php(php$bitphp php=php php0php;php php$bitphp <php php8php;php php$bitphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$bytephp php&php php(php1<php<php$bitphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$deletionsphp[php$countphp*php8php php+php php$bitphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php(countphp(php$deletionsphp)php php>php php0php)php php?php php$deletionsphp php:php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Opensphp indexphp filephp stotedphp withinphp compoundphp indexphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php$extension
php php php php php php*php php@paramphp booleanphp php$shareHandler
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php publicphp functionphp openCompoundFilephp(php$extensionphp,php php$shareHandlerphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php(php$extensionphp php=php=php php'php.fdxphp'php php php|php|php php$extensionphp php=php=php php'php.fdtphp'php)php php php&php&php php php$thisphp-php>php_usesSharedDocStorephp)php php{
php php php php php php php php php php php php php$fdxFNamephp php=php php$thisphp-php>php_sharedDocStoreOptionsphp[php'segmentphp'php]php php.php php'php.fdxphp'php;
php php php php php php php php php php php php php$fdtFNamephp php=php php$thisphp-php>php_sharedDocStoreOptionsphp[php'segmentphp'php]php php.php php'php.fdtphp'php;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_sharedDocStoreOptionsphp[php'isCompoundphp'php]php)php php{
php php php php php php php php php php php php php php php php php$fdxFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$fdxFNamephp,php php$shareHandlerphp)php;
php php php php php php php php php php php php php php php php php$fdxFilephp-php>seekphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'offsetphp'php]php*php8php,php SEEKphp_CURphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$extensionphp php=php=php php'php.fdxphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'php.fdxphp'php filephp isphp requested
php php php php php php php php php php php php php php php php php php php php returnphp php$fdxFilephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'php.fdtphp'php filephp isphp requested
php php php php php php php php php php php php php php php php php php php php php$fdtStartOffsetphp php=php php$fdxFilephp-php>readLongphp(php)php;

php php php php php php php php php php php php php php php php php php php php php$fdtFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$fdtFNamephp,php php$shareHandlerphp)php;
php php php php php php php php php php php php php php php php php php php php php$fdtFilephp-php>seekphp(php$fdtStartOffsetphp,php SEEKphp_CURphp)php;

php php php php php php php php php php php php php php php php php php php php returnphp php$fdtFilephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(php php!issetphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'filesphp'php]php[php$fdxFNamephp]php)php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Sharedphp docphp storagephp segmentphp compoundphp filephp doesnphp\php'tphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$fdxFNamephp php.php php'php filephp.php'php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp(php php!issetphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'filesphp'php]php[php$fdtFNamephp]php)php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Sharedphp docphp storagephp segmentphp compoundphp filephp doesnphp\php'tphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$fdtFNamephp php.php php'php filephp.php'php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Openphp sharedphp docstorephp segmentphp file
php php php php php php php php php php php php php$cfxFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'segmentphp'php]php php.php php'php.cfxphp'php,php php$shareHandlerphp)php;
php php php php php php php php php php php php php/php/php Seekphp tophp thephp startphp ofphp php'php.fdxphp'php filephp withinphp compoundphp file
php php php php php php php php php php php php php$cfxFilephp-php>seekphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'filesphp'php]php[php$fdxFNamephp]php)php;
php php php php php php php php php php php php php/php/php Seekphp tophp thephp startphp ofphp currentphp segmentphp documentsphp section
php php php php php php php php php php php php php$cfxFilephp-php>seekphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'offsetphp'php]php*php8php,php SEEKphp_CURphp)php;

php php php php php php php php php php php php ifphp php(php$extensionphp php=php=php php'php.fdxphp'php)php php{
php php php php php php php php php php php php php php php php php/php/php php'php.fdxphp'php filephp isphp requested
php php php php php php php php php php php php php php php php returnphp php$cfxFilephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php php'php.fdtphp'php filephp isphp requested
php php php php php php php php php php php php php php php php php$fdtStartOffsetphp php=php php$cfxFilephp-php>readLongphp(php)php;

php php php php php php php php php php php php php php php php php/php/php Seekphp tophp thephp startphp ofphp php'php.fdtphp'php filephp withinphp compoundphp file
php php php php php php php php php php php php php php php php php$cfxFilephp-php>seekphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'filesphp'php]php[php$fdtFNamephp]php)php;
php php php php php php php php php php php php php php php php php/php/php Seekphp tophp thephp startphp ofphp currentphp segmentphp documentsphp section
php php php php php php php php php php php php php php php php php$cfxFilephp-php>seekphp(php$fdtStartOffsetphp,php SEEKphp_CURphp)php;

php php php php php php php php php php php php php php php php returnphp php$fdtFilephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$filenamephp php=php php$thisphp-php>php_namephp php.php php$extensionphp;

php php php php php php php php ifphp php(php!php$thisphp-php>php_isCompoundphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$filenamephp,php php$shareHandlerphp)php;
php php php php php php php php php}

php php php php php php php php ifphp(php php!issetphp(php$thisphp-php>php_segFilesphp[php$filenamephp]php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Segmentphp compoundphp filephp doesnphp\php'tphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$filenamephp php.php php'php filephp.php'php php)php;
php php php php php php php php php}

php php php php php php php php php$filephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$thisphp-php>php_namephp php.php php'php.cfsphp'php,php php$shareHandlerphp)php;
php php php php php php php php php$filephp-php>seekphp(php$thisphp-php>php_segFilesphp[php$filenamephp]php)php;
php php php php php php php php returnphp php$filephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp compoundphp filephp length
php php php php php php*
php php php php php php*php php@paramphp stringphp php$extension
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp compoundFileLengthphp(php$extensionphp)
php php php php php{
php php php php php php php php ifphp php(php(php$extensionphp php=php=php php'php.fdxphp'php php php|php|php php$extensionphp php=php=php php'php.fdtphp'php)php php php&php&php php php$thisphp-php>php_usesSharedDocStorephp)php php{
php php php php php php php php php php php php php$filenamephp php=php php$thisphp-php>php_sharedDocStoreOptionsphp[php'segmentphp'php]php php.php php$extensionphp;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_sharedDocStoreOptionsphp[php'isCompoundphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_directoryphp-php>fileLengthphp(php$filenamephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(php php!issetphp(php$thisphp-php>php_sharedDocStoreOptionsphp[php'fileSizesphp'php]php[php$filenamephp]php)php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Sharedphp docphp storephp compoundphp filephp doesnphp\php'tphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$filenamephp php.php php'php filephp.php'php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp-php>php_sharedDocStoreOptionsphp[php'fileSizesphp'php]php[php$filenamephp]php;
php php php php php php php php php}


php php php php php php php php php$filenamephp php=php php$thisphp-php>php_namephp php.php php$extensionphp;

php php php php php php php php php/php/php Tryphp tophp getphp commonphp filephp first
php php php php php php php php ifphp php(php$thisphp-php>php_directoryphp-php>fileExistsphp(php$filenamephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_directoryphp-php>fileLengthphp(php$filenamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp(php php!issetphp(php$thisphp-php>php_segFileSizesphp[php$filenamephp]php)php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Indexphp compoundphp filephp doesnphp\php'tphp containphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$filenamephp php.php php'php filephp.php'php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_segFileSizesphp[php$filenamephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp fieldphp indexphp orphp php-php1php ifphp fieldphp isphp notphp found
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getFieldNumphp(php$fieldNamephp)
php php php php php{
php php php php php php php php foreachphp(php php$thisphp-php>php_fieldsphp asphp php$fieldphp php)php php{
php php php php php php php php php php php php ifphp(php php$fieldphp-php>namephp php=php=php php$fieldNamephp php)php php{
php php php php php php php php php php php php php php php php returnphp php$fieldphp-php>numberphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php-php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp fieldphp infophp forphp specifiedphp field
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fieldNum
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfo
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php$fieldNumphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fieldsphp[php$fieldNumphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp arrayphp ofphp fieldsphp.
php php php php php php*php ifphp php$indexedphp parameterphp isphp truephp,php thenphp returnsphp onlyphp indexedphp fieldsphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$indexed
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFieldsphp(php$indexedphp php=php falsephp)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php php$thisphp-php>php_fieldsphp asphp php$fieldphp php)php php{
php php php php php php php php php php php php ifphp(php php(php!php$indexedphp)php php|php|php php$fieldphp-php>isIndexedphp php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php php$fieldphp-php>namephp php]php php=php php$fieldphp-php>namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp arrayphp ofphp FieldInfophp objectsphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFieldInfosphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fieldsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp actualphp deletionsphp filephp generationphp numberphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getDelGenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_delGenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp documentsphp inphp thisphp segmentphp php(includingphp deletedphp documentsphp)php.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp numberphp ofphp deletedphp documentsphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_deletedCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_deletedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php returnphp countphp(bitsetphp_tophp_arrayphp(php$thisphp-php>php_deletedphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>php_deletedphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp nonphp-deletedphp documentsphp inphp thisphp segmentphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp numDocsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasDeletionsphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_docCountphp php-php php$thisphp-php>php_deletedCountphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_docCountphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fieldphp positionphp inphp aphp fieldsphp dictionary
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fieldNum
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_getFieldPositionphp(php$fieldNumphp)php php{
php php php php php php php php php/php/php Treatphp valuesphp whichphp arephp notphp inphp aphp translationphp tablephp asphp aphp php'directphp valuephp'
php php php php php php php php returnphp issetphp(php$thisphp-php>php_fieldsDicPositionsphp[php$fieldNumphp]php)php php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fieldsDicPositionsphp[php$fieldNumphp]php php:php php$fieldNumphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp segmentphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php TermInfophp cache
php php php php php php*
php php php php php php*php Sizephp isphp php1php0php2php4php.
php php php php php php*php Numbersphp arephp usedphp insteadphp ofphp classphp constantsphp becausephp ofphp performancephp considerations
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termInfoCachephp php=php arrayphp(php)php;

php php php php privatephp functionphp php_cleanUpTermInfoCachephp(php)
php php php php php{
php php php php php php php php php/php/php Cleanphp php2php5php6php termphp infos
php php php php php php php php foreachphp php(php$thisphp-php>php_termInfoCachephp asphp php$keyphp php=php>php php$termInfophp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_termInfoCachephp[php$keyphp]php)php;

php php php php php php php php php php php php php/php/php leavephp php7php6php8php lastphp usedphp termphp infos
php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termInfoCachephp)php php=php=php php7php6php8php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp termsphp dictionaryphp index
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_loadDictionaryIndexphp(php)
php php php php php{
php php php php php php php php php/php/php Checkphp,php ifphp indexphp isphp alreadyphp serialized
php php php php php php php php ifphp php(php$thisphp-php>php_directoryphp-php>fileExistsphp(php$thisphp-php>php_namephp php.php php'php.stiphp'php)php)php php{
php php php php php php php php php php php php php/php/php Loadphp serializedphp dictionaryphp indexphp data
php php php php php php php php php php php php php$stiFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$thisphp-php>php_namephp php.php php'php.stiphp'php)php;
php php php php php php php php php php php php php$stiFileDataphp php=php php$stiFilephp-php>readBytesphp(php$thisphp-php>php_directoryphp-php>fileLengthphp(php$thisphp-php>php_namephp php.php php'php.stiphp'php)php)php;

php php php php php php php php php php php php php/php/php Loadphp dictionaryphp indexphp data
php php php php php php php php php php php php ifphp php(php(php$unserializedDataphp php=php php@unserializephp(php$stiFileDataphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php listphp(php$thisphp-php>php_termDictionaryphp,php php$thisphp-php>php_termDictionaryInfosphp)php php=php php$unserializedDataphp;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Loadphp dataphp fromphp php.tiiphp filephp andphp generatephp php.stiphp file

php php php php php php php php php/php/php Prefetchphp dictionaryphp indexphp data
php php php php php php php php php$tiiFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.tiiphp'php)php;
php php php php php php php php php$tiiFileDataphp php=php php$tiiFilephp-php>readBytesphp(php$thisphp-php>compoundFileLengthphp(php'php.tiiphp'php)php)php;

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_DictionaryLoaderphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/DictionaryLoaderphp.phpphp'php;

php php php php php php php php php/php/php Loadphp dictionaryphp indexphp data
php php php php php php php php listphp(php$thisphp-php>php_termDictionaryphp,php php$thisphp-php>php_termDictionaryInfosphp)php php=
php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Indexphp_DictionaryLoaderphp:php:loadphp(php$tiiFileDataphp)php;

php php php php php php php php php$stiFileDataphp php=php serializephp(arrayphp(php$thisphp-php>php_termDictionaryphp,php php$thisphp-php>php_termDictionaryInfosphp)php)php;
php php php php php php php php php$stiFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.stiphp'php)php;
php php php php php php php php php$stiFilephp-php>writeBytesphp(php$stiFileDataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scansphp termsphp dictionaryphp andphp returnsphp termphp info
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php publicphp functionphp getTermInfophp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp)
php php php php php{
php php php php php php php php php$termKeyphp php=php php$termphp-php>keyphp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php)php)php php{
php php php php php php php php php php php php php$termInfophp php=php php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php;

php php php php php php php php php php php php php/php/php Movephp termInfophp tophp thephp endphp ofphp cache
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php)php;
php php php php php php php php php php php php php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php php=php php$termInfophp;

php php php php php php php php php php php php returnphp php$termInfophp;
php php php php php php php php php}


php php php php php php php php ifphp php(php$thisphp-php>php_termDictionaryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadDictionaryIndexphp(php)php;
php php php php php php php php php}

php php php php php php php php php$searchFieldphp php=php php$thisphp-php>getFieldNumphp(php$termphp-php>fieldphp)php;

php php php php php php php php ifphp php(php$searchFieldphp php=php=php php-php1php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php php$searchDicFieldphp php=php php$thisphp-php>php_getFieldPositionphp(php$searchFieldphp)php;

php php php php php php php php php/php/php searchphp forphp appropriatephp valuephp inphp dictionary
php php php php php php php php php$lowIndexphp php=php php0php;
php php php php php php php php php$highIndexphp php=php countphp(php$thisphp-php>php_termDictionaryphp)php-php1php;
php php php php php php php php whilephp php(php$highIndexphp php>php=php php$lowIndexphp)php php{
php php php php php php php php php php php php php/php/php php$midphp php=php php(php$highIndexphp php-php php$lowIndexphp)php/php2php;
php php php php php php php php php php php php php$midphp php=php php(php$highIndexphp php+php php$lowIndexphp)php php>php>php php1php;
php php php php php php php php php php php php php$midTermphp php=php php$thisphp-php>php_termDictionaryphp[php$midphp]php;

php php php php php php php php php php php php php$fieldNumphp php=php php$thisphp-php>php_getFieldPositionphp(php$midTermphp[php0php]php php/php*php fieldphp php*php/php)php;
php php php php php php php php php php php php php$deltaphp php=php php$searchDicFieldphp php-php php$fieldNumphp;
php php php php php php php php php php php php ifphp php(php$deltaphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$deltaphp php=php strcmpphp(php$termphp-php>textphp,php php$midTermphp[php1php]php php/php*php textphp php*php/php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$deltaphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$highIndexphp php=php php$midphp-php1php;
php php php php php php php php php php php php php}php elseifphp php(php$deltaphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$lowIndexphp php php=php php$midphp+php1php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php returnphp php$thisphp-php>php_termDictionaryInfosphp[php$midphp]php;php php/php/php Wephp gotphp itphp!
php php php php php php php php php php php php php php php php php$aphp php=php php$thisphp-php>php_termDictionaryInfosphp[php$midphp]php;
php php php php php php php php php php php php php php php php php$termInfophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(php$aphp[php0php]php,php php$aphp[php1php]php,php php$aphp[php2php]php,php php$aphp[php3php]php,php php$aphp[php4php]php)php;

php php php php php php php php php php php php php php php php php/php/php Putphp loadedphp termInfophp intophp cache
php php php php php php php php php php php php php php php php php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php php=php php$termInfophp;

php php php php php php php php php php php php php php php php returnphp php$termInfophp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$highIndexphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php/php/php Termphp isphp outphp ofphp thephp dictionaryphp range
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$prevPositionphp php=php php$highIndexphp;
php php php php php php php php php$prevTermphp php=php php$thisphp-php>php_termDictionaryphp[php$prevPositionphp]php;
php php php php php php php php php$prevTermInfophp php=php php$thisphp-php>php_termDictionaryInfosphp[php$prevPositionphp]php;

php php php php php php php php php$tisFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.tisphp'php)php;
php php php php php php php php php$tiVersionphp php=php php$tisFilephp-php>readIntphp(php)php;
php php php php php php php php ifphp php(php$tiVersionphp php!php=php php(intphp)php0xFFFFFFFEphp php/php*php prephp-php2php.php1php formatphp php*php/php php php&php&
php php php php php php php php php php php php php$tiVersionphp php!php=php php(intphp)php0xFFFFFFFDphp php/php*php php2php.php1php+php formatphp php php php php*php/php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp TermInfoFilephp filephp formatphp'php)php;
php php php php php php php php php}

php php php php php php php php php$termCountphp php php php php php=php php$tisFilephp-php>readLongphp(php)php;
php php php php php php php php php$indexIntervalphp php=php php$tisFilephp-php>readIntphp(php)php;
php php php php php php php php php$skipIntervalphp php php=php php$tisFilephp-php>readIntphp(php)php;
php php php php php php php php ifphp php(php$tiVersionphp php=php=php php(intphp)php0xFFFFFFFDphp php/php*php php2php.php1php+php formatphp php*php/php)php php{
php php php php php php php php php php php php php$maxSkipLevelsphp php=php php$tisFilephp-php>readIntphp(php)php;
php php php php php php php php php}

php php php php php php php php php$tisFilephp-php>seekphp(php$prevTermInfophp[php4php]php php/php*php indexPointerphp php*php/php php-php php(php(php$tiVersionphp php=php=php php(intphp)php0xFFFFFFFDphp)php?php php2php4php php:php php2php0php)php php/php*php headerphp sizephp*php/php,php SEEKphp_CURphp)php;

php php php php php php php php php$termValuephp php php php php=php php$prevTermphp[php1php]php php/php*php textphp php*php/php;
php php php php php php php php php$termFieldNumphp php=php php$prevTermphp[php0php]php php/php*php fieldphp php*php/php;
php php php php php php php php php$freqPointerphp php=php php$prevTermInfophp[php1php]php php/php*php freqPointerphp php*php/php;
php php php php php php php php php$proxPointerphp php=php php$prevTermInfophp[php2php]php php/php*php proxPointerphp php*php/php;
php php php php php php php php forphp php(php$countphp php=php php$prevPositionphp*php$indexIntervalphp php+php php1php;
php php php php php php php php php php php php php php$countphp <php=php php$termCountphp php&php&
php php php php php php php php php php php php php php(php php$thisphp-php>php_getFieldPositionphp(php$termFieldNumphp)php <php php$searchDicFieldphp php|php|
php php php php php php php php php php php php php php php(php$thisphp-php>php_getFieldPositionphp(php$termFieldNumphp)php php=php=php php$searchDicFieldphp php&php&
php php php php php php php php php php php php php php php strcmpphp(php$termValuephp,php php$termphp-php>textphp)php <php php0php)php php)php;
php php php php php php php php php php php php php php$countphp+php+php)php php{
php php php php php php php php php php php php php$termPrefixLengthphp php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php$termSuffixphp php php php php php php php=php php$tisFilephp-php>readStringphp(php)php;
php php php php php php php php php php php php php$termFieldNumphp php php php php php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php$termValuephp php php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getPrefixphp(php$termValuephp,php php$termPrefixLengthphp)php php.php php$termSuffixphp;

php php php php php php php php php php php php php$docFreqphp php php php php php php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php$freqPointerphp php+php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php$proxPointerphp php+php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php ifphp(php php$docFreqphp php>php=php php$skipIntervalphp php)php php{
php php php php php php php php php php php php php php php php php$skipOffsetphp php=php php$tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$skipOffsetphp php=php php0php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$termFieldNumphp php=php=php php$searchFieldphp php&php&php php$termValuephp php=php=php php$termphp-php>textphp)php php{
php php php php php php php php php php php php php$termInfophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(php$docFreqphp,php php$freqPointerphp,php php$proxPointerphp,php php$skipOffsetphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$termInfophp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php Putphp loadedphp termInfophp intophp cache
php php php php php php php php php$thisphp-php>php_termInfoCachephp[php$termKeyphp]php php=php php$termInfophp;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_termInfoCachephp)php php=php=php php1php0php2php4php)php php{
php php php php php php php php php php php php php$thisphp-php>php_cleanUpTermInfoCachephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$termInfophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp IDsphp ofphp allphp thephp documentsphp containingphp termphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp integerphp php$shift
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp termDocsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$shiftphp php=php php0php,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php php$termInfophp php=php php$thisphp-php>getTermInfophp(php$termphp)php;

php php php php php php php php ifphp php(php!php$termInfophp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp)php php{
php php php php php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp php php&php&php php php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$frqFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.frqphp'php)php;
php php php php php php php php php$frqFilephp-php>seekphp(php$termInfophp-php>freqPointerphp,SEEKphp_CURphp)php;
php php php php php php php php php$docIdphp php php=php php0php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Documentsphp filterphp mustphp bephp anphp instancephp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp orphp nullphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Filterphp alreadyphp hasphp somephp dataphp forphp thephp currentphp segment

php php php php php php php php php php php php php php php php php/php/php Makephp shortphp namephp forphp thephp filterphp php(whichphp doesnphp'tphp needphp additionalphp dereferencingphp)
php php php php php php php php php php php php php php php php php$filterphp php=php php&php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php;

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp filterphp isphp notphp empty
php php php php php php php php php php php php php php php php ifphp php(countphp(php$filterphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_docCountphp/countphp(php$filterphp)php <php selfphp:php:FULLphp_SCANphp_VSphp_FETCHphp_BOUNDARYphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fetching
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp(php php$countphp=php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php readphp freq
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$shiftphp php+php php$docIdphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fullphp scan
php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp(php php$countphp=php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php readphp freq
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$shiftphp php+php php$docIdphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Filterphp isphp presentphp,php butphp doesnphp'tphp hasphp dataphp forphp thephp currentphp segmentphp yet
php php php php php php php php php php php php php php php php php$filterDataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php forphp(php php$countphp=php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php readphp freq
php php php php php php php php php php php php php php php php php php php php php php php php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$shiftphp php+php php$docIdphp;
php php php php php php php php php php php php php php php php php php php php php$filterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$filterDataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php forphp(php php$countphp=php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php/php/php readphp freq
php php php php php php php php php php php php php php php php php php php php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$shiftphp php+php php$docIdphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp termphp freqsphp arrayphp.
php php php php php php*php Resultphp arrayphp structurephp:php arrayphp(docIdphp php=php>php freqphp,php php.php.php.php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp integerphp php$shift
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php publicphp functionphp termFreqsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$shiftphp php=php php0php,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php php$termInfophp php=php php$thisphp-php>getTermInfophp(php$termphp)php;

php php php php php php php php ifphp php(php!php$termInfophp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp)php php{
php php php php php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp php php&php&php php php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$frqFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.frqphp'php)php;
php php php php php php php php php$frqFilephp-php>seekphp(php$termInfophp-php>freqPointerphp,SEEKphp_CURphp)php;
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php$docIdphp php=php php0php;

php php php php php php php php php$resultphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Documentsphp filterphp mustphp bephp anphp instancephp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp orphp nullphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Filterphp alreadyphp hasphp somephp dataphp forphp thephp currentphp segment

php php php php php php php php php php php php php php php php php/php/php Makephp shortphp namephp forphp thephp filterphp php(whichphp doesnphp'tphp needphp additionalphp dereferencingphp)
php php php php php php php php php php php php php php php php php$filterphp php=php php&php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php;

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp filterphp isphp notphp empty
php php php php php php php php php php php php php php php php ifphp php(countphp(php$filterphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php php php php php}


php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_docCountphp/countphp(php$filterphp)php <php selfphp:php:FULLphp_SCANphp_VSphp_FETCHphp_BOUNDARYphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fetching
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$freqphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fullphp scan
php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$freqphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Filterphp doesnphp'tphp hasphp dataphp forphp currentphp segment
php php php php php php php php php php php php php php php php php$filterDataphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$filterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$filterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$filterDataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp termphp positionsphp arrayphp.
php php php php php php*php Resultphp arrayphp structurephp:php arrayphp(docIdphp php=php>php arrayphp(posphp1php,php posphp2php,php php.php.php.php)php,php php.php.php.php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp integerphp php$shift
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php publicphp functionphp termPositionsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$shiftphp php=php php0php,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php php$termInfophp php=php php$thisphp-php>getTermInfophp(php$termphp)php;

php php php php php php php php ifphp php(php!php$termInfophp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp)php php{
php php php php php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp php php&php&php php php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$frqFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.frqphp'php)php;
php php php php php php php php php$frqFilephp-php>seekphp(php$termInfophp-php>freqPointerphp,SEEKphp_CURphp)php;

php php php php php php php php php$docIdphp php=php php0php;
php php php php php php php php php$freqsphp php=php arrayphp(php)php;


php php php php php php php php ifphp php(php$docsFilterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!php$docsFilterphp instanceofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Documentsphp filterphp mustphp bephp anphp instancephp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp orphp nullphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Filterphp alreadyphp hasphp somephp dataphp forphp thephp currentphp segment

php php php php php php php php php php php php php php php php php/php/php Makephp shortphp namephp forphp thephp filterphp php(whichphp doesnphp'tphp needphp additionalphp dereferencingphp)
php php php php php php php php php php php php php php php php php$filterphp php=php php&php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php;

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp filterphp isphp notphp empty
php php php php php php php php php php php php php php php php ifphp php(countphp(php$filterphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_docCountphp/countphp(php$filterphp)php <php selfphp:php:FULLphp_SCANphp_VSphp_FETCHphp_BOUNDARYphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fetching
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$prxFilephp-php>seekphp(php$termInfophp-php>proxPointerphp,php SEEKphp_CURphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php wephp havephp tophp readphp php.prxphp filephp tophp getphp rightphp positionphp forphp nextphp doc
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php evenphp filterphp doesnphp'tphp matchphp currentphp document
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Includephp intophp updatedphp filterphp andphp intophp resultphp onlyphp ifphp docphp isphp matchedphp byphp filter
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$positionsphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Performphp fullphp scan
php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$prxFilephp-php>seekphp(php$termInfophp-php>proxPointerphp,php SEEKphp_CURphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php wephp havephp tophp readphp php.prxphp filephp tophp getphp rightphp positionphp forphp nextphp doc
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php evenphp filterphp doesnphp'tphp matchphp currentphp document
php php php php php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Includephp intophp updatedphp filterphp andphp intophp resultphp onlyphp ifphp docphp isphp matchedphp byphp filter
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filterphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$updatedFilterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$positionsphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$updatedFilterDataphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Filterphp doesnphp'tphp hasphp dataphp forphp currentphp segment
php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$filterDataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php)php;
php php php php php php php php php php php php php php php php php$prxFilephp-php>seekphp(php$termInfophp-php>proxPointerphp,php SEEKphp_CURphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php php php php php$filterDataphp[php$docIdphp]php php=php php1php;php php/php/php php1php isphp justphp aphp somephp constantphp valuephp,php sophp wephp donphp'tphp needphp additionalphp varphp dereferencephp here

php php php php php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$positionsphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$docsFilterphp-php>segmentFiltersphp[php$thisphp-php>php_namephp]php php=php php$filterDataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$termInfophp-php>docFreqphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$docDeltaphp php%php php2php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php1php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php$freqsphp[php$docIdphp]php php=php php$frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php)php;
php php php php php php php php php php php php php$prxFilephp-php>seekphp(php$termInfophp-php>proxPointerphp,php SEEKphp_CURphp)php;
php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;
php php php php php php php php php php php php php php php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$resultphp[php$shiftphp php+php php$docIdphp]php php=php php$positionsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp normalizatinphp factorsphp fromphp anphp indexphp file
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fieldNum
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_loadNormphp(php$fieldNumphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_hasSingleNormFilephp)php php{
php php php php php php php php php php php php php$normfFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.nrmphp'php)php;

php php php php php php php php php php php php php$headerphp php php php php php php php php php php php php php php=php php$normfFilephp-php>readBytesphp(php3php)php;
php php php php php php php php php php php php php$headerFormatVersionphp php=php php$normfFilephp-php>readBytephp(php)php;

php php php php php php php php php php php php ifphp php(php$headerphp php!php=php php'NRMphp'php php php|php|php php php$headerFormatVersionphp php!php=php php(intphp)php0xFFphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp php Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp normsphp filephp formatphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_fieldsphp asphp php$fNumphp php=php>php php$fieldInfophp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$fieldInfophp-php>isIndexedphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fNumphp]php php=php php$normfFilephp-php>readBytesphp(php$thisphp-php>php_docCountphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.fphp'php php.php php$fieldNumphp)php;
php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNumphp]php php=php php$fFilephp-php>readBytesphp(php$thisphp-php>php_docCountphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp normalizationphp factorphp forphp specifiedphp documents
php php php php php php*
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp normphp(php$idphp,php php$fieldNamephp)
php php php php php{
php php php php php php php php php$fieldNumphp php=php php$thisphp-php>getFieldNumphp(php$fieldNamephp)php;

php php php php php php php php ifphp php(php php!php(php$thisphp-php>php_fieldsphp[php$fieldNumphp]php-php>isIndexedphp)php php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_normsphp[php$fieldNumphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadNormphp(php$fieldNumphp)php;
php php php php php php php php php}

php php php php php php php php returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp:php:decodeNormphp(php ordphp(php$thisphp-php>php_normsphp[php$fieldNumphp]php[php$idphp]php)php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp normphp vectorphp,php encodedphp inphp aphp bytephp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp normVectorphp(php$fieldNamephp)
php php php php php{
php php php php php php php php php$fieldNumphp php=php php$thisphp-php>getFieldNumphp(php$fieldNamephp)php;

php php php php php php php php ifphp php(php$fieldNumphp php=php=php php-php1php php php|php|php php php!php(php$thisphp-php>php_fieldsphp[php$fieldNumphp]php-php>isIndexedphp)php)php php{
php php php php php php php php php php php php php$similarityphp php=php Zendphp_Searchphp_Lucenephp_Searchphp_Similarityphp:php:getDefaultphp(php)php;

php php php php php php php php php php php php returnphp strphp_repeatphp(chrphp(php$similarityphp-php>encodeNormphp(php php$similarityphp-php>lengthNormphp(php$fieldNamephp,php php0php)php php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docCountphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_normsphp[php$fieldNumphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadNormphp(php$fieldNumphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_normsphp[php$fieldNumphp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp anyphp documentsphp havephp beenphp deletedphp fromphp thisphp indexphp segmentphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasDeletionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_deletedphp php!php=php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp segmentphp hasphp singlephp normsphp filephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasSingleNormFilephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hasSingleNormFilephp php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp segmentphp isphp storedphp usingphp compoundphp segmentphp filephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isCompoundphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isCompoundphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp documentphp fromphp thephp indexphp segmentphp.
php php php php php php*php php$idphp isphp anphp internalphp documentphp id
php php php php php php*
php php php php php php*php php@paramphp integer
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_deletedDirtyphp php=php truephp;

php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_deletedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_deletedphp php=php bitsetphp_emptyphp(php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php bitsetphp_inclphp(php$thisphp-php>php_deletedphp,php php$idphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_deletedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_deletedphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_deletedphp[php$idphp]php php=php php1php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp,php thatphp documentphp isphp deleted
php php php php php php*
php php php php php php*php php@paramphp integer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDeletedphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_deletedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php returnphp bitsetphp_inphp(php$thisphp-php>php_deletedphp,php php$idphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp issetphp(php$thisphp-php>php_deletedphp[php$idphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp latestphp deletephp generation
php php php php php php*
php php php php php php*php Isphp actualyphp usedphp fromphp writeChangesphp(php)php methodphp orphp fromphp thephp constructorphp ifphp itphp'sphp invokedphp from
php php php php php php*php Indexphp writerphp.php Inphp bothphp casesphp indexphp writephp lockphp isphp alreadyphp obtainedphp,php sophp wephp shouldnphp'tphp care
php php php php php php*php aboutphp it
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_detectLatestDelGenphp(php)
php php php php php{
php php php php php php php php php$delFileListphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_directoryphp-php>fileListphp(php)php asphp php$filephp)php php{
php php php php php php php php php php php php ifphp php(php$filephp php=php=php php$thisphp-php>php_namephp php.php php'php.delphp'php)php php{
php php php php php php php php php php php php php php php php php/php/php Matchesphp php<segmentphp_namephp>php.delphp filephp name
php php php php php php php php php php php php php php php php php$delFileListphp[php]php php=php php0php;
php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php/php^php'php php.php php$thisphp-php>php_namephp php.php php'php_php(php[aphp-zAphp-Zphp0php-php9php]php+php)php\php.delphp$php/iphp'php,php php$filephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Matchesphp php<segmentphp_namephp>php_NNNphp.delphp filephp names
php php php php php php php php php php php php php php php php php$delFileListphp[php]php php=php php(intphp)basephp_convertphp(php$matchesphp[php1php]php,php php3php6php,php php1php0php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$delFileListphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Therephp isphp nophp deletionsphp filephp forphp currentphp segmentphp inphp thephp directory
php php php php php php php php php php php php php/php/php Setphp deletionsphp filephp generationphp numberphp tophp php1
php php php php php php php php php php php php returnphp php-php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Therephp arephp somephp deletionsphp filesphp forphp currentphp segmentphp inphp thephp directory
php php php php php php php php php php php php php/php/php Setphp deletionsphp filephp generationphp numberphp tophp thephp highestphp nuber
php php php php php php php php php php php php returnphp maxphp(php$delFileListphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp changesphp ifphp itphp'sphp necessaryphp.
php php php php php php*
php php php php php php*php Thisphp methodphp mustphp bephp invokedphp onlyphp fromphp thephp Writerphp php_updateSegmentsphp(php)php methodphp,
php php php php php php*php sophp indexphp Writephp lockphp hasphp tophp bephp alreadyphp obtainedphp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exceptions
php php php php php php*php/
php php php php publicphp functionphp writeChangesphp(php)
php php php php php{
php php php php php php php php php/php/php Getphp newphp generationphp number
php php php php php php php php php$latestDelGenphp php=php php$thisphp-php>php_detectLatestDelGenphp(php)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_deletedDirtyphp)php php{
php php php php php php php php php php php php php/php/php Therephp wasphp nophp deletionsphp byphp currentphp process

php php php php php php php php php php php php ifphp php(php$latestDelGenphp php=php=php php$thisphp-php>php_delGenphp)php php{
php php php php php php php php php php php php php php php php php/php/php Deletephp filephp hasnphp'tphp beenphp updatedphp byphp anyphp concurrentphp process
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$latestDelGenphp php>php php$thisphp-php>php_delGenphp)php php{
php php php php php php php php php php php php php php php php php/php/php Deletephp filephp hasphp beenphp updatedphp byphp somephp concurrentphp process
php php php php php php php php php php php php php php php php php/php/php Reloadphp deletionsphp file
php php php php php php php php php php php php php php php php php$thisphp-php>php_delGenphp php php=php php$latestDelGenphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_deletedphp php=php php$thisphp-php>php_loadDelFilephp(php)php;

php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Deletephp filephp processingphp workflowphp isphp corruptedphp forphp thephp segmentphp php\php'php'php php.php php$thisphp-php>php_namephp php.php php'php\php'php.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$latestDelGenphp php>php php$thisphp-php>php_delGenphp)php php{
php php php php php php php php php php php php php/php/php Mergephp currentphp deletionsphp withphp latestphp deletionsphp file
php php php php php php php php php php php php php$thisphp-php>php_delGenphp php=php php$latestDelGenphp;

php php php php php php php php php php php php php$latestDeletephp php=php php$thisphp-php>php_loadDelFilephp(php)php;

php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_deletedphp php=php bitsetphp_unionphp(php$thisphp-php>php_deletedphp,php php$latestDeletephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_deletedphp php+php=php php$latestDeletephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(extensionphp_loadedphp(php'bitsetphp'php)php)php php{
php php php php php php php php php php php php php$delBytesphp php=php php$thisphp-php>php_deletedphp;
php php php php php php php php php php php php php$bitCountphp php=php countphp(bitsetphp_tophp_arrayphp(php$delBytesphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$byteCountphp php=php floorphp(php$thisphp-php>php_docCountphp/php8php)php+php1php;
php php php php php php php php php php php php php$delBytesphp php=php strphp_repeatphp(chrphp(php0php)php,php php$byteCountphp)php;
php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$byteCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$bytephp php=php php0php;
php php php php php php php php php php php php php php php php forphp php(php$bitphp php=php php0php;php php$bitphp <php php8php;php php$bitphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_deletedphp[php$countphp*php8php php+php php$bitphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$bytephp php|php=php php(php1<php<php$bitphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$delBytesphp[php$countphp]php php=php chrphp(php$bytephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$bitCountphp php=php countphp(php$thisphp-php>php_deletedphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_delGenphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php/php/php Setphp deletephp filephp generationphp numberphp tophp php1
php php php php php php php php php php php php php$thisphp-php>php_delGenphp php=php php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Increasephp deletephp filephp generationphp numberphp byphp php1
php php php php php php php php php php php php php$thisphp-php>php_delGenphp+php+php;
php php php php php php php php php}

php php php php php php php php php$delFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php_php'php php.php basephp_convertphp(php$thisphp-php>php_delGenphp,php php1php0php,php php3php6php)php php.php php'php.delphp'php)php;
php php php php php php php php php$delFilephp-php>writeIntphp(php$thisphp-php>php_docCountphp)php;
php php php php php php php php php$delFilephp-php>writeIntphp(php$bitCountphp)php;
php php php php php php php php php$delFilephp-php>writeBytesphp(php$delBytesphp)php;

php php php php php php php php php$thisphp-php>php_deletedDirtyphp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Termphp Dictionaryphp Filephp objectphp forphp streamphp likephp termsphp reading
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_tisFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Actualphp offsetphp ofphp thephp php.tisphp filephp data
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_tisFileOffsetphp;

php php php php php/php*php*
php php php php php php*php Frequenciesphp Filephp objectphp forphp streamphp likephp termsphp reading
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_frqFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Actualphp offsetphp ofphp thephp php.frqphp filephp data
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_frqFileOffsetphp;

php php php php php/php*php*
php php php php php php*php Positionsphp Filephp objectphp forphp streamphp likephp termsphp reading
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_prxFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Actualphp offsetphp ofphp thephp php.prxphp filephp inphp thephp compoundphp file
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_prxFileOffsetphp;


php php php php php/php*php*
php php php php php php*php Actualphp numberphp ofphp termsphp inphp termphp stream
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_termCountphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Overallphp numberphp ofphp termsphp inphp termphp stream
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_termNumphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Segmentphp indexphp interval
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_indexIntervalphp;

php php php php php/php*php*
php php php php php php*php Segmentphp skipphp interval
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_skipIntervalphp;

php php php php php/php*php*
php php php php php php*php Lastphp TermInfophp inphp aphp termsphp stream
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php privatephp php$php_lastTermInfophp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Lastphp Termphp inphp aphp termsphp stream
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_lastTermphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Mapphp ofphp thephp documentphp IDs
php php php php php php*php Usedphp tophp getphp newphp docIDphp afterphp removingphp deletedphp documentsphp.
php php php php php php*php Itphp'sphp notphp veryphp effectivephp fromphp memoryphp usagephp pointphp ofphp viewphp,
php php php php php php*php butphp muchphp morephp fasterphp,php thenphp otherphp methods
php php php php php php*
php php php php php php*php php@varphp arrayphp|null
php php php php php php*php/
php php php php privatephp php$php_docMapphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp allphp termphp positionsphp inphp thephp documentsphp.
php php php php php php*php Arrayphp structurephp:php arrayphp(php docIdphp php=php>php arrayphp(php posphp1php,php posphp2php,php php.php.php.php)php,php php.php.php.php)
php php php php php php*
php php php php php php*php Isphp setphp tophp nullphp ifphp termphp positionsphp loadingphp hasphp tophp bephp skipped
php php php php php php*
php php php php php php*php php@varphp arrayphp|null
php php php php php php*php/
php php php php privatephp php$php_lastTermPositionsphp;


php php php php php/php*php*
php php php php php php*php Termsphp scanphp mode
php php php php php php*
php php php php php php*php Valuesphp:
php php php php php php*
php php php php php php*php selfphp:php:SMphp_TERMSphp_ONLYphp php-php termsphp arephp scannedphp,php nophp additionalphp infophp isphp retrieved
php php php php php php*php selfphp:php:SMphp_FULLphp_INFOphp php php-php termsphp arephp scannedphp,php frequencyphp andphp positionphp infophp isphp retrieved
php php php php php php*php selfphp:php:SMphp_MERGEphp_INFOphp php-php termsphp arephp scannedphp,php frequencyphp andphp positionphp infophp isphp retrieved
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php documentphp numbersphp arephp compactedphp php(shiftedphp ifphp segmentphp hasphp deletedphp documentsphp)
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_termsScanModephp;

php php php php php/php*php*php Scanphp modesphp php*php/
php php php php constphp SMphp_TERMSphp_ONLYphp php=php php0php;php php php php php/php/php termsphp arephp scannedphp,php nophp additionalphp infophp isphp retrieved
php php php php constphp SMphp_FULLphp_INFOphp php php=php php1php;php php php php php/php/php termsphp arephp scannedphp,php frequencyphp andphp positionphp infophp isphp retrieved
php php php php constphp SMphp_MERGEphp_INFOphp php=php php2php;php php php php php/php/php termsphp arephp scannedphp,php frequencyphp andphp positionphp infophp isphp retrieved
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php documentphp numbersphp arephp compactedphp php(shiftedphp ifphp segmentphp containsphp deletedphp documentsphp)

php php php php php/php*php*
php php php php php php*php Resetphp termsphp stream
php php php php php php*
php php php php php php*php php$startIdphp php-php idphp forphp thephp fistphp document
php php php php php php*php php$compactphp php-php removephp deletedphp documents
php php php php php php*
php php php php php php*php Returnsphp startphp documentphp idphp forphp thephp nextphp segment
php php php php php php*
php php php php php php*php php@paramphp integerphp php$startId
php php php php php php*php php@paramphp integerphp php$mode
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp resetTermsStreamphp(php/php*php*php php$startIdphp php=php php0php,php php$modephp php=php selfphp:php:SMphp_TERMSphp_ONLYphp php*php/php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php SegmentInfophp-php>resetTermsStreamphp(php)php methodphp actuallyphp takesphp twophp optionalphp parametersphp:
php php php php php php php php php php*php php php php$startIdphp php(defaultphp valuephp isphp php0php)
php php php php php php php php php php*php php php php$modephp php(defaultphp valuephp isphp selfphp:php:SMphp_TERMSphp_ONLYphp)
php php php php php php php php php php*php/
php php php php php php php php php$argListphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php ifphp php(countphp(php$argListphp)php php>php php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp numberphp ofphp argumentsphp'php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$argListphp)php php=php=php php2php)php php{
php php php php php php php php php php php php php$startIdphp php=php php$argListphp[php0php]php;
php php php php php php php php php php php php php$modephp php php php php=php php$argListphp[php1php]php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$argListphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php$startIdphp php=php php$argListphp[php0php]php;
php php php php php php php php php php php php php$modephp php php php php=php selfphp:php:SMphp_TERMSphp_ONLYphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$startIdphp php=php php0php;
php php php php php php php php php php php php php$modephp php php php php=php selfphp:php:SMphp_TERMSphp_ONLYphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_tisFilephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tisFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.tisphp'php,php falsephp)php;
php php php php php php php php php$thisphp-php>php_tisFileOffsetphp php=php php$thisphp-php>php_tisFilephp-php>tellphp(php)php;

php php php php php php php php php$tiVersionphp php=php php$thisphp-php>php_tisFilephp-php>readIntphp(php)php;
php php php php php php php php ifphp php(php$tiVersionphp php!php=php php(intphp)php0xFFFFFFFEphp php/php*php prephp-php2php.php1php formatphp php*php/php php php&php&
php php php php php php php php php php php php php$tiVersionphp php!php=php php(intphp)php0xFFFFFFFDphp php/php*php php2php.php1php+php formatphp php php php php*php/php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp TermInfoFilephp filephp formatphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termCountphp php php php php php=
php php php php php php php php php php php php php php php$thisphp-php>php_termNumphp php=php php$thisphp-php>php_tisFilephp-php>readLongphp(php)php;php php/php/php Readphp termsphp count
php php php php php php php php php$thisphp-php>php_indexIntervalphp php=php php$thisphp-php>php_tisFilephp-php>readIntphp(php)php;php php php/php/php Readphp Indexphp interval
php php php php php php php php php$thisphp-php>php_skipIntervalphp php php=php php$thisphp-php>php_tisFilephp-php>readIntphp(php)php;php php php/php/php Readphp skipphp interval
php php php php php php php php ifphp php(php$tiVersionphp php=php=php php(intphp)php0xFFFFFFFDphp php/php*php php2php.php1php+php formatphp php*php/php)php php{
php php php php php php php php php php php php php$maxSkipLevelsphp php=php php$thisphp-php>php_tisFilephp-php>readIntphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_frqFilephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_prxFilephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_docMapphp php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php'php'php,php php-php1php)php;
php php php php php php php php php$thisphp-php>php_lastTermInfophp php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(php0php,php php0php,php php0php,php php0php)php;
php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php nullphp;

php php php php php php php php php$thisphp-php>php_termsScanModephp php=php php$modephp;

php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp selfphp:php:SMphp_TERMSphp_ONLYphp:
php php php php php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SMphp_FULLphp_INFOphp:
php php php php php php php php php php php php php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php casephp selfphp:php:SMphp_MERGEphp_INFOphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.frqphp'php,php falsephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFileOffsetphp php=php php$thisphp-php>php_frqFilephp-php>tellphp(php)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php,php falsephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_prxFileOffsetphp php=php php$thisphp-php>php_prxFilephp-php>tellphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$thisphp-php>php_docCountphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>isDeletedphp(php$countphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docMapphp[php$countphp]php php=php php$startIdphp php+php php(php(php$modephp php=php=php selfphp:php:SMphp_MERGEphp_INFOphp)php php?php countphp(php$thisphp-php>php_docMapphp)php php:php php$countphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Wrongphp termsphp scaningphp modephp specifiedphp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php/php/php Calculatephp nextphp segmentphp startphp idphp php(sincephp php$thisphp-php>php_docMapphp structurephp mayphp bephp cleanedphp byphp php$thisphp-php>nextTermphp(php)php callphp)
php php php php php php php php php$nextSegmentStartIdphp php=php php$startIdphp php+php php(php(php$modephp php=php=php selfphp:php:SMphp_MERGEphp_INFOphp)php php?php countphp(php$thisphp-php>php_docMapphp)php php:php php$thisphp-php>php_docCountphp)php;
php php php php php php php php php$thisphp-php>nextTermphp(php)php;

php php php php php php php php returnphp php$nextSegmentStartIdphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Skipphp termsphp streamphp upphp tophp thephp specifiedphp termphp preffixphp.
php php php php php php*
php php php php php php*php Prefixphp containsphp fullyphp specifiedphp fieldphp infophp andphp portionphp ofphp searchedphp term
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$prefix
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp skipTophp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$prefixphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_termDictionaryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadDictionaryIndexphp(php)php;
php php php php php php php php php}

php php php php php php php php php$searchFieldphp php=php php$thisphp-php>getFieldNumphp(php$prefixphp-php>fieldphp)php;

php php php php php php php php ifphp php(php$searchFieldphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Fieldphp isphp notphp presentedphp inphp thisphp segment
php php php php php php php php php php php php php php*php Gophp tophp thephp endphp ofphp dictionary
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;

php php php php php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermInfophp php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php nullphp;

php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$searchDicFieldphp php=php php$thisphp-php>php_getFieldPositionphp(php$searchFieldphp)php;

php php php php php php php php php/php/php searchphp forphp appropriatephp valuephp inphp dictionary
php php php php php php php php php$lowIndexphp php=php php0php;
php php php php php php php php php$highIndexphp php=php countphp(php$thisphp-php>php_termDictionaryphp)php-php1php;
php php php php php php php php whilephp php(php$highIndexphp php>php=php php$lowIndexphp)php php{
php php php php php php php php php php php php php/php/php php$midphp php=php php(php$highIndexphp php-php php$lowIndexphp)php/php2php;
php php php php php php php php php php php php php$midphp php=php php(php$highIndexphp php+php php$lowIndexphp)php php>php>php php1php;
php php php php php php php php php php php php php$midTermphp php=php php$thisphp-php>php_termDictionaryphp[php$midphp]php;

php php php php php php php php php php php php php$fieldNumphp php=php php$thisphp-php>php_getFieldPositionphp(php$midTermphp[php0php]php php/php*php fieldphp php*php/php)php;
php php php php php php php php php php php php php$deltaphp php=php php$searchDicFieldphp php-php php$fieldNumphp;
php php php php php php php php php php php php ifphp php(php$deltaphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$deltaphp php=php strcmpphp(php$prefixphp-php>textphp,php php$midTermphp[php1php]php php/php*php textphp php*php/php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$deltaphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$highIndexphp php=php php$midphp-php1php;
php php php php php php php php php php php php php}php elseifphp php(php$deltaphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$lowIndexphp php php=php php$midphp+php1php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Wephp havephp reachedphp termphp wephp arephp lookingphp for
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$highIndexphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php/php/php Termphp isphp outphp ofphp thephp dictionaryphp range
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;

php php php php php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermInfophp php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php nullphp;

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$prevPositionphp php=php php$highIndexphp;
php php php php php php php php php$prevTermphp php=php php$thisphp-php>php_termDictionaryphp[php$prevPositionphp]php;
php php php php php php php php php$prevTermInfophp php=php php$thisphp-php>php_termDictionaryInfosphp[php$prevPositionphp]php;

php php php php php php php php ifphp php(php$thisphp-php>php_tisFilephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Thephp endphp ofphp termsphp streamphp isphp reachedphp andphp termsphp dictionaryphp filephp isphp closed
php php php php php php php php php php php php php/php/php Performphp miniphp-resetphp operation
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.tisphp'php,php falsephp)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_FULLphp_INFOphp php php|php|php php php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_MERGEphp_INFOphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.frqphp'php,php falsephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php php$thisphp-php>openCompoundFilephp(php'php.prxphp'php,php falsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_tisFilephp-php>seekphp(php$thisphp-php>php_tisFileOffsetphp php+php php$prevTermInfophp[php4php]php,php SEEKphp_SETphp)php;

php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$prevTermphp[php1php]php php/php*php textphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$prevTermphp[php0php]php php=php=php php-php1php)php php?php php'php'php php:php php$thisphp-php>php_fieldsphp[php$prevTermphp[php0php]php php/php*php fieldphp php*php/php]php-php>namephp)php;
php php php php php php php php php$thisphp-php>php_lastTermInfophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(php$prevTermInfophp[php0php]php php/php*php docFreqphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prevTermInfophp[php1php]php php/php*php freqPointerphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prevTermInfophp[php2php]php php/php*php proxPointerphp php*php/php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prevTermInfophp[php3php]php php/php*php skipOffsetphp php*php/php)php;
php php php php php php php php php$thisphp-php>php_termCountphp php php=php php php$thisphp-php>php_termNumphp php-php php$prevPositionphp*php$thisphp-php>php_indexIntervalphp;

php php php php php php php php ifphp php(php$highIndexphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php skipphp startphp entry
php php php php php php php php php php php php php$thisphp-php>nextTermphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$prefixphp-php>fieldphp php=php=php php$thisphp-php>php_lastTermphp-php>fieldphp php php&php&php php php$prefixphp-php>textphp php php=php=php php$thisphp-php>php_lastTermphp-php>textphp)php php{
php php php php php php php php php php php php php/php/php Wephp gotphp exactphp matchphp inphp thephp dictionaryphp index

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_FULLphp_INFOphp php php|php|php php php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_MERGEphp_INFOphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp-php>seekphp(php$thisphp-php>php_lastTermInfophp-php>freqPointerphp php+php php$thisphp-php>php_frqFileOffsetphp,php SEEKphp_SETphp)php;
php php php php php php php php php php php php php php php php php$freqsphp php=php arrayphp(php)php;php php php php$docIdphp php=php php0php;
php php php php php php php php php php php php php php php php forphp(php php$countphp php=php php0php;php php$countphp <php php$thisphp-php>php_lastTermInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$thisphp-php>php_frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php php$docIdphp php]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$freqsphp[php php$docIdphp php]php php=php php$thisphp-php>php_frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_prxFilephp-php>seekphp(php$thisphp-php>php_lastTermInfophp-php>proxPointerphp php+php php$thisphp-php>php_prxFileOffsetphp,php SEEKphp_SETphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$thisphp-php>php_prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_docMapphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp[php$thisphp-php>php_docMapphp[php$docIdphp]php]php php=php php$positionsphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Searchphp termphp matchingphp specifiedphp prefix
php php php php php php php php whilephp php(php$thisphp-php>php_lastTermphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php strcmpphp(php$thisphp-php>php_lastTermphp-php>fieldphp,php php$prefixphp-php>fieldphp)php php>php php0php php php|php|
php php php php php php php php php php php php php php php php php php(php$prefixphp-php>fieldphp php=php=php php$thisphp-php>php_lastTermphp-php>fieldphp php php&php&php php strcmpphp(php$thisphp-php>php_lastTermphp-php>textphp,php php$prefixphp-php>textphp)php php>php=php php0php)php php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Currentphp termphp matchesphp orphp greatephp thanphp thephp pattern
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>nextTermphp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Scansphp termsphp dictionaryphp andphp returnsphp nextphp term
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp nextTermphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_tisFilephp php=php=php=php nullphp php php|php|php php php$thisphp-php>php_termCountphp php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermInfophp php php php php php php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_docMapphp php php php php php php php php php php php php=php nullphp;

php php php php php php php php php php php php php/php/php mayphp bephp necessaryphp forphp php"emptyphp"php segment
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;

php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$termPrefixLengthphp php=php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php$termSuffixphp php php php php php php php=php php$thisphp-php>php_tisFilephp-php>readStringphp(php)php;
php php php php php php php php php$termFieldNumphp php php php php php=php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php$termValuephp php php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getPrefixphp(php$thisphp-php>php_lastTermphp-php>textphp,php php$termPrefixLengthphp)php php.php php$termSuffixphp;

php php php php php php php php php$thisphp-php>php_lastTermphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$termValuephp,php php$thisphp-php>php_fieldsphp[php$termFieldNumphp]php-php>namephp)php;

php php php php php php php php php$docFreqphp php php php php php=php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php$freqPointerphp php=php php$thisphp-php>php_lastTermInfophp-php>freqPointerphp php+php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php$proxPointerphp php=php php$thisphp-php>php_lastTermInfophp-php>proxPointerphp php+php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php ifphp php(php$docFreqphp php>php=php php$thisphp-php>php_skipIntervalphp)php php{
php php php php php php php php php php php php php$skipOffsetphp php=php php$thisphp-php>php_tisFilephp-php>readVIntphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$skipOffsetphp php=php php0php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_lastTermInfophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(php$docFreqphp,php php$freqPointerphp,php php$proxPointerphp,php php$skipOffsetphp)php;


php php php php php php php php ifphp php(php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_FULLphp_INFOphp php php|php|php php php$thisphp-php>php_termsScanModephp php=php=php selfphp:php:SMphp_MERGEphp_INFOphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_frqFilephp-php>seekphp(php$thisphp-php>php_lastTermInfophp-php>freqPointerphp php+php php$thisphp-php>php_frqFileOffsetphp,php SEEKphp_SETphp)php;
php php php php php php php php php php php php php$freqsphp php=php arrayphp(php)php;php php php php$docIdphp php=php php0php;
php php php php php php php php php php php php forphp(php php$countphp php=php php0php;php php$countphp <php php$thisphp-php>php_lastTermInfophp-php>docFreqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php$docDeltaphp php=php php$thisphp-php>php_frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php ifphp(php php$docDeltaphp php%php php2php php=php=php php1php php)php php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php(php$docDeltaphp-php1php)php/php2php;
php php php php php php php php php php php php php php php php php php php php php$freqsphp[php php$docIdphp php]php php=php php1php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$docIdphp php+php=php php$docDeltaphp/php2php;
php php php php php php php php php php php php php php php php php php php php php$freqsphp[php php$docIdphp php]php php=php php$thisphp-php>php_frqFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_prxFilephp-php>seekphp(php$thisphp-php>php_lastTermInfophp-php>proxPointerphp php+php php$thisphp-php>php_prxFileOffsetphp,php SEEKphp_SETphp)php;
php php php php php php php php php php php php foreachphp php(php$freqsphp asphp php$docIdphp php=php>php php$freqphp)php php{
php php php php php php php php php php php php php php php php php$termPositionphp php=php php0php;php php php$positionsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$freqphp;php php$countphp+php+php php)php php{
php php php php php php php php php php php php php php php php php php php php php$termPositionphp php+php=php php$thisphp-php>php_prxFilephp-php>readVIntphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$positionsphp[php]php php=php php$termPositionphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_docMapphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lastTermPositionsphp[php$thisphp-php>php_docMapphp[php$docIdphp]php]php php=php php$positionsphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termCountphp-php-php;
php php php php php php php php ifphp php(php$thisphp-php>php_termCountphp php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_lastTermphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp termsphp stream
php php php php php php*
php php php php php php*php Shouldphp bephp usedphp forphp resourcesphp cleanphp upphp ifphp streamphp isphp notphp readphp upphp tophp thephp end
php php php php php php*php/
php php php php publicphp functionphp closeTermsStreamphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tisFilephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_frqFilephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_prxFilephp php=php nullphp;

php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_lastTermInfophp php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_lastTermPositionsphp php=php nullphp;

php php php php php php php php php$thisphp-php>php_docMapphp php php php php php php php php php php php php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp termphp inphp currentphp position
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp currentTermphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lastTermphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp termphp positionsphp inphp thephp documentsphp.
php php php php php php*php Returnphp arrayphp structurephp:php arrayphp(php docIdphp php=php>php arrayphp(php posphp1php,php posphp2php,php php.php.php.php)php,php php.php.php.php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp currentTermPositionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lastTermPositionsphp;
php php php php php}
php}

