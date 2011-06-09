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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Element
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php2php3php7php1php php2php0php1php0php-php0php6php-php0php4php php2php0php:php0php9php:php4php4Zphp thomasphp php$
php php*php/
classphp Zendphp_Formphp_Elementphp_Filephp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Pluginphp loaderphp type
php php php php php php*php/
php php php php constphp TRANSFERphp_ADAPTERphp php=php php'TRANSFERphp_ADAPTERphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Defaultphp viewphp helper
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'formFilephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_adapterphp;

php php php php php/php*php*
php php php php php php*php php@varphp booleanphp Alreadyphp validatedphp php?
php php php php php php*php/
php php php php protectedphp php$php_validatedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp booleanphp Disablephp valuephp tophp bephp equalphp tophp filephp content
php php php php php php*php/
php php php php protectedphp php$php_valueDisabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp integerphp Internalphp multifilephp counter
php php php php php php*php/
php php php php protectedphp php$php_counterphp php=php php1php;

php php php php php/php*php*
php php php php php php*php php@varphp integerphp Maximumphp filephp sizephp forphp MAXphp_FILEphp_SIZEphp attributphp ofphp form
php php php php php php*php/
php php php php protectedphp staticphp php$php_maxFileSizephp php=php php-php1php;

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
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'Filephp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Errorsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Descriptionphp'php,php arrayphp(php'tagphp'php php=php>php php'pphp'php,php php'classphp'php php=php>php php'descriptionphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'ddphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Labelphp'php,php arrayphp(php'tagphp'php php=php>php php'dtphp'php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loader
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loader
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loaderphp,php php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;

php php php php php php php php ifphp php(php$typephp php!php=php selfphp:php:TRANSFERphp_ADAPTERphp)php php{
php php php php php php php php php php php php returnphp parentphp:php:setPluginLoaderphp(php$loaderphp,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php php$loaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Pluginphp Loader
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;

php php php php php php php php ifphp php(php$typephp php!php=php selfphp:php:TRANSFERphp_ADAPTERphp)php php{
php php php php php php php php php php php php returnphp parentphp:php:getPluginLoaderphp(php$typephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$typephp,php php$thisphp-php>php_loadersphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php php$loaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_Filephp_Transferphp_Adapterphp'php php=php>php php'Zendphp/Filephp/Transferphp/Adapterphp/php'php,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php$thisphp-php>setPluginLoaderphp(php$loaderphp,php selfphp:php:TRANSFERphp_ADAPTERphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_loadersphp[php$typephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixphp pathphp forphp pluginphp loader
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp addPrefixPathphp(php$prefixphp,php php$pathphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;
php php php php php php php php ifphp php(php!emptyphp(php$typephp)php php&php&php php(php$typephp php!php=php selfphp:php:TRANSFERphp_ADAPTERphp)php)php php{
php php php php php php php php php php php php returnphp parentphp:php:addPrefixPathphp(php$prefixphp,php php$pathphp,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$typephp)php)php php{
php php php php php php php php php php php php php$pluginPrefixphp php=php rtrimphp(php$prefixphp,php php'php_php'php)php php.php php'php_Transferphp_Adapterphp'php;
php php php php php php php php php php php php php$pluginPathphp php php php=php rtrimphp(php$pathphp,php DIRECTORYphp_SEPARATORphp)php php.php php'php/Transferphp/Adapterphp/php'php;
php php php php php php php php php php php php php$loaderphp php php php php php php php=php php$thisphp-php>getPluginLoaderphp(selfphp:php:TRANSFERphp_ADAPTERphp)php;
php php php php php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$pluginPrefixphp,php php$pluginPathphp)php;
php php php php php php php php php php php php returnphp parentphp:php:addPrefixPathphp(php$prefixphp,php php$pathphp,php nullphp)php;
php php php php php php php php php}

php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php;
php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp transferphp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Filephp_Transferphp_Adapterphp_Abstractphp php$adapter
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setTransferAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_Filephp_Transferphp_Adapterphp_Abstractphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$adapterphp)php)php php{
php php php php php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(selfphp:php:TRANSFERphp_ADAPTERphp)php;
php php php php php php php php php php php php php$classphp php php=php php$loaderphp-php>loadphp(php$adapterphp)php;
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php newphp php$classphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(php'Invalidphp adapterphp specifiedphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp(php'filterphp'php,php php'validatephp'php)php asphp php$typephp)php php{
php php php php php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php;
php php php php php php php php php php php php php$thisphp-php>php_adapterphp-php>setPluginLoaderphp(php$loaderphp,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp transferphp adapter
php php php php php php*
php php php php php php*php Lazyphp loadsphp HTTPphp transferphp adapterphp whenphp nophp adapterphp registeredphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getTransferAdapterphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTransferAdapterphp(php'Httpphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp Validatorphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Validatephp_Interfacephp php$validator
php php php php php php*php php@paramphp php boolphp php$breakChainOnFailure
php php php php php php*php php@paramphp php mixedphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp addValidatorphp(php$validatorphp,php php$breakChainOnFailurephp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>addValidatorphp(php$validatorphp,php php$breakChainOnFailurephp,php php$optionsphp,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp validatorsphp atphp oncephp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$validators
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp addValidatorsphp(arrayphp php$validatorsphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>addValidatorsphp(php$validatorsphp,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp validatorsphp atphp oncephp,php overwritingphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$validators
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setValidatorsphp(arrayphp php$validatorsphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>setValidatorsphp(php$validatorsphp,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp validatorphp byphp namephp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Validatephp_Interfacephp|null
php php php php php php*php/
php php php php publicphp functionphp getValidatorphp(php$namephp)
php php php php php{
php php php php php php php php php$adapterphp php php php php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>getValidatorphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp validatorsphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getValidatorsphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$validatorsphp php=php php$adapterphp-php>getValidatorsphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php ifphp php(php$validatorsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$validatorsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$validatorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp validatorphp byphp namephp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp removeValidatorphp(php$namephp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>removeValidatorphp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp validatorsphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp clearValidatorsphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>clearValidatorsphp(php)php;
php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp Filterphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filterphp php Typephp ofphp filterphp tophp add
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Optionsphp tophp setphp forphp thephp filter
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(php$filterphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>addFilterphp(php$filterphp,php php$optionsphp,php php$thisphp-php>getNamephp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp Multiplephp filtersphp atphp oncephp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$filters
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp addFiltersphp(arrayphp php$filtersphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>addFiltersphp(php$filtersphp,php php$thisphp-php>getNamephp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp filterphp forphp thephp classphp,php erasingphp allphp previousphp setphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filterphp Filterphp tophp set
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setFiltersphp(arrayphp php$filtersphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>setFiltersphp(php$filtersphp,php php$thisphp-php>getNamephp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp individualphp filterphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Filterphp_Interfacephp|null
php php php php php php*php/
php php php php publicphp functionphp getFilterphp(php$namephp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>getFilterphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp filtersphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@returnphp arrayphp Listphp ofphp setphp filters
php php php php php php*php/
php php php php publicphp functionphp getFiltersphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$filtersphp php=php php$adapterphp-php>getFiltersphp(php$thisphp-php>getNamephp(php)php)php;

php php php php php php php php ifphp php(php$filtersphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$filtersphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$filtersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp individualphp filterphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp removeFilterphp(php$namephp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>removeFilterphp(php$namephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp filtersphp;php proxyphp tophp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp clearFiltersphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>clearFiltersphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp upload
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp php php Filephp,php canphp bephp optionalphp,php givephp nullphp tophp validatephp allphp files
php php php php php php*php php@paramphp php mixedphp php php$context
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_validatedphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$adapterphp php php php php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php ifphp php(php$translatorphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$adapterphp-php>setTranslatorphp(php$translatorphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isRequiredphp(php)php)php php{
php php php php php php php php php php php php php$adapterphp-php>setOptionsphp(arrayphp(php'ignoreNoFilephp'php php=php>php truephp)php,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$adapterphp-php>setOptionsphp(arrayphp(php'ignoreNoFilephp'php php=php>php falsephp)php,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>autoInsertNotEmptyValidatorphp(php)php php&php&php php!php$thisphp-php>getValidatorphp(php'NotEmptyphp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addValidatorphp php=php arrayphp(php'validatorphp'php php=php>php php'NotEmptyphp'php,php php'breakChainOnFailurephp'php php=php>php truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp(php$adapterphp-php>isValidphp(php$thisphp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_validatedphp php=php truephp;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_validatedphp php=php falsephp;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Receivephp thephp uploadedphp file
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp receivephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_validatedphp)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>isValidphp(php$thisphp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php ifphp php(php$adapterphp-php>receivephp(php$thisphp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp errorphp codesphp;php proxyphp tophp transferphp adapter
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getErrorsphp(php)
php php php php php{
php php php php php php php php returnphp parentphp:php:getErrorsphp(php)php php+php php$thisphp-php>getTransferAdapterphp(php)php-php>getErrorsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Arephp therephp errorsphp registeredphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php(parentphp:php:hasErrorsphp(php)php php|php|php php$thisphp-php>getTransferAdapterphp(php)php-php>hasErrorsphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp errorphp messagesphp;php proxyphp tophp transferphp adapter
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php returnphp parentphp:php:getMessagesphp(php)php php+php php$thisphp-php>getTransferAdapterphp(php)php-php>getMessagesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp uploadphp destination
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setDestinationphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>getTransferAdapterphp(php)php-php>setDestinationphp(php$pathphp,php php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp uploadphp destination
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDestinationphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getTransferAdapterphp(php)php-php>getDestinationphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp finalphp filename
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp php(Optionalphp)php Elementphp orphp filephp tophp return
php php php php php php*php php@paramphp php booleanphp php$pathphp php php(Optionalphp)php Returnphp alsophp thephp pathphp,php defaultsphp tophp true
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFileNamephp(php$valuephp php=php nullphp,php php$pathphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getTransferAdapterphp(php)php-php>getFileNamephp(php$valuephp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp internalphp filephp informations
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp php(Optionalphp)php Elementphp orphp filephp tophp return
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFileInfophp(php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getTransferAdapterphp(php)php-php>getFileInfophp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp multifilephp element
php php php php php php*
php php php php php php*php php@paramphp integerphp php$countphp Numberphp ofphp filephp elements
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Filephp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMultiFilephp(php$countphp)
php php php php php{
php php php php php php php php ifphp php(php(integerphp)php php$countphp <php php2php)php php{
php php php php php php php php php php php php php$thisphp-php>setIsArrayphp(falsephp)php;
php php php php php php php php php php php php php$thisphp-php>php_counterphp php=php php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setIsArrayphp(truephp)php;
php php php php php php php php php php php php php$thisphp-php>php_counterphp php=php php(integerphp)php php$countphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp multifilephp elementphp number
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMultiFilephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_counterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp filephp sizephp ofphp thephp form
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMaxFileSizephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_maxFileSizephp <php php0php)php php{
php php php php php php php php php php php php php$iniphp php=php php$thisphp-php>php_convertIniToIntegerphp(trimphp(iniphp_getphp(php'postphp_maxphp_sizephp'php)php)php)php;
php php php php php php php php php php php php php$maxphp php=php php$thisphp-php>php_convertIniToIntegerphp(trimphp(iniphp_getphp(php'uploadphp_maxphp_filesizephp'php)php)php)php;
php php php php php php php php php php php php php$minphp php=php maxphp(php$iniphp,php php$maxphp)php;
php php php php php php php php php php php php ifphp php(php$iniphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$minphp php=php minphp(php$minphp,php php$iniphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$maxphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$minphp php=php minphp(php$minphp,php php$maxphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_maxFileSizephp php=php php$minphp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_maxFileSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp filephp sizephp ofphp thephp form
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$size
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp setMaxFileSizephp(php$sizephp)
php php php php php{
php php php php php php php php php$iniphp php=php php$thisphp-php>php_convertIniToIntegerphp(trimphp(iniphp_getphp(php'postphp_maxphp_sizephp'php)php)php)php;
php php php php php php php php php$maxphp php=php php$thisphp-php>php_convertIniToIntegerphp(trimphp(iniphp_getphp(php'uploadphp_maxphp_filesizephp'php)php)php)php;

php php php php php php php php ifphp php(php(php$maxphp php>php php-php1php)php php&php&php php(php$sizephp php>php php$maxphp)php)php php{
php php php php php php php php php php php php triggerphp_errorphp(php"Yourphp php'uploadphp_maxphp_filesizephp'php configphp settingphp limitsphp thephp maximumphp filesizephp tophp php'php$maxphp'php.php Youphp triedphp tophp setphp php'php$sizephp'php.php"php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php$sizephp php=php php$maxphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$iniphp php>php php-php1php)php php&php&php php(php$sizephp php>php php$iniphp)php)php php{
php php php php php php php php php php php php triggerphp_errorphp(php"Yourphp php'postphp_maxphp_sizephp'php configphp settingphp limitsphp thephp maximumphp filesizephp tophp php'php$iniphp'php.php Youphp triedphp tophp setphp php'php$sizephp'php.php"php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php$sizephp php=php php$iniphp;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_maxFileSizephp php=php php$sizephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp iniphp settingphp tophp aphp integerphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$setting
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_convertIniToIntegerphp(php$settingphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$settingphp)php)php php{
php php php php php php php php php php php php php$typephp php=php strtoupperphp(substrphp(php$settingphp,php php-php1php)php)php;
php php php php php php php php php php php php php$settingphp php=php php(integerphp)php substrphp(php$settingphp,php php0php,php php-php1php)php;

php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'Kphp'php php:
php php php php php php php php php php php php php php php php php php php php php$settingphp php*php=php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'Mphp'php php:
php php php php php php php php php php php php php php php php php php php php php$settingphp php*php=php php1php0php2php4php php*php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'Gphp'php php:
php php php php php php php php php php php php php php php php php php php php php$settingphp php*php=php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php(integerphp)php php$settingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ifphp thephp filephp willphp bephp uploadedphp whenphp gettingphp thephp value
php php php php php php*php Thisphp defaultsphp tophp falsephp whichphp willphp forcephp receivephp(php)php whenphp callingphp getValuesphp(php)
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flagphp Setsphp ifphp thephp filephp isphp handledphp asphp thephp elementsphp value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setValueDisabledphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valueDisabledphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp filephp willphp bephp uploadedphp whenphp callingphp getValuesphp(php)
php php php php php php*
php php php php php php*php php@returnphp booleanphp Receivephp thephp filephp onphp callingphp getValuesphp(php)php?
php php php php php php*php/
php php php php publicphp functionphp isValueDisabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valueDisabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processesphp thephp filephp,php returnsphp nullphp orphp thephp filenamephp only
php php php php php php*php Forphp thephp completephp pathphp,php usephp getFileName
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php php$thisphp-php>getTransferAdapterphp(php)php-php>getFileNamephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php ifphp php(emptyphp(php$contentphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isValidphp(nullphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_valueDisabledphp php&php&php php!php$thisphp-php>receivephp(php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getFileNamephp(nullphp,php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disallowphp settingphp thephp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp translatorphp objectphp forphp localization
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|nullphp php$translator
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>setTranslatorphp(php$translatorphp)php;
php php php php php php php php parentphp:php:setTranslatorphp(php$translatorphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp localizationphp translatorphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>translatorIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$translatorphp php=php php$thisphp-php>getTransferAdapterphp(php)php-php>getTranslatorphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$translatorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp.phpphp'php;
php php php php php php php php php php php php returnphp Zendphp_Formphp:php:getDefaultTranslatorphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp orphp notphp translationphp shouldphp bephp disabled
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_File
php php php php php php*php/
php php php php publicphp functionphp setDisableTranslatorphp(php$flagphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php php$adapterphp-php>setDisableTranslatorphp(php$flagphp)php;
php php php php php php php php php$thisphp-php>php_translatorDisabledphp php=php php(boolphp)php php$flagphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp translationphp disabledphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp translatorIsDisabledphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>translatorIsDisabledphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp filephp receivedphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isReceivedphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>isReceivedphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp thephp filephp uploadedphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isUploadedphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>isUploadedphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hasphp thephp filephp beenphp filteredphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isFilteredphp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>isFilteredphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp hashphp forphp thisphp filephp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$hashphp php(Optionalphp)php Hashphp algorithmphp tophp use
php php php php php php*php php@returnphp stringphp|arrayphp Hashstring
php php php php php php*php/
php php php php publicphp functionphp getHashphp(php$hashphp php=php php'crcphp3php2php'php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>getHashphp(php$hashphp,php php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp filesizephp forphp thisphp filephp element
php php php php php php*
php php php php php php*php php@returnphp stringphp|arrayphp Filesize
php php php php php php*php/
php php php php publicphp functionphp getFileSizephp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>getFileSizephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp mimetypephp forphp thisphp filephp element
php php php php php php*
php php php php php php*php php@returnphp stringphp|arrayphp Mimetype
php php php php php php*php/
php php php php publicphp functionphp getMimeTypephp(php)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getTransferAdapterphp(php)php;
php php php php php php php php returnphp php$adapterphp-php>getMimeTypephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp formphp element
php php php php php php*php Checksphp forphp decoratorphp interfacephp tophp preventphp errors
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php php$markerphp php=php falsephp;
php php php php php php php php foreachphp php(php$thisphp-php>getDecoratorsphp(php)php asphp php$decoratorphp)php php{
php php php php php php php php php php php php ifphp php(php$decoratorphp instanceofphp Zendphp_Formphp_Decoratorphp_Markerphp_Filephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php$markerphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$markerphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(php'Nophp filephp decoratorphp foundphp.php.php.php unablephp tophp renderphp filephp elementphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:renderphp(php$viewphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp errorphp messagesphp andphp performphp translationphp andphp valuephp substitution
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getErrorMessagesphp(php)
php php php php php{
php php php php php php php php php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php php$messagesphp php php php=php php$thisphp-php>getErrorMessagesphp(php)php;
php php php php php php php php php$valuephp php php php php php php=php php$thisphp-php>getFileNamephp(php)php;
php php php php php php php php foreachphp php(php$messagesphp asphp php$keyphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$translatorphp)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(php$messagephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>isArrayphp(php)php php|php|php isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$aggregateMessagesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$valphp)php php{
php php php php php php php php php php php php php php php php php php php php php$aggregateMessagesphp[php]php php=php strphp_replacephp(php'php%valuephp%php'php,php php$valphp,php php$messagephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$aggregateMessagesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$messagesphp[php$keyphp]php php=php php$aggregateMessagesphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagesphp[php$keyphp]php php=php strphp_replacephp(php'php%valuephp%php'php,php php$valuephp,php php$messagephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$messagesphp;
php php php php php}
php}
