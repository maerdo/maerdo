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
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Fontphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Fontphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_FileParserphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserphp.phpphp'php;

php/php*php*
php php*php Abstractphp helperphp classphp forphp php{php@linkphp Zendphp_Pdfphp_Fontphp}php thatphp parsesphp fontphp filesphp.
php php*
php php*php Definesphp thephp publicphp interfacephp forphp concretephp subclassesphp whichphp arephp responsible
php php*php forphp parsingphp thephp rawphp binaryphp dataphp fromphp thephp fontphp filephp onphp diskphp.php Alsophp provides
php php*php aphp debugphp loggingphp interfacephp andphp aphp couplephp ofphp sharedphp utilityphp methodsphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_FileParserphp_Fontphp extendsphp Zendphp_Pdfphp_FileParser
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Arrayphp ofphp parsedphp fontphp propertiesphp.php Usedphp withphp php{php@linkphp php_php_getphp(php)php}php and
php php php php php php*php php{php@linkphp php_php_setphp(php)php}php.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_fontPropertiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp whetherphp orphp notphp debugphp loggingphp isphp activephp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_debugphp php=php falsephp;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Objectphp Lifecyclephp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Validatesphp thephp dataphp sourcephp andphp enablesphp debugphp loggingphp ifphp sophp configuredphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_FileParserDataSourcephp php$dataSource
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_FileParserDataSourcephp php$dataSourcephp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dataSourcephp)php;
php php php php php php php php php$thisphp-php>fontTypephp php=php Zendphp_Pdfphp_Fontphp:php:TYPEphp_UNKNOWNphp;
php php php php php}


php php php/php*php Accessorsphp php*php/

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fontPropertiesphp[php$propertyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_fontPropertiesphp[php$propertyphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php NOTEphp:php Thephp setphp handlerphp isphp definedphp belowphp inphp thephp internalphp methodsphp groupphp.php php*php/


php php php/php*php Parserphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Readsphp thephp Unicodephp UTFphp-php1php6php-encodedphp stringphp fromphp thephp binaryphp filephp atphp the
php php php php php php*php currentphp offsetphp locationphp.php Overriddenphp tophp fixphp returnphp characterphp setphp atphp UTFphp-php1php6BEphp.
php php php php php php*
php php php php php php*php php@todophp Dealphp withphp tophp-dosphp inphp thephp parentphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp php(charactersphp php*php php2php)php tophp returnphp.
php php php php php php*php php@paramphp integerphp php$byteOrderphp php(optionalphp)php Bigphp-php orphp littlephp-endianphp bytephp orderphp.
php php php php php php*php php php Usephp thephp BYTEphp_ORDERphp_php constantsphp definedphp inphp php{php@linkphp Zendphp_Pdfphp_FileParserphp}php.php If
php php php php php php*php php php omittedphp,php usesphp bigphp-endianphp.
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php php-php-Ignoredphp-php-
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringUTFphp1php6php(php$byteCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$byteOrderphp php=php Zendphp_Pdfphp_FileParserphp:php:BYTEphp_ORDERphp_BIGphp_ENDIANphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$characterSetphp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp parentphp:php:readStringUTFphp1php6php(php$byteCountphp,php php$byteOrderphp,php php'UTFphp-php1php6BEphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp Macphp Romanphp-encodedphp stringphp fromphp thephp binaryphp filephp atphp thephp current
php php php php php php*php offsetphp locationphp.php Overriddenphp tophp fixphp returnphp characterphp setphp atphp UTFphp-php1php6BEphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp php(charactersphp)php tophp returnphp.
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php php-php-Ignoredphp-php-
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringMacRomanphp(php$byteCountphp,php php$characterSetphp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp parentphp:php:readStringMacRomanphp(php$byteCountphp,php php'UTFphp-php1php6BEphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp thephp Pascalphp stringphp fromphp thephp binaryphp filephp atphp thephp currentphp offset
php php php php php php*php locationphp.php Overriddenphp tophp fixphp returnphp characterphp setphp atphp UTFphp-php1php6BEphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$characterSetphp php(optionalphp)php php-php-Ignoredphp-php-
php php php php php php*php php@paramphp integerphp php$lengthBytesphp php(optionalphp)php Numberphp ofphp bytesphp thatphp makephp upphp the
php php php php php php*php php php lengthphp.php Defaultphp isphp php1php.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readStringPascalphp(php$characterSetphp php=php php'php'php,php php$lengthBytesphp php=php php1php)
php php php php php{
php php php php php php php php returnphp parentphp:php:readStringPascalphp(php'UTFphp-php1php6BEphp'php)php;
php php php php php}


php php php/php*php Utilityphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Writesphp thephp entirephp fontphp propertiesphp arrayphp tophp STDOUTphp.php Usedphp onlyphp forphp debuggingphp.
php php php php php php*php/
php php php php publicphp functionphp writeDebugphp(php)
php php php php php{
php php php php php php php php printphp_rphp(php$thisphp-php>php_fontPropertiesphp)php;
php php php php php}



php php php/php*php*php*php*php Internalphp Methodsphp php*php*php*php*php/


php php php/php*php Internalphp Accessorsphp php*php/

php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php NOTEphp:php Thisphp methodphp isphp protectedphp.php Otherphp classesphp mayphp freelyphp interrogate
php php php php php php*php thephp fontphp propertiesphp,php butphp onlyphp thisphp andphp itsphp subclassesphp mayphp setphp themphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_fontPropertiesphp[php$propertyphp]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fontPropertiesphp[php$propertyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}


php php php/php*php Internalphp Utilityphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Ifphp debugphp loggingphp isphp enabledphp,php writesphp thephp logphp messagephp.
php php php php php php*
php php php php php php*php Thephp logphp messagephp isphp aphp sprintfphp(php)php stylephp stringphp andphp anyphp numberphp ofphp arguments
php php php php php php*php mayphp accompanyphp itphp asphp additionalphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@paramphp mixedphp php(optionalphp,php multiplephp)php Additionalphp arguments
php php php php php php*php/
php php php php protectedphp functionphp php_debugLogphp(php$messagephp)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>php_debugphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$messagephp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php$messagephp php=php vsprintfphp(php$messagephp,php php$argsphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Logphp.phpphp'php;
php php php php php php php php php$loggerphp php=php newphp Zendphp_Logphp(php)php;
php php php php php php php php php$loggerphp-php>logphp(php$messagephp,php Zendphp_Logphp:php:DEBUGphp)php;
php php php php php}
php}
