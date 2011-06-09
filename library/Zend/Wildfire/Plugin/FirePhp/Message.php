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
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Messagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Aphp messagephp envelopephp thatphp canphp bephp passedphp tophp Zendphp_Wildfirephp_Pluginphp_FirePhpphp tophp be
php php*php loggedphp tophp Firebugphp insteadphp ofphp aphp variablephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Wildfirephp_Pluginphp_FirePhpphp_Message
php{
php php php php php/php*php*
php php php php php php*php Thephp stylephp ofphp thephp message
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_stylephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp labelphp ofphp thephp message
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_labelphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp messagephp value
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_messagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp ifphp messagephp bufferingphp isphp enabled
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_bufferedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp ifphp messagephp shouldphp bephp destroyedphp andphp notphp delivered
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_destroyphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Randomphp uniquephp IDphp usedphp tophp identifyphp messagephp inphp comparisonphp operations
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_ruidphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Optionsphp forphp thephp object
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'traceOffsetphp'php php=php>php nullphp,php php/php*php Thephp offsetphp inphp thephp tracephp whichphp identifiesphp thephp sourcephp ofphp thephp messagephp php*php/
php php php php php php php php php'includeLineNumbersphp'php php=php>php nullphp php/php*php Whetherphp tophp includephp linephp andphp filephp infophp forphp thisphp messagephp php*php/
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp messagephp withphp thephp givenphp stylephp andphp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$stylephp Stylephp ofphp thephp messagephp.
php php php php php php*php php@paramphp mixedphp php$messagephp Thephp message
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$stylephp,php php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_stylephp php=php php$stylephp;
php php php php php php php php php$thisphp-php>php_messagephp php=php php$messagephp;
php php php php php php php php php$thisphp-php>php_ruidphp php=php mdphp5php(microtimephp(php)php.mtphp_randphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp labelphp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$labelphp Thephp labelphp tophp bephp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setLabelphp(php$labelphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_labelphp php=php php$labelphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp labelphp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp labelphp ofphp thephp message
php php php php php php*php/
php php php php publicphp functionphp getLabelphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_labelphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp orphp disablephp messagephp buffering
php php php php php php*
php php php php php php*php Ifphp aphp messagephp isphp bufferedphp itphp canphp bephp updatedphp forphp thephp durationphp ofphp the
php php php php php php*php requestphp andphp isphp onlyphp flushedphp atphp thephp endphp ofphp thephp requestphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$bufferedphp TRUEphp tophp enablephp bufferingphp FALSEphp otherwise
php php php php php php*php php@returnphp booleanphp Returnsphp previousphp bufferingphp value
php php php php php php*php/
php php php php publicphp functionphp setBufferedphp(php$bufferedphp)
php php php php php{
php php php php php php php php php$previousphp php=php php$thisphp-php>php_bufferedphp;
php php php php php php php php php$thisphp-php>php_bufferedphp php=php php$bufferedphp;
php php php php php php php php returnphp php$previousphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp bufferingphp isphp enabledphp orphp disabled
php php php php php php*
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp bufferingphp isphp enabledphp,php FALSEphp otherwisephp.
php php php php php php*php/
php php php php publicphp functionphp getBufferedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bufferedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroyphp thephp messagephp tophp preventphp delivery
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$destroyphp TRUEphp tophp destroyphp FALSEphp otherwise
php php php php php php*php php@returnphp booleanphp Returnsphp previousphp destroyphp value
php php php php php php*php/
php php php php publicphp functionphp setDestroyphp(php$destroyphp)
php php php php php{
php php php php php php php php php$previousphp php=php php$thisphp-php>php_destroyphp;
php php php php php php php php php$thisphp-php>php_destroyphp php=php php$destroyphp;
php php php php php php php php returnphp php$previousphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp messagephp shouldphp bephp destroyed
php php php php php php*
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp messagephp shouldphp bephp destroyedphp,php FALSEphp otherwisephp.
php php php php php php*php/
php php php php publicphp functionphp getDestroyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_destroyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp stylephp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setStylephp(php$stylephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_stylephp php=php php$stylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp stylephp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp stylephp ofphp thephp message
php php php php php php*php/
php php php php publicphp functionphp getStylephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_stylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp actualphp messagephp tophp bephp sentphp inphp itsphp finalphp formatphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messagephp php=php php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp actualphp messagephp tophp bephp sentphp inphp itsphp finalphp formatphp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Returnsphp thephp messagephp tophp bephp sentphp.
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp singlephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp Thephp namephp ofphp thephp option
php php php php php php*php php@paramphp php mixedphp php$valuephp Thephp valuephp ofphp thephp option
php php php php php php*php php@returnphp mixedphp Thephp previousphp valuephp ofphp thephp option
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php ifphp(php!arrayphp_keyphp_existsphp(php$keyphp,php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Optionphp withphp namephp php"php'php.php$keyphp.php'php"php doesphp notphp existphp!php'php)php;
php php php php php php php}
php php php php php php php$previousphp php=php php$thisphp-php>php_optionsphp[php$keyphp]php;
php php php php php php php$thisphp-php>php_optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php returnphp php$previousphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp Thephp namephp ofphp thephp option
php php php php php php*php php@returnphp mixedphp Thephp valuephp ofphp thephp option
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$keyphp)
php php php php php{
php php php php php php ifphp(php!arrayphp_keyphp_existsphp(php$keyphp,php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Optionphp withphp namephp php"php'php.php$keyphp.php'php"php doesphp notphp existphp!php'php)php;
php php php php php php php}
php php php php php php returnphp php$thisphp-php>php_optionsphp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp options
php php php php php php*
php php php php php php*php php@returnphp arrayphp Allphp options
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}
php}

