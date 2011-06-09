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
php php*php php@seephp Zendphp_Mailphp_Storagephp_Folder
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Folderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Folderphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Folderphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Maildir
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Maildirphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Folderphp_Maildirphp extendsphp Zendphp_Mailphp_Storagephp_Maildirphp implementsphp Zendphp_Mailphp_Storagephp_Folderphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Zendphp_Mailphp_Storagephp_Folderphp rootphp folderphp forphp folderphp structure
php php php php php php*php php@varphp Zendphp_Mailphp_Storagephp_Folder
php php php php php php*php/
php php php php protectedphp php$php_rootFolderphp;

php php php php php/php*php*
php php php php php php*php rootdirphp ofphp folderphp structure
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootdirphp;

php php php php php/php*php*
php php php php php php*php namephp ofphp currentphp folder
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_currentFolderphp;

php php php php php/php*php*
php php php php php php*php delimphp charphp forphp subfolders
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_delimphp;

php php php php php/php*php*
php php php php php php*php Createphp instancephp withphp parameters
php php php php php php*php Supportedphp parametersphp arephp:
php php php php php php*php php php php-php dirnamephp rootdirphp ofphp maildirphp structure
php php php php php php*php php php php-php delimphp php php delimphp charphp forphp folderphp structurphp,php defaultphp isphp php'php.php'
php php php php php php*php php php php-php folderphp intialphp selectedphp folderphp,php defaultphp isphp php'INBOXphp'
php php php php php php*
php php php php php php*php php@paramphp php php$paramsphp arrayphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$paramsphp-php>dirnamephp)php php|php|php php!isphp_dirphp(php$paramsphp-php>dirnamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'nophp validphp dirnamephp givenphp inphp paramsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_rootdirphp php=php rtrimphp(php$paramsphp-php>dirnamephp,php DIRECTORYphp_SEPARATORphp)php php.php DIRECTORYphp_SEPARATORphp;

php php php php php php php php php$thisphp-php>php_delimphp php=php issetphp(php$paramsphp-php>delimphp)php php?php php$paramsphp-php>delimphp php:php php'php.php'php;

php php php php php php php php php$thisphp-php>php_buildFolderTreephp(php)php;
php php php php php php php php php$thisphp-php>selectFolderphp(php!emptyphp(php$paramsphp-php>folderphp)php php?php php$paramsphp-php>folderphp php:php php'INBOXphp'php)php;
php php php php php php php php php$thisphp-php>php_hasphp[php'topphp'php]php php=php truephp;
php php php php php php php php php$thisphp-php>php_hasphp[php'flagsphp'php]php php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php findphp allphp subfoldersphp andphp mboxphp filesphp forphp folderphp structure
php php php php php php*
php php php php php php*php Resultphp isphp savephp inphp Zendphp_Mailphp_Storagephp_Folderphp instancesphp withphp thephp rootphp inphp php$thisphp-php>php_rootFolderphp.
php php php php php php*php php$parentFolderphp andphp php$parentGlobalNamephp arephp onlyphp usedphp internallyphp forphp recursionphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_buildFolderTreephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rootFolderphp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php'php/php'php,php php'php/php'php,php falsephp)php;
php php php php php php php php php$thisphp-php>php_rootFolderphp-php>INBOXphp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php'INBOXphp'php,php php'INBOXphp'php,php truephp)php;

php php php php php php php php php$dhphp php=php php@opendirphp(php$thisphp-php>php_rootdirphp)php;
php php php php php php php php ifphp php(php!php$dhphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"canphp'tphp readphp foldersphp inphp maildirphp"php)php;
php php php php php php php php php}
php php php php php php php php php$dirsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php(php$entryphp php=php readdirphp(php$dhphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php maildirphp+php+php definesphp foldersphp mustphp startphp withphp php.
php php php php php php php php php php php php ifphp php(php$entryphp[php0php]php php!php=php php'php.php'php php|php|php php$entryphp php=php=php php'php.php'php php|php|php php$entryphp php=php=php php'php.php.php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isMaildirphp(php$thisphp-php>php_rootdirphp php.php php$entryphp)php)php php{
php php php php php php php php php php php php php php php php php$dirsphp[php]php php=php php$entryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php closedirphp(php$dhphp)php;

php php php php php php php php sortphp(php$dirsphp)php;
php php php php php php php php php$stackphp php=php arrayphp(nullphp)php;
php php php php php php php php php$folderStackphp php=php arrayphp(nullphp)php;
php php php php php php php php php$parentFolderphp php=php php$thisphp-php>php_rootFolderphp;
php php php php php php php php php$parentphp php=php php'php.php'php;

php php php php php php php php foreachphp php(php$dirsphp asphp php$dirphp)php php{
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$dirphp,php php$parentphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$localphp php=php substrphp(php$dirphp,php strlenphp(php$parentphp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$localphp,php php$thisphp-php>php_delimphp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'errorphp whilephp readingphp maildirphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$stackphp,php php$parentphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentphp php=php php$dirphp php.php php$thisphp-php>php_delimphp;
php php php php php php php php php php php php php php php php php php php php php$folderphp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php$localphp,php substrphp(php$dirphp,php php1php)php,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp-php>php$localphp php=php php$folderphp;
php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$folderStackphp,php php$parentFolderphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp php=php php$folderphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$stackphp)php php{
php php php php php php php php php php php php php php php php php php php php php$parentphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp php=php arrayphp_popphp(php$folderStackphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php whilephp php(php$stackphp)php;
php php php php php php php php php php php php ifphp php(php!php$stackphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'errorphp whilephp readingphp maildirphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp rootphp folderphp orphp givenphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rootFolderphp getphp folderphp structurephp forphp givenphp folderphp,php elsephp root
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp rootphp orphp wantedphp folder
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getFoldersphp(php$rootFolderphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$rootFolderphp php|php|php php$rootFolderphp php=php=php php'INBOXphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_rootFolderphp;
php php php php php php php php php}

php php php php php php php php php/php/php rootdirphp isphp samephp asphp INBOXphp inphp maildir
php php php php php php php php ifphp php(strposphp(php$rootFolderphp,php php'INBOXphp'php php.php php$thisphp-php>php_delimphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$rootFolderphp php=php substrphp(php$rootFolderphp,php php6php)php;
php php php php php php php php php}
php php php php php php php php php$currentFolderphp php=php php$thisphp-php>php_rootFolderphp;
php php php php php php php php php$subnamephp php=php trimphp(php$rootFolderphp,php php$thisphp-php>php_delimphp)php;
php php php php php php php php whilephp php(php$currentFolderphp)php php{
php php php php php php php php php php php php php@listphp(php$entryphp,php php$subnamephp)php php=php php@explodephp(php$thisphp-php>php_delimphp,php php$subnamephp,php php2php)php;
php php php php php php php php php php php php php$currentFolderphp php=php php$currentFolderphp-php>php$entryphp;
php php php php php php php php php php php php ifphp php(php!php$subnamephp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$currentFolderphp-php>getGlobalNamephp(php)php php!php=php rtrimphp(php$rootFolderphp,php php$thisphp-php>php_delimphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"folderphp php$rootFolderphp notphp foundphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$currentFolderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php selectphp givenphp folder
php php php php php php*
php php php php php php*php folderphp mustphp bephp selectablephp!
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Mailphp_Storagephp_Folderphp|stringphp php$globalNamephp globalphp namephp ofphp folderphp orphp instancephp forphp subfolder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp selectFolderphp(php$globalNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentFolderphp php=php php(stringphp)php$globalNamephp;

php php php php php php php php php/php/php gettingphp folderphp fromphp folderphp treephp forphp validation
php php php php php php php php php$folderphp php=php php$thisphp-php>getFoldersphp(php$thisphp-php>php_currentFolderphp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_openMaildirphp(php$thisphp-php>php_rootdirphp php.php php'php.php'php php.php php$folderphp-php>getGlobalNamephp(php)php)php;
php php php php php php php php php}php catchphp(Zendphp_Mailphp_Storagephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php checkphp whatphp wentphp wrong
php php php php php php php php php php php php ifphp php(php!php$folderphp-php>isSelectablephp(php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"php{php$thisphp-php>php_currentFolderphp}php isphp notphp selectablephp"php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php seemsphp likephp filephp hasphp vanishedphp;php rebuildingphp folderphp treephp php-php butphp itphp'sphp stillphp anphp exception
php php php php php php php php php php php php php$thisphp-php>php_buildFolderTreephp(php$thisphp-php>php_rootdirphp)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'seemsphp likephp thephp maildirphp hasphp vanishedphp,php Iphp\php'vephp rebuildphp thephp php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'folderphp treephp,php searchphp forphp anphp otherphp folderphp andphp tryphp againphp'php,php php0php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp Zendphp_Mailphp_Storagephp_Folderphp instancephp forphp currentphp folder
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp instancephp ofphp currentphp folder
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getCurrentFolderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentFolderphp;
php php php php php}
php}
