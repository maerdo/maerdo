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
php php*php php@versionphp php php php php$Idphp:php Containerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraints
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Resourcephp/SearchConstraintsphp.phpphp'php;

php/php*php*
php php*php Thisphp classphp isphp anphp iteratorphp thatphp willphp iteratephp onlyphp overphp enabledphp resources
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp implementsphp RecursiveIteratorphp,php Countable
php{

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_subResourcesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_positionphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_appendablephp php=php truephp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Finderphp methodphp tophp bephp ablephp tophp findphp resourcesphp byphp contextphp name
php php php php php php*php andphp attributesphp.php php Examplephp usagephp:
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraintsphp|stringphp|arrayphp php$searchParameters
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp searchphp(php$matchSearchConstraintsphp,php php$nonMatchSearchConstraintsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$matchSearchConstraintsphp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraintsphp)php php{
php php php php php php php php php php php php php$matchSearchConstraintsphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraintsphp(php$matchSearchConstraintsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>rewindphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Thisphp shouldphp bephp rephp-writtenphp withphp betterphp supportphp forphp aphp filterphp iteratorphp,php itsphp thephp wayphp tophp go
php php php php php php php php php php*php/

php php php php php php php php ifphp php(php$nonMatchSearchConstraintsphp)php php{
php php php php php php php php php php php php php$filterIteratorphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilterphp(php$thisphp,php arrayphp(php'denyNamesphp'php php=php>php php$nonMatchSearchConstraintsphp)php)php;
php php php php php php php php php php php php php$riIteratorphp php=php newphp RecursiveIteratorIteratorphp(php$filterIteratorphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$riIteratorphp php=php newphp RecursiveIteratorIteratorphp(php$thisphp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php php}

php php php php php php php php php$foundResourcephp php php php php php=php falsephp;
php php php php php php php php php$currentConstraintphp php=php php$matchSearchConstraintsphp-php>getConstraintphp(php)php;
php php php php php php php php php$foundDepthphp php php php php php php php php=php php0php;

php php php php php php php php foreachphp php(php$riIteratorphp asphp php$currentResourcephp)php php{

php php php php php php php php php php php php php/php/php ifphp currentphp depthphp isphp lessphp thanphp foundphp depthphp,php end
php php php php php php php php php php php php ifphp php(php$riIteratorphp-php>getDepthphp(php)php <php php$foundDepthphp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(strtolowerphp(php$currentResourcephp-php>getNamephp(php)php)php php=php=php strtolowerphp(php$currentConstraintphp-php>namephp)php)php php{

php php php php php php php php php php php php php php php php php$paramsMatchphp php=php truephp;

php php php php php php php php php php php php php php php php php/php/php php@todophp checkphp tophp ensurephp paramsphp matchphp php(perhapsphp)
php php php php php php php php php php php php php php php php ifphp php(countphp(php$currentConstraintphp-php>paramsphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$currentResourceAttributesphp php=php php$currentResourcephp-php>getAttributesphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$currentConstraintphp-php>paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Profilephp_Exceptionphp(php'Searchphp parameterphp specificsphp mustphp bephp inphp thephp formphp ofphp anphp arrayphp forphp keyphp php"php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$currentConstraintphp-php>namephp php.php'php"php'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$currentConstraintphp-php>paramsphp asphp php$paramNamephp php=php>php php$paramValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$currentResourceAttributesphp[php$paramNamephp]php)php php|php|php php$currentResourceAttributesphp[php$paramNamephp]php php!php=php php$paramValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramsMatchphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$paramsMatchphp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundDepthphp php=php php$riIteratorphp-php>getDepthphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$currentConstraintphp php=php php$matchSearchConstraintsphp-php>getConstraintphp(php)php)php php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundResourcephp php=php php$currentResourcephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$foundResourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createResourceAtphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraintsphp php$appendResourceOrSearchConstraints
php php php php php php*php php@paramphp stringphp php$context
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp createResourceAtphp(php$appendResourceOrSearchConstraintsphp,php php$contextphp,php Arrayphp php$attributesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!php$appendResourceOrSearchConstraintsphp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp)php php{
php php php php php php php php php php php php ifphp php(php(php$parentResourcephp php=php php$thisphp-php>searchphp(php$appendResourceOrSearchConstraintsphp)php)php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Profilephp_Exceptionphp(php'Nophp nodephp wasphp foundphp tophp appendphp tophp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$parentResourcephp php=php php$appendResourceOrSearchConstraintsphp;
php php php php php php php php php}

php php php php php php php php returnphp php$parentResourcephp-php>createResourcephp(php$contextphp,php php$attributesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createResourcephp(php)
php php php php php php*
php php php php php php*php Methodphp tophp createphp aphp resourcephp withphp aphp givenphp contextphp withphp specificphp attributes
php php php php php php*
php php php php php php*php php@paramphp stringphp php$context
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp createResourcephp(php$contextphp,php Arrayphp php$attributesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$contextRegistryphp php=php Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp:php:getInstancephp(php)php;
php php php php php php php php php php php php ifphp php(php$contextRegistryphp-php>hasContextphp(php$contextphp)php)php php{
php php php php php php php php php php php php php php php php php$contextphp php=php php$contextRegistryphp-php>getContextphp(php$contextphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Profilephp_Exceptionphp(php'Contextphp byphp namephp php'php php.php php$contextphp php.php php'php wasphp notphp foundphp inphp thephp contextphp registryphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!php$contextphp instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Profilephp_Exceptionphp(php'Contextphp mustphp bephp ofphp typephp stringphp orphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$newResourcephp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp(php$contextphp)php;

php php php php php php php php ifphp php(php$attributesphp)php php{
php php php php php php php php php php php php php$newResourcephp-php>setAttributesphp(php$attributesphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Interestingphp logicphp herephp:
php php php php php php php php php php*
php php php php php php php php php php*php Firstphp setphp thephp parentResourcephp php(thisphp willphp alsophp bephp donephp insidephp appendphp)php.php php Thisphp willphp allow
php php php php php php php php php php*php thephp initializationphp routinephp tophp changephp thephp appendabilityphp ofphp thephp parentphp resourcephp.php php This
php php php php php php php php php php*php isphp importantphp tophp allowphp specificphp resourcesphp tophp bephp appendablephp byphp veryphp specificphp subphp-resourcesphp.
php php php php php php php php php php*php/
php php php php php php php php php$newResourcephp-php>setParentResourcephp(php$thisphp)php;
php php php php php php php php php$newResourcephp-php>initializeContextphp(php)php;
php php php php php php php php php$thisphp-php>appendphp(php$newResourcephp)php;

php php php php php php php php returnphp php$newResourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAttributesphp(php)
php php php php php php*
php php php php php php*php persistphp thephp attributesphp ifphp thephp resourcephp willphp acceptphp them
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$attributes
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp setAttributesphp(Arrayphp php$attributesphp)
php php php php php{
php php php php php php php php foreachphp php(php$attributesphp asphp php$attrNamephp php=php>php php$attrValuephp)php php{
php php php php php php php php php php php php php$setMethodphp php=php php'setphp'php php.php php$attrNamephp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$setMethodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$setMethodphp}php(php$attrValuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setAttributephp(php$attrNamephp,php php$attrValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getAttributesphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttributesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_attributesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAttributephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp setAttributephp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_attributesphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getAttributephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp getAttributephp(php$namephp)
php php php php php{
php php php php php php php php returnphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_attributesphp)php)php php?php php$thisphp-php>php_attributesphp[php$namephp]php php:php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasAttributephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasAttributephp(php$namephp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_attributesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAppendablephp(php)
php php php php php php*
php php php php php php*php php@paramphp boolphp php$appendable
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp setAppendablephp(php$appendablephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_appendablephp php=php php(boolphp)php php$appendablephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php isAppendablephp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isAppendablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_appendablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setParentResourcephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp php$parentResource
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp setParentResourcephp(Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp php$parentResourcephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentResourcephp php=php php$parentResourcephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getParentResourcephp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp getParentResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parentResourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php appendphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp php$resource
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php php php php php*php/
php php php php publicphp functionphp appendphp(Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>isAppendablephp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Resourcephp byphp namephp php'php php.php php(stringphp)php php$thisphp php.php php'php isphp notphp appendablephp'php)php;
php php php php php php php php php}
php php php php php php php php arrayphp_pushphp(php$thisphp-php>php_subResourcesphp,php php$resourcephp)php;
php php php php php php php php php$resourcephp-php>setParentResourcephp(php$thisphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php currentphp(php)php php-php requiredphp byphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_subResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php keyphp(php)php php-php requiredphp byphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_subResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php nextphp(php)php php-php requiredphp byphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_subResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php rewindphp(php)php php-php requiredphp byphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php returnphp resetphp(php$thisphp-php>php_subResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php validphp(php)php php-php php-php requiredphp byphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)php php$thisphp-php>currentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php(countphp(php$thisphp-php>php_subResourcesphp php>php php0php)php)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>currentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php countphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_subResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_clonephp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_clonephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_subResourcesphp asphp php$indexphp php=php>php php$resourcephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_subResourcesphp[php$indexphp]php php=php clonephp php$resourcephp;
php php php php php php php php php}
php php php php php}

php}