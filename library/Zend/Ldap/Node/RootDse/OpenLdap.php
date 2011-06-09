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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp RootDSE
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php OpenLdapphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDse
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/RootDsephp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_RootDsephp providesphp aphp simplephp dataphp-containerphp forphp thephp RootDSEphp nodephp of
php php*php anphp OpenLDAPphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp RootDSE
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_RootDsephp_OpenLdapphp extendsphp Zendphp_Ldapphp_Nodephp_RootDse
php{
php php php php php/php*php*
php php php php php php*php Getsphp thephp configContextphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getConfigContextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'configContextphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp monitorContextphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getMonitorContextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'monitorContextphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp thephp controlphp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$oidsphp controlphp oidphp(sphp)php tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp supportsControlphp(php$oidsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>attributeHasValuephp(php'supportedControlphp'php,php php$oidsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp thephp extensionphp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$oidsphp oidphp(sphp)php tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp supportsExtensionphp(php$oidsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>attributeHasValuephp(php'supportedExtensionphp'php,php php$oidsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp thephp featurephp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$oidsphp featurephp oidphp(sphp)php tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp supportsFeaturephp(php$oidsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>attributeHasValuephp(php'supportedFeaturesphp'php,php php$oidsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp type
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getServerTypephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:SERVERphp_TYPEphp_OPENLDAPphp;
php php php php php}
php}