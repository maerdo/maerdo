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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FormElementphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_HtmlElement
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/HtmlElementphp.phpphp'php;

php/php*php*
php php*php Basephp helperphp forphp formphp elementsphp.php php Extendphp thisphp,php donphp'tphp usephp itphp onphp itsphp ownphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Viewphp_Helperphp_FormElementphp extendsphp Zendphp_Viewphp_Helperphp_HtmlElement
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Translate
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php Getphp translator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translate
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp translator
php php php php php php*
php php php php php php*php php@paramphp php php$translatorphp|nullphp Zendphp_Translate
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_FormElement
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$translatorphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php nullphp;
php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp;
php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp-php>getAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp translatorphp specifiedphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp parameterphp argumentsphp tophp anphp elementphp infophp arrayphp.
php php php php php php*
php php php php php php*php Ephp.gphp,php formExamplephp(php$namephp,php php$valuephp,php php$attribsphp,php php$optionsphp,php php$listsepphp)php is
php php php php php php*php thephp samephp thingphp asphp formExamplephp(arrayphp(php'namephp'php php=php>php php.php.php.php)php)php.
php php php php php php*
php php php php php php*php Notephp thatphp youphp cannotphp passphp aphp php'disablephp'php paramphp;php youphp needphp tophp pass
php php php php php php*php itphp asphp anphp php'attribsphp'php keyphp.
php php php php php php*
php php php php php php*php php@accessphp protected
php php php php php php*
php php php php php php*php php@returnphp arrayphp Anphp elementphp infophp arrayphp withphp keysphp forphp namephp,php valuephp,
php php php php php php*php attribsphp,php optionsphp,php listsepphp,php disablephp,php andphp escapephp.
php php php php php php*php/
php php php php protectedphp functionphp php_getInfophp(php$namephp,php php$valuephp php=php nullphp,php php$attribsphp php=php nullphp,
php php php php php php php php php$optionsphp php=php nullphp,php php$listsepphp php=php null
php php php php php)php php{
php php php php php php php php php/php/php thephp baselinephp infophp.php php notephp thatphp php$namephp servesphp aphp dualphp purposephp;
php php php php php php php php php/php/php ifphp anphp arrayphp,php itphp'sphp anphp elementphp infophp arrayphp thatphp willphp override
php php php php php php php php php/php/php thesephp baselinephp valuesphp.php php asphp suchphp,php ignorephp itphp forphp thephp php'namephp'
php php php php php php php php php/php/php ifphp itphp'sphp anphp arrayphp.
php php php php php php php php php$infophp php=php arrayphp(
php php php php php php php php php php php php php'namephp'php php php php php=php>php isphp_arrayphp(php$namephp)php php?php php'php'php php:php php$namephp,
php php php php php php php php php php php php php'idphp'php php php php php php php=php>php isphp_arrayphp(php$namephp)php php?php php'php'php php:php php$namephp,
php php php php php php php php php php php php php'valuephp'php php php php=php>php php$valuephp,
php php php php php php php php php php php php php'attribsphp'php php=php>php php$attribsphp,
php php php php php php php php php php php php php'optionsphp'php php=php>php php$optionsphp,
php php php php php php php php php php php php php'listsepphp'php php=php>php php$listsepphp,
php php php php php php php php php php php php php'disablephp'php php=php>php falsephp,
php php php php php php php php php php php php php'escapephp'php php php=php>php truephp,
php php php php php php php php php)php;

php php php php php php php php php/php/php overridephp withphp namedphp args
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php php/php/php onlyphp setphp keysphp thatphp arephp alreadyphp inphp info
php php php php php php php php php php php php foreachphp php(php$infophp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$namephp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$infophp[php$keyphp]php php=php php$namephp[php$keyphp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Ifphp allphp helperphp optionsphp arephp passedphp asphp anphp arrayphp,php attribsphp mayphp have
php php php php php php php php php php php php php/php/php beenphp asphp well
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$attribsphp)php php{
php php php php php php php php php php php php php php php php php$attribsphp php=php php$infophp[php'attribsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$attribsphp php=php php(arrayphp)php$attribsphp;

php php php php php php php php php/php/php Normalizephp readonlyphp tag
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'readonlyphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp[php'readonlyphp'php]php php=php php'readonlyphp'php;
php php php php php php php php php}

php php php php php php php php php/php/php Disablephp attribute
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'disablephp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php ifphp php(isphp_scalarphp(php$attribsphp[php'disablephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php disablephp thephp element
php php php php php php php php php php php php php php php php php$infophp[php'disablephp'php]php php=php php(boolphp)php$attribsphp[php'disablephp'php]php;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$attribsphp[php'disablephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$infophp[php'disablephp'php]php php=php php$attribsphp[php'disablephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Setphp IDphp forphp element
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$infophp[php'idphp'php]php php=php php(stringphp)php$attribsphp[php'idphp'php]php;
php php php php php php php php php}php elsephp ifphp php(php'php'php php!php=php=php php$infophp[php'namephp'php]php)php php{
php php php php php php php php php php php php php$infophp[php'idphp'php]php php=php trimphp(strtrphp(php$infophp[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'php[php'php php=php>php php'php-php'php,php php'php]php'php php=php>php php'php'php)php)php,php php'php-php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp escapingphp fromphp attributes
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'escapephp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$infophp[php'escapephp'php]php php=php php(boolphp)php$attribsphp[php'escapephp'php]php;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp listsetpphp fromphp attributes
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'listsepphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$infophp[php'listsepphp'php]php php=php php(stringphp)php$attribsphp[php'listsepphp'php]php;
php php php php php php php php php}

php php php php php php php php php/php/php Removephp attribsphp thatphp mightphp overwritephp thephp otherphp keysphp.php Wephp dophp thisphp LAST
php php php php php php php php php/php/php becausephp wephp neededphp thephp otherphp attribsphp valuesphp earlierphp.
php php php php php php php php foreachphp php(php$infophp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$infophp[php'attribsphp'php]php php=php php$attribsphp;

php php php php php php php php php/php/php donephp!
php php php php php php php php returnphp php$infophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp hiddenphp elementphp.
php php php php php php*
php php php php php php*php Wephp havephp thisphp asphp aphp commonphp methodphp becausephp otherphp elementsphp often
php php php php php php*php needphp hiddenphp elementsphp forphp theirphp operationphp.
php php php php php php*
php php php php php php*php php@accessphp protected
php php php php php php*
php php php php php php*php php@paramphp php$namephp Thephp elementphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php$valuephp Thephp elementphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php$attribsphp Attributesphp forphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Aphp hiddenphp elementphp.
php php php php php php*php/
php php php php protectedphp functionphp php_hiddenphp(php$namephp,php php$valuephp php=php nullphp,php php$attribsphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php'php<inputphp typephp=php"hiddenphp"php'
php php php php php php php php php php php php php php.php php'php namephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$namephp)php php.php php'php"php'
php php php php php php php php php php php php php php.php php'php valuephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php php.php php$thisphp-php>getClosingBracketphp(php)php;
php php php php php}
php}
