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
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_HtmlElementphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/HtmlElementphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp generatingphp urlsphp andphp/orphp imagephp tagsphp forphp usephp withphp tinysrcphp.net
php php*
php php*php tinysrcphp.netphp providesphp anphp APIphp forphp generatingphp scaledphp,php browserphp devicephp-specific
php php*php imagesphp.php Inphp essencephp,php youphp passphp thephp APIphp thephp URLphp tophp anphp imagephp onphp yourphp ownphp serverphp,
php php*php andphp tinysrcphp.netphp thenphp providesphp thephp appropriatephp imagephp basedphp onphp thephp devicephp that
php php*php accessesphp itphp.
php php*
php php*php Additionallyphp,php tinysrcphp.netphp allowsphp youphp tophp specifyphp additionalphp configurationphp via
php php*php thephp APIphp:
php php*
php php*php php-php imagephp sizephp.php Youphp mayphp definephp thisphp asphp:
php php*php php php php-php explicitphp size
php php*php php php php-php subtractivephp sizephp php(sizephp ofphp screenphp minusphp specifiedphp numberphp ofphp pixelsphp)
php php*php php php php-php percentagephp sizephp php(percentagephp ofphp screenphp sizephp)php)
php php*php php-php imagephp formatphp.php Thisphp willphp convertphp thephp imagephp tophp thephp givenphp formatphp;php allowed
php php*php php php valuesphp arephp php"pngphp"php orphp php"jpegphp"php.php Byphp defaultphp,php gifphp imagesphp arephp convertedphp tophp pngphp.
php php*
php php*php Thisphp helperphp allowsphp youphp tophp specifyphp allphp configurationphp optionsphp,php asphp wellphp asphp:
php php*
php php*php php-php whetherphp orphp notphp tophp generatephp thephp fullphp imagephp tagphp php(orphp justphp thephp URLphp)
php php*php php-php basephp urlphp tophp imagesphp php(whichphp shouldphp includephp thephp protocolphp,php serverphp,php and
php php*php php php optionallyphp portphp andphp basephp pathphp)
php php*
php php*php php@seephp php php php php php php php httpphp:php/php/tinysrcphp.netphp/
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_TinySrcphp extendsphp Zendphp_Viewphp_Helperphp_HtmlElement
php{
php php php php constphp TINYSRCphp_BASEphp php=php php'httpphp:php/php/iphp.tinysrcphp.mobiphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Basephp URLphp forphp images
php php php php php php*php/
php php php php protectedphp php$php_baseUrlphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp tophp createphp anphp imagephp tag
php php php php php php*php/
php php php php protectedphp php$php_createTagFlagphp php=php truephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Defaultphp widthphp andphp height
php php php php php php*php/
php php php php protectedphp php$php_dimensionsphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Defaultphp options
php php php php php php*
php php php php php php*php Usedphp whenphp determiningphp whatphp optionsphp werephp passedphp,php andphp needingphp tophp merge
php php php php php php*php themphp withphp defaultphp optionsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultOptionsphp php=php arrayphp(
php php php php php php php php php'basephp_urlphp'php php php php=php>php nullphp,
php php php php php php php php php'formatphp'php php php php php php=php>php nullphp,
php php php php php php php php php'widthphp'php php php php php php php=php>php falsephp,
php php php php php php php php php'heightphp'php php php php php php=php>php falsephp,
php php php php php php php php php'createphp_tagphp'php php=php>php truephp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Defaultphp imagephp formatphp tophp use
php php php php php php*php/
php php php php protectedphp php$php_formatphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Generatephp aphp linkphp orphp imagephp tagphp pointingphp tophp tinysrcphp.net
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$image
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp tinySrcphp(php$imagephp php=php nullphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$imagephp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$defaultOptionsphp php=php php$thisphp-php>php_defaultOptionsphp;
php php php php php php php php php$defaultOptionsphp[php'createphp_tagphp'php]php php=php php$thisphp-php>createTagphp(php)php;
php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$defaultOptionsphp,php php$optionsphp)php;

php php php php php php php php php$urlphp php=php php'php/php'php php.php php$thisphp-php>php_mergeBaseUrlphp(php$optionsphp)php php.php ltrimphp(php$imagephp,php php'php/php'php)php;

php php php php php php php php php$srcphp php=php selfphp:php:TINYSRCphp_BASE
php php php php php php php php php php php php php php.php php$thisphp-php>php_mergeFormatphp(php$optionsphp)
php php php php php php php php php php php php php php.php php$thisphp-php>php_mergeDimensionsphp(php$optionsphp)
php php php php php php php php php php php php php php.php php$urlphp;

php php php php php php php php ifphp php(php!php$optionsphp[php'createphp_tagphp'php]php)php php{
php php php php php php php php php php php php returnphp php$srcphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_defaultOptionsphp)php asphp php$keyphp)php php{
php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'widthphp'php:
php php php php php php php php php php php php php php php php casephp php'heightphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_intphp(php$optionsphp[php$keyphp]php)php php|php|php php!isphp_numericphp(php$optionsphp[php$keyphp]php)php php|php|php php$optionsphp[php$keyphp]php <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$optionsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php unsetphp(php$optionsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$optionsphp[php'srcphp'php]php php=php php$srcphp;

php php php php php php php php php$tagphp php=php php'php<imgphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$optionsphp)php php.php php$thisphp-php>getClosingBracketphp(php)php;
php php php php php php php php returnphp php$tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp basephp URLphp forphp images
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_TinySrc
php php php php php php*php/
php php php php publicphp functionphp setBaseUrlphp(php$urlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_baseUrlphp php=php rtrimphp(php$urlphp,php php'php/php'php)php php.php php'php/php'php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp basephp URLphp forphp images
php php php php php php*
php php php php php php*php Ifphp nonephp alreadyphp setphp,php usesphp thephp ServerUrlphp andphp BaseUrlphp viewphp helpersphp to
php php php php php php*php determinephp thephp basephp URLphp tophp imagesphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_baseUrlphp)php php{
php php php php php php php php php php php php php$thisphp-php>setBaseUrlphp(php$thisphp-php>viewphp-php>serverUrlphp(php$thisphp-php>viewphp-php>baseUrlphp(php)php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_baseUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp imagephp format
php php php php php php*
php php php php php php*php Ifphp setphp,php thisphp willphp setphp thephp defaultphp formatphp tophp usephp onphp allphp imagesphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php$format
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_TinySrc
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDefaultFormatphp(php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$formatphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_formatphp php=php php'php'php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php strtolowerphp(php$formatphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$formatphp,php arrayphp(php'pngphp'php,php php'jpegphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp formatphp;php mustphp bephp onephp ofphp php"jpegphp"php orphp php"pngphp"php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_formatphp php=php php"php/php$formatphp"php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp dimensions
php php php php php php*
php php php php php php*php Ifphp nullphp isphp specifiedphp forphp widthphp,php defaultphp dimensionsphp willphp bephp clearedphp.php If
php php php php php php*php onlyphp widthphp isphp specifiedphp,php onlyphp widthphp willphp bephp usedphp.php Ifphp eitherphp dimension
php php php php php php*php failsphp validationphp,php anphp exceptionphp isphp raisedphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|intphp|stringphp php$width
php php php php php php*php php@paramphp php nullphp|intphp|stringphp php$height
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_TinySrc
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDefaultDimensionsphp(php$widthphp php=php nullphp,php php$heightphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$widthphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dimensionsphp php=php php'php'php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_validateDimensionphp(php$widthphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp dimensionphp;php mustphp bephp anphp integerphp,php optionallyphp precededphp byphp php"php-php"php orphp php"xphp"php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dimensionsphp php=php php"php/php$widthphp"php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$heightphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_validateDimensionphp(php$heightphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Invalidphp dimensionphp;php mustphp bephp anphp integerphp,php optionallyphp precededphp byphp php"php-php"php orphp php"xphp"php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dimensionsphp php.php=php php"php/php$heightphp"php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp statephp ofphp php"createphp tagphp"php flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_TinySrc
php php php php php php*php/
php php php php publicphp functionphp setCreateTagphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_createTagFlagphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp thephp helperphp createphp anphp imagephp tagphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp createTagphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_createTagFlagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp dimension
php php php php php php*
php php php php php php*php Dimensionsphp mayphp bephp integersphp,php optionallyphp precededphp byphp php'php-php'php orphp php'xphp'php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dim
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_validateDimensionphp(php$dimphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_scalarphp(php$dimphp)php php|php|php isphp_boolphp(php$dimphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp pregphp_matchphp(php'php/php^php(php-php|xphp)php?php\dphp+php$php/php'php,php php(stringphp)php php$dimphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp whetherphp tophp usephp defaultphp basephp URLphp,php orphp basephp URLphp fromphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_mergeBaseUrlphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$optionsphp[php'basephp_urlphp'php]php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getBaseUrlphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp rtrimphp(php$optionsphp[php'basephp_urlphp'php]php,php php'php/php'php)php php.php php'php/php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp whetherphp tophp usephp defaultphp formatphp orphp formatphp providedphp inphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_mergeFormatphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$optionsphp[php'formatphp'php]php,php arrayphp(php'pngphp'php,php php'jpegphp'php)php)php)php php{
php php php php php php php php php php php php returnphp php'php/php'php php.php php$optionsphp[php'formatphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_formatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp whetherphp tophp usephp defaultphp dimensionsphp,php orphp thosephp passedphp inphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_mergeDimensionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_validateDimensionphp(php$optionsphp[php'widthphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dimensionsphp;
php php php php php php php php php}
php php php php php php php php php$dimensionsphp php=php php'php/php'php php.php php$optionsphp[php'widthphp'php]php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_validateDimensionphp(php$optionsphp[php'heightphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$dimensionsphp;
php php php php php php php php php}
php php php php php php php php php$dimensionsphp php.php=php php'php/php'php php.php php$optionsphp[php'heightphp'php]php;
php php php php php php php php returnphp php$dimensionsphp;
php php php php php}
php}
