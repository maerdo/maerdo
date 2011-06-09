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
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Nodephp Treephp classphp forphp Zendphp_Serverphp reflectionphp operations
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@versionphp php$Idphp:php Nodephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Reflectionphp_Node
php{
php php php php php/php*php*
php php php php php php*php Nodephp value
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_valuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp childphp nodesphp php(ifphp anyphp)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_childrenphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Parentphp nodephp php(ifphp anyphp)
php php php php php php*php php@varphp Zendphp_Serverphp_Reflectionphp_Node
php php php php php php*php/
php php php php protectedphp php$php_parentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@paramphp Zendphp_Serverphp_Reflectionphp_Nodephp php$parentphp Optional
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_Node
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp,php Zendphp_Serverphp_Reflectionphp_Nodephp php$parentphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$parentphp)php php{
php php php php php php php php php php php php php$thisphp-php>setParentphp(php$parentphp,php truephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parentphp node
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Serverphp_Reflectionphp_Nodephp php$node
php php php php php php*php php@paramphp booleanphp php$newphp Whetherphp orphp notphp thephp childphp nodephp isphp newlyphp created
php php php php php php*php andphp shouldphp alwaysphp bephp attached
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setParentphp(Zendphp_Serverphp_Reflectionphp_Nodephp php$nodephp,php php$newphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentphp php=php php$nodephp;

php php php php php php php php ifphp php(php$newphp)php php{
php php php php php php php php php php php php php$nodephp-php>attachChildphp(php$thisphp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp andphp attachphp aphp newphp childphp node
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_Nodephp Newphp childphp node
php php php php php php*php/
php php php php publicphp functionphp createChildphp(php$valuephp)
php php php php php{
php php php php php php php php php$childphp php=php newphp selfphp(php$valuephp,php php$thisphp)php;

php php php php php php php php returnphp php$childphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp aphp childphp node
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Serverphp_Reflectionphp_Nodephp php$node
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp attachChildphp(Zendphp_Serverphp_Reflectionphp_Nodephp php$nodephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_childrenphp[php]php php=php php$nodephp;

php php php php php php php php ifphp php(php$nodephp-php>getParentphp(php)php php!php=php=php php$thisphp)php php{
php php php php php php php php php php php php php$nodephp-php>setParentphp(php$thisphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp allphp childphp nodes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_childrenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thisphp nodephp havephp childrenphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_childrenphp)php php>php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp parentphp node
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Serverphp_Reflectionphp_Node
php php php php php php*php/
php php php php publicphp functionphp getParentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp nodephp'sphp currentphp value
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp nodephp value
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp bottommostphp nodesphp ofphp thisphp nodephp'sphp tree
php php php php php php*
php php php php php php*php Retrievesphp thephp bottommostphp nodesphp ofphp thephp treephp byphp recursivelyphp calling
php php php php php php*php getEndPointsphp(php)php onphp allphp childrenphp.php Ifphp aphp childphp isphp nullphp,php itphp returnsphp thephp parent
php php php php php php*php asphp anphp endphp pointphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getEndPointsphp(php)
php php php php php{
php php php php php php php php php$endPointsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php returnphp php$endPointsphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_childrenphp asphp php$childphp)php php{
php php php php php php php php php php php php php$valuephp php=php php$childphp-php>getValuephp(php)php;

php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$endPointsphp[php]php php=php php$thisphp;
php php php php php php php php php php php php php}php elseifphp php(php(nullphp php!php=php=php php$valuephp)
php php php php php php php php php php php php php php php php php&php&php php$childphp-php>hasChildrenphp(php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$childEndPointsphp php=php php$childphp-php>getEndPointsphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$childEndPointsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$endPointsphp php=php arrayphp_mergephp(php$endPointsphp,php php$childEndPointsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(php(nullphp php!php=php=php php$valuephp)php php&php&php php!php$childphp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php php php php php php$endPointsphp[php]php php=php php$childphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$endPointsphp;
php php php php php}
php}
