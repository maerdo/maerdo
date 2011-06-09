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
php php*php php@versionphp php php php php$Idphp:php Folderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Folderphp implementsphp RecursiveIterator
php{
php php php php php/php*php*
php php php php php php*php subfoldersphp ofphp folderphp arrayphp(localNamephp php=php>php Zendphp_Mailphp_Storagephp_Folderphp folderphp)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_foldersphp;

php php php php php/php*php*
php php php php php php*php localphp namephp php(namephp ofphp folderphp inphp parentphp folderphp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_localNamephp;

php php php php php/php*php*
php php php php php php*php globalphp namephp php(absolutephp namephp ofphp folderphp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_globalNamephp;

php php php php php/php*php*
php php php php php php*php folderphp isphp selectablephp ifphp folderphp isphp ablephp tophp holdphp messagesphp,php elsephp itphp'sphp justphp aphp parentphp folder
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_selectablephp php=php truephp;

php php php php php/php*php*
php php php php php php*php createphp aphp newphp mailphp folderphp instance
php php php php php php*
php php php php php php*php php@paramphp stringphp php$localNamephp php namephp ofphp folderphp inphp currentphp subdirectory
php php php php php php*php php@paramphp stringphp php$globalNamephp absolutephp namephp ofphp folder
php php php php php php*php php@paramphp boolphp php php php$selectablephp ifphp truephp folderphp holdsphp messagesphp,php ifphp falsephp itphp'sphp justphp aphp parentphp forphp subfolders
php php php php php php*php php@paramphp arrayphp php php$foldersphp php php php initphp withphp givenphp instancesphp ofphp Zendphp_Mailphp_Storagephp_Folderphp asphp subfolders
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$localNamephp,php php$globalNamephp php=php php'php'php,php php$selectablephp php=php truephp,php arrayphp php$foldersphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_localNamephp php php=php php$localNamephp;
php php php php php php php php php$thisphp-php>php_globalNamephp php=php php$globalNamephp php?php php$globalNamephp php:php php$localNamephp;
php php php php php php php php php$thisphp-php>php_selectablephp php=php php$selectablephp;
php php php php php php php php php$thisphp-php>php_foldersphp php php php php=php php$foldersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp RecursiveIteratorphp:php:hasChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp currentphp elementphp hasphp children
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php php$currentphp php=php php$thisphp-php>currentphp(php)php;
php php php php php php php php returnphp php$currentphp php&php&php php$currentphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp php&php&php php!php$currentphp-php>isLeafphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp RecursiveIteratorphp:php:getChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp samephp asphp selfphp:php:currentphp(php)
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>currentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp checkphp ifphp therephp'sphp aphp currentphp element
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_foldersphp)php php!php=php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php nextphp(php$thisphp-php>php_foldersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp keyphp/localphp namephp ofphp currentphp element
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_foldersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp currentphp folder
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_foldersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_foldersphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp subfolderphp namedphp php$name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp wantedphp subfolder
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp folderphp namedphp php$folder
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_foldersphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php"nophp subfolderphp namedphp php$namephp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_foldersphp[php$namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php addphp orphp replacephp subfolderphp namedphp php$name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp localphp namephp ofphp subfolder
php php php php php php*php php@paramphp Zendphp_Mailphp_Storagephp_Folderphp php$folderphp instancephp forphp newphp subfolder
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php Zendphp_Mailphp_Storagephp_Folderphp php$folderphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_foldersphp[php$namephp]php php=php php$folderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php removephp subfolderphp namedphp php$name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp localphp namephp ofphp subfolder
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_foldersphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php magicphp methodphp forphp easyphp outputphp ofphp globalphp name
php php php php php php*
php php php php php php*php php@returnphp stringphp globalphp namephp ofphp folder
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php(stringphp)php$thisphp-php>getGlobalNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp localphp name
php php php php php php*
php php php php php php*php php@returnphp stringphp localphp name
php php php php php php*php/
php php php php publicphp functionphp getLocalNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp globalphp name
php php php php php php*
php php php php php php*php php@returnphp stringphp globalphp name
php php php php php php*php/
php php php php publicphp functionphp getGlobalNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_globalNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php isphp thisphp folderphp selectablephp?
php php php php php php*
php php php php php php*php php@returnphp boolphp selectable
php php php php php php*php/
php php php php publicphp functionphp isSelectablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_selectablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php checkphp ifphp folderphp hasphp nophp subfolder
php php php php php php*
php php php php php php*php php@returnphp boolphp truephp ifphp nophp subfolders
php php php php php php*php/
php php php php publicphp functionphp isLeafphp(php)
php php php php php{
php php php php php php php php returnphp emptyphp(php$thisphp-php>php_foldersphp)php;
php php php php php}
php}
