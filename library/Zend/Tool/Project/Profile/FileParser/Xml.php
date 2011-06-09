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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Xmlphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/FileParserphp/Interfacephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Repositoryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp.phpphp'php;
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Resourcephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xmlphp implementsphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Interface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp php$php_profilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Contextphp_Repository
php php php php php php*php/
php php php php protectedphp php$php_contextRepositoryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextRepositoryphp php=php Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp:php:getInstancephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php serializephp(php)
php php php php php php*
php php php php php php*php createphp anphp xmlphp stringphp fromphp thephp providedphp profile
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp serializephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp)
php php php php php{

php php php php php php php php php$profilephp php=php clonephp php$profilephp;

php php php php php php php php php$thisphp-php>php_profilephp php=php php$profilephp;
php php php php php php php php php$xmlElementphp php=php newphp SimpleXMLElementphp(php'php<projectProfilephp php/php>php'php)php;

php php php php php php php php ifphp php(php$profilephp-php>hasAttributephp(php'typephp'php)php)php php{
php php php php php php php php php php php php php$xmlElementphp-php>addAttributephp(php'typephp'php,php php$profilephp-php>getAttributephp(php'typephp'php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$profilephp-php>hasAttributephp(php'versionphp'php)php)php php{
php php php php php php php php php php php php php$xmlElementphp-php>addAttributephp(php'versionphp'php,php php$profilephp-php>getAttributephp(php'versionphp'php)php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php_serializeRecurserphp(php$profilephp,php php$xmlElementphp)php;

php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php'php1php.php0php'php)php;
php php php php php php php php php$docphp-php>formatOutputphp php=php truephp;
php php php php php php php php php$domnodephp php=php domphp_importphp_simplexmlphp(php$xmlElementphp)php;
php php php php php php php php php$domnodephp php=php php$docphp-php>importNodephp(php$domnodephp,php truephp)php;
php php php php php php php php php$domnodephp php=php php$docphp-php>appendChildphp(php$domnodephp)php;

php php php php php php php php returnphp php$docphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php unserializephp(php)
php php php php php php*
php php php php php php*php Createphp aphp structurephp inphp thephp objectphp php$profilephp fromphp thephp structurephp specficied
php php php php php php*php inphp thephp xmlphp stringphp provided
php php php php php php*
php php php php php php*php php@paramphp stringphp xmlphp data
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp Thephp profilephp tophp usephp asphp thephp topphp node
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$dataphp,php Zendphp_Toolphp_Projectphp_Profilephp php$profilephp)
php php php php php{
php php php php php php php php ifphp php(php$dataphp php=php=php nullphp)php php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'contentsphp notphp availablephp tophp unserializephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_profilephp php=php php$profilephp;

php php php php php php php php php$xmlDataIteratorphp php=php newphp SimpleXMLIteratorphp(php$dataphp)php;

php php php php php php php php ifphp php(php$xmlDataIteratorphp-php>getNamephp(php)php php!php=php php'projectProfilephp'php)php php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Profilesphp mustphp startphp withphp aphp projectProfilephp nodephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$xmlDataIteratorphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_profilephp-php>setAttributephp(php'typephp'php,php php(stringphp)php php$xmlDataIteratorphp[php'typephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$xmlDataIteratorphp[php'versionphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_profilephp-php>setAttributephp(php'versionphp'php,php php(stringphp)php php$xmlDataIteratorphp[php'versionphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php startphp unphp-serializationphp ofphp thephp xmlphp doc
php php php php php php php php php$thisphp-php>php_unserializeRecurserphp(php$xmlDataIteratorphp)php;

php php php php php php php php php/php/php contextsphp shouldphp bephp initializedphp afterphp thephp unwindingphp ofphp thephp profilephp structure
php php php php php php php php php$thisphp-php>php_lazyLoadContextsphp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_profilephp;

php php php php php}

php php php php php/php*php*
php php php php php php*php php_serializeRecurserphp(php)
php php php php php php*
php php php php php php*php Thisphp methodphp willphp bephp usedphp tophp traversephp thephp depthsphp ofphp thephp structure
php php php php php php*php whenphp php*serializingphp*php anphp xmlphp structurephp intophp aphp string
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$resources
php php php php php php*php php@paramphp SimpleXmlElementphp php$xmlNode
php php php php php php*php/
php php php php protectedphp functionphp php_serializeRecurserphp(php$resourcesphp,php SimpleXmlElementphp php$xmlNodephp)
php php php php php{
php php php php php php php php php/php/php php@todophp findphp aphp betterphp wayphp tophp handlephp concurrencyphp.php.php ifphp nophp clonephp,php php_positionphp inphp nodephp getsphp messedphp up
php php php php php php php php php/php/ifphp php(php$resourcesphp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php php{
php php php php php php php php php/php/php php php php php$resourcesphp php=php clonephp php$resourcesphp;
php php php php php php php php php/php/php}

php php php php php php php php foreachphp php(php$resourcesphp asphp php$resourcephp)php php{

php php php php php php php php php php php php ifphp php(php$resourcephp-php>isDeletedphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resourceNamephp php=php php$resourcephp-php>getContextphp(php)php-php>getNamephp(php)php;
php php php php php php php php php php php php php$resourceNamephp[php0php]php php=php strtolowerphp(php$resourceNamephp[php0php]php)php;

php php php php php php php php php php php php php$newNodephp php=php php$xmlNodephp-php>addChildphp(php$resourceNamephp)php;

php php php php php php php php php php php php php/php/php$reflectionClassphp php=php newphp ReflectionClassphp(php$resourcephp-php>getContextphp(php)php)php;

php php php php php php php php php php php php ifphp php(php$resourcephp-php>isEnabledphp(php)php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$newNodephp-php>addAttributephp(php'enabledphp'php,php php'falsephp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$resourcephp-php>getPersistentAttributesphp(php)php asphp php$paramNamephp php=php>php php$paramValuephp)php php{
php php php php php php php php php php php php php php php php php$newNodephp-php>addAttributephp(php$paramNamephp,php php$paramValuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$resourcephp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php_serializeRecurserphp(php$resourcephp,php php$newNodephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php}


php php php php php/php*php*
php php php php php php*php php_unserializeRecurserphp(php)
php php php php php php*
php php php php php php*php Thisphp methodphp willphp bephp usedphp tophp traversephp thephp depthsphp ofphp thephp structure
php php php php php php*php asphp neededphp tophp php*unserializephp*php thephp profilephp fromphp anphp xmlIterator
php php php php php php*
php php php php php php*php php@paramphp SimpleXMLIteratorphp php$xmlIterator
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resource
php php php php php php*php/
php php php php protectedphp functionphp php_unserializeRecurserphp(SimpleXMLIteratorphp php$xmlIteratorphp,php Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp php$resourcephp php=php nullphp)
php php php php php{

php php php php php php php php foreachphp php(php$xmlIteratorphp asphp php$resourceNamephp php=php>php php$resourceDataphp)php php{

php php php php php php php php php php php php php$contextNamephp php=php php$resourceNamephp;
php php php php php php php php php php php php php$subResourcephp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp(php$contextNamephp)php;
php php php php php php php php php php php php php$subResourcephp-php>setProfilephp(php$thisphp-php>php_profilephp)php;

php php php php php php php php php php php php ifphp php(php$resourceAttributesphp php=php php$resourceDataphp-php>attributesphp(php)php)php php{
php php php php php php php php php php php php php php php php php$attributesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$resourceAttributesphp asphp php$attrNamephp php=php>php php$attrValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$attributesphp[php$attrNamephp]php php=php php(stringphp)php php$attrValuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$subResourcephp-php>setAttributesphp(php$attributesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$resourcephp-php>appendphp(php$subResourcephp,php falsephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_profilephp-php>appendphp(php$subResourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_contextRepositoryphp-php>isOverwritableContextphp(php$contextNamephp)php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$subResourcephp-php>initializeContextphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$xmlIteratorphp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php_unserializeRecurserphp(php$xmlIteratorphp-php>getChildrenphp(php)php,php php$subResourcephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php_lazyLoadContextsphp(php)
php php php php php php*
php php php php php php*php Thisphp methodphp willphp callphp initializeContextphp onphp thephp resourcesphp inphp aphp profile
php php php php php php*php php@todophp determinephp ifphp thisphp methodphp belongsphp insidephp thephp profile
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_lazyLoadContextsphp(php)
php php php php php{

php php php php php php php php foreachphp php(php$thisphp-php>php_profilephp asphp php$topResourcephp)php php{
php php php php php php php php php php php php php$riiphp php=php newphp RecursiveIteratorIteratorphp(php$topResourcephp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php php php php php foreachphp php(php$riiphp asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$resourcephp-php>initializeContextphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php}

php}