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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mailphp.phpphp php2php3php2php5php1php php2php0php1php0php-php1php0php-php2php6php php1php2php:php4php7php:php5php5Zphp matthewphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Transportphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mimephp_Message
php php*php/
requirephp_oncephp php'Zendphp/Mimephp/Messagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mimephp_Part
php php*php/
requirephp_oncephp php'Zendphp/Mimephp/Partphp.phpphp'php;


php/php*php*
php php*php Classphp forphp sendingphp anphp emailphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp extendsphp Zendphp_Mimephp_Message
php{
php php php php php/php*php*php#php@php+
php php php php php php*php php@accessphp protected
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Mailphp_Transportphp_Abstract
php php php php php php*php php@static
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultTransportphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php php@static
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultFromphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php php@static
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultReplyTophp;

php php php php php/php*php*
php php php php php php*php Mailphp characterphp set
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_charsetphp php=php php'isophp-php8php8php5php9php-php1php'php;

php php php php php/php*php*
php php php php php php*php Mailphp headers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Encodingphp ofphp Mailphp headers
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_headerEncodingphp php=php Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp;

php php php php php/php*php*
php php php php php php*php Fromphp:php address
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_fromphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Tophp:php addresses
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tophp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp allphp recipients
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_recipientsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Replyphp-Tophp header
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_replyTophp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Returnphp-Pathphp header
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_returnPathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Subjectphp:php header
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_subjectphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Datephp:php header
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_datephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Messagephp-IDphp:php header
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messageIdphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php textphp/plainphp MIMEphp part
php php php php php php*php php@varphp falsephp|Zendphp_Mimephp_Part
php php php php php php*php/
php php php php protectedphp php$php_bodyTextphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php textphp/htmlphp MIMEphp part
php php php php php php*php php@varphp falsephp|Zendphp_Mimephp_Part
php php php php php php*php/
php php php php protectedphp php$php_bodyHtmlphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php MIMEphp boundaryphp string
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_mimeBoundaryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Contentphp typephp ofphp thephp message
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Flagphp:php whetherphp orphp notphp emailphp hasphp attachments
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$hasAttachmentsphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Setsphp thephp defaultphp mailphp transportphp forphp allphp followingphp usesphp of
php php php php php php*php Zendphp_Mailphp:php:sendphp(php)php;
php php php php php php*
php php php php php php*php php@todophp Allowphp passingphp aphp stringphp tophp indicatephp thephp transportphp tophp load
php php php php php php*php php@todophp Allowphp passingphp inphp optionalphp optionsphp forphp thephp transportphp tophp load
php php php php php php*php php@paramphp php Zendphp_Mailphp_Transportphp_Abstractphp php$transport
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultTransportphp(Zendphp_Mailphp_Transportphp_Abstractphp php$transportphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultTransportphp php=php php$transportphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp defaultphp mailphp transportphp forphp allphp followingphp usesphp of
php php php php php php*php unittests
php php php php php php*
php php php php php php*php php@todophp Allowphp passingphp aphp stringphp tophp indicatephp thephp transportphp tophp load
php php php php php php*php php@todophp Allowphp passingphp inphp optionalphp optionsphp forphp thephp transportphp tophp load
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultTransportphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultTransportphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp thephp defaultphp transportphp property
php php php php php php*php/
php php php php publicphp staticphp functionphp clearDefaultTransportphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultTransportphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$charset
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$charsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$charsetphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_charsetphp php=php php$charsetphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp charsetphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCharsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_charsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp contentphp type
php php php php php php*
php php php php php php*php Shouldphp onlyphp bephp usedphp forphp manuallyphp settingphp multipartphp contentphp typesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp Contentphp type
php php php php php php*php php@returnphp Zendphp_Mailphp Implementsphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp forphp typesphp notphp supportedphp byphp Zendphp_Mime
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$allowedphp php=php arrayphp(
php php php php php php php php php php php php Zendphp_Mimephp:php:MULTIPARTphp_ALTERNATIVEphp,
php php php php php php php php php php php php Zendphp_Mimephp:php:MULTIPARTphp_MIXEDphp,
php php php php php php php php php php php php Zendphp_Mimephp:php:MULTIPARTphp_RELATEDphp,
php php php php php php php php php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$allowedphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Invalidphp contentphp typephp php"php'php php.php php$typephp php.php php'php"php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp contentphp typephp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp arbitraryphp mimephp boundaryphp forphp thephp message
php php php php php php*
php php php php php php*php Ifphp notphp setphp,php Zendphp_Mimephp willphp generatephp onephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php$boundary
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMimeBoundaryphp(php$boundaryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mimeBoundaryphp php=php php$boundaryphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp boundaryphp stringphp usedphp forphp thephp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMimeBoundaryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_mimeBoundaryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp encodingphp ofphp mailphp headers
php php php php php php*
php php php php php php*php php@deprecatedphp usephp php{php@linkphp getHeaderEncodingphp(php)php}php instead
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingOfHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getHeaderEncodingphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp encodingphp ofphp mailphp headers
php php php php php php*
php php php php php php*php Eitherphp Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp orphp Zendphp_Mimephp:php:ENCODINGphp_BASEphp6php4
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHeaderEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headerEncodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp encodingphp ofphp mailphp headers
php php php php php php*
php php php php php php*php php@deprecatedphp Usephp php{php@linkphp setHeaderEncodingphp(php)php}php insteadphp.
php php php php php php*php php@paramphp php stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Mail
php php php php php php*php/
php php php php publicphp functionphp setEncodingOfHeadersphp(php$encodingphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setHeaderEncodingphp(php$encodingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp encodingphp ofphp mailphp headers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$encodingphp Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp orphp Zendphp_Mimephp:php:ENCODINGphp_BASEphp6php4
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setHeaderEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$allowedphp php=php arrayphp(
php php php php php php php php php php php php Zendphp_Mimephp:php:ENCODINGphp_BASEphp6php4php,
php php php php php php php php php php php php Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLE
php php php php php php php php php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$encodingphp,php php$allowedphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Invalidphp encodingphp php"php'php php.php php$encodingphp php.php php'php"php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_headerEncodingphp php=php php$encodingphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp textphp bodyphp forphp thephp messagephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$txt
php php php php php php*php php@paramphp php stringphp php$charset
php php php php php php*php php@paramphp php stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php*php/
php php php php publicphp functionphp setBodyTextphp(php$txtphp,php php$charsetphp php=php nullphp,php php$encodingphp php=php Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp)
php php php php php{
php php php php php php php php ifphp php(php$charsetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$charsetphp php=php php$thisphp-php>php_charsetphp;
php php php php php php php php php}

php php php php php php php php php$mpphp php=php newphp Zendphp_Mimephp_Partphp(php$txtphp)php;
php php php php php php php php php$mpphp-php>encodingphp php=php php$encodingphp;
php php php php php php php php php$mpphp-php>typephp php=php Zendphp_Mimephp:php:TYPEphp_TEXTphp;
php php php php php php php php php$mpphp-php>dispositionphp php=php Zendphp_Mimephp:php:DISPOSITIONphp_INLINEphp;
php php php php php php php php php$mpphp-php>charsetphp php=php php$charsetphp;

php php php php php php php php php$thisphp-php>php_bodyTextphp php=php php$mpphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp textphp bodyphp Zendphp_Mimephp_Partphp orphp string
php php php php php php*
php php php php php php*php php@paramphp php boolphp textOnlyphp Whetherphp tophp returnphp justphp thephp bodyphp textphp contentphp orphp thephp MIMEphp partphp;php defaultsphp tophp falsephp,php thephp MIMEphp part
php php php php php php*php php@returnphp falsephp|Zendphp_Mimephp_Partphp|string
php php php php php php*php/
php php php php publicphp functionphp getBodyTextphp(php$textOnlyphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$textOnlyphp php&php&php php$thisphp-php>php_bodyTextphp)php php{
php php php php php php php php php php php php php$bodyphp php=php php$thisphp-php>php_bodyTextphp;
php php php php php php php php php php php php returnphp php$bodyphp-php>getContentphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_bodyTextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp HTMLphp bodyphp forphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php$html
php php php php php php*php php@paramphp php stringphp php php php php$charset
php php php php php php*php php@paramphp php stringphp php php php php$encoding
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setBodyHtmlphp(php$htmlphp,php php$charsetphp php=php nullphp,php php$encodingphp php=php Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp)
php php php php php{
php php php php php php php php ifphp php(php$charsetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$charsetphp php=php php$thisphp-php>php_charsetphp;
php php php php php php php php php}

php php php php php php php php php$mpphp php=php newphp Zendphp_Mimephp_Partphp(php$htmlphp)php;
php php php php php php php php php$mpphp-php>encodingphp php=php php$encodingphp;
php php php php php php php php php$mpphp-php>typephp php=php Zendphp_Mimephp:php:TYPEphp_HTMLphp;
php php php php php php php php php$mpphp-php>dispositionphp php=php Zendphp_Mimephp:php:DISPOSITIONphp_INLINEphp;
php php php php php php php php php$mpphp-php>charsetphp php=php php$charsetphp;

php php php php php php php php php$thisphp-php>php_bodyHtmlphp php=php php$mpphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp Zendphp_Mimephp_Partphp representingphp bodyphp HTML
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$htmlOnlyphp Whetherphp tophp returnphp thephp bodyphp HTMLphp onlyphp,php orphp thephp MIMEphp partphp;php defaultsphp tophp falsephp,php thephp MIMEphp part
php php php php php php*php php@returnphp falsephp|Zendphp_Mimephp_Partphp|string
php php php php php php*php/
php php php php publicphp functionphp getBodyHtmlphp(php$htmlOnlyphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$htmlOnlyphp php&php&php php$thisphp-php>php_bodyHtmlphp)php php{
php php php php php php php php php php php php php$bodyphp php=php php$thisphp-php>php_bodyHtmlphp;
php php php php php php php php php php php php returnphp php$bodyphp-php>getContentphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_bodyHtmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp existingphp attachmentphp tophp thephp mailphp message
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Mimephp_Partphp php$attachment
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addAttachmentphp(Zendphp_Mimephp_Partphp php$attachmentphp)
php php php php php{
php php php php php php php php php$thisphp-php>addPartphp(php$attachmentphp)php;
php php php php php php php php php$thisphp-php>hasAttachmentsphp php=php truephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp Zendphp_Mimephp_Partphp attachment
php php php php php php*
php php php php php php*php Attachmentphp isphp automaticallyphp addedphp tophp thephp mailphp objectphp afterphp creationphp.php The
php php php php php php*php attachmentphp objectphp isphp returnedphp tophp allowphp forphp furtherphp manipulationphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php$body
php php php php php php*php php@paramphp php stringphp php php php php php php php php php$mimeType
php php php php php php*php php@paramphp php stringphp php php php php php php php php php$disposition
php php php php php php*php php@paramphp php stringphp php php php php php php php php php$encoding
php php php php php php*php php@paramphp php stringphp php php php php php php php php php$filenamephp OPTIONALphp Aphp filenamephp forphp thephp attachment
php php php php php php*php php@returnphp Zendphp_Mimephp_Partphp Newlyphp createdphp Zendphp_Mimephp_Partphp objectphp php(tophp allow
php php php php php php*php advancedphp settingsphp)
php php php php php php*php/
php php php php publicphp functionphp createAttachmentphp(php$bodyphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$mimeTypephp php php php php=php Zendphp_Mimephp:php:TYPEphp_OCTETSTREAMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dispositionphp php=php Zendphp_Mimephp:php:DISPOSITIONphp_ATTACHMENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$encodingphp php php php php=php Zendphp_Mimephp:php:ENCODINGphp_BASEphp6php4php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$filenamephp php php php php=php nullphp)
php php php php php{

php php php php php php php php php$mpphp php=php newphp Zendphp_Mimephp_Partphp(php$bodyphp)php;
php php php php php php php php php$mpphp-php>encodingphp php=php php$encodingphp;
php php php php php php php php php$mpphp-php>typephp php=php php$mimeTypephp;
php php php php php php php php php$mpphp-php>dispositionphp php=php php$dispositionphp;
php php php php php php php php php$mpphp-php>filenamephp php=php php$filenamephp;

php php php php php php php php php$thisphp-php>addAttachmentphp(php$mpphp)php;

php php php php php php php php returnphp php$mpphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp countphp ofphp messagephp parts
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getPartCountphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_partsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp headerphp fields
php php php php php php*
php php php php php php*php Encodesphp headerphp contentphp accordingphp tophp RFCphp1php5php2php2php ifphp itphp containsphp nonphp-printable
php php php php php php*php charactersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeHeaderphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(Zendphp_Mimephp:php:isPrintablephp(php$valuephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getHeaderEncodingphp(php)php php=php=php=php Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php Zendphp_Mimephp:php:encodeQuotedPrintableHeaderphp(php$valuephp,php php$thisphp-php>getCharsetphp(php)php,php Zendphp_Mimephp:php:LINELENGTHphp,php Zendphp_Mimephp:php:LINEENDphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valuephp php=php Zendphp_Mimephp:php:encodeBasephp6php4Headerphp(php$valuephp,php php$thisphp-php>getCharsetphp(php)php,php Zendphp_Mimephp:php:LINELENGTHphp,php Zendphp_Mimephp:php:LINEENDphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp headerphp tophp thephp message
php php php php php php*
php php php php php php*php Addsphp aphp headerphp tophp thisphp messagephp.php Ifphp appendphp isphp truephp andphp thephp headerphp already
php php php php php php*php existsphp,php raisesphp aphp flagphp indicatingphp thatphp thephp headerphp shouldphp bephp appendedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$headerName
php php php php php php*php php@paramphp stringphp php php$value
php php php php php php*php php@paramphp boolphp php$append
php php php php php php*php/
php php php php protectedphp functionphp php_storeHeaderphp(php$headerNamephp,php php$valuephp,php php$appendphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_headersphp[php$headerNamephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php$headerNamephp]php[php]php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php$headerNamephp]php php=php arrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$appendphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php$headerNamephp]php[php'appendphp'php]php php=php truephp;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp headerphp fromphp thephp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$headerName
php php php php php php*php php@deprecatedphp usephp publicphp methodphp directly
php php php php php php*php/
php php php php protectedphp functionphp php_clearHeaderphp(php$headerNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>clearHeaderphp(php$headerNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp functionphp forphp addingphp aphp recipientphp andphp thephp correspondingphp header
php php php php php php*
php php php php php php*php php@paramphp stringphp php$headerName
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php protectedphp functionphp php_addRecipientAndHeaderphp(php$headerNamephp,php php$emailphp,php php$namephp)
php php php php php{
php php php php php php php php php$emailphp php=php php$thisphp-php>php_filterEmailphp(php$emailphp)php;
php php php php php php php php php$namephp php php=php php$thisphp-php>php_filterNamephp(php$namephp)php;
php php php php php php php php php/php/php preventphp duplicates
php php php php php php php php php$thisphp-php>php_recipientsphp[php$emailphp]php php=php php1php;
php php php php php php php php php$thisphp-php>php_storeHeaderphp(php$headerNamephp,php php$thisphp-php>php_formatAddressphp(php$emailphp,php php$namephp)php,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp Tophp-headerphp andphp recipientphp,php php$emailphp canphp bephp anphp arrayphp,php orphp aphp singlephp stringphp address
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$email
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addTophp(php$emailphp,php php$namephp=php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$emailphp)php)php php{
php php php php php php php php php php php php php$emailphp php=php arrayphp(php$namephp php=php>php php$emailphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$emailphp asphp php$nphp php=php>php php$recipientphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addRecipientAndHeaderphp(php'Tophp'php,php php$recipientphp,php isphp_intphp(php$nphp)php php?php php'php'php php:php php$nphp)php;
php php php php php php php php php php php php php$thisphp-php>php_tophp[php]php php=php php$recipientphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp Ccphp-headerphp andphp recipientphp,php php$emailphp canphp bephp anphp arrayphp,php orphp aphp singlephp stringphp address
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php$email
php php php php php php*php php@paramphp php stringphp php php php php$name
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addCcphp(php$emailphp,php php$namephp=php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$emailphp)php)php php{
php php php php php php php php php php php php php$emailphp php=php arrayphp(php$namephp php=php>php php$emailphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$emailphp asphp php$nphp php=php>php php$recipientphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addRecipientAndHeaderphp(php'Ccphp'php,php php$recipientphp,php isphp_intphp(php$nphp)php php?php php'php'php php:php php$nphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp Bccphp recipientphp,php php$emailphp canphp bephp anphp arrayphp,php orphp aphp singlephp stringphp address
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php$email
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addBccphp(php$emailphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$emailphp)php)php php{
php php php php php php php php php php php php php$emailphp php=php arrayphp(php$emailphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$emailphp asphp php$recipientphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addRecipientAndHeaderphp(php'Bccphp'php,php php$recipientphp,php php'php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp listphp ofphp recipientphp emailphp addresses
php php php php php php*
php php php php php php*php php@returnphp arrayphp php(ofphp stringsphp)
php php php php php php*php/
php php php php publicphp functionphp getRecipientsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_recipientsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp headerphp fromphp thephp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$headerName
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp inter
php php php php php php*php/
php php php php publicphp functionphp clearHeaderphp(php$headerNamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_headersphp[php$headerNamephp]php)php)php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_headersphp[php$headerNamephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp listphp ofphp recipientphp emailphp addresses
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearRecipientsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_recipientsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_tophp php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>clearHeaderphp(php'Tophp'php)php;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Ccphp'php)php;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Bccphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Fromphp-headerphp andphp senderphp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php$email
php php php php php php*php php@paramphp php stringphp php php php php$name
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp ifphp calledphp subsequentphp times
php php php php php php*php/
php php php php publicphp functionphp setFromphp(php$emailphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_fromphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Fromphp Headerphp setphp twicephp'php)php;
php php php php php php php php php}

php php php php php php php php php$emailphp php=php php$thisphp-php>php_filterEmailphp(php$emailphp)php;
php php php php php php php php php$namephp php php=php php$thisphp-php>php_filterNamephp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_fromphp php=php php$emailphp;
php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Fromphp'php,php php$thisphp-php>php_formatAddressphp(php$emailphp,php php$namephp)php,php truephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Replyphp-Tophp Header
php php php php php php*
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Mail
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp ifphp calledphp morephp thanphp onephp time
php php php php php php*php/
php php php php publicphp functionphp setReplyTophp(php$emailphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_replyTophp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Replyphp-Tophp Headerphp setphp twicephp'php)php;
php php php php php php php php php}

php php php php php php php php php$emailphp php=php php$thisphp-php>php_filterEmailphp(php$emailphp)php;
php php php php php php php php php$namephp php php=php php$thisphp-php>php_filterNamephp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_replyTophp php=php php$emailphp;
php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Replyphp-Tophp'php,php php$thisphp-php>php_formatAddressphp(php$emailphp,php php$namephp)php,php truephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp senderphp ofphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFromphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fromphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentphp Replyphp-Tophp addressphp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp stringphp|nullphp Replyphp-Tophp addressphp,php nullphp whenphp notphp set
php php php php php php*php/
php php php php publicphp functionphp getReplyTophp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_replyTophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp senderphp fromphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearFromphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_fromphp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Fromphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php php/php*php*
php php php php php php php*php Clearsphp thephp currentphp Replyphp-Tophp addressphp fromphp thephp message
php php php php php php php*
php php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php php*php/
php php php php publicphp functionphp clearReplyTophp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_replyTophp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Replyphp-Tophp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Defaultphp Fromphp-emailphp andphp namephp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php$email
php php php php php php*php php@paramphp php stringphp php php php Optionalphp php php php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultFromphp(php$emailphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultFromphp php=php arrayphp(php'emailphp'php php=php>php php$emailphp,php php'namephp'php php=php>php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp defaultphp senderphp ofphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp nullphp|arrayphp php php Nullphp ifphp nonephp wasphp setphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultFromphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultFromphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp defaultphp senderphp fromphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearDefaultFromphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultFromphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Fromphp-namephp andphp php-emailphp basedphp onphp thephp defaults
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFromToDefaultFromphp(php)php php{
php php php php php php php php php$fromphp php=php selfphp:php:getDefaultFromphp(php)php;
php php php php php php php php ifphp(php$fromphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Nophp defaultphp Fromphp Addressphp setphp tophp usephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFromphp(php$fromphp[php'emailphp'php]php,php php$fromphp[php'namephp'php]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Defaultphp ReplyTophp-addressphp andphp php-namephp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php$email
php php php php php php*php php@paramphp php stringphp php php php Optionalphp php php php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultReplyTophp(php$emailphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultReplyTophp php=php arrayphp(php'emailphp'php php=php>php php$emailphp,php php'namephp'php php=php>php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp defaultphp Replyphp-Tophp Addressphp andphp Namephp ofphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp nullphp|arrayphp php php Nullphp ifphp nonephp wasphp setphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultReplyTophp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultReplyTophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp defaultphp ReplyTophp-addressphp andphp php-namephp fromphp thephp mail
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearDefaultReplyTophp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultReplyTophp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ReplyTophp-namephp andphp php-emailphp basedphp onphp thephp defaults
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setReplyToFromDefaultphp(php)php php{
php php php php php php php php php$replyTophp php=php selfphp:php:getDefaultReplyTophp(php)php;
php php php php php php php php ifphp(php$replyTophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Nophp defaultphp Replyphp-Tophp Addressphp setphp tophp usephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setReplyTophp(php$replyTophp[php'emailphp'php]php,php php$replyTophp[php'namephp'php]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp Returnphp-Pathphp headerphp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php$email
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp ifphp setphp multiplephp times
php php php php php php*php/
php php php php publicphp functionphp setReturnPathphp(php$emailphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_returnPathphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$emailphp php=php php$thisphp-php>php_filterEmailphp(php$emailphp)php;
php php php php php php php php php php php php php$thisphp-php>php_returnPathphp php=php php$emailphp;
php php php php php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Returnphp-Pathphp'php,php php$emailphp,php falsephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Returnphp-Pathphp Headerphp setphp twicephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentphp Returnphp-Pathphp addressphp ofphp thephp message
php php php php php php*
php php php php php php*php Ifphp nophp Returnphp-Pathphp headerphp isphp setphp,php returnsphp thephp valuephp ofphp php{php@linkphp php$php_fromphp}php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getReturnPathphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_returnPathphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_returnPathphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_fromphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp currentphp Returnphp-Pathphp addressphp fromphp thephp message
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearReturnPathphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_returnPathphp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Returnphp-Pathphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp subjectphp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php php php php$subject
php php php php php php*php php@returnphp php Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setSubjectphp(php$subjectphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_subjectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$subjectphp php=php php$thisphp-php>php_filterOtherphp(php$subjectphp)php;
php php php php php php php php php php php php php$thisphp-php>php_subjectphp php=php php$thisphp-php>php_encodeHeaderphp(php$subjectphp)php;
php php php php php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Subjectphp'php,php php$thisphp-php>php_subjectphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Subjectphp setphp twicephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp encodedphp subjectphp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSubjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_subjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp encodedphp subjectphp fromphp thephp message
php php php php php php*
php php php php php php*php php@returnphp php Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearSubjectphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_subjectphp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Subjectphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp Datephp-header
php php php php php php*
php php php php php php*php php@paramphp php timestampphp|stringphp|Zendphp_Datephp php$date
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp ifphp calledphp subsequentphp timesphp orphp wrongphp datephp formatphp.
php php php php php php*php/
php php php php publicphp functionphp setDatephp(php$datephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$datephp php=php datephp(php'rphp'php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_intphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php datephp(php'rphp'php,php php$datephp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php strtotimephp(php$datephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$datephp php=php=php=php falsephp php|php|php php$datephp <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Stringphp representationsphp ofphp Datephp Headerphp mustphp bephp php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'strtotimephp(php)php-compatiblephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$datephp php=php datephp(php'rphp'php,php php$datephp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php php php php php$datephp php=php php$datephp-php>getphp(Zendphp_Datephp:php:RFCphp_php2php8php2php2php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php_php_METHODphp_php_php php.php php'php onlyphp acceptsphp UNIXphp timestampsphp,php Zendphp_Datephp objectsphp,php php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php andphp strtotimephp(php)php-compatiblephp stringsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_datephp php=php php$datephp;
php php php php php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Datephp'php,php php$datephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Datephp Headerphp setphp twicephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp formattedphp datephp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp formattedphp datephp fromphp thephp message
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearDatephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_datephp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Datephp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp Messagephp-IDphp ofphp thephp message
php php php php php php*
php php php php php php*php php@paramphp php php booleanphp|stringphp php php$id
php php php php php php*php truephp php php:Auto
php php php php php php*php falsephp php:Nophp set
php php php php php php*php nullphp php php:Nophp set
php php php php php php*php stringphp:Setsphp givenphp stringphp php(Anglephp bracketsphp isphp notphp necessaryphp)
php php php php php php*php php@returnphp php Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMessageIdphp(php$idphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp php|php|php php$idphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elseifphp php(php$idphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>createMessageIdphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_messageIdphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_filterOtherphp(php$idphp)php;
php php php php php php php php php php php php php$thisphp-php>php_messageIdphp php=php php$idphp;
php php php php php php php php php php php php php$thisphp-php>php_storeHeaderphp(php'Messagephp-Idphp'php,php php'<php'php php.php php$thisphp-php>php_messageIdphp php.php php'php>php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Messagephp-IDphp setphp twicephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Messagephp-IDphp ofphp thephp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMessageIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messageIdphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Clearsphp thephp Messagephp-IDphp fromphp thephp message
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearMessageIdphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_messageIdphp php=php nullphp;
php php php php php php php php php$thisphp-php>clearHeaderphp(php'Messagephp-Idphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp thephp Messagephp-ID
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp createMessageIdphp(php)php php{

php php php php php php php php php$timephp php=php timephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_fromphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$userphp php=php php$thisphp-php>php_fromphp;
php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REMOTEphp_ADDRphp'php]php)php)php php{
php php php php php php php php php php php php php$userphp php=php php$php_SERVERphp[php'REMOTEphp_ADDRphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$userphp php=php getmypidphp(php)php;
php php php php php php php php php}

php php php php php php php php php$randphp php=php mtphp_randphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_recipientsphp php!php=php=php arrayphp(php)php)php php{
php php php php php php php php php php php php php$recipientphp php=php arrayphp_randphp(php$thisphp-php>php_recipientsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$recipientphp php=php php'unknownphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php"SERVERphp_NAMEphp"php]php)php)php php{
php php php php php php php php php php php php php$hostNamephp php=php php$php_SERVERphp[php"SERVERphp_NAMEphp"php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hostNamephp php=php phpphp_unamephp(php'nphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp shaphp1php(php$timephp php.php php$userphp php.php php$randphp php.php php$recipientphp)php php.php php'php@php'php php.php php$hostNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp customphp headerphp tophp thephp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$name
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php$append
php php php php php php*php php@returnphp Zendphp_Mailphp php php php php php php php php php php Providesphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exceptionphp onphp attemptsphp tophp createphp standardphp headers
php php php php php php*php/
php php php php publicphp functionphp addHeaderphp(php$namephp,php php$valuephp,php php$appendphp php=php falsephp)
php php php php php{
php php php php php php php php php$prohibitphp php=php arrayphp(php'tophp'php,php php'ccphp'php,php php'bccphp'php,php php'fromphp'php,php php'subjectphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php'replyphp-tophp'php,php php'returnphp-pathphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php'datephp'php,php php'messagephp-idphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$namephp)php,php php$prohibitphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'Cannotphp setphp standardphp headerphp fromphp addHeaderphp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php$thisphp-php>php_filterOtherphp(php$valuephp)php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_encodeHeaderphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_storeHeaderphp(php$namephp,php php$valuephp,php php$appendphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp mailphp headers
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp thisphp emailphp usingphp thephp givenphp transportphp orphp aphp previously
php php php php php php*php setphp DefaultTransportphp orphp thephp internalphp mailphp functionphp ifphp no
php php php php php php*php defaultphp transportphp hadphp beenphp setphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Mailphp_Transportphp_Abstractphp php$transport
php php php php php php*php php@returnphp Zendphp_Mailphp php php php php php php php php php php php php php php php php php php php Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$transportphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$transportphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!php selfphp:php:php$php_defaultTransportphp instanceofphp Zendphp_Mailphp_Transportphp_Abstractphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Transportphp/Sendmailphp.phpphp'php;
php php php php php php php php php php php php php php php php php$transportphp php=php newphp Zendphp_Mailphp_Transportphp_Sendmailphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$transportphp php=php selfphp:php:php$php_defaultTransportphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setDatephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp(nullphp php=php=php=php php$thisphp-php>php_fromphp php&php&php nullphp php!php=php=php selfphp:php:getDefaultFromphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFromToDefaultFromphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp(nullphp php=php=php=php php$thisphp-php>php_replyTophp php&php&php nullphp php!php=php=php selfphp:php:getDefaultReplyTophp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setReplyToFromDefaultphp(php)php;
php php php php php php php php php}

php php php php php php php php php$transportphp-php>sendphp(php$thisphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp ofphp emailphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterEmailphp(php$emailphp)
php php php php php{
php php php php php php php php php$rulephp php=php arrayphp(php"php\rphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\nphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\tphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php'php"php'php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php'php,php'php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php'<php'php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php'php>php'php php php=php>php php'php'php,
php php php php php php php php php)php;

php php php php php php php php returnphp strtrphp(php$emailphp,php php$rulephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp ofphp namephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterNamephp(php$namephp)
php php php php php{
php php php php php php php php php$rulephp php=php arrayphp(php"php\rphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\nphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\tphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php'php"php'php php php=php>php php"php'php"php,
php php php php php php php php php php php php php php php php php php php php php php php'<php'php php php=php>php php'php[php'php,
php php php php php php php php php php php php php php php php php php php php php php php'php>php'php php php=php>php php'php]php'php,
php php php php php php php php php)php;

php php php php php php php php returnphp trimphp(strtrphp(php$namephp,php php$rulephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp ofphp otherphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterOtherphp(php$dataphp)
php php php php php{
php php php php php php php php php$rulephp php=php arrayphp(php"php\rphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\nphp"php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php"php\tphp"php php=php>php php'php'php,
php php php php php php php php php)php;

php php php php php php php php returnphp strtrphp(php$dataphp,php php$rulephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp ephp-mailphp address
php php php php php php*
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_formatAddressphp(php$emailphp,php php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php=php php'php'php php|php|php php$namephp php=php=php=php nullphp php|php|php php$namephp php=php=php=php php$emailphp)php php{
php php php php php php php php php php php php returnphp php$emailphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$encodedNamephp php=php php$thisphp-php>php_encodeHeaderphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(php$encodedNamephp php=php=php=php php$namephp php&php&
php php php php php php php php php php php php php php php php php php php php php(php(strposphp(php$namephp,php php'php@php'php)php php!php=php=php falsephp)php php|php|php php(strposphp(php$namephp,php php'php,php'php)php php!php=php=php falsephp)php)php)php php{
php php php php php php php php php php php php php php php php php$formatphp php=php php'php"php%sphp"php <php%sphp>php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$formatphp php=php php'php%sphp <php%sphp>php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp sprintfphp(php$formatphp,php php$encodedNamephp,php php$emailphp)php;
php php php php php php php php php}
php php php php php}

php}
