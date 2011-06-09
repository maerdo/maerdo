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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Decoderphp.phpphp php2php2php6php5php3php php2php0php1php0php-php0php7php-php2php2php php1php8php:php4php1php:php3php9Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Json
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php Decodephp JSONphp encodedphp stringphp tophp PHPphp variablephp constructs
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Decoder
php{
php php php php php/php*php*
php php php php php php*php Parsephp tokensphp usedphp tophp decodephp thephp JSONphp objectphp.php Thesephp arephp not
php php php php php php*php forphp publicphp consumptionphp,php theyphp arephp justphp usedphp internallyphp tophp the
php php php php php php*php classphp.
php php php php php php*php/
php php php php constphp EOFphp php php php php php php php php php=php php0php;
php php php php constphp DATUMphp php php php php php php php php=php php1php;
php php php php constphp LBRACEphp php php php php=php php2php;
php php php php constphp LBRACKETphp php php php php=php php3php;
php php php php constphp RBRACEphp php php php php php=php php4php;
php php php php constphp RBRACKETphp php php php php=php php5php;
php php php php constphp COMMAphp php php php php php php php=php php6php;
php php php php constphp COLONphp php php php php php php php php=php php7php;

php php php php php/php*php*
php php php php php php*php Usephp tophp maintainphp aphp php"pointerphp"php tophp thephp sourcephp beingphp decoded
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sourcephp;

php php php php php/php*php*
php php php php php php*php Cachesphp thephp sourcephp length
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_sourceLengthphp;

php php php php php/php*php*
php php php php php php*php Thephp offsetphp withinphp thephp soucephp beingphp decoded
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*
php php php php php php*php/
php php php php protectedphp php$php_offsetphp;

php php php php php/php*php*
php php php php php php*php Thephp currentphp tokenphp beingphp consideredphp inphp thephp parserphp cycle
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_tokenphp;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp howphp objectsphp shouldphp bephp decoded
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp php$php_decodeTypephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sourcephp Stringphp sourcephp tophp decode
php php php php php php*php php@paramphp intphp php$decodeTypephp Howphp objectsphp shouldphp bephp decodedphp php-php-php see
php php php php php php*php php{php@linkphp Zendphp_Jsonphp:php:TYPEphp_ARRAYphp}php andphp php{php@linkphp Zendphp_Jsonphp:php:TYPEphp_OBJECTphp}php for
php php php php php php*php validphp values
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php$sourcephp,php php$decodeTypephp)
php php php php php{
php php php php php php php php php/php/php Setphp defaults
php php php php php php php php php$thisphp-php>php_sourcephp php php php php php php php=php selfphp:php:decodeUnicodeStringphp(php$sourcephp)php;
php php php php php php php php php$thisphp-php>php_sourceLengthphp php=php strlenphp(php$thisphp-php>php_sourcephp)php;
php php php php php php php php php$thisphp-php>php_tokenphp php php php php php php php php=php selfphp:php:EOFphp;
php php php php php php php php php$thisphp-php>php_offsetphp php php php php php php php=php php0php;

php php php php php php php php php/php/php Normalizephp andphp setphp php$decodeType
php php php php php php php php ifphp php(php!inphp_arrayphp(php$decodeTypephp,php arrayphp(Zendphp_Jsonphp:php:TYPEphp_ARRAYphp,php Zendphp_Jsonphp:php:TYPEphp_OBJECTphp)php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$decodeTypephp php=php Zendphp_Jsonphp:php:TYPEphp_ARRAYphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_decodeTypephp php php php=php php$decodeTypephp;

php php php php php php php php php/php/php Setphp pointerphp atphp firstphp token
php php php php php php php php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp aphp JSONphp sourcephp string
php php php php php php*
php php php php php php*php Decodesphp aphp JSONphp encodedphp stringphp.php Thephp valuephp returnedphp willphp bephp onephp ofphp the
php php php php php php*php followingphp:
php php php php php php*php php php php php php php php php-php integer
php php php php php php*php php php php php php php php php-php float
php php php php php php*php php php php php php php php php-php boolean
php php php php php php*php php php php php php php php php-php null
php php php php php php*php php php php php php php-php StdClass
php php php php php php*php php php php php php php-php array
php php php php php php*php php php php php php php php php php-php arrayphp ofphp onephp orphp morephp ofphp thephp abovephp types
php php php php php php*
php php php php php php*php Byphp defaultphp,php decodedphp objectsphp willphp bephp returnedphp asphp associativephp arraysphp;php to
php php php php php php*php returnphp aphp StdClassphp objectphp insteadphp,php passphp php{php@linkphp Zendphp_Jsonphp:php:TYPEphp_OBJECTphp}php to
php php php php php php*php thephp php$objectDecodeTypephp parameterphp.
php php php php php php*
php php php php php php*php Throwsphp aphp Zendphp_Jsonphp_Exceptionphp ifphp thephp sourcephp stringphp isphp nullphp.
php php php php php php*
php php php php php php*php php@static
php php php php php php*php php@accessphp public
php php php php php php*php php@paramphp stringphp php$sourcephp Stringphp tophp bephp decoded
php php php php php php*php php@paramphp intphp php$objectDecodeTypephp Howphp objectsphp shouldphp bephp decodedphp;php shouldphp be
php php php php php php*php eitherphp orphp php{php@linkphp Zendphp_Jsonphp:php:TYPEphp_ARRAYphp}php or
php php php php php php*php php{php@linkphp Zendphp_Jsonphp:php:TYPEphp_OBJECTphp}php;php defaultsphp tophp TYPEphp_ARRAY
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$sourcephp php=php nullphp,php php$objectDecodeTypephp php=php Zendphp_Jsonphp:php:TYPEphp_ARRAYphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$sourcephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Mustphp specifyphp JSONphp encodedphp sourcephp forphp decodingphp'php)php;
php php php php php php php php php}php elseifphp php(php!isphp_stringphp(php$sourcephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Canphp onlyphp decodephp JSONphp encodedphp stringsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$decoderphp php=php newphp selfphp(php$sourcephp,php php$objectDecodeTypephp)php;

php php php php php php php php returnphp php$decoderphp-php>php_decodeValuephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Recursivephp drivingphp rountinephp forphp supportedphp toplevelphp tops
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_decodeValuephp(php)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_tokenphp)php php{
php php php php php php php php php php php php casephp selfphp:php:DATUMphp:
php php php php php php php php php php php php php php php php php$resultphp php php=php php$thisphp-php>php_tokenValuephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php php php php php php php php php returnphp(php$resultphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:LBRACEphp:
php php php php php php php php php php php php php php php php returnphp(php$thisphp-php>php_decodeObjectphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:LBRACKETphp:
php php php php php php php php php php php php php php php php returnphp(php$thisphp-php>php_decodeArrayphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp anphp objectphp ofphp thephp formphp:
php php php php php php*php php php{php php"attributephp:php valuephp,php php"attributephp2php"php php:php valuephp,php.php.php.php}
php php php php php php*
php php php php php php*php Ifphp Zendphp_Jsonphp_Encoderphp wasphp usedphp tophp encodephp thephp originalphp objectphp then
php php php php php php*php aphp specialphp attributephp calledphp php_php_classNamephp whichphp specifiesphp aphp class
php php php php php php*php namephp thatphp shouldphp wrapphp thephp dataphp containedphp withinphp thephp encodedphp sourcephp.
php php php php php php*
php php php php php php*php Decodesphp tophp eitherphp anphp arrayphp orphp StdClassphp objectphp,php basedphp onphp thephp valuephp of
php php php php php php*php php{php@linkphp php$php_decodeTypephp}php.php Ifphp invalidphp php$php_decodeTypephp presentphp,php returnsphp asphp an
php php php php php php*php arrayphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp|StdClass
php php php php php php*php/
php php php php protectedphp functionphp php_decodeObjectphp(php)
php php php php php{
php php php php php php php php php$membersphp php=php arrayphp(php)php;
php php php php php php php php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;

php php php php php php php php whilephp php(php$tokphp php&php&php php$tokphp php!php=php selfphp:php:RBRACEphp)php php{
php php php php php php php php php php php php ifphp php(php$tokphp php!php=php selfphp:php:DATUMphp php|php|php php!php isphp_stringphp(php$thisphp-php>php_tokenValuephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Missingphp keyphp inphp objectphp encodingphp:php php'php php.php php$thisphp-php>php_sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$keyphp php=php php$thisphp-php>php_tokenValuephp;
php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;

php php php php php php php php php php php php ifphp php(php$tokphp php!php=php selfphp:php:COLONphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Missingphp php"php:php"php inphp objectphp encodingphp:php php'php php.php php$thisphp-php>php_sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php php php php php php$membersphp[php$keyphp]php php=php php$thisphp-php>php_decodeValuephp(php)php;
php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_tokenphp;

php php php php php php php php php php php php ifphp php(php$tokphp php=php=php selfphp:php:RBRACEphp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$tokphp php!php=php selfphp:php:COMMAphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Missingphp php"php,php"php inphp objectphp encodingphp:php php'php php.php php$thisphp-php>php_sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$thisphp-php>php_decodeTypephp)php php{
php php php php php php php php php php php php casephp Zendphp_Jsonphp:php:TYPEphp_OBJECTphp:
php php php php php php php php php php php php php php php php php/php/php Createphp newphp StdClassphp andphp populatephp withphp php$members
php php php php php php php php php php php php php php php php php$resultphp php=php newphp StdClassphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$membersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Jsonphp:php:TYPEphp_ARRAYphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$resultphp php=php php$membersphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp aphp JSONphp arrayphp formatphp:
php php php php php php*php php php php php[elementphp,php elementphp2php,php.php.php.php,elementNphp]
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_decodeArrayphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php$starttokphp php=php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;php php/php/php Movephp pastphp thephp php'php[php'
php php php php php php php php php$indexphp php php=php php0php;

php php php php php php php php whilephp php(php$tokphp php&php&php php$tokphp php!php=php selfphp:php:RBRACKETphp)php php{
php php php php php php php php php php php php php$resultphp[php$indexphp+php+php]php php=php php$thisphp-php>php_decodeValuephp(php)php;

php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_tokenphp;

php php php php php php php php php php php php ifphp php(php$tokphp php=php=php selfphp:php:RBRACKETphp php|php|php php!php$tokphp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$tokphp php!php=php selfphp:php:COMMAphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Missingphp php"php,php"php inphp arrayphp encodingphp:php php'php php.php php$thisphp-php>php_sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tokphp php=php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_getNextTokenphp(php)php;
php php php php php php php php returnphp(php$resultphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Removesphp whitepsacephp charactersphp fromphp thephp sourcephp input
php php php php php php*php/
php php php php protectedphp functionphp php_eatWhitespacephp(php)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php(php[php\tphp\bphp\fphp\nphp\rphp php]php)php*php/sphp'php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_sourcephp,
php php php php php php php php php php php php php php php php php$matchesphp,
php php php php php php php php php php php php php php php php PREGphp_OFFSETphp_CAPTUREphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_offsetphp)
php php php php php php php php php php php php php&php&php php$matchesphp[php0php]php[php1php]php php=php=php php$thisphp-php>php_offsetphp)
php php php php php php php php php{
php php php php php php php php php php php php php$thisphp-php>php_offsetphp php+php=php strlenphp(php$matchesphp[php0php]php[php0php]php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Retrievesphp thephp nextphp tokenphp fromphp thephp sourcephp stream
php php php php php php*
php php php php php php*php php@returnphp intphp Tokenphp constantphp valuephp specifiedphp inphp classphp definition
php php php php php php*php/
php php php php protectedphp functionphp php_getNextTokenphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_tokenphp php php php php php php=php selfphp:php:EOFphp;
php php php php php php php php php$thisphp-php>php_tokenValuephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_eatWhitespacephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_offsetphp php>php=php php$thisphp-php>php_sourceLengthphp)php php{
php php php php php php php php php php php php returnphp(selfphp:php:EOFphp)php;
php php php php php php php php php}

php php php php php php php php php$strphp php php php php php php php php=php php$thisphp-php>php_sourcephp;
php php php php php php php php php$strphp_lengthphp php=php php$thisphp-php>php_sourceLengthphp;
php php php php php php php php php$iphp php php php php php php php php php php=php php$thisphp-php>php_offsetphp;
php php php php php php php php php$startphp php php php php php php=php php$iphp;

php php php php php php php php switchphp php(php$strphp{php$iphp}php)php php{
php php php php php php php php php php php php casephp php'php{php'php:
php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:LBRACEphp;
php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php}php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:RBRACEphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php[php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:LBRACKETphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php]php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:RBRACKETphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php,php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:COMMAphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php:php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:COLONphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php php'php"php'php:
php php php php php php php php php php php php php php php php php$resultphp php=php php'php'php;
php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$iphp php>php=php php$strphp_lengthphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$chrphp php=php php$strphp{php$iphp}php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$chrphp php=php=php php'php\php\php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$iphp php>php=php php$strphp_lengthphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$chrphp php=php php$strphp{php$iphp}php;
php php php php php php php php php php php php php php php php php php php php php php php php switchphp php(php$chrphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'php"php'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php"php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'php\php\php'php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php\php\php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'php/php'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php/php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'bphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\xphp0php8php"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'fphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\xphp0cphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'nphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\xphp0aphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'rphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\xphp0dphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'tphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\xphp0php9php"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php casephp php'php\php'php'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php\php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php"Illegalphp escapephp php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php"sequencephp php'php"php php.php php$chrphp php.php php"php'php"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elseifphp(php$chrphp php=php=php php'php"php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php$chrphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php whilephp php(php$iphp <php php$strphp_lengthphp)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:DATUMphp;
php php php php php php php php php php php php php php php php php/php/php$thisphp-php>php_tokenValuephp php=php substrphp(php$strphp,php php$startphp php+php php1php,php php$iphp php-php php$startphp php-php php1php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenValuephp php=php php$resultphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'tphp'php:
php php php php php php php php php php php php php php php php ifphp php(php(php$iphp+php php3php)php <php php$strphp_lengthphp php&php&php substrphp(php$strphp,php php$startphp,php php4php)php php=php=php php"truephp"php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:DATUMphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenValuephp php=php truephp;
php php php php php php php php php php php php php php php php php$iphp php+php=php php3php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'fphp'php:
php php php php php php php php php php php php php php php php ifphp php(php(php$iphp+php php4php)php <php php$strphp_lengthphp php&php&php substrphp(php$strphp,php php$startphp,php php5php)php php=php=php php"falsephp"php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:DATUMphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenValuephp php=php falsephp;
php php php php php php php php php php php php php php php php php$iphp php+php=php php4php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'nphp'php:
php php php php php php php php php php php php php php php php ifphp php(php(php$iphp+php php3php)php <php php$strphp_lengthphp php&php&php substrphp(php$strphp,php php$startphp,php php4php)php php=php=php php"nullphp"php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:DATUMphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenValuephp php=php NULLphp;
php php php php php php php php php php php php php php php php php$iphp php+php=php php3php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_tokenphp php!php=php selfphp:php:EOFphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_offsetphp php=php php$iphp php+php php1php;php php/php/php Consumephp thephp lastphp tokenphp character
php php php php php php php php php php php php returnphp(php$thisphp-php>php_tokenphp)php;
php php php php php php php php php}

php php php php php php php php php$chrphp php=php php$strphp{php$iphp}php;
php php php php php php php php ifphp php(php$chrphp php=php=php php'php-php'php php|php|php php$chrphp php=php=php php'php.php'php php|php|php php(php$chrphp php>php=php php'php0php'php php&php&php php$chrphp <php=php php'php9php'php)php)php php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php-php?php(php[php0php-php9php]php)php*php(php\php.php[php0php-php9php]php*php)php?php(php(ephp|Ephp)php(php(php-php|php\php+php)php?php)php[php0php-php9php]php+php)php?php/sphp'php,
php php php php php php php php php php php php php php php php php$strphp,php php$matchesphp,php PREGphp_OFFSETphp_CAPTUREphp,php php$startphp)php php&php&php php$matchesphp[php0php]php[php1php]php php=php=php php$startphp)php php{

php php php php php php php php php php php php php php php php php$datumphp php=php php$matchesphp[php0php]php[php0php]php;

php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datumphp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php0php\dphp+php$php/php'php,php php$datumphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php"Octalphp notationphp notphp supportedphp byphp JSONphp php(valuephp:php php$datumphp)php"php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valphp php php=php intvalphp(php$datumphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$fValphp php=php floatvalphp(php$datumphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenValuephp php=php php(php$valphp php=php=php php$fValphp php?php php$valphp php:php php$fValphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php"Illegalphp numberphp formatphp:php php$datumphp"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php selfphp:php:DATUMphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_offsetphp php=php php$startphp php+php strlenphp(php$datumphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Illegalphp Tokenphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp(php$thisphp-php>php_tokenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp Unicodephp Charactersphp fromphp php\uphp0php0php0php0php ASCIIphp syntaxphp.
php php php php php php*
php php php php php php*php Thisphp algorithmphp wasphp originallyphp developedphp forphp the
php php php php php php*php Solarphp Frameworkphp byphp Paulphp Mphp.php Jones
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/solarphpphp.comphp/
php php php php php php*php php@linkphp php php httpphp:php/php/svnphp.solarphpphp.comphp/corephp/trunkphp/Solarphp/Jsonphp.php
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp decodeUnicodeStringphp(php$chrsphp)
php php php php php{
php php php php php php php php php$delimphp php php php php php php php=php substrphp(php$chrsphp,php php0php,php php1php)php;
php php php php php php php php php$utfphp8php php php php php php php php php=php php'php'php;
php php php php php php php php php$strlenphp_chrsphp php=php strlenphp(php$chrsphp)php;

php php php php php php php php forphp(php$iphp php=php php0php;php php$iphp <php php$strlenphp_chrsphp;php php$iphp+php+php)php php{

php php php php php php php php php php php php php$substrphp_chrsphp_cphp_php2php php=php substrphp(php$chrsphp,php php$iphp,php php2php)php;
php php php php php php php php php php php php php$ordphp_chrsphp_cphp php=php ordphp(php$chrsphp[php$iphp]php)php;

php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php casephp pregphp_matchphp(php'php/php\php\php\uphp[php0php-php9Aphp-Fphp]php{php4php}php/iphp'php,php substrphp(php$chrsphp,php php$iphp,php php6php)php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php singlephp,php escapedphp unicodephp character
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php chrphp(hexdecphp(substrphp(php$chrsphp,php php(php$iphp php+php php2php)php,php php2php)php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php chrphp(hexdecphp(substrphp(php$chrsphp,php php(php$iphp php+php php4php)php,php php2php)php)php)php;
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php selfphp:php:php_utfphp1php6php2utfphp8php(php$utfphp1php6php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php5php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php>php=php php0xphp2php0php)php php&php&php php(php$ordphp_chrsphp_cphp <php=php php0xphp7Fphp)php:
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php php$chrsphp{php$iphp}php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php&php php0xEphp0php)php php=php=php php0xCphp0php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php0php0php0php8php0php php-php Uphp-php0php0php0php0php0php7FFphp,php maskphp php1php1php0XXXXX
php php php php php php php php php php php php php php php php php php php php php/php/seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php substrphp(php$chrsphp,php php$iphp,php php2php)php;
php php php php php php php php php php php php php php php php php php php php php+php+php$iphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php&php php0xFphp0php)php php=php=php php0xEphp0php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php0php0php8php0php0php php-php Uphp-php0php0php0php0FFFFphp,php maskphp php1php1php1php0XXXX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php substrphp(php$chrsphp,php php$iphp,php php3php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php2php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php&php php0xFphp8php)php php=php=php php0xFphp0php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php1php0php0php0php0php php-php Uphp-php0php0php1FFFFFphp,php maskphp php1php1php1php1php0XXX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php substrphp(php$chrsphp,php php$iphp,php php4php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php3php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php&php php0xFCphp)php php=php=php php0xFphp8php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php2php0php0php0php0php0php php-php Uphp-php0php3FFFFFFphp,php maskphp php1php1php1php1php1php0XX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php substrphp(php$chrsphp,php php$iphp,php php5php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php4php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(php$ordphp_chrsphp_cphp php&php php0xFEphp)php php=php=php php0xFCphp:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php4php0php0php0php0php0php0php php-php Uphp-php7FFFFFFFphp,php maskphp php1php1php1php1php1php1php0X
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$utfphp8php php.php=php substrphp(php$chrsphp,php php$iphp,php php6php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php5php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$utfphp8php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp aphp stringphp fromphp onephp UTFphp-php1php6php charphp tophp onephp UTFphp-php8php charphp.
php php php php php php*
php php php php php php*php Normallyphp shouldphp bephp handledphp byphp mbphp_convertphp_encodingphp,php but
php php php php php php*php providesphp aphp slowerphp PHPphp-onlyphp methodphp forphp installations
php php php php php php*php thatphp lackphp thephp multibyephp stringphp extensionphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp fromphp thephp Solarphp Frameworkphp byphp Paulphp Mphp.php Jones
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/solarphpphp.com
php php php php php php*php php@paramphp php stringphp php$utfphp1php6php UTFphp-php1php6php character
php php php php php php*php php@returnphp stringphp UTFphp-php8php character
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_utfphp1php6php2utfphp8php(php$utfphp1php6php)
php php php php php{
php php php php php php php php php/php/php Checkphp forphp mbphp extensionphp otherwisephp dophp byphp handphp.
php php php php php php php php ifphp(php functionphp_existsphp(php'mbphp_convertphp_encodingphp'php)php php)php php{
php php php php php php php php php php php php returnphp mbphp_convertphp_encodingphp(php$utfphp1php6php,php php'UTFphp-php8php'php,php php'UTFphp-php1php6php'php)php;
php php php php php php php php php}

php php php php php php php php php$bytesphp php=php php(ordphp(php$utfphp1php6php{php0php}php)php <php<php php8php)php php|php ordphp(php$utfphp1php6php{php1php}php)php;

php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php casephp php(php(php0xphp7Fphp php&php php$bytesphp)php php=php=php php$bytesphp)php:
php php php php php php php php php php php php php php php php php/php/php thisphp casephp shouldphp neverphp bephp reachedphp,php becausephp wephp arephp inphp ASCIIphp range
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp chrphp(php0xphp7Fphp php&php php$bytesphp)php;

php php php php php php php php php php php php casephp php(php0xphp0php7FFphp php&php php$bytesphp)php php=php=php php$bytesphp:
php php php php php php php php php php php php php php php php php/php/php returnphp aphp php2php-bytephp UTFphp-php8php character
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp chrphp(php0xCphp0php php|php php(php(php$bytesphp php>php>php php6php)php php&php php0xphp1Fphp)php)
php php php php php php php php php php php php php php php php php php php php php php.php chrphp(php0xphp8php0php php|php php(php$bytesphp php&php php0xphp3Fphp)php)php;

php php php php php php php php php php php php casephp php(php0xFFFFphp php&php php$bytesphp)php php=php=php php$bytesphp:
php php php php php php php php php php php php php php php php php/php/php returnphp aphp php3php-bytephp UTFphp-php8php character
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp chrphp(php0xEphp0php php|php php(php(php$bytesphp php>php>php php1php2php)php php&php php0xphp0Fphp)php)
php php php php php php php php php php php php php php php php php php php php php php.php chrphp(php0xphp8php0php php|php php(php(php$bytesphp php>php>php php6php)php php&php php0xphp3Fphp)php)
php php php php php php php php php php php php php php php php php php php php php php.php chrphp(php0xphp8php0php php|php php(php$bytesphp php&php php0xphp3Fphp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ignoringphp UTFphp-php3php2php forphp nowphp,php sorry
php php php php php php php php returnphp php'php'php;
php php php php php}
php}

