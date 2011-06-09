php/php*
php php*php php@versionphp php php php php$Idphp:php queuephp_sqlitephp.sqlphp php2php0php8php7php4php php2php0php1php0php-php0php2php-php0php3php php1php3php:php1php4php:php5php9Zphp matthewphp php$
Samplephp grantphp forphp SQLite

CREATEphp ROLEphp queuephp LOGIN
php php PASSWORDphp php'php[CHANGEphp MEphp]php'
php php NOSUPERUSERphp NOINHERITphp NOCREATEDBphp NOCREATEROLEphp;

php*php/

php-php-
php-php-php Tablephp structurephp forphp tablephp php`queuephp`
php-php-

CREATEphp TABLEphp queue
php(
php php queuephp_idphp INTEGERphp PRIMARYphp KEYphp AUTOINCREMENTphp,
php php queuephp_namephp VARCHARphp(php1php0php0php)php NOTphp NULLphp,
php php timeoutphp INTEGERphp NOTphp NULLphp DEFAULTphp php3php0
php)php;




php-php-php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php-php-
php-php-php Tablephp structurephp forphp tablephp php`messagephp`
php-php-

CREATEphp TABLEphp message
php(
php php messagephp_idphp INTEGERphp PRIMARYphp KEYphp AUTOINCREMENTphp,
php php queuephp_idphp INTEGERphp PRIMARYphp KEYphp,
php php handlephp CHARphp(php3php2php)php,
php php bodyphp VARCHARphp(php8php1php9php2php)php NOTphp NULLphp,
php php mdphp5php CHARphp(php3php2php)php NOTphp NULLphp,
php php timeoutphp REALphp,
php php createdphp INTEGERphp,
php php FOREIGNphp KEYphp php(queuephp_idphp)php REFERENCESphp queuephp(queuephp_idphp)
php)php;

