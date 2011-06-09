<php?php
php/php*php Cachephp compiledphp filesphp ofphp yourphp applicationphp withphp APCphp php*php/

classphp MyFilterIteratorphp extendsphp FilterIteratorphp php{
php	publicphp functionphp acceptphp(php)php php{
php	php	returnphp php(substrphp(php$thisphp-php>currentphp(php)php,php php-php php3php)php php=php=php php'phpphp'php)php;
php	php}
php}

php$rdiphp php=php newphp RecursiveDirectoryIteratorphp(php'php.php.php/php.php.php/php'php)php;
php$riiphp php=php newphp RecursiveIteratorIteratorphp(php$rdiphp,
RecursiveIteratorIteratorphp:php:LEAVESphp_ONLYphp)php;

foreachphp php(newphp MyFilterIteratorphp(php$riiphp)php asphp php$filephp)php php{
php	apcphp_compilephp_filephp(php$filephp)php;
php}

