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
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Sourcephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Entry
php{

php php php php php/php*php*
php php php php php php*php Internalphp arrayphp containingphp allphp dataphp associatedphp withphp thisphp entryphp orphp itemphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Registeredphp extensions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extensionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp valuephp php"atomphp"php orphp php"rssphp"php dependingphp onphp thephp feedphp typephp setphp when
php php php php php php*php whenphp lastphp exportedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp:php Primarilyphp triggersphp thephp registrationphp ofphp corephp extensionsphp and
php php php php php php*php loadsphp thosephp appropriatephp tophp thisphp dataphp containerphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php Zendphp_Feedphp_Writerphp:php:registerCoreExtensionsphp(php)php;
php php php php php php php php php$thisphp-php>php_loadExtensionsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp singlephp author
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp addAuthorphp(php$namephp,php php$emailphp php=php nullphp,php php$uriphp php=php nullphp)
php php php php php{
php php php php php php php php php$authorphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'namephp'php,php php$namephp)
php php php php php php php php php php php php php php php php php|php|php emptyphp(php$namephp[php'namephp'php]php)
php php php php php php php php php php php php php php php php php|php|php php!isphp_stringphp(php$namephp[php'namephp'php]php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php authorphp arrayphp mustphp includephp aphp php"namephp"php keyphp withphp aphp nonphp-emptyphp stringphp valuephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$authorphp[php'namephp'php]php php=php php$namephp[php'namephp'php]php;
php php php php php php php php php php php php ifphp php(issetphp(php$namephp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$namephp[php'emailphp'php]php)php php|php|php php!isphp_stringphp(php$namephp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"emailphp"php arrayphp valuephp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$authorphp[php'emailphp'php]php php=php php$namephp[php'emailphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$namephp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$namephp[php'uriphp'php]php)
php php php php php php php php php php php php php php php php php php php php php|php|php php!isphp_stringphp(php$namephp[php'uriphp'php]php)
php php php php php php php php php php php php php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$namephp[php'uriphp'php]php)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php arrayphp valuephp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$authorphp[php'uriphp'php]php php=php php$namephp[php'uriphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@deprecated
php php php php php php php php php php*php Arrayphp notationphp php(abovephp)php isphp preferredphp andphp willphp bephp thephp solephp supportedphp inputphp fromphp ZFphp php2php.php0
php php php php php php php php php php*php/
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(emptyphp(php$namephp[php'namephp'php]php)php php|php|php php!isphp_stringphp(php$namephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"namephp"php mustphp bephp aphp nonphp-emptyphp stringphp valuephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$authorphp[php'namephp'php]php php=php php$namephp;
php php php php php php php php php php php php ifphp php(issetphp(php$emailphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$emailphp)php php|php|php php!isphp_stringphp(php$emailphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"emailphp"php valuephp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$authorphp[php'emailphp'php]php php=php php$emailphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$uriphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$uriphp)php php|php|php php!isphp_stringphp(php$uriphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$uriphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php valuephp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$authorphp[php'uriphp'php]php php=php php$uriphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php[php]php php=php php$authorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp arrayphp withphp feedphp authors
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp addAuthorsphp(arrayphp php$authorsphp)
php php php php php{
php php php php php php php php foreachphp(php$authorsphp asphp php$authorphp)php php{
php php php php php php php php php php php php php$thisphp-php>addAuthorphp(php$authorphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp characterphp encoding
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$encodingphp)php php|php|php php!isphp_stringphp(php$encodingphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'encodingphp'php]php php=php php$encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp characterphp encoding
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'encodingphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php'UTFphp-php8php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'encodingphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp copyrightphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setCopyrightphp(php$copyrightphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$copyrightphp)php php|php|php php!isphp_stringphp(php$copyrightphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'copyrightphp'php]php php=php php$copyrightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp entryphp'sphp content
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setContentphp(php$contentphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$contentphp)php php|php|php php!isphp_stringphp(php$contentphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'contentphp'php]php php=php php$contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setDateCreatedphp(php$datephp php=php nullphp)
php php php php php{
php php php php php php php php php$zdatephp php=php nullphp;
php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$zdatephp php=php newphp Zendphp_Datephp;
php php php php php php php php php}php elseifphp php(ctypephp_digitphp(php$datephp)php php&php&php strlenphp(php$datephp)php php=php=php php1php0php)php php{
php php php php php php php php php php php php php$zdatephp php=php newphp Zendphp_Datephp(php$datephp,php Zendphp_Datephp:php:TIMESTAMPphp)php;
php php php php php php php php php}php elseifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$zdatephp php=php php$datephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp Zendphp_Datephp objectphp orphp UNIXphp Timestampphp passedphp asphp parameterphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'dateCreatedphp'php]php php=php php$zdatephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setDateModifiedphp(php$datephp php=php nullphp)
php php php php php{
php php php php php php php php php$zdatephp php=php nullphp;
php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$zdatephp php=php newphp Zendphp_Datephp;
php php php php php php php php php}php elseifphp php(ctypephp_digitphp(php$datephp)php php&php&php strlenphp(php$datephp)php php=php=php php1php0php)php php{
php php php php php php php php php php php php php$zdatephp php=php newphp Zendphp_Datephp(php$datephp,php Zendphp_Datephp:php:TIMESTAMPphp)php;
php php php php php php php php php}php elseifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$zdatephp php=php php$datephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp Zendphp_Datephp objectphp orphp UNIXphp Timestampphp passedphp asphp parameterphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'dateModifiedphp'php]php php=php php$zdatephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp description
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$descriptionphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$descriptionphp)php php|php|php php!isphp_stringphp(php$descriptionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'descriptionphp'php]php php=php php$descriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp ID
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$idphp)php php|php|php php!isphp_stringphp(php$idphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp linkphp tophp thephp HTMLphp sourcephp ofphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setLinkphp(php$linkphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$linkphp)php php|php|php php!isphp_stringphp(php$linkphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'linkphp'php]php php=php php$linkphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp numberphp ofphp commentsphp associatedphp withphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setCommentCountphp(php$countphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$countphp)php php|php|php php!isphp_numericphp(php$countphp)php php|php|php php(intphp)php php$countphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"countphp"php mustphp bephp aphp nonphp-emptyphp integerphp numberphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'commentCountphp'php]php php=php php(intphp)php php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp linkphp tophp aphp HTMLphp pagephp containingphp commentsphp associatedphp withphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setCommentLinkphp(php$linkphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$linkphp)php php|php|php php!isphp_stringphp(php$linkphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"linkphp"php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'commentLinkphp'php]php php=php php$linkphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp linkphp tophp anphp XMLphp feedphp forphp anyphp commentsphp associatedphp withphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setCommentFeedLinkphp(arrayphp php$linkphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$linkphp[php'uriphp'php]php)php php|php|php php!isphp_stringphp(php$linkphp[php'uriphp'php]php)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$linkphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"linkphp"php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$linkphp[php'typephp'php]php)php php|php|php php!inphp_arrayphp(php$linkphp[php'typephp'php]php,php arrayphp(php'atomphp'php,php php'rssphp'php,php php'rdfphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"typephp"php mustphp bephp onephp'
php php php php php php php php php php php php php.php php'php ofphp php"atomphp"php,php php"rssphp"php orphp php"rdfphp"php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'commentFeedLinksphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'commentFeedLinksphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'commentFeedLinksphp'php]php[php]php php=php php$linkphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp linksphp tophp anphp XMLphp feedphp forphp anyphp commentsphp associatedphp withphp thisphp entryphp.
php php php php php php*php Eachphp linkphp isphp anphp arrayphp withphp keysphp php"uriphp"php andphp php"typephp"php,php wherephp typephp isphp onephp ofphp:
php php php php php php*php php"atomphp"php,php php"rssphp"php orphp php"rdfphp"php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setCommentFeedLinksphp(arrayphp php$linksphp)
php php php php php{
php php php php php php php php foreachphp php(php$linksphp asphp php$linkphp)php php{
php php php php php php php php php php php php php$thisphp-php>setCommentFeedLinkphp(php$linkphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp title
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$titlephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$titlephp)php php|php|php php!isphp_stringphp(php$titlephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'titlephp'php]php php=php php$titlephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp withphp feedphp authors
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAuthorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'authorsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'contentphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'contentphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp copyrightphp information
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCopyrightphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'copyrightphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dateCreatedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'dateCreatedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dateModifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'dateModifiedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'descriptionphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp ID
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'idphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp linkphp tophp thephp HTMLphp source
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'linkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linkphp'php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp allphp links
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLinksphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'linksphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'linksphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp title
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp commentsphp/repliesphp forphp currentphp entry
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getCommentCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'commentCountphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentCountphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp URIphp pointingphp tophp thephp HTMLphp pagephp wherephp commentsphp canphp bephp madephp onphp thisphp entry
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCommentLinkphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'commentLinkphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentLinkphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp URIsphp pointingphp tophp aphp feedphp ofphp allphp commentsphp forphp thisphp entry
php php php php php php*php wherephp thephp arrayphp keysphp indicatephp thephp feedphp typephp php(atomphp,php rssphp orphp rdfphp)php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCommentFeedLinksphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'commentFeedLinksphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentFeedLinksphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp entryphp category
php php php php php php*
php php php php php php*php php@paramphp stringphp php$category
php php php php php php*php/
php php php php publicphp functionphp addCategoryphp(arrayphp php$categoryphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$categoryphp[php'termphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Eachphp categoryphp mustphp bephp anphp arrayphp andphp php'
php php php php php php php php php php php php php.php php'containphp atphp leastphp aphp php"termphp"php elementphp containingphp thephp machinephp php'
php php php php php php php php php php php php php.php php'php readablephp categoryphp namephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$categoryphp[php'schemephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$categoryphp[php'schemephp'php]php)
php php php php php php php php php php php php php php php php php|php|php php!isphp_stringphp(php$categoryphp[php'schemephp'php]php)
php php php php php php php php php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$categoryphp[php'schemephp'php]php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Thephp Atomphp schemephp orphp RSSphp domainphp ofphp'
php php php php php php php php php php php php php php php php php.php php'php aphp categoryphp mustphp bephp aphp validphp URIphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'categoriesphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php[php]php php=php php$categoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp arrayphp ofphp entryphp categories
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$categories
php php php php php php*php/
php php php php publicphp functionphp addCategoriesphp(arrayphp php$categoriesphp)
php php php php php{
php php php php php php php php foreachphp php(php$categoriesphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php$thisphp-php>addCategoryphp(php$categoryphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp categories
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'categoriesphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp enclosurephp tophp thephp entryphp.php Thephp arrayphp parameterphp mayphp containphp the
php php php php php php*php keysphp php'uriphp'php,php php'typephp'php andphp php'lengthphp'php.php Onlyphp php'uriphp'php isphp requiredphp forphp Atomphp,php thoughphp the
php php php php php php*php othersphp mustphp alsophp bephp providedphp orphp RSSphp renderingphp php(wherephp theyphp arephp requiredphp)
php php php php php php*php willphp throwphp anphp Exceptionphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$enclosures
php php php php php php*php/
php php php php publicphp functionphp setEnclosurephp(arrayphp php$enclosurephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$enclosurephp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Enclosurephp php"uriphp"php isphp notphp setphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$enclosurephp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Enclosurephp php"uriphp"php isphp notphp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'enclosurephp'php]php php=php php$enclosurephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp arrayphp ofphp allphp enclosuresphp tophp bephp addedphp tophp entryphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getEnclosurephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'enclosurephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'enclosurephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp aphp specificphp dataphp point
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp removephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php$namephp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$namephp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp registeredphp extensions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExtensionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_extensionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp Extensionphp objectphp withphp thephp matchingphp namephp php(postfixedphp withphp php_Entryphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp getExtensionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp php.php php'php_Entryphp'php,php php$thisphp-php>php_extensionsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_extensionsphp[php$namephp php.php php'php_Entryphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp currentphp feedphp typephp beingphp exportedphp tophp php"rssphp"php orphp php"atomphp"php.php Thisphp allows
php php php php php php*php otherphp objectsphp tophp gracefullyphp choosephp whetherphp tophp executephp orphp notphp,php depending
php php php php php php*php onphp theirphp appropriatenessphp forphp thephp currentphp typephp,php ephp.gphp.php renderersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp orphp lastphp feedphp typephp exportedphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Valuephp willphp bephp php"rssphp"php orphp php"atomphp"
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp overloadingphp:php callphp givenphp methodphp onphp firstphp extensionphp implementingphp it
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exceptionphp ifphp nophp extensionsphp implementsphp thephp method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$extensionphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Feedphp_Writerphp_Exceptionphp_InvalidMethodExceptionphp php$ephp)php php{
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Methodphp:php php'php php.php php$method
php php php php php php php php php php php php php.php php'php doesphp notphp existphp andphp couldphp notphp bephp locatedphp onphp aphp registeredphp Extensionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Feedphp_Writerphp_Sourcephp dataphp containerphp forphp usephp.php Thisphp isphp NOT
php php php php php php*php addedphp tophp thephp currentphp feedphp automaticallyphp,php butphp isphp necessaryphp tophp createphp a
php php php php php php*php containerphp withphp somephp initialphp valuesphp presetphp basedphp onphp thephp currentphp feedphp dataphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Source
php php php php php php*php/
php php php php publicphp functionphp createSourcephp(php)
php php php php php{
php php php php php php php php php$sourcephp php=php newphp Zendphp_Feedphp_Writerphp_Sourcephp;
php php php php php php php php ifphp php(php$thisphp-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php$sourcephp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$sourcephp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php returnphp php$sourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp aphp Zendphp_Feedphp_Writerphp_Entryphp objectphp representingphp aphp newphp entryphp/item
php php php php php php*php thephp feedphp dataphp containerphp'sphp internalphp groupphp ofphp entriesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Feedphp_Writerphp_Sourcephp php$source
php php php php php php*php/
php php php php publicphp functionphp setSourcephp(Zendphp_Feedphp_Writerphp_Sourcephp php$sourcephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp[php'sourcephp'php]php php=php php$sourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Source
php php php php php php*php/
php php php php publicphp functionphp getSourcephp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'sourcephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp extensionsphp fromphp Zendphp_Feedphp_Writer
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadExtensionsphp(php)
php php php php php{
php php php php php php php php php$allphp php=php Zendphp_Feedphp_Writerphp:php:getExtensionsphp(php)php;
php php php php php php php php php$extsphp php=php php$allphp[php'entryphp'php]php;
php php php php php php php php foreachphp php(php$extsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$classNamephp php=php Zendphp_Feedphp_Writerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php$extphp)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extphp]php php=php newphp php$classNamephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extphp]php-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php}
php}
