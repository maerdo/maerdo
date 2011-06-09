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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Itunesphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php ITunesphp rssphp extension
php php*
php php*php Classesphp usedphp tophp describephp thephp itunesphp channelphp extension
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Builderphp_Headerphp_Itunesphp extendsphp ArrayObject
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$categoriesphp Categoriesphp columnsphp andphp inphp iTunesphp Musicphp Storephp Browse
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$categoriesphp)
php php php php php{
php php php php php php php php php$thisphp-php>setCategoriesphp(php$categoriesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp categoriesphp columnphp andphp inphp iTunesphp Musicphp Storephp Browse
php php php php php php*php php$categoriesphp mustphp conformphp tophp thephp followingphp formatphp:
php php php php php php*php php<codephp>
php php php php php php*php arrayphp(arrayphp(php'mainphp'php php=php>php php'mainphp categoryphp'php,
php php php php php php*php php php php php php php php php php php php php php'subphp'php php=php>php php'subphp categoryphp'php php/php/php optionnal
php php php php php php*php php php php php php php php php php php php php)php,
php php php php php php*php php php php php php php php/php/php upphp tophp php3php rows
php php php php php php*php php php php php php php)
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$categories
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCategoriesphp(arrayphp php$categoriesphp)
php php php php php{
php php php php php php php php php$nbphp php=php countphp(php$categoriesphp)php;
php php php php php php php php ifphp php(php0php php=php=php=php php$nbphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp atphp leastphp onephp itunesphp categoryphp"php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$nbphp php>php php3php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp atphp mostphp threephp itunesphp categoriesphp"php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$categoriesphp asphp php$iphp php=php>php php$categoryphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$categoryphp[php'mainphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp thephp mainphp categoryphp php(categoryphp php#php$iphp)php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'categoryphp'php,php php$categoriesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp artistphp valuephp,php defaultphp tophp thephp feedphp'sphp authorphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$author
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setAuthorphp(php$authorphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'authorphp'php,php php$authorphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp ownerphp ofphp thephp postcast
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php defaultphp tophp thephp feedphp'sphp authorphp value
php php php php php php*php php@paramphp php stringphp php$emailphp defaultphp tophp thephp feedphp'sphp emailphp value
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setOwnerphp(php$namephp php=php php'php'php,php php$emailphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$emailphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_EmailAddress
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;
php php php php php php php php php php php php php$validatephp php=php newphp Zendphp_Validatephp_EmailAddressphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$validatephp-php>isValidphp(php$emailphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp aphp validphp emailphp addressphp intophp thephp itunesphp ownerphp'sphp emailphp propertyphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'ownerphp'php,php arrayphp(php'namephp'php php=php>php php$namephp,php php'emailphp'php php=php>php php$emailphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp albumphp/podcastphp artphp picture
php php php php php php*php Defaultphp tophp thephp feedphp'sphp imagephp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$image
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setImagephp(php$imagephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'imagephp'php,php php$imagephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp shortphp descriptionphp ofphp thephp podcast
php php php php php php*php Defaultphp tophp thephp feedphp'sphp description
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$subtitle
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setSubtitlephp(php$subtitlephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'subtitlephp'php,php php$subtitlephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp longerphp descriptionphp ofphp thephp podcast
php php php php php php*php Defaultphp tophp thephp feedphp'sphp description
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$summary
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setSummaryphp(php$summaryphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'summaryphp'php,php php$summaryphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preventphp aphp feedphp fromphp appearing
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$blockphp canphp bephp php'yesphp'php orphp php'nophp'
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setBlockphp(php$blockphp)
php php php php php{
php php php php php php php php php$blockphp php=php strtolowerphp(php$blockphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$blockphp,php arrayphp(php'yesphp'php,php php'nophp'php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp yesphp orphp nophp tophp thephp itunesphp blockphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'blockphp'php,php php$blockphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Configurationphp ofphp thephp parentalphp advisoryphp graphic
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$explicitphp canphp bephp php'yesphp'php,php php'nophp'php orphp php'cleanphp'
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setExplicitphp(php$explicitphp)
php php php php php{
php php php php php php php php php$explicitphp php=php strtolowerphp(php$explicitphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$explicitphp,php arrayphp(php'yesphp'php,php php'nophp'php,php php'cleanphp'php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp yesphp,php nophp orphp cleanphp tophp thephp itunesphp explicitphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'explicitphp'php,php php$explicitphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp commaphp separatedphp listphp ofphp php1php2php keywordsphp maximum
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keywords
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setKeywordsphp(php$keywordsphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'keywordsphp'php,php php$keywordsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp newphp feedphp URLphp location
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php php php php php*php/
php php php php publicphp functionphp setNewFeedUrlphp(php$urlphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'newphp_feedphp_urlphp'php,php php$urlphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp onlyphp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp propertyphp tophp read
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>offsetGetphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php namephp ofphp thephp propertyphp tophp set
php php php php php php*php php@paramphp php mixedphp php php$valuephp valuephp tophp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Issetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>offsetExistsphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$keyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>offsetUnsetphp(php$keyphp)php;
php php php php php php php php php}
php php php php php}

php}