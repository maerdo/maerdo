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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Converterphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Converterphp isphp aphp collectionphp ofphp usefulphp LDAPphp relatedphp conversionphp functionsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Converter
php{
php php php php constphp STANDARDphp php php php php php php php php php=php php0php;
php php php php constphp BOOLEANphp php php php php php php php php php php=php php1php;
php php php php constphp GENERALIZEDphp_TIMEphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Convertsphp allphp ASCIIphp charsphp <php php3php2php tophp php"php\HEXphp"
php php php php php php*
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:ascphp2hexphp3php2php(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stringphp Stringphp tophp convert
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp ascToHexphp3php2php(php$stringphp)
php php php php php{
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<strlenphp(php$stringphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$charphp php=php substrphp(php$stringphp,php php$iphp,php php1php)php;
php php php php php php php php php php php php ifphp php(ordphp(php$charphp)<php3php2php)php php{
php php php php php php php php php php php php php php php php php$hexphp php=php dechexphp(ordphp(php$charphp)php)php;
php php php php php php php php php php php php php php php php ifphp php(strlenphp(php$hexphp)php php=php=php php1php)php php$hexphp php=php php'php0php'php php.php php$hexphp;
php php php php php php php php php php php php php php php php php$stringphp php=php strphp_replacephp(php$charphp,php php'php\php\php'php php.php php$hexphp,php php$stringphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp allphp Hexphp expressionsphp php(php"php\HEXphp"php)php tophp theirphp originalphp ASCIIphp characters
php php php php php php*
php php php php php php*php php@seephp Netphp_LDAPphp2php_Utilphp:php:hexphp2ascphp(php)php fromphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>php,
php php php php php php*php heavilyphp basedphp onphp workphp fromphp DavidSmithphp@byuphp.net
php php php php php php*php php@linkphp httpphp:php/php/pearphp.phpphp.netphp/packagephp/Netphp_LDAPphp2
php php php php php php*php php@authorphp Benediktphp Hallingerphp php<beniphp@phpphp.netphp>php,php heavilyphp basedphp onphp workphp fromphp DavidSmithphp@byuphp.net
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stringphp Stringphp tophp convert
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp hexphp3php2ToAscphp(php$stringphp)
php php php php php{
php php php php php php php php php$stringphp php=php pregphp_replacephp(php"php/php\php\php\php(php[php0php-php9Aphp-Faphp-fphp]php{php2php}php)php/ephp"php,php php"php'php'php.chrphp(hexdecphp(php'php\php\php1php'php)php)php.php'php'php"php,php php$stringphp)php;
php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anyphp valuephp tophp anphp LDAPphp-compatiblephp valuephp.
php php php php php php*
php php php php php php*php Byphp settingphp thephp php<varphp>php$type<php/varphp>php-parameterphp thephp conversionphp ofphp aphp certain
php php php php php php*php typephp canphp bephp forced
php php php php php php*
php php php php php php*php php@todophp writephp morephp tests
php php php php php php*
php php php php php php*php php@paramphp php php php mixedphp php php php php php$valuephp php php php php Thephp valuephp tophp convert
php php php php php php*php php@paramphp php php php intphp php php php php php php php$ytpephp php php php php php Thephp conversionphp typephp tophp use
php php php php php php*php php@returnphp php php php string
php php php php php php*php php@throwsphp php php php Zendphp_Ldapphp_Converterphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp toLdapphp(php$valuephp,php php$typephp php=php selfphp:php:STANDARDphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:BOOLEANphp:
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toldapBooleanphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:GENERALIZEDphp_TIMEphp:
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toLdapDatetimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_intphp(php$valuephp)php php|php|php isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp php(stringphp)php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toldapBooleanphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_objectphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toLdapDatetimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$valuephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toLdapDatetimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toLdapSerializephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:toLdapSerializephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_resourcephp(php$valuephp)php php&php&php getphp_resourcephp_typephp(php$valuephp)php php=php=php=php php'streamphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp streamphp_getphp_contentsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Converterphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp datephp-entityphp tophp anphp LDAPphp-compatiblephp datephp-string
php php php php php php*
php php php php php php*php Thephp datephp-entityphp php<varphp>php$date<php/varphp>php canphp bephp eitherphp aphp timestampphp,php a
php php php php php php*php DateTimephp Objectphp,php aphp stringphp thatphp isphp parseablephp byphp strtotimephp(php)php orphp aphp Zendphp_Date
php php php php php php*php Objectphp.
php php php php php php*
php php php php php php*php php@paramphp php php php integerphp|stringphp|DateTimtphp|Zendphp_Datephp php php php php php php php php$datephp php php php Thephp datephp-entity
php php php php php php*php php@paramphp php php php booleanphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$asUtcphp php php php Whetherphp tophp returnphp thephp LDAPphp-compatiblephp datephp-string
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php asphp UTCphp orphp asphp localphp value
php php php php php php*php php@returnphp php php php string
php php php php php php*php php@throwsphp php php php InvalidArgumentException
php php php php php php*php/
php php php php publicphp staticphp functionphp toLdapDateTimephp(php$datephp,php php$asUtcphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$datephp instanceofphp DateTimephp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_intphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php newphp DateTimephp(php'php@php'php php.php php$datephp)php;
php php php php php php php php php php php php php php php php php$datephp-php>setTimezonephp(newphp DateTimeZonephp(datephp_defaultphp_timezonephp_getphp(php)php)php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php newphp DateTimephp(php$datephp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php php php php php$datephp php=php newphp DateTimephp(php$datephp-php>getphp(Zendphp_Datephp:php:ISOphp_php8php6php0php1php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Parameterphp php$datephp isphp notphp ofphp thephp expectedphp typephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$timezonephp php=php php$datephp-php>formatphp(php'Ophp'php)php;
php php php php php php php php ifphp php(truephp php=php=php=php php$asUtcphp)php php{
php php php php php php php php php php php php php$datephp-php>setTimezonephp(newphp DateTimeZonephp(php'UTCphp'php)php)php;
php php php php php php php php php php php php php$timezonephp php=php php'Zphp'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php php'php+php0php0php0php0php'php php=php=php=php php$timezonephp php)php php{
php php php php php php php php php php php php php$timezonephp php=php php'Zphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$datephp-php>formatphp(php'YmdHisphp'php)php php.php php$timezonephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp aphp booleanphp valuephp tophp anphp LDAPphp-compatiblephp string
php php php php php php*
php php php php php php*php Thisphp convertsphp aphp booleanphp valuephp ofphp TRUEphp,php anphp integerphp-valuephp ofphp php1php andphp a
php php php php php php*php casephp-insensitivephp stringphp php'truephp'php tophp anphp LDAPphp-compatiblephp php'TRUEphp'php.php Allphp other
php php php php php php*php otherphp valuesphp arephp convertedphp tophp anphp LDAPphp-compatiblephp php'FALSEphp'php.
php php php php php php*
php php php php php php*php php@paramphp php php php booleanphp|integerphp|stringphp php php php php php php php php$valuephp php php php Thephp booleanphp valuephp tophp encode
php php php php php php*php php@returnphp php php php string
php php php php php php*php/
php php php php publicphp staticphp functionphp toLdapBooleanphp(php$valuephp)
php php php php php{
php php php php php php php php php$returnphp php=php php'FALSEphp'php;
php php php php php php php php ifphp php(php!isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(truephp php=php=php=php php$valuephp php|php|php php'truephp'php php=php=php=php strtolowerphp(php$valuephp)php php|php|php php1php php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php$returnphp php=php php'TRUEphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp anyphp valuephp forphp storagephp inphp LDAP
php php php php php php*
php php php php php php*php php@paramphp php php php mixedphp php php php php php php php php$valuephp php php php Thephp valuephp tophp serialize
php php php php php php*php php@returnphp php php php string
php php php php php php*php/
php php php php publicphp staticphp functionphp toLdapSerializephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp serializephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anphp LDAPphp-compatiblephp valuephp tophp aphp correspondingphp PHPphp-valuephp.
php php php php php php*
php php php php php php*php Byphp settingphp thephp php<varphp>php$type<php/varphp>php-parameterphp thephp conversionphp ofphp aphp certain
php php php php php php*php typephp canphp bephp forced
php php php php php php*php php.
php php php php php php*php php@paramphp php php php stringphp php php php php$valuephp php php php php php php php php php php php php Thephp valuephp tophp convert
php php php php php php*php php@paramphp php php php intphp php php php php php php php php$ytpephp php php php php php php php php php php php php php Thephp conversionphp typephp tophp use
php php php php php php*php php@paramphp php php php booleanphp php php php php$dateTimeAsUtcphp php php php Returnphp DateTimephp valuesphp inphp UTCphp timezone
php php php php php php*php php@returnphp php php php mixed
php php php php php php*php php@throwsphp php php php Zendphp_Ldapphp_Converterphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromLdapphp(php$valuephp,php php$typephp php=php selfphp:php:STANDARDphp,php php$dateTimeAsUtcphp php=php truephp)
php php php php php{
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp selfphp:php:BOOLEANphp:
php php php php php php php php php php php php php php php php returnphp selfphp:php:fromldapBooleanphp(php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:GENERALIZEDphp_TIMEphp:
php php php php php php php php php php php php php php php php returnphp selfphp:php:fromLdapDateTimephp(php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php(floatphp)php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php'TRUEphp'php php=php=php=php php$valuephp php|php|php php'FALSEphp'php php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:fromLdapBooleanphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php\dphp{php4php}php[php\dphp\php+php\php-Zphp\php.php]php*php$php/php'php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:fromLdapDateTimephp(php$valuephp,php php$dateTimeAsUtcphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:fromLdapUnserializephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(UnexpectedValueExceptionphp php$ephp)php php{php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anphp LDAPphp-Generalizedphp-Timephp-entryphp intophp aphp DateTimephp-Object
php php php php php php*
php php php php php php*php CAVEATphp:php Thephp DateTimephp-Objectphp returnedphp willphp alwasyphp bephp setphp tophp UTCphp-Timezonephp.
php php php php php php*
php php php php php php*php php@paramphp php php php stringphp php php php php php php php php$datephp php php php Thephp generalizedphp-Time
php php php php php php*php php@paramphp php php php booleanphp php php php php php php php php$asUtcphp php php php Returnphp thephp DateTimephp withphp UTCphp timezone
php php php php php php*php php@returnphp php php php DateTime
php php php php php php*php php@throwsphp php php php InvalidArgumentExceptionphp ifphp aphp nonphp-parseablephp-formatphp isphp given
php php php php php php*php/
php php php php publicphp staticphp functionphp fromLdapDateTimephp(php$datephp,php php$asUtcphp php=php truephp)
php php php php php{
php php php php php php php php php$datepartphp php=php arrayphp php(php)php;
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(php\dphp{php4php}php)php/php'php,php php$datephp,php php$datepartphp)php php)php php{
php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$datepartphp[php1php]php <php php4php)php php{
php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(toophp shortphp)php'php)php;
php php php php php php php php php}

php php php php php php php php php$timephp php=php arrayphp php(
php php php php php php php php php php php php php/php/php Thephp yearphp isphp mandatoryphp!
php php php php php php php php php php php php php'yearphp'php php php php=php>php php$datepartphp[php1php]php,
php php php php php php php php php php php php php'monthphp'php php php=php>php php1php,
php php php php php php php php php php php php php'dayphp'php php php php php=php>php php1php,
php php php php php php php php php php php php php'hourphp'php php php php=php>php php0php,
php php php php php php php php php php php php php'minutephp'php php=php>php php0php,
php php php php php php php php php php php php php'secondphp'php php=php>php php0php,
php php php php php php php php php php php php php'offdirphp'php php=php>php php'php+php'php,
php php php php php php php php php php php php php'offsethoursphp'php php=php>php php0php,
php php php php php php php php php php php php php'offsetminutesphp'php php=php>php php0
php php php php php php php php php)php;

php php php php php php php php php$lengthphp php=php strlenphp(php$datephp)php;

php php php php php php php php php/php/php Checkphp forphp monthphp.
php php php php php php php php ifphp php(php$lengthphp php>php=php php6php)php php{
php php php php php php php php php php php php php$monthphp php=php substrphp(php$datephp,php php4php,php php2php)php;
php php php php php php php php php php php php ifphp php(php$monthphp <php php1php php|php|php php$monthphp php>php php1php2php)php php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp monthphp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$timephp[php'monthphp'php]php php=php php$monthphp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp day
php php php php php php php php ifphp php(php$lengthphp php>php=php php8php)php php{
php php php php php php php php php php php php php$dayphp php=php substrphp(php$datephp,php php6php,php php2php)php;
php php php php php php php php php php php php ifphp php(php$dayphp <php php1php php|php|php php$dayphp php>php php3php1php)php php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp dayphp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$timephp[php'dayphp'php]php php=php php$dayphp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp Hour
php php php php php php php php ifphp php(php$lengthphp php>php=php php1php0php)php php{
php php php php php php php php php php php php php$hourphp php=php substrphp(php$datephp,php php8php,php php2php)php;
php php php php php php php php php php php php ifphp php(php$hourphp <php php0php php|php|php php$hourphp php>php php2php3php)php php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp hourphp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$timephp[php'hourphp'php]php php=php php$hourphp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp minute
php php php php php php php php ifphp php(php$lengthphp php>php=php php1php2php)php php{
php php php php php php php php php php php php php$minutephp php=php substrphp(php$datephp,php php1php0php,php php2php)php;
php php php php php php php php php php php php ifphp php(php$minutephp <php php0php php|php|php php$minutephp php>php php5php9php)php php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp minutephp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$timephp[php'minutephp'php]php php=php php$minutephp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp seconds
php php php php php php php php ifphp php(php$lengthphp php>php=php php1php4php)php php{
php php php php php php php php php php php php php$secondphp php=php substrphp(php$datephp,php php1php2php,php php2php)php;
php php php php php php php php php php php php ifphp php(php$secondphp <php php0php php|php|php php$secondphp php>php php5php9php)php php{
php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp secondphp)php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$timephp[php'secondphp'php]php php=php php$secondphp;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp Offset
php php php php php php php php php$offsetRegExphp php=php php'php/php(php[Zphp\php-php\php+php]php)php(php\dphp{php2php}php\php'php?php)php{php0php,php1php}php(php\dphp{php2php}php\php'php?php)php{php0php,php1php}php$php/php'php;
php php php php php php php php php$offphp php php php php php php php php php=php arrayphp php(php)php;
php php php php php php php php ifphp php(pregphp_matchphp(php$offsetRegExphp,php php$datephp,php php$offphp)php)php php{
php php php php php php php php php php php php php$offsetphp php=php php$offphp[php1php]php;
php php php php php php php php php php php php ifphp php(php$offsetphp php=php=php php'php+php'php php|php|php php$offsetphp php=php=php php'php-php'php)php php{
php php php php php php php php php php php php php php php php php$timephp[php'offdirphp'php]php php=php php$offsetphp;
php php php php php php php php php php php php php php php php php/php/php wephp havephp anphp offsetphp,php sophp letsphp calculatephp itphp.
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$offphp[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$offsetHoursphp php=php substrphp(php$offphp[php2php]php,php php0php,php php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$offsetHoursphp <php php0php php|php|php php$offsetHoursphp php>php php1php2php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp offsetphp hourphp)php'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$timephp[php'offsethoursphp'php]php php=php php$offsetHoursphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$offphp[php3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$offsetMinutesphp php=php substrphp(php$offphp[php3php]php,php php0php,php php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$offsetMinutesphp <php php0php php|php|php php$offsetMinutesphp php>php php5php9php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Invalidphp datephp formatphp foundphp php(invalidphp offsetphp minutephp)php'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$timephp[php'offsetminutesphp'php]php php=php php$offsetMinutesphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Rawphp-Dataphp isphp presentphp,php sophp letsphp createphp aphp DateTimephp-Objectphp fromphp itphp.
php php php php php php php php php$offsetphp php=php php$timephp[php'offdirphp'php]
php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'offsethoursphp'php]php,php2php,php'php0php'php,STRphp_PADphp_LEFTphp)
php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'offsetminutesphp'php]php,php2php,php'php0php'php,STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$timestringphp php=php php$timephp[php'yearphp'php]php php.php php'php-php'
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'monthphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php'php-php'
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'dayphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php'php php'
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'hourphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php'php:php'
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'minutephp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php'php:php'
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'secondphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)
php php php php php php php php php php php php php php php php php php php php php.php php$timephp[php'offdirphp'php]
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'offsethoursphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)
php php php php php php php php php php php php php php php php php php php php php.php strphp_padphp(php$timephp[php'offsetminutesphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php$datephp php=php newphp DateTimephp(php$timestringphp)php;
php php php php php php php php ifphp php(php$asUtcphp)php php{
php php php php php php php php php php php php php$datephp-php>setTimezonephp(newphp DateTimeZonephp(php'UTCphp'php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp anphp LDAPphp-compatiblephp booleanphp valuephp intophp aphp PHPphp-compatiblephp one
php php php php php php*
php php php php php php*php php@paramphp php php php stringphp php php php php php php php php$valuephp php php php php php php php Thephp valuephp tophp convert
php php php php php php*php php@returnphp php php php boolean
php php php php php php*php php@throwsphp php php php InvalidArgumentException
php php php php php php*php/
php php php php publicphp staticphp functionphp fromLdapBooleanphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php php'TRUEphp'php php=php=php=php php$valuephp php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp ifphp php(php php'FALSEphp'php php=php=php=php php$valuephp php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp InvalidArgumentExceptionphp(php'Thephp givenphp valuephp isphp notphp aphp booleanphp valuephp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Unserializephp aphp serializedphp valuephp tophp returnphp thephp correspondingphp object
php php php php php php*
php php php php php php*php php@paramphp php php php stringphp php php php php php php php php$valuephp php php php Thephp valuephp tophp convert
php php php php php php*php php@returnphp php php php mixed
php php php php php php*php php@throwsphp php php php UnexpectedValueException
php php php php php php*php/
php php php php publicphp staticphp functionphp fromLdapUnserializephp(php$valuephp)
php php php php php{
php php php php php php php php php$vphp php=php php@unserializephp(php$valuephp)php;
php php php php php php php php ifphp php(falsephp=php=php=php$vphp php&php&php php$valuephp php!php=php php'bphp:php0php;php'php)php php{
php php php php php php php php php php php php throwphp newphp UnexpectedValueExceptionphp(php'Thephp givenphp valuephp couldphp notphp bephp unserializedphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$vphp;
php php php php php}
php}