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
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SignatureAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Httpphp_Utilityphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/Utilityphp.phpphp'php;

php/php*php*php Zendphp_Uriphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Oauthphp_Signaturephp_SignatureAbstract
php{
php php php php php/php*php*
php php php php php php*php Hashphp algorithmphp tophp usephp whenphp generatingphp signature
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hashAlgorithmphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Keyphp tophp usephp whenphp signing
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_keyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Consumerphp secret
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_consumerSecretphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Tokenphp secret
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tokenSecretphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$consumerSecret
php php php php php php*php php@paramphp php nullphp|stringphp php$tokenSecret
php php php php php php*php php@paramphp php nullphp|stringphp php$hashAlgo
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$consumerSecretphp,php php$tokenSecretphp php=php nullphp,php php$hashAlgophp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_consumerSecretphp php=php php$consumerSecretphp;
php php php php php php php php ifphp php(issetphp(php$tokenSecretphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tokenSecretphp php=php php$tokenSecretphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_keyphp php=php php$thisphp-php>php_assembleKeyphp(php)php;
php php php php php php php php ifphp php(issetphp(php$hashAlgophp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php php$hashAlgophp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Signphp aphp request
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php nullphp|stringphp php$method
php php php php php php*php php@paramphp php nullphp|stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp abstractphp functionphp signphp(arrayphp php$paramsphp,php php$methodphp php=php nullphp,php php$urlphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Normalizephp thephp basephp signaturephp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp normaliseBaseSignatureUrlphp(php$urlphp)
php php php php php{
php php php php php php php php php$uriphp php=php Zendphp_Uriphp_Httpphp:php:fromStringphp(php$urlphp)php;
php php php php php php php php ifphp php(php$uriphp-php>getSchemephp(php)php php=php=php php'httpphp'php php&php&php php$uriphp-php>getPortphp(php)php php=php=php php'php8php0php'php)php php{
php php php php php php php php php php php php php$uriphp-php>setPortphp(php'php'php)php;
php php php php php php php php php}php elseifphp php(php$uriphp-php>getSchemephp(php)php php=php=php php'httpsphp'php php&php&php php$uriphp-php>getPortphp(php)php php=php=php php'php4php4php3php'php)php php{
php php php php php php php php php php php php php$uriphp-php>setPortphp(php'php'php)php;
php php php php php php php php php}
php php php php php php php php php$uriphp-php>setQueryphp(php'php'php)php;
php php php php php php php php php$uriphp-php>setFragmentphp(php'php'php)php;
php php php php php php php php php$uriphp-php>setHostphp(strtolowerphp(php$uriphp-php>getHostphp(php)php)php)php;
php php php php php php php php returnphp php$uriphp-php>getUriphp(truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblephp keyphp fromphp consumerphp andphp tokenphp secrets
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_assembleKeyphp(php)
php php php php php{
php php php php php php php php php$partsphp php=php arrayphp(php$thisphp-php>php_consumerSecretphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_tokenSecretphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$partsphp[php]php php=php php$thisphp-php>php_tokenSecretphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$partsphp asphp php$keyphp php=php>php php$secretphp)php php{
php php php php php php php php php php php php php$partsphp[php$keyphp]php php=php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(php$secretphp)php;
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php&php'php,php php$partsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp basephp signaturephp string
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php nullphp|stringphp php$method
php php php php php php*php php@paramphp php nullphp|stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getBaseSignatureStringphp(arrayphp php$paramsphp,php php$methodphp php=php nullphp,php php$urlphp php=php nullphp)
php php php php php{
php php php php php php php php php$encodedParamsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$encodedParamsphp[Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(php$keyphp)php]php php=
php php php php php php php php php php php php php php php php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$baseStringsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$methodphp)php)php php{
php php php php php php php php php php php php php$baseStringsphp[php]php php=php strtoupperphp(php$methodphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$urlphp)php)php php{
php php php php php php php php php php php php php/php/php shouldphp normalisephp later
php php php php php php php php php php php php php$baseStringsphp[php]php php=php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(
php php php php php php php php php php php php php php php php php$thisphp-php>normaliseBaseSignatureUrlphp(php$urlphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$encodedParamsphp[php'oauthphp_signaturephp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$encodedParamsphp[php'oauthphp_signaturephp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$baseStringsphp[php]php php=php Zendphp_Oauthphp_Httpphp_Utilityphp:php:urlEncodephp(
php php php php php php php php php php php php php$thisphp-php>php_toByteValueOrderedQueryStringphp(php$encodedParamsphp)
php php php php php php php php php)php;
php php php php php php php php returnphp implodephp(php'php&php'php,php php$baseStringsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp anphp arrayphp tophp aphp bytephp valuephp orderedphp queryphp string
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_toByteValueOrderedQueryStringphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php uksortphp(php$paramsphp,php php'strnatcmpphp'php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php natsortphp(php$valuephp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$keyduplicatephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$keyphp php.php php'php=php'php php.php php$keyduplicatephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$keyphp php.php php'php=php'php php.php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php&php'php,php php$returnphp)php;
php php php php php}
php}
