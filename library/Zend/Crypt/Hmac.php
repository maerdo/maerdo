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
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@subpackagephp Hmac
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Hmacphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Crypt
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp.phpphp'php;

php/php*php*
php php*php PHPphp implementationphp ofphp thephp RFCphp php2php1php0php4php Hashphp basedphp Messagephp Authenticationphp Code
php php*php algorithmphp.
php php*
php php*php php@todophp php Patchphp forphp refactoringphp failedphp testsphp php(keyphp blockphp sizesphp php>php8php0php usingphp internalphp algophp)
php php*php php@todophp php php php php php php Checkphp ifphp mhashphp(php)php isphp aphp requiredphp alternativephp php(willphp bephp PECLphp-onlyphp soonphp)
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Hmacphp extendsphp Zendphp_Crypt
php{

php php php php php/php*php*
php php php php php php*php Thephp keyphp tophp usephp forphp thephp hash
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_keyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php packphp(php)php formatphp tophp bephp usedphp forphp currentphp hashingphp method
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_packFormatphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Hashingphp algorithmphp;php canphp bephp thephp mdphp5php/shaphp1php functionsphp orphp anyphp algorithmphp name
php php php php php php*php listedphp inphp thephp outputphp ofphp PHPphp php5php.php1php.php2php+php hashphp_algosphp(php)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_hashAlgorithmphp php=php php'mdphp5php'php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp algorithmsphp supportedphp myphp mhashphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_supportedMhashAlgorithmsphp php=php arrayphp(php'adlerphp3php2php'php,php'php crcphp3php2php'php,php php'crcphp3php2bphp'php,php php'gostphp'php,
php php php php php php php php php php php php php'havalphp1php2php8php'php,php php'havalphp1php6php0php'php,php php'havalphp1php9php2php'php,php php'havalphp2php5php6php'php,php php'mdphp4php'php,php php'mdphp5php'php,php php'ripemdphp1php6php0php'php,
php php php php php php php php php php php php php'shaphp1php'php,php php'shaphp2php5php6php'php,php php'tigerphp'php,php php'tigerphp1php2php8php'php,php php'tigerphp1php6php0php'php)php;

php php php php php/php*php*
php php php php php php*php Constantsphp representingphp thephp outputphp modephp ofphp thephp hashphp algorithm
php php php php php php*php/
php php php php constphp STRINGphp php=php php'stringphp'php;
php php php php constphp BINARYphp php=php php'binaryphp'php;

php php php php php/php*php*
php php php php php php*php Performsphp aphp HMACphp computationphp givenphp relevantphp detailsphp suchphp asphp Keyphp,php Hashing
php php php php php php*php algorithmphp,php thephp dataphp tophp computephp MACphp ofphp,php andphp anphp outputphp formatphp ofphp Stringphp,
php php php php php php*php Binaryphp notationphp orphp BTWOCphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$hash
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp stringphp php$output
php php php php php php*php php@paramphp booleanphp php$internal
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp computephp(php$keyphp,php php$hashphp,php php$dataphp,php php$outputphp php=php selfphp:php:STRINGphp)
php php php php php{
php php php php php php php php php/php/php setphp thephp key
php php php php php php php php ifphp php(php!issetphp(php$keyphp)php php|php|php emptyphp(php$keyphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Hmacphp_Exceptionphp(php'providedphp keyphp isphp nullphp orphp emptyphp'php)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$php_keyphp php=php php$keyphp;

php php php php php php php php php/php/php setphp thephp hash
php php php php php php php php selfphp:php:php_setHashAlgorithmphp(php$hashphp)php;

php php php php php php php php php/php/php performphp hashingphp andphp return
php php php php php php php php returnphp selfphp:php:php_hashphp(php$dataphp,php php$outputphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp hashphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$hash
php php php php php php*php php@returnphp Zendphp_Cryptphp_Hmac
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_setHashAlgorithmphp(php$hashphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$hashphp)php php|php|php emptyphp(php$hashphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Hmacphp_Exceptionphp(php'providedphp hashphp stringphp isphp nullphp orphp emptyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$hashphp php=php strtolowerphp(php$hashphp)php;
php php php php php php php php php$hashSupportedphp php=php falsephp;

php php php php php php php php ifphp php(functionphp_existsphp(php'hashphp_algosphp'php)php php&php&php inphp_arrayphp(php$hashphp,php hashphp_algosphp(php)php)php)php php{
php php php php php php php php php php php php php$hashSupportedphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$hashSupportedphp php=php=php=php falsephp php&php&php functionphp_existsphp(php'mhashphp'php)php php&php&php inphp_arrayphp(php$hashphp,php selfphp:php:php$php_supportedAlgosMhashphp)php)php php{
php php php php php php php php php php php php php$hashSupportedphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$hashSupportedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Hmacphp_Exceptionphp(php'hashphp algorithmphp providedphp isphp notphp supportedphp onphp thisphp PHPphp installationphp;php pleasephp enablephp thephp hashphp orphp mhashphp extensionsphp'php)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$php_hashAlgorithmphp php=php php$hashphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp HMACphp andphp returnphp thephp keyedphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp stringphp php$output
php php php php php php*php php@paramphp boolphp php$internalphp Optionphp tophp notphp usephp hashphp(php)php functionsphp forphp testing
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_hashphp(php$dataphp,php php$outputphp php=php selfphp:php:STRINGphp,php php$internalphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(functionphp_existsphp(php'hashphp_hmacphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$outputphp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php php php php php returnphp hashphp_hmacphp(selfphp:php:php$php_hashAlgorithmphp,php php$dataphp,php selfphp:php:php$php_keyphp,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp hashphp_hmacphp(selfphp:php:php$php_hashAlgorithmphp,php php$dataphp,php selfphp:php:php$php_keyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(functionphp_existsphp(php'mhashphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$outputphp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php php php php php returnphp mhashphp(selfphp:php:php_getMhashDefinitionphp(selfphp:php:php$php_hashAlgorithmphp)php,php php$dataphp,php selfphp:php:php$php_keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$binphp php=php mhashphp(selfphp:php:php_getMhashDefinitionphp(selfphp:php:php$php_hashAlgorithmphp)php,php php$dataphp,php selfphp:php:php$php_keyphp)php;
php php php php php php php php php php php php returnphp binphp2hexphp(php$binphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Sincephp MHASHphp acceptsphp anphp integerphp constantphp representingphp thephp hashphp algorithm
php php php php php php*php wephp needphp tophp makephp aphp smallphp detourphp tophp getphp thephp correctphp integerphp matchingphp our
php php php php php php*php algorithmphp'sphp namephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$hashAlgorithm
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getMhashDefinitionphp(php$hashAlgorithmphp)
php php php php php{
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php=php mhashphp_countphp(php)php;php php$iphp+php+php)
php php php php php php php php php{
php php php php php php php php php php php php php$typesphp[mhashphp_getphp_hashphp_namephp(php$iphp)php]php php=php php$iphp;
php php php php php php php php php}
php php php php php php php php returnphp php$typesphp[strtoupperphp(php$hashAlgorithmphp)php]php;
php php php php php}

php}