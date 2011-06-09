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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;


php/php*php*
php php*php Abstractphp forphp sendingphp eMailsphp throughphp different
php php*php waysphp ofphp transport
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Transport
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Mailphp_Transportphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Mailphp body
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$bodyphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php MIMEphp boundary
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$boundaryphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Mailphp headerphp string
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$headerphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp messagephp headers
php php php php php php*php php@varphp array
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Messagephp isphp aphp multipartphp message
php php php php php php*php php@varphp boolean
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp php$php_isMultipartphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Zendphp_Mailphp object
php php php php php php*php php@varphp falsephp|Zendphp_Mail
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp php$php_mailphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp messagephp parts
php php php php php php*php php@varphp array
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp php$php_partsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Recipientsphp string
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$recipientsphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php EOLphp characterphp stringphp usedphp byphp transport
php php php php php php*php php@varphp string
php php php php php php*php php@accessphp public
php php php php php php*php/
php php php php publicphp php$EOLphp php=php php"php\rphp\nphp"php;

php php php php php/php*php*
php php php php php php*php Sendphp anphp emailphp independentphp fromphp thephp usedphp transport
php php php php php php*
php php php php php php*php Thephp requisitephp informationphp forphp thephp emailphp willphp bephp foundphp inphp thephp following
php php php php php php*php propertiesphp:
php php php php php php*
php php php php php php*php php-php php{php@linkphp php$recipientsphp}php php-php listphp ofphp recipientsphp php(stringphp)
php php php php php php*php php-php php{php@linkphp php$headerphp}php php-php messagephp header
php php php php php php*php php-php php{php@linkphp php$bodyphp}php php-php messagephp body
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_sendMailphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp allphp mailphp headersphp asphp anphp array
php php php php php php*
php php php php php php*php Ifphp aphp boundaryphp isphp givenphp,php aphp multipartphp headerphp isphp generatedphp withphp a
php php php php php php*php Contentphp-Typephp ofphp eitherphp multipartphp/alternativephp orphp multipartphp/mixedphp depending
php php php php php php*php onphp thephp mailphp partsphp presentphp inphp thephp php{php@linkphp php$php_mailphp Zendphp_Mailphp objectphp}php presentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$boundary
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getHeadersphp(php$boundaryphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$boundaryphp)php php{
php php php php php php php php php php php php php/php/php Buildphp multipartphp mail
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_mailphp-php>getTypephp(php)php;
php php php php php php php php php php php php ifphp php(php!php$typephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_mailphp-php>hasAttachmentsphp)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php Zendphp_Mimephp:php:MULTIPARTphp_MIXEDphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>php_mailphp-php>getBodyTextphp(php)php php&php&php php$thisphp-php>php_mailphp-php>getBodyHtmlphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php Zendphp_Mimephp:php:MULTIPARTphp_ALTERNATIVEphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php Zendphp_Mimephp:php:MULTIPARTphp_MIXEDphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_headersphp[php'Contentphp-Typephp'php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php$typephp php.php php'php;php'
php php php php php php php php php php php php php php php php php.php php$thisphp-php>EOL
php php php php php php php php php php php php php php php php php.php php"php php"php php.php php'boundaryphp=php"php'php php.php php$boundaryphp php.php php'php"php'
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>boundaryphp php=php php$boundaryphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_headersphp[php'MIMEphp-Versionphp'php]php php=php arrayphp(php'php1php.php0php'php)php;

php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Prependphp headerphp namephp tophp headerphp value
php php php php php php*
php php php php php php*php php@paramphp stringphp php$item
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@static
php php php php php php*php php@accessphp protected
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_formatHeaderphp(php&php$itemphp,php php$keyphp,php php$prefixphp)
php php php php php{
php php php php php php php php php$itemphp php=php php$prefixphp php.php php'php:php php'php php.php php$itemphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp headerphp stringphp forphp usephp inphp transport
php php php php php php*
php php php php php php*php Preparesphp andphp generatesphp php{php@linkphp php$headerphp}php basedphp onphp thephp headersphp providedphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$headers
php php php php php php*php php@accessphp protected
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp ifphp anyphp headerphp linesphp exceedphp php9php9php8
php php php php php php*php characters
php php php php php php*php/
php php php php protectedphp functionphp php_prepareHeadersphp(php$headersphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_mailphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Missingphp Zendphp_Mailphp objectphp inphp php_mailphp propertyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>headerphp php=php php'php'php;

php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp php=php>php php$contentphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$contentphp[php'appendphp'php]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$contentphp[php'appendphp'php]php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php implodephp(php'php,php'php php.php php$thisphp-php>EOLphp php.php php'php php'php,php php$contentphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>headerphp php.php=php php$headerphp php.php php'php:php php'php php.php php$valuephp php.php php$thisphp-php>EOLphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php arrayphp_walkphp(php$contentphp,php arrayphp(getphp_classphp(php$thisphp)php,php php'php_formatHeaderphp'php)php,php php$headerphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>headerphp php.php=php implodephp(php$thisphp-php>EOLphp,php php$contentphp)php php.php php$thisphp-php>EOLphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Sanityphp checkphp onphp headersphp php-php-php shouldphp notphp bephp php>php php9php9php8php characters
php php php php php php php php php$sanephp php=php truephp;
php php php php php php php php foreachphp php(explodephp(php$thisphp-php>EOLphp,php php$thisphp-php>headerphp)php asphp php$linephp)php php{
php php php php php php php php php php php php ifphp php(strlenphp(trimphp(php$linephp)php)php php>php php9php9php8php)php php{
php php php php php php php php php php php php php php php php php$sanephp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$sanephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Atphp leastphp onephp mailphp headerphp linephp isphp toophp longphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp MIMEphp compliantphp messagephp fromphp thephp currentphp configuration
php php php php php php*
php php php php php php*php Ifphp bothphp aphp textphp andphp HTMLphp bodyphp arephp presentphp,php generatesphp a
php php php php php php*php multipartphp/alternativephp Zendphp_Mimephp_Partphp containingphp thephp headersphp andphp contents
php php php php php php*php ofphp eachphp.php Otherwisephp,php usesphp whicheverphp ofphp thephp textphp orphp HTMLphp partsphp presentphp.
php php php php php php*
php php php php php php*php Thephp contentphp partphp isphp thenphp prependedphp tophp thephp listphp ofphp Zendphp_Mimephp_Partsphp for
php php php php php php*php thisphp messagephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_buildBodyphp(php)
php php php php php{
php php php php php php php php ifphp php(php(php$textphp php=php php$thisphp-php>php_mailphp-php>getBodyTextphp(php)php)
php php php php php php php php php php php php php&php&php php(php$htmlphp php=php php$thisphp-php>php_mailphp-php>getBodyHtmlphp(php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php php/php/php Generatephp uniquephp boundaryphp forphp multipartphp/alternative
php php php php php php php php php php php php php$mimephp php=php newphp Zendphp_Mimephp(nullphp)php;
php php php php php php php php php php php php php$boundaryLinephp php=php php$mimephp-php>boundaryLinephp(php$thisphp-php>EOLphp)php;
php php php php php php php php php php php php php$boundaryEndphp php php=php php$mimephp-php>mimeEndphp(php$thisphp-php>EOLphp)php;

php php php php php php php php php php php php php$textphp-php>dispositionphp php=php falsephp;
php php php php php php php php php php php php php$htmlphp-php>dispositionphp php=php falsephp;

php php php php php php php php php php php php php$bodyphp php=php php$boundaryLine
php php php php php php php php php php php php php php php php php php php.php php$textphp-php>getHeadersphp(php$thisphp-php>EOLphp)
php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>EOL
php php php php php php php php php php php php php php php php php php php.php php$textphp-php>getContentphp(php$thisphp-php>EOLphp)
php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>EOL
php php php php php php php php php php php php php php php php php php php.php php$boundaryLine
php php php php php php php php php php php php php php php php php php php.php php$htmlphp-php>getHeadersphp(php$thisphp-php>EOLphp)
php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>EOL
php php php php php php php php php php php php php php php php php php php.php php$htmlphp-php>getContentphp(php$thisphp-php>EOLphp)
php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>EOL
php php php php php php php php php php php php php php php php php php php.php php$boundaryEndphp;

php php php php php php php php php php php php php$mpphp php php php php php php php php php php php=php newphp Zendphp_Mimephp_Partphp(php$bodyphp)php;
php php php php php php php php php php php php php$mpphp-php>typephp php php php php php=php Zendphp_Mimephp:php:MULTIPARTphp_ALTERNATIVEphp;
php php php php php php php php php php php php php$mpphp-php>boundaryphp php=php php$mimephp-php>boundaryphp(php)php;

php php php php php php php php php php php php php$thisphp-php>php_isMultipartphp php=php truephp;

php php php php php php php php php php php php php/php/php Ensurephp firstphp partphp containsphp textphp alternatives
php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_partsphp,php php$mpphp)php;

php php php php php php php php php php php php php/php/php Getphp headers
php php php php php php php php php php php php php$thisphp-php>php_headersphp php=php php$thisphp-php>php_mailphp-php>getHeadersphp(php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp notphp multipartphp,php thenphp getphp thephp body
php php php php php php php php ifphp php(falsephp php!php=php=php php(php$bodyphp php=php php$thisphp-php>php_mailphp-php>getBodyHtmlphp(php)php)php)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_partsphp,php php$bodyphp)php;
php php php php php php php php php}php elseifphp php(falsephp php!php=php=php php(php$bodyphp php=php php$thisphp-php>php_mailphp-php>getBodyTextphp(php)php)php)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_partsphp,php php$bodyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$bodyphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Nophp bodyphp specifiedphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Getphp headers
php php php php php php php php php$thisphp-php>php_headersphp php=php php$thisphp-php>php_mailphp-php>getHeadersphp(php)php;
php php php php php php php php php$headersphp php=php php$bodyphp-php>getHeadersArrayphp(php$thisphp-php>EOLphp)php;
php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php php/php/php Headersphp inphp Zendphp_Mimephp_Partphp arephp keptphp asphp arraysphp withphp twophp elementsphp,php a
php php php php php php php php php php php php php/php/php keyphp andphp aphp value
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php$headerphp[php0php]php]php php=php arrayphp(php$headerphp[php1php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp aphp mailphp usingphp thisphp transport
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Mailphp php$mail
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Mailphp_Transportphp_Exceptionphp ifphp mailphp isphp empty
php php php php php php*php/
php php php php publicphp functionphp sendphp(Zendphp_Mailphp php$mailphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_isMultipartphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_mailphp php php php php php php php php=php php$mailphp;
php php php php php php php php php$thisphp-php>php_partsphp php php php php php php php=php php$mailphp-php>getPartsphp(php)php;
php php php php php php php php php$mimephp php php php php php php php php php php php php php php php=php php$mailphp-php>getMimephp(php)php;

php php php php php php php php php/php/php Buildphp bodyphp content
php php php php php php php php php$thisphp-php>php_buildBodyphp(php)php;

php php php php php php php php php/php/php Determinephp numberphp ofphp partsphp andphp boundary
php php php php php php php php php$countphp php php php php=php countphp(php$thisphp-php>php_partsphp)php;
php php php php php php php php php$boundaryphp php=php nullphp;
php php php php php php php php ifphp php(php$countphp <php php1php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Transportphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Transportphp_Exceptionphp(php'Emptyphp mailphp cannotphp bephp sentphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$countphp php>php php1php)php php{
php php php php php php php php php php php php php/php/php Multipartphp messagephp;php createphp newphp MIMEphp objectphp andphp boundary
php php php php php php php php php php php php php$mimephp php php php php php=php newphp Zendphp_Mimephp(php$thisphp-php>php_mailphp-php>getMimeBoundaryphp(php)php)php;
php php php php php php php php php php php php php$boundaryphp php=php php$mimephp-php>boundaryphp(php)php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_isMultipartphp)php php{
php php php php php php php php php php php php php/php/php multipartphp/alternativephp php-php-php grabphp boundary
php php php php php php php php php php php php php$boundaryphp php=php php$thisphp-php>php_partsphp[php0php]php-php>boundaryphp;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp recipientsphp,php andphp preparephp headers
php php php php php php php php php$thisphp-php>recipientsphp php=php implodephp(php'php,php'php,php php$mailphp-php>getRecipientsphp(php)php)php;
php php php php php php php php php$thisphp-php>php_prepareHeadersphp(php$thisphp-php>php_getHeadersphp(php$boundaryphp)php)php;

php php php php php php php php php/php/php Createphp messagephp body
php php php php php php php php php/php/php Thisphp isphp donephp sophp thatphp thephp samephp Zendphp_Mailphp objectphp canphp bephp usedphp in
php php php php php php php php php/php/php multiplephp transports
php php php php php php php php php$messagephp php=php newphp Zendphp_Mimephp_Messagephp(php)php;
php php php php php php php php php$messagephp-php>setPartsphp(php$thisphp-php>php_partsphp)php;
php php php php php php php php php$messagephp-php>setMimephp(php$mimephp)php;
php php php php php php php php php$thisphp-php>bodyphp php=php php$messagephp-php>generateMessagephp(php$thisphp-php>EOLphp)php;

php php php php php php php php php/php/php Sendphp tophp transportphp!
php php php php php php php php php$thisphp-php>php_sendMailphp(php)php;
php php php php php}
php}
