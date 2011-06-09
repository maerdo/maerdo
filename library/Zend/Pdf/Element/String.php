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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Stringphp.phpphp php2php1php5php4php2php php2php0php1php0php-php0php3php-php1php8php php0php8php:php5php6php:php4php0Zphp batephp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;

php/php*php*
php php*php PDFphp filephp php'stringphp'php elementphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Stringphp extendsphp Zendphp_Pdfphp_Element
php{
php php php php php/php*php*
php php php php php php*php Objectphp value
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$valuephp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$val
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valphp)
php php php php php{
php php php php php php php php php$thisphp-php>valuephp php php php=php php(stringphp)php$valphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp typephp ofphp thephp elementphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Pdfphp_Elementphp:php:TYPEphp_STRINGphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp objectphp asphp string
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Factoryphp php$factory
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$factoryphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php'php(php'php php.php selfphp:php:escapephp(php(stringphp)php$thisphp-php>valuephp)php php.php php'php)php'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Escapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$str
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp escapephp(php$strphp)
php php php php php{
php php php php php php php php php$outEntriesphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(strphp_splitphp(php$strphp,php php1php2php8php)php asphp php$chunkphp)php php{
php php php php php php php php php php php php php/php/php Collectphp sequencephp ofphp unescapedphp characters
php php php php php php php php php php php php php$offsetphp php=php strcspnphp(php$chunkphp,php php"php\nphp\rphp\tphp\xphp0php8php\xphp0Cphp(php)php\php\php"php)php;
php php php php php php php php php php php php php$chunkOutphp php=php substrphp(php$chunkphp,php php0php,php php$offsetphp)php;

php php php php php php php php php php php php whilephp php(php$offsetphp <php strlenphp(php$chunkphp)php)php php{
php php php php php php php php php php php php php php php php php$nextCodephp php=php ordphp(php$chunkphp[php$offsetphp+php+php]php)php;
php php php php php php php php php php php php php php php php switchphp php(php$nextCodephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php"php\nphp"php php-php linephp feedphp php(LFphp)
php php php php php php php php php php php php php php php php php php php php casephp php1php0php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\nphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php"php\rphp"php php-php carriagephp returnphp php(CRphp)
php php php php php php php php php php php php php php php php php php php php casephp php1php3php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\rphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php"php\tphp"php php-php horizontalphp tabphp php(HTphp)
php php php php php php php php php php php php php php php php php php php php casephp php9php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\tphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php"php\bphp"php php-php backspacephp php(BSphp)
php php php php php php php php php php php php php php php php php php php php casephp php8php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\bphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php"php\fphp"php php-php formphp feedphp php(FFphp)
php php php php php php php php php php php php php php php php php php php php casephp php1php2php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\fphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php(php'php php-php leftphp paranthesis
php php php php php php php php php php php php php php php php php php php php casephp php4php0php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\php(php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php)php'php php-php rightphp paranthesis
php php php php php php php php php php php php php php php php php php php php casephp php4php1php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\php)php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php'php php-php backslash
php php php php php php php php php php php php php php php php php php php php casephp php9php2php:
php php php php php php php php php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php php'php\php\php\php\php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Thisphp codephp isphp neverphp executedphp extually
php php php php php php php php php php php php php php php php php php php php php php php php php/php/
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Donphp'tphp usephp nonphp-ASCIIphp charactersphp escaping
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ifphp php(php$nextCodephp php>php=php php3php2php php&php&php php$nextCodephp <php=php php1php2php6php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php php php php php/php/php Visiblephp ASCIIphp symbol
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php php php php php$chunkEntriesphp[php]php php=php chrphp(php$nextCodephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php php php php php$chunkEntriesphp[php]php php=php sprintfphp(php'php\php\php%php0php3ophp'php,php php$nextCodephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php}

php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Collectphp sequencephp ofphp unescapedphp characters
php php php php php php php php php php php php php php php php php$startphp php=php php$offsetphp;
php php php php php php php php php php php php php php php php php$offsetphp php+php=php strcspnphp(php$chunkphp,php php"php\nphp\rphp\tphp\xphp0php8php\xphp0Cphp(php)php\php\php"php,php php$offsetphp)php;
php php php php php php php php php php php php php php php php php$chunkOutphp php.php=php substrphp(php$chunkphp,php php$startphp,php php$offsetphp php-php php$startphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outEntriesphp[php]php php=php php$chunkOutphp;
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php"php\php\php\nphp"php,php php$outEntriesphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Unescapephp stringphp accordingphp tophp thephp PDFphp rules
php php php php php php*
php php php php php php*php php@paramphp stringphp php$str
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp unescapephp(php$strphp)
php php php php php{
php php php php php php php php php$outEntriesphp php=php arrayphp(php)php;

php php php php php php php php php$offsetphp php=php php0php;
php php php php php php php php whilephp php(php$offsetphp <php strlenphp(php$strphp)php)php php{
php php php php php php php php php php php php php/php/php Searchephp forphp thephp nextphp escapedphp characterphp/sequence
php php php php php php php php php php php php php$escapeCharOffsetphp php=php strposphp(php$strphp,php php'php\php\php'php,php php$offsetphp)php;
php php php php php php php php php php php php ifphp php(php$escapeCharOffsetphp php=php=php=php falsephp php php|php|php php php$escapeCharOffsetphp php=php=php strlenphp(php$strphp)php php-php php1php)php php{
php php php php php php php php php php php php php php php php php/php/php Therephp arephp nophp escapedphp charactersphp orphp php'php\php'php charphp hasphp camephp atphp thephp endphp ofphp string
php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php substrphp(php$strphp,php php$offsetphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Collectphp unescapedphp charactersphp sequence
php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php substrphp(php$strphp,php php$offsetphp,php php$escapeCharOffsetphp php-php php$offsetphp)php;
php php php php php php php php php php php php php php php php php/php/php Gophp tophp thephp escapedphp character
php php php php php php php php php php php php php php php php php$offsetphp php=php php$escapeCharOffsetphp php+php php1php;

php php php php php php php php php php php php php php php php switchphp php(php$strphp[php$offsetphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\nphp'php php-php linephp feedphp php(LFphp)
php php php php php php php php php php php php php php php php php php php php casephp php'nphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php"php\nphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\rphp'php php-php carriagephp returnphp php(CRphp)
php php php php php php php php php php php php php php php php php php php php casephp php'rphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php"php\rphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\tphp'php php-php horizontalphp tabphp php(HTphp)
php php php php php php php php php php php php php php php php php php php php casephp php'tphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php"php\tphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\bphp'php php-php backspacephp php(BSphp)
php php php php php php php php php php php php php php php php php php php php casephp php'bphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php"php\xphp0php8php"php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\fphp'php php-php formphp feedphp php(FFphp)
php php php php php php php php php php php php php php php php php php php php casephp php'fphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php"php\xphp0Cphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\php(php'php php-php leftphp paranthesis
php php php php php php php php php php php php php php php php php php php php casephp php'php(php'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php'php(php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\php)php'php php-php rightphp paranthesis
php php php php php php php php php php php php php php php php php php php php casephp php'php)php'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php'php)php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\php\php\php'php php-php backslash
php php php php php php php php php php php php php php php php php php php php casephp php'php\php\php'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php'php\php\php'php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php/php/php php"php\php\php\nphp"php orphp php"php\php\php\nphp\rphp"
php php php php php php php php php php php php php php php php php php php php casephp php"php\nphp"php:
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php skipphp newphp linephp symbol
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$strphp[php$offsetphp php+php php1php]php php=php=php php"php\rphp"php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$offsetphp+php+php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php'php0php1php2php3php4php5php6php7php8php9php'php,php php$strphp[php$offsetphp]php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Characterphp inphp octalphp representation
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php'php\php\xxxphp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$nextCodephp php=php php'php0php'php php.php php$strphp[php$offsetphp]php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php'php0php1php2php3php4php5php6php7php8php9php'php,php php$strphp[php$offsetphp php+php php1php]php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$nextCodephp php.php=php php$strphp[php+php+php$offsetphp]php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php'php0php1php2php3php4php5php6php7php8php9php'php,php php$strphp[php$offsetphp php+php php1php]php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$nextCodephp php.php=php php$strphp[php+php+php$offsetphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php chrphp(octdecphp(php$nextCodephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$outEntriesphp[php]php php=php php$strphp[php$offsetphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$offsetphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php$outEntriesphp)php;
php php php php php}

php}
