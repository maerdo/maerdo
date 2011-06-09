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
php php*php php@versionphp php php php php$Idphp:php eDirectoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDse
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/RootDsephp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_RootDsephp providesphp aphp simplephp dataphp-containerphp forphp thephp RootDSEphp nodephp of
php php*php aphp Novellphp eDirectoryphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp RootDSE
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_RootDsephp_eDirectoryphp extendsphp Zendphp_Ldapphp_Nodephp_RootDse
php{
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
php php php php php php*php Getsphp thephp vendorNamephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getVendorNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'vendorNamephp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp vendorVersionphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getVendorVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'vendorVersionphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp dsaNamephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDsaNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'dsaNamephp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"errorsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'errorsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"securityErrorsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsSecurityErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'securityErrorsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"chainingsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsChainingsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'chainingsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"referralsReturnedphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsReferralsReturnedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'referralsReturnedphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"extendedOpsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsExtendedOpsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'extendedOpsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"abandonOpsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsAbandonOpsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'abandonOpsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp statisticsphp php"wholeSubtreeSearchOpsphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStatisticsWholeSubtreeSearchOpsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'wholeSubtreeSearchOpsphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp type
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getServerTypephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:SERVERphp_TYPEphp_EDIRECTORYphp;
php php php php php}
php}