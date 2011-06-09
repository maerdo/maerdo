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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp CookieJar
php php*php php@versionphp php php php php$Idphp:php CookieJarphp.phpphp php2php3php4php4php3php php2php0php1php0php-php1php1php-php2php4php php1php1php:php5php3php:php1php3Zphp shaharphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php"Zendphp/Uriphp.phpphp"php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Cookie
php php*php/
requirephp_oncephp php"Zendphp/Httpphp/Cookiephp.phpphp"php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php"Zendphp/Httpphp/Responsephp.phpphp"php;

php/php*php*
php php*php Aphp Zendphp_Httpphp_CookieJarphp objectphp isphp designedphp tophp containphp andphp maintainphp HTTPphp cookiesphp,php andphp should
php php*php bephp usedphp alongphp withphp Zendphp_Httpphp_Clientphp inphp orderphp tophp managephp cookiesphp acrossphp HTTPphp requestsphp and
php php*php responsesphp.
php php*
php php*php Thephp classphp containsphp anphp arrayphp ofphp Zendphp_Httpphp_Cookiephp objectsphp.php Cookiesphp canphp bephp addedphp tophp thephp jar
php php*php automaticallyphp fromphp aphp requestphp orphp manuallyphp.php Thenphp,php thephp jarphp canphp findphp andphp returnphp thephp cookies
php php*php neededphp forphp aphp specificphp HTTPphp requestphp.
php php*
php php*php Aphp specialphp parameterphp canphp bephp passedphp tophp allphp methodsphp ofphp thisphp classphp thatphp returnphp cookiesphp:php Cookies
php php*php canphp bephp returnedphp eitherphp inphp theirphp nativephp formphp php(asphp Zendphp_Httpphp_Cookiephp objectsphp)php orphp asphp stringsphp php-
php php*php thephp laterphp isphp suitablephp forphp sendingphp asphp thephp valuephp ofphp thephp php"Cookiephp"php headerphp inphp anphp HTTPphp requestphp.
php php*php Youphp canphp alsophp choosephp,php whenphp returningphp morephp thanphp onephp cookiephp,php whetherphp tophp getphp anphp arrayphp ofphp strings
php php*php php(byphp passingphp Zendphp_Httpphp_CookieJarphp:php:COOKIEphp_STRINGphp_ARRAYphp)php orphp onephp unifiedphp stringphp forphp allphp cookies
php php*php php(byphp passingphp Zendphp_Httpphp_CookieJarphp:php:COOKIEphp_STRINGphp_CONCATphp)php.
php php*
php php*php php@linkphp php php php php php php httpphp:php/php/wpphp.netscapephp.comphp/newsrefphp/stdphp/cookiephp_specphp.htmlphp forphp somephp specsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp CookieJar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_CookieJarphp implementsphp Countablephp,php IteratorAggregate
php{
php php php php php/php*php*
php php php php php php*php Returnphp cookiephp(sphp)php asphp aphp Zendphp_Httpphp_Cookiephp object
php php php php php php*
php php php php php php*php/
php php php php constphp COOKIEphp_OBJECTphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Returnphp cookiephp(sphp)php asphp aphp stringphp php(suitablephp forphp sendingphp inphp anphp HTTPphp requestphp)
php php php php php php*
php php php php php php*php/
php php php php constphp COOKIEphp_STRINGphp_ARRAYphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Returnphp allphp cookiesphp asphp onephp longphp stringphp php(suitablephp forphp sendingphp inphp anphp HTTPphp requestphp)
php php php php php php*
php php php php php php*php/
php php php php constphp COOKIEphp_STRINGphp_CONCATphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Arrayphp storingphp cookies
php php php php php php*
php php php php php php*php Cookiesphp arephp storedphp accordingphp tophp domainphp andphp pathphp:
php php php php php php*php php$cookies
php php php php php php*php php php+php wwwphp.mydomainphp.com
php php php php php php*php php php php php+php php/
php php php php php php*php php php php php php php-php cookiephp1
php php php php php php*php php php php php php php-php cookiephp2
php php php php php php*php php php php php+php php/somepath
php php php php php php*php php php php php php php-php othercookie
php php php php php php*php php php+php wwwphp.otherdomainphp.net
php php php php php php*php php php php php+php php/
php php php php php php*php php php php php php php-php alsocookie
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$cookiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp Zendphp_Httpphp_Cookiephp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_rawCookiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructphp aphp newphp CookieJarphp object
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp cookiephp tophp thephp jarphp.php Cookiephp shouldphp bephp passedphp eitherphp asphp aphp Zendphp_Httpphp_Cookiephp object
php php php php php php*php orphp asphp aphp stringphp php-php inphp whichphp casephp anphp objectphp isphp createdphp fromphp thephp stringphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Cookiephp|stringphp php$cookie
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp|stringphp php php php php$refphp_uriphp Optionalphp referencephp URIphp php(forphp domainphp,php pathphp,php securephp)
php php php php php php*php php@paramphp booleanphp php$encodeValue
php php php php php php*php/
php php php php publicphp functionphp addCookiephp(php$cookiephp,php php$refphp_uriphp php=php nullphp,php php$encodeValuephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$cookiephp)php)php php{
php php php php php php php php php php php php php$cookiephp php=php Zendphp_Httpphp_Cookiephp:php:fromStringphp(php$cookiephp,php php$refphp_uriphp,php php$encodeValuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$cookiephp instanceofphp Zendphp_Httpphp_Cookiephp)php php{
php php php php php php php php php php php php php$domainphp php=php php$cookiephp-php>getDomainphp(php)php;
php php php php php php php php php php php php php$pathphp php=php php$cookiephp-php>getPathphp(php)php;
php php php php php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>cookiesphp[php$domainphp]php)php)php php$thisphp-php>cookiesphp[php$domainphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>cookiesphp[php$domainphp]php[php$pathphp]php)php)php php$thisphp-php>cookiesphp[php$domainphp]php[php$pathphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php$thisphp-php>cookiesphp[php$domainphp]php[php$pathphp]php[php$cookiephp-php>getNamephp(php)php]php php=php php$cookiephp;
php php php php php php php php php php php php php$thisphp-php>php_rawCookiesphp[php]php php=php php$cookiephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Exceptionphp(php'Supplientphp argumentphp isphp notphp aphp validphp cookiephp stringphp orphp objectphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp anphp HTTPphp responsephp,php addingphp allphp thephp cookiesphp setphp inphp thatphp response
php php php php php php*php tophp thephp cookiephp jarphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Responsephp php$response
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp|stringphp php$refphp_uriphp Requestedphp URI
php php php php php php*php php@paramphp booleanphp php$encodeValue
php php php php php php*php/
php php php php publicphp functionphp addCookiesFromResponsephp(php$responsephp,php php$refphp_uriphp,php php$encodeValuephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!php php$responsephp instanceofphp Zendphp_Httpphp_Responsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Exceptionphp(php'php$responsephp isphp expectedphp tophp bephp aphp Responsephp objectphp,php php'php php.
php php php php php php php php php php php php php php php php gettypephp(php$responsephp)php php.php php'php wasphp passedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$cookiephp_hdrsphp php=php php$responsephp-php>getHeaderphp(php'Setphp-Cookiephp'php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$cookiephp_hdrsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$cookiephp_hdrsphp asphp php$cookiephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addCookiephp(php$cookiephp,php php$refphp_uriphp,php php$encodeValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$cookiephp_hdrsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addCookiephp(php$cookiephp_hdrsphp,php php$refphp_uriphp,php php$encodeValuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp cookiesphp inphp thephp cookiephp jarphp asphp anphp array
php php php php php php*
php php php php php php*php php@paramphp intphp php$retphp_asphp Whetherphp tophp returnphp cookiesphp asphp objectsphp ofphp Zendphp_Httpphp_Cookiephp orphp asphp strings
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php publicphp functionphp getAllCookiesphp(php$retphp_asphp php=php selfphp:php:COOKIEphp_OBJECTphp)
php php php php php{
php php php php php php php php php$cookiesphp php=php php$thisphp-php>php_flattenCookiesArrayphp(php$thisphp-php>cookiesphp,php php$retphp_asphp)php;
php php php php php php php php returnphp php$cookiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp allphp cookiesphp matchingphp aphp specificphp requestphp accordingphp tophp thephp requestphp URIphp,
php php php php php php*php whetherphp sessionphp cookiesphp shouldphp bephp sentphp orphp notphp,php andphp thephp timephp tophp considerphp asphp php"nowphp"php when
php php php php php php*php checkingphp cookiephp expiryphp timephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp_Httpphp php$uriphp URIphp tophp checkphp againstphp php(securephp,php domainphp,php pathphp)
php php php php php php*php php@paramphp booleanphp php$matchSessionCookiesphp Whetherphp tophp sendphp sessionphp cookies
php php php php php php*php php@paramphp intphp php$retphp_asphp Whetherphp tophp returnphp cookiesphp asphp objectsphp ofphp Zendphp_Httpphp_Cookiephp orphp asphp strings
php php php php php php*php php@paramphp intphp php$nowphp Overridephp thephp currentphp timephp whenphp checkingphp forphp expiryphp time
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php publicphp functionphp getMatchingCookiesphp(php$uriphp,php php$matchSessionCookiesphp php=php truephp,
php php php php php php php php php$retphp_asphp php=php selfphp:php:COOKIEphp_OBJECTphp,php php$nowphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$uriphp)php)php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php ifphp php(php!php php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Exceptionphp(php"Invalidphp URIphp stringphp orphp objectphp passedphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Firstphp,php reducephp thephp arrayphp ofphp cookiesphp tophp onlyphp thosephp matchingphp domainphp andphp path
php php php php php php php php php$cookiesphp php=php php$thisphp-php>php_matchDomainphp(php$uriphp-php>getHostphp(php)php)php;
php php php php php php php php php$cookiesphp php=php php$thisphp-php>php_matchPathphp(php$cookiesphp,php php$uriphp-php>getPathphp(php)php)php;
php php php php php php php php php$cookiesphp php=php php$thisphp-php>php_flattenCookiesArrayphp(php$cookiesphp,php selfphp:php:COOKIEphp_OBJECTphp)php;

php php php php php php php php php/php/php Nextphp,php runphp Cookiephp-php>matchphp onphp allphp cookiesphp tophp checkphp securephp,php timephp andphp sessionphp mathcing
php php php php php php php php php$retphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$cookiesphp asphp php$cookiephp)
php php php php php php php php php php php php ifphp php(php$cookiephp-php>matchphp(php$uriphp,php php$matchSessionCookiesphp,php php$nowphp)php)
php php php php php php php php php php php php php php php php php$retphp[php]php php=php php$cookiephp;

php php php php php php php php php/php/php Nowphp,php usephp selfphp:php:php_flattenCookiesArrayphp againphp php-php onlyphp tophp convertphp tophp thephp returnphp formatphp php;php)
php php php php php php php php php$retphp php=php php$thisphp-php>php_flattenCookiesArrayphp(php$retphp,php php$retphp_asphp)php;

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp specificphp cookiephp accordingphp tophp aphp URIphp andphp name
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp|stringphp php$uriphp Thephp uriphp php(domainphp andphp pathphp)php tophp match
php php php php php php*php php@paramphp stringphp php$cookiephp_namephp Thephp cookiephp'sphp name
php php php php php php*php php@paramphp intphp php$retphp_asphp Whetherphp tophp returnphp cookiesphp asphp objectsphp ofphp Zendphp_Httpphp_Cookiephp orphp asphp strings
php php php php php php*php php@returnphp Zendphp_Httpphp_Cookiephp|string
php php php php php php*php/
php php php php publicphp functionphp getCookiephp(php$uriphp,php php$cookiephp_namephp,php php$retphp_asphp php=php selfphp:php:COOKIEphp_OBJECTphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$uriphp)php)php php{
php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Exceptionphp(php'Invalidphp URIphp specifiedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Getphp correctphp cookiephp path
php php php php php php php php php$pathphp php=php php$uriphp-php>getPathphp(php)php;
php php php php php php php php php$pathphp php=php substrphp(php$pathphp,php php0php,php strrposphp(php$pathphp,php php'php/php'php)php)php;
php php php php php php php php ifphp php(php!php php$pathphp)php php$pathphp php=php php'php/php'php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>cookiesphp[php$uriphp-php>getHostphp(php)php]php[php$pathphp]php[php$cookiephp_namephp]php)php)php php{
php php php php php php php php php php php php php$cookiephp php=php php$thisphp-php>cookiesphp[php$uriphp-php>getHostphp(php)php]php[php$pathphp]php[php$cookiephp_namephp]php;

php php php php php php php php php php php php switchphp php(php$retphp_asphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_OBJECTphp:
php php php php php php php php php php php php php php php php php php php php returnphp php$cookiephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_STRINGphp_ARRAYphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_STRINGphp_CONCATphp:
php php php php php php php php php php php php php php php php php php php php returnphp php$cookiephp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Exceptionphp(php"Invalidphp valuephp passedphp forphp php\php$retphp_asphp:php php{php$retphp_asphp}php"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp functionphp tophp recursivlyphp flattenphp anphp arrayphp.php Shoudphp bephp usedphp whenphp exportingphp the
php php php php php php*php cookiesphp arrayphp php(orphp partsphp ofphp itphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Cookiephp|arrayphp php$ptr
php php php php php php*php php@paramphp intphp php$retphp_asphp Whatphp valuephp tophp return
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php protectedphp functionphp php_flattenCookiesArrayphp(php$ptrphp,php php$retphp_asphp php=php selfphp:php:COOKIEphp_OBJECTphp)php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$ptrphp)php)php php{
php php php php php php php php php php php php php$retphp php=php php(php$retphp_asphp php=php=php selfphp:php:COOKIEphp_STRINGphp_CONCATphp php?php php'php'php php:php arrayphp(php)php)php;
php php php php php php php php php php php php foreachphp php(php$ptrphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$retphp_asphp php=php=php selfphp:php:COOKIEphp_STRINGphp_CONCATphp)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php.php=php php$thisphp-php>php_flattenCookiesArrayphp(php$itemphp,php php$retphp_asphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$retphp php=php arrayphp_mergephp(php$retphp,php php$thisphp-php>php_flattenCookiesArrayphp(php$itemphp,php php$retphp_asphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php elseifphp php(php$ptrphp instanceofphp Zendphp_Httpphp_Cookiephp)php php{
php php php php php php php php php php php php switchphp php(php$retphp_asphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_STRINGphp_ARRAYphp:
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php$ptrphp-php>php_php_toStringphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_STRINGphp_CONCATphp:
php php php php php php php php php php php php php php php php php php php php returnphp php$ptrphp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:COOKIEphp_OBJECTphp:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php$ptrphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp subsetphp ofphp thephp cookiesphp arrayphp matchingphp aphp specificphp domain
php php php php php php*
php php php php php php*php php@paramphp stringphp php$domain
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_matchDomainphp(php$domainphp)
php php php php php{
php php php php php php php php php$retphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>cookiesphp)php asphp php$cdomphp)php php{
php php php php php php php php php php php php ifphp php(Zendphp_Httpphp_Cookiephp:php:matchCookieDomainphp(php$cdomphp,php php$domainphp)php)php php{
php php php php php php php php php php php php php php php php php$retphp[php$cdomphp]php php=php php$thisphp-php>cookiesphp[php$cdomphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp subsetphp ofphp aphp domainphp-matchingphp cookiesphp thatphp alsophp matchphp aphp specifiedphp path
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$domphp_array
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_matchPathphp(php$domainsphp,php php$pathphp)
php php php php php{
php php php php php php php php php$retphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$domainsphp asphp php$domphp php=php>php php$pathsphp_arrayphp)php php{
php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$pathsphp_arrayphp)php asphp php$cpathphp)php php{
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Httpphp_Cookiephp:php:matchCookiePathphp(php$cpathphp,php php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php issetphp(php$retphp[php$domphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$retphp[php$domphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$retphp[php$domphp]php[php$cpathphp]php php=php php$pathsphp_arrayphp[php$cpathphp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp CookieJarphp objectphp andphp automaticallyphp loadphp intophp itphp allphp the
php php php php php php*php cookiesphp setphp inphp anphp Httpphp_Responsephp objectphp.php Ifphp php$uriphp isphp setphp,php itphp willphp be
php php php php php php*php consideredphp asphp thephp requestedphp URIphp forphp settingphp defaultphp domainphp andphp path
php php php php php php*php ofphp thephp cookiephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Responsephp php$responsephp HTTPphp Responsephp object
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp|stringphp php$uriphp Thephp requestedphp URI
php php php php php php*php php@returnphp Zendphp_Httpphp_CookieJar
php php php php php php*php php@todophp Addphp thephp php$uriphp functionalityphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp fromResponsephp(Zendphp_Httpphp_Responsephp php$responsephp,php php$refphp_uriphp)
php php php php php{
php php php php php php php php php$jarphp php=php newphp selfphp(php)php;
php php php php php php php php php$jarphp-php>addCookiesFromResponsephp(php$responsephp,php php$refphp_uriphp)php;
php php php php php php php php returnphp php$jarphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Requiredphp byphp Countablephp interface
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_rawCookiesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Requiredphp byphp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp ArrayIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>php_rawCookiesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tellsphp ifphp thephp jarphp isphp emptyphp ofphp anyphp cookie
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isEmptyphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp)php php=php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Emptiesphp thephp cookieJarphp ofphp anyphp cookie
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_CookieJar
php php php php php php*php/
php php php php publicphp functionphp resetphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>cookiesphp php=php php$thisphp-php>php_rawCookiesphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
