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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Compressphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Compressesphp aphp givenphp string
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Compressphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Compressionphp adapter
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php php'Gzphp'php;

php php php php php/php*php*
php php php php php php*php Compressionphp adapterphp constructorphp options
php php php php php php*php/
php php php php protectedphp php$php_adapterOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAdapterphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Filterphp_Compressphp_CompressInterfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>setAdapterphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp filterphp setate
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Filterphp_Compress
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$keyphp php=php=php php'optionsphp'php)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php php'adapterOptionsphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentphp adapterphp,php instantiatingphp itphp ifphp necessary
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_adapterphp instanceofphp Zendphp_Filterphp_Compressphp_CompressInterfacephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php php php php php}

php php php php php php php php php$adapterphp php=php php$thisphp-php>php_adapterphp;
php php php php php php php php php$optionsphp php=php php$thisphp-php>getAdapterOptionsphp(php)php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$adapterphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php'Zendphp/Filterphp/Compressphp/php'php php.php ucfirstphp(php$adapterphp)php php.php php'php.phpphp'php)php)php php{
php php php php php php php php php php php php php php php php php$adapterphp php=php php'Zendphp_Filterphp_Compressphp_php'php php.php ucfirstphp(php$adapterphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$adapterphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp php=php newphp php$adapterphp(php$optionsphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp instanceofphp Zendphp_Filterphp_Compressphp_CompressInterfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Compressionphp adapterphp php'php"php php.php php$adapterphp php.php php"php'php doesphp notphp implementphp Zendphp_Filterphp_Compressphp_CompressInterfacephp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAdapterNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAdapterphp(php)php-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp compressionphp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Filterphp_Compressphp_CompressInterfacephp php$adapterphp Adapterphp tophp use
php php php php php php*php php@returnphp Zendphp_Filterphp_Compress
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_Filterphp_Compressphp_CompressInterfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_stringphp(php$adapterphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Invalidphp adapterphp providedphp;php mustphp bephp stringphp orphp instancephp ofphp Zendphp_Filterphp_Compressphp_CompressInterfacephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp adapterphp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAdapterOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterOptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp adapterphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setAdapterOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterOptionsphp php=php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callsphp adapterphp methods
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php php php php php$methodphp php Methodphp tophp call
php php php php php php*php php@paramphp stringphp|arrayphp php$optionsphp Optionsphp forphp thisphp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$optionsphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getAdapterphp(php)php;
php php php php php php php php ifphp php(php!methodphp_existsphp(php$adapterphp,php php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Unknownphp methodphp php'php{php$methodphp}php'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$adapterphp,php php$methodphp)php,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Compressesphp thephp contentphp php$valuephp withphp thephp definedphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Contentphp tophp compress
php php php php php php*php php@returnphp stringphp Thephp compressedphp content
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAdapterphp(php)php-php>compressphp(php$valuephp)php;
php php php php php}
php}
