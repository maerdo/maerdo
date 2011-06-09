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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Maildirphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Folderphp_Maildir
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Folderphp/Maildirphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Writablephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Writablephp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Writablephp_Maildirphp extendsphp php php php Zendphp_Mailphp_Storagephp_Folderphp_Maildir
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php implementsphp Zendphp_Mailphp_Storagephp_Writablephp_Interface
php{
php php php php php/php/php TODOphp:php initphp maildirphp php(php+php constructorphp optionphp createphp ifphp notphp foundphp)

php php php php php/php*php*
php php php php php php*php usephp quotaphp andphp sizephp ofphp quotaphp ifphp given
php php php php php php*php php@varphp boolphp|int
php php php php php php*php/
php php php php protectedphp php$php_quotaphp;

php php php php php/php*php*
php php php php php php*php createphp aphp newphp maildir
php php php php php php*
php php php php php php*php Ifphp thephp givenphp dirphp isphp alreadyphp aphp validphp maildirphp thisphp willphp notphp failphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dirphp directoryphp forphp thephp newphp maildirphp php(mayphp alreadyphp existphp)
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp initMaildirphp(php$dirphp)
php php php php php{
php php php php php php php php ifphp php(filephp_existsphp(php$dirphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_dirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'maildirphp mustphp bephp aphp directoryphp ifphp alreadyphp existsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!mkdirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$dirphp php=php dirnamephp(php$dirphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"parentphp php$dirphp notphp foundphp"php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php!isphp_dirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"parentphp php$dirphp notphp aphp directoryphp"php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp createphp maildirphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp(php'curphp'php,php php'tmpphp'php,php php'newphp'php)php asphp php$subdirphp)php php{
php php php php php php php php php php php php ifphp php(php!php@mkdirphp(php$dirphp php.php DIRECTORYphp_SEPARATORphp php.php php$subdirphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php ignorephp ifphp dirphp existsphp php(iphp.ephp.php wasphp alreadyphp validphp maildirphp orphp twophp processesphp tryphp tophp createphp onephp)
php php php php php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$dirphp php.php DIRECTORYphp_SEPARATORphp php.php php$subdirphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'couldphp notphp createphp subdirphp php'php php.php php$subdirphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp instancephp withphp parameters
php php php php php php*php Additionalphp parametersphp arephp php(seephp parentphp forphp morephp)php:
php php php php php php*php php php php-php createphp ifphp truephp aphp newphp maildirphp isphp createphp ifphp nonephp exists
php php php php php php*
php php php php php php*php php@paramphp php php$paramsphp arrayphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$paramsphp-php>createphp)php php&php&php issetphp(php$paramsphp-php>dirnamephp)php php&php&php php!filephp_existsphp(php$paramsphp-php>dirnamephp php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php)php)php php{
php php php php php php php php php php php php selfphp:php:initMaildirphp(php$paramsphp-php>dirnamephp)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp aphp newphp folder
php php php php php php*
php php php php php php*php Thisphp methodphp alsophp createsphp parentphp foldersphp ifphp necessaryphp.php Somephp mailphp storagesphp mayphp restrictphp,php whichphp folder
php php php php php php*php mayphp bephp usedphp asphp parentphp orphp whichphp charsphp mayphp bephp usedphp inphp thephp folderphp name
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php php globalphp namephp ofphp folderphp,php localphp namephp ifphp php$parentFolderphp isphp set
php php php php php php*php php@paramphp php php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$parentFolderphp parentphp folderphp forphp newphp folderphp,php elsephp rootphp folderphp isphp parent
php php php php php php*php php@returnphp php stringphp onlyphp usedphp internallyphp php(newphp createdphp maildirphp)
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createFolderphp(php$namephp,php php$parentFolderphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$parentFolderphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$folderphp php=php php$parentFolderphp-php>getGlobalNamephp(php)php php.php php$thisphp-php>php_delimphp php.php php$namephp;
php php php php php php php php php}php elsephp ifphp php(php$parentFolderphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$folderphp php=php rtrimphp(php$parentFolderphp,php php$thisphp-php>php_delimphp)php php.php php$thisphp-php>php_delimphp php.php php$namephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$folderphp php=php php$namephp;
php php php php php php php php php}

php php php php php php php php php$folderphp php=php trimphp(php$folderphp,php php$thisphp-php>php_delimphp)php;

php php php php php php php php php/php/php firstphp wephp checkphp ifphp wephp tryphp tophp createphp aphp folderphp thatphp doesphp exist
php php php php php php php php php$existsphp php=php nullphp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$existsphp php=php php$thisphp-php>getFoldersphp(php$folderphp)php;
php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php ok
php php php php php php php php php}
php php php php php php php php ifphp php(php$existsphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'folderphp alreadyphp existsphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$folderphp,php php$thisphp-php>php_delimphp php.php php$thisphp-php>php_delimphp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'invalidphp namephp php-php folderphp partsphp mayphp notphp bephp emptyphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$folderphp,php php'INBOXphp'php php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$folderphp php=php substrphp(php$folderphp,php php6php)php;
php php php php php php php php php}

php php php php php php php php php$fulldirphp php=php php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$folderphp;

php php php php php php php php php/php/php checkphp ifphp wephp gotphp trickedphp andphp wouldphp createphp aphp dirphp outsidephp ofphp thephp rootdirphp orphp notphp asphp directphp child
php php php php php php php php ifphp php(strposphp(php$folderphp,php DIRECTORYphp_SEPARATORphp)php php!php=php=php falsephp php|php|php strposphp(php$folderphp,php php'php/php'php)php php!php=php=php false
php php php php php php php php php php php php php|php|php dirnamephp(php$fulldirphp)php php.php DIRECTORYphp_SEPARATORphp php!php=php php$thisphp-php>php_rootdirphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'invalidphp namephp php-php nophp directoryphp sepratorphp allowedphp inphp folderphp namephp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php hasphp aphp parentphp folderphp?
php php php php php php php php php$parentphp php=php nullphp;
php php php php php php php php ifphp php(strposphp(php$folderphp,php php$thisphp-php>php_delimphp)php)php php{
php php php php php php php php php php php php php/php/php letphp'sphp seephp ifphp thephp parentphp folderphp exists
php php php php php php php php php php php php php$parentphp php=php substrphp(php$folderphp,php php0php,php strrposphp(php$folderphp,php php$thisphp-php>php_delimphp)php)php;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>getFoldersphp(php$parentphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php doesphp notphp php-php createphp parentphp folder
php php php php php php php php php php php php php php php php php$thisphp-php>createFolderphp(php$parentphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php@mkdirphp(php$fulldirphp)php php|php|php php!php@mkdirphp(php$fulldirphp php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'errorphp whilephp creatingphp newphp folderphp,php mayphp bephp createdphp incompletlyphp'php)php;
php php php php php php php php php}

php php php php php php php php mkdirphp(php$fulldirphp php.php DIRECTORYphp_SEPARATORphp php.php php'newphp'php)php;
php php php php php php php php mkdirphp(php$fulldirphp php.php DIRECTORYphp_SEPARATORphp php.php php'tmpphp'php)php;

php php php php php php php php php$localNamephp php=php php$parentphp php?php substrphp(php$folderphp,php strlenphp(php$parentphp)php php+php php1php)php php:php php$folderphp;
php php php php php php php php php$thisphp-php>getFoldersphp(php$parentphp)php-php>php$localNamephp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php$localNamephp,php php$folderphp,php truephp)php;

php php php php php php php php returnphp php$fulldirphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php removephp aphp folder
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$namephp php php php php php namephp orphp instancephp ofphp folder
php php php php php php*php php@returnphp php null
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeFolderphp(php$namephp)
php php php php php{
php php php php php php php php php/php/php TODOphp:php Thisphp couldphp failphp inphp thephp middlephp ofphp thephp taskphp,php whichphp isphp notphp optimalphp.
php php php php php php php php php/php/php Butphp therephp isphp nophp definedphp standardphp wayphp tophp markphp aphp folderphp asphp removedphp andphp therephp isphp nophp atomarphp fsphp-op
php php php php php php php php php/php/php tophp removephp aphp directoryphp.php Alsophp movingphp thephp folderphp tophp aphp/thephp trashphp folderphp isphp notphp possiblephp,php as
php php php php php php php php php/php/php allphp parentphp foldersphp mustphp bephp createdphp.php Whatphp wephp couldphp dophp isphp addphp aphp dashphp tophp thephp frontphp ofphp the
php php php php php php php php php/php/php directoryphp namephp andphp itphp shouldphp bephp ignoredphp asphp longphp asphp otherphp processesphp obeyphp thephp standardphp.

php php php php php php php php ifphp php(php$namephp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$namephp php=php php$namephp-php>getGlobalNamephp(php)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php trimphp(php$namephp,php php$thisphp-php>php_delimphp)php;
php php php php php php php php ifphp php(strposphp(php$namephp,php php'INBOXphp'php php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$namephp php=php substrphp(php$namephp,php php6php)php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp ifphp folderphp existsphp andphp hasphp nophp children
php php php php php php php php ifphp php(php!php$thisphp-php>getFoldersphp(php$namephp)php-php>isLeafphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'deletephp childrenphp firstphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$namephp php=php=php php'INBOXphp'php php|php|php php$namephp php=php=php DIRECTORYphp_SEPARATORphp php|php|php php$namephp php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'wontphp deletephp INBOXphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$namephp php=php=php php$thisphp-php>getCurrentFolderphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'wontphp deletephp selectedphp folderphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp(php'tmpphp'php,php php'newphp'php,php php'curphp'php,php php'php.php'php)php asphp php$subdirphp)php php{
php php php php php php php php php php php php php$dirphp php=php php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$namephp php.php DIRECTORYphp_SEPARATORphp php.php php$subdirphp;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dhphp php=php opendirphp(php$dirphp)php;
php php php php php php php php php php php php ifphp php(php!php$dhphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"errorphp openingphp php$subdirphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php whilephp php(php(php$entryphp php=php readdirphp(php$dhphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$entryphp php=php=php php'php.php'php php|php|php php$entryphp php=php=php php'php.php.php'php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!unlinkphp(php$dirphp php.php DIRECTORYphp_SEPARATORphp php.php php$entryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"errorphp cleaningphp php$subdirphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php closedirphp(php$dhphp)php;
php php php php php php php php php php php php ifphp php(php$subdirphp php!php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!rmdirphp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"errorphp removingphp php$subdirphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!rmdirphp(php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$namephp)php)php php{
php php php php php php php php php php php php php/php/php atphp leastphp wephp shouldphp tryphp tophp makephp itphp aphp validphp maildirphp again
php php php php php php php php php php php php mkdirphp(php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$namephp php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"errorphp removingphp maindirphp"php)php;
php php php php php php php php php}

php php php php php php php php php$parentphp php=php strposphp(php$namephp,php php$thisphp-php>php_delimphp)php php?php substrphp(php$namephp,php php0php,php strrposphp(php$namephp,php php$thisphp-php>php_delimphp)php)php php:php nullphp;
php php php php php php php php php$localNamephp php=php php$parentphp php?php substrphp(php$namephp,php strlenphp(php$parentphp)php php+php php1php)php php:php php$namephp;
php php php php php php php php unsetphp(php$thisphp-php>getFoldersphp(php$parentphp)php-php>php$localNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php renamephp andphp/orphp movephp folder
php php php php php php*
php php php php php php*php Thephp newphp namephp hasphp thephp samephp restrictionsphp asphp inphp createFolderphp(php)
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$oldNamephp namephp orphp instancephp ofphp folder
php php php php php php*php php@paramphp php php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp newphp globalphp namephp ofphp folder
php php php php php php*php php@returnphp php null
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp renameFolderphp(php$oldNamephp,php php$newNamephp)
php php php php php{
php php php php php php php php php/php/php TODOphp:php Thisphp isphp alsophp notphp atomarphp andphp hasphp similarphp problemsphp asphp removeFolderphp(php)

php php php php php php php php ifphp php(php$oldNamephp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$oldNamephp php=php php$oldNamephp-php>getGlobalNamephp(php)php;
php php php php php php php php php}

php php php php php php php php php$oldNamephp php=php trimphp(php$oldNamephp,php php$thisphp-php>php_delimphp)php;
php php php php php php php php ifphp php(strposphp(php$oldNamephp,php php'INBOXphp'php php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$oldNamephp php=php substrphp(php$oldNamephp,php php6php)php;
php php php php php php php php php}

php php php php php php php php php$newNamephp php=php trimphp(php$newNamephp,php php$thisphp-php>php_delimphp)php;
php php php php php php php php ifphp php(strposphp(php$newNamephp,php php'INBOXphp'php php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$newNamephp php=php substrphp(php$newNamephp,php php6php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$newNamephp,php php$oldNamephp php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'newphp folderphp cannotphp bephp aphp childphp ofphp oldphp folderphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp ifphp folderphp existsphp andphp hasphp nophp children
php php php php php php php php php$folderphp php=php php$thisphp-php>getFoldersphp(php$oldNamephp)php;

php php php php php php php php ifphp php(php$oldNamephp php=php=php php'INBOXphp'php php|php|php php$oldNamephp php=php=php DIRECTORYphp_SEPARATORphp php|php|php php$oldNamephp php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'wontphp renamephp INBOXphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$oldNamephp php=php=php php$thisphp-php>getCurrentFolderphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'wontphp renamephp selectedphp folderphp'php)php;
php php php php php php php php php}

php php php php php php php php php$newdirphp php=php php$thisphp-php>createFolderphp(php$newNamephp)php;

php php php php php php php php ifphp php(php!php$folderphp-php>isLeafphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$folderphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>renameFolderphp(php$vphp-php>getGlobalNamephp(php)php,php php$newNamephp php.php php$thisphp-php>php_delimphp php.php php$kphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$olddirphp php=php php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$folderphp;
php php php php php php php php foreachphp php(arrayphp(php'tmpphp'php,php php'newphp'php,php php'curphp'php)php asphp php$subdirphp)php php{
php php php php php php php php php php php php php$subdirphp php=php DIRECTORYphp_SEPARATORphp php.php php$subdirphp;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$olddirphp php.php php$subdirphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php usingphp copyphp orphp movingphp filesphp wouldphp bephp evenphp betterphp php-php butphp alsophp muchphp slower
php php php php php php php php php php php php ifphp php(php!renamephp(php$olddirphp php.php php$subdirphp,php php$newdirphp php.php php$subdirphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'errorphp whilephp movingphp php'php php.php php$subdirphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php/php createphp aphp dummyphp ifphp removingphp failsphp php-php otherwisephp wephp canphp'tphp readphp itphp nextphp time
php php php php php php php php mkdirphp(php$olddirphp php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php)php;
php php php php php php php php php$thisphp-php>removeFolderphp(php$oldNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp aphp uniqueidphp forphp maildirphp filename
php php php php php php*
php php php php php php*php Thisphp isphp nearlyphp thephp formatphp definedphp inphp thephp maildirphp standardphp.php Thephp microtimephp(php)php callphp shouldphp already
php php php php php php*php createphp aphp uniqueidphp,php thephp pidphp isphp forphp multicorephp/php-cpuphp machinephp thatphp managephp tophp callphp thisphp functionphp atphp the
php php php php php php*php exactphp samephp timephp,php andphp unamephp(php)php givesphp usphp thephp hostnamephp forphp multiplephp machinesphp accessingphp thephp samephp storagephp.
php php php php php php*
php php php php php php*php Ifphp someonephp disablesphp posixphp wephp createphp aphp randomphp numberphp ofphp thephp samephp sizephp,php sophp thisphp methodphp shouldphp also
php php php php php php*php workphp onphp Windowsphp php-php ifphp youphp managephp tophp getphp maildirphp workingphp onphp Windowsphp.
php php php php php php*php Microtimephp couldphp alsophp bephp disabledphp,php altoughphp Iphp'vephp neverphp seenphp itphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp newphp uniqueid
php php php php php php*php/
php php php php protectedphp functionphp php_createUniqueIdphp(php)
php php php php php{
php php php php php php php php php$idphp php=php php'php'php;
php php php php php php php php php$idphp php.php=php functionphp_existsphp(php'microtimephp'php)php php?php microtimephp(truephp)php php:php php(timephp(php)php php.php php'php php'php php.php randphp(php0php,php php1php0php0php0php0php0php)php)php;
php php php php php php php php php$idphp php.php=php php'php.php'php php.php php(functionphp_existsphp(php'posixphp_getpidphp'php)php php?php posixphp_getpidphp(php)php php:php randphp(php5php0php,php php6php5php5php3php5php)php)php;
php php php php php php php php php$idphp php.php=php php'php.php'php php.php phpphp_unamephp(php'nphp'php)php;

php php php php php php php php returnphp php$idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php openphp aphp temporaryphp maildirphp file
php php php php php php*
php php php php php php*php makesphp surephp tmpphp/php existsphp andphp createphp aphp filephp withphp aphp uniquephp name
php php php php php php*php youphp shouldphp closephp thephp returnedphp filehandlephp!
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$folderphp namephp ofphp currentphp folderphp withoutphp leadingphp php.
php php php php php php*php php@returnphp php arrayphp arrayphp(php'dirnamephp'php php=php>php dirphp ofphp maildirphp folderphp,php php'uniqphp'php php=php>php uniquephp idphp,php php'filenamephp'php php=php>php namephp ofphp createphp file
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php'handlephp'php php php=php>php filephp openedphp forphp writingphp)
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_createTmpFilephp(php$folderphp php=php php'INBOXphp'php)
php php php php php{
php php php php php php php php ifphp php(php$folderphp php=php=php php'INBOXphp'php)php php{
php php php php php php php php php php php php php$tmpdirphp php=php php$thisphp-php>php_rootdirphp php.php DIRECTORYphp_SEPARATORphp php.php php'tmpphp'php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tmpdirphp php=php php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$folderphp php.php DIRECTORYphp_SEPARATORphp php.php php'tmpphp'php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!filephp_existsphp(php$tmpdirphp)php)php php{
php php php php php php php php php php php php ifphp php(php!mkdirphp(php$tmpdirphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'problemsphp creatingphp tmpphp dirphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php wephp shouldphp retryphp tophp createphp aphp uniquephp idphp ifphp aphp filephp withphp thephp samephp namephp exists
php php php php php php php php php/php/php tophp avoidphp aphp scriptphp timeoutphp wephp onlyphp waitphp php1php secondphp php(insteadphp ofphp php2php)php andphp stop
php php php php php php php php php/php/php afterphp aphp definedphp retryphp count
php php php php php php php php php/php/php ifphp youphp changephp thisphp variablephp takephp intophp accountphp thatphp itphp canphp takephp upphp tophp php$maxphp_triesphp seconds
php php php php php php php php php/php/php normallyphp wephp shouldphp havephp aphp validphp uniquephp namephp afterphp thephp firstphp tryphp,php wephp'rephp justphp followingphp thephp php"standardphp"php here
php php php php php php php php php$maxphp_triesphp php=php php5php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$maxphp_triesphp;php php+php+php$iphp)php php{
php php php php php php php php php php php php php$uniqphp php=php php$thisphp-php>php_createUniqueIdphp(php)php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$tmpdirphp php.php php$uniqphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php herephp isphp thephp racephp conditionphp!php php-php asphp definedphp inphp thephp standard
php php php php php php php php php php php php php php php php php/php/php tophp avoidphp havingphp aphp longphp timephp betweenphp statphp(php)ingphp thephp filephp andphp creatingphp itphp wephp'rephp openingphp itphp here
php php php php php php php php php php php php php php php php php/php/php tophp markphp thephp filenamephp asphp taken
php php php php php php php php php php php php php php php php php$fhphp php=php fopenphp(php$tmpdirphp php.php php$uniqphp,php php'wphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$fhphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'couldphp notphp openphp tempphp filephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php sleepphp(php1php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$fhphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"triedphp php$maxphp_triesphp uniquephp idsphp forphp aphp tempphp filephp,php butphp allphp werephp takenphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php php-php givingphp upphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php'dirnamephp'php php=php>php php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$folderphp,php php'uniqphp'php php=php>php php$uniqphp,php php'filenamephp'php php=php>php php$tmpdirphp php.php php$uniqphp,
php php php php php php php php php php php php php php php php php php php php php php'handlephp'php php=php>php php$fhphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp anphp infophp stringphp forphp filenamesphp withphp givenphp flags
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$flagsphp wantedphp flagsphp,php withphp thephp referencephp youphp'llphp getphp thephp setphp flagsphp withphp correctphp keyphp php(php=php charphp forphp flagphp)
php php php php php php*php php@returnphp php stringphp infophp stringphp forphp versionphp php2php filenamesphp includingphp thephp leadingphp colon
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_getInfoStringphp(php&php$flagsphp)
php php php php php{
php php php php php php php php php/php/php accessingphp keysphp isphp easierphp,php fasterphp andphp itphp removesphp duplicatedphp flags
php php php php php php php php php$wantedphp_flagsphp php=php arrayphp_flipphp(php$flagsphp)php;
php php php php php php php php ifphp php(issetphp(php$wantedphp_flagsphp[Zendphp_Mailphp_Storagephp:php:FLAGphp_RECENTphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'recentphp flagphp mayphp notphp bephp setphp'php)php;
php php php php php php php php php}

php php php php php php php php php$infophp php=php php'php:php2php,php'php;
php php php php php php php php php$flagsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(Zendphp_Mailphp_Storagephp_Maildirphp:php:php$php_knownFlagsphp asphp php$charphp php=php>php php$flagphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$wantedphp_flagsphp[php$flagphp]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$infophp php.php=php php$charphp;
php php php php php php php php php php php php php$flagsphp[php$charphp]php php=php php$flagphp;
php php php php php php php php php php php php unsetphp(php$wantedphp_flagsphp[php$flagphp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$wantedphp_flagsphp)php)php php{
php php php php php php php php php php php php php$wantedphp_flagsphp php=php implodephp(php'php,php php'php,php arrayphp_keysphp(php$wantedphp_flagsphp)php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'unknownphp flagphp(sphp)php:php php'php php.php php$wantedphp_flagsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$infophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php appendphp aphp newphp messagephp tophp mailphp storage
php php php php php php*
php php php php php php*php php@paramphp php php stringphp|streamphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagephp messagephp asphp stringphp orphp streamphp resource
php php php php php php*php php@paramphp php php nullphp|stringphp|Zendphp_Mailphp_Storagephp_Folderphp php php php php php php php$folderphp php folderphp forphp newphp messagephp,php elsephp currentphp folderphp isphp taken
php php php php php php*php php@paramphp php php nullphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$flagsphp php php setphp flagsphp forphp newphp messagephp,php elsephp aphp defaultphp setphp isphp used
php php php php php php*php php@paramphp php php boolphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$recentphp php handlephp thisphp mailphp asphp ifphp recentphp flagphp hasphp beenphp setphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php shouldphp onlyphp bephp usedphp inphp delivery
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php php php/php/php notphp yetphp php*php php@paramphp stringphp|Zendphp_Mailphp_Messagephp|Zendphp_Mimephp_Messagephp php$messagephp messagephp asphp stringphp orphp instancephp ofphp messagephp class

php php php php publicphp functionphp appendMessagephp(php$messagephp,php php$folderphp php=php nullphp,php php$flagsphp php=php nullphp,php php$recentphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp php&php&php php$thisphp-php>checkQuotaphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'storagephp isphp overphp quotaphp!php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$folderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$folderphp php=php php$thisphp-php>php_currentFolderphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$folderphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php)php php{
php php php php php php php php php php php php php$folderphp php=php php$thisphp-php>getFoldersphp(php$folderphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$flagsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$flagsphp php=php arrayphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_SEENphp)php;
php php php php php php php php php}
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfoStringphp(php$flagsphp)php;
php php php php php php php php php$tempphp_filephp php=php php$thisphp-php>php_createTmpFilephp(php$folderphp-php>getGlobalNamephp(php)php)php;

php php php php php php php php php/php/php TODOphp:php handlephp classphp instancesphp forphp php$message
php php php php php php php php ifphp php(isphp_resourcephp(php$messagephp)php php&php&php getphp_resourcephp_typephp(php$messagephp)php php=php=php php'streamphp'php)php php{
php php php php php php php php php php php php streamphp_copyphp_tophp_streamphp(php$messagephp,php php$tempphp_filephp[php'handlephp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php fputsphp(php$tempphp_filephp[php'handlephp'php]php,php php$messagephp)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$tempphp_filephp[php'handlephp'php]php)php;

php php php php php php php php php/php/php wephp'rephp addingphp thephp sizephp tophp thephp filenamephp forphp maildirphp+php+
php php php php php php php php php$sizephp php=php filesizephp(php$tempphp_filephp[php'filenamephp'php]php)php;
php php php php php php php php ifphp php(php$sizephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$infophp php=php php'php,Sphp=php'php php.php php$sizephp php.php php$infophp;
php php php php php php php php php}
php php php php php php php php php$newphp_filenamephp php=php php$tempphp_filephp[php'dirnamephp'php]php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php$newphp_filenamephp php.php=php php$recentphp php?php php'newphp'php php:php php'curphp'php;
php php php php php php php php php$newphp_filenamephp php.php=php DIRECTORYphp_SEPARATORphp php.php php$tempphp_filephp[php'uniqphp'php]php php.php php$infophp;

php php php php php php php php php/php/php wephp'rephp throwingphp anyphp exceptionphp afterphp removingphp ourphp tempphp filephp andphp savingphp itphp tophp thisphp variablephp instead
php php php php php php php php php$exceptionphp php=php nullphp;

php php php php php php php php ifphp php(php!linkphp(php$tempphp_filephp[php'filenamephp'php]php,php php$newphp_filenamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp linkphp messagephp filephp tophp finalphp dirphp'php)php;
php php php php php php php php php}
php php php php php php php php php@unlinkphp(php$tempphp_filephp[php'filenamephp'php]php)php;

php php php php php php php php ifphp php(php$exceptionphp)php php{
php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php arrayphp(php'uniqphp'php php php php php php=php>php php$tempphp_filephp[php'uniqphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php php php php=php>php php$flagsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'filenamephp'php php=php>php php$newphp_filenamephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addQuotaEntryphp(php(intphp)php$sizephp,php php1php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php copyphp anphp existingphp message
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp php null
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp copyMessagephp(php$idphp,php php$folderphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp php&php&php php$thisphp-php>checkQuotaphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'storagephp isphp overphp quotaphp!php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$folderphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php)php php{
php php php php php php php php php php php php php$folderphp php=php php$thisphp-php>getFoldersphp(php$folderphp)php;
php php php php php php php php php}

php php php php php php php php php$filedataphp php=php php$thisphp-php>php_getFileDataphp(php$idphp)php;
php php php php php php php php php$oldphp_filephp php=php php$filedataphp[php'filenamephp'php]php;
php php php php php php php php php$flagsphp php=php php$filedataphp[php'flagsphp'php]php;

php php php php php php php php php/php/php copiedphp messagephp canphp'tphp bephp recent
php php php php php php php php whilephp php(php(php$keyphp php=php arrayphp_searchphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_RECENTphp,php php$flagsphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php unsetphp(php$flagsphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfoStringphp(php$flagsphp)php;

php php php php php php php php php/php/php wephp'rephp creatingphp thephp copyphp asphp tempphp filephp beforephp movingphp tophp curphp/
php php php php php php php php php$tempphp_filephp php=php php$thisphp-php>php_createTmpFilephp(php$folderphp-php>getGlobalNamephp(php)php)php;
php php php php php php php php php/php/php wephp donphp'tphp writephp directlyphp tophp thephp file
php php php php php php php php fclosephp(php$tempphp_filephp[php'handlephp'php]php)php;

php php php php php php php php php/php/php wephp'rephp addingphp thephp sizephp tophp thephp filenamephp forphp maildirphp+php+
php php php php php php php php php$sizephp php=php filesizephp(php$oldphp_filephp)php;
php php php php php php php php ifphp php(php$sizephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$infophp php=php php'php,Sphp=php'php php.php php$sizephp php.php php$infophp;
php php php php php php php php php}

php php php php php php php php php$newphp_filephp php=php php$tempphp_filephp[php'dirnamephp'php]php php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php php.php DIRECTORYphp_SEPARATORphp php.php php$tempphp_filephp[php'uniqphp'php]php php.php php$infophp;

php php php php php php php php php/php/php wephp'rephp throwingphp anyphp exceptionphp afterphp removingphp ourphp tempphp filephp andphp savingphp itphp tophp thisphp variablephp instead
php php php php php php php php php$exceptionphp php=php nullphp;

php php php php php php php php ifphp php(php!copyphp(php$oldphp_filephp,php php$tempphp_filephp[php'filenamephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp copyphp messagephp filephp'php)php;
php php php php php php php php php}php elsephp ifphp php(php!linkphp(php$tempphp_filephp[php'filenamephp'php]php,php php$newphp_filephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp linkphp messagephp filephp tophp finalphp dirphp'php)php;
php php php php php php php php php}
php php php php php php php php php@unlinkphp(php$tempphp_filephp[php'filenamephp'php]php)php;

php php php php php php php php ifphp php(php$exceptionphp)php php{
php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$folderphp-php>getGlobalNamephp(php)php php=php=php php$thisphp-php>php_currentFolder
php php php php php php php php php php php php php|php|php php(php$thisphp-php>php_currentFolderphp php=php=php php'INBOXphp'php php&php&php php$folderphp-php>getGlobalNamephp(php)php php=php=php php'php/php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php arrayphp(php'uniqphp'php php php php php php=php>php php$tempphp_filephp[php'uniqphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php php php php=php>php php$flagsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'filenamephp'php php=php>php php$newphp_filephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addQuotaEntryphp(php(intphp)php$sizephp,php php1php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php movephp anphp existingphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveMessagephp(php$idphp,php php$folderphp)php php{
php php php php php php php php ifphp php(php!php(php$folderphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php)php php{
php php php php php php php php php php php php php$folderphp php=php php$thisphp-php>getFoldersphp(php$folderphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$folderphp-php>getGlobalNamephp(php)php php=php=php php$thisphp-php>php_currentFolder
php php php php php php php php php php php php php|php|php php(php$thisphp-php>php_currentFolderphp php=php=php php'INBOXphp'php php&php&php php$folderphp-php>getGlobalNamephp(php)php php=php=php php'php/php'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'targetphp isphp currentphp folderphp'php)php;
php php php php php php php php php}

php php php php php php php php php$filedataphp php=php php$thisphp-php>php_getFileDataphp(php$idphp)php;
php php php php php php php php php$oldphp_filephp php=php php$filedataphp[php'filenamephp'php]php;
php php php php php php php php php$flagsphp php=php php$filedataphp[php'flagsphp'php]php;

php php php php php php php php php/php/php movedphp messagephp canphp'tphp bephp recent
php php php php php php php php whilephp php(php(php$keyphp php=php arrayphp_searchphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_RECENTphp,php php$flagsphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php unsetphp(php$flagsphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfoStringphp(php$flagsphp)php;

php php php php php php php php php/php/php reservingphp aphp newphp name
php php php php php php php php php$tempphp_filephp php=php php$thisphp-php>php_createTmpFilephp(php$folderphp-php>getGlobalNamephp(php)php)php;
php php php php php php php php fclosephp(php$tempphp_filephp[php'handlephp'php]php)php;

php php php php php php php php php/php/php wephp'rephp addingphp thephp sizephp tophp thephp filenamephp forphp maildirphp+php+
php php php php php php php php php$sizephp php=php filesizephp(php$oldphp_filephp)php;
php php php php php php php php ifphp php(php$sizephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$infophp php=php php'php,Sphp=php'php php.php php$sizephp php.php php$infophp;
php php php php php php php php php}

php php php php php php php php php$newphp_filephp php=php php$tempphp_filephp[php'dirnamephp'php]php php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php php.php DIRECTORYphp_SEPARATORphp php.php php$tempphp_filephp[php'uniqphp'php]php php.php php$infophp;

php php php php php php php php php/php/php wephp'rephp throwingphp anyphp exceptionphp afterphp removingphp ourphp tempphp filephp andphp savingphp itphp tophp thisphp variablephp instead
php php php php php php php php php$exceptionphp php=php nullphp;

php php php php php php php php ifphp php(php!renamephp(php$oldphp_filephp,php php$newphp_filephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp movephp messagephp filephp'php)php;
php php php php php php php php php}
php php php php php php php php php@unlinkphp(php$tempphp_filephp[php'filenamephp'php]php)php;

php php php php php php php php ifphp php(php$exceptionphp)php php{
php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_filesphp[php$idphp php-php php1php]php)php;
php php php php php php php php php/php/php removephp thephp gap
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp_valuesphp(php$thisphp-php>php_filesphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php setphp flagsphp forphp message
php php php php php php*
php php php php php php*php NOTEphp:php thisphp methodphp canphp'tphp setphp thephp recentphp flagphp.
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php$idphp php php php numberphp ofphp message
php php php php php php*php php@paramphp php php arrayphp php$flagsphp newphp flagsphp forphp message
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFlagsphp(php$idphp,php php$flagsphp)
php php php php php{
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfoStringphp(php$flagsphp)php;
php php php php php php php php php$filedataphp php=php php$thisphp-php>php_getFileDataphp(php$idphp)php;

php php php php php php php php php/php/php NOTEphp:php doublephp dirnamephp tophp makephp surephp wephp alwaysphp movephp tophp curphp.php ifphp recentphp flagphp hasphp beenphp setphp php(messagephp isphp inphp newphp)php itphp willphp bephp movedphp tophp curphp.
php php php php php php php php php$newphp_filenamephp php=php dirnamephp(dirnamephp(php$filedataphp[php'filenamephp'php]php)php)php php.php DIRECTORYphp_SEPARATORphp php.php php'curphp'php php.php DIRECTORYphp_SEPARATORphp php.php php"php$filedataphp[uniqphp]php$infophp"php;

php php php php php php php php ifphp php(php!php@renamephp(php$filedataphp[php'filenamephp'php]php,php php$newphp_filenamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp renamephp filephp'php)php;
php php php php php php php php php}

php php php php php php php php php$filedataphp[php'flagsphp'php]php php php php php=php php$flagsphp;
php php php php php php php php php$filedataphp[php'filenamephp'php]php php=php php$newphp_filenamephp;

php php php php php php php php php$thisphp-php>php_filesphp[php$idphp php-php php1php]php php=php php$filedataphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php stubphp forphp notphp supportedphp messagephp deletion
php php php php php php*
php php php php php php*php php@returnphp php null
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeMessagephp(php$idphp)
php php php php php{
php php php php php php php php php$filenamephp php=php php$thisphp-php>php_getFileDataphp(php$idphp,php php'filenamephp'php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp)php php{
php php php php php php php php php php php php php$sizephp php=php filesizephp(php$filenamephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php@unlinkphp(php$filenamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp removephp messagephp'php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$thisphp-php>php_filesphp[php$idphp php-php php1php]php)php;
php php php php php php php php php/php/php removephp thephp gap
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp_valuesphp(php$thisphp-php>php_filesphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_quotaphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addQuotaEntryphp(php0php php-php php(intphp)php$sizephp,php php-php1php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php enablephp/disablephp quotaphp andphp setphp aphp quotaphp valuephp ifphp wantedphp orphp needed
php php php php php php*
php php php php php php*php Youphp canphp enablephp/disablephp quotaphp withphp truephp/falsephp.php Ifphp youphp donphp'tphp have
php php php php php php*php aphp MDAphp orphp wantphp tophp enforcephp aphp quotaphp valuephp youphp canphp alsophp setphp thisphp value
php php php php php php*php herephp.php Usephp arrayphp(php'sizephp'php php=php>php SIZEphp_QUOTAphp,php php'countphp'php php=php>php MAXphp_MESSAGEphp)php do
php php php php php php*php definephp yourphp quotaphp.php Orderphp ofphp thesephp fieldsphp doesphp matterphp!
php php php php php php*
php php php php php php*php php@paramphp boolphp|arrayphp php$valuephp newphp quotaphp value
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp setQuotaphp(php$valuephp)php php{
php php php php php php php php php$thisphp-php>php_quotaphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp currentlyphp setphp quota
php php php php php php*
php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Writablephp_Maildirphp:php:setQuotaphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp|array
php php php php php php*php/
php php php php publicphp functionphp getQuotaphp(php$fromStoragephp php=php falsephp)php php{
php php php php php php php php ifphp php(php$fromStoragephp)php php{
php php php php php php php php php php php php php$fhphp php=php php@fopenphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$fhphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp openphp maildirsizephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$definitionphp php=php fgetsphp(php$fhphp)php;
php php php php php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php php php php php php$definitionphp php=php explodephp(php'php,php'php,php trimphp(php$definitionphp)php)php;
php php php php php php php php php php php php php$quotaphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$definitionphp asphp php$memberphp)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php php$memberphp[strlenphp(php$memberphp)php php-php php1php]php;
php php php php php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'Sphp'php php|php|php php$keyphp php=php=php php'Cphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php$keyphp php=php=php php'Cphp'php php?php php'countphp'php php:php php'sizephp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$quotaphp[php$keyphp]php php=php substrphp(php$memberphp,php php0php,php php-php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$quotaphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_quotaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@seephp httpphp:php/php/wwwphp.interphp7php.comphp/courierimapphp/READMEphp.maildirquotaphp.htmlphp php"Calculatingphp maildirsizephp"
php php php php php php*php/
php php php php protectedphp functionphp php_calculateMaildirsizephp(php)php php{
php php php php php php php php php$timestampsphp php=php arrayphp(php)php;
php php php php php php php php php$messagesphp php=php php0php;
php php php php php php php php php$totalphp_sizephp php=php php0php;

php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_quotaphp)php)php php{
php php php php php php php php php php php php php$quotaphp php=php php$thisphp-php>php_quotaphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$quotaphp php=php php$thisphp-php>getQuotaphp(truephp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Mailphp_Storagephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'nophp quotaphp definitionphp foundphp'php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$foldersphp php=php newphp RecursiveIteratorIteratorphp(php$thisphp-php>getFoldersphp(php)php,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php foreachphp php(php$foldersphp asphp php$folderphp)php php{
php php php php php php php php php php php php php$subdirphp php=php php$folderphp-php>getGlobalNamephp(php)php;
php php php php php php php php php php php php ifphp php(php$subdirphp php=php=php php'INBOXphp'php)php php{
php php php php php php php php php php php php php php php php php$subdirphp php=php php'php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$subdirphp php=php php'php.php'php php.php php$subdirphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$subdirphp php=php=php php'Trashphp'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(arrayphp(php'curphp'php,php php'newphp'php)php asphp php$subsubdirphp)php php{
php php php php php php php php php php php php php php php php php$dirnamephp php=php php$thisphp-php>php_rootdirphp php.php php$subdirphp php.php DIRECTORYphp_SEPARATORphp php.php php$subsubdirphp php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$dirnamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php NOTEphp:php wephp arephp usingphp mtimephp insteadphp ofphp php"thephp latestphp timestampphp"php.php Thephp latestphp wouldphp bephp atime
php php php php php php php php php php php php php php php php php/php/php andphp asphp wephp arephp accessingphp thephp directoryphp itphp wouldphp makephp thephp wholephp calculationphp uselessphp.
php php php php php php php php php php php php php php php php php$timestampsphp[php$dirnamephp]php php=php filemtimephp(php$dirnamephp)php;

php php php php php php php php php php php php php php php php php$dhphp php=php opendirphp(php$dirnamephp)php;
php php php php php php php php php php php php php php php php php/php/php NOTEphp:php Shouldphp havephp beenphp checkedphp inphp constructorphp.php Notphp throwingphp anphp exceptionphp herephp,php quotasphp will
php php php php php php php php php php php php php php php php php/php/php thereforephp notphp bephp fullyphp enforecedphp,php butphp nextphp requestphp willphp failphp anywayphp,php ifphp problemphp persistsphp.
php php php php php php php php php php php php php php php php ifphp php(php!php$dhphp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}


php php php php php php php php php php php php php php php php whilephp php(php(php$entryphp php=php readdirphp(php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$entryphp[php0php]php php=php=php php'php.php'php php|php|php php!isphp_filephp(php$dirnamephp php.php php$entryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$entryphp,php php'php,Sphp=php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php strtokphp(php$entryphp,php php'php=php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$filesizephp php=php strtokphp(php'php:php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$filesizephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$totalphp_sizephp php+php=php php$filesizephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php+php+php$messagesphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$sizephp php=php filesizephp(php$dirnamephp php.php php$entryphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$sizephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ignorephp,php asphp wephp assumephp filephp gotphp removed
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$totalphp_sizephp php+php=php php$sizephp;
php php php php php php php php php php php php php php php php php php php php php+php+php$messagesphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$tmpphp php=php php$thisphp-php>php_createTmpFilephp(php)php;
php php php php php php php php php$fhphp php=php php$tmpphp[php'handlephp'php]php;
php php php php php php php php php$definitionphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$quotaphp asphp php$typephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'sizephp'php php|php|php php$typephp php=php=php php'countphp'php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$typephp php=php=php php'countphp'php php?php php'Cphp'php php:php php'Sphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$definitionphp[php]php php=php php$valuephp php.php php$typephp;
php php php php php php php php php}
php php php php php php php php php$definitionphp php=php implodephp(php'php,php'php,php php$definitionphp)php;
php php php php php php php php fputsphp(php$fhphp,php php"php$definitionphp\nphp"php)php;
php php php php php php php php fputsphp(php$fhphp,php php"php$totalphp_sizephp php$messagesphp\nphp"php)php;
php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php renamephp(php$tmpphp[php'filenamephp'php]php,php php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php;
php php php php php php php php foreachphp php(php$timestampsphp asphp php$dirphp php=php>php php$timestampphp)php php{
php php php php php php php php php php php php ifphp php(php$timestampphp <php filemtimephp(php$dirphp)php)php php{
php php php php php php php php php php php php php php php php unlinkphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php'sizephp'php php=php>php php$totalphp_sizephp,php php'countphp'php php=php>php php$messagesphp,php php'quotaphp'php php=php>php php$quotaphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@seephp httpphp:php/php/wwwphp.interphp7php.comphp/courierimapphp/READMEphp.maildirquotaphp.htmlphp php"Calculatingphp thephp quotaphp forphp aphp Maildirphp+php+php"
php php php php php php*php/
php php php php protectedphp functionphp php_calculateQuotaphp(php$forceRecalcphp php=php falsephp)php php{
php php php php php php php php php$fhphp php=php nullphp;
php php php php php php php php php$totalphp_sizephp php=php php0php;
php php php php php php php php php$messagesphp php php php=php php0php;
php php php php php php php php php$maildirsizephp php=php php'php'php;
php php php php php php php php ifphp php(php!php$forceRecalcphp php&php&php filephp_existsphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php php&php&php filesizephp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php <php php5php1php2php0php)php php{
php php php php php php php php php php php php php$fhphp php=php fopenphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php,php php'rphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$fhphp)php php{
php php php php php php php php php php php php php$maildirsizephp php=php freadphp(php$fhphp,php php5php1php2php0php)php;
php php php php php php php php php php php php ifphp php(strlenphp(php$maildirsizephp)php php>php=php php5php1php2php0php)php php{
php php php php php php php php php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php php php php php php php php php php$fhphp php=php nullphp;
php php php php php php php php php php php php php php php php php$maildirsizephp php=php php'php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$fhphp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_calculateMaildirsizephp(php)php;
php php php php php php php php php php php php php$totalphp_sizephp php=php php$resultphp[php'sizephp'php]php;
php php php php php php php php php php php php php$messagesphp php php php=php php$resultphp[php'countphp'php]php;
php php php php php php php php php php php php php$quotaphp php php php php php php=php php$resultphp[php'quotaphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$maildirsizephp php=php explodephp(php"php\nphp"php,php php$maildirsizephp)php;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_quotaphp)php)php php{
php php php php php php php php php php php php php php php php php$quotaphp php=php php$thisphp-php>php_quotaphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$definitionphp php=php explodephp(php'php,php'php,php php$maildirsizephp[php0php]php)php;
php php php php php php php php php php php php php php php php php$quotaphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$definitionphp asphp php$memberphp)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php$memberphp[strlenphp(php$memberphp)php php-php php1php]php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'Sphp'php php|php|php php$keyphp php=php=php php'Cphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php$keyphp php=php=php php'Cphp'php php?php php'countphp'php php:php php'sizephp'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$quotaphp[php$keyphp]php php=php substrphp(php$memberphp,php php0php,php php-php1php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$maildirsizephp[php0php]php)php;
php php php php php php php php php php php php foreachphp php(php$maildirsizephp asphp php$linephp)php php{
php php php php php php php php php php php php php php php php listphp(php$sizephp,php php$countphp)php php=php explodephp(php'php php'php,php trimphp(php$linephp)php)php;
php php php php php php php php php php php php php php php php php$totalphp_sizephp php+php=php php$sizephp;
php php php php php php php php php php php php php php php php php$messagesphp php php php+php=php php$countphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$overphp_quotaphp php=php falsephp;
php php php php php php php php php$overphp_quotaphp php=php php$overphp_quotaphp php|php|php php(issetphp(php$quotaphp[php'sizephp'php]php)php php php&php&php php$totalphp_sizephp php>php php$quotaphp[php'sizephp'php]php)php;
php php php php php php php php php$overphp_quotaphp php=php php$overphp_quotaphp php|php|php php(issetphp(php$quotaphp[php'countphp'php]php)php php&php&php php$messagesphp php php php>php php$quotaphp[php'countphp'php]php)php;
php php php php php php php php php/php/php NOTEphp:php php$maildirsizephp equalsphp falsephp ifphp itphp wasnphp'tphp setphp php(AKAphp wephp recalculatedphp)php orphp itphp'sphp only
php php php php php php php php php/php/php onephp linephp,php becausephp php$maildirsizephp[php0php]php getsphp unsettedphp.
php php php php php php php php php/php/php Alsophp wephp'rephp usingphp localphp timephp tophp calculatephp thephp php1php5php minutephp offsetphp.php Touchingphp aphp filephp justphp forphp knownphp the
php php php php php php php php php/php/php localphp timephp ofphp thephp filephp storagephp isnphp'tphp worthphp thephp hasslephp.
php php php php php php php php ifphp php(php$overphp_quotaphp php&php&php php(php$maildirsizephp php|php|php filemtimephp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php php>php timephp(php)php php-php php9php0php0php)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_calculateMaildirsizephp(php)php;
php php php php php php php php php php php php php$totalphp_sizephp php=php php$resultphp[php'sizephp'php]php;
php php php php php php php php php php php php php$messagesphp php php php=php php$resultphp[php'countphp'php]php;
php php php php php php php php php php php php php$quotaphp php php php php php php=php php$resultphp[php'quotaphp'php]php;
php php php php php php php php php php php php php$overphp_quotaphp php=php falsephp;
php php php php php php php php php php php php php$overphp_quotaphp php=php php$overphp_quotaphp php|php|php php(issetphp(php$quotaphp[php'sizephp'php]php)php php php&php&php php$totalphp_sizephp php>php php$quotaphp[php'sizephp'php]php)php;
php php php php php php php php php php php php php$overphp_quotaphp php=php php$overphp_quotaphp php|php|php php(issetphp(php$quotaphp[php'countphp'php]php)php php&php&php php$messagesphp php php php>php php$quotaphp[php'countphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$fhphp)php php{
php php php php php php php php php php php php php/php/php TODOphp isphp therephp aphp safephp wayphp tophp keepphp thephp handlephp openphp forphp writingphp?
php php php php php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php'sizephp'php php=php>php php$totalphp_sizephp,php php'countphp'php php=php>php php$messagesphp,php php'quotaphp'php php=php>php php$quotaphp,php php'overphp_quotaphp'php php=php>php php$overphp_quotaphp)php;
php php php php php}

php php php php protectedphp functionphp php_addQuotaEntryphp(php$sizephp,php php$countphp php=php php1php)php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php)php)php php{
php php php php php php php php php php php php php/php/php TODOphp:php shouldphp getphp filephp handlerphp fromphp php_calculateQuota
php php php php php php php php php}
php php php php php php php php php$sizephp php=php php(intphp)php$sizephp;
php php php php php php php php php$countphp php=php php(intphp)php$countphp;
php php php php php php php php filephp_putphp_contentsphp(php$thisphp-php>php_rootdirphp php.php php'maildirsizephp'php,php php"php$sizephp php$countphp\nphp"php,php FILEphp_APPENDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php checkphp ifphp storagephp isphp currentlyphp overphp quota
php php php php php php*
php php php php php php*php php@paramphp boolphp php$detailedResponsephp returnphp knownphp dataphp ofphp quotaphp andphp currentphp sizephp andphp messagephp countphp php@seephp php_calculateQuotaphp(php)
php php php php php php*php php@returnphp boolphp|arrayphp overphp quotaphp statephp orphp detailedphp response
php php php php php php*php/
php php php php publicphp functionphp checkQuotaphp(php$detailedResponsephp php=php falsephp,php php$forceRecalcphp php=php falsephp)php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_calculateQuotaphp(php$forceRecalcphp)php;
php php php php php php php php returnphp php$detailedResponsephp php?php php$resultphp php:php php$resultphp[php'overphp_quotaphp'php]php;
php php php php php}
php}
