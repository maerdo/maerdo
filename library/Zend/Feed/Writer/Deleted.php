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
php php*php php@versionphp php php php php$Idphp:php Deletedphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Feedphp/FeedAbstractphp.phpphp'php;

php php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Deleted
php{

php php php php php/php*php*
php php php php php php*php Internalphp arrayphp containingphp allphp dataphp associatedphp withphp thisphp entryphp orphp itemphp.
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

php php php php publicphp functionphp setReferencephp(php$referencephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$referencephp)php php|php|php php!isphp_stringphp(php$referencephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php referencephp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'referencephp'php]php php=php php$referencephp;
php php php php php}

php php php php publicphp functionphp getReferencephp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'referencephp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'referencephp'php]php;
php php php php php}

php php php php publicphp functionphp setWhenphp(php$datephp php=php nullphp)
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
php php php php php php php php php$thisphp-php>php_dataphp[php'whenphp'php]php php=php php$zdatephp;
php php php php php}

php php php php publicphp functionphp getWhenphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'whenphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'whenphp'php]php;
php php php php php}

php php php php publicphp functionphp setByphp(arrayphp php$byphp)
php php php php php{
php php php php php php php php php$authorphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'namephp'php,php php$byphp)
php php php php php php php php php php php php php|php|php emptyphp(php$byphp[php'namephp'php]php)
php php php php php php php php php php php php php|php|php php!isphp_stringphp(php$byphp[php'namephp'php]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php authorphp arrayphp mustphp includephp aphp php"namephp"php keyphp withphp aphp nonphp-emptyphp stringphp valuephp'php)php;
php php php php php php php php php}
php php php php php php php php php$authorphp[php'namephp'php]php php=php php$byphp[php'namephp'php]php;
php php php php php php php php ifphp php(issetphp(php$byphp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$byphp[php'emailphp'php]php)php php|php|php php!isphp_stringphp(php$byphp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"emailphp"php arrayphp valuephp mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$authorphp[php'emailphp'php]php php=php php$byphp[php'emailphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$byphp[php'uriphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$byphp[php'uriphp'php]php)
php php php php php php php php php php php php php php php php php|php|php php!isphp_stringphp(php$byphp[php'uriphp'php]php)
php php php php php php php php php php php php php php php php php|php|php php!Zendphp_Uriphp:php:checkphp(php$byphp[php'uriphp'php]php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp parameterphp:php php"uriphp"php arrayphp valuephp mustphp bephp aphp nonphp-emptyphp stringphp andphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$authorphp[php'uriphp'php]php php=php php$byphp[php'uriphp'php]php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'byphp'php]php php=php php$authorphp;
php php php php php}

php php php php publicphp functionphp getByphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'byphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'byphp'php]php;
php php php php php}

php php php php publicphp functionphp setCommentphp(php$commentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp[php'commentphp'php]php php=php php$commentphp;
php php php php php}

php php php php publicphp functionphp getCommentphp(php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'commentphp'php,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'commentphp'php]php;
php php php php php}

php}
