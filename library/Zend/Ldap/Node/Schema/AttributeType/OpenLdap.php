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
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php OpenLdapphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_Item
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/Itemphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/AttributeTypephp/Interfacephp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_OpenLdapphp providesphp accessphp tophp thephp attributephp type
php php*php schemaphp informationphp onphp anphp OpenLDAPphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_OpenLdapphp extendsphp Zendphp_Ldapphp_Nodephp_Schemaphp_Item
php php php php implementsphp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_Interface
php{
php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp OID
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getOidphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>oidphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp syntax
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSyntaxphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>syntaxphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$parentphp php=php php$thisphp-php>getParentphp(php)php;
php php php php php php php php php php php php ifphp php(php$parentphp php=php=php=php nullphp)php returnphp nullphp;
php php php php php php php php php php php php elsephp returnphp php$parentphp-php>getSyntaxphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>syntaxphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp maximumphp length
php php php php php php*
php php php php php php*php php@returnphp intphp|null
php php php php php php*php/
php php php php publicphp functionphp getMaxLengthphp(php)
php php php php php{
php php php php php php php php php$maxLengthphp php=php php$thisphp-php>php{php'maxphp-lengthphp'php}php;
php php php php php php php php ifphp php(php$maxLengthphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$parentphp php=php php$thisphp-php>getParentphp(php)php;
php php php php php php php php php php php php ifphp php(php$parentphp php=php=php=php nullphp)php returnphp nullphp;
php php php php php php php php php php php php elsephp returnphp php$parentphp-php>getMaxLengthphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php(intphp)php$maxLengthphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp attributephp isphp singlephp-valuedphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSingleValuedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php{php'singlephp-valuephp'php}php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp parentphp attributephp typephp inphp thephp inhertitancephp treephp ifphp onephp exists
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_OpenLdapphp|null
php php php php php php*php/
php php php php publicphp functionphp getParentphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_parentsphp)php php=php=php=php php1php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_parentsphp[php0php]php;
php php php php php php php php php}
php php php php php}
php}