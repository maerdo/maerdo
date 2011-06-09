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
php php*php php@versionphp php php php php$Idphp:php Jsonphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Zendphp_Jsonphp_Exprphp.
php php*
php php*php php@seephp Zendphp_Jsonphp_Expr
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp/Exprphp.phpphp'php;


php/php*php*
php php*php Classphp forphp encodingphp tophp andphp decodingphp fromphp JSONphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@usesphp php php php php php php Zendphp_Jsonphp_Expr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Json
php{
php php php php php/php*php*
php php php php php php*php Howphp objectsphp shouldphp bephp encodedphp php-php-php arraysphp orphp asphp StdClassphp.php TYPEphp_ARRAYphp isphp php1
php php php php php php*php sophp thatphp itphp isphp aphp booleanphp truephp valuephp,php allowingphp itphp tophp bephp usedphp with
php php php php php php*php extphp/jsonphp'sphp functionsphp.
php php php php php php*php/
php php php php constphp TYPEphp_ARRAYphp php php=php php1php;
php php php php constphp TYPEphp_OBJECTphp php=php php0php;

php php php php php php/php*php*
php php php php php php php*php Tophp checkphp thephp allowedphp nestingphp depthphp ofphp thephp XMLphp treephp duringphp xmlphp2jsonphp conversionphp.
php php php php php php php*
php php php php php php php*php php@varphp int
php php php php php php php*php/
php php php php publicphp staticphp php$maxRecursionDepthAllowedphp=php2php5php;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php publicphp staticphp php$useBuiltinEncoderDecoderphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Decodesphp thephp givenphp php$encodedValuephp stringphp whichphp is
php php php php php php*php encodedphp inphp thephp JSONphp format
php php php php php php*
php php php php php php*php Usesphp extphp/jsonphp'sphp jsonphp_decodephp ifphp availablephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encodedValuephp Encodedphp inphp JSONphp format
php php php php php php*php php@paramphp intphp php$objectDecodeTypephp Optionalphp;php flagphp indicatingphp howphp tophp decode
php php php php php php*php objectsphp.php Seephp php{php@linkphp Zendphp_Jsonphp_Decoderphp:php:decodephp(php)php}php forphp detailsphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$encodedValuephp,php php$objectDecodeTypephp php=php Zendphp_Jsonphp:php:TYPEphp_ARRAYphp)
php php php php php{
php php php php php php php php php$encodedValuephp php=php php(stringphp)php php$encodedValuephp;
php php php php php php php php ifphp php(functionphp_existsphp(php'jsonphp_decodephp'php)php php&php&php selfphp:php:php$useBuiltinEncoderDecoderphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php$decodephp php=php jsonphp_decodephp(php$encodedValuephp,php php$objectDecodeTypephp)php;

php php php php php php php php php php php php php/php/php phpphp <php php5php.php3
php php php php php php php php php php php php ifphp php(php!functionphp_existsphp(php'jsonphp_lastphp_errorphp'php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$decodephp php=php=php=php php$encodedValuephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Decodingphp failedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php phpphp php>php=php php5php.php3
php php php php php php php php php php php php php}php elseifphp php(php(php$jsonLastErrphp php=php jsonphp_lastphp_errorphp(php)php)php php!php=php JSONphp_ERRORphp_NONEphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php switchphp php(php$jsonLastErrphp)php php{
php php php php php php php php php php php php php php php php php php php php casephp JSONphp_ERRORphp_DEPTHphp:
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Decodingphp failedphp:php Maximumphp stackphp depthphp exceededphp'php)php;
php php php php php php php php php php php php php php php php php php php php casephp JSONphp_ERRORphp_CTRLphp_CHARphp:
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Decodingphp failedphp:php Unexpectedphp controlphp characterphp foundphp'php)php;
php php php php php php php php php php php php php php php php php php php php casephp JSONphp_ERRORphp_SYNTAXphp:
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Decodingphp failedphp:php Syntaxphp errorphp'php)php;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Decodingphp failedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$decodephp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Decoderphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp_Decoderphp:php:decodephp(php$encodedValuephp,php php$objectDecodeTypephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp thephp mixedphp php$valueToEncodephp intophp thephp JSONphp format
php php php php php php*
php php php php php php*php Encodesphp usingphp extphp/jsonphp'sphp jsonphp_encodephp(php)php ifphp availablephp.
php php php php php php*
php php php php php php*php NOTEphp:php Objectphp shouldphp notphp containphp cyclesphp;php thephp JSONphp format
php php php php php php*php doesphp notphp allowphp objectphp referencephp.
php php php php php php*
php php php php php php*php NOTEphp:php Onlyphp publicphp variablesphp willphp bephp encoded
php php php php php php*
php php php php php php*php NOTEphp:php Encodingphp nativephp javascriptphp expressionsphp arephp possiblephp usingphp Zendphp_Jsonphp_Exprphp.
php php php php php php*php php php php php php php Youphp canphp enablephp thisphp byphp settingphp php$optionsphp[php'enableJsonExprFinderphp'php]php php=php true
php php php php php php*
php php php php php php*php php@seephp Zendphp_Jsonphp_Expr
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$valueToEncode
php php php php php php*php php@paramphp php booleanphp php$cycleCheckphp Optionalphp;php whetherphp orphp notphp tophp checkphp forphp objectphp recursionphp;php offphp byphp default
php php php php php php*php php@paramphp php arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp stringphp JSONphp encodedphp object
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$valueToEncodephp,php php$cycleCheckphp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$valueToEncodephp)php php&php&php methodphp_existsphp(php$valueToEncodephp,php php'toJsonphp'php)php)php php{
php php php php php php php php php php php php returnphp php$valueToEncodephp-php>toJsonphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Prephp-encodingphp lookphp forphp Zendphp_Jsonphp_Exprphp objectsphp andphp replacingphp byphp tmpphp ids
php php php php php php php php php$javascriptExpressionsphp php=php arrayphp(php)php;
php php php php php php php php ifphp(issetphp(php$optionsphp[php'enableJsonExprFinderphp'php]php)
php php php php php php php php php php php php&php&php php(php$optionsphp[php'enableJsonExprFinderphp'php]php php=php=php truephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Jsonphp_Encoder
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Jsonphp/Encoderphp.phpphp"php;
php php php php php php php php php php php php php$valueToEncodephp php=php selfphp:php:php_recursiveJsonExprFinderphp(php$valueToEncodephp,php php$javascriptExpressionsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Encoding
php php php php php php php php ifphp php(functionphp_existsphp(php'jsonphp_encodephp'php)php php&php&php selfphp:php:php$useBuiltinEncoderDecoderphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php$encodedResultphp php=php jsonphp_encodephp(php$valueToEncodephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Encoderphp.phpphp'php;
php php php php php php php php php php php php php$encodedResultphp php=php Zendphp_Jsonphp_Encoderphp:php:encodephp(php$valueToEncodephp,php php$cycleCheckphp,php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/onlyphp dophp postphp-proccessingphp tophp revertphp backphp thephp Zendphp_Jsonphp_Exprphp ifphp anyphp.
php php php php php php php php ifphp php(countphp(php$javascriptExpressionsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$countphp php=php countphp(php$javascriptExpressionsphp)php;
php php php php php php php php php php php php forphp(php$iphp php=php php0php;php php$iphp <php php$countphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$magicKeyphp php=php php$javascriptExpressionsphp[php$iphp]php[php'magicKeyphp'php]php;
php php php php php php php php php php php php php php php php php$valuephp php php php php=php php$javascriptExpressionsphp[php$iphp]php[php'valuephp'php]php;

php php php php php php php php php php php php php php php php php$encodedResultphp php=php strphp_replacephp(
php php php php php php php php php php php php php php php php php php php php php/php/insteadphp ofphp replacingphp php"keyphp:magicKeyphp"php,php wephp replacephp directlyphp magicKeyphp byphp valuephp becausephp php"keyphp"php neverphp changesphp.
php php php php php php php php php php php php php php php php php php php php php'php"php'php php.php php$magicKeyphp php.php php'php"php'php,
php php php php php php php php php php php php php php php php php php php php php$valuephp,
php php php php php php php php php php php php php php php php php php php php php$encodedResult
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php returnphp php$encodedResultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp php&php Replacephp Zendphp_Jsonphp_Exprphp forphp tmpphp idsphp inphp thephp valueToEncode
php php php php php php*
php php php php php php*php Checkphp ifphp thephp valuephp isphp aphp Zendphp_Jsonphp_Exprphp,php andphp ifphp replacephp itsphp value
php php php php php php*php withphp aphp magicphp keyphp andphp savephp thephp javascriptphp expressionphp inphp anphp arrayphp.
php php php php php php*
php php php php php php*php NOTEphp thisphp methodphp isphp recursivephp.
php php php php php php*
php php php php php php*php NOTEphp:php Thisphp methodphp isphp usedphp internallyphp byphp thephp encodephp methodphp.
php php php php php php*
php php php php php php*php php@seephp encode
php php php php php php*php php@paramphp mixedphp php$valueToCheckphp aphp stringphp php-php objectphp propertyphp tophp bephp encoded
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_recursiveJsonExprFinderphp(
php php php php php php php php php&php$valuephp,php arrayphp php&php$javascriptExpressionsphp,php php$currentKeyphp php=php null
php php php php php)php php{
php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Jsonphp_Exprphp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php Optimizephp withphp asciiphp keysphp,php ifphp performancephp isphp bad
php php php php php php php php php php php php php$magicKeyphp php=php php"php_php_php_php_php"php php.php php$currentKeyphp php.php php"php_php"php php.php php(countphp(php$javascriptExpressionsphp)php)php;
php php php php php php php php php php php php php$javascriptExpressionsphp[php]php php=php arrayphp(

php php php php php php php php php php php php php php php php php/php/ifphp currentKeyphp isphp integerphp,php encodeUnicodeStringphp callphp isphp notphp requiredphp.
php php php php php php php php php php php php php php php php php"magicKeyphp"php php=php>php php(isphp_intphp(php$currentKeyphp)php)php php?php php$magicKeyphp php:php Zendphp_Jsonphp_Encoderphp:php:encodeUnicodeStringphp(php$magicKeyphp)php,
php php php php php php php php php php php php php php php php php"valuephp"php php php php php=php>php php$valuephp-php>php_php_toStringphp(php)php,
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$valuephp php=php php$magicKeyphp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$valuephp[php$kphp]php php=php selfphp:php:php_recursiveJsonExprFinderphp(php$valuephp[php$kphp]php,php php$javascriptExpressionsphp,php php$kphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_objectphp(php$valuephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$valuephp-php>php$kphp php=php selfphp:php:php_recursiveJsonExprFinderphp(php$valuephp-php>php$kphp,php php$javascriptExpressionsphp,php php$kphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php fromXmlphp php-php Convertsphp XMLphp tophp JSON
php php php php php php*
php php php php php php*php Convertsphp aphp XMLphp formattedphp stringphp intophp aphp JSONphp formattedphp stringphp.
php php php php php php*php Thephp valuephp returnedphp willphp bephp aphp stringphp inphp JSONphp formatphp.
php php php php php php*
php php php php php php*php Thephp callerphp ofphp thisphp functionphp needsphp tophp providephp onlyphp thephp firstphp parameterphp,
php php php php php php*php whichphp isphp anphp XMLphp formattedphp Stringphp.php Thephp secondphp parameterphp isphp optionalphp,php which
php php php php php php*php letsphp thephp userphp tophp selectphp ifphp thephp XMLphp attributesphp inphp thephp inputphp XMLphp string
php php php php php php*php shouldphp bephp includedphp orphp ignoredphp inphp xmlphp2jsonphp conversionphp.
php php php php php php*
php php php php php php*php Thisphp functionphp convertsphp thephp XMLphp formattedphp stringphp intophp aphp PHPphp arrayphp by
php php php php php php*php callingphp aphp recursivephp php(protectedphp staticphp)php functionphp inphp thisphp classphp.php Thenphp,php it
php php php php php php*php convertsphp thatphp PHPphp arrayphp intophp JSONphp byphp callingphp thephp php"encodephp"php staticphp funcionphp.
php php php php php php*
php php php php php php*php Throwsphp aphp Zendphp_Jsonphp_Exceptionphp ifphp thephp inputphp notphp aphp XMLphp formattedphp stringphp.
php php php php php php*php NOTEphp:php Encodingphp nativephp javascriptphp expressionsphp viaphp Zendphp_Jsonphp_Exprphp isphp notphp possiblephp.
php php php php php php*
php php php php php php*php php@static
php php php php php php*php php@accessphp public
php php php php php php*php php@paramphp stringphp php$xmlStringContentsphp XMLphp Stringphp tophp bephp converted
php php php php php php*php php@paramphp booleanphp php$ignoreXmlAttributesphp Includephp orphp excludephp XMLphp attributesphp in
php php php php php php*php thephp xmlphp2jsonphp conversionphp processphp.
php php php php php php*php php@returnphp mixedphp php-php JSONphp formattedphp stringphp onphp success
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromXmlphp php(php$xmlStringContentsphp,php php$ignoreXmlAttributesphp=truephp)php php{
php php php php php php php php php/php/php Loadphp thephp XMLphp formattedphp stringphp intophp aphp Simplephp XMLphp Elementphp objectphp.
php php php php php php php php php$simpleXmlElementObjectphp php=php simplexmlphp_loadphp_stringphp(php$xmlStringContentsphp)php;

php php php php php php php php php/php/php Ifphp itphp isphp notphp aphp validphp XMLphp contentphp,php throwphp anphp exceptionphp.
php php php php php php php php ifphp php(php$simpleXmlElementObjectphp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php'Functionphp fromXmlphp wasphp calledphp withphp anphp invalidphp XMLphp formattedphp stringphp.php'php)php;
php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(php$simpleXmlElementObjectphp php=php=php nullphp)

php php php php php php php php php$resultArrayphp php=php nullphp;

php php php php php php php php php/php/php Callphp thephp recursivephp functionphp tophp convertphp thephp XMLphp intophp aphp PHPphp arrayphp.
php php php php php php php php php$resultArrayphp php=php selfphp:php:php_processXmlphp(php$simpleXmlElementObjectphp,php php$ignoreXmlAttributesphp)php;

php php php php php php php php php/php/php Convertphp thephp PHPphp arrayphp tophp JSONphp usingphp Zendphp_Jsonphp encodephp methodphp.
php php php php php php php php php/php/php Itphp isphp justphp thatphp simplephp.
php php php php php php php php php$jsonStringOutputphp php=php selfphp:php:encodephp(php$resultArrayphp)php;
php php php php php php php php returnphp(php$jsonStringOutputphp)php;
php php php php php}php php/php/php Endphp ofphp functionphp fromXmlphp.

php php php php php/php*php*
php php php php php php*php php_processXmlphp php-php Containsphp thephp logicphp forphp xmlphp2json
php php php php php php*
php php php php php php*php Thephp logicphp inphp thisphp functionphp isphp aphp recursivephp onephp.
php php php php php php*
php php php php php php*php Thephp mainphp callerphp ofphp thisphp functionphp php(iphp.ephp.php fromXmlphp)php needsphp tophp provide
php php php php php php*php onlyphp thephp firstphp twophp parametersphp iphp.ephp.php thephp SimpleXMLElementphp objectphp and
php php php php php php*php thephp flagphp forphp ignoringphp orphp notphp ignoringphp XMLphp attributesphp.php Thephp thirdphp parameter
php php php php php php*php willphp bephp usedphp internallyphp withinphp thisphp functionphp duringphp thephp recursivephp callsphp.
php php php php php php*
php php php php php php*php Thisphp functionphp convertsphp thephp SimpleXMLElementphp objectphp intophp aphp PHPphp arrayphp by
php php php php php php*php callingphp aphp recursivephp php(protectedphp staticphp)php functionphp inphp thisphp classphp.php Oncephp all
php php php php php php*php thephp XMLphp elementsphp arephp storedphp inphp thephp PHPphp arrayphp,php itphp isphp returnedphp tophp thephp callerphp.
php php php php php php*
php php php php php php*php Throwsphp aphp Zendphp_Jsonphp_Exceptionphp ifphp thephp XMLphp treephp isphp deeperphp thanphp thephp allowedphp limitphp.
php php php php php php*
php php php php php php*php php@static
php php php php php php*php php@accessphp protected
php php php php php php*php php@paramphp SimpleXMLElementphp php$simpleXmlElementObjectphp XMLphp elementphp tophp bephp converted
php php php php php php*php php@paramphp booleanphp php$ignoreXmlAttributesphp Includephp orphp excludephp XMLphp attributesphp in
php php php php php php*php thephp xmlphp2jsonphp conversionphp processphp.
php php php php php php*php php@paramphp intphp php$recursionDepthphp Currentphp recursionphp depthphp ofphp thisphp function
php php php php php php*php php@returnphp mixedphp php-php Onphp successphp,php aphp PHPphp associativephp arrayphp ofphp traversedphp XMLphp elements
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_processXmlphp php(php$simpleXmlElementObjectphp,php php$ignoreXmlAttributesphp,php php$recursionDepthphp=php0php)php php{
php php php php php php php php php/php/php Keepphp anphp eyephp onphp howphp deeplyphp wephp arephp involvedphp inphp recursionphp.
php php php php php php php php ifphp php(php$recursionDepthphp php>php selfphp:php:php$maxRecursionDepthAllowedphp)php php{
php php php php php php php php php php php php php/php/php XMLphp treephp isphp toophp deepphp.php Exitphp nowphp byphp throwingphp anphp exceptionphp.
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Functionphp php_processXmlphp exceededphp thephp allowedphp recursionphp depthphp ofphp php"php php.
php php php php php php php php php php php php php php php php selfphp:php:php$maxRecursionDepthAllowedphp)php;
php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(php$recursionDepthphp php>php selfphp:php:php$maxRecursionDepthAllowedphp)

php php php php php php php php ifphp php(php$recursionDepthphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Storephp thephp originalphp SimpleXmlElementObjectphp sentphp byphp thephp callerphp.
php php php php php php php php php php php php php/php/php Wephp willphp needphp itphp atphp thephp veryphp endphp whenphp wephp returnphp fromphp herephp forphp goodphp.
php php php php php php php php php php php php php$callerProvidedSimpleXmlElementObjectphp php=php php$simpleXmlElementObjectphp;
php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(php$recursionDepthphp php=php=php php0php)

php php php php php php php php ifphp php(php$simpleXmlElementObjectphp instanceofphp SimpleXMLElementphp)php php{
php php php php php php php php php php php php php/php/php Getphp aphp copyphp ofphp thephp simpleXmlElementObject
php php php php php php php php php php php php php$copyOfSimpleXmlElementObjectphp php=php php$simpleXmlElementObjectphp;
php php php php php php php php php php php php php/php/php Getphp thephp objectphp variablesphp inphp thephp SimpleXmlElementphp objectphp forphp usphp tophp iteratephp.
php php php php php php php php php php php php php$simpleXmlElementObjectphp php=php getphp_objectphp_varsphp(php$simpleXmlElementObjectphp)php;
php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(getphp_classphp(php$simpleXmlElementObjectphp)php php=php=php php"SimpleXMLElementphp"php)

php php php php php php php php php/php/php Itphp needsphp tophp bephp anphp arrayphp ofphp objectphp variablesphp.
php php php php php php php php ifphp php(isphp_arrayphp(php$simpleXmlElementObjectphp)php)php php{
php php php php php php php php php php php php php/php/php Initializephp aphp resultphp arrayphp.
php php php php php php php php php php php php php$resultArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php php/php/php Isphp thephp inputphp arrayphp sizephp php0php?php Thenphp,php wephp reachedphp thephp rarephp CDATAphp textphp ifphp anyphp.
php php php php php php php php php php php php ifphp php(countphp(php$simpleXmlElementObjectphp)php <php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Letphp usphp returnphp thephp lonelyphp CDATAphp.php Itphp couldphp evenphp be
php php php php php php php php php php php php php php php php php/php/php anphp emptyphp elementphp orphp justphp filledphp withphp whitespacesphp.
php php php php php php php php php php php php php php php php returnphp php(trimphp(strvalphp(php$copyOfSimpleXmlElementObjectphp)php)php)php;
php php php php php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(countphp(php$simpleXmlElementObjectphp)php <php=php php0php)

php php php php php php php php php php php php php/php/php Letphp usphp walkphp throughphp thephp childphp elementsphp nowphp.
php php php php php php php php php php php php foreachphp(php$simpleXmlElementObjectphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp wephp needphp tophp ignorephp thephp XMLphp attributesphp.
php php php php php php php php php php php php php php php php php/php/php Ifphp yesphp,php youphp canphp skipphp processingphp thephp XMLphp attributesphp.
php php php php php php php php php php php php php php php php php/php/php Otherwisephp,php addphp thephp XMLphp attributesphp tophp thephp resultphp arrayphp.
php php php php php php php php php php php php php php php php ifphp(php(php$ignoreXmlAttributesphp php=php=php truephp)php php&php&php php(isphp_stringphp(php$keyphp)php)php php&php&php php(php$keyphp php=php=php php"php@attributesphp"php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}php php/php/php Endphp ofphp ifphp(php(php$ignoreXmlAttributesphp php=php=php truephp)php php&php&php php(php$keyphp php=php=php php"php@attributesphp"php)php)

php php php php php php php php php php php php php php php php php/php/php Letphp usphp recursivelyphp processphp thephp currentphp XMLphp elementphp wephp justphp visitedphp.
php php php php php php php php php php php php php php php php php/php/php Increasephp thephp recursionphp depthphp byphp onephp.
php php php php php php php php php php php php php php php php php$recursionDepthphp+php+php;
php php php php php php php php php php php php php php php php php$resultArrayphp[php$keyphp]php php=php selfphp:php:php_processXmlphp php(php$valuephp,php php$ignoreXmlAttributesphp,php php$recursionDepthphp)php;

php php php php php php php php php php php php php php php php php/php/php Decreasephp thephp recursionphp depthphp byphp onephp.
php php php php php php php php php php php php php php php php php$recursionDepthphp-php-php;
php php php php php php php php php php php php php}php php/php/php Endphp ofphp foreachphp(php$simpleXmlElementObjectphp asphp php$keyphp=php>php$valuephp)php php{

php php php php php php php php php php php php ifphp php(php$recursionDepthphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Thatphp isphp itphp.php Wephp arephp headingphp tophp thephp exitphp nowphp.
php php php php php php php php php php php php php php php php php/php/php Setphp thephp XMLphp rootphp elementphp namephp asphp thephp rootphp php[topphp-levelphp]php keyphp of
php php php php php php php php php php php php php php php php php/php/php thephp associativephp arrayphp thatphp wephp arephp goingphp tophp returnphp tophp thephp original
php php php php php php php php php php php php php php php php php/php/php callerphp ofphp thisphp recursivephp functionphp.
php php php php php php php php php php php php php php php php php$tempArrayphp php=php php$resultArrayphp;
php php php php php php php php php php php php php php php php php$resultArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$resultArrayphp[php$callerProvidedSimpleXmlElementObjectphp-php>getNamephp(php)php]php php=php php$tempArrayphp;
php php php php php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(php$recursionDepthphp php=php=php php0php)

php php php php php php php php php php php php returnphp(php$resultArrayphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Wephp arephp nowphp lookingphp atphp eitherphp thephp XMLphp attributephp textphp or
php php php php php php php php php php php php php/php/php thephp textphp betweenphp thephp XMLphp tagsphp.

php php php php php php php php php php php php php/php/php Inphp orderphp tophp allowphp Zendphp_Jsonphp_Exprphp fromphp xmlphp,php wephp checkphp ifphp thephp node
php php php php php php php php php php php php php/php/php matchsphp thephp patternphp thatphp tryphp tophp detectphp ifphp itphp isphp aphp newphp Zendphp_Jsonphp_Expr
php php php php php php php php php php php php php/php/php ifphp itphp matchesphp,php wephp returnphp aphp newphp Zendphp_Jsonphp_Exprphp insteadphp ofphp aphp textphp node
php php php php php php php php php php php php php$patternphp php=php php'php/php^php[php\sphp]php*newphp Zendphp_Jsonphp_Exprphp[php\sphp]php*php\php(php[php\sphp]php*php[php\php"php\php'php]php{php1php}php(php.php*php)php[php\php"php\php'php]php{php1php}php[php\sphp]php*php\php)php[php\sphp]php*php$php/php'php;
php php php php php php php php php php php php php$matchingsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$matchphp php=php pregphp_matchphp php(php$patternphp,php php$simpleXmlElementObjectphp,php php$matchingsphp)php;
php php php php php php php php php php php php ifphp php(php$matchphp)php php{
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Jsonphp_Exprphp(php$matchingsphp[php1php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php(trimphp(strvalphp(php$simpleXmlElementObjectphp)php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php php/php/php Endphp ofphp ifphp php(isphp_arrayphp(php$simpleXmlElementObjectphp)php)
php php php php php}php php/php/php Endphp ofphp functionphp php_processXmlphp.

php php php php php/php*php*
php php php php php php*php Prettyphp-printphp JSONphp string
php php php php php php*
php php php php php php*php Usephp php'indentphp'php optionphp tophp selectphp indentationphp stringphp php-php byphp defaultphp itphp'sphp aphp tab
php php php php php php*
php php php php php php*php php@paramphp stringphp php$jsonphp Originalphp JSONphp string
php php php php php php*php php@paramphp arrayphp php$optionsphp Encodingphp options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp prettyPrintphp(php$jsonphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$tokensphp php=php pregphp_splitphp(php'php|php(php[php\php{php\php}php\php]php\php[php,php]php)php|php'php,php php$jsonphp,php php-php1php,php PREGphp_SPLITphp_DELIMphp_CAPTUREphp)php;
php php php php php php php php php$resultphp php=php php"php"php;
php php php php php php php php php$indentphp php=php php0php;

php php php php php php php php php$indphp php=php php"php\tphp"php;
php php php php php php php php ifphp(issetphp(php$optionsphp[php'indentphp'php]php)php)php php{
php php php php php php php php php php php php php$indphp php=php php$optionsphp[php'indentphp'php]php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php ifphp(php$tokenphp php=php=php php"php"php)php continuephp;

php php php php php php php php php php php php php$prefixphp php=php strphp_repeatphp(php$indphp,php php$indentphp)php;
php php php php php php php php php php php php ifphp(php$tokenphp php=php=php php"php{php"php php|php|php php$tokenphp php=php=php php"php[php"php)php php{
php php php php php php php php php php php php php php php php php$indentphp+php+php;
php php php php php php php php php php php php php php php php ifphp(php$resultphp php!php=php php"php"php php&php&php php$resultphp[strlenphp(php$resultphp)php-php1php]php php=php=php php"php\nphp"php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php$prefixphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php$tokenphp\nphp"php;
php php php php php php php php php php php php php}php elsephp ifphp(php$tokenphp php=php=php php"php}php"php php|php|php php$tokenphp php=php=php php"php]php"php)php php{
php php php php php php php php php php php php php php php php php$indentphp-php-php;
php php php php php php php php php php php php php php php php php$prefixphp php=php strphp_repeatphp(php$indphp,php php$indentphp)php;
php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php\nphp$prefixphp$tokenphp"php;
php php php php php php php php php php php php php}php elsephp ifphp(php$tokenphp php=php=php php"php,php"php)php php{
php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php$tokenphp\nphp"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resultphp php.php=php php$prefixphp.php$tokenphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php}
php}
