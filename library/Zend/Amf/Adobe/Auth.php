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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Authphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Amfphp_Authphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Authphp/Abstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Aclphp php*php/
requirephp_oncephp php'Zendphp/Aclphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Authphp_Resultphp php*php/
requirephp_oncephp php'Zendphp/Authphp/Resultphp.phpphp'php;

php/php*php*
php php*php Thisphp classphp implementsphp authenticationphp againstphp XMLphp filephp withphp rolesphp forphp Flexphp Builderphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Adobe
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Adobephp_Authphp extendsphp Zendphp_Amfphp_Authphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php ACLphp forphp authorization
php php php php php php*
php php php php php php*php php@varphp Zendphp_Acl
php php php php php php*php/
php php php php protectedphp php$php_aclphp;

php php php php php/php*php*
php php php php php php*php Usernamephp/passwordphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_usersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Createphp authphp adapter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rolefilephp Filephp containingphp XMLphp withphp usersphp andphp roles
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$rolefilephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_aclphp php=php newphp Zendphp_Aclphp(php)php;
php php php php php php php php php$xmlphp php=php simplexmlphp_loadphp_filephp(php$rolefilephp)php;
php/php*
Rolesphp filephp formatphp:
php php<rolesphp>
php php php php<rolephp idphp=php”adminphp”php>
php php php php php php php php php<userphp namephp=php”userphp1php”php passwordphp=php”pwdphp”php/php>
php php php php <php/rolephp>
php php php php<rolephp idphp=php”hrphp”php>
php php php php php php php php php<userphp namephp=php”userphp2php”php passwordphp=php”pwdphp2php”php/php>
php php php php <php/rolephp>
<php/rolesphp>
php*php/
php php php php php php php php foreachphp(php$xmlphp-php>rolephp asphp php$rolephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_aclphp-php>addRolephp(newphp Zendphp_Aclphp_Rolephp(php(stringphp)php$rolephp[php"idphp"php]php)php)php;
php php php php php php php php php php php php foreachphp(php$rolephp-php>userphp asphp php$userphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_usersphp[php(stringphp)php$userphp[php"namephp"php]php]php php=php arrayphp(php"passwordphp"php php=php>php php(stringphp)php$userphp[php"passwordphp"php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php"rolephp"php php=php>php php(stringphp)php$rolephp[php"idphp"php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp ACLphp withphp rolesphp fromphp XMLphp file
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Acl
php php php php php php*php/
php php php php publicphp functionphp getAclphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp authentication
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Interfacephp#authenticatephp(php)
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_usernamephp)php php|php|
php php php php php php php php php php php php emptyphp(php$thisphp-php>php_passwordphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php'Usernamephp/passwordphp shouldphp bephp setphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_usersphp[php$thisphp-php>php_usernamephp]php)php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp,
php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php arrayphp(php'Usernamephp notphp foundphp'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$userphp php=php php$thisphp-php>php_usersphp[php$thisphp-php>php_usernamephp]php;
php php php php php php php php ifphp(php$userphp[php"passwordphp"php]php php!php=php php$thisphp-php>php_passwordphp)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp,
php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php arrayphp(php'Authenticationphp failedphp'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$idphp php=php newphp stdClassphp(php)php;
php php php php php php php php php$idphp-php>rolephp php=php php$userphp[php"rolephp"php]php;
php php php php php php php php php$idphp-php>namephp php=php php$thisphp-php>php_usernamephp;
php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:SUCCESSphp,php php$idphp)php;
php php php php php}
php}
