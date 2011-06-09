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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Page
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Pagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Attribute
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Attributephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_SimpleDbphp extendsphp Zendphp_Servicephp_Amazonphp_Abstract
php{
php php php php php/php*php Notesphp php*php/
php php php php php/php/php TODOphp SSLphp isphp required

php php php php php/php*php*
php php php php php php*php Thephp HTTPphp queryphp server
php php php php php php*php/
php php php php protectedphp php$php_sdbEndpointphp php=php php'sdbphp.amazonawsphp.comphp/php'php;

php php php php php/php*php*
php php php php php php*php Periodphp afterphp whichphp HTTPphp requestphp willphp timeoutphp inphp seconds
php php php php php php*php/
php php php php protectedphp php$php_httpTimeoutphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Thephp APIphp versionphp tophp use
php php php php php php*php/
php php php php protectedphp php$php_sdbApiVersionphp php=php php'php2php0php0php9php-php0php4php-php1php5php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Version
php php php php php php*php/
php php php php protectedphp php$php_signatureVersionphp php=php php'php2php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Encodingphp Method
php php php php php php*php/
php php php php protectedphp php$php_signatureMethodphp php=php php'HmacSHAphp2php5php6php'php;

php php php php php/php*php*
php php php php php php*php Createphp Amazonphp SimpleDBphp clientphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$accessphp_keyphp php php php php php php Overridephp thephp defaultphp Accessphp Key
php php php php php php*php php@paramphp php stringphp php$secretphp_keyphp php php php php php php Overridephp thephp defaultphp Secretphp Key
php php php php php php*php php@paramphp php stringphp php$regionphp php php php php php php php php php php Setsphp thephp AWSphp Region
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$accessKeyphp,php php$secretKeyphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$accessKeyphp,php php$secretKeyphp)php;
php php php php php php php php php$thisphp-php>setEndpointphp(php"httpsphp:php/php/php"php php.php php$thisphp-php>php_sdbEndpointphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp SimpleDBphp endpointphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp_Httpphp php$endpoint
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_SimpleDb
php php php php php php*php/
php php php php publicphp functionphp setEndpointphp(php$endpointphp)
php php php php php{
php php php php php php php php ifphp(php!php(php$endpointphp instanceofphp Zendphp_Uriphp_Httpphp)php)php php{
php php php php php php php php php php php php php$endpointphp php=php Zendphp_Uriphp:php:factoryphp(php$endpointphp)php;
php php php php php php php php php}
php php php php php php php php ifphp(php!php$endpointphp-php>validphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/SimpleDbphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exceptionphp(php"Invalidphp endpointphp suppliedphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_endpointphp php=php php$endpointphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp SimpleDBphp endpoint
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php publicphp functionphp getEndpointphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_endpointphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp attributesphp APIphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp php$domainNamephp Domainphp namephp withinphp database
php php php php php php*php php@paramphp string
php php php php php php*php/
php php php php publicphp functionphp getAttributesphp(
php php php php php php php php php$domainNamephp,php php$itemNamephp,php php$attributeNamephp php=php null
php php php php php)php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'GetAttributesphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$paramsphp[php'ItemNamephp'php]php php php php=php php$itemNamephp;

php php php php php php php php ifphp php(issetphp(php$attributeNamephp)php)php php{
php php php php php php php php php php php php php$paramsphp[php'AttributeNamephp'php]php php=php php$attributeNamephp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php php php php php$documentphp php=php php$responsephp-php>getSimpleXMLDocumentphp(php)php;

php php php php php php php php php$attributeNodesphp php=php php$documentphp-php>GetAttributesResultphp-php>Attributephp;

php php php php php php php php php/php/php Returnphp anphp arrayphp ofphp arrays
php php php php php php php php php$attributesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$attributeNodesphp asphp php$attributeNodephp)php php{
php php php php php php php php php php php php php$namephp php php php php php php php=php php(stringphp)php$attributeNodephp-php>Namephp;
php php php php php php php php php php php php php$valueNodesphp php=php php$attributeNodephp-php>Valuephp;
php php php php php php php php php php php php php$dataphp php php php php php php php=php nullphp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valueNodesphp)php php&php&php php!emptyphp(php$valueNodesphp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$valueNodesphp asphp php$valueNodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php]php php=php php(stringphp)php$valueNodephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$valueNodesphp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php php(stringphp)php$valueNodesphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$attributesphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php php$attributesphp[php$namephp]php-php>addValuephp(php$dataphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$attributesphp[php$namephp]php php=php newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Attributephp(php$itemNamephp,php php$namephp,php php$dataphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$attributesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushphp attributes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$domainName
php php php php php php*php php@paramphp php stringphp php$itemName
php php php php php php*php php@paramphp php arrayphp|Traverablephp php$attributes
php php php php php php*php php@paramphp php arrayphp php$replace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp putAttributesphp(
php php php php php php php php php$domainNamephp,php php$itemNamephp,php php$attributesphp,php php$replacephp php=php arrayphp(php)
php php php php php)php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'PutAttributesphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$paramsphp[php'ItemNamephp'php]php php php php=php php$itemNamephp;

php php php php php php php php php$indexphp php=php php0php;
php php php php php php php php foreachphp php(php$attributesphp asphp php$attributephp)php php{
php php php php php php php php php php php php php$attributeNamephp php=php php$attributephp-php>getNamephp(php)php;
php php php php php php php php php php php php foreachphp php(php$attributephp-php>getValuesphp(php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp.php'php php.php php$indexphp php.php php'php.Namephp'php]php php php=php php$attributeNamephp;
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp.php'php php.php php$indexphp php.php php'php.Valuephp'php]php php=php php$valuephp;

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp itphp shouldphp bephp replaced
php php php php php php php php php php php php php php php php ifphp(arrayphp_keyphp_existsphp(php$attributeNamephp,php php$replacephp)php php&php&php php$replacephp[php$attributeNamephp]php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp.php'php php.php php$indexphp php.php php'php.Replacephp'php]php php=php php'truephp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$indexphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Exceptionphp shouldphp getphp thrownphp ifphp therephp'sphp anphp error
php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp manyphp attributesphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$items
php php php php php php*php php@paramphp php stringphp php$domainName
php php php php php php*php php@paramphp php arrayphp php$replace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp batchPutAttributesphp(php$itemsphp,php php$domainNamephp,php arrayphp php$replacephp php=php arrayphp(php)php)
php php php php php{

php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'BatchPutAttributesphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;

php php php php php php php php php$itemIndexphp php=php php0php;
php php php php php php php php foreachphp php(php$itemsphp asphp php$namephp php=php>php php$attributesphp)php php{
php php php php php php php php php php php php php$paramsphp[php'Itemphp.php'php php.php php$itemIndexphp php.php php'php.ItemNamephp'php]php php=php php$namephp;
php php php php php php php php php php php php php$attributeIndexphp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$attributesphp asphp php$attributephp)php php{
php php php php php php php php php php php php php php php php php/php/php attributephp valuephp cannotphp bephp arrayphp,php sophp whenphp severalphp itemsphp arephp passed
php php php php php php php php php php php php php php php php php/php/php theyphp arephp treatedphp asphp separatephp valuesphp withphp thephp samephp attributephp name
php php php php php php php php php php php php php php php php foreachphp(php$attributephp-php>getValuesphp(php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'Itemphp.php'php php.php php$itemIndexphp php.php php'php.Attributephp.php'php php.php php$attributeIndexphp php.php php'php.Namephp'php]php php=php php$attributephp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'Itemphp.php'php php.php php$itemIndexphp php.php php'php.Attributephp.php'php php.php php$attributeIndexphp php.php php'php.Valuephp'php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$replacephp[php$namephp]php)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php issetphp(php$replacephp[php$namephp]php[php$attributephp-php>getNamephp(php)php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php$replacephp[php$namephp]php[php$attributephp-php>getNamephp(php)php]
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'Itemphp.php'php php.php php$itemIndexphp php.php php'php.Attributephp.php'php php.php php$attributeIndexphp php.php php'php.Replacephp'php]php php=php php'truephp'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$attributeIndexphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$itemIndexphp+php+php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp attributes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$domainName
php php php php php php*php php@paramphp php stringphp php$itemName
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp deleteAttributesphp(php$domainNamephp,php php$itemNamephp,php arrayphp php$attributesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'DeleteAttributesphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$paramsphp[php'ItemNamephp'php]php php php php=php php$itemNamephp;

php php php php php php php php php$attributeIndexphp php=php php0php;
php php php php php php php php foreachphp php(php$attributesphp asphp php$attributephp)php php{
php php php php php php php php php php php php foreachphp php(php$attributephp-php>getValuesphp(php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp.php'php php.php php$attributeIndexphp php.php php'php.Namephp'php]php php=php php$attributephp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp.php'php php.php php$attributeIndexphp php.php php'php.Valuephp'php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php$attributeIndexphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp domains
php php php php php php*
php php php php php php*php php@paramphp php$maxNumberOfDomainsphp int
php php php php php php*php php@paramphp php$nextTokenphp php php php php php php php php php int
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php0php orphp morephp domainphp names
php php php php php php*php/
php php php php publicphp functionphp listDomainsphp(php$maxNumberOfDomainsphp php=php php1php0php0php,php php$nextTokenphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php php php php php php php=php php'ListDomainsphp'php;
php php php php php php php php php$paramsphp[php'MaxNumberOfDomainsphp'php]php php=php php$maxNumberOfDomainsphp;

php php php php php php php php ifphp php(nullphp php!php=php=php php$nextTokenphp)php php{
php php php php php php php php php php php php php$paramsphp[php'NextTokenphp'php]php php=php php$nextTokenphp;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;

php php php php php php php php php$domainNodesphp php=php php$responsephp-php>getSimpleXMLDocumentphp(php)php-php>ListDomainsResultphp-php>DomainNamephp;

php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$domainNodesphp asphp php$domainphp)php php{
php php php php php php php php php php php php php$dataphp[php]php php=php php(stringphp)php$domainphp;
php php php php php php php php php}

php php php php php php php php php$nextTokenNodephp php=php php$responsephp-php>getSimpleXMLDocumentphp(php)php-php>ListDomainsResultphp-php>NextTokenphp;
php php php php php php php php php$nextTokenphp php php php php php=php php(stringphp)php$nextTokenNodephp;
php php php php php php php php php$nextTokenphp php php php php php=php php(trimphp(php$nextTokenphp)php php=php=php=php php'php'php)php php?php nullphp php:php php$nextTokenphp;

php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Pagephp(php$dataphp,php php$nextTokenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp domainphp metadata
php php php php php php*
php php php php php php*php php@paramphp php$domainNamephp stringphp Namephp ofphp thephp domainphp forphp whichphp metadataphp willphp bephp requested
php php php php php php*php php@returnphp arrayphp Keyphp/valuephp arrayphp ofphp metadatumphp namesphp andphp valuesphp.
php php php php php php*php/
php php php php publicphp functionphp domainMetadataphp(php$domainNamephp)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'DomainMetadataphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$responsephp php php php php php php php php php php php php php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;

php php php php php php php php php$documentphp php=php php$responsephp-php>getSimpleXMLDocumentphp(php)php;

php php php php php php php php php$metadataNodesphp php=php php$documentphp-php>DomainMetadataResultphp-php>childrenphp(php)php;
php php php php php php php php php$metadataphp php php php php php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$metadataNodesphp asphp php$metadataNodephp)php php{
php php php php php php php php php php php php php$namephp php php php php php php php php php php php php=php php$metadataNodephp-php>getNamephp(php)php;
php php php php php php php php php php php php php$metadataphp[php$namephp]php php=php php(stringphp)php$metadataNodephp;
php php php php php php php php php}

php php php php php php php php returnphp php$metadataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp domain
php php php php php php*
php php php php php php*php php@paramphp php$domainNamephp php php php stringphp php php php Validphp domainphp namephp ofphp thephp domainphp tophp create
php php php php php php*php php@returnphp php php php php php php php php php php php php php php php php booleanphp Truephp ifphp successfulphp,php falsephp ifphp not
php php php php php php*php/
php	publicphp functionphp createDomainphp(php$domainNamephp)
php	php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'CreateDomainphp'php;
php php php php php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$responsephp php php php php php php php php php php php php php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php php php php returnphp php$responsephp-php>getHttpResponsephp(php)php-php>isSuccessfulphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp domain
php php php php php php*
php php php php php php*php php@paramphp php php php php php$domainNamephp stringphp php Validphp domainphp namephp ofphp thephp domainphp tophp delete
php php php php php php*php php@returnphp php php php php php php php php php php php php php php php php booleanphp Truephp ifphp successfulphp,php falsephp ifphp not
php php php php php php*php/
php	publicphp functionphp deleteDomainphp(php$domainNamephp)
php	php{
php	php php php php php$paramsphp php php php php php php php php php php php php php php php=php arrayphp(php)php;
php	php php php php php$paramsphp[php'Actionphp'php]php php php php php php=php php'DeleteDomainphp'php;
php	php php php php php$paramsphp[php'DomainNamephp'php]php php=php php$domainNamephp;
php php php php php php php php php$responsephp php php php php php php php php php php php php php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php php php php returnphp php$responsephp-php>getHttpResponsephp(php)php-php>isSuccessfulphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Selectphp itemsphp fromphp thephp database
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$selectExpression
php php php php php php*php php@paramphp php nullphp|stringphp php$nextToken
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Page
php php php php php php*php/
php	publicphp functionphp selectphp(php$selectExpressionphp,php php$nextTokenphp php=php nullphp)
php	php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php php php php php=php php'Selectphp'php;
php php php php php php php php php$paramsphp[php'SelectExpressionphp'php]php php=php php$selectExpressionphp;

php php php php php php php php ifphp php(nullphp php!php=php=php php$nextTokenphp)php php{
php php php php php php php php php php php php php$paramsphp[php'NextTokenphp'php]php php=php php$nextTokenphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xmlphp php php php php php php=php php$responsephp-php>getSimpleXMLDocumentphp(php)php;

php php php php php php php php php$attributesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$xmlphp-php>SelectResultphp-php>Itemphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$itemNamephp php=php php(stringphp)php$itemphp-php>Namephp;

php php php php php php php php php php php php foreachphp php(php$itemphp-php>Attributephp asphp php$attributephp)php php{
php php php php php php php php php php php php php php php php php$attributeNamephp php=php php(stringphp)php$attributephp-php>Namephp;

php php php php php php php php php php php php php php php php php$valuesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$attributephp-php>Valuephp asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valuesphp[php]php php=php php(stringphp)php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$attributesphp[php$itemNamephp]php[php$attributeNamephp]php php=php newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Attributephp(php$itemNamephp,php php$attributeNamephp,php php$valuesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$nextTokenphp php=php php(stringphp)php$xmlphp-php>NextTokenphp;

php php php php php php php php returnphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Pagephp(php$attributesphp,php php$nextTokenphp)php;
php php php php php}

php	php/php*php*
php	php php*php Quotephp SDBphp value
php	php php*
php	php php*php Wrapsphp itphp inphp php'php'
php	php php*
php	php php*php php@paramphp stringphp php$value
php	php php*php php@returnphp string
php	php php*php/
php php php php publicphp functionphp quotephp(php$valuephp)
php php php php php{
php php php php php php php php php/php/php wrapphp inphp singlephp quotesphp andphp convertphp eachphp php'php insidephp tophp php'php'
php php php php php php php php returnphp php"php'php"php php.php strphp_replacephp(php"php'php"php,php php"php'php'php"php,php php$valuephp)php php.php php"php'php"php;
php php php php php}

php	php/php*php*
php	php php*php Quotephp SDBphp columnphp orphp tablephp name
php	php php*
php	php php*php Wrapsphp itphp inphp php`php`
php	php php*php php@paramphp stringphp php$name
php	php php*php php@returnphp string
php	php php*php/
php php php php publicphp functionphp quoteNamephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php[aphp-zphp_php$php]php[aphp-zphp0php-php9php_php$php-php]php*php$php/iphp'php,php php$namephp)php php=php=php falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exceptionphp(php"Invalidphp namephp:php canphp containphp onlyphp alphanumericphp charactersphp,php php\php$php andphp php_php"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php"php`php$namephp`php"php;
php php php php php}

php php php php/php*php*
php php php php php php*php Sendsphp aphp HTTPphp requestphp tophp thephp SimpleDBphp servicephp usingphp Zendphp_Httpphp_Client
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp php php php php php php php php Listphp ofphp parametersphp tophp sendphp withphp thephp request
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Response
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_sendRequestphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php UTFphp-php8php encodephp allphp parametersphp andphp replacephp php'php+php'php characters
php php php php php php php php foreachphp php(php$paramsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php unsetphp(php$paramsphp[php$namephp]php)php;
php php php php php php php php php php php php php$paramsphp[utfphp8php_encodephp(php$namephp)php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php php$thisphp-php>php_addRequiredParametersphp(php$paramsphp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php*php php@varphp php$requestphp Zendphp_Httpphp_Clientphp php*php/
php php php php php php php php php php php php php$requestphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php php php php php$requestphp-php>resetParametersphp(php)php;

php php php php php php php php php php php php php$requestphp-php>setConfigphp(arrayphp(
php php php php php php php php php php php php php php php php php'timeoutphp'php php=php>php php$thisphp-php>php_httpTimeout
php php php php php php php php php php php php php)php)php;


php php php php php php php php php php php php php$requestphp-php>setUriphp(php$thisphp-php>getEndpointphp(php)php)php;
php php php php php php php php php php php php php$requestphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp_outphp[php]php php=php rawurlencodephp(php$keyphp)php.php"php=php"php.rawurlencodephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$requestphp-php>setRawDataphp(joinphp(php'php&php'php,php php$paramsphp_outphp)php,php Zendphp_Httpphp_Clientphp:php:ENCphp_URLENCODEDphp)php;
php php php php php php php php php php php php php$httpResponsephp php=php php$requestphp-php>requestphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Httpphp_Clientphp_Exceptionphp php$zhcephp)php php{
php php php php php php php php php php php php php$messagephp php=php php'Errorphp inphp requestphp tophp AWSphp servicephp:php php'php php.php php$zhcephp-php>getMessagephp(php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exceptionphp(php$messagephp,php php$zhcephp-php>getCodephp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Responsephp(php$httpResponsephp)php;
php php php php php php php php php$thisphp-php>php_checkForErrorsphp(php$responsephp)php;
php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp requiredphp authenticationphp andphp versionphp parametersphp tophp anphp arrayphp of
php php php php php php*php parameters
php php php php php php*
php php php php php php*php Thephp requiredphp parametersphp arephp:
php php php php php php*php php-php AWSAccessKey
php php php php php php*php php-php SignatureVersion
php php php php php php*php php-php Timestamp
php php php php php php*php php-php Versionphp and
php php php php php php*php php-php Signature
php php php php php php*
php php php php php php*php Ifphp aphp requiredphp parameterphp isphp alreadyphp setphp inphp thephp php<ttphp>php$parameters<php/ttphp>php arrayphp,
php php php php php php*php itphp isphp overwrittenphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$parametersphp thephp arrayphp tophp whichphp tophp addphp thephp required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php parametersphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_addRequiredParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php php$parametersphp[php'AWSAccessKeyIdphp'php]php php php php=php php$thisphp-php>php_getAccessKeyphp(php)php;
php php php php php php php php php$parametersphp[php'SignatureVersionphp'php]php php=php php$thisphp-php>php_signatureVersionphp;
php php php php php php php php php$parametersphp[php'Timestampphp'php]php php php php php php php php php=php gmdatephp(php'cphp'php)php;
php php php php php php php php php$parametersphp[php'Versionphp'php]php php php php php php php php php php php=php php$thisphp-php>php_sdbApiVersionphp;
php php php php php php php php php$parametersphp[php'SignatureMethodphp'php]php php php=php php$thisphp-php>php_signatureMethodphp;
php php php php php php php php php$parametersphp[php'Signaturephp'php]php php php php php php php php php=php php$thisphp-php>php_signParametersphp(php$parametersphp)php;

php php php php php php php php returnphp php$parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computesphp thephp RFCphp php2php1php0php4php-compliantphp HMACphp signaturephp forphp requestphp parameters
php php php php php php*
php php php php php php*php Thisphp implementsphp thephp Amazonphp Webphp Servicesphp signaturephp,php asphp perphp thephp following
php php php php php php*php specificationphp:
php php php php php php*
php php php php php php*php php1php.php Sortphp allphp requestphp parametersphp php(includingphp php<ttphp>SignatureVersion<php/ttphp>php and
php php php php php php*php php php php excludingphp php<ttphp>Signature<php/ttphp>php,php thephp valuephp ofphp whichphp isphp beingphp createdphp)php,
php php php php php php*php php php php ignoringphp casephp.
php php php php php php*
php php php php php php*php php2php.php Iteratephp overphp thephp sortedphp listphp andphp appendphp thephp parameterphp namephp php(inphp its
php php php php php php*php php php php originalphp casephp)php andphp thenphp itsphp valuephp.php Dophp notphp URLphp-encodephp thephp parameter
php php php php php php*php php php php valuesphp beforephp constructingphp thisphp stringphp.php Dophp notphp usephp anyphp separator
php php php php php php*php php php php charactersphp whenphp appendingphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php$parametersphp thephp parametersphp forphp whichphp tophp getphp thephp signaturephp.
php php php php php php*php php@paramphp stringphp php$secretKeyphp php thephp secretphp keyphp tophp usephp tophp signphp thephp parametersphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp signedphp dataphp.
php php php php php php*php/
php php php php protectedphp functionphp php_signParametersphp(arrayphp php$paramatersphp)
php php php php php{
php php php php php php php php php$dataphp php php=php php"POSTphp\nphp"php;
php php php php php php php php php$dataphp php.php=php php$thisphp-php>getEndpointphp(php)php-php>getHostphp(php)php php.php php"php\nphp"php;
php php php php php php php php php$dataphp php.php=php php"php/php\nphp"php;

php php php php php php php php uksortphp(php$paramatersphp,php php'strcmpphp'php)php;
php php php php php php php php unsetphp(php$paramatersphp[php'Signaturephp'php]php)php;

php php php php php php php php php$arrDataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramatersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$valuephp php=php urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php"php%php7Ephp"php,php php"php~php"php,php php$valuephp)php;
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php"php+php"php,php php"php%php2php0php"php,php php$valuephp)php;
php php php php php php php php php php php php php$arrDataphp[php]php php=php urlencodephp(php$keyphp)php php.php php'php=php'php php.php php$valuephp;
php php php php php php php php php}

php php php php php php php php php$dataphp php.php=php implodephp(php'php&php'php,php php$arrDataphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;
php php php php php php php php php$hmacphp php=php Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_getSecretKeyphp(php)php,php php'SHAphp2php5php6php'php,php php$dataphp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php;

php php php php php php php php returnphp basephp6php4php_encodephp(php$hmacphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp forphp errorsphp responsesphp fromphp Amazon
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Responsephp php$responsephp thephp responsephp objectphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php checkphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exceptionphp ifphp onephp orphp morephp errorsphp are
php php php php php php*php php php php php php php php php returnedphp fromphp Amazonphp.
php php php php php php*php/
php php php php privatephp functionphp php_checkForErrorsphp(Zendphp_Servicephp_Amazonphp_SimpleDbphp_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$responsephp-php>getDocumentphp(php)php)php;
php php php php php php php php php$listphp php php=php php$xpathphp-php>queryphp(php'php/php/Errorphp'php)php;
php php php php php php php php ifphp php(php$listphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php$nodephp php php php php=php php$listphp-php>itemphp(php0php)php;
php php php php php php php php php php php php php$codephp php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(Codephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$messagephp php=php php$xpathphp-php>evaluatephp(php'stringphp(Messagephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Exceptionphp(php$messagephp,php php0php,php php$codephp)php;
php php php php php php php php php}
php php php php php}
php}
