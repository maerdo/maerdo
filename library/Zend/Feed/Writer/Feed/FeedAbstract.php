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
php php*php php@versionphp php php php php$Idphp:php FeedAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writer
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Entryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atom
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Atomphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Rss
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Rssphp.phpphp'php;

requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Feedphp_FeedAbstract
php{
php php php php php/php*php*
php php php php php php*php Containsphp allphp Feedphp levelphp datephp tophp appendphp inphp feedphp output
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

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
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'namephp'php,php php$namephp)php php|php|php emptyphp(php$namephp[php'namephp'php]php)php php|php|php php!isphp_stringphp(php$namephp[php'namephp'php]php)php)php php{
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
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$namephp[php'uriphp'php]php)php php|php|php php!isphp_stringphp(php$namephp[php'uriphp'php]php)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$namephp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php arrayphp valuephp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$authorphp[php'uriphp'php]php php=php php$namephp[php'uriphp'php]php;
php php php php php php php php php php php php php}
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
php php php php php php*php Setphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@paramphp nullphp|integerphp|Zendphp_Date
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
php php php php php php*php php@paramphp nullphp|integerphp|Zendphp_Date
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
php php php php php php*php Setphp thephp feedphp lastphp-buildphp datephp.php Ignoredphp forphp Atomphp php1php.php0php.
php php php php php php*
php php php php php php*php php@paramphp nullphp|integerphp|Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp setLastBuildDatephp(php$datephp php=php nullphp)
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
php php php php php php php php php$thisphp-php>php_dataphp[php'lastBuildDatephp'php]php php=php php$zdatephp;
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
php php php php php php*php Setphp thephp feedphp generatorphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setGeneratorphp(php$namephp,php php$versionphp php=php nullphp,php php$uriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php$namephp;
php php php php php php php php php php php php ifphp php(emptyphp(php$dataphp[php'namephp'php]php)php php|php|php php!isphp_stringphp(php$dataphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"namephp"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$generatorphp php=php arrayphp(php'namephp'php php=php>php php$dataphp[php'namephp'php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'versionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$dataphp[php'versionphp'php]php)php php|php|php php!isphp_stringphp(php$dataphp[php'versionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"versionphp"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$generatorphp[php'versionphp'php]php php=php php$dataphp[php'versionphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$dataphp[php'uriphp'php]php)php php|php|php php!isphp_stringphp(php$dataphp[php'uriphp'php]php)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$dataphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$generatorphp[php'uriphp'php]php php=php php$dataphp[php'uriphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(emptyphp(php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"namephp"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$generatorphp php=php arrayphp(php'namephp'php php=php>php php$namephp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$versionphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$versionphp)php php|php|php php!isphp_stringphp(php$versionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"versionphp"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$generatorphp[php'versionphp'php]php php=php php$versionphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$uriphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$uriphp)php php|php|php php!isphp_stringphp(php$uriphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$uriphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$generatorphp[php'uriphp'php]php php=php php$uriphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'generatorphp'php]php php=php php$generatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp IDphp php-php URIphp orphp URNphp php(viaphp PCREphp patternphp)php supported
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php(emptyphp(php$idphp)php php|php|php php!isphp_stringphp(php$idphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$idphp)php)php php&php&
php php php php php php php php php!pregphp_matchphp(php"php#php^urnphp:php[aphp-zAphp-Zphp0php-php9php]php[aphp-zAphp-Zphp0php-php9php\php-php]php{php1php,php3php1php}php:php(php[aphp-zAphp-Zphp0php-php9php\php(php\php)php\php+php\php,php\php.php\php:php\php=php\php@php\php;php\php$php\php_php\php!php\php*php\php-php]php|php%php[php0php-php9aphp-fAphp-Fphp]php{php2php}php)php*php#php"php,php php$idphp)
php php php php php php php php php&php&php php!php$thisphp-php>php_validateTagUriphp(php$idphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'idphp'php]php php=php php$idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp URIphp usingphp thephp tagphp schemephp php(RFCphp php4php1php5php1php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_validateTagUriphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^tagphp:php(php?php<namephp>php.php*php)php,php(php?php<datephp>php\dphp{php4php}php-php?php\dphp{php0php,php2php}php-php?php\dphp{php0php,php2php}php)php:php(php?php<specificphp>php.php*php)php(php.php*php:php)php*php$php/php'php,php php$idphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php$dvalidphp php=php falsephp;
php php php php php php php php php php php php php$nvalidphp php=php falsephp;
php php php php php php php php php php php php php$datephp php=php php$matchesphp[php'datephp'php]php;
php php php php php php php php php php php php php$dphp6php php=php strtotimephp(php$datephp)php;
php php php php php php php php php php php php ifphp php(php(strlenphp(php$datephp)php php=php=php php4php)php php&php&php php$datephp <php=php datephp(php'Yphp'php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}php elseifphp php(php(strlenphp(php$datephp)php php=php=php php7php)php php&php&php php(php$dphp6php <php strtotimephp(php"nowphp"php)php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}php elseifphp php(php(strlenphp(php$datephp)php php=php=php php1php0php)php php&php&php php(php$dphp6php <php strtotimephp(php"nowphp"php)php)php)php php{
php php php php php php php php php php php php php php php php php$dvalidphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$validatorphp php=php newphp Zendphp_Validatephp_EmailAddressphp;
php php php php php php php php php php php php ifphp php(php$validatorphp-php>isValidphp(php$matchesphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$nvalidphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$nvalidphp php=php php$validatorphp-php>isValidphp(php'infophp@php'php php.php php$matchesphp[php'namephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$dvalidphp php&php&php php$nvalidphp;

php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp feedphp imagephp php(URIphp atphp minimumphp)php.php Parameterphp isphp aphp singlephp arrayphp withphp the
php php php php php php*php requiredphp keyphp php'uriphp'php.php Whenphp renderingphp asphp RSSphp,php thephp requiredphp keysphp arephp php'uriphp'php,
php php php php php php*php php'titlephp'php andphp php'linkphp'php.php RSSphp alsophp specifiesphp threephp optionalphp parametersphp php'widthphp'php,
php php php php php php*php php'heightphp'php andphp php'descriptionphp'php.php Onlyphp php'uriphp'php isphp requiredphp andphp usedphp forphp Atomphp renderingphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php/
php php php php publicphp functionphp setImagephp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$dataphp[php'uriphp'php]php)php php|php|php php!isphp_stringphp(php$dataphp[php'uriphp'php]php)
php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$dataphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp php\php'uriphp\php'php'
php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp feedphp iconphp php(URIphp atphp minimumphp)php.php Parameterphp isphp aphp singlephp arrayphp withphp the
php php php php php php*php requiredphp keyphp php'uriphp'php.php Onlyphp php'uriphp'php isphp requiredphp andphp usedphp forphp Atomphp renderingphp.
php php php php php php*php RSSphp doesphp notphp supportphp anphp Iconphp tagphp exceptphp viaphp Atomphp php1php.php0php asphp anphp extensionphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php/
php php php php publicphp functionphp setIconphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$dataphp[php'uriphp'php]php)php php|php|php php!isphp_stringphp(php$dataphp[php'uriphp'php]php)
php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$dataphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp php\php'uriphp\php'php'
php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'iconphp'php]php php=php php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp feedphp language
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setLanguagephp(php$languagephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$languagephp)php php|php|php php!isphp_stringphp(php$languagephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php parameterphp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'languagephp'php]php php=php php$languagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp linkphp tophp thephp HTMLphp source
php php php php php php*
php php php php php php*php php@paramphp stringphp php$link
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
php php php php php php*php Setphp aphp linkphp tophp anphp XMLphp feedphp forphp anyphp feedphp typephp/version
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp setFeedLinkphp(php$linkphp,php php$typephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$linkphp)php php|php|php php!isphp_stringphp(php$linkphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"linkphp"php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(strtolowerphp(php$typephp)php,php arrayphp(php'rssphp'php,php php'rdfphp'php,php php'atomphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"typephp"php;php Youphp mustphp declarephp thephp typephp ofphp feedphp thephp linkphp pointsphp tophp,php iphp.ephp.php RSSphp,php RDFphp orphp Atomphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'feedLinksphp'php]php[strtolowerphp(php$typephp)php]php php=php php$linkphp;
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
php php php php php php*php Setphp thephp feedphp characterphp encoding
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
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
php php php php php php*php Setphp thephp feedphp'sphp basephp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php/
php php php php publicphp functionphp setBaseUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"urlphp"php arrayphp valuephp'
php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'baseUrlphp'php]php php=php php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Pubsubhubbubphp hubphp endpointphp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php/
php php php php publicphp functionphp addHubphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"urlphp"php arrayphp valuephp'
php php php php php php php php php php php php php.php php'php mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'hubsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'hubsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'hubsphp'php]php[php]php php=php php$urlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp Pubsubhubbubphp hubphp endpointphp URLs
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$urls
php php php php php php*php/
php php php php publicphp functionphp addHubsphp(arrayphp php$urlsphp)
php php php php php{
php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php$thisphp-php>addHubphp(php$urlphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp feedphp category
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
php php php php php php*php Setphp anphp arrayphp ofphp feedphp categories
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
php php php php php php*php Getphp aphp singlephp author
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getAuthorphp(php$indexphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'authorsphp'php]php[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorsphp'php]php[php$indexphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
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
php php php php php php*php Getphp thephp copyrightphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCopyrightphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'copyrightphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'copyrightphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp creationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDateCreatedphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dateCreatedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'dateCreatedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp modificationphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDateModifiedphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dateModifiedphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'dateModifiedphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp lastphp-buildphp date
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLastBuildDatephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'lastBuildDatephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'lastBuildDatephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp description
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'descriptionphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'descriptionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp generatorphp entry
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getGeneratorphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'generatorphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'generatorphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp ID
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'idphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'idphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp imagephp URI
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'imagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp iconphp URI
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getIconphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'iconphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'iconphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp language
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLanguagephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'languagephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'languagephp'php]php;
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
php php php php php php*php Getphp aphp linkphp tophp thephp XMLphp feed
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFeedLinksphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'feedLinksphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'feedLinksphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp title
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'titlephp'php]php;
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
php php php php php php*php Getphp thephp feedphp'sphp basephp url
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'baseUrlphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'baseUrlphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp URLsphp usedphp asphp Pubsubhubbubphp hubsphp endpoints
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getHubsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hubsphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'hubsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp feedphp categories
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
php php php php php php*php Resetsphp thephp instancephp andphp deletesphp allphp data
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp resetphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;
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
php php php php php php*php Loadphp extensionsphp fromphp Zendphp_Feedphp_Writer
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadExtensionsphp(php)
php php php php php{
php php php php php php php php php$allphp php=php Zendphp_Feedphp_Writerphp:php:getExtensionsphp(php)php;
php php php php php php php php php$extsphp php=php php$allphp[php'feedphp'php]php;
php php php php php php php php foreachphp php(php$extsphp asphp php$extphp)php php{
php php php php php php php php php php php php php$classNamephp php=php Zendphp_Feedphp_Writerphp:php:getPluginLoaderphp(php)php-php>getClassNamephp(php$extphp)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extphp]php php=php newphp php$classNamephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$extphp]php-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php}
php}
