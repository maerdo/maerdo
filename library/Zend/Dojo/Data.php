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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dataphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php dojophp.dataphp supportphp forphp Zendphp Framework
php php*
php php*php php@usesphp php php php php php php ArrayAccess
php php*php php@usesphp php php php php php php Iterator
php php*php php@usesphp php php php php php php Countable
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dojophp_Dataphp implementsphp ArrayAccessphp,Iteratorphp,Countable
php{
php php php php php/php*php*
php php php php php php*php Identifierphp fieldphp ofphp item
php php php php php php*php php@varphp stringphp|int
php php php php php php*php/
php php php php protectedphp php$php_identifierphp;

php php php php php/php*php*
php php php php php php*php Collectedphp items
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_itemsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Labelphp fieldphp ofphp item
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_labelphp;

php php php php php/php*php*
php php php php php php*php Dataphp containerphp metadata
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_metadataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$identifier
php php php php php php*php php@paramphp php arrayphp|Traversablephp|nullphp php$items
php php php php php php*php php@paramphp php stringphp|nullphp php$label
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$identifierphp php=php nullphp,php php$itemsphp php=php nullphp,php php$labelphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$identifierphp)php php{
php php php php php php php php php php php php php$thisphp-php>setIdentifierphp(php$identifierphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$itemsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setItemsphp(php$itemsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$labelphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLabelphp(php$labelphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp itemsphp tophp collect
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Traversablephp php$items
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp setItemsphp(php$itemsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearItemsphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addItemsphp(php$itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp individualphp itemphp,php optionallyphp byphp identifierphp php(overwritesphp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|objectphp php$item
php php php php php php*php php@paramphp php stringphp|nullphp php$identifier
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp setItemphp(php$itemphp,php php$idphp php=php nullphp)
php php php php php{
php php php php php php php php php$itemphp php=php php$thisphp-php>php_normalizeItemphp(php$itemphp,php php$idphp)php;
php php php php php php php php php$thisphp-php>php_itemsphp[php$itemphp[php'idphp'php]php]php php=php php$itemphp[php'dataphp'php]php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp individualphp itemphp,php optionallyphp byphp identifier
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|objectphp php$item
php php php php php php*php php@paramphp php stringphp|nullphp php$id
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp addItemphp(php$itemphp,php php$idphp php=php nullphp)
php php php php php{
php php php php php php php php php$itemphp php=php php$thisphp-php>php_normalizeItemphp(php$itemphp,php php$idphp)php;

php php php php php php php php ifphp php(php$thisphp-php>hasItemphp(php$itemphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Overwritingphp itemsphp usingphp addItemphp(php)php isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_itemsphp[php$itemphp[php'idphp'php]php]php php=php php$itemphp[php'dataphp'php]php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp itemsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Traversablephp php$items
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp addItemsphp(php$itemsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$itemsphp)php php&php&php php(php!isphp_objectphp(php$itemsphp)php php|php|php php!php(php$itemsphp instanceofphp Traversablephp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Onlyphp arraysphp andphp Traversablephp objectsphp mayphp bephp addedphp tophp php'php php.php php_php_CLASSphp_php_php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$thisphp-php>addItemphp(php$itemphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp itemsphp asphp anphp array
php php php php php php*
php php php php php php*php Serializesphp itemsphp tophp arraysphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getItemsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_itemsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp anphp itemphp withphp thephp givenphp identifierphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$id
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasItemphp(php$idphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$idphp,php php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp itemphp byphp identifier
php php php php php php*
php php php php php php*php Itemphp retrievedphp willphp bephp flattenedphp tophp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getItemphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasItemphp(php$idphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_itemsphp[php$idphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp itemphp byphp identifier
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp removeItemphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasItemphp(php$idphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_itemsphp[php$idphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp itemsphp atphp once
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp clearItemsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_itemsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp identifierphp forphp itemphp lookups
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp|nullphp php$identifier
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp setIdentifierphp(php$identifierphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$identifierphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_identifierphp php=php nullphp;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$identifierphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_identifierphp php=php php$identifierphp;
php php php php php php php php php}php elseifphp php(isphp_numericphp(php$identifierphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_identifierphp php=php php(intphp)php php$identifierphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Invalidphp identifierphp;php pleasephp usephp aphp stringphp orphp integerphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp itemphp identifier
php php php php php php*
php php php php php php*php php@returnphp stringphp|intphp|null
php php php php php php*php/
php php php php publicphp functionphp getIdentifierphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_identifierphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp labelphp tophp usephp forphp displayingphp itemphp associations
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$label
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp setLabelphp(php$labelphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$labelphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_labelphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_labelphp php=php php(stringphp)php php$labelphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp itemphp associationphp label
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLabelphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_labelphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp metadataphp byphp keyphp orphp enphp masse
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$spec
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp setMetadataphp(php$specphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php php&php&php php(nullphp php!php=php=php php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_metadataphp[php$specphp]php php=php php$valuephp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$specphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMetadataphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp metadataphp itemphp orphp allphp metadata
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php$keyphp Metadataphp keyphp whenphp pullingphp singlephp metadataphp item
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getMetadataphp(php$keyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_metadataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_metadataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_metadataphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp individualphp orphp allphp metadataphp itemphp(sphp)
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php$key
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp clearMetadataphp(php$keyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$keyphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_metadataphp php=php arrayphp(php)php;
php php php php php php php php php}php elseifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_metadataphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_metadataphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp objectphp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp fromArrayphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'identifierphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setIdentifierphp(php$dataphp[php'identifierphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'labelphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLabelphp(php$dataphp[php'labelphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'itemsphp'php,php php$dataphp)php php&php&php isphp_arrayphp(php$dataphp[php'itemsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setItemsphp(php$dataphp[php'itemsphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>clearItemsphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp objectphp fromphp JSON
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$json
php php php php php php*php php@returnphp Zendphp_Dojophp_Data
php php php php php php*php/
php php php php publicphp functionphp fromJsonphp(php$jsonphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$jsonphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'fromJsonphp(php)php expectsphp JSONphp inputphp'php)php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php php$dataphp php=php Zendphp_Jsonphp:php:decodephp(php$jsonphp)php;
php php php php php php php php returnphp php$thisphp-php>fromArrayphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Seralizephp entirephp dataphp structurephp,php includingphp identifierphp andphp labelphp,php tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$identifierphp php=php php$thisphp-php>getIdentifierphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Serializationphp requiresphp thatphp anphp identifierphp bephp presentphp inphp thephp objectphp;php firstphp callphp setIdentifierphp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php php$arrayphp php=php arrayphp(
php php php php php php php php php php php php php'identifierphp'php php=php>php php$identifierphp,
php php php php php php php php php php php php php'itemsphp'php php php php php php php=php>php arrayphp_valuesphp(php$thisphp-php>getItemsphp(php)php)php,
php php php php php php php php php)php;

php php php php php php php php php$metadataphp php=php php$thisphp-php>getMetadataphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$metadataphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$metadataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$arrayphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$labelphp php=php php$thisphp-php>getLabelphp(php)php)php)php php{
php php php php php php php php php php php php php$arrayphp[php'labelphp'php]php php=php php$labelphp;
php php php php php php php php php}

php php php php php php php php returnphp php$arrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp tophp JSONphp php(dojophp.dataphp formatphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$thisphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp tophp stringphp php(proxyphp tophp php{php@linkphp toJsonphp(php)php}php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toJsonphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php doesphp offsetphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php(nullphp php!php=php=php php$thisphp-php>getItemphp(php$offsetphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php retrievephp byphp offset
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$offset
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getItemphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php setphp valuephp byphp offset
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@paramphp php arrayphp|objectphp|nullphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setItemphp(php$valuephp,php php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php unsetphp valuephp byphp offset
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php php$thisphp-php>removeItemphp(php$offsetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php getphp currentphp value
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php getphp currentphp key
php php php php php php*
php php php php php php*php php@returnphp stringphp|int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php getphp nextphp item
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php rewindphp tophp firstphp valuephp inphp collection
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php returnphp resetphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php isphp itemphp validphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)php php$thisphp-php>currentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countablephp:php howphp manyphp itemsphp arephp present
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_itemsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp anphp itemphp tophp attachphp tophp thephp collection
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|objectphp php$item
php php php php php php*php php@paramphp php stringphp|intphp|nullphp php$id
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeItemphp(php$itemphp,php php$idphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$identifierphp php=php php$thisphp-php>getIdentifierphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Youphp mustphp setphp anphp identifierphp priorphp tophp addingphp itemsphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_objectphp(php$itemphp)php php&php&php php!isphp_arrayphp(php$itemphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Onlyphp arraysphp andphp objectsphp mayphp bephp attachedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_objectphp(php$itemphp)php)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$itemphp,php php'toArrayphp'php)php)php php{
php php php php php php php php php php php php php php php php php$itemphp php=php php$itemphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$itemphp php=php getphp_objectphp_varsphp(php$itemphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(nullphp php=php=php=php php$idphp)php php&php&php php!arrayphp_keyphp_existsphp(php$identifierphp,php php$itemphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Itemphp mustphp containphp aphp columnphp matchingphp thephp currentlyphp setphp identifierphp'php)php;
php php php php php php php php php}php elseifphp php(nullphp php=php=php=php php$idphp)php php{
php php php php php php php php php php php php php$idphp php=php php$itemphp[php$identifierphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$itemphp[php$identifierphp]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'idphp'php php php php=php>php php$idphp,
php php php php php php php php php php php php php'dataphp'php php=php>php php$itemphp,
php php php php php php php php php)php;
php php php php php}
php}
