<php?php=php"<php?phpphp\nphp"php?php>

php 
classphp <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_<php?php=php$paramsphp[php'filenamephp'php]php?php>php extendsphp <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_Abstractphp php{

<php?foreachphp php(php$paramsphp[php'fieldsphp'php]php asphp php$columnphp)php:php?php>
php php php php protectedphp php$php_<php?php=ucfirstphp(php$columnphp)php?php>php;
<php?endforeachphp;php?php>

php	protectedphp php$php_modelInstancephp;
php php php php protectedphp php$php_mapperphp;
php php php php 

php	publicphp functionphp php_php_constructphp(php)php php{
php	php	php$thisphp-php>php_mapperphp=newphp <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_Mappersphp_<php?php=php$paramsphp[php'filenamephp'php]php?php>php(php)php;php php php php php	
php php php php php	php$thisphp-php>php_modelInstancephp=php$thisphp;

php	php}

php	
php php php php <php?foreachphp php(php$paramsphp[php'fieldsphp'php]php asphp php$columnphp)php:php?php>


php php php php publicphp functionphp set<php?php=ucfirstphp(php$columnphp)php?php>php(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_<php?php=ucfirstphp(php$columnphp)php?php>php=php$dataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php 
php php php php publicphp functionphp get<php?php=ucfirstphp(php$columnphp)php?php>php(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_<php?php=ucfirstphp(php$columnphp)php?php>php;
php php php php php}
php php php php <php?endforeachphp;php?php>

php php 
php php php php php/php*php*
php php php php php php*php returnsphp thephp mapperphp class
php php php php php php*
php php php php php php*php php@returnphp php <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_Mappersphp_<php?php=php$paramsphp[php'filenamephp'php]php?php>
php php php php php php*
php php php php php php*php/php php php php php php php 
php php php php publicphp functionphp getMapperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_mapperphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMapperphp(newphp php <php?php=php$paramsphp[php'modulephp'php]php?php>php_Modelphp_Mappersphp_<php?php=php$paramsphp[php'filenamephp'php]php?php>php(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_mapperphp;
php php php php php}
php php php php 
php php php php publicphp functionphp setMapperphp(php$mapperphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mapperphp php=php php$mapperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}php php php php php php php 

php}

