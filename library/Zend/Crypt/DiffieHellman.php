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
php php*php php@subpackagephp DiffieHellman
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DiffieHellmanphp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php PHPphp implementationphp ofphp thephp Diffiephp-Hellmanphp publicphp keyphp encryptionphp algorithmphp.
php php*php Allowsphp twophp unassociatedphp partiesphp tophp establishphp aphp jointphp sharedphp secretphp key
php php*php tophp bephp usedphp inphp encryptingphp subsequentphp communicationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_DiffieHellman
php{

php php php php php/php*php*
php php php php php php*php Staticphp flagphp tophp selectphp whetherphp tophp usephp PHPphp5php.php3php'sphp opensslphp extension
php php php php php php*php ifphp availablephp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp staticphp php$useOpensslphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Defaultphp largephp primephp numberphp;php requiredphp byphp thephp algorithmphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_primephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp generatorphp numberphp.php Thisphp numberphp mustphp bephp greaterphp thanphp php0php but
php php php php php php*php lessphp thanphp thephp primephp numberphp setphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_generatorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Aphp privatephp numberphp setphp byphp thephp localphp userphp.php Itphp'sphp optionalphp andphp will
php php php php php php*php bephp generatedphp ifphp notphp setphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_privateKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php BigIntegerphp supportphp objectphp courtesyphp ofphp Zendphp_Cryptphp_Math
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cryptphp_Mathphp_BigInteger
php php php php php php*php/
php php php php privatephp php$php_mathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp publicphp keyphp generatedphp byphp thisphp instancephp afterphp callingphp generateKeysphp(php)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_publicKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp sharedphp secretphp keyphp resultingphp fromphp aphp completedphp Diffiephp Hellman
php php php php php php*php exchange
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_secretKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constants
php php php php php php*php/
php php php php constphp BINARYphp php=php php'binaryphp'php;
php php php php constphp NUMBERphp php=php php'numberphp'php;
php php php php constphp BTWOCphp php php=php php'btwocphp'php;

php php php php php/php*php*
php php php php php php*php Constructorphp;php ifphp setphp constructphp thephp objectphp usingphp thephp parameterphp arrayphp to
php php php php php php*php setphp valuesphp forphp Primephp,php Generatorphp andphp Privatephp.
php php php php php php*php Ifphp aphp Privatephp Keyphp isphp notphp setphp,php onephp willphp bephp generatedphp atphp randomphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prime
php php php php php php*php php@paramphp stringphp php$generator
php php php php php php*php php@paramphp stringphp php$privateKey
php php php php php php*php php@paramphp stringphp php$privateKeyType
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$primephp,php php$generatorphp,php php$privateKeyphp php=php nullphp,php php$privateKeyTypephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php php$thisphp-php>setPrimephp(php$primephp)php;
php php php php php php php php php$thisphp-php>setGeneratorphp(php$generatorphp)php;
php php php php php php php php ifphp php(php$privateKeyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPrivateKeyphp(php$privateKeyphp,php php$privateKeyTypephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setBigIntegerMathphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp ownphp publicphp keyphp.php Ifphp aphp privatephp numberphp hasphp notphp alreadyphp been
php php php php php php*php setphp,php onephp willphp bephp generatedphp atphp thisphp stagephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cryptphp_DiffieHellman
php php php php php php*php/
php php php php publicphp functionphp generateKeysphp(php)
php php php php php{
php php php php php php php php ifphp php(functionphp_existsphp(php'opensslphp_dhphp_computephp_keyphp'php)php php&php&php selfphp:php:php$useOpensslphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$detailsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$detailsphp[php'pphp'php]php php=php php$thisphp-php>getPrimephp(php)php;
php php php php php php php php php php php php php$detailsphp[php'gphp'php]php php=php php$thisphp-php>getGeneratorphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>hasPrivateKeyphp(php)php)php php{
php php php php php php php php php php php php php php php php php$detailsphp[php'privphp_keyphp'php]php php=php php$thisphp-php>getPrivateKeyphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$opensslKeyResourcephp php=php opensslphp_pkeyphp_newphp(php arrayphp(php'dhphp'php php=php>php php$detailsphp)php php)php;
php php php php php php php php php php php php php$dataphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$opensslKeyResourcephp)php;
php php php php php php php php php php php php php$thisphp-php>setPrivateKeyphp(php$dataphp[php'dhphp'php]php[php'privphp_keyphp'php]php,php selfphp:php:BINARYphp)php;
php php php php php php php php php php php php php$thisphp-php>setPublicKeyphp(php$dataphp[php'dhphp'php]php[php'pubphp_keyphp'php]php,php selfphp:php:BINARYphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Privatephp keyphp isphp lazyphp generatedphp inphp thephp absencephp ofphp PHPphp php5php.php3php'sphp extphp/openssl
php php php php php php php php php php php php php$publicKeyphp php=php php$thisphp-php>php_mathphp-php>powmodphp(php$thisphp-php>getGeneratorphp(php)php,php php$thisphp-php>getPrivateKeyphp(php)php,php php$thisphp-php>getPrimephp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>setPublicKeyphp(php$publicKeyphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp valuephp ofphp thephp publicphp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp Zendphp_Cryptphp_DiffieHellman
php php php php php php*php/
php php php php publicphp functionphp setPublicKeyphp(php$numberphp,php php$typephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php php$numberphp php=php php$thisphp-php>php_mathphp-php>fromBinaryphp(php$numberphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^php\dphp+php$php/php"php,php php$numberphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'invalidphp parameterphp;php notphp aphp positivephp naturalphp numberphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_publicKeyphp php=php php(stringphp)php php$numberphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ownphp publicphp keyphp forphp communicationphp tophp thephp secondphp partyphp tophp this
php php php php php php*php transactionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPublicKeyphp(php$typephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_publicKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'Aphp publicphp keyphp hasphp notphp yetphp beenphp generatedphp usingphp aphp priorphp callphp tophp generateKeysphp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_publicKeyphp)php;
php php php php php php php php php}php elseifphp php(php$typephp php=php=php selfphp:php:BTWOCphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>btwocphp(php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_publicKeyphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_publicKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computephp thephp sharedphp secretphp keyphp basedphp onphp thephp publicphp keyphp receivedphp fromphp the
php php php php php php*php thephp secondphp partyphp tophp thisphp transactionphp.php Thisphp shouldphp agreephp tophp thephp secret
php php php php php php*php keyphp thephp secondphp partyphp computesphp onphp ourphp ownphp publicphp keyphp.
php php php php php php*php Oncephp inphp agreementphp,php thephp keyphp isphp knownphp tophp onlyphp tophp bothphp partiesphp.
php php php php php php*php Byphp defaultphp,php thephp functionphp expectsphp thephp publicphp keyphp tophp bephp inphp binaryphp form
php php php php php php*php whichphp isphp thephp typicalphp formatphp whenphp beingphp transmittedphp.
php php php php php php*
php php php php php php*php Ifphp youphp needphp thephp binaryphp formphp ofphp thephp sharedphp secretphp keyphp,php call
php php php php php php*php getSharedSecretKeyphp(php)php withphp thephp optionalphp parameterphp forphp Binaryphp outputphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicKey
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp computeSecretKeyphp(php$publicKeyphp,php php$typephp php=php selfphp:php:NUMBERphp,php php$outputphp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php php$publicKeyphp php=php php$thisphp-php>php_mathphp-php>fromBinaryphp(php$publicKeyphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^php\dphp+php$php/php"php,php php$publicKeyphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'invalidphp parameterphp;php notphp aphp positivephp naturalphp numberphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'opensslphp_dhphp_computephp_keyphp'php)php php&php&php selfphp:php:php$useOpensslphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_secretKeyphp php=php opensslphp_dhphp_computephp_keyphp(php$publicKeyphp,php php$thisphp-php>getPublicKeyphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_secretKeyphp php=php php$thisphp-php>php_mathphp-php>powmodphp(php$publicKeyphp,php php$thisphp-php>getPrivateKeyphp(php)php,php php$thisphp-php>getPrimephp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getSharedSecretKeyphp(php$outputphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp computedphp sharedphp secretphp keyphp fromphp thephp DiffieHellmanphp transaction
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSharedSecretKeyphp(php$typephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_secretKeyphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'Aphp secretphp keyphp hasphp notphp yetphp beenphp computedphp;php callphp computeSecretKeyphp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_secretKeyphp)php;
php php php php php php php php php}php elseifphp php(php$typephp php=php=php selfphp:php:BTWOCphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>btwocphp(php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_secretKeyphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_secretKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp valuephp ofphp thephp primephp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@returnphp Zendphp_Cryptphp_DiffieHellman
php php php php php php*php/
php php php php publicphp functionphp setPrimephp(php$numberphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^php\dphp+php$php/php"php,php php$numberphp)php php|php|php php$numberphp <php php1php1php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'invalidphp parameterphp;php notphp aphp positivephp naturalphp numberphp orphp toophp smallphp:php shouldphp bephp aphp largephp naturalphp numberphp primephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_primephp php=php php(stringphp)php php$numberphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp valuephp ofphp thephp primephp number
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPrimephp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_primephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'Nophp primephp numberphp hasphp beenphp setphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_primephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp valuephp ofphp thephp generatorphp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@returnphp Zendphp_Cryptphp_DiffieHellman
php php php php php php*php/
php php php php publicphp functionphp setGeneratorphp(php$numberphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^php\dphp+php$php/php"php,php php$numberphp)php php|php|php php$numberphp <php php2php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'invalidphp parameterphp;php notphp aphp positivephp naturalphp numberphp greaterphp thanphp php1php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_generatorphp php=php php(stringphp)php php$numberphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp valuephp ofphp thephp generatorphp number
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getGeneratorphp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_generatorphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'Nophp generatorphp numberphp hasphp beenphp setphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_generatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp thephp valuephp ofphp thephp privatephp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp Zendphp_Cryptphp_DiffieHellman
php php php php php php*php/
php php php php publicphp functionphp setPrivateKeyphp(php$numberphp,php php$typephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php php$numberphp php=php php$thisphp-php>php_mathphp-php>fromBinaryphp(php$numberphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!pregphp_matchphp(php"php/php^php\dphp+php$php/php"php,php php$numberphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/DiffieHellmanphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_DiffieHellmanphp_Exceptionphp(php'invalidphp parameterphp;php notphp aphp positivephp naturalphp numberphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_privateKeyphp php=php php(stringphp)php php$numberphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp thephp valuephp ofphp thephp privatephp number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPrivateKeyphp(php$typephp php=php selfphp:php:NUMBERphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasPrivateKeyphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPrivateKeyphp(php$thisphp-php>php_generatePrivateKeyphp(php)php,php selfphp:php:BINARYphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:BINARYphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_privateKeyphp)php;
php php php php php php php php php}php elseifphp php(php$typephp php=php=php selfphp:php:BTWOCphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>btwocphp(php$thisphp-php>php_mathphp-php>toBinaryphp(php$thisphp-php>php_privateKeyphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_privateKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp whetherphp aphp privatephp keyphp currentlyphp existsphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasPrivateKeyphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_privateKeyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp tophp passphp anphp extensionphp parameterphp whichphp isphp usedphp tophp create
php php php php php php*php aphp specificphp BigIntegerphp instancephp forphp aphp specificphp extensionphp typephp.
php php php php php php*php Allowsphp manualphp settingphp ofphp thephp classphp inphp casephp ofphp anphp extension
php php php php php php*php problemphp orphp bugphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$extension
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setBigIntegerMathphp(php$extensionphp php=php nullphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Math
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Mathphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_mathphp php=php newphp Zendphp_Cryptphp_Mathphp(php$extensionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Inphp thephp eventphp aphp privatephp numberphp/keyphp hasphp notphp beenphp setphp byphp thephp userphp,
php php php php php php*php orphp generatedphp byphp extphp/opensslphp,php aphp bestphp attemptphp willphp bephp madephp to
php php php php php php*php generatephp aphp randomphp keyphp.php Havingphp aphp randomphp numberphp generatorphp installed
php php php php php php*php onphp linuxphp/bsdphp isphp highlyphp recommendedphp!php Thephp alternativephp isphp notphp recommended
php php php php php php*php forphp productionphp unlessphp withoutphp anyphp otherphp optionphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_generatePrivateKeyphp(php)
php php php php php{
php php php php php php php php php$randphp php=php php$thisphp-php>php_mathphp-php>randphp(php$thisphp-php>getGeneratorphp(php)php,php php$thisphp-php>getPrimephp(php)php)php;
php php php php php php php php returnphp php$randphp;
php php php php php}

php}
