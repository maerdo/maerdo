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
php php*php php@packagephp php php php Zendphp_Dom
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Transformphp CSSphp selectorsphp tophp XPath
php php*
php php*php php@packagephp php php php Zendphp_Dom
php php*php php@subpackagephp Query
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cssphp2Xpathphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Domphp_Queryphp_Cssphp2Xpath
php{
php php php php php/php*php*
php php php php php php*php Transformphp CSSphp expressionphp tophp XPath
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp transformphp(php$pathphp)
php php php php php{
php php php php php php php php php$pathphp php=php php(stringphp)php php$pathphp;
php php php php php php php php ifphp php(strstrphp(php$pathphp,php php'php,php'php)php)php php{
php php php php php php php php php php php php php$pathsphp php php php php php php php=php explodephp(php'php,php'php,php php$pathphp)php;
php php php php php php php php php php php php php$expressionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$pathsphp asphp php$pathphp)php php{
php php php php php php php php php php php php php php php php php$xpathphp php=php selfphp:php:transformphp(trimphp(php$pathphp)php)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$xpathphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$expressionsphp[php]php php=php php$xpathphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$xpathphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$expressionsphp php=php arrayphp_mergephp(php$expressionsphp,php php$xpathphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp implodephp(php'php|php'php,php php$expressionsphp)php;
php php php php php php php php php}

php php php php php php php php php$pathsphp php php php php=php arrayphp(php'php/php/php'php)php;
php php php php php php php php php$pathphp php php php php php=php pregphp_replacephp(php'php|php\sphp+php>php\sphp+php|php'php,php php'php>php'php,php php$pathphp)php;
php php php php php php php php php$segmentsphp php=php pregphp_splitphp(php'php/php\sphp+php/php'php,php php$pathphp)php;
php php php php php php php php foreachphp php(php$segmentsphp asphp php$keyphp php=php>php php$segmentphp)php php{
php php php php php php php php php php php php php$pathSegmentphp php=php selfphp:php:php_tokenizephp(php$segmentphp)php;
php php php php php php php php php php php php ifphp php(php0php php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$pathSegmentphp,php php'php[containsphp(php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$pathsphp[php0php]php php.php=php php'php*php'php php.php ltrimphp(php$pathSegmentphp,php php'php*php'php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$pathsphp[php0php]php php.php=php php$pathSegmentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$pathSegmentphp,php php'php[containsphp(php'php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$pathsphp asphp php$keyphp php=php>php php$xpathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$pathsphp[php$keyphp]php php.php=php php'php/php/php*php'php php.php ltrimphp(php$pathSegmentphp,php php'php*php'php)php;
php php php php php php php php php php php php php php php php php php php php php$pathsphp[php]php php php php php php php=php php$xpathphp php.php php$pathSegmentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php foreachphp php(php$pathsphp asphp php$keyphp php=php>php php$xpathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$pathsphp[php$keyphp]php php.php=php php'php/php/php'php php.php php$pathSegmentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php1php php=php=php countphp(php$pathsphp)php)php php{
php php php php php php php php php php php php returnphp php$pathsphp[php0php]php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php|php'php,php php$pathsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tokenizephp CSSphp expressionsphp tophp XPath
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$expression
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_tokenizephp(php$expressionphp)
php php php php php{
php php php php php php php php php/php/php Childphp selectors
php php php php php php php php php$expressionphp php=php strphp_replacephp(php'php>php'php,php php'php/php'php,php php$expressionphp)php;

php php php php php php php php php/php/php IDs
php php php php php php php php php$expressionphp php=php pregphp_replacephp(php'php|php#php(php[aphp-zphp]php[aphp-zphp0php-php9php_php-php]php*php)php|iphp'php,php php'php[php@idphp=php\php'php$php1php\php'php]php'php,php php$expressionphp)php;
php php php php php php php php php$expressionphp php=php pregphp_replacephp(php'php|php(php?<php!php[aphp-zphp0php-php9php_php-php]php)php(php\php[php@idphp=php)php|iphp'php,php php'php*php$php1php'php,php php$expressionphp)php;

php php php php php php php php php/php/php arbitraryphp attributephp strictphp equality
php php php php php php php php php$expressionphp php=php pregphp_replacephp_callbackphp(
php php php php php php php php php php php php php'php|php\php[php(php[aphp-zphp0php-php9php_php-php]php+php)php=php[php\php'php"php]php(php[php^php\php'php"php]php+php)php[php\php'php"php]php\php]php|iphp'php,
php php php php php php php php php php php php arrayphp(php_php_CLASSphp_php_php,php php'php_createEqualityExpressionphp'php)php,
php php php php php php php php php php php php php$expression
php php php php php php php php php)php;

php php php php php php php php php/php/php arbitraryphp attributephp containsphp fullphp word
php php php php php php php php php$expressionphp php=php pregphp_replacephp_callbackphp(
php php php php php php php php php php php php php'php|php\php[php(php[aphp-zphp0php-php9php_php-php]php+php)php~php=php[php\php'php"php]php(php[php^php\php'php"php]php+php)php[php\php'php"php]php\php]php|iphp'php,
php php php php php php php php php php php php arrayphp(php_php_CLASSphp_php_php,php php'php_normalizeSpaceAttributephp'php)php,
php php php php php php php php php php php php php$expression
php php php php php php php php php)php;

php php php php php php php php php/php/php arbitraryphp attributephp containsphp specifiedphp content
php php php php php php php php php$expressionphp php=php pregphp_replacephp_callbackphp(
php php php php php php php php php php php php php'php|php\php[php(php[aphp-zphp0php-php9php_php-php]php+php)php\php*php=php[php\php'php"php]php(php[php^php\php'php"php]php+php)php[php\php'php"php]php\php]php|iphp'php,
php php php php php php php php php php php php arrayphp(php_php_CLASSphp_php_php,php php'php_createContainsExpressionphp'php)php,
php php php php php php php php php php php php php$expression
php php php php php php php php php)php;

php php php php php php php php php/php/php Classes
php php php php php php php php php$expressionphp php=php pregphp_replacephp(
php php php php php php php php php php php php php'php|php\php.php(php[aphp-zphp]php[aphp-zphp0php-php9php_php-php]php*php)php|iphp'php,
php php php php php php php php php php php php php"php[containsphp(concatphp(php'php php'php,php normalizephp-spacephp(php@classphp)php,php php'php php'php)php,php php'php php\php$php1php php'php)php]php"php,
php php php php php php php php php php php php php$expression
php php php php php php php php php)php;

php php php php php php php php php/php*php*php ZFphp-php9php7php6php4php php-php-php removephp doublephp asterixphp php*php/
php php php php php php php php php$expressionphp php=php strphp_replacephp(php'php*php*php'php,php php'php*php'php,php php$expressionphp)php;

php php php php php php php php returnphp php$expressionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callbackphp forphp creatingphp equalityphp expressions
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$matches
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_createEqualityExpressionphp(php$matchesphp)
php php php php php{
php php php php php php php php returnphp php'php[php@php'php php.php strtolowerphp(php$matchesphp[php1php]php)php php.php php"php=php'php"php php.php php$matchesphp[php2php]php php.php php"php'php]php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callbackphp forphp creatingphp expressionsphp tophp matchphp onephp orphp morephp attributephp values
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$matches
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_normalizeSpaceAttributephp(php$matchesphp)
php php php php php{
php php php php php php php php returnphp php"php[containsphp(concatphp(php'php php'php,php normalizephp-spacephp(php@php"php php.php strtolowerphp(php$matchesphp[php1php]php)php php.php php"php)php,php php'php php'php)php,php php'php php"
php php php php php php php php php php php php php php.php php$matchesphp[php2php]php php.php php"php php'php)php]php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callbackphp forphp creatingphp aphp strictphp php"containsphp"php expression
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$matches
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_createContainsExpressionphp(php$matchesphp)
php php php php php{
php php php php php php php php returnphp php"php[containsphp(php@php"php php.php strtolowerphp(php$matchesphp[php1php]php)php php.php php"php,php php'php"
php php php php php php php php php php php php php php.php php$matchesphp[php2php]php php.php php"php'php)php]php"php;
php php php php php}
php}
