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
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Captchaphp.phpphp php2php2php3php2php8php php2php0php1php0php-php0php5php-php3php0php php1php5php:php0php9php:php0php6Zphp bittarmanphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Captchaphp_Adapterphp php*php/
requirephp_oncephp php'Zendphp/Captchaphp/Adapterphp.phpphp'php;

php/php*php*
php php*php Genericphp captchaphp element
php php*
php php*php Thisphp elementphp allowsphp tophp insertphp CAPTCHAphp intophp thephp formphp inphp order
php php*php tophp validatephp thatphp humanphp isphp submittingphp thephp formphp.php Thephp actual
php php*php logicphp isphp containedphp inphp thephp captchaphp adapterphp.
php php*
php php*php php@seephp httpphp:php/php/enphp.wikipediaphp.orgphp/wikiphp/Captcha
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Formphp_Elementphp_Captchaphp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Captchaphp pluginphp typephp constant
php php php php php php*php/
php php php php constphp CAPTCHAphp php=php php'CAPTCHAphp'php;

php php php php php/php*php*
php php php php php php*php Captchaphp adapter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Captchaphp_Adapter
php php php php php php*php/
php php php php protectedphp php$php_captchaphp;

php php php php php/php*php*
php php php php php php*php Getphp captchaphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Captchaphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp getCaptchaphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_captchaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp captchaphp adapter
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Captchaphp_Adapterphp php$captcha
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp setCaptchaphp(php$captchaphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$captchaphp instanceofphp Zendphp_Captchaphp_Adapterphp)php php{
php php php php php php php php php php php php php$instancephp php=php php$captchaphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$captchaphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'captchaphp'php,php php$captchaphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php php$captchaphp[php'captchaphp'php]php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$captchaphp[php'captchaphp'php]php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php arrayphp_shiftphp(php$captchaphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optionsphp,php php$captchaphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$namephp php=php php$captchaphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$namephp php=php php$thisphp-php>getPluginLoaderphp(selfphp:php:CAPTCHAphp)php-php>loadphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$instancephp php=php newphp php$namephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$rphp php=php newphp ReflectionClassphp(php$namephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$rphp-php>hasMethodphp(php'php_php_constructphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$instancephp php=php php$rphp-php>newInstanceArgsphp(arrayphp(php$optionsphp)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$instancephp php=php php$rphp-php>newInstancephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_captchaphp php=php php$instancephp;
php php php php php php php php php$thisphp-php>php_captchaphp-php>setNamephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php$specphp mayphp bephp:
php php php php php php*php php-php stringphp:php namephp ofphp element
php php php php php php*php php-php arrayphp:php optionsphp withphp whichphp tophp configurephp element
php php php php php php*php php-php Zendphp_Configphp:php Zendphp_Configphp withphp optionsphp forphp configuringphp element
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$spec
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$specphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$specphp,php php$optionsphp)php;
php php php php php php php php php$thisphp-php>setAllowEmptyphp(truephp)
php php php php php php php php php php php php php php-php>setRequiredphp(truephp)
php php php php php php php php php php php php php php-php>setAutoInsertNotEmptyValidatorphp(falsephp)
php php php php php php php php php php php php php php-php>addValidatorphp(php$thisphp-php>getCaptchaphp(php)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp allphp attributes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttribsphp(php)
php php php php php{
php php php php php php php php php$attribsphp php=php getphp_objectphp_varsphp(php$thisphp)php;
php php php php php php php php unsetphp(php$attribsphp[php'helperphp'php]php)php;
php php php php php php php php foreachphp php(php$attribsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php'php_php'php php=php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php Overridesphp tophp allowphp passingphp captchaphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Captcha
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'captchaphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'captchaOptionsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setCaptchaphp(php$optionsphp[php'captchaphp'php]php,php php$optionsphp[php'captchaOptionsphp'php]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$optionsphp[php'captchaOptionsphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setCaptchaphp(php$optionsphp[php'captchaphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$optionsphp[php'captchaphp'php]php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:setOptionsphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp formphp element
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php php$captchaphp php php php php=php php$thisphp-php>getCaptchaphp(php)php;
php php php php php php php php php$captchaphp-php>setNamephp(php$thisphp-php>getFullyQualifiedNamephp(php)php)php;

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;

php php php php php php php php php$decoratorphp php php=php php$captchaphp-php>getDecoratorphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$decoratorphp)php)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$decoratorsphp,php php$decoratorphp)php;
php php php php php php php php php}

php php php php php php php php php$decoratorphp php=php arrayphp(php'Captchaphp'php,php arrayphp(php'captchaphp'php php=php>php php$captchaphp)php)php;
php php php php php php php php arrayphp_unshiftphp(php$decoratorsphp,php php$decoratorphp)php;

php php php php php php php php php$thisphp-php>setDecoratorsphp(php$decoratorsphp)php;

php php php php php php php php php$thisphp-php>setValuephp(php$thisphp-php>getCaptchaphp(php)php-php>generatephp(php)php)php;

php php php php php php php php returnphp parentphp:php:renderphp(php$viewphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp loaderphp forphp validatorphp orphp filterphp chain
php php php php php php*
php php php php php php*php Supportphp forphp pluginphp loaderphp forphp Captchaphp adapters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php php@throwsphp Zendphp_Loaderphp_Exceptionphp onphp invalidphp typephp.
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:CAPTCHAphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_loadersphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php newphp Zendphp_Loaderphp_PluginLoaderphp(
php php php php php php php php php php php php php php php php php php php php arrayphp(php'Zendphp_Captchaphp'php php=php>php php'Zendphp/Captchaphp/php'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_loadersphp[php$typephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp parentphp:php:getPluginLoaderphp(php$typephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixphp pathphp forphp pluginphp loaderphp forphp captchaphp adapters
php php php php php php*
php php php php php php*php Thisphp methodphp handlesphp thephp captchaphp typephp,php thephp restphp isphp handledphp by
php php php php php php*php thephp parent
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Formphp_Element
php php php php php php*php php@seephp Zendphp_Formphp_Elementphp:php:addPrefixPath
php php php php php php*php/
php php php php publicphp functionphp addPrefixPathphp(php$prefixphp,php php$pathphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp nullphp:
php php php php php php php php php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(selfphp:php:CAPTCHAphp)php;
php php php php php php php php php php php php php php php php php$cPrefixphp php=php rtrimphp(php$prefixphp,php php'php_php'php)php php.php php'php_Captchaphp'php;
php php php php php php php php php php php php php php php php php$cPathphp php php php=php rtrimphp(php$pathphp,php php'php/php\php\php'php)php php.php php'php/Captchaphp'php;
php php php php php php php php php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$cPrefixphp,php php$cPathphp)php;
php php php php php php php php php php php php php php php php returnphp parentphp:php:addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php casephp selfphp:php:CAPTCHAphp:
php php php php php php php php php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php;
php php php php php php php php php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp parentphp:php:addPrefixPathphp(php$prefixphp,php php$pathphp,php php$typephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp defaultphp decorators
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadDefaultDecoratorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>loadDefaultDecoratorsIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$decoratorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'Errorsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Descriptionphp'php,php arrayphp(php'tagphp'php php=php>php php'pphp'php,php php'classphp'php php=php>php php'descriptionphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'ddphp'php,php php'idphp'php php=php>php php$thisphp-php>getNamephp(php)php php.php php'php-elementphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Labelphp'php,php arrayphp(php'tagphp'php php=php>php php'dtphp'php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp captchaphp validphp?
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php mixedphp php$context
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>getCaptchaphp(php)php-php>setNamephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php$belongsTophp php=php php$thisphp-php>getBelongsTophp(php)php;
php php php php php php php php ifphp php(emptyphp(php$belongsTophp)php php|php|php php!isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php returnphp parentphp:php:isValidphp(php$valuephp,php php$contextphp)php;
php php php php php php php php php}

php php php php php php php php php$namephp php php php php php=php php$thisphp-php>getFullyQualifiedNamephp(php)php;
php php php php php php php php php$rootphp php php php php php=php substrphp(php$namephp,php php0php,php strposphp(php$namephp,php php'php[php'php)php)php;
php php php php php php php php php$segmentsphp php=php substrphp(php$namephp,php strposphp(php$namephp,php php'php[php'php)php)php;
php php php php php php php php php$segmentsphp php=php ltrimphp(php$segmentsphp,php php'php[php'php)php;
php php php php php php php php php$segmentsphp php=php rtrimphp(php$segmentsphp,php php'php]php'php)php;
php php php php php php php php php$segmentsphp php=php explodephp(php'php]php[php'php,php php$segmentsphp)php;
php php php php php php php php arrayphp_unshiftphp(php$segmentsphp,php php$rootphp)php;
php php php php php php php php arrayphp_popphp(php$segmentsphp)php;
php php php php php php php php php$newContextphp php=php php$contextphp;
php php php php php php php php foreachphp php(php$segmentsphp asphp php$segmentphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$segmentphp,php php$newContextphp)php)php php{
php php php php php php php php php php php php php php php php php$newContextphp php=php php$newContextphp[php$segmentphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:isValidphp(php$valuephp,php php$newContextphp)php;
php php php php php}
php}
