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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermsStreamphp/Interfacephp.phpphp'php;


php/php*php*php Classesphp usedphp withinphp Zendphp_Searchphp_Lucenephp_Interfacephp APIphp php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/DocsFilterphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Searchphp_Lucenephp_Interfacephp extendsphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Getphp currentphp generationphp number
php php php php php php*
php php php php php php*php Returnsphp generationphp number
php php php php php php*php php0php meansphp prephp-php2php.php1php indexphp format
php php php php php php*php php-php1php meansphp therephp arephp nophp segmentsphp filesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp getActualGenerationphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp)php;

php php php php php/php*php*
php php php php php php*php Getphp segmentsphp filephp name
php php php php php php*
php php php php php php*php php@paramphp integerphp php$generation
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getSegmentFileNamephp(php$generationphp)php;

php php php php php/php*php*
php php php php php php*php Getphp indexphp formatphp version
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getFormatVersionphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp indexphp formatphp versionphp.
php php php php php php*php Indexphp isphp convertedphp tophp thisphp formatphp atphp thephp nearestphp upfdatephp time
php php php php php php*
php php php php php php*php php@paramphp intphp php$formatVersion
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFormatVersionphp(php$formatVersionphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp instancephp forphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Storagephp_Directory
php php php php php php*php/
php php php php publicphp functionphp getDirectoryphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp documentsphp inphp thisphp indexphp php(includingphp deletedphp documentsphp)php.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp onephp greaterphp thanphp thephp largestphp possiblephp documentphp numberphp.
php php php php php php*php Thisphp mayphp bephp usedphp tophp,php ephp.gphp.php,php determinephp howphp bigphp tophp allocatephp aphp structurephp whichphp willphp have
php php php php php php*php anphp elementphp forphp everyphp documentphp numberphp inphp anphp indexphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp maxDocphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp nonphp-deletedphp documentsphp inphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp numDocsphp(php)php;

php php php php php/php*php*
php php php php php php*php Checksphp,php thatphp documentphp isphp deleted
php php php php php php*
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exceptionphp php php php Exceptionphp isphp thrownphp ifphp php$idphp isphp outphp ofphp thephp range
php php php php php php*php/
php php php php publicphp functionphp isDeletedphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Setphp defaultphp searchphp fieldphp.
php php php php php php*
php php php php php php*php Nullphp meansphp,php thatphp searchphp isphp performedphp throughphp allphp fieldsphp byphp default
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp null
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultSearchFieldphp(php$fieldNamephp)php;

php php php php php/php*php*
php php php php php php*php Getphp defaultphp searchphp fieldphp.
php php php php php php*
php php php php php php*php Nullphp meansphp,php thatphp searchphp isphp performedphp throughphp allphp fieldsphp byphp default
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultSearchFieldphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp resultphp setphp limitphp.
php php php php php php*
php php php php php php*php php0php php(defaultphp)php meansphp nophp limit
php php php php php php*
php php php php php php*php php@paramphp integerphp php$limit
php php php php php php*php/
php php php php publicphp staticphp functionphp setResultSetLimitphp(php$limitphp)php;

php php php php php/php*php*
php php php php php php*php Setphp resultphp setphp limitphp.
php php php php php php*
php php php php php php*php php0php meansphp nophp limit
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getResultSetLimitphp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp indexphp maxBufferedDocsphp option
php php php php php php*
php php php php php php*php maxBufferedDocsphp isphp aphp minimalphp numberphp ofphp documentsphp requiredphp before
php php php php php php*php thephp bufferedphp inphp-memoryphp documentsphp arephp writtenphp intophp aphp newphp Segment
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMaxBufferedDocsphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp indexphp maxBufferedDocsphp option
php php php php php php*
php php php php php php*php maxBufferedDocsphp isphp aphp minimalphp numberphp ofphp documentsphp requiredphp before
php php php php php php*php thephp bufferedphp inphp-memoryphp documentsphp arephp writtenphp intophp aphp newphp Segment
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@paramphp integerphp php$maxBufferedDocs
php php php php php php*php/
php php php php publicphp functionphp setMaxBufferedDocsphp(php$maxBufferedDocsphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp indexphp maxMergeDocsphp option
php php php php php php*
php php php php php php*php maxMergeDocsphp isphp aphp largestphp numberphp ofphp documentsphp everphp mergedphp byphp addDocumentphp(php)php.
php php php php php php*php Smallphp valuesphp php(ephp.gphp.php,php lessphp thanphp php1php0php,php0php0php0php)php arephp bestphp forphp interactivephp indexingphp,
php php php php php php*php asphp thisphp limitsphp thephp lengthphp ofphp pausesphp whilephp indexingphp tophp aphp fewphp secondsphp.
php php php php php php*php Largerphp valuesphp arephp bestphp forphp batchedphp indexingphp andphp speedierphp searchesphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp PHPphp_INTphp_MAX
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMaxMergeDocsphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp indexphp maxMergeDocsphp option
php php php php php php*
php php php php php php*php maxMergeDocsphp isphp aphp largestphp numberphp ofphp documentsphp everphp mergedphp byphp addDocumentphp(php)php.
php php php php php php*php Smallphp valuesphp php(ephp.gphp.php,php lessphp thanphp php1php0php,php0php0php0php)php arephp bestphp forphp interactivephp indexingphp,
php php php php php php*php asphp thisphp limitsphp thephp lengthphp ofphp pausesphp whilephp indexingphp tophp aphp fewphp secondsphp.
php php php php php php*php Largerphp valuesphp arephp bestphp forphp batchedphp indexingphp andphp speedierphp searchesphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp PHPphp_INTphp_MAX
php php php php php php*
php php php php php php*php php@paramphp integerphp php$maxMergeDocs
php php php php php php*php/
php php php php publicphp functionphp setMaxMergeDocsphp(php$maxMergeDocsphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp indexphp mergeFactorphp option
php php php php php php*
php php php php php php*php mergeFactorphp determinesphp howphp oftenphp segmentphp indicesphp arephp mergedphp byphp addDocumentphp(php)php.
php php php php php php*php Withphp smallerphp valuesphp,php lessphp RAMphp isphp usedphp whilephp indexingphp,
php php php php php php*php andphp searchesphp onphp unoptimizedphp indicesphp arephp fasterphp,
php php php php php php*php butphp indexingphp speedphp isphp slowerphp.
php php php php php php*php Withphp largerphp valuesphp,php morephp RAMphp isphp usedphp duringphp indexingphp,
php php php php php php*php andphp whilephp searchesphp onphp unoptimizedphp indicesphp arephp slowerphp,
php php php php php php*php indexingphp isphp fasterphp.
php php php php php php*php Thusphp largerphp valuesphp php(php>php php1php0php)php arephp bestphp forphp batchphp indexphp creationphp,
php php php php php php*php andphp smallerphp valuesphp php(<php php1php0php)php forphp indicesphp thatphp arephp interactivelyphp maintainedphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMergeFactorphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp indexphp mergeFactorphp option
php php php php php php*
php php php php php php*php mergeFactorphp determinesphp howphp oftenphp segmentphp indicesphp arephp mergedphp byphp addDocumentphp(php)php.
php php php php php php*php Withphp smallerphp valuesphp,php lessphp RAMphp isphp usedphp whilephp indexingphp,
php php php php php php*php andphp searchesphp onphp unoptimizedphp indicesphp arephp fasterphp,
php php php php php php*php butphp indexingphp speedphp isphp slowerphp.
php php php php php php*php Withphp largerphp valuesphp,php morephp RAMphp isphp usedphp duringphp indexingphp,
php php php php php php*php andphp whilephp searchesphp onphp unoptimizedphp indicesphp arephp slowerphp,
php php php php php php*php indexingphp isphp fasterphp.
php php php php php php*php Thusphp largerphp valuesphp php(php>php php1php0php)php arephp bestphp forphp batchphp indexphp creationphp,
php php php php php php*php andphp smallerphp valuesphp php(<php php1php0php)php forphp indicesphp thatphp arephp interactivelyphp maintainedphp.
php php php php php php*
php php php php php php*php Defaultphp valuephp isphp php1php0
php php php php php php*
php php php php php php*php php@paramphp integerphp php$maxMergeDocs
php php php php php php*php/
php php php php publicphp functionphp setMergeFactorphp(php$mergeFactorphp)php;

php php php php php/php*php*
php php php php php php*php Performsphp aphp queryphp againstphp thephp indexphp andphp returnsphp anphp array
php php php php php php*php ofphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryHitphp objectsphp.
php php php php php php*php Inputphp isphp aphp stringphp orphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$query
php php php php php php*php php@returnphp arrayphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryHit
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp findphp(php$queryphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp allphp uniquephp fieldphp namesphp thatphp existphp inphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$indexed
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFieldNamesphp(php$indexedphp php=php falsephp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp Zendphp_Searchphp_Lucenephp_Documentphp objectphp forphp thephp document
php php php php php php*php numberphp php$idphp inphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp|Zendphp_Searchphp_Lucenephp_Searchphp_QueryHitphp php$id
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Document
php php php php php php*php/
php php php php publicphp functionphp getDocumentphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp indexphp containphp documentsphp withphp specifiedphp termphp.
php php php php php php*
php php php php php php*php Isphp usedphp forphp queryphp optimizationphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasTermphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp IDsphp ofphp allphp thephp documentsphp containingphp termphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp termDocsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$docsFilterphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp documentsphp filterphp forphp allphp documentsphp containingphp termphp.
php php php php php php*
php php php php php php*php Itphp performsphp thephp samephp operationphp asphp termDocsphp,php butphp returnphp resultphp as
php php php php php php*php Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilter
php php php php php php*php/
php php php php publicphp functionphp termDocsFilterphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$docsFilterphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp termphp freqsphp.
php php php php php php*php Returnphp arrayphp structurephp:php arrayphp(php docIdphp php=php>php freqphp,php php.php.php.php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp termFreqsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$docsFilterphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp termphp positionsphp inphp thephp documentsphp.
php php php php php php*php Returnphp arrayphp structurephp:php arrayphp(php docIdphp php=php>php arrayphp(php posphp1php,php posphp2php,php php.php.php.php)php,php php.php.php.php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp termPositionsphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$docsFilterphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp documentsphp inphp thisphp indexphp containingphp thephp php$termphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp docFreqphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp)php;

php php php php php/php*php*
php php php php php php*php Retrivephp similarityphp usedphp byphp indexphp reader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Similarity
php php php php php php*php/
php php php php publicphp functionphp getSimilarityphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp normalizationphp factorphp forphp php"fieldphp,php documentphp"php pairphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp normphp(php$idphp,php php$fieldNamephp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp anyphp documentsphp havephp beenphp deletedphp fromphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasDeletionsphp(php)php;

php php php php php/php*php*
php php php php php php*php Deletesphp aphp documentphp fromphp thephp indexphp.
php php php php php php*php php$idphp isphp anphp internalphp documentphp id
php php php php php php*
php php php php php php*php php@paramphp integerphp|Zendphp_Searchphp_Lucenephp_Searchphp_QueryHitphp php$id
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Addsphp aphp documentphp tophp thisphp indexphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Documentphp php$document
php php php php php php*php/
php php php php publicphp functionphp addDocumentphp(Zendphp_Searchphp_Lucenephp_Documentphp php$documentphp)php;

php php php php php/php*php*
php php php php php php*php Commitphp changesphp resultingphp fromphp deletephp(php)php orphp undeleteAllphp(php)php operationsphp.
php php php php php php*php/
php php php php publicphp functionphp commitphp(php)php;

php php php php php/php*php*
php php php php php php*php Optimizephp indexphp.
php php php php php php*
php php php php php php*php Mergesphp allphp segmentsphp intophp one
php php php php php php*php/
php php php php publicphp functionphp optimizephp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp termsphp inphp thisphp indexphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp termsphp(php)php;

php php php php php/php*php*
php php php php php php*php Undeletesphp allphp documentsphp currentlyphp markedphp asphp deletedphp inphp thisphp indexphp.
php php php php php php*php/
php php php php publicphp functionphp undeleteAllphp(php)php;


php php php php php/php*php*
php php php php php php*php Addphp referencephp tophp thephp indexphp object
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp addReferencephp(php)php;

php php php php php/php*php*
php php php php php php*php Removephp referencephp fromphp thephp indexphp object
php php php php php php*
php php php php php php*php Whenphp referencephp countphp becomesphp zerophp,php indexphp isphp closedphp andphp resourcesphp arephp cleanedphp up
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp removeReferencephp(php)php;
php}
