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
php php*php php@versionphp php php php php$Idphp:php Collectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Collectionphp wrapsphp aphp listphp ofphp LDAPphp entriesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Collectionphp implementsphp Iteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Iterator
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldapphp_Collectionphp_Iteratorphp_Default
php php php php php php*php/
php php php php protectedphp php$php_iteratorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp itemphp number
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_currentphp php=php php-php1php;

php php php php php/php*php*
php php php php php php*php Containerphp forphp itemphp cachingphp tophp speedphp upphp multiplephp iterations
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_cachephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp php$iterator
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp php$iteratorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorphp php=php php$iteratorphp;
php php php php php}

php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp currentphp resultphp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorphp-php>closephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp entriesphp asphp anphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$dataphp[php]php php=php php$itemphp;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp firstphp entry
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFirstphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>countphp(php)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>currentphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp underlyingphp iterator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Collectionphp_Iteratorphp_Default
php php php php php php*php/
php php php php publicphp functionphp getInnerIteratorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp itemsphp inphp currentphp result
php php php php php php*php Implementsphp Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorphp-php>countphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>countphp(php)php php>php php0php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$thisphp-php>php_currentphp,php php$thisphp-php>php_cachephp)php)php php{
php php php php php php php php php php php php php php php php php$currentphp php=php php$thisphp-php>php_iteratorphp-php>currentphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$currentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_cachephp[php$thisphp-php>php_currentphp]php php=php php$thisphp-php>php_createEntryphp(php$currentphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_cachephp[php$thisphp-php>php_currentphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp thephp dataphp structurephp forphp thephp givenphp entryphp data
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_createEntryphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp resultphp itemphp DN
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp dnphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>countphp(php)php php>php php0php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_iteratorphp-php>keyphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp resultphp itemphp key
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp intphp|null
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>countphp(php)php php>php php0php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_currentphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorphp-php>nextphp(php)php;
php php php php php php php php php$thisphp-php>php_currentphp+php+php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorphp-php>rewindphp(php)php;
php php php php php php php php php$thisphp-php>php_currentphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp resultphp item
php php php php php php*php afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_cachephp[php$thisphp-php>php_currentphp]php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_iteratorphp-php>validphp(php)php;
php php php php php php php php php}
php php php php php}
php}