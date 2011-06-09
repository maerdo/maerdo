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
php php*php php@versionphp php php php php$Idphp:php Encoderphp.phpphp php2php2php4php5php2php php2php0php1php0php-php0php6php-php1php8php php1php8php:php1php3php:php2php3Zphp ralphphp php$
php php*php/

php/php*php*
php php*php Encodephp PHPphp constructsphp tophp JSON
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Encoder
php{
php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp checkphp forphp possiblephp cycling
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_cycleCheckphp;

php php php php php/php*php*
php php php php php php*php Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp visitedphp objectsphp;php usedphp tophp preventphp cyclingphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_visitedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$cycleCheckphp Whetherphp orphp notphp tophp checkphp forphp recursionphp whenphp encoding
php php php php php php*php php@paramphp arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php$cycleCheckphp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_cycleCheckphp php=php php$cycleCheckphp;
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Usephp thephp JSONphp encodingphp schemephp forphp thephp valuephp specified
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp valuephp tophp bephp encoded
php php php php php php*php php@paramphp booleanphp php$cycleCheckphp Whetherphp orphp notphp tophp checkphp forphp possiblephp objectphp recursionphp whenphp encoding
php php php php php php*php php@paramphp arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp stringphp php Thephp encodedphp value
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$valuephp,php php$cycleCheckphp php=php falsephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$encoderphp php=php newphp selfphp(php(php$cycleCheckphp)php php?php truephp php:php falsephp,php php$optionsphp)php;

php php php php php php php php returnphp php$encoderphp-php>php_encodeValuephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recursivephp driverphp whichphp determinesphp thephp typephp ofphp valuephp tophp bephp encoded
php php php php php php*php andphp thenphp dispatchesphp tophp thephp appropriatephp methodphp.php php$valuesphp arephp either
php php php php php php*php php php php php-php objectsphp php(returnsphp fromphp php{php@linkphp php_encodeObjectphp(php)php}php)
php php php php php php*php php php php php-php arraysphp php(returnsphp fromphp php{php@linkphp php_encodeArrayphp(php)php}php)
php php php php php php*php php php php php-php basicphp datumsphp php(ephp.gphp.php numbersphp orphp stringsphp)php php(returnsphp fromphp php{php@linkphp php_encodeDatumphp(php)php}php)
php php php php php php*
php php php php php php*php php@paramphp php$valuephp mixedphp Thephp valuephp tophp bephp encoded
php php php php php php*php php@returnphp stringphp Encodedphp value
php php php php php php*php/
php php php php protectedphp functionphp php_encodeValuephp(php&php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_encodeObjectphp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_encodeArrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_encodeDatumphp(php$valuephp)php;
php php php php php}



php php php php php/php*php*
php php php php php php*php Encodephp anphp objectphp tophp JSONphp byphp encodingphp eachphp ofphp thephp publicphp properties
php php php php php php*
php php php php php php*php Aphp specialphp propertyphp isphp addedphp tophp thephp JSONphp objectphp calledphp php'php_php_classNamephp'
php php php php php php*php thatphp containsphp thephp namephp ofphp thephp classphp ofphp php$valuephp.php Thisphp isphp usedphp tophp decode
php php php php php php*php thephp objectphp onphp thephp clientphp intophp aphp specificphp classphp.
php php php php php php*
php php php php php php*php php@paramphp php$valuephp object
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Exceptionphp Ifphp recursivephp checksphp arephp enabledphp andphp thephp objectphp hasphp beenphp serializedphp previously
php php php php php php*php/
php php php php protectedphp functionphp php_encodeObjectphp(php&php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_cycleCheckphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_wasVisitedphp(php$valuephp)php)php php{

php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'silenceCyclicalExceptionsphp'php]php)
php php php php php php php php php php php php php php php php php php php php php&php&php php$thisphp-php>php_optionsphp[php'silenceCyclicalExceptionsphp'php]php=php=php=truephp)php php{

php php php php php php php php php php php php php php php php php php php php returnphp php'php"php*php RECURSIONphp php(php'php php.php getphp_classphp(php$valuephp)php php.php php'php)php php*php"php'php;

php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Cyclesphp notphp supportedphp inphp JSONphp encodingphp,php cyclephp introducedphp byphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'classphp php"php'php php.php getphp_classphp(php$valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_visitedphp[php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php php$propsphp php=php php'php'php;

php php php php php php php php ifphp php(php$valuephp instanceofphp Iteratorphp)php php{
php php php php php php php php php php php php php$propCollectionphp php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$propCollectionphp php=php getphp_objectphp_varsphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$propCollectionphp asphp php$namephp php=php>php php$propValuephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$propValuephp)php)php php{
php php php php php php php php php php php php php php php php php$propsphp php.php=php php'php,php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_encodeStringphp(php$namephp)
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_encodeValuephp(php$propValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php'php{php"php_php_classNamephp"php:php"php'php php.php getphp_classphp(php$valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php php.php php$propsphp php.php php'php}php'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Determinephp ifphp anphp objectphp hasphp beenphp serializedphp already
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_wasVisitedphp(php&php$valuephp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$valuephp,php php$thisphp-php>php_visitedphp,php truephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php JSONphp encodephp anphp arrayphp value
php php php php php php*
php php php php php php*php Recursivelyphp encodesphp eachphp valuephp ofphp anphp arrayphp andphp returnsphp aphp JSONphp encoded
php php php php php php*php arrayphp stringphp.
php php php php php php*
php php php php php php*php Arraysphp arephp definedphp asphp integerphp-indexedphp arraysphp startingphp atphp indexphp php0php,php where
php php php php php php*php thephp lastphp indexphp isphp php(countphp(php$arrayphp)php php-php1php)php;php anyphp deviationphp fromphp thatphp is
php php php php php php*php consideredphp anphp associativephp arrayphp,php andphp willphp bephp encodedphp asphp suchphp.
php php php php php php*
php php php php php php*php php@paramphp php$arrayphp array
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeArrayphp(php&php$arrayphp)
php php php php php{
php php php php php php php php php$tmpArrayphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Checkphp forphp associativephp array
php php php php php php php php ifphp php(php!emptyphp(php$arrayphp)php php&php&php php(arrayphp_keysphp(php$arrayphp)php php!php=php=php rangephp(php0php,php countphp(php$arrayphp)php php-php php1php)php)php)php php{
php php php php php php php php php php php php php/php/php Associativephp array
php php php php php php php php php php php php php$resultphp php=php php'php{php'php;
php php php php php php php php php php php php foreachphp php(php$arrayphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php php php php php php php php php php$tmpArrayphp[php]php php=php php$thisphp-php>php_encodeStringphp(php$keyphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_encodeValuephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp php.php=php implodephp(php'php,php'php,php php$tmpArrayphp)php;
php php php php php php php php php php php php php$resultphp php.php=php php'php}php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Indexedphp array
php php php php php php php php php php php php php$resultphp php=php php'php[php'php;
php php php php php php php php php php php php php$lengthphp php=php countphp(php$arrayphp)php;
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$tmpArrayphp[php]php php=php php$thisphp-php>php_encodeValuephp(php$arrayphp[php$iphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp php.php=php implodephp(php'php,php'php,php php$tmpArrayphp)php;
php php php php php php php php php php php php php$resultphp php.php=php php'php]php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php JSONphp encodephp aphp basicphp dataphp typephp php(stringphp,php numberphp,php booleanphp,php nullphp)
php php php php php php*
php php php php php php*php Ifphp valuephp typephp isphp notphp aphp stringphp,php numberphp,php booleanphp,php orphp nullphp,php thephp string
php php php php php php*php php'nullphp'php isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php$valuephp mixed
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeDatumphp(php&php$valuephp)
php php php php php{
php php php php php php php php php$resultphp php=php php'nullphp'php;

php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php php|php|php isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php$resultphp php=php strphp_replacephp(php"php,php"php,php php"php.php"php,php php$resultphp)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_encodeStringphp(php$valuephp)php;
php php php php php php php php php}php elseifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$valuephp php?php php'truephp'php php:php php'falsephp'php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php JSONphp encodephp aphp stringphp valuephp byphp escapingphp charactersphp asphp necessary
php php php php php php*
php php php php php php*php php@paramphp php$valuephp string
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_encodeStringphp(php&php$stringphp)
php php php php php{
php php php php php php php php php/php/php Escapephp thesephp charactersphp withphp aphp backslashphp:
php php php php php php php php php/php/php php"php php\php php/php php\nphp php\rphp php\tphp php\bphp php\f
php php php php php php php php php$searchphp php php=php arrayphp(php'php\php\php'php,php php"php\nphp"php,php php"php\tphp"php,php php"php\rphp"php,php php"php\bphp"php,php php"php\fphp"php,php php'php"php'php,php php'php/php'php)php;
php php php php php php php php php$replacephp php=php arrayphp(php'php\php\php\php\php'php,php php'php\php\nphp'php,php php'php\php\tphp'php,php php'php\php\rphp'php,php php'php\php\bphp'php,php php'php\php\fphp'php,php php'php\php"php'php,php php'php\php\php/php'php)php;
php php php php php php php php php$stringphp php php=php strphp_replacephp(php$searchphp,php php$replacephp,php php$stringphp)php;

php php php php php php php php php/php/php Escapephp certainphp ASCIIphp charactersphp:
php php php php php php php php php/php/php php0xphp0php8php php=php>php php\b
php php php php php php php php php/php/php php0xphp0cphp php=php>php php\f
php php php php php php php php php$stringphp php=php strphp_replacephp(arrayphp(chrphp(php0xphp0php8php)php,php chrphp(php0xphp0Cphp)php)php,php arrayphp(php'php\bphp'php,php php'php\fphp'php)php,php php$stringphp)php;
php php php php php php php php php$stringphp php=php selfphp:php:encodeUnicodeStringphp(php$stringphp)php;

php php php php php php php php returnphp php'php"php'php php.php php$stringphp php.php php'php"php'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Encodephp thephp constantsphp associatedphp withphp thephp ReflectionClass
php php php php php php*php parameterphp.php Thephp encodingphp formatphp isphp basedphp onphp thephp classphp2php format
php php php php php php*
php php php php php php*php php@paramphp php$clsphp ReflectionClass
php php php php php php*php php@returnphp stringphp Encodedphp constantphp blockphp inphp classphp2php format
php php php php php php*php/
php php php php privatephp staticphp functionphp php_encodeConstantsphp(ReflectionClassphp php$clsphp)
php php php php php{
php php php php php php php php php$resultphp php php php php=php php"constantsphp php:php php{php"php;
php php php php php php php php php$constantsphp php=php php$clsphp-php>getConstantsphp(php)php;

php php php php php php php php php$tmpArrayphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$constantsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$constantsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$tmpArrayphp[php]php php=php php"php$keyphp:php php"php php.php selfphp:php:encodephp(php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp php.php=php implodephp(php'php,php php'php,php php$tmpArrayphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp php.php php"php}php"php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Encodephp thephp publicphp methodsphp ofphp thephp ReflectionClassphp inphp the
php php php php php php*php classphp2php format
php php php php php php*
php php php php php php*php php@paramphp php$clsphp ReflectionClass
php php php php php php*php php@returnphp stringphp Encodedphp methodphp fragment
php php php php php php*
php php php php php php*php/
php php php php privatephp staticphp functionphp php_encodeMethodsphp(ReflectionClassphp php$clsphp)
php php php php php{
php php php php php php php php php$methodsphp php=php php$clsphp-php>getMethodsphp(php)php;
php php php php php php php php php$resultphp php=php php'methodsphp:php{php'php;

php php php php php php php php php$startedphp php=php falsephp;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php ifphp php(php!php php$methodphp-php>isPublicphp(php)php php|php|php php!php$methodphp-php>isUserDefinedphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$startedphp)php php{
php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php,php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$startedphp php=php truephp;

php php php php php php php php php php php php php$resultphp php.php=php php'php'php php.php php$methodphp-php>getNamephp(php)php.php php'php:functionphp(php'php;

php php php php php php php php php php php php ifphp php(php'php_php_constructphp'php php!php=php php$methodphp-php>getNamephp(php)php)php php{
php php php php php php php php php php php php php php php php php$parametersphp php php=php php$methodphp-php>getParametersphp(php)php;
php php php php php php php php php php php php php php php php php$paramCountphp php php=php countphp(php$parametersphp)php;
php php php php php php php php php php php php php php php php php$argsStartedphp php=php falsephp;

php php php php php php php php php php php php php php php php php$argNamesphp php=php php"varphp argNamesphp=php[php"php;
php php php php php php php php php php php php php php php php foreachphp php(php$parametersphp asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$argsStartedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php'php,php'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php$paramphp-php>getNamephp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$argsStartedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$argNamesphp php.php=php php'php,php'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$argNamesphp php.php=php php'php"php'php php.php php$paramphp-php>getNamephp(php)php php.php php'php"php'php;

php php php php php php php php php php php php php php php php php php php php php$argsStartedphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$argNamesphp php.php=php php"php]php;php"php;

php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php)php{php"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$argNames
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'varphp resultphp php=php ZAjaxEnginephp.invokeRemoteMethodphp(php'
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"thisphp,php php'php"php php.php php$methodphp-php>getNamephp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php'php,argNamesphp,argumentsphp)php;php"
php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'returnphp(resultphp)php;php}php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resultphp php.php=php php"php)php{php}php"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp php.php php"php}php"php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Encodephp thephp publicphp propertiesphp ofphp thephp ReflectionClassphp inphp thephp classphp2
php php php php php php*php formatphp.
php php php php php php*
php php php php php php*php php@paramphp php$clsphp ReflectionClass
php php php php php php*php php@returnphp stringphp Encodephp propertiesphp list
php php php php php php*
php php php php php php*php/
php php php php privatephp staticphp functionphp php_encodeVariablesphp(ReflectionClassphp php$clsphp)
php php php php php{
php php php php php php php php php$propertiesphp php=php php$clsphp-php>getPropertiesphp(php)php;
php php php php php php php php php$propValuesphp php=php getphp_classphp_varsphp(php$clsphp-php>getNamephp(php)php)php;
php php php php php php php php php$resultphp php=php php"variablesphp:php{php"php;
php php php php php php php php php$cntphp php=php php0php;

php php php php php php php php php$tmpArrayphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$propertiesphp asphp php$propphp)php php{
php php php php php php php php php php php php ifphp php(php!php php$propphp-php>isPublicphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tmpArrayphp[php]php php=php php$propphp-php>getNamephp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php.php selfphp:php:encodephp(php$propValuesphp[php$propphp-php>getNamephp(php)php]php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php.php=php implodephp(php'php,php'php,php php$tmpArrayphp)php;

php php php php php php php php returnphp php$resultphp php.php php"php}php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodesphp thephp givenphp php$classNamephp intophp thephp classphp2php modelphp ofphp encodingphp PHP
php php php php php php*php classesphp intophp JavaScriptphp classphp2php classesphp.
php php php php php php*php NOTEphp:php Currentlyphp onlyphp publicphp methodsphp andphp variablesphp arephp proxiedphp onto
php php php php php php*php thephp clientphp machine
php php php php php php*
php php php php php php*php php@paramphp php$classNamephp stringphp Thephp namephp ofphp thephp classphp,php thephp classphp mustphp be
php php php php php php*php instantiablephp usingphp aphp nullphp constructor
php php php php php php*php php@paramphp php$packagephp stringphp Optionalphp packagephp namephp appendedphp tophp JavaScript
php php php php php php*php proxyphp classphp name
php php php php php php*php php@returnphp stringphp Thephp classphp2php php(JavaScriptphp)php encodingphp ofphp thephp class
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp encodeClassphp(php$classNamephp,php php$packagephp php=php php'php'php)
php php php php php{
php php php php php php php php php$clsphp php=php newphp ReflectionClassphp(php$classNamephp)php;
php php php php php php php php ifphp php(php!php php$clsphp-php>isInstantiablephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Exceptionphp(php"php$classNamephp mustphp bephp instantiablephp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php"Classphp.createphp(php'php$packagephp$classNamephp'php,php{php"
php php php php php php php php php php php php php php php php php.php selfphp:php:php_encodeConstantsphp(php$clsphp)php php php php php.php"php,php"
php php php php php php php php php php php php php php php php php.php selfphp:php:php_encodeMethodsphp(php$clsphp)php php php php php php php.php"php,php"
php php php php php php php php php php php php php php php php php.php selfphp:php:php_encodeVariablesphp(php$clsphp)php php php php php.php'php}php)php;php'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Encodephp severalphp classesphp atphp once
php php php php php php*
php php php php php php*php Returnsphp JSONphp encodedphp classesphp,php usingphp php{php@linkphp encodeClassphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$classNames
php php php php php php*php php@paramphp stringphp php$package
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp encodeClassesphp(arrayphp php$classNamesphp,php php$packagephp php=php php'php'php)
php php php php php{
php php php php php php php php php$resultphp php=php php'php'php;
php php php php php php php php foreachphp php(php$classNamesphp asphp php$classNamephp)php php{
php php php php php php php php php php php php php$resultphp php.php=php selfphp:php:encodeClassphp(php$classNamephp,php php$packagephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp Unicodephp Charactersphp tophp php\uphp0php0php0php0php ASCIIphp syntaxphp.
php php php php php php*
php php php php php php*php Thisphp algorithmphp wasphp originallyphp developedphp forphp the
php php php php php php*php Solarphp Frameworkphp byphp Paulphp Mphp.php Jones
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/solarphpphp.comphp/
php php php php php php*php php@linkphp php php httpphp:php/php/svnphp.solarphpphp.comphp/corephp/trunkphp/Solarphp/Jsonphp.php
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp encodeUnicodeStringphp(php$valuephp)
php php php php php{
php php php php php php php php php$strlenphp_varphp php=php strlenphp(php$valuephp)php;
php php php php php php php php php$asciiphp php=php php"php"php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Iteratephp overphp everyphp characterphp inphp thephp stringphp,
php php php php php php php php php php*php escapingphp withphp aphp slashphp orphp encodingphp tophp UTFphp-php8php wherephp necessary
php php php php php php php php php php*php/
php php php php php php php php forphp(php$iphp php=php php0php;php php$iphp <php php$strlenphp_varphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$ordphp_varphp_cphp php=php ordphp(php$valuephp[php$iphp]php)php;

php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php>php=php php0xphp2php0php)php php&php&php php(php$ordphp_varphp_cphp <php=php php0xphp7Fphp)php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php0php0php0php0php0php php-php Uphp-php0php0php0php0php0php0php7Fphp php(samephp asphp ASCIIphp)
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php php$valuephp[php$iphp]php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php&php php0xEphp0php)php php=php=php php0xCphp0php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php0php0php0php8php0php php-php Uphp-php0php0php0php0php0php7FFphp,php maskphp php1php1php0XXXXX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$charphp php=php packphp(php'Cphp*php'php,php php$ordphp_varphp_cphp,php ordphp(php$valuephp[php$iphp php+php php1php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php1php;
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php selfphp:php:php_utfphp8php2utfphp1php6php(php$charphp)php;
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php sprintfphp(php'php\uphp%php0php4sphp'php,php binphp2hexphp(php$utfphp1php6php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php&php php0xFphp0php)php php=php=php php0xEphp0php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php0php0php8php0php0php php-php Uphp-php0php0php0php0FFFFphp,php maskphp php1php1php1php0XXXX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$charphp php=php packphp(php'Cphp*php'php,php php$ordphp_varphp_cphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php2php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php2php;
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php selfphp:php:php_utfphp8php2utfphp1php6php(php$charphp)php;
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php sprintfphp(php'php\uphp%php0php4sphp'php,php binphp2hexphp(php$utfphp1php6php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php&php php0xFphp8php)php php=php=php php0xFphp0php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php0php1php0php0php0php0php php-php Uphp-php0php0php1FFFFFphp,php maskphp php1php1php1php1php0XXX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$charphp php=php packphp(php'Cphp*php'php,php php$ordphp_varphp_cphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php2php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php3php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php3php;
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php selfphp:php:php_utfphp8php2utfphp1php6php(php$charphp)php;
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php sprintfphp(php'php\uphp%php0php4sphp'php,php binphp2hexphp(php$utfphp1php6php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php&php php0xFCphp)php php=php=php php0xFphp8php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php0php2php0php0php0php0php0php php-php Uphp-php0php3FFFFFFphp,php maskphp php1php1php1php1php1php0XX
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$charphp php=php packphp(php'Cphp*php'php,php php$ordphp_varphp_cphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php2php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php3php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php4php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php4php;
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php selfphp:php:php_utfphp8php2utfphp1php6php(php$charphp)php;
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php sprintfphp(php'php\uphp%php0php4sphp'php,php binphp2hexphp(php$utfphp1php6php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php(php(php$ordphp_varphp_cphp php&php php0xFEphp)php php=php=php php0xFCphp)php:
php php php php php php php php php php php php php php php php php php php php php/php/php charactersphp Uphp-php0php4php0php0php0php0php0php0php php-php Uphp-php7FFFFFFFphp,php maskphp php1php1php1php1php1php1php0X
php php php php php php php php php php php php php php php php php php php php php/php/php seephp httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php php php php php php$charphp php=php packphp(php'Cphp*php'php,php php$ordphp_varphp_cphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php1php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php2php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php3php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php4php]php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ordphp(php$valuephp[php$iphp php+php php5php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php$iphp php+php=php php5php;
php php php php php php php php php php php php php php php php php php php php php$utfphp1php6php php=php selfphp:php:php_utfphp8php2utfphp1php6php(php$charphp)php;
php php php php php php php php php php php php php php php php php php php php php$asciiphp php.php=php sprintfphp(php'php\uphp%php0php4sphp'php,php binphp2hexphp(php$utfphp1php6php)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$asciiphp;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp aphp stringphp fromphp onephp UTFphp-php8php charphp tophp onephp UTFphp-php1php6php charphp.
php php php php php php*
php php php php php php*php Normallyphp shouldphp bephp handledphp byphp mbphp_convertphp_encodingphp,php but
php php php php php php*php providesphp aphp slowerphp PHPphp-onlyphp methodphp forphp installations
php php php php php php*php thatphp lackphp thephp multibyephp stringphp extensionphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp fromphp thephp Solarphp Frameworkphp byphp Paulphp Mphp.php Jones
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/solarphpphp.com
php php php php php php*php php@paramphp stringphp php$utfphp8php UTFphp-php8php character
php php php php php php*php php@returnphp stringphp UTFphp-php1php6php character
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_utfphp8php2utfphp1php6php(php$utfphp8php)
php php php php php{
php php php php php php php php php/php/php Checkphp forphp mbphp extensionphp otherwisephp dophp byphp handphp.
php php php php php php php php ifphp(php functionphp_existsphp(php'mbphp_convertphp_encodingphp'php)php php)php php{
php php php php php php php php php php php php returnphp mbphp_convertphp_encodingphp(php$utfphp8php,php php'UTFphp-php1php6php'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(strlenphp(php$utfphp8php)php)php php{
php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php/php/php thisphp casephp shouldphp neverphp bephp reachedphp,php becausephp wephp arephp inphp ASCIIphp range
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp php$utfphp8php;

php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php/php/php returnphp aphp UTFphp-php1php6php characterphp fromphp aphp php2php-bytephp UTFphp-php8php char
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp chrphp(php0xphp0php7php php&php php(ordphp(php$utfphp8php{php0php}php)php php>php>php php2php)php)
php php php php php php php php php php php php php php php php php php php php php php.php chrphp(php(php0xCphp0php php&php php(ordphp(php$utfphp8php{php0php}php)php <php<php php6php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php|php php(php0xphp3Fphp php&php ordphp(php$utfphp8php{php1php}php)php)php)php;

php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php/php/php returnphp aphp UTFphp-php1php6php characterphp fromphp aphp php3php-bytephp UTFphp-php8php char
php php php php php php php php php php php php php php php php php/php/php seephp:php httpphp:php/php/wwwphp.clphp.camphp.acphp.ukphp/php~mgkphp2php5php/unicodephp.htmlphp#utfphp-php8
php php php php php php php php php php php php php php php php returnphp chrphp(php(php0xFphp0php php&php php(ordphp(php$utfphp8php{php0php}php)php <php<php php4php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php|php php(php0xphp0Fphp php&php php(ordphp(php$utfphp8php{php1php}php)php php>php>php php2php)php)php)
php php php php php php php php php php php php php php php php php php php php php php.php chrphp(php(php0xCphp0php php&php php(ordphp(php$utfphp8php{php1php}php)php <php<php php6php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php|php php(php0xphp7Fphp php&php ordphp(php$utfphp8php{php2php}php)php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ignoringphp UTFphp-php3php2php forphp nowphp,php sorry
php php php php php php php php returnphp php'php'php;
php php php php php}
php}

