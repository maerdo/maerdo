php-php-php phpMyAdminphp SQLphp Dump
php-php-php versionphp php2php.php1php1php.php6
php-php-php httpphp:php/php/wwwphp.phpmyadminphp.net
php-php-
php-php-php Hostphp:php localhostphp:php3php3php0php6
php-php-php Generationphp Timephp:php Junphp php1php9php,php php2php0php0php8php atphp php0php8php:php0php9php PM
php-php-php Serverphp versionphp:php php5php.php0php.php5php1
php-php-php PHPphp Versionphp:php php5php.php2php.php3

SETphp SQLphp_MODEphp=php"NOphp_AUTOphp_VALUEphp_ONphp_ZEROphp"php;

php/php*
Samplephp grantphp forphp MySQL

GRANTphp DELETEphp,php INSERTphp,php SELECTphp,php UPDATEphp ONphp queuephp.php*php TOphp php'queuephp'php@php'php1php2php7php.php0php.php0php.php1php'php IDENTIFIEDphp BYphp php'php[CHANGEphp MEphp]php'php;
mysqlphp php-uphp queuephp php-hphp php1php2php7php.php0php.php0php.php1php php-pphp queue

mysqlaccessphp queuephp queuephp php-php-superuserphp=rootphp php-Hphp php1php2php7php.php0php.php0php.php1


php*php/


php/php*php!php4php0php1php0php1php SETphp php@OLDphp_CHARACTERphp_SETphp_CLIENTphp=php@php@CHARACTERphp_SETphp_CLIENTphp php*php/php;
php/php*php!php4php0php1php0php1php SETphp php@OLDphp_CHARACTERphp_SETphp_RESULTSphp=php@php@CHARACTERphp_SETphp_RESULTSphp php*php/php;
php/php*php!php4php0php1php0php1php SETphp php@OLDphp_COLLATIONphp_CONNECTIONphp=php@php@COLLATIONphp_CONNECTIONphp php*php/php;
php/php*php!php4php0php1php0php1php SETphp NAMESphp utfphp8php php*php/php;

php-php-
php-php-php Databasephp:php php`queuephp`
php-php-

php-php-php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-

php-php-
php-php-php Tablephp structurephp forphp tablephp php`messagephp`
php-php-

DROPphp TABLEphp IFphp EXISTSphp php`messagephp`php;
CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`messagephp`php php(
php php php`messagephp_idphp`php bigintphp(php2php0php)php unsignedphp NOTphp NULLphp autophp_incrementphp,
php php php`queuephp_idphp`php intphp(php1php0php)php unsignedphp NOTphp NULLphp,
php php php`handlephp`php charphp(php3php2php)php defaultphp NULLphp,
php php php`bodyphp`php varcharphp(php8php1php9php2php)php NOTphp NULLphp,
php php php`mdphp5php`php charphp(php3php2php)php NOTphp NULLphp,
php php php`timeoutphp`php decimalphp(php1php4php,php4php)php unsignedphp defaultphp NULLphp,
php php php`createdphp`php intphp(php1php0php)php unsignedphp NOTphp NULLphp,
php php PRIMARYphp KEYphp php php(php`messagephp_idphp`php)php,
php php UNIQUEphp KEYphp php`messagephp_handlephp`php php(php`handlephp`php)php,
php php KEYphp php`messagephp_queueidphp`php php(php`queuephp_idphp`php)
php)php ENGINEphp=InnoDBphp DEFAULTphp CHARSETphp=utfphp8php;

php-php-php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-

php-php-
php-php-php Tablephp structurephp forphp tablephp php`queuephp`
php-php-

DROPphp TABLEphp IFphp EXISTSphp php`queuephp`php;
CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`queuephp`php php(
php php php`queuephp_idphp`php intphp(php1php0php)php unsignedphp NOTphp NULLphp autophp_incrementphp,
php php php`queuephp_namephp`php varcharphp(php1php0php0php)php NOTphp NULLphp,
php php php`timeoutphp`php smallintphp(php5php)php unsignedphp NOTphp NULLphp defaultphp php'php3php0php'php,
php php PRIMARYphp KEYphp php php(php`queuephp_idphp`php)
php)php ENGINEphp=InnoDBphp DEFAULTphp CHARSETphp=utfphp8php;

php-php-
php-php-php Constraintsphp forphp dumpedphp tables
php-php-

php-php-
php-php-php Constraintsphp forphp tablephp php`messagephp`
php-php-
ALTERphp TABLEphp php`messagephp`
php php ADDphp CONSTRAINTphp php`messagephp_ibfkphp_php1php`php FOREIGNphp KEYphp php(php`queuephp_idphp`php)php REFERENCESphp php`queuephp`php php(php`queuephp_idphp`php)php ONphp DELETEphp CASCADEphp ONphp UPDATEphp CASCADEphp;
