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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dnphp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Dnphp providesphp anphp APIphp forphp DNphp manipulation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Dnphp implementsphp ArrayAccess
php{
php php php php constphp ATTRphp_CASEFOLDphp_NONEphp php php=php php'nonephp'php;
php php php php constphp ATTRphp_CASEFOLDphp_UPPERphp php=php php'upperphp'php;
php php php php constphp ATTRphp_CASEFOLDphp_LOWERphp php=php php'lowerphp'php;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp casephp foldphp tophp use
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultCaseFoldphp php=php selfphp:php:ATTRphp_CASEFOLDphp_NONEphp;

php php php php php/php*php*
php php php php php php*php Thephp casephp foldphp usedphp forphp thisphp instance
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_caseFoldphp;

php php php php php/php*php*
php php php php php php*php Thephp DNphp data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dnphp;

php php php php php/php*php*
php php php php php php*php Createsphp aphp DNphp fromphp anphp arrayphp orphp aphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$dn
php php php php php php*php php@paramphp php stringphp|nullphp php php$caseFold
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$dnphp,php php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$dnphp)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:fromArrayphp(php$dnphp,php php$caseFoldphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$dnphp)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:fromStringphp(php$dnphp,php php$caseFoldphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Invalidphp argumentphp typephp forphp php$dnphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp DNphp fromphp aphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$dn
php php php php php php*php php@paramphp php stringphp|nullphp php$caseFold
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromStringphp(php$dnphp,php php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$dnphp php=php trimphp(php$dnphp)php;
php php php php php php php php ifphp php(emptyphp(php$dnphp)php)php php{
php php php php php php php php php php php php php$dnArrayphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dnArrayphp php=php selfphp:php:explodeDnphp(php(stringphp)php$dnphp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp selfphp(php$dnArrayphp,php php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp DNphp fromphp anphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php$dn
php php php php php php*php php@paramphp php stringphp|nullphp php$caseFold
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromArrayphp(arrayphp php$dnphp,php php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php returnphp newphp selfphp(php$dnphp,php php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php php php php php php$dn
php php php php php php*php php@paramphp stringphp|nullphp php$caseFold
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(arrayphp php$dnphp,php php$caseFoldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dnphp php=php php$dnphp;
php php php php php php php php php$thisphp-php>setCaseFoldphp(php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp RDNphp ofphp thephp currentphp DN
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp DNphp hasphp nophp RDNphp php(emptyphp arrayphp)
php php php php php php*php/
php php php php publicphp functionphp getRdnphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php php$thisphp-php>php_caseFoldphp)php;
php php php php php php php php returnphp selfphp:php:php_caseFoldRdnphp(php$thisphp-php>getphp(php0php,php php1php,php php$caseFoldphp)php,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp RDNphp ofphp thephp currentphp DNphp asphp aphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp DNphp hasphp nophp RDNphp php(emptyphp arrayphp)
php php php php php php*php/
php php php php publicphp functionphp getRdnStringphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php php$thisphp-php>php_caseFoldphp)php;
php php php php php php php php returnphp selfphp:php:implodeRdnphp(php$thisphp-php>getRdnphp(php)php,php php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp parentphp DNphp php$levelUpphp levelsphp upphp thephp tree
php php php php php php*
php php php php php php*php php@paramphp php intphp php$levelUp
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php publicphp functionphp getParentDnphp(php$levelUpphp php=php php1php)
php php php php php{
php php php php php php php php php$levelUpphp php=php php(intphp)php$levelUpphp;
php php php php php php php php ifphp php(php$levelUpphp <php php1php php|php|php php$levelUpphp php>php=php countphp(php$thisphp-php>php_dnphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Cannotphp retrievephp parentphp DNphp withphp givenphp php$levelUpphp'php)php;
php php php php php php php php php}
php php php php php php php php php$newDnphp php=php arrayphp_slicephp(php$thisphp-php>php_dnphp,php php$levelUpphp)php;
php php php php php php php php returnphp newphp selfphp(php$newDnphp,php php$thisphp-php>php_caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php$index
php php php php php php*php php@paramphp php intphp php php php php$length
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp indexphp isphp illegal
php php php php php php*php/
php php php php publicphp functionphp getphp(php$indexphp,php php$lengthphp php=php php1php,php php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php php$thisphp-php>php_caseFoldphp)php;
php php php php php php php php php$thisphp-php>php_assertIndexphp(php$indexphp)php;
php php php php php php php php php$lengthphp php=php php(intphp)php$lengthphp;
php php php php php php php php ifphp php(php$lengthphp <php=php php0php)php php{
php php php php php php php php php php php php php$lengthphp php=php php1php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$lengthphp php=php=php=php php1php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php_caseFoldRdnphp(php$thisphp-php>php_dnphp[php$indexphp]php,php php$caseFoldphp)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php returnphp selfphp:php:php_caseFoldDnphp(arrayphp_slicephp(php$thisphp-php>php_dnphp,php php$indexphp,php php$lengthphp,php falsephp)php,php php$caseFoldphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php$index
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dnphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp indexphp isphp illegal
php php php php php php*php/
php php php php publicphp functionphp setphp(php$indexphp,php arrayphp php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertIndexphp(php$indexphp)php;
php php php php php php php php selfphp:php:php_assertRdnphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_dnphp[php$indexphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@paramphp php intphp php$length
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dnphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp indexphp isphp illegal
php php php php php php*php/
php php php php publicphp functionphp removephp(php$indexphp,php php$lengthphp php=php php1php)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertIndexphp(php$indexphp)php;
php php php php php php php php php$lengthphp php=php php(intphp)php$lengthphp;
php php php php php php php php ifphp php(php$lengthphp <php=php php0php)php php{
php php php php php php php php php php php php php$lengthphp php=php php1php;
php php php php php php php php php}
php php php php php php php php arrayphp_splicephp(php$thisphp-php>php_dnphp,php php$indexphp,php php$lengthphp,php nullphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dnphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp appendphp(arrayphp php$valuephp)
php php php php php{
php php php php php php php php selfphp:php:php_assertRdnphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_dnphp[php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Prependphp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dnphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp prependphp(arrayphp php$valuephp)
php php php php php{
php php php php php php php php selfphp:php:php_assertRdnphp(php$valuephp)php;
php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_dnphp,php php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Insertphp aphp DNphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php$index
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dnphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exceptionphp ifphp indexphp isphp illegal
php php php php php php*php/
php php php php publicphp functionphp insertphp(php$indexphp,php arrayphp php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertIndexphp(php$indexphp)php;
php php php php php php php php selfphp:php:php_assertRdnphp(php$valuephp)php;
php php php php php php php php php$firstphp php=php arrayphp_slicephp(php$thisphp-php>php_dnphp,php php0php,php php$indexphp php+php php1php)php;
php php php php php php php php php$secondphp php=php arrayphp_slicephp(php$thisphp-php>php_dnphp,php php$indexphp php+php php1php)php;
php php php php php php php php php$thisphp-php>php_dnphp php=php arrayphp_mergephp(php$firstphp,php arrayphp(php$valuephp)php,php php$secondphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assertphp indexphp isphp correctphp andphp usable
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$index
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_assertIndexphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$indexphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Parameterphp php$indexphp mustphp bephp anphp integerphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$indexphp <php php0php php|php|php php$indexphp php>php=php countphp(php$thisphp-php>php_dnphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Parameterphp php$indexphp outphp ofphp boundsphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assertphp ifphp valuephp isphp inphp aphp correctphp RDNphp format
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_assertRdnphp(arrayphp php$valuephp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$valuephp)<php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'RDNphp Arrayphp isphp malformedphp:php itphp mustphp havephp atphp leastphp onephp itemphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp_keysphp(php$valuephp)php asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'RDNphp Arrayphp isphp malformedphp:php itphp mustphp usephp stringphp keysphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp casephp fold
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$caseFold
php php php php php php*php/
php php php php publicphp functionphp setCaseFoldphp(php$caseFoldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php selfphp:php:php$php_defaultCaseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp DNphp asphp aphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php php$thisphp-php>php_caseFoldphp)php;
php php php php php php php php returnphp selfphp:php:implodeDnphp(php$thisphp-php>php_dnphp,php php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp DNphp asphp anphp array
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php php$caseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php php$thisphp-php>php_caseFoldphp)php;

php php php php php php php php ifphp php(php$caseFoldphp php=php=php=php selfphp:php:ATTRphp_CASEFOLDphp_NONEphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dnphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp selfphp:php:php_caseFoldDnphp(php$thisphp-php>php_dnphp,php php$caseFoldphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Dophp aphp casephp foldingphp onphp aphp RDN
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$part
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_caseFoldRdnphp(arrayphp php$partphp,php php$caseFoldphp)
php php php php php{
php php php php php php php php switchphp php(php$caseFoldphp)php php{
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_UPPERphp:
php php php php php php php php php php php php php php php php returnphp arrayphp_changephp_keyphp_casephp(php$partphp,php CASEphp_UPPERphp)php;
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_LOWERphp:
php php php php php php php php php php php php php php php php returnphp arrayphp_changephp_keyphp_casephp(php$partphp,php CASEphp_LOWERphp)php;
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_NONEphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$partphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Dophp aphp casephp foldingphp onphp aphp DNphp ortphp partphp ofphp it
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$dn
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_caseFoldDnphp(arrayphp php$dnphp,php php$caseFoldphp)
php php php php php{
php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$dnphp asphp php$partphp)php php{
php php php php php php php php php php php php php$returnphp[php]php php=php selfphp:php:php_caseFoldRdnphp(php$partphp,php php$caseFoldphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp stringphp representationphp php{php@seephp toStringphp(php)php}
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp php intphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php php$offsetphp php=php php(intphp)php$offsetphp;
php php php php php php php php ifphp php(php$offsetphp <php php0php php|php|php php$offsetphp php>php=php countphp(php$thisphp-php>php_dnphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp php{php@seephp getphp(php)php}
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php*
php php php php php php*php php@paramphp php intphp php$offset
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>getphp(php$offsetphp,php php1php,php nullphp)php;
php php php php php php}

php php php php php php/php*php*
php php php php php php php*php Proxyphp tophp php{php@seephp setphp(php)php}
php php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php php*
php php php php php php php*php php@paramphp intphp php php php$offset
php php php php php php php*php php@paramphp arrayphp php$value
php php php php php php php*php/
php php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php php{
php php php php php php php php php php$thisphp-php>setphp(php$offsetphp,php php$valuephp)php;
php php php php php php}

php php php php php php/php*php*
php php php php php php php*php Proxyphp tophp php{php@seephp removephp(php)php}
php php php php php php php*php Requiredphp byphp thephp ArrayAccessphp implementation
php php php php php php php*
php php php php php php php*php php@paramphp intphp php$offset
php php php php php php php*php/
php php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php php{
php php php php php php php php php php$thisphp-php>removephp(php$offsetphp,php php1php)php;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp defaultphp casephp fold
php php php php php php*
php php php php php php*php php@paramphp stringphp php$caseFold
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultCaseFoldphp(php$caseFoldphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultCaseFoldphp php=php selfphp:php:php_sanitizeCaseFoldphp(php$caseFoldphp,php selfphp:php:ATTRphp_CASEFOLDphp_NONEphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sanitizesphp thephp casephp fold
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_sanitizeCaseFoldphp(php$caseFoldphp,php php$defaultphp)
php php php php php{
php php php php php php php php switchphp php(php$caseFoldphp)php php{
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_NONEphp:
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_UPPERphp:
php php php php php php php php php php php php casephp selfphp:php:ATTRphp_CASEFOLDphp_LOWERphp:
php php php php php php php php php php php php php php php php returnphp php$caseFoldphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$defaultphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Escapesphp aphp DNphp valuephp accordingphp tophp RFCphp php2php2php5php3
php php php php php php*
php php php php php php*php Escapesphp thephp givenphp VALUESphp accordingphp tophp RFCphp php2php2php5php3php sophp thatphp theyphp canphp bephp safelyphp usedphp inphp LDAPphp DNsphp.
php php php php php php*php Thephp charactersphp php"php,php"php,php php"php+php"php,php php"php"php"php,php php"php\php"php,php php"<php"php,php php"php>php"php,php php"php;php"php,php php"php#php"php,php php"php php=php php"php withphp aphp specialphp meaningphp inphp RFCphp php2php2php5php2
php php php php php php*php arephp preceededphp byphp baphp backslashphp.php Controlphp charactersphp withphp anphp ASCIIphp codephp <php php3php2php arephp representedphp asphp php\hexpairphp.
php php php php php php*php Finallyphp allphp leadingphp andphp trailingphp spacesphp arephp convertedphp tophp sequencesphp ofphp php\php2php0php.
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:escapephp_dnphp_valuephp(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuesphp Anphp arrayphp containingphp thephp DNphp valuesphp thatphp shouldphp bephp escaped
php php php php php php*php php@returnphp arrayphp Thephp arrayphp php$valuesphp,php butphp escaped
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
php php php php php php php php php php php php php$valphp php=php strphp_replacephp(arrayphp(php'php\php\php'php,php php'php,php'php,php php'php+php'php,php php'php"php'php,php php'<php'php,php php'php>php'php,php php'php;php'php,php php'php#php'php,php php'php=php'php,php php)php,
php php php php php php php php php php php php php php php php arrayphp(php'php\php\php\php\php'php,php php'php\php,php'php,php php'php\php+php'php,php php'php\php"php'php,php php'php\<php'php,php php'php\php>php'php,php php'php\php;php'php,php php'php\php#php'php,php php'php\php=php'php)php,php php$valphp)php;
php php php php php php php php php php php php php$valphp php=php Zendphp_Ldapphp_Converterphp:php:ascToHexphp3php2php(php$valphp)php;

php php php php php php php php php php php php php/php/php Convertphp allphp leadingphp andphp trailingphp spacesphp tophp sequencesphp ofphp php\php2php0php.
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php\sphp*php)php(php.php+php?php)php(php\sphp*php)php$php/php'php,php php$valphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$valphp php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<strlenphp(php$matchesphp[php1php]php)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php php'php\php2php0php'php php.php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<strlenphp(php$matchesphp[php3php]php)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php php$valphp php.php php'php\php2php0php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$valphp)php php$valphp php=php php'php\php0php'php;php php php/php/php applyphp escapedphp php"nullphp"php ifphp stringphp isphp empty
php php php php php php php php php php php php php$valuesphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php(countphp(php$valuesphp)php php=php=php php1php)php php?php php$valuesphp[php0php]php php:php php$valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Undoesphp thephp conversionphp donephp byphp php{php@linkphp escapeValuephp(php)php}php.
php php php php php php*
php php php php php php*php Anyphp escapephp sequencephp startingphp withphp aphp baskslashphp php-php hexpairphp orphp specialphp characterphp php-
php php php php php php*php willphp bephp transformedphp backphp tophp thephp correspondingphp characterphp.
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:escapephp_dnphp_valuephp(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuesphp Arrayphp ofphp DNphp Values
php php php php php php*php php@returnphp arrayphp Samephp asphp php$valuesphp,php butphp unescaped
php php php php php php*php/
php php php php publicphp staticphp functionphp unescapeValuephp(php$valuesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Converter
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Converterphp.phpphp'php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php)php php$valuesphp php=php arrayphp(php$valuesphp)php;
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php/php/php stripphp slashesphp fromphp specialphp chars
php php php php php php php php php php php php php$valphp php=php strphp_replacephp(arrayphp(php'php\php\php\php\php'php,php php'php\php,php'php,php php'php\php+php'php,php php'php\php"php'php,php php'php\<php'php,php php'php\php>php'php,php php'php\php;php'php,php php'php\php#php'php,php php'php\php=php'php)php,
php php php php php php php php php php php php php php php php arrayphp(php'php\php\php'php,php php'php,php'php,php php'php+php'php,php php'php"php'php,php php'<php'php,php php'php>php'php,php php'php;php'php,php php'php#php'php,php php'php=php'php,php php)php,php php$valphp)php;
php php php php php php php php php php php php php$valuesphp[php$keyphp]php php=php Zendphp_Ldapphp_Converterphp:php:hexphp3php2ToAscphp(php$valphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php(countphp(php$valuesphp)php php=php=php php1php)php php?php php$valuesphp[php0php]php php:php php$valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp anphp arrayphp containingphp allphp partsphp ofphp thephp givenphp DNphp.
php php php php php php*
php php php php php php*php Arrayphp willphp bephp ofphp type
php php php php php php*php arrayphp(
php php php php php php*php php php php php php arrayphp(php"cnphp"php php=php>php php"namephp1php"php,php php"uidphp"php php=php>php php"userphp"php)php,
php php php php php php*php php php php php php arrayphp(php"cnphp"php php=php>php php"namephp2php"php)php,
php php php php php php*php php php php php php arrayphp(php"dcphp"php php=php>php php"examplephp"php)php,
php php php php php php*php php php php php php arrayphp(php"dcphp"php php=php>php php"orgphp"php)
php php php php php php*php php)
php php php php php php*php forphp aphp DNphp ofphp cnphp=namephp1php+uidphp=userphp,cnphp=namephp2php,dcphp=examplephp,dcphp=orgphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dn
php php php php php php*php php@paramphp php arrayphp php php$keysphp php php php php Anphp optionalphp arrayphp tophp receivephp DNphp keysphp php(ephp.gphp.php CNphp,php OUphp,php DCphp,php php.php.php.php)
php php php php php php*php php@paramphp php arrayphp php php$valsphp php php php php Anphp optionalphp arrayphp tophp receivephp DNphp values
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp explodeDnphp(php$dnphp,php arrayphp php&php$keysphp php=php nullphp,php arrayphp php&php$valsphp php=php nullphp,
php php php php php php php php php$caseFoldphp php=php selfphp:php:ATTRphp_CASEFOLDphp_NONEphp)
php php php php php{
php php php php php php php php php$kphp php=php arrayphp(php)php;
php php php php php php php php php$vphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php!selfphp:php:checkDnphp(php$dnphp,php php$kphp,php php$vphp,php php$caseFoldphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'DNphp isphp malformedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$retphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$kphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$kphp[php$iphp]php)php php&php&php isphp_arrayphp(php$vphp[php$iphp]php)php php&php&php php(countphp(php$kphp[php$iphp]php)php php=php=php=php countphp(php$vphp[php$iphp]php)php)php)php php{
php php php php php php php php php php php php php php php php php$multiphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php forphp php(php$jphp php=php php0php;php php$jphp <php countphp(php$kphp[php$iphp]php)php;php php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp=php$kphp[php$iphp]php[php$jphp]php;
php php php php php php php php php php php php php php php php php php php php php$valphp=php$vphp[php$iphp]php[php$jphp]php;
php php php php php php php php php php php php php php php php php php php php php$multiphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$retphp[php]php php=php php$multiphp;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$kphp[php$iphp]php)php php&php&php isphp_stringphp(php$vphp[php$iphp]php)php)php php{
php php php php php php php php php php php php php php php php php$retphp[php]php php=php arrayphp(php$kphp[php$iphp]php php=php>php php$vphp[php$iphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$keysphp php!php=php=php nullphp)php php$keysphp php=php php$kphp;
php php php php php php php php ifphp php(php$valsphp php!php=php=php nullphp)php php$valsphp php=php php$vphp;
php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$dnphp php php php php php php Thephp DNphp tophp parse
php php php php php php*php php@paramphp php arrayphp php php$keysphp php php php php Anphp optionalphp arrayphp tophp receivephp DNphp keysphp php(ephp.gphp.php CNphp,php OUphp,php DCphp,php php.php.php.php)
php php php php php php*php php@paramphp php arrayphp php php$valsphp php php php php Anphp optionalphp arrayphp tophp receivephp DNphp values
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp booleanphp Truephp ifphp thephp DNphp wasphp successfullyphp parsedphp orphp falsephp ifphp thephp stringphp isphp notphp aphp validphp DNphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp checkDnphp(php$dnphp,php arrayphp php&php$keysphp php=php nullphp,php arrayphp php&php$valsphp php=php nullphp,
php php php php php php php php php$caseFoldphp php=php selfphp:php:ATTRphp_CASEFOLDphp_NONEphp)
php php php php php{
php php php php php php php php php/php*php Thisphp isphp aphp classicphp statephp machinephp parserphp.php Eachphp iterationphp ofphp the
php php php php php php php php php php*php loopphp processesphp onephp characterphp.php Statephp php1php collectsphp thephp keyphp.php Whenphp equalsphp php(php php=php php)
php php php php php php php php php php*php isphp encounteredphp thephp statephp changesphp tophp php2php wherephp thephp valuephp isphp collected
php php php php php php php php php php*php untilphp aphp commaphp php(php,php)php orphp semicolonphp php(php;php)php isphp encounteredphp afterphp whichphp wephp switchphp back
php php php php php php php php php php*php tophp statephp php1php.php Ifphp aphp backslashphp php(php\php)php isphp encounteredphp,php statephp php3php isphp usedphp tophp collectphp the
php php php php php php php php php php*php followingphp characterphp withoutphp engagingphp thephp logicphp ofphp otherphp statesphp.
php php php php php php php php php php*php/
php php php php php php php php php$keyphp php=php nullphp;
php php php php php php php php php$valuephp php=php nullphp;
php php php php php php php php php$slenphp php=php strlenphp(php$dnphp)php;
php php php php php php php php php$statephp php=php php1php;
php php php php php php php php php$kophp php=php php$vophp php=php php0php;
php php php php php php php php php$multiphp php=php falsephp;
php php php php php php php php php$kaphp php=php arrayphp(php)php;
php php php php php php php php php$vaphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$diphp php=php php0php;php php$diphp <php=php php$slenphp;php php$diphp+php+php)php php{
php php php php php php php php php php php php php$chphp php=php php(php$diphp php=php=php php$slenphp)php php?php php0php php:php php$dnphp[php$diphp]php;
php php php php php php php php php php php php switchphp php(php$statephp)php php{
php php php php php php php php php php php php php php php php casephp php1php:php php/php/php collectphp key
php php php php php php php php php php php php php php php php php php php php ifphp php(php$chphp php=php=php=php php'php=php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$keyphp php=php trimphp(substrphp(php$dnphp,php php$kophp,php php$diphp php-php php$kophp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$caseFoldphp php=php=php selfphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php elsephp ifphp php(php$caseFoldphp php=php=php selfphp:php:ATTRphp_CASEFOLDphp_UPPERphp)php php$keyphp php=php strtoupperphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$multiphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$keyIdphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$keyIdphp,php php$multiphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$kaphp[countphp(php$kaphp)php-php1php]php[php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$multiphp[php]php php=php php$keyIdphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$kaphp[php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php$vophp php=php php$diphp php+php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$chphp php=php=php=php php'php,php'php php|php|php php$chphp php=php=php=php php'php;php'php php|php|php php$chphp php=php=php=php php'php+php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php2php:php php/php/php collectphp value
php php php php php php php php php php php php php php php php php php php php ifphp php(php$chphp php=php=php=php php'php\php\php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php php3php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$chphp php=php=php=php php'php,php'php php|php|php php$chphp php=php=php=php php'php;php'php php|php|php php$chphp php=php=php=php php0php php|php|php php$chphp php=php=php=php php'php+php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php selfphp:php:unescapeValuephp(trimphp(substrphp(php$dnphp,php php$vophp,php php$diphp php-php php$vophp)php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$multiphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$vaphp[countphp(php$vaphp)php-php1php]php[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$vaphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$kophp php=php php$diphp php+php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$chphp php=php=php=php php'php+php'php php&php&php php$multiphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastKeyphp php=php arrayphp_popphp(php$kaphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lastValphp php=php arrayphp_popphp(php$vaphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$kaphp[php]php php=php arrayphp(php$lastKeyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$vaphp[php]php php=php arrayphp(php$lastValphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$multiphp php=php arrayphp(strtolowerphp(php$lastKeyphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$chphp php=php=php=php php'php,php'php|php|php php$chphp php=php=php=php php'php;php'php php|php|php php$chphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$multiphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$chphp php=php=php=php php'php=php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php3php:php php/php/php escaped
php php php php php php php php php php php php php php php php php php php php php$statephp php=php php2php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$keysphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$keysphp php=php php$kaphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$valsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$valsphp php=php php$vaphp;
php php php php php php php php php}

php php php php php php php php returnphp php(php$statephp php=php=php=php php1php php&php&php php$kophp php>php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp DNphp partphp inphp thephp formphp php$attributephp php=php php$value
php php php php php php*
php php php php php php*php Thisphp methodphp supportsphp thephp creationphp ofphp multiphp-valuedphp RDNs
php php php php php php*php php$partphp mustphp containphp anphp evenphp numberphp ofphp elemetsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$attribute
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp implodeRdnphp(arrayphp php$partphp,php php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php_assertRdnphp(php$partphp)php;
php php php php php php php php php$partphp php=php selfphp:php:php_caseFoldRdnphp(php$partphp,php php$caseFoldphp)php;
php php php php php php php php php$rdnPartsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$partphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$valuephp php=php selfphp:php:escapeValuephp(php$valuephp)php;
php php php php php php php php php php php php php$keyIdphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php php$rdnPartsphp[php$keyIdphp]php php=php php implodephp(php'php=php'php,php arrayphp(php$keyphp,php php$valuephp)php)php;
php php php php php php php php php}
php php php php php php php php ksortphp(php$rdnPartsphp,php SORTphp_STRINGphp)php;
php php php php php php php php returnphp implodephp(php'php+php'php,php php$rdnPartsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implodesphp anphp arrayphp inphp thephp formphp deliveredphp byphp php{php@linkphp explodeDnphp(php)php}
php php php php php php*php tophp aphp DNphp stringphp.
php php php php php php*
php php php php php php*php php$dnArrayphp mustphp bephp ofphp type
php php php php php php*php arrayphp(
php php php php php php*php php php php php php arrayphp(php"cnphp"php php=php>php php"namephp1php"php,php php"uidphp"php php=php>php php"userphp"php)php,
php php php php php php*php php php php php php arrayphp(php"cnphp"php php=php>php php"namephp2php"php)php,
php php php php php php*php php php php php php arrayphp(php"dcphp"php php=php>php php"examplephp"php)php,
php php php php php php*php php php php php php arrayphp(php"dcphp"php php=php>php php"orgphp"php)
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$dnArray
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@paramphp php stringphp php$separator
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp implodeDnphp(arrayphp php$dnArrayphp,php php$caseFoldphp php=php nullphp,php php$separatorphp php=php php'php,php'php)
php php php php php{
php php php php php php php php php$partsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$dnArrayphp asphp php$pphp)php php{
php php php php php php php php php php php php php$partsphp[php]php php=php selfphp:php:implodeRdnphp(php$pphp,php php$caseFoldphp)php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php$separatorphp,php php$partsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp givenphp php$childDnphp isphp beneathphp php$parentDnphp subtreephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Ldapphp_Dnphp php$childDn
php php php php php php*php php@paramphp php stringphp|Zendphp_Ldapphp_Dnphp php$parentDn
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isChildOfphp(php$childDnphp,php php$parentDnphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$keysphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$valsphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$childDnphp instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php php php php php$cdnphp php=php php$childDnphp-php>toArrayphp(Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$cdnphp php=php selfphp:php:explodeDnphp(php$childDnphp,php php$keysphp,php php$valsphp,php Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$parentDnphp instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php php php php php$pdnphp php=php php$parentDnphp-php>toArrayphp(Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$pdnphp php=php selfphp:php:explodeDnphp(php$parentDnphp,php php$keysphp,php php$valsphp,php Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php catchphp php(Zendphp_Ldapphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$startIndexphp php=php countphp(php$cdnphp)php-countphp(php$pdnphp)php;
php php php php php php php php ifphp php(php$startIndex<php0php)php returnphp falsephp;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<countphp(php$pdnphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php ifphp php(php$cdnphp[php$iphp+php$startIndexphp]php php!php=php php$pdnphp[php$iphp]php)php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}
php}