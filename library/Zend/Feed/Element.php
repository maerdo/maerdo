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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Elementphp.phpphp php2php0php1php0php4php php2php0php1php0php-php0php1php-php0php6php php2php1php:php2php6php:php0php1Zphp matthewphp php$
php php*php/


php/php*php*
php php*php Wrapsphp aphp DOMElementphp allowingphp forphp SimpleXMLphp-likephp accessphp tophp attributesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Elementphp implementsphp ArrayAccess
php{

php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php protectedphp php$php_elementphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Characterphp encodingphp tophp utilize
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Feedphp_Element
php php php php php php*php/
php php php php protectedphp php$php_parentElementphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_appendedphp php=php truephp;


php php php php php/php*php*
php php php php php php*php Zendphp_Feedphp_Elementphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$elementphp Thephp DOMphp elementphp wephp'rephp encapsulatingphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_elementphp php=php php$elementphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp aphp DOMphp representationphp ofphp thephp element
php php php php php php*
php php php php php php*php Returnsphp thephp underlyingphp DOMphp objectphp,php whichphp canphp thenphp be
php php php php php php*php manipulatedphp withphp fullphp DOMphp methodsphp.
php php php php php php*
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp getDOMphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_elementphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Updatephp thephp objectphp fromphp aphp DOMphp element
php php php php php php*
php php php php php php*php Takephp aphp DOMElementphp objectphp,php whichphp mayphp bephp originallyphp fromphp aphp call
php php php php php php*php tophp getDOMphp(php)php orphp mayphp bephp customphp createdphp,php andphp usephp itphp asphp the
php php php php php php*php DOMphp treephp forphp thisphp Zendphp_Feedphp_Elementphp.
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$element
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDOMphp(DOMElementphp php$elementphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_elementphp php=php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>importNodephp(php$elementphp,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp parentphp elementphp ofphp thisphp objectphp tophp another
php php php php php php*php Zendphp_Feedphp_Elementphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Elementphp php$element
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setParentphp(Zendphp_Feedphp_Elementphp php$elementphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentElementphp php=php php$elementphp;
php php php php php php php php php$thisphp-php>php_appendedphp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Appendsphp thisphp elementphp tophp itsphp parentphp ifphp necessaryphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp ensureAppendedphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_appendedphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_parentElementphp-php>getDOMphp(php)php-php>appendChildphp(php$thisphp-php>php_elementphp)php;
php php php php php php php php php php php php php$thisphp-php>php_appendedphp php=php truephp;
php php php php php php php php php php php php php$thisphp-php>php_parentElementphp-php>ensureAppendedphp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp anphp XMLphp stringphp representationphp ofphp thisphp element
php php php php php php*
php php php php php php*php Returnsphp aphp stringphp ofphp thisphp elementphp'sphp XMLphp,php includingphp thephp XML
php php php php php php*php prologuephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php/php/php Returnphp aphp completephp documentphp includingphp XMLphp prologuephp.
php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>versionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>actualEncodingphp)php;
php php php php php php php php php$docphp-php>appendChildphp(php$docphp-php>importNodephp(php$thisphp-php>php_elementphp,php truephp)php)php;
php php php php php php php php returnphp php$docphp-php>saveXMLphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp XMLphp forphp onlyphp thisphp element
php php php php php php*
php php php php php php*php Returnsphp aphp stringphp ofphp thisphp elementphp'sphp XMLphp withoutphp prologuephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlFragmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>saveXMLphp(php$thisphp-php>php_elementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Encodingphp tophp use
php php php php php php*php php@returnphp Zendphp_Feedphp_Element
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp variablephp accessphp ontophp thephp underlyingphp entryphp representationphp.
php php php php php php*
php php php php php php*php Getphp-stylephp accessphp returnsphp aphp Zendphp_Feedphp_Elementphp representingphp the
php php php php php php*php childphp elementphp accessedphp.php Tophp getphp stringphp valuesphp,php usephp methodphp syntax
php php php php php php*php withphp thephp php_php_callphp(php)php overridingphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp accessphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php php$nodesphp php=php php$thisphp-php>php_childrenphp(php$varphp)php;
php php php php php php php php php$lengthphp php=php countphp(php$nodesphp)php;

php php php php php php php php ifphp php(php$lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Feedphp_Elementphp(php$nodesphp[php0php]php)php;
php php php php php php php php php}php elseifphp php(php$lengthphp php>php php1php)php php{
php php php php php php php php php php php php returnphp arrayphp_mapphp(createphp_functionphp(php'php$ephp'php,php php'returnphp newphp Zendphp_Feedphp_Elementphp(php$ephp)php;php'php)php,php php$nodesphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Whenphp creatingphp anonymousphp nodesphp forphp php_php_setphp chainingphp,php donphp't
php php php php php php php php php php php php php/php/php callphp appendChildphp(php)php onphp themphp.php Insteadphp wephp passphp thephp current
php php php php php php php php php php php php php/php/php elementphp tophp themphp asphp anphp extraphp referencephp;php thephp childphp is
php php php php php php php php php php php php php/php/php thenphp responsiblephp forphp appendingphp itselfphp whenphp itphp is
php php php php php php php php php php php php php/php/php actuallyphp setphp.php Thisphp wayphp php"ifphp php(php$foophp-php>barphp)php"php doesnphp'tphp create
php php php php php php php php php php php php php/php/php aphp phantomphp php"barphp"php elementphp inphp ourphp treephp.
php php php php php php php php php php php php ifphp php(strposphp(php$varphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php listphp(php$nsphp,php php$eltphp)php php=php explodephp(php'php:php'php,php php$varphp,php php2php)php;
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>createElementNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,php php$eltphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>createElementphp(php$varphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$nodephp php=php newphp selfphp(php$nodephp)php;
php php php php php php php php php php php php php$nodephp-php>setParentphp(php$thisphp)php;
php php php php php php php php php php php php returnphp php$nodephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Mapphp variablephp setsphp ontophp thephp underlyingphp entryphp representationphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp changephp.
php php php php php php*php php@paramphp php stringphp php$valphp Thephp propertyphp'sphp newphp valuephp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$varphp,php php$valphp)
php php php php php{
php php php php php php php php php$thisphp-php>ensureAppendedphp(php)php;

php php php php php php php php php$nodesphp php=php php$thisphp-php>php_childrenphp(php$varphp)php;
php php php php php php php php ifphp php(php!php$nodesphp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$varphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php listphp(php$nsphp,php php$eltphp)php php=php explodephp(php'php:php'php,php php$varphp,php php2php)php;
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>createElementNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,
php php php php php php php php php php php php php php php php php php php php php$varphp,php htmlspecialcharsphp(php$valphp,php ENTphp_NOQUOTESphp,php php$thisphp-php>getEncodingphp(php)php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>createElementphp(php$varphp,
php php php php php php php php php php php php php php php php php php php php htmlspecialcharsphp(php$valphp,php ENTphp_NOQUOTESphp,php php$thisphp-php>getEncodingphp(php)php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(countphp(php$nodesphp)php php>php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Cannotphp setphp thephp valuephp ofphp multiplephp tagsphp simultaneouslyphp.php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$nodesphp[php0php]php-php>nodeValuephp php=php php$valphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Mapphp issetphp callsphp ontophp thephp underlyingphp entryphp representationphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$var
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$varphp)
php php php php php{
php php php php php php php php php/php/php Lookphp forphp accessphp ofphp thephp formphp php{nsphp:varphp}php.php Wephp donphp'tphp use
php php php php php php php php php/php/php php_childrenphp(php)php herephp becausephp wephp canphp breakphp outphp ofphp thephp loop
php php php php php php php php php/php/php immediatelyphp oncephp wephp findphp somethingphp.
php php php php php php php php ifphp php(strposphp(php$varphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$eltphp)php php=php explodephp(php'php:php'php,php php$varphp,php php2php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementphp-php>childNodesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$childphp-php>localNamephp php=php=php php$eltphp php&php&php php$childphp-php>prefixphp php=php=php php$nsphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementphp-php>childNodesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$childphp-php>localNamephp php=php=php php$varphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp valuephp ofphp anphp elementphp withphp methodphp syntaxphp.
php php php php php php*
php php php php php php*php Mapphp methodphp callsphp tophp getphp thephp stringphp valuephp ofphp thephp requested
php php php php php php*php elementphp.php Ifphp therephp arephp multiplephp elementsphp thatphp matchphp,php thisphp will
php php php php php php*php returnphp anphp arrayphp ofphp thosephp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp php php php Thephp elementphp tophp getphp thephp stringphp valuephp ofphp.
php php php php php php*php php@paramphp php mixedphp php php$unusedphp Thisphp parameterphp isphp notphp usedphp.
php php php php php php*php php@returnphp mixedphp Thephp nodephp'sphp valuephp,php nullphp,php orphp anphp arrayphp ofphp nodesphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$varphp,php php$unusedphp)
php php php php php{
php php php php php php php php php$nodesphp php=php php$thisphp-php>php_childrenphp(php$varphp)php;

php php php php php php php php ifphp php(php!php$nodesphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elseifphp php(countphp(php$nodesphp)php php>php php1php)php php{
php php php php php php php php php php php php returnphp php$nodesphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$nodesphp[php0php]php-php>nodeValuephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Removephp allphp childrenphp matchingphp php$varphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$var
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$varphp)
php php php php php{
php php php php php php php php php$nodesphp php=php php$thisphp-php>php_childrenphp(php$varphp)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$parentphp php=php php$nodephp-php>parentNodephp;
php php php php php php php php php php php php php$parentphp-php>removeChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp nodeValuephp ofphp thisphp elementphp whenphp thisphp objectphp isphp used
php php php php php php*php inphp aphp stringphp contextphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>nodeValuephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Findsphp childrenphp withphp tagnamesphp matchingphp php$var
php php php php php php*
php php php php php php*php Similarphp tophp SimpleXMLphp'sphp childrenphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Tagnamephp tophp matchphp,php canphp bephp eitherphp namespacephp:tagNamephp orphp justphp tagNamephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_childrenphp(php$varphp)
php php php php php{
php php php php php php php php php$foundphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Lookphp forphp accessphp ofphp thephp formphp php{nsphp:varphp}php.
php php php php php php php php ifphp php(strposphp(php$varphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$eltphp)php php=php explodephp(php'php:php'php,php php$varphp,php php2php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementphp-php>childNodesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$childphp-php>localNamephp php=php=php php$eltphp php&php&php php$childphp-php>prefixphp php=php=php php$nsphp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp[php]php php=php php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementphp-php>childNodesphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$childphp-php>localNamephp php=php=php php$varphp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp[php]php php=php php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$foundphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp interfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$offsetphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$attrphp)php php=php explodephp(php'php:php'php,php php$offsetphp,php php2php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>hasAttributeNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,php php$attrphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>hasAttributephp(php$offsetphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp interfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$offsetphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$attrphp)php php=php explodephp(php'php:php'php,php php$offsetphp,php php2php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>getAttributeNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,php php$attrphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>getAttributephp(php$offsetphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp interfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>ensureAppendedphp(php)php;

php php php php php php php php ifphp php(strposphp(php$offsetphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$attrphp)php php=php explodephp(php'php:php'php,php php$offsetphp,php php2php)php;
php php php php php php php php php php php php php/php/php DOMElementphp:php:setAttributeNSphp(php)php requiresphp php$qualifiedNamephp tophp havephp aphp prefix
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>setAttributeNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,php php$offsetphp,php php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>setAttributephp(php$offsetphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Requiredphp byphp thephp ArrayAccessphp interfacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$offset
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$offsetphp,php php'php:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php listphp(php$nsphp,php php$attrphp)php php=php explodephp(php'php:php'php,php php$offsetphp,php php2php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>removeAttributeNSphp(Zendphp_Feedphp:php:lookupNamespacephp(php$nsphp)php,php php$attrphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_elementphp-php>removeAttributephp(php$offsetphp)php;
php php php php php php php php php}
php php php php php}

php}
