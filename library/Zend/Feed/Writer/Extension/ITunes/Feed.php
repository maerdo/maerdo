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
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp Feedphp dataphp forphp renderingphp byphp Extensionphp'sphp renderers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Encodingphp ofphp allphp textphp values
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Setphp feedphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$enc
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp feedphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp blockphp valuephp ofphp php"yesphp"php orphp php"nophp"php.php Youphp mayphp alsophp setphp anphp emptyphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php string
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesBlockphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!ctypephp_alphaphp(php$valuephp)php php&php&php strlenphp(php$valuephp)php php>php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"blockphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp alphabeticphp charactersphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"blockphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'blockphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp feedphp authors
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$values
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp addItunesAuthorsphp(arrayphp php$valuesphp)
php php php php php{
php php php php php php php php foreachphp php(php$valuesphp asphp php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>addItunesAuthorphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp feedphp author
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp addItunesAuthorphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"authorphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp eachphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'authorsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'authorsphp'php]php[php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp categories
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$values
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesCategoriesphp(arrayphp php$valuesphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'categoriesphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$valuesphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"categoryphp"php mayphp onlyphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp eachphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php[php]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(iconvphp_strlenphp(php$keyphp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"categoryphp"php mayphp onlyphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp eachphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php[php$keyphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$valphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(iconvphp_strlenphp(php$valphp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"categoryphp"php mayphp onlyphp'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp eachphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php[php$keyphp]php[php]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp imagephp php(iconphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesImagephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"imagephp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php bephp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(substrphp(php$valuephp,php php-php3php)php,php arrayphp(php'jpgphp'php,php'pngphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"imagephp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php usephp filephp extensionphp php"jpgphp"php orphp php"pngphp"php whichphp mustphp bephp thephp lastphp threephp'
php php php php php php php php php php php php php.php php'php charactersphp ofphp thephp URIphp php(iphp.ephp.php nophp queryphp stringphp orphp fragmentphp)php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp cumulativephp duration
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesDurationphp(php$valuephp)
php php php php php{
php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$valuephp)
php php php php php php php php php php php php php&php&php php!pregphp_matchphp(php"php/php^php\dphp+php:php[php0php-php5php]php{php1php}php[php0php-php9php]php{php1php}php$php/php"php,php php$valuephp)
php php php php php php php php php php php php php&php&php php!pregphp_matchphp(php"php/php^php\dphp+php:php[php0php-php5php]php{php1php}php[php0php-php9php]php{php1php}php:php[php0php-php5php]php{php1php}php[php0php-php9php]php{php1php}php$php/php"php,php php$valuephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"durationphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php bephp ofphp aphp specifiedphp php[php[HHphp:php]MMphp:php]SSphp formatphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'durationphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp php"explicitphp"php flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesExplicitphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$valuephp,php arrayphp(php'yesphp'php,php'nophp'php,php'cleanphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"explicitphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php bephp onephp ofphp php"yesphp"php,php php"nophp"php orphp php"cleanphp"php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'explicitphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp keywords
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesKeywordsphp(arrayphp php$valuephp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$valuephp)php php>php php1php2php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"keywordsphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php1php2php termsphp'php)php;
php php php php php php php php php}
php php php php php php php php php$concatphp php=php implodephp(php'php,php'php,php php$valuephp)php;
php php php php php php php php ifphp php(iconvphp_strlenphp(php$concatphp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"keywordsphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php havephp aphp concatenatedphp lengthphp ofphp php2php5php5php charsphp wherephp termsphp arephp delimitedphp'
php php php php php php php php php php php php php.php php'php byphp aphp commaphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'keywordsphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp newphp feedphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesNewFeedUrlphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"newFeedUrlphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php bephp aphp validphp URIphp/IRIphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'newFeedUrlphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp feedphp owners
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$values
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp addItunesOwnersphp(arrayphp php$valuesphp)
php php php php php{
php php php php php php php php foreachphp php(php$valuesphp asphp php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>addItunesOwnerphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp feedphp owner
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp addItunesOwnerphp(arrayphp php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$valuephp[php'namephp'php]php)php php|php|php php!issetphp(php$valuephp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"ownerphp"php mustphp'
php php php php php php php php php php php php php.php php'php bephp anphp arrayphp containingphp keysphp php"namephp"php andphp php"emailphp"php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp[php'namephp'php]php,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5
php php php php php php php php php php php php php|php|php iconvphp_strlenphp(php$valuephp[php'emailphp'php]php,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php anyphp php"ownerphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp eachphp forphp php"namephp"php andphp php"emailphp"php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php'ownersphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php'ownersphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'ownersphp'php]php[php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp subtitle
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesSubtitlephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp,php php$thisphp-php>getEncodingphp(php)php)php php>php php2php5php5php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"subtitlephp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php2php5php5php charactersphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'subtitlephp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp summary
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Feed
php php php php php php*php/
php php php php publicphp functionphp setItunesSummaryphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(iconvphp_strlenphp(php$valuephp,php php$thisphp-php>getEncodingphp(php)php)php php>php php4php0php0php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'invalidphp parameterphp:php php"summaryphp"php mayphp onlyphp'
php php php php php php php php php php php php php.php php'php containphp aphp maximumphp ofphp php4php0php0php0php charactersphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php'summaryphp'php]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php proxyphp tophp internalphp setters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$pointphp php=php Zendphp_Feedphp_Writerphp:php:lcfirstphp(substrphp(php$methodphp,php php9php)php)php;
php php php php php php php php ifphp php(php!methodphp_existsphp(php$thisphp,php php'setItunesphp'php php.php ucfirstphp(php$pointphp)php)
php php php php php php php php php php php php php&php&php php!methodphp_existsphp(php$thisphp,php php'addItunesphp'php php.php ucfirstphp(php$pointphp)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Exceptionphp/InvalidMethodExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Writerphp_Exceptionphp_InvalidMethodExceptionphp(
php php php php php php php php php php php php php php php php php'invalidphp methodphp:php php'php php.php php$method
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$pointphp,php php$thisphp-php>php_dataphp)php php|php|php emptyphp(php$thisphp-php>php_dataphp[php$pointphp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$pointphp]php;
php php php php php}
php}
