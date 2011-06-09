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
php php*php php@packagephp php php php Zendphp_Locale
php php*php php@subpackagephp Data
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dataphp.phpphp php2php2php7php1php2php php2php0php1php0php-php0php7php-php2php9php php0php8php:php2php4php:php2php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php includephp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Localephp dataphp readerphp,php handlesphp thephp CLDR
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Locale
php php*php php@subpackagephp Data
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Localephp_Data
php{
php php php php php/php*php*
php php php php php php*php Localephp files
php php php php php php*
php php php php php php*php php@varphp ressource
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp php$php_ldmlphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp valuesphp whichphp arephp collected
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp php$php_listphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Internalphp cachephp forphp ldmlphp values
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Core
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp php$php_cachephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Internalphp valuephp tophp rememberphp ifphp cachephp supportsphp tags
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp staticphp php$php_cacheTagsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Internalphp optionphp,php cachephp disabled
php php php php php php*
php php php php php php*php php@varphp php php php boolean
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp php$php_cacheDisabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Readphp thephp contentphp fromphp locale
php php php php php php*
php php php php php php*php Canphp bephp calledphp likephp:
php php php php php php*php php<ldmlphp>
php php php php php php*php php php php php php<delimiterphp>test<php/delimiterphp>
php php php php php php*php php php php php php<secondphp typephp=php'myonephp'php>content<php/secondphp>
php php php php php php*php php php php php php<secondphp typephp=php'mysecondphp'php>contentphp2<php/secondphp>
php php php php php php*php php php php php php<thirdphp typephp=php'mythirdphp'php php/php>
php php php php php php*php <php/ldmlphp>
php php php php php php*
php php php php php php*php Casephp php1php:php php_readFilephp(php'arphp'php,php'php/ldmlphp/delimiterphp'php)php php php php php php php php php php php php php php-php>php returnsphp php[php]php php=php test
php php php php php php*php Casephp php1php:php php_readFilephp(php'arphp'php,php'php/ldmlphp/secondphp[php@typephp=myonephp]php'php)php php php php-php>php returnsphp php[php]php php=php content
php php php php php php*php Casephp php2php:php php_readFilephp(php'arphp'php,php'php/ldmlphp/secondphp'php,php'typephp'php)php php php php php php php php php php-php>php returnsphp php[myonephp]php php=php contentphp;php php[mysecondphp]php php=php contentphp2
php php php php php php*php Casephp php3php:php php_readFilephp(php'arphp'php,php'php/ldmlphp/delimiterphp'php,php,php'rightphp'php)php php php php php-php>php returnsphp php[rightphp]php php=php test
php php php php php php*php Casephp php4php:php php_readFilephp(php'arphp'php,php'php/ldmlphp/thirdphp'php,php'typephp'php,php'myonephp'php)php php php-php>php returnsphp php[myonephp]php php=php mythird
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$attribute
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@accessphp private
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php privatephp staticphp functionphp php_readFilephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)
php php php php php{
php php php php php php php php php/php/php withoutphp attributephp php-php readphp allphp values
php php php php php php php php php/php/php withphp attributephp php php php php-php readphp onlyphp thisphp value
php php php php php php php php ifphp php(php!emptyphp(selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php)php)php php{

php php php php php php php php php php php php php$resultphp php=php selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php-php>xpathphp(php$pathphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$resultphp asphp php&php$foundphp)php php{

php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$attributephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Casephp php1
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php]php php=php php(stringphp)php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(emptyphp(php$tempphp[php(stringphp)php php$foundphp[php$attributephp]php]php)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Casephp php2
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php(stringphp)php php$foundphp[php$attributephp]php]php php=php php(stringphp)php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(emptyphp php(php$tempphp[php$valuephp]php)php)php php{

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$attributephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Casephp php3
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valuephp]php php=php php(stringphp)php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Casephp php4
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valuephp]php php=php php(stringphp)php php$foundphp[php$attributephp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$tempphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp possiblephp routingphp tophp otherphp pathphp orphp locale
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$attribute
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php arrayphp php php$temp
php php php php php php*php php@throwsphp Zendphp_Localephp_Exception
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp functionphp php_findRoutephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php&php$tempphp)
php php php php php{
php php php php php php php php php/php/php loadphp localephp filephp ifphp notphp alreadyphp inphp cache
php php php php php php php php php/php/php neededphp forphp aliasphp tagphp whenphp referringphp tophp otherphp locale
php php php php php php php php ifphp php(emptyphp(selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php)php)php php{
php php php php php php php php php php php php php$filenamephp php=php dirnamephp(php_php_FILEphp_php_php)php php.php php'php/Dataphp/php'php php.php php$localephp php.php php'php.xmlphp'php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$filenamephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Exceptionphp(php"Missingphp localephp filephp php'php$filenamephp'php forphp php'php$localephp'php localephp.php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php php=php simplexmlphp_loadphp_filephp(php$filenamephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php searchphp forphp php'aliasphp'php tagphp inphp thephp searchphp pathphp forphp redirection
php php php php php php php php php$searchphp php=php php'php'php;
php php php php php php php php php$tokphp php=php strtokphp(php$pathphp,php php'php/php'php)php;

php php php php php php php php php/php/php parsephp thephp completephp path
php php php php php php php php ifphp php(php!emptyphp(selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php)php)php php{
php php php php php php php php php php php php whilephp php(php$tokphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$searchphp php.php=php php php'php/php'php php.php php$tokphp;
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$searchphp,php php'php[php@php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php whilephp php(strrposphp(php$searchphp,php php'php[php@php'php)php php>php strrposphp(php$searchphp,php php'php]php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tokphp php=php strtokphp(php'php/php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tokphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$searchphp php.php=php php'php/php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$searchphp php=php php$searchphp php.php php'php/php'php php.php php$tokphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$resultphp php=php selfphp:php:php$php_ldmlphp[php(stringphp)php php$localephp]php-php>xpathphp(php$searchphp php.php php'php/aliasphp'php)php;

php php php php php php php php php php php php php php php php php/php/php aliasphp found
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp)php)php php{

php php php php php php php php php php php php php php php php php php php php php$sourcephp php=php php$resultphp[php0php]php[php'sourcephp'php]php;
php php php php php php php php php php php php php php php php php php php php php$newpathphp php=php php$resultphp[php0php]php[php'pathphp'php]php;

php php php php php php php php php php php php php php php php php php php php php/php/php newphp pathphp php-php pathphp php/php/ldmlphp isphp tophp ignore
php php php php php php php php php php php php php php php php php php php php ifphp php(php$newpathphp php!php=php php'php/php/ldmlphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php otherphp pathphp php-php parsephp tophp makephp realphp path

php php php php php php php php php php php php php php php php php php php php php php php php whilephp php(substrphp(php$newpathphp,php0php,php3php)php php=php=php php'php.php.php/php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newpathphp php=php substrphp(php$newpathphp,php php3php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$searchphp php=php substrphp(php$searchphp,php php0php,php strrposphp(php$searchphp,php php'php/php'php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php truncatephp php.php.php/php tophp realpathphp otherwisephp problemsphp withphp alias
php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php php$searchphp php.php php'php/php'php php.php php$newpathphp;
php php php php php php php php php php php php php php php php php php php php php php php php whilephp php(php(php$tokphp php=php strtokphp(php'php/php'php)php)php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pathphp php=php php$pathphp php.php php'php/php'php php.php php$tokphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php reroutephp tophp otherphp locale
php php php php php php php php php php php php php php php php php php php php ifphp php(php$sourcephp php!php=php php'localephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$localephp php=php php$sourcephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$tokphp php=php strtokphp(php'php/php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp thephp rightphp LDMLphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$attribute
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@accessphp private
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getFilephp(php$localephp,php php$pathphp,php php$attributephp php=php falsephp,php php$valuephp php=php falsephp,php php$tempphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$resultphp php=php selfphp:php:php_findRoutephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)php;
php php php php php php php php ifphp php(php$resultphp)php php{
php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_readFilephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php parsephp requiredphp localesphp reversive
php php php php php php php php php/php/php examplephp:php whenphp givenphp zhphp_Hansphp_CN
php php php php php php php php php/php/php php1php.php php-php>php zhphp_Hansphp_CN
php php php php php php php php php/php/php php2php.php php-php>php zhphp_Hans
php php php php php php php php php/php/php php3php.php php-php>php zh
php php php php php php php php php/php/php php4php.php php-php>php root
php php php php php php php php ifphp php(php(php$localephp php!php=php php'rootphp'php)php php&php&php php(php$resultphp)php)php php{
php php php php php php php php php php php php php$localephp php=php substrphp(php$localephp,php php0php,php php-strlenphp(strrchrphp(php$localephp,php php'php_php'php)php)php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$localephp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'rootphp'php,php php$pathphp,php php$attributephp,php php$valuephp,php php$tempphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$tempphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp thephp detailsphp forphp supplementalphp calendarphp datas
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$localephp Localephp forphp Detaildata
php php php php php php*php php@paramphp php arrayphp php php$listphp php php Listphp tophp search
php php php php php php*php php@returnphp stringphp php php php php php php php php Keyphp forphp Detaildata
php php php php php php*php/
php php php php privatephp staticphp functionphp php_calendarDetailphp(php$localephp,php php$listphp)
php php php php php{
php php php php php php php php php$retphp php=php php"php0php0php1php"php;
php php php php php php php php foreachphp php(php$listphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$localephp,php php'php_php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php substrphp(php$localephp,php strposphp(php$localephp,php php'php_php'php)php php+php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(strposphp(php$keyphp,php php$localephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$retphp php=php php$keyphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp functionphp forphp checkingphp thephp locale
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp php$localephp Localephp tophp check
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp staticphp functionphp php_checkLocalephp(php$localephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$localephp)php)php php{
php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(Zendphp_Localephp:php:isLocalephp(php(stringphp)php php$localephp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Exceptionphp(php"Localephp php(php"php php.php php(stringphp)php php$localephp php.php php"php)php isphp aphp unknownphp localephp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php php$localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp thephp LDMLphp filephp,php getphp aphp arrayphp ofphp multipathphp definedphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp staticphp functionphp getListphp(php$localephp,php php$pathphp,php php$valuephp php=php falsephp)
php php php php php{
php php php php php php php php php$localephp php=php selfphp:php:php_checkLocalephp(php$localephp)php;

php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$php_cachephp)php php&php&php php!selfphp:php:php$php_cacheDisabledphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cachephp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_cachephp php=php Zendphp_Cachephp:php:factoryphp(
php php php php php php php php php php php php php php php php php'Corephp'php,
php php php php php php php php php php php php php php php php php'Filephp'php,
php php php php php php php php php php php php php php php php arrayphp(php'automaticphp_serializationphp'php php=php>php truephp)php,
php php php php php php php php php php php php php php php php arrayphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$valphp php=php php$valuephp;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valphp php=php implodephp(php'php_php'php php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$valphp php=php urlencodephp(php$valphp)php;
php php php php php php php php php$idphp php=php strtrphp(php'Zendphp_LocaleLphp_php'php php.php php$localephp php.php php'php_php'php php.php php$pathphp php.php php'php_php'php php.php php$valphp,php arrayphp(php'php-php'php php=php>php php'php_php'php,php php'php%php'php php=php>php php'php_php'php,php php'php+php'php php=php>php php'php_php'php)php)php;
php php php php php php php php ifphp php(php!selfphp:php:php$php_cacheDisabledphp php&php&php php(php$resultphp php=php selfphp:php:php$php_cachephp-php>loadphp(php$idphp)php)php)php php{
php php php php php php php php php php php php returnphp unserializephp(php$resultphp)php;
php php php php php php php php php}

php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php switchphp(strtolowerphp(php$pathphp)php)php php{
php php php php php php php php php php php php casephp php'languagephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/languagesphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'scriptphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/scriptsphp/scriptphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/territoriesphp/territoryphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp(php$tempphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(isphp_numericphp(php$keyphp)php php=php=php=php falsephp)php andphp php(php$keyphp php!php=php php'QOphp'php)php andphp php(php$keyphp php!php=php php'QUphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$valuephp php=php=php=php php2php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp(php$tempphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$keyphp)php orphp php(php$keyphp php=php=php php'QOphp'php)php orphp php(php$keyphp php=php=php php'QUphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'variantphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/variantsphp/variantphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'keyphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/keysphp/keyphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'typephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$typephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/typesphp/typephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$valuephp php=php=php php'calendarphp'php)php or
php php php php php php php php php php php php php php php php php php php php php php php php php(php$valuephp php=php=php php'collationphp'php)php or
php php php php php php php php php php php php php php php php php php php php php php php php php(php$valuephp php=php=php php'currencyphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/typesphp/typephp[php@keyphp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/typesphp/typephp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'layoutphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/orientationphp'php,php php php php php php php php php php php php php php php php php php'linesphp'php,php php php php php php php'linesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/orientationphp'php,php php php php php php php php php php php php php php php php php php'charactersphp'php,php php'charactersphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inListphp'php,php php php php php php php php php php php php php php php php php php php php php php php'php'php,php php php php php php php php php php php php'inListphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'currencyphp\php'php]php'php,php php php'php'php,php php php php php php php php php php php php'currencyphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'dayWidthphp\php'php]php'php,php php php'php'php,php php php php php php php php php php php php'dayWidthphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'fieldsphp\php'php]php'php,php php php php php'php'php,php php php php php php php php php php php php'fieldsphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'keysphp\php'php]php'php,php php php php php php php'php'php,php php php php php php php php php php php php'keysphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'languagesphp\php'php]php'php,php php'php'php,php php php php php php php php php php php php'languagesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'longphp\php'php]php'php,php php php php php php php'php'php,php php php php php php php php php php php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'measurementSystemNamesphp\php'php]php'php,php php'php'php,php php'measurementSystemNamesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'monthWidthphp\php'php]php'php,php php php php'php'php,php php php php php php php php php'monthWidthphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'quarterWidthphp\php'php]php'php,php php'php'php,php php php php php php php php php'quarterWidthphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'scriptsphp\php'php]php'php,php php php php'php'php,php php php php php php php php php php php php'scriptsphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'territoriesphp\php'php]php'php,php php php'php'php,php php php php php php php php php'territoriesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'typesphp\php'php]php'php,php php php php php php'php'php,php php php php php php php php php php php php'typesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/layoutphp/inTextphp[php@typephp=php\php'variantsphp\php'php]php'php,php php php'php'php,php php php php php php php php php php php php'variantsphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'charactersphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/charactersphp/exemplarCharactersphp'php,php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,php php'charactersphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/charactersphp/exemplarCharactersphp[php@typephp=php\php'auxiliaryphp\php'php]php'php,php php php php php php php'php'php,php php'auxiliaryphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/charactersphp/exemplarCharactersphp[php@typephp=php\php'currencySymbolphp\php'php]php'php,php php'php'php,php php'currencySymbolphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'delimitersphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/delimitersphp/quotationStartphp'php,php php php php php php php php php php php'php'php,php php'quoteStartphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/delimitersphp/quotationEndphp'php,php php php php php php php php php php php php php'php'php,php php'quoteEndphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/delimitersphp/alternateQuotationStartphp'php,php php'php'php,php php'quoteStartAltphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/delimitersphp/alternateQuotationEndphp'php,php php php php'php'php,php php'quoteEndAltphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'measurementphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/measurementDataphp/measurementSystemphp[php@typephp=php\php'metricphp\php'php]php'php,php php'territoriesphp'php,php php'metricphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/measurementDataphp/measurementSystemphp[php@typephp=php\php'USphp\php'php]php'php,php php php php php php'territoriesphp'php,php php'USphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/measurementDataphp/paperSizephp[php@typephp=php\php'Aphp4php\php'php]php'php,php php php php php php php php php php php php php php'territoriesphp'php,php php'Aphp4php'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/measurementDataphp/paperSizephp[php@typephp=php\php'USphp-Letterphp\php'php]php'php,php php php php php php php'territoriesphp'php,php php'USphp-Letterphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'monthsphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/defaultphp'php,php php'choicephp'php,php php'contextphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'formatphp\php'php]php/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'abbreviatedphp'php]php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'formatphp\php'php]php/monthWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'narrowphp'php]php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'formatphp\php'php]php/monthWidthphp[php@typephp=php\php'narrowphp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'widephp'php]php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'formatphp\php'php]php/monthWidthphp[php@typephp=php\php'widephp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'abbreviatedphp'php]php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/monthWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'narrowphp'php]php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/monthWidthphp[php@typephp=php\php'narrowphp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'widephp'php]php php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/monthWidthphp[php@typephp=php\php'widephp\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'monthphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/monthWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/monthphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'daysphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/defaultphp'php,php php'choicephp'php,php php'contextphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'formatphp\php'php]php/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'abbreviatedphp'php]php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'formatphp\php'php]php/dayWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'narrowphp'php]php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'formatphp\php'php]php/dayWidthphp[php@typephp=php\php'narrowphp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'widephp'php]php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'formatphp\php'php]php/dayWidthphp[php@typephp=php\php'widephp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'abbreviatedphp'php]php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/dayWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'narrowphp'php]php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/dayWidthphp[php@typephp=php\php'narrowphp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'widephp'php]php php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/dayWidthphp[php@typephp=php\php'widephp\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dayphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/dayWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/dayphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'weekphp'php:
php php php php php php php php php php php php php php php php php$minDaysphp php php php=php selfphp:php:php_calendarDetailphp(php$localephp,php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/weekDataphp/minDaysphp'php,php php'territoriesphp'php)php)php;
php php php php php php php php php php php php php php php php php$firstDayphp php php=php selfphp:php:php_calendarDetailphp(php$localephp,php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/weekDataphp/firstDayphp'php,php php'territoriesphp'php)php)php;
php php php php php php php php php php php php php php php php php$weekStartphp php=php selfphp:php:php_calendarDetailphp(php$localephp,php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/weekDataphp/weekendStartphp'php,php php'territoriesphp'php)php)php;
php php php php php php php php php php php php php php php php php$weekEndphp php php php=php selfphp:php:php_calendarDetailphp(php$localephp,php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/weekDataphp/weekendEndphp'php,php php'territoriesphp'php)php)php;

php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php"php/supplementalDataphp/weekDataphp/minDaysphp[php@territoriesphp=php'php"php php.php php$minDaysphp php.php php"php'php]php"php,php php'countphp'php,php php'minDaysphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php"php/supplementalDataphp/weekDataphp/firstDayphp[php@territoriesphp=php'php"php php.php php$firstDayphp php.php php"php'php]php"php,php php'dayphp'php,php php'firstDayphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php"php/supplementalDataphp/weekDataphp/weekendStartphp[php@territoriesphp=php'php"php php.php php$weekStartphp php.php php"php'php]php"php,php php'dayphp'php,php php'weekendStartphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php"php/supplementalDataphp/weekDataphp/weekendEndphp[php@territoriesphp=php'php"php php.php php$weekEndphp php.php php"php'php]php"php,php php'dayphp'php,php php'weekendEndphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'quartersphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'abbreviatedphp'php]php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'formatphp\php'php]php/quarterWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'narrowphp'php]php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'formatphp\php'php]php/quarterWidthphp[php@typephp=php\php'narrowphp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'formatphp'php]php[php'widephp'php]php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'formatphp\php'php]php/quarterWidthphp[php@typephp=php\php'widephp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'abbreviatedphp'php]php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/quarterWidthphp[php@typephp=php\php'abbreviatedphp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'narrowphp'php]php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/quarterWidthphp[php@typephp=php\php'narrowphp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'standphp-alonephp'php]php[php'widephp'php]php php php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'standphp-alonephp\php'php]php/quarterWidthphp[php@typephp=php\php'widephp\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'quarterphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/quarterWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/quarterphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'erasphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp[php'namesphp'php]php php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/erasphp/eraNamesphp/eraphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'abbreviatedphp'php]php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/erasphp/eraAbbrphp/eraphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'narrowphp'php]php php php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/erasphp/eraNarrowphp/eraphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'eraphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"Abbrphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/erasphp/eraphp'php php.php php$valuephp[php1php]php php.php php'php/eraphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'datephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'fullphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'fullphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'longphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'mediumphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'mediumphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'shortphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'shortphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'fullphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'fullphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'longphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'mediumphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'mediumphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'shortphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'shortphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'datetimephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$timefullphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'fullphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'fullphp'php)php;
php php php php php php php php php php php php php php php php php$timelongphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'longphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$timemediphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'mediumphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'mediphp'php)php;
php php php php php php php php php php php php php php php php php$timeshorphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'shortphp\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'shorphp'php)php;

php php php php php php php php php php php php php php php php php$datefullphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'fullphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'fullphp'php)php;
php php php php php php php php php php php php php php php php php$datelongphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'longphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$datemediphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'mediumphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'mediphp'php)php;
php php php php php php php php php php php php php php php php php$dateshorphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'shortphp\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'shorphp'php)php;

php php php php php php php php php php php php php php php php php$fullphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/dateTimeFormatLengthphp[php@typephp=php\php'fullphp\php'php]php/dateTimeFormatphp/patternphp'php,php php'php'php,php php'fullphp'php)php;
php php php php php php php php php php php php php php php php php$longphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/dateTimeFormatLengthphp[php@typephp=php\php'longphp\php'php]php/dateTimeFormatphp/patternphp'php,php php'php'php,php php'longphp'php)php;
php php php php php php php php php php php php php php php php php$mediphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/dateTimeFormatLengthphp[php@typephp=php\php'mediumphp\php'php]php/dateTimeFormatphp/patternphp'php,php php'php'php,php php'mediphp'php)php;
php php php php php php php php php php php php php php php php php$shorphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/dateTimeFormatLengthphp[php@typephp=php\php'shortphp\php'php]php/dateTimeFormatphp/patternphp'php,php php'php'php,php php'shorphp'php)php;

php php php php php php php php php php php php php php php php php$tempphp[php'fullphp'php]php php php php=php strphp_replacephp(arrayphp(php'php{php0php}php'php,php php'php{php1php}php'php)php,php arrayphp(php$timefullphp[php'fullphp'php]php,php php$datefullphp[php'fullphp'php]php)php,php php$fullphp[php'fullphp'php]php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'longphp'php]php php php php=php strphp_replacephp(arrayphp(php'php{php0php}php'php,php php'php{php1php}php'php)php,php arrayphp(php$timelongphp[php'longphp'php]php,php php$datelongphp[php'longphp'php]php)php,php php$longphp[php'longphp'php]php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'mediumphp'php]php php=php strphp_replacephp(arrayphp(php'php{php0php}php'php,php php'php{php1php}php'php)php,php arrayphp(php$timemediphp[php'mediphp'php]php,php php$datemediphp[php'mediphp'php]php)php,php php$mediphp[php'mediphp'php]php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'shortphp'php]php php php=php strphp_replacephp(arrayphp(php'php{php0php}php'php,php php'php{php1php}php'php)php,php arrayphp(php$timeshorphp[php'shorphp'php]php,php php$dateshorphp[php'shorphp'php]php)php,php php$shorphp[php'shorphp'php]php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dateitemphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/availableFormatsphp/dateFormatItemphp'php,php php'idphp'php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/availableFormatsphp/dateFormatItemphp[php@idphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dateintervalphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/intervalFormatsphp/intervalFormatItemphp'php,php php'idphp'php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp[php$keyphp]php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateTimeFormatsphp/intervalFormatsphp/intervalFormatItemphp[php@idphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/greatestDifferencephp'php,php php'idphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'fieldphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp2php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/fieldsphp/fieldphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$tempphp2php asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/fieldsphp/fieldphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'relativephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/fieldsphp/fieldphp/relativephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'symbolsphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/decimalphp'php,php php php php php php php php php php'php'php,php php'decimalphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/groupphp'php,php php php php php php php php php php php php'php'php,php php'groupphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/listphp'php,php php php php php php php php php php php php php'php'php,php php'listphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/percentSignphp'php,php php php php php php'php'php,php php'percentphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/nativeZeroDigitphp'php,php php'php'php,php php'zerophp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/patternDigitphp'php,php php php php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/plusSignphp'php,php php php php php php php php php'php'php,php php'plusphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/minusSignphp'php,php php php php php php php php'php'php,php php'minusphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/exponentialphp'php,php php php php php php'php'php,php php'exponentphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/perMillephp'php,php php php php php php php php php'php'php,php php'millephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/infinityphp'php,php php php php php php php php php'php'php,php php'infinityphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/symbolsphp/nanphp'php,php php php php php php php php php php php php php php'php'php,php php'nanphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'nametocurrencyphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencytonamephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$valphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$valphp[php$keyphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencysymbolphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/symbolphp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'questionphp'php:
php php php php php php php php php php php php php php php php php$tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/posixphp/messagesphp/yesstrphp'php,php php php'php'php,php php'yesphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/posixphp/messagesphp/nostrphp'php,php php php php'php'php,php php'nophp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencyfractionphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp'php,php php'isophp4php2php1php7php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp[php@isophp4php2php1php7php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'digitsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencyroundingphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp'php,php php'isophp4php2php1php7php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp[php@isophp4php2php1php7php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'roundingphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencytoregionphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp'php,php php'isophp3php1php6php6php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp[php@isophp3php1php6php6php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/currencyphp'php,php php'isophp4php2php1php7php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'regiontocurrencyphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp'php,php php'isophp3php1php6php6php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp[php@isophp3php1php6php6php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/currencyphp'php,php php'isophp4php2php1php7php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$valphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$valphp[php$keyphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'regiontoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'containsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytoregionphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'containsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'scripttolanguagephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'scriptsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'languagetoscriptphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'scriptsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$foundphp3php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytolanguagephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'territoriesphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'languagetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'territoriesphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$foundphp3php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetowindowsphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp'php,php php'otherphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp[php@otherphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'typephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'windowstotimezonephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp[php@typephp=php\php'php'php php.php$keyphp php.php php'php\php'php]php'php,php php'otherphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytotimezonephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'territoryphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp'php,php php'territoryphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp[php@territoryphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'typephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'citytotimezonephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/exemplarCityphp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetocityphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/exemplarCityphp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$tempphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'phonetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp'php,php php'territoryphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp[php@territoryphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/telephoneCountryCodephp'php,php php'codephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytophonephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp'php,php php'territoryphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp[php@territoryphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/telephoneCountryCodephp'php,php php'codephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$valphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$valphp[php$keyphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'numerictoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'numericphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytonumericphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp'php,php php'numericphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@numericphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'typephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'alphaphp3toterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'alphaphp3php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytoalphaphp3php'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp'php,php php'alphaphp3php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@alphaphp3php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'typephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'postaltoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'postalCodeDataphp'php,php php'php/supplementalDataphp/postalCodeDataphp/postCodeRegexphp'php,php php'territoryIdphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'postalCodeDataphp'php,php php'php/supplementalDataphp/postalCodeDataphp/postCodeRegexphp[php@territoryIdphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'territoryIdphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'numberingsystemphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'numberingSystemsphp'php,php php'php/supplementalDataphp/numberingSystemsphp/numberingSystemphp'php,php php'idphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'numberingSystemsphp'php,php php'php/supplementalDataphp/numberingSystemsphp/numberingSystemphp[php@idphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'digitsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'chartofallbackphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp'php,php php'valuephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp2php php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp[php@valuephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/substitutephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php$tempphp[currentphp(php$tempphp2php)php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'fallbacktocharphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp'php,php php'valuephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp[php@valuephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/substitutephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'localeupgradephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'likelySubtagsphp'php,php php'php/supplementalDataphp/likelySubtagsphp/likelySubtagphp'php,php php'fromphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php'likelySubtagsphp'php,php php'php/supplementalDataphp/likelySubtagsphp/likelySubtagphp[php@fromphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'tophp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'unitphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/unitsphp/unitphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/unitsphp/unitphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/unitPatternphp'php,php php'countphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$tempphp[php$keyphp]php php=php php$php_tempphp2php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Exceptionphp(php"Unknownphp listphp php(php$pathphp)php forphp parsingphp localephp dataphp.php"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php serializephp(php$tempphp)php,php php$idphp,php arrayphp(php'Zendphp_Localephp'php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php serializephp(php$tempphp)php,php php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$tempphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp thephp LDMLphp filephp,php getphp aphp singlephp pathphp definedphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp staticphp functionphp getContentphp(php$localephp,php php$pathphp,php php$valuephp php=php falsephp)
php php php php php{
php php php php php php php php php$localephp php=php selfphp:php:php_checkLocalephp(php$localephp)php;

php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$php_cachephp)php php&php&php php!selfphp:php:php$php_cacheDisabledphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cachephp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_cachephp php=php Zendphp_Cachephp:php:factoryphp(
php php php php php php php php php php php php php php php php php'Corephp'php,
php php php php php php php php php php php php php php php php php'Filephp'php,
php php php php php php php php php php php php php php php php arrayphp(php'automaticphp_serializationphp'php php=php>php truephp)php,
php php php php php php php php php php php php php php php php arrayphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$valphp php=php php$valuephp;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valphp php=php implodephp(php'php_php'php php,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$valphp php=php urlencodephp(php$valphp)php;
php php php php php php php php php$idphp php=php strtrphp(php'Zendphp_LocaleCphp_php'php php.php php$localephp php.php php'php_php'php php.php php$pathphp php.php php'php_php'php php.php php$valphp,php arrayphp(php'php-php'php php=php>php php'php_php'php,php php'php%php'php php=php>php php'php_php'php,php php'php+php'php php=php>php php'php_php'php)php)php;
php php php php php php php php ifphp php(php!selfphp:php:php$php_cacheDisabledphp php&php&php php(php$resultphp php=php selfphp:php:php$php_cachephp-php>loadphp(php$idphp)php)php)php php{
php php php php php php php php php php php php returnphp unserializephp(php$resultphp)php;
php php php php php php php php php}

php php php php php php php php switchphp(strtolowerphp(php$pathphp)php)php php{
php php php php php php php php php php php php casephp php'languagephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/languagesphp/languagephp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'scriptphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/scriptsphp/scriptphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'countryphp'php:
php php php php php php php php php php php php casephp php'territoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/territoriesphp/territoryphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'variantphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/variantsphp/variantphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'keyphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/localeDisplayNamesphp/keysphp/keyphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'defaultcalendarphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'monthcontextphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp php(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/defaultphp'php,php php'choicephp'php,php php'contextphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'defaultmonthphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp php(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'formatphp\php'php]php/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'monthphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/monthsphp/monthContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/monthWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/monthphp[php@typephp=php\php'php'php php.php php$valuephp[php3php]php php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'daycontextphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/defaultphp'php,php php'choicephp'php,php php'contextphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'defaultdayphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'formatphp\php'php]php/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dayphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/daysphp/dayContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/dayWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/dayphp[php@typephp=php\php'php'php php.php php$valuephp[php3php]php php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'quarterphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"formatphp"php,php php"widephp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/quartersphp/quarterContextphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/quarterWidthphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php/quarterphp[php@typephp=php\php'php'php php.php php$valuephp[php3php]php php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'amphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/amphp'php,php php'php'php,php php'amphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'pmphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/pmphp'php,php php'php'php,php php'pmphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'eraphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"Abbrphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/erasphp/eraphp'php php.php php$valuephp[php1php]php php.php php'php/eraphp[php@typephp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'defaultdatephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/dateFormatsphp/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'datephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"mediumphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'defaulttimephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"gregorianphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/timeFormatsphp/defaultphp'php,php php'choicephp'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"mediumphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'datetimephp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"mediumphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$datephp php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/dateFormatsphp/dateFormatLengthphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/dateFormatphp/patternphp'php,php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php php$timephp php php php php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/timeFormatsphp/timeFormatLengthphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/timeFormatphp/patternphp'php,php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php php$datetimephp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/dateTimeFormatsphp/dateTimeFormatLengthphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/dateTimeFormatphp/patternphp'php,php php'php'php,php php'patternphp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php=php strphp_replacephp(arrayphp(php'php{php0php}php'php,php php'php{php1php}php'php)php,php arrayphp(currentphp(php$timephp)php,php currentphp(php$datephp)php)php,php currentphp(php$datetimephp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dateitemphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"yyMMddphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/dateTimeFormatsphp/availableFormatsphp/dateFormatItemphp[php@idphp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php'php,php php'php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'dateintervalphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php"yMdphp"php,php php"yphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp,php php$tempphp[php0php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/dateTimeFormatsphp/intervalFormatsphp/intervalFormatItemphp[php@idphp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/greatestDifferencephp[php@idphp=php\php'php'php php.php php$valuephp[php2php]php php.php php'php\php'php]php'php,php php'php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'fieldphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/fieldsphp/fieldphp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$valuephp[php1php]php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'relativephp'php:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php"gregorianphp"php,php php$tempphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/calendarsphp/calendarphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/fieldsphp/fieldphp/relativephp[php@typephp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php'php,php php'php'php,php php$valuephp[php1php]php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'decimalnumberphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/decimalFormatsphp/decimalFormatLengthphp/decimalFormatphp/patternphp'php,php php'php'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'scientificnumberphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/scientificFormatsphp/scientificFormatLengthphp/scientificFormatphp/patternphp'php,php php'php'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'percentnumberphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/percentFormatsphp/percentFormatLengthphp/percentFormatphp/patternphp'php,php php'php'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencynumberphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currencyFormatsphp/currencyFormatLengthphp/currencyFormatphp/patternphp'php,php php'php'php,php php'defaultphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'nametocurrencyphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencytonamephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/displayNamephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$valphp[php$keyphp]php)php orphp php(php$valphp[php$keyphp]php php!php=php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$valphp[php$keyphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencysymbolphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/numbersphp/currenciesphp/currencyphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/symbolphp'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'questionphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/posixphp/messagesphp/php'php php.php php$valuephp php.php php'strphp'php,php php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencyfractionphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"DEFAULTphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp[php@isophp4php2php1php7php=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'digitsphp'php,php php'digitsphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencyroundingphp'php:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php"DEFAULTphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/fractionsphp/infophp[php@isophp4php2php1php7php=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'roundingphp'php,php php'roundingphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'currencytoregionphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp[php@isophp3php1php6php6php=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/currencyphp'php,php php'isophp4php2php1php7php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'regiontocurrencyphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp'php,php php'isophp3php1php6php6php'php)php;
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/currencyDataphp/regionphp[php@isophp3php1php6php6php=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/currencyphp'php,php php'isophp4php2php1php7php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$valphp[php$keyphp]php)php orphp php(php$valphp[php$keyphp]php php!php=php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$valphp[php$keyphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$valphp[php$keyphp]php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'regiontoterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'containsphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytoregionphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/territoryContainmentphp/groupphp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'containsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp3php php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'scripttolanguagephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'scriptsphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'languagetoscriptphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'scriptsphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp3php php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytolanguagephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'territoriesphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'languagetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/languageDataphp/languagephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php'php,php php'territoriesphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp3php php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetowindowsphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp[php@otherphp=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'typephp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'windowstotimezonephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/mapTimezonesphp[php@typephp=php\php'windowsphp\php'php]php/mapZonephp[php@typephp=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'otherphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytotimezonephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'territoryphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/timezoneDataphp/zoneFormattingphp/zoneItemphp[php@territoryphp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'typephp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'citytotimezonephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp[php@typephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/exemplarCityphp'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'timezonetocityphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp'php,php php'typephp'php)php;
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php+php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/datesphp/timeZoneNamesphp/zonephp[php@typephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/exemplarCityphp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$tempphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$tempphp[php$keyphp]php php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$tempphp[php$keyphp]php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php unsetphp(php$tempphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'phonetoterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp[php@territoryphp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/telephoneCountryCodephp'php,php php'codephp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytophonephp'php:
php php php php php php php php php php php php php php php php php$php_tempphp2php php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp'php,php php'territoryphp'php)php;
php php php php php php php php php php php php php php php php php$php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp2php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp php+php=php selfphp:php:php_getFilephp(php'telephoneCodeDataphp'php,php php'php/supplementalDataphp/telephoneCodeDataphp/codesByTerritoryphp[php@territoryphp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/telephoneCountryCodephp'php,php php'codephp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_tempphp3php php=php explodephp(php"php php"php,php php$foundphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$php_tempphp3php asphp php$foundphp3php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp3php php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$tempphp[php$foundphp3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp[php$foundphp3php]php php.php=php php"php php"php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'numerictoterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@typephp=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'numericphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytonumericphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@numericphp=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'typephp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'alphaphp3toterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@typephp=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'alphaphp3php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'territorytoalphaphp3php'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'supplementalDataphp'php,php php'php/supplementalDataphp/codeMappingsphp/territoryCodesphp[php@alphaphp3php=php\php'php'php.php$valuephp.php'php\php'php]php'php,php php'typephp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'postaltoterritoryphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'postalCodeDataphp'php,php php'php/supplementalDataphp/postalCodeDataphp/postCodeRegexphp[php@territoryIdphp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'territoryIdphp'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'numberingsystemphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'numberingSystemsphp'php,php php'php/supplementalDataphp/numberingSystemsphp/numberingSystemphp[php@idphp=php\php'php'php php.php strtolowerphp(php$valuephp)php php.php php'php\php'php]php'php,php php'digitsphp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'chartofallbackphp'php:
php php php php php php php php php php php php php php php php php$php_tempphp php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp'php,php php'valuephp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$php_tempphp asphp php$keyphp php=php>php php$keyvaluephp)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp2php php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp[php@valuephp=php\php'php'php php.php php$keyphp php.php php'php\php'php]php/substitutephp'php,php php'php'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(currentphp(php$tempphp2php)php php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp[php@valuephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/substitutephp'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'fallbacktocharphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'charactersphp'php,php php'php/supplementalDataphp/charactersphp/characterphp-fallbackphp/characterphp[php@valuephp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php/substitutephp'php,php php'php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'localeupgradephp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php'likelySubtagsphp'php,php php'php/supplementalDataphp/likelySubtagsphp/likelySubtagphp[php@fromphp=php\php'php'php php.php php$valuephp php.php php'php\php'php]php'php,php php'tophp'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'unitphp'php:
php php php php php php php php php php php php php php php php php$tempphp php=php selfphp:php:php_getFilephp(php$localephp,php php'php/ldmlphp/unitsphp/unitphp[php@typephp=php\php'php'php php.php php$valuephp[php0php]php php.php php'php\php'php]php/unitPatternphp[php@countphp=php\php'php'php php.php php$valuephp[php1php]php php.php php'php\php'php]php'php,php php'php'php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Exceptionphp(php"Unknownphp detailphp php(php$pathphp)php forphp parsingphp localephp dataphp.php"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$tempphp)php)php php{
php php php php php php php php php php php php php$tempphp php=php currentphp(php$tempphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_cachephp)php)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php serializephp(php$tempphp)php,php php$idphp,php arrayphp(php'Zendphp_Localephp'php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php serializephp(php$tempphp)php,php php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$tempphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp cache
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Corephp Thephp setphp cache
php php php php php php*php/
php php php php publicphp staticphp functionphp getCachephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp cachephp forphp Zendphp_Localephp_Data
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Corephp php$cachephp Aphp cachephp frontend
php php php php php php*php/
php php php php publicphp staticphp functionphp setCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php php$cachephp;
php php php php php php php php selfphp:php:php_getTagSupportForCachephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp aphp cachephp isphp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasCachephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_cachephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp anyphp setphp cache
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeCachephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp allphp setphp cachephp data
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearCachephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_cacheTagsphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp,php arrayphp(php'Zendphp_Localephp'php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Disablesphp thephp cache
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$flag
php php php php php php*php/
php php php php publicphp staticphp functionphp disableCachephp(php$flagphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_cacheDisabledphp php=php php(booleanphp)php php$flagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp checkphp ifphp thephp givenphp cachephp supportsphp tags
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp php$cache
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getTagSupportForCachephp(php)
php php php php php{
php php php php php php php php php$backendphp php=php selfphp:php:php$php_cachephp-php>getBackendphp(php)php;
php php php php php php php php ifphp php(php$backendphp instanceofphp Zendphp_Cachephp_Backendphp_ExtendedInterfacephp)php php{
php php php php php php php php php php php php php$cacheOptionsphp php=php php$backendphp-php>getCapabilitiesphp(php)php;
php php php php php php php php php php php php selfphp:php:php$php_cacheTagsphp php=php php$cacheOptionsphp[php'tagsphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$php_cacheTagsphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_cacheTagsphp;
php php php php php}
php}
