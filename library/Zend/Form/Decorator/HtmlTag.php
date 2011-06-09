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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Formphp_Decoratorphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_Elementphp_HtmlTag
php php*
php php*php Wrapsphp contentphp inphp anphp HTMLphp blockphp tagphp.
php php*
php php*php Optionsphp acceptedphp arephp:
php php*php php-php tagphp:php tagphp tophp usephp inphp decorator
php php*php php-php noAttribsphp:php dophp notphp renderphp attributesphp inphp thephp openingphp tag
php php*php php-php placementphp:php php'appendphp'php orphp php'prependphp'php.php Ifphp php'appendphp'php,php rendersphp openingphp and
php php*php php php closingphp tagphp afterphp contentphp;php ifphp prependphp,php rendersphp openingphp andphp closingphp tag
php php*php php php beforephp contentphp.
php php*php php-php openOnlyphp:php renderphp openingphp tagphp only
php php*php php-php closeOnlyphp:php renderphp closingphp tagphp only
php php*
php php*php Anyphp otherphp optionsphp passedphp arephp processedphp asphp HTMLphp attributesphp ofphp thephp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HtmlTagphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_HtmlTagphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Characterphp encodingphp tophp usephp whenphp escapingphp attributes
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Placementphp;php defaultphp tophp surroundphp content
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php HTMLphp tagphp tophp use
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tagphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filter
php php php php php php*php/
php php php php protectedphp php$php_tagFilterphp;

php php php php php/php*php*
php php php php php php*php Convertphp optionsphp tophp tagphp attributes
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_htmlAttribsphp(arrayphp php$attribsphp)
php php php php php{
php php php php php php php php php$xhtmlphp php=php php'php'php;
php php php php php php php php php$encphp php php php=php php$thisphp-php>php_getEncodingphp(php)php;
php php php php php php php php foreachphp php(php(arrayphp)php php$attribsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$keyphp php=php htmlspecialcharsphp(php$keyphp,php ENTphp_COMPATphp,php php$encphp)php;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'callbackphp'php,php php$valphp)
php php php php php php php php php php php php php php php php php php php php php&php&php isphp_callablephp(php$valphp[php'callbackphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php php$valphp[php'callbackphp'php]php(php$thisphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php implodephp(php'php php'php,php php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valphp php php php php=php htmlspecialcharsphp(php$valphp,php ENTphp_COMPATphp,php php$encphp)php;
php php php php php php php php php php php php php$xhtmlphp php.php=php php"php php$keyphp=php\php"php$valphp\php"php"php;
php php php php php php php php php}
php php php php php php php php returnphp php$xhtmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp tag
php php php php php php*
php php php php php php*php Ensuresphp tagphp isphp alphanumericphp charactersphp onlyphp,php andphp allphp lowercasephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp normalizeTagphp(php$tagphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tagFilterphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Alnumphp.phpphp'php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/StringToLowerphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_tagFilterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_tagFilterphp-php>addFilterphp(newphp Zendphp_Filterphp_Alnumphp(php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>addFilterphp(newphp Zendphp_Filterphp_StringToLowerphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_tagFilterphp-php>filterphp(php$tagphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp tagphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_HtmlTag
php php php php php php*php/
php php php php publicphp functionphp setTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagphp php=php php$thisphp-php>normalizeTagphp(php$tagphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp tag
php php php php php php*
php php php php php php*php Ifphp nophp tagphp isphp registeredphp,php eitherphp viaphp setTagphp(php)php orphp asphp anphp optionphp,php usesphp php'divphp'php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTagphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$tagphp php=php php$thisphp-php>getOptionphp(php'tagphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setTagphp(php'divphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setTagphp(php$tagphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp formattedphp openphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getOpenTagphp(php$tagphp,php arrayphp php$attribsphp php=php nullphp)
php php php php php{
php php php php php php php php php$htmlphp php=php php'<php'php php.php php$tagphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$attribsphp)php php{
php php php php php php php php php php php php php$htmlphp php.php=php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php;
php php php php php php php php php}
php php php php php php php php php$htmlphp php.php=php php'php>php'php;
php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp formattedphp closingphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getCloseTagphp(php$tagphp)
php php php php php{
php php php php php php php php returnphp php'<php/php'php php.php php$tagphp php.php php'php>php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp contentphp wrappedphp inphp anphp HTMLphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$tagphp php php php php php php php=php php$thisphp-php>getTagphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$noAttribsphp php=php php$thisphp-php>getOptionphp(php'noAttribsphp'php)php;
php php php php php php php php php$openOnlyphp php php=php php$thisphp-php>getOptionphp(php'openOnlyphp'php)php;
php php php php php php php php php$closeOnlyphp php=php php$thisphp-php>getOptionphp(php'closeOnlyphp'php)php;
php php php php php php php php php$thisphp-php>removeOptionphp(php'noAttribsphp'php)php;
php php php php php php php php php$thisphp-php>removeOptionphp(php'openOnlyphp'php)php;
php php php php php php php php php$thisphp-php>removeOptionphp(php'closeOnlyphp'php)php;

php php php php php php php php php$attribsphp php=php nullphp;
php php php php php php php php ifphp php(php!php$noAttribsphp)php php{
php php php php php php php php php php php php php$attribsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php ifphp php(php$closeOnlyphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$thisphp-php>php_getCloseTagphp(php$tagphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$openOnlyphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$thisphp-php>php_getOpenTagphp(php$tagphp,php php$attribsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$content
php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_getOpenTagphp(php$tagphp,php php$attribsphp)
php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_getCloseTagphp(php$tagphp)php;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php ifphp php(php$closeOnlyphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_getCloseTagphp(php$tagphp)php php.php php$contentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$openOnlyphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_getOpenTagphp(php$tagphp,php php$attribsphp)php php.php php$contentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_getOpenTagphp(php$tagphp,php php$attribsphp)
php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_getCloseTagphp(php$tagphp)
php php php php php php php php php php php php php php php php php php php php php php.php php$contentphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php(php(php$openOnlyphp php|php|php php!php$closeOnlyphp)php php?php php$thisphp-php>php_getOpenTagphp(php$tagphp,php php$attribsphp)php php:php php'php'php)
php php php php php php php php php php php php php php php php php php php php php php.php php$content
php php php php php php php php php php php php php php php php php php php php php php.php php(php(php$closeOnlyphp php|php|php php!php$openOnlyphp)php php?php php$thisphp-php>php_getCloseTagphp(php$tagphp)php php:php php'php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp encodingphp forphp usephp withphp htmlspecialcharsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getEncodingphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_encodingphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}php elseifphp php(nullphp php=php=php=php php(php$viewphp php=php php$elementphp-php>getViewphp(php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}php elseifphp php(php!php$viewphp instanceofphp Zendphp_Viewphp_Abstract
php php php php php php php php php php php php php&php&php php!methodphp_existsphp(php$viewphp,php php'getEncodingphp'php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php$viewphp-php>getEncodingphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}
php}
