<php?php=php"<php?phpphp\nphp"php?php>

classphp <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_Mappersphp_Abstractphp php{

php php php php 
php php php php protectedphp php$php_dbTablephp;
php php php php php php php php php php 
php php php php publicphp functionphp setDbTablephp(php$dbTablephp)php php{php 
php php php php php php php ifphp php(isphp_stringphp(php$dbTablephp)php)php php{
php php php php php php php php php php php php$dbTablephp php=php newphp php$dbTablephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$dbTablephp instanceofphp Zendphp_Dbphp_Tablephp_Abstractphp)php php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Invalidphp tablephp dataphp gatewayphp providedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dbTablephp php=php php$dbTablephp;
php php php php php php php php php php php returnphp php$thisphp;
php php php php php php}

php	publicphp functionphp insertphp(php$dataphp)php php{
php php php php php php php php returnphp php$thisphp-php>getDbTablephp(php)php-php>insertphp(php$dataphp)php;
php php php php php}php php php php php php php php php 
php php php php 
php php php php php php php php 
php php php 
php php 
php php	publicphp functionphp deletephp(php$wherephp)php php{
php php php php php php php php returnphp php$thisphp-php>getDbTablephp(php)php-php>deletephp(php$wherephp)php;
php php php php php}

php php	publicphp functionphp updatephp(php$dataphp,php$wherephp)php php{
php	php	returnphp php$thisphp-php>getDbTablephp(php)php-php>updatephp(php$dataphp,php php$wherephp)php;
php php php php php}php 

php}
