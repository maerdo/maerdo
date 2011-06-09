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
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ChildrenIteratorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Node
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_ChildrenIteratorphp providesphp anphp iteratorphp tophp aphp collectionphp ofphp childrenphp nodesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_ChildrenIteratorphp implementsphp Iteratorphp,php Countablephp,php RecursiveIteratorphp,php ArrayAccess
php{
php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp Zendphp_Ldapphp_Nodephp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp childphp nodesphp.
php php php php php php*php Implementsphp Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp childphp.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Node
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp childphp'dphp RDNphp.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp childphp.
php php php php php php*php Implementsphp Iterator
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php nextphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp childphp.
php php php php php php*php Implementsphp Iterator
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp child
php php php php php php*php afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)php.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(currentphp(php$thisphp-php>php_dataphp)php!php=php=falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp currentphp nodephp hasphp childrenphp.
php php php php php php*php Returnsphp whetherphp thephp currentphp elementphp hasphp childrenphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>currentphp(php)php instanceofphp Zendphp_Ldapphp_Nodephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>currentphp(php)php-php>hasChildrenphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childrenphp forphp thephp currentphp nodephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_ChildrenIterator
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>currentphp(php)php instanceofphp Zendphp_Ldapphp_Nodephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>currentphp(php)php-php>getChildrenphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp childphp withphp aphp givenphp RDNphp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rdn
php php php php php php*php php@returnphp Zendphp_Ldapphp_node
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$rdnphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$rdnphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$rdnphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp givenphp rdnphp existsphp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rdn
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$rdnphp)
php php php php php{
php php php php php php php php returnphp php(arrayphp_keyphp_existsphp(php$rdnphp,php php$thisphp-php>php_dataphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp nothingphp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$namephp)php php{php php}

php php php php php/php*php*
php php php php php php*php Doesphp nothingphp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$namephp,php php$valuephp)php php{php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp childrenphp asphp anphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp asphp php$rdnphp php=php>php php$nodephp)php php{
php php php php php php php php php php php php php$dataphp[php$rdnphp]php php=php php$nodephp;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}
php}