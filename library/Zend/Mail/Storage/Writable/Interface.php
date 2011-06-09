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
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

interfacephp Zendphp_Mailphp_Storagephp_Writablephp_Interface
php{
php php php php php/php*php*
php php php php php php*php createphp aphp newphp folder
php php php php php php*
php php php php php php*php Thisphp methodphp alsophp createsphp parentphp foldersphp ifphp necessaryphp.php Somephp mailphp storagesphp mayphp restrictphp,php whichphp folder
php php php php php php*php mayphp bephp usedphp asphp parentphp orphp whichphp charsphp mayphp bephp usedphp inphp thephp folderphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php php globalphp namephp ofphp folderphp,php localphp namephp ifphp php$parentFolderphp isphp set
php php php php php php*php php@paramphp stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$parentFolderphp parentphp folderphp forphp newphp folderphp,php elsephp rootphp folderphp isphp parent
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createFolderphp(php$namephp,php php$parentFolderphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php removephp aphp folder
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$namephp php php php php php namephp orphp instancephp ofphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeFolderphp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php renamephp andphp/orphp movephp folder
php php php php php php*
php php php php php php*php Thephp newphp namephp hasphp thephp samephp restrictionsphp asphp inphp createFolderphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$oldNamephp namephp orphp instancephp ofphp folder
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp newphp globalphp namephp ofphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp renameFolderphp(php$oldNamephp,php php$newNamephp)php;

php php php php php/php*php*
php php php php php php*php appendphp aphp newphp messagephp tophp mailphp storage
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Messagephp|Zendphp_Mimephp_Messagephp php$messagephp messagephp asphp stringphp orphp instancephp ofphp messagephp class
php php php php php php*php php@paramphp php nullphp|stringphp|Zendphp_Mailphp_Storagephp_Folderphp php php php php php php php$folderphp php folderphp forphp newphp messagephp,php elsephp currentphp folderphp isphp taken
php php php php php php*php php@paramphp php nullphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$flagsphp php php setphp flagsphp forphp newphp messagephp,php elsephp aphp defaultphp setphp isphp used
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendMessagephp(php$messagephp,php php$folderphp php=php nullphp,php php$flagsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php copyphp anphp existingphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp copyMessagephp(php$idphp,php php$folderphp)php;

php php php php php/php*php*
php php php php php php*php movephp anphp existingphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveMessagephp(php$idphp,php php$folderphp)php;

php php php php php/php*php*
php php php php php php*php setphp flagsphp forphp message
php php php php php php*
php php php php php php*php NOTEphp:php thisphp methodphp canphp'tphp setphp thephp recentphp flagphp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php$idphp php php php numberphp ofphp message
php php php php php php*php php@paramphp php arrayphp php$flagsphp newphp flagsphp forphp message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFlagsphp(php$idphp,php php$flagsphp)php;
php}