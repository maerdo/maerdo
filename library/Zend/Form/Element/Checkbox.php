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
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp_Xhtmlphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp/Xhtmlphp.phpphp'php;

php/php*php*
php php*php Checkboxphp formphp element
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Checkboxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Elementphp_Checkboxphp extendsphp Zendphp_Formphp_Elementphp_Xhtml
php{
php php php php php/php*php*
php php php php php php*php Isphp thephp checkboxphp checkedphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php publicphp php$checkedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Usephp formCheckboxphp viewphp helperphp byphp default
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'formCheckboxphp'php;

php php php php php/php*php*
php php php php php php*php Optionsphp thatphp willphp bephp passedphp tophp thephp viewphp helper
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$optionsphp php=php arrayphp(
php php php php php php php php php'checkedValuephp'php php php php=php>php php'php1php'php,
php php php php php php php php php'uncheckedValuephp'php php=php>php php'php0php'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Valuephp whenphp checked
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_checkedValuephp php=php php'php1php'php;

php php php php php/php*php*
php php php php php php*php Valuephp whenphp notphp checked
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_uncheckedValuephp php=php php'php0php'php;

php php php php php/php*php*
php php php php php php*php Currentphp value
php php php php php php*php php@varphp stringphp php0php orphp php1
php php php php php php*php/
php php php php protectedphp php$php_valuephp php=php php'php0php'php;

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php Interceptphp checkedphp andphp uncheckedphp valuesphp andphp setphp themphp earlyphp;php testphp stored
php php php php php php*php valuephp againstphp checkedphp andphp uncheckedphp valuesphp afterphp configurationphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Checkbox
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'checkedValuephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCheckedValuephp(php$optionsphp[php'checkedValuephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'checkedValuephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'uncheckedValuephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setUncheckedValuephp(php$optionsphp[php'uncheckedValuephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'uncheckedValuephp'php]php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:setOptionsphp(php$optionsphp)php;

php php php php php php php php php$curValuephp php=php php$thisphp-php>getValuephp(php)php;
php php php php php php php php php$testphp php php php php php=php arrayphp(php$thisphp-php>getCheckedValuephp(php)php,php php$thisphp-php>getUncheckedValuephp(php)php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$curValuephp,php php$testphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setValuephp(php$curValuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp value
php php php php php php*
php php php php php php*php Ifphp valuephp matchesphp checkedphp valuephp,php setsphp tophp thatphp valuephp,php andphp setsphp thephp checked
php php php php php php*php flagphp tophp truephp.
php php php php php php*
php php php php php php*php Anyphp otherphp valuephp causesphp thephp uncheckedphp valuephp tophp bephp setphp asphp thephp current
php php php php php php*php valuephp,php andphp thephp checkedphp flagphp tophp bephp setphp asphp falsephp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Checkbox
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php=php=php php$thisphp-php>getCheckedValuephp(php)php)php php{
php php php php php php php php php php php php parentphp:php:setValuephp(php$valuephp)php;
php php php php php php php php php php php php php$thisphp-php>checkedphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php parentphp:php:setValuephp(php$thisphp-php>getUncheckedValuephp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>checkedphp php=php falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp checkedphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Checkbox
php php php php php php*php/
php php php php publicphp functionphp setCheckedValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkedValuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php$thisphp-php>optionsphp[php'checkedValuephp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp valuephp whenphp checked
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCheckedValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_checkedValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp uncheckedphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Checkbox
php php php php php php*php/
php php php php publicphp functionphp setUncheckedValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_uncheckedValuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php$thisphp-php>optionsphp[php'uncheckedValuephp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp valuephp whenphp notphp checked
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUncheckedValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_uncheckedValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp checkedphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp_Checkbox
php php php php php php*php/
php php php php publicphp functionphp setCheckedphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>checkedphp php=php php(boolphp)php php$flagphp;
php php php php php php php php ifphp php(php$thisphp-php>checkedphp)php php{
php php php php php php php php php php php php php$thisphp-php>setValuephp(php$thisphp-php>getCheckedValuephp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setValuephp(php$thisphp-php>getUncheckedValuephp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp checkedphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isCheckedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>checkedphp;
php php php php php}
php}
