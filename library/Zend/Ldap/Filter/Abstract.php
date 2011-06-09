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
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Filterphp_Abstractphp providesphp aphp basephp implementationphp forphp filtersphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Ldapphp_Filterphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp filterphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp toStringphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp filterphp.
php php php php php php*php php@seephp toStringphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Negatesphp thephp filterphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Filterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp negatephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Zendphp_Ldapphp_Filterphp_Not
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Notphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Ldapphp_Filterphp_Notphp(php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp anphp php'andphp'php filterphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Filterphp_Abstractphp php$filterphp,php.php.php.
php php php php php php*php php@returnphp Zendphp_Ldapphp_Filterphp_And
php php php php php php*php/
php php php php publicphp functionphp addAndphp(php$filterphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Zendphp_Ldapphp_Filterphp_And
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Andphp.phpphp'php;
php php php php php php php php php$faphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php$argsphp php=php arrayphp_mergephp(arrayphp(php$thisphp)php,php php$faphp)php;
php php php php php php php php returnphp newphp Zendphp_Ldapphp_Filterphp_Andphp(php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp anphp php'orphp'php filterphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Filterphp_Abstractphp php$filterphp,php.php.php.
php php php php php php*php php@returnphp Zendphp_Ldapphp_Filterphp_Or
php php php php php php*php/
php php php php publicphp functionphp addOrphp(php$filterphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Zendphp_Ldapphp_Filterphp_Or
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Orphp.phpphp'php;
php php php php php php php php php$faphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php$argsphp php=php arrayphp_mergephp(arrayphp(php$thisphp)php,php php$faphp)php;
php php php php php php php php returnphp newphp Zendphp_Ldapphp_Filterphp_Orphp(php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Escapesphp thephp givenphp VALUESphp accordingphp tophp RFCphp php2php2php5php4php sophp thatphp theyphp canphp bephp safelyphp usedphp inphp LDAPphp filtersphp.
php php php php php php*
php php php php php php*php Anyphp controlphp charactersphp withphp anphp ACIIphp codephp <php php3php2php asphp wellphp asphp thephp charactersphp withphp specialphp meaningphp in
php php php php php php*php LDAPphp filtersphp php"php*php"php,php php"php(php"php,php php"php)php"php,php andphp php"php\php"php php(thephp backslashphp)php arephp convertedphp intophp thephp representationphp ofphp a
php php php php php php*php backslashphp followedphp byphp twophp hexphp digitsphp representingphp thephp hexadecimalphp valuephp ofphp thephp characterphp.
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:escapephp_filterphp_valuephp(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuesphp Arrayphp ofphp valuesphp tophp escape
php php php php php php*php php@returnphp arrayphp Arrayphp php$valuesphp,php butphp escaped
php php php php php php*php/
php php php php publicphp staticphp functionphp escapeValuephp(php$valuesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Converter
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Converterphp.phpphp'php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php)php php$valuesphp php=php arrayphp(php$valuesphp)php;
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php/php/php Escapingphp ofphp filterphp metaphp characters
php php php php php php php php php php php php php$valphp php=php strphp_replacephp(arrayphp(php'php\php\php'php,php php'php*php'php,php php'php(php'php,php php'php)php'php)php,php arrayphp(php'php\php5cphp'php,php php'php\php2aphp'php,php php'php\php2php8php'php,php php'php\php2php9php'php)php,php php$valphp)php;
php php php php php php php php php php php php php/php/php ASCIIphp <php php3php2php escaping
php php php php php php php php php php php php php$valphp php=php Zendphp_Ldapphp_Converterphp:php:ascToHexphp3php2php(php$valphp)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$valphp)php php$valphp php=php php'php\php0php'php;php php php/php/php applyphp escapedphp php"nullphp"php ifphp stringphp isphp empty
php php php php php php php php php php php php php$valuesphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php(countphp(php$valuesphp)php php=php=php php1php)php php?php php$valuesphp[php0php]php php:php php$valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Undoesphp thephp conversionphp donephp byphp php{php@linkphp escapeValuephp(php)php}php.
php php php php php php*
php php php php php php*php Convertsphp anyphp sequencesphp ofphp aphp backslashphp followedphp byphp twophp hexphp digitsphp intophp thephp correspondingphp characterphp.
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:escapephp_filterphp_valuephp(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuesphp Arrayphp ofphp valuesphp tophp escape
php php php php php php*php php@returnphp arrayphp Arrayphp php$valuesphp,php butphp unescaped
php php php php php php*php/
php php php php publicphp staticphp functionphp unescapeValuephp(php$valuesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Converter
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Converterphp.phpphp'php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php)php php$valuesphp php=php arrayphp(php$valuesphp)php;
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php/php/php Translatephp hexphp codephp intophp ascii
php php php php php php php php php php php php php$valuesphp[php$keyphp]php php=php Zendphp_Ldapphp_Converterphp:php:hexphp3php2ToAscphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php(countphp(php$valuesphp)php php=php=php php1php)php php?php php$valuesphp[php0php]php php:php php$valuesphp;
php php php php php}
php}