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
php php*php php@versionphp php php php php$Idphp:php SegmentWriterphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


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
abstractphp classphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriter
php{
php php php php php/php*php*
php php php php php php*php Expertphp:php Thephp fractionphp ofphp termsphp inphp thephp php"dictionaryphp"php whichphp shouldphp bephp stored
php php php php php php*php inphp RAMphp.php php Smallerphp valuesphp usephp morephp memoryphp,php butphp makephp searchingphp slightly
php php php php php php*php fasterphp,php whilephp largerphp valuesphp usephp lessphp memoryphp andphp makephp searchingphp slightly
php php php php php php*php slowerphp.php php Searchingphp isphp typicallyphp notphp dominatedphp byphp dictionaryphp lookupphp,php so
php php php php php php*php tweakingphp thisphp isphp rarelyphp usefulphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp staticphp php$indexIntervalphp php=php php1php2php8php;

php php php php php/php*php*
php php php php php php*php Expertphp:php Thephp fractionphp ofphp TermDocsphp entriesphp storedphp inphp skipphp tablesphp.
php php php php php php*php Largerphp valuesphp resultphp inphp smallerphp indexesphp,php greaterphp accelerationphp,php butphp fewer
php php php php php php*php accelerablephp casesphp,php whilephp smallerphp valuesphp resultphp inphp biggerphp indexesphp,
php php php php php php*php lessphp accelerationphp andphp more
php php php php php php*php accelerablephp casesphp.php Morephp detailedphp experimentsphp wouldphp bephp usefulphp herephp.
php php php php php php*
php php php php php php*php php0xphp7FFFFFFFphp indicatesphp thatphp wephp donphp'tphp usephp skipphp data
php php php php php php*
php php php php php php*php Notephp:php notphp usedphp inphp currentphp implementation
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp staticphp php$skipIntervalphp php=php php0xphp7FFFFFFFphp;

php php php php php/php*php*
php php php php php php*php Expertphp:php Thephp maximumphp numberphp ofphp skipphp levelsphp.php Smallerphp valuesphp resultphp in
php php php php php php*php slightlyphp smallerphp indexesphp,php butphp slowerphp skippingphp inphp bigphp postingphp listsphp.
php php php php php php*
php php php php php php*php php0php indicatesphp thatphp wephp donphp'tphp usephp skipphp data
php php php php php php*
php php php php php php*php Notephp:php notphp usedphp inphp currentphp implementation
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp staticphp php$maxSkipLevelsphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp docsphp inphp aphp segment
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_docCountphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Segmentphp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp;

php php php php php/php*php*
php php php php php php*php Filephp systemphp adapterphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_Directory
php php php php php php*php/
php php php php protectedphp php$php_directoryphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp indexphp filesphp.
php php php php php php*php Usedphp forphp automaticphp compoundphp filephp generation
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_filesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Segmentphp fieldsphp.php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp objectsphp forphp thisphp segment
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_fieldsphp php=php arrayphp(php)php;

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
php php php php protectedphp php$php_normsphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php php'php.fdxphp'php php filephp php-php Storedphp Fieldsphp,php thephp fieldphp indexphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php protectedphp php$php_fdxFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php'php.fdtphp'php php filephp php-php Storedphp Fieldsphp,php thephp fieldphp dataphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php protectedphp php$php_fdtFilephp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_directoryphp php=php php$directoryphp;
php php php php php php php php php$thisphp-php>php_namephp php php php php php php=php php$namephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp fieldphp tophp thephp segment
php php php php php php*
php php php php php php*php Returnsphp actualphp fieldphp number
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Fieldphp php$field
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp php$fieldphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php)php)php php{
php php php php php php php php php php php php php$fieldNumberphp php=php countphp(php$thisphp-php>php_fieldsphp)php;
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp(php$fieldphp-php>namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>isIndexedphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldNumberphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldphp-php>storeTermVectorphp)php;

php php php php php php php php php php php php returnphp php$fieldNumberphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php-php>isIndexedphp php php php php php php php|php=php php$fieldphp-php>isIndexedphp;
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php-php>storeTermVectorphp php|php=php php$fieldphp-php>storeTermVectorphp;

php php php php php php php php php php php php returnphp php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php-php>numberphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp fieldInfophp tophp thephp segment
php php php php php php*
php php php php php php*php Returnsphp actualphp fieldphp number
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp php$fieldInfo
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp addFieldInfophp(Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp php$fieldInfophp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_fieldsphp[php$fieldInfophp-php>namephp]php)php)php php{
php php php php php php php php php php php php php$fieldNumberphp php=php countphp(php$thisphp-php>php_fieldsphp)php;
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldInfophp-php>namephp]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Searchphp_Lucenephp_Indexphp_FieldInfophp(php$fieldInfophp-php>namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldInfophp-php>isIndexedphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldNumberphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldInfophp-php>storeTermVectorphp)php;

php php php php php php php php php php php php returnphp php$fieldNumberphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldInfophp-php>namephp]php-php>isIndexedphp php php php php php php php|php=php php$fieldInfophp-php>isIndexedphp;
php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$fieldInfophp-php>namephp]php-php>storeTermVectorphp php|php=php php$fieldInfophp-php>storeTermVectorphp;

php php php php php php php php php php php php returnphp php$thisphp-php>php_fieldsphp[php$fieldInfophp-php>namephp]php-php>numberphp;
php php php php php php php php php}
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
php php php php php php*php Addphp storedphp fieldsphp information
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$storedFieldsphp arrayphp ofphp Zendphp_Searchphp_Lucenephp_Fieldphp objects
php php php php php php*php/
php php php php publicphp functionphp addStoredFieldsphp(php$storedFieldsphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_fdxFilephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fdxFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.fdxphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.fdtphp'php)php;

php php php php php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.fdxphp'php;
php php php php php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.fdtphp'php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fdxFilephp-php>writeLongphp(php$thisphp-php>php_fdtFilephp-php>tellphp(php)php)php;
php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeVIntphp(countphp(php$storedFieldsphp)php)php;
php php php php php php php php foreachphp php(php$storedFieldsphp asphp php$fieldphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeVIntphp(php$thisphp-php>php_fieldsphp[php$fieldphp-php>namephp]php-php>numberphp)php;
php php php php php php php php php php php php php$fieldBitsphp php=php php(php$fieldphp-php>isTokenizedphp php?php php0xphp0php1php php:php php0xphp0php0php)php php|
php php php php php php php php php php php php php php php php php php php php php php php php php php(php$fieldphp-php>isBinaryphp php?php php php php php0xphp0php2php php:php php0xphp0php0php)php php|
php php php php php php php php php php php php php php php php php php php php php php php php php php0xphp0php0php;php php/php*php php0xphp0php4php php-php thirdphp bitphp,php compressedphp php(ZLIBphp)php php*php/
php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeBytephp(php$fieldBitsphp)php;
php php php php php php php php php php php php ifphp php(php$fieldphp-php>isBinaryphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeVIntphp(strlenphp(php$fieldphp-php>valuephp)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeBytesphp(php$fieldphp-php>valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_fdtFilephp-php>writeStringphp(php$fieldphp-php>getUtfphp8Valuephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_docCountphp+php+php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp documentsphp inphp thisphp segmentphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docCountphp;
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
php php php php php php*php Dumpphp Fieldphp Infophp php(php.fnmphp)php segmentphp file
php php php php php php*php/
php php php php protectedphp functionphp php_dumpFNMphp(php)
php php php php php{
php php php php php php php php php$fnmFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.fnmphp'php)php;
php php php php php php php php php$fnmFilephp-php>writeVIntphp(countphp(php$thisphp-php>php_fieldsphp)php)php;

php php php php php php php php php$nrmFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.nrmphp'php)php;
php php php php php php php php php/php/php Writephp header
php php php php php php php php php$nrmFilephp-php>writeBytesphp(php'NRMphp'php)php;
php php php php php php php php php/php/php Writephp formatphp specifier
php php php php php php php php php$nrmFilephp-php>writeBytephp(php(intphp)php0xFFphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_fieldsphp asphp php$fieldphp)php php{
php php php php php php php php php php php php php$fnmFilephp-php>writeStringphp(php$fieldphp-php>namephp)php;
php php php php php php php php php php php php php$fnmFilephp-php>writeBytephp(php(php$fieldphp-php>isIndexedphp php php php php php php php?php php0xphp0php1php php:php php0xphp0php0php)php php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$fieldphp-php>storeTermVectorphp php?php php0xphp0php2php php:php php0xphp0php0php)
php/php/php notphp supportedphp yetphp php php php php php php php php php php php php0xphp0php4php php/php*php termphp positionsphp arephp storedphp withphp thephp termphp vectorsphp php*php/php php|
php/php/php notphp supportedphp yetphp php php php php php php php php php php php php0xphp0php8php php/php*php termphp offsetsphp arephp storedphp withphp thephp termphp vectorsphp php*php/php php php php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php ifphp php(php$fieldphp-php>isIndexedphp)php php{
php php php php php php php php php php php php php php php php php/php/php prephp-php2php.php1php indexphp modephp php(notphp usedphp nowphp)
php php php php php php php php php php php php php php php php php/php/php php$normFileNamephp php=php php$thisphp-php>php_namephp php.php php'php.fphp'php php.php php$fieldphp-php>numberphp;
php php php php php php php php php php php php php php php php php/php/php php$fFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$normFileNamephp)php;
php php php php php php php php php php php php php php php php php/php/php php$fFilephp-php>writeBytesphp(php$thisphp-php>php_normsphp[php$fieldphp-php>namephp]php)php;
php php php php php php php php php php php php php php php php php/php/php php$thisphp-php>php_filesphp[php]php php=php php$normFileNamephp;

php php php php php php php php php php php php php php php php php$nrmFilephp-php>writeBytesphp(php$thisphp-php>php_normsphp[php$fieldphp-php>namephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.fnmphp'php;
php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.nrmphp'php;
php php php php php}



php php php php php/php*php*
php php php php php php*php Termphp Dictionaryphp file
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_tisFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Termphp Dictionaryphp indexphp file
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_tiiFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Frequenciesphp file
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_frqFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Positionsphp file
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Storagephp_File
php php php php php php*php/
php php php php privatephp php$php_prxFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp writtenphp terms
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_termCountphp;


php php php php php/php*php*
php php php php php php*php Lastphp savedphp term
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_prevTermphp;

php php php php php/php*php*
php php php php php php*php Lastphp savedphp termphp info
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php privatephp php$php_prevTermInfophp;

php php php php php/php*php*
php php php php php php*php Lastphp savedphp indexphp term
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_prevIndexTermphp;

php php php php php/php*php*
php php php php php php*php Lastphp savedphp indexphp termphp info
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfo
php php php php php php*php/
php php php php privatephp php$php_prevIndexTermInfophp;

php php php php php/php*php*
php php php php php php*php Lastphp termphp dictionaryphp filephp position
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_lastIndexPositionphp;

php php php php php/php*php*
php php php php php php*php Createphp dicrionaryphp,php frequencyphp andphp positionsphp filesphp andphp writephp necessaryphp headers
php php php php php php*php/
php php php php publicphp functionphp initializeDictionaryFilesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tisFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.tisphp'php)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFDphp)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeLongphp(php0php php/php*php dummyphp dataphp forphp termsphp countphp php*php/php)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeIntphp(selfphp:php:php$indexIntervalphp)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeIntphp(selfphp:php:php$skipIntervalphp)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeIntphp(selfphp:php:php$maxSkipLevelsphp)php;

php php php php php php php php php$thisphp-php>php_tiiFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.tiiphp'php)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFDphp)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeLongphp(php0php php/php*php dummyphp dataphp forphp termsphp countphp php*php/php)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeIntphp(selfphp:php:php$indexIntervalphp)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeIntphp(selfphp:php:php$skipIntervalphp)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeIntphp(selfphp:php:php$maxSkipLevelsphp)php;

php php php php php php php php php/php*php*php Dumpphp dictionaryphp headerphp php*php/
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php0php)php;php php php php php php php php php php php php php php php php php php php php php/php/php preffixphp length
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeStringphp(php'php'php)php;php php php php php php php php php php php php php php php php php php/php/php suffix
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeIntphp(php(intphp)php0xFFFFFFFFphp)php;php php php php php php php php/php/php fieldphp number
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeBytephp(php(intphp)php0xphp0Fphp)php;
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php0php)php;php php php php php php php php php php php php php php php php php php php php php/php/php DocFreq
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php0php)php;php php php php php php php php php php php php php php php php php php php php php/php/php FreqDelta
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php0php)php;php php php php php php php php php php php php php php php php php php php php php/php/php ProxDelta
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php2php4php)php;php php php php php php php php php php php php php php php php php php php php/php/php IndexDelta

php php php php php php php php php$thisphp-php>php_frqFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.frqphp'php)php;
php php php php php php php php php$thisphp-php>php_prxFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.prxphp'php)php;

php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.tisphp'php;
php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.tiiphp'php;
php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.frqphp'php;
php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.prxphp'php;

php php php php php php php php php$thisphp-php>php_prevTermphp php php php php php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_prevTermInfophp php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_prevIndexTermphp php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_prevIndexTermInfophp php=php nullphp;
php php php php php php php php php$thisphp-php>php_lastIndexPositionphp php=php php2php4php;
php php php php php php php php php$thisphp-php>php_termCountphp php php php php php php php php php=php php0php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp term
php php php php php php*
php php php php php php*php Termphp positionsphp isphp anphp arrayphp(php docIdphp php=php>php arrayphp(posphp1php,php posphp2php,php posphp3php,php php.php.php.php)php,php php.php.php.php php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termEntry
php php php php php php*php php@paramphp arrayphp php$termDocs
php php php php php php*php/
php php php php publicphp functionphp addTermphp(php$termEntryphp,php php$termDocsphp)
php php php php php{
php php php php php php php php php$freqPointerphp php=php php$thisphp-php>php_frqFilephp-php>tellphp(php)php;
php php php php php php php php php$proxPointerphp php=php php$thisphp-php>php_prxFilephp-php>tellphp(php)php;

php php php php php php php php php$prevDocphp php=php php0php;
php php php php php php php php foreachphp php(php$termDocsphp asphp php$docIdphp php=php>php php$termPositionsphp)php php{
php php php php php php php php php php php php php$docDeltaphp php=php php(php$docIdphp php-php php$prevDocphp)php*php2php;
php php php php php php php php php php php php php$prevDocphp php=php php$docIdphp;
php php php php php php php php php php php php ifphp php(countphp(php$termPositionsphp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp-php>writeVIntphp(php$docDeltaphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp-php>writeVIntphp(countphp(php$termPositionsphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_frqFilephp-php>writeVIntphp(php$docDeltaphp php+php php1php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$prevPositionphp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$termPositionsphp asphp php$positionphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_prxFilephp-php>writeVIntphp(php$positionphp php-php php$prevPositionphp)php;
php php php php php php php php php php php php php php php php php$prevPositionphp php=php php$positionphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$termDocsphp)php php>php=php selfphp:php:php$skipIntervalphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todophp Writephp Skipphp Dataphp tophp aphp freqphp filephp.
php php php php php php php php php php php php php php*php Itphp'sphp notphp usedphp nowphp,php butphp makephp indexphp morephp optimal
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$skipOffsetphp php=php php$thisphp-php>php_frqFilephp-php>tellphp(php)php php-php php$freqPointerphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$skipOffsetphp php=php php0php;
php php php php php php php php php}

php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$termEntryphp-php>textphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_fieldsphp[php$termEntryphp-php>fieldphp]php-php>numberphp)php;
php php php php php php php php php$termInfophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp(countphp(php$termDocsphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$freqPointerphp,php php$proxPointerphp,php php$skipOffsetphp)php;

php php php php php php php php php$thisphp-php>php_dumpTermDictEntryphp(php$thisphp-php>php_tisFilephp,php php$thisphp-php>php_prevTermphp,php php$termphp,php php$thisphp-php>php_prevTermInfophp,php php$termInfophp)php;

php php php php php php php php ifphp php(php(php$thisphp-php>php_termCountphp php+php php1php)php php%php selfphp:php:php$indexIntervalphp php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dumpTermDictEntryphp(php$thisphp-php>php_tiiFilephp,php php$thisphp-php>php_prevIndexTermphp,php php$termphp,php php$thisphp-php>php_prevIndexTermInfophp,php php$termInfophp)php;

php php php php php php php php php php php php php$indexPositionphp php=php php$thisphp-php>php_tisFilephp-php>tellphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeVIntphp(php$indexPositionphp php-php php$thisphp-php>php_lastIndexPositionphp)php;
php php php php php php php php php php php php php$thisphp-php>php_lastIndexPositionphp php=php php$indexPositionphp;

php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_termCountphp+php+php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp dictionary
php php php php php php*php/
php php php php publicphp functionphp closeDictionaryFilesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tisFilephp-php>seekphp(php4php)php;
php php php php php php php php php$thisphp-php>php_tisFilephp-php>writeLongphp(php$thisphp-php>php_termCountphp)php;

php php php php php php php php php$thisphp-php>php_tiiFilephp-php>seekphp(php4php)php;
php php php php php php php php php/php/php php+php php1php isphp usedphp tophp countphp anphp additionalphp specialphp indexphp entryphp php(emptyphp termphp atphp thephp startphp ofphp thephp listphp)
php php php php php php php php php$thisphp-php>php_tiiFilephp-php>writeLongphp(php(php$thisphp-php>php_termCountphp php-php php$thisphp-php>php_termCountphp php%php selfphp:php:php$indexIntervalphp)php/selfphp:php:php$indexIntervalphp php+php php1php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Dumpphp Termphp Dictionaryphp segmentphp filephp entryphp.
php php php php php php*php Usedphp tophp writephp entryphp tophp php.tisphp orphp php.tiiphp files
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Filephp php$dicFile
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$prevTerm
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp php$prevTermInfo
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp php$termInfo
php php php php php php*php/
php php php php protectedphp functionphp php_dumpTermDictEntryphp(Zendphp_Searchphp_Lucenephp_Storagephp_Filephp php$dicFilephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php&php$prevTermphp,php php php php php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php php php php php$termphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php&php$prevTermInfophp,php Zendphp_Searchphp_Lucenephp_Indexphp_TermInfophp php$termInfophp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$prevTermphp)php php&php&php php$prevTermphp-php>fieldphp php=php=php php$termphp-php>fieldphp)php php{
php php php php php php php php php php php php php$matchedBytesphp php=php php0php;
php php php php php php php php php php php php php$maxBytesphp php=php minphp(strlenphp(php$prevTermphp-php>textphp)php,php strlenphp(php$termphp-php>textphp)php)php;
php php php php php php php php php php php php whilephp php(php$matchedBytesphp <php php$maxBytesphp php php&php&
php php php php php php php php php php php php php php php php php php php php$prevTermphp-php>textphp[php$matchedBytesphp]php php=php=php php$termphp-php>textphp[php$matchedBytesphp]php)php php{
php php php php php php php php php php php php php php php php php$matchedBytesphp+php+php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Calculatephp actualphp matchedphp UTFphp-php8php pattern
php php php php php php php php php php php php php$prefixBytesphp php=php php0php;
php php php php php php php php php php php php php$prefixCharsphp php=php php0php;
php php php php php php php php php php php php whilephp php(php$prefixBytesphp <php php$matchedBytesphp)php php{
php php php php php php php php php php php php php php php php php$charBytesphp php=php php1php;
php php php php php php php php php php php php php php php php ifphp php(php(ordphp(php$termphp-php>textphp[php$prefixBytesphp]php)php php&php php0xCphp0php)php php=php=php php0xCphp0php)php php{
php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$termphp-php>textphp[php$prefixBytesphp]php)php php&php php0xphp2php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(ordphp(php$termphp-php>textphp[php$prefixBytesphp]php)php php&php php0xphp1php0php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$charBytesphp+php+php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$prefixBytesphp php+php php$charBytesphp php>php php$matchedBytesphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php charphp crossesphp matchedphp bytesphp boundary
php php php php php php php php php php php php php php php php php php php php php/php/php skipphp char
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$prefixCharsphp+php+php;
php php php php php php php php php php php php php php php php php$prefixBytesphp php+php=php php$charBytesphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Writephp preffixphp length
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$prefixCharsphp)php;
php php php php php php php php php php php php php/php/php Writephp suffix
php php php php php php php php php php php php php$dicFilephp-php>writeStringphp(substrphp(php$termphp-php>textphp,php php$prefixBytesphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Writephp preffixphp length
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php0php)php;
php php php php php php php php php php php php php/php/php Writephp suffix
php php php php php php php php php php php php php$dicFilephp-php>writeStringphp(php$termphp-php>textphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php Writephp fieldphp number
php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termphp-php>fieldphp)php;
php php php php php php php php php/php/php DocFreqphp php(thephp countphp ofphp documentsphp whichphp containphp thephp termphp)
php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>docFreqphp)php;

php php php php php php php php php$prevTermphp php=php php$termphp;

php php php php php php php php ifphp php(php!issetphp(php$prevTermInfophp)php)php php{
php php php php php php php php php php php php php/php/php Writephp FreqDelta
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>freqPointerphp)php;
php php php php php php php php php php php php php/php/php Writephp ProxDelta
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>proxPointerphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Writephp FreqDelta
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>freqPointerphp php-php php$prevTermInfophp-php>freqPointerphp)php;
php php php php php php php php php php php php php/php/php Writephp ProxDelta
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>proxPointerphp php-php php$prevTermInfophp-php>proxPointerphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php Writephp SkipOffsetphp php-php itphp'sphp notphp php0php whenphp php$termInfophp-php>docFreqphp php>php selfphp:php:php$skipInterval
php php php php php php php php ifphp php(php$termInfophp-php>skipOffsetphp php!php=php php0php)php php{
php php php php php php php php php php php php php$dicFilephp-php>writeVIntphp(php$termInfophp-php>skipOffsetphp)php;
php php php php php php php php php}

php php php php php php php php php$prevTermInfophp php=php php$termInfophp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Generatephp compoundphp indexphp file
php php php php php php*php/
php php php php protectedphp functionphp php_generateCFSphp(php)
php php php php php{
php php php php php php php php php$cfsFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.cfsphp'php)php;
php php php php php php php php php$cfsFilephp-php>writeVIntphp(countphp(php$thisphp-php>php_filesphp)php)php;

php php php php php php php php php$dataOffsetPointersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$fileNamephp)php php{
php php php php php php php php php php php php php$dataOffsetPointersphp[php$fileNamephp]php php=php php$cfsFilephp-php>tellphp(php)php;
php php php php php php php php php php php php php$cfsFilephp-php>writeLongphp(php0php)php;php php/php/php writephp dummyphp data
php php php php php php php php php php php php php$cfsFilephp-php>writeStringphp(php$fileNamephp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$fileNamephp)php php{
php php php php php php php php php php php php php/php/php Getphp actualphp dataphp offset
php php php php php php php php php php php php php$dataOffsetphp php=php php$cfsFilephp-php>tellphp(php)php;
php php php php php php php php php php php php php/php/php Seekphp tophp thephp dataphp offsetphp pointer
php php php php php php php php php php php php php$cfsFilephp-php>seekphp(php$dataOffsetPointersphp[php$fileNamephp]php)php;
php php php php php php php php php php php php php/php/php Writephp actualphp dataphp offsetphp value
php php php php php php php php php php php php php$cfsFilephp-php>writeLongphp(php$dataOffsetphp)php;
php php php php php php php php php php php php php/php/php Seekphp backphp tophp thephp endphp ofphp file
php php php php php php php php php php php php php$cfsFilephp-php>seekphp(php$dataOffsetphp)php;

php php php php php php php php php php php php php$dataFilephp php=php php$thisphp-php>php_directoryphp-php>getFileObjectphp(php$fileNamephp)php;

php php php php php php php php php php php php php$byteCountphp php=php php$thisphp-php>php_directoryphp-php>fileLengthphp(php$fileNamephp)php;
php php php php php php php php php php php php whilephp php(php$byteCountphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php php$dataFilephp-php>readBytesphp(minphp(php$byteCountphp,php php1php3php1php0php7php2php php/php*php1php2php8Kbphp*php/php)php)php;
php php php php php php php php php php php php php php php php php$byteCountphp php-php=php strlenphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php$cfsFilephp-php>writeBytesphp(php$dataphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_directoryphp-php>deleteFilephp(php$fileNamephp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Closephp segmentphp,php writephp itphp tophp diskphp andphp returnphp segmentphp info
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php/
php php php php abstractphp publicphp functionphp closephp(php)php;
php}

