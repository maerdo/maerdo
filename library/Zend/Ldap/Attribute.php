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
php php*php php@versionphp php php php php$Idphp:php Attributephp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Converter
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Converterphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Attributephp isphp aphp collectionphp ofphp LDAPphp attributephp relatedphp functionsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Attribute
php{
php php php php constphp PASSWORDphp_HASHphp_MDphp5php php php php=php php'mdphp5php'php;
php php php php constphp PASSWORDphp_HASHphp_SMDphp5php php php=php php'smdphp5php'php;
php php php php constphp PASSWORDphp_HASHphp_SHAphp php php php=php php'shaphp'php;
php php php php constphp PASSWORDphp_HASHphp_SSHAphp php php=php php'sshaphp'php;
php php php php constphp PASSWORDphp_UNICODEPWDphp php=php php'unicodePwdphp'php;

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php$data
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$attribName
php php php php php php*php php@paramphp php scalarphp|arrayphp|Traversablephp php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php$append
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setAttributephp(arrayphp php&php$dataphp,php php$attribNamephp,php php$valuephp,php php$appendphp php=php falsephp)
php php php php php{
php php php php php php php php php$attribNamephp php=php strtolowerphp(php$attribNamephp)php;
php php php php php php php php php$valArrayphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php php|php|php php(php$valuephp instanceofphp Traversablephp)php)
php php php php php php php php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$vphp)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$vphp php=php selfphp:php:php_valueToLdapphp(php$vphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$vphp php!php=php=php nullphp)php php$valArrayphp[php]php php=php php$vphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(php$valuephp php!php=php=php nullphp)
php php php php php php php php php{
php php php php php php php php php php php php php$valuephp php=php selfphp:php:php_valueToLdapphp(php$valuephp)php;
php php php php php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php$valArrayphp[php]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$appendphp php=php=php=php truephp php&php&php issetphp(php$dataphp[php$attribNamephp]php)php)
php php php php php php php php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$dataphp[php$attribNamephp]php)php)php php$dataphp[php$attribNamephp]php php=php arrayphp(php$dataphp[php$attribNamephp]php)php;
php php php php php php php php php php php php php$dataphp[php$attribNamephp]php php=php arrayphp_mergephp(php$dataphp[php$attribNamephp]php,php php$valArrayphp)php;
php php php php php php php php php}
php php php php php php php php else
php php php php php php php php php{
php php php php php php php php php php php php php$dataphp[php$attribNamephp]php php=php php$valArrayphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$data
php php php php php php*php php@paramphp php stringphp php php$attribName
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@returnphp arrayphp|mixed
php php php php php php*php/
php php php php publicphp staticphp functionphp getAttributephp(arrayphp php$dataphp,php php$attribNamephp,php php$indexphp php=php nullphp)
php php php php php{
php php php php php php php php php$attribNamephp php=php strtolowerphp(php$attribNamephp)php;
php php php php php php php php ifphp php(php$indexphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$attribNamephp]php)php)php returnphp arrayphp(php)php;
php php php php php php php php php php php php php$retArrayphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$dataphp[php$attribNamephp]php asphp php$vphp)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php$retArrayphp[php]php php=php selfphp:php:php_valueFromLdapphp(php$vphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$retArrayphp;
php php php php php php php php php}php elsephp ifphp php(isphp_intphp(php$indexphp)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$attribNamephp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$indexphp php>php=php php0php php&php&php php$indexphp<countphp(php$dataphp[php$attribNamephp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp selfphp:php:php_valueFromLdapphp(php$dataphp[php$attribNamephp]php[php$indexphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp givenphp valuephp(sphp)php existphp inphp thephp attribute
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php php php php php php$data
php php php php php php*php php@paramphp stringphp php php php php php php$attribName
php php php php php php*php php@paramphp mixedphp|arrayphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp attributeHasValuephp(arrayphp php&php$dataphp,php php$attribNamephp,php php$valuephp)
php php php php php{
php php php php php php php php php$attribNamephp php=php strtolowerphp(php$attribNamephp)php;
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$attribNamephp]php)php)php returnphp falsephp;

php php php php php php php php ifphp php(isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$valuephp asphp php$vphp)php php{
php php php php php php php php php php php php php$vphp php=php selfphp:php:php_valueToLdapphp(php$vphp)php;
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$vphp,php php$dataphp[php$attribNamephp]php,php truephp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp duplicatephp valuesphp fromphp aphp LDAPphp attribute
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php$data
php php php php php php*php php@paramphp stringphp php$attribName
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeDuplicatesFromAttributephp(arrayphp php&php$dataphp,php php$attribNamephp)
php php php php php{
php php php php php php php php php$attribNamephp php=php strtolowerphp(php$attribNamephp)php;
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$attribNamephp]php)php)php returnphp;
php php php php php php php php php$dataphp[php$attribNamephp]php php=php arrayphp_valuesphp(arrayphp_uniquephp(php$dataphp[php$attribNamephp]php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp givenphp valuesphp fromphp aphp LDAPphp attribute
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php php php php php php$data
php php php php php php*php php@paramphp stringphp php php php php php php$attribName
php php php php php php*php php@paramphp mixedphp|arrayphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeFromAttributephp(arrayphp php&php$dataphp,php php$attribNamephp,php php$valuephp)
php php php php php{
php php php php php php php php php$attribNamephp php=php strtolowerphp(php$attribNamephp)php;
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$attribNamephp]php)php)php returnphp;

php php php php php php php php ifphp php(isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$valArrayphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$valuephp asphp php$vphp)
php php php php php php php php php{
php php php php php php php php php php php php php$vphp php=php selfphp:php:php_valueToLdapphp(php$vphp)php;
php php php php php php php php php php php php ifphp php(php$vphp php!php=php=php nullphp)php php$valArrayphp[php]php php=php php$vphp;
php php php php php php php php php}

php php php php php php php php php$resultArrayphp php=php php$dataphp[php$attribNamephp]php;
php php php php php php php php foreachphp php(php$valArrayphp asphp php$rvphp)php php{
php php php php php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$resultArrayphp,php php$rvphp)php;
php php php php php php php php php php php php foreachphp php(php$keysphp asphp php$kphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$resultArrayphp[php$kphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$resultArrayphp php=php arrayphp_valuesphp(php$resultArrayphp)php;
php php php php php php php php php$dataphp[php$attribNamephp]php php=php php$resultArrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php privatephp staticphp functionphp php_valueToLdapphp(php$valuephp)
php php php php php{
php php php php php php php php returnphp Zendphp_Ldapphp_Converterphp:php:toLdapphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php privatephp staticphp functionphp php_valueFromLdapphp(php$valuephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$returnphp php=php Zendphp_Ldapphp_Converterphp:php:fromLdapphp(php$valuephp,php Zendphp_Ldapphp_Converterphp:php:STANDARDphp,php falsephp)php;
php php php php php php php php php php php php ifphp php(php$returnphp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Converterphp:php:toLdapDateTimephp(php$returnphp,php falsephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(InvalidArgumentExceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp PHPphp dataphp typephp intophp itsphp LDAPphp representation
php php php php php php*
php php php php php php*php php@deprectedphp php php php usephp Zendphp_Ldapphp_Converterphp instead
php php php php php php*php php@paramphp php php php php php php php php php mixedphp php$value
php php php php php php*php php@returnphp php php php php php php php php stringphp|nullphp php-php nullphp ifphp thephp PHPphp dataphp typephp cannotphp bephp convertedphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp convertToLdapValuephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_valueToLdapphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp anphp LDAPphp valuephp intophp itsphp PHPphp dataphp type
php php php php php php*
php php php php php php*php php@deprectedphp php php php usephp Zendphp_Ldapphp_Converterphp instead
php php php php php php*php php@paramphp php php php php php php php php php stringphp php$value
php php php php php php*php php@returnphp php php php php php php php php mixed
php php php php php php*php/
php php php php publicphp staticphp functionphp convertFromLdapValuephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_valueFromLdapphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp timestampphp intophp itsphp LDAPphp datephp/timephp representation
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$value
php php php php php php*php php@paramphp php booleanphp php$utc
php php php php php php*php php@returnphp stringphp|nullphp php-php nullphp ifphp thephp valuephp cannotphp bephp convertedphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp convertToLdapDateTimeValuephp(php$valuephp,php php$utcphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_valueToLdapDateTimephp(php$valuephp,php php$utcphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp LDAPphp datephp/timephp representationphp intophp aphp timestamp
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp integerphp|nullphp php-php nullphp ifphp thephp valuephp cannotphp bephp convertedphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp convertFromLdapDateTimeValuephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_valueFromLdapDateTimephp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp passwordphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php$data
php php php php php php*php php@paramphp php stringphp php php php php php php$password
php php php php php php*php php@paramphp php stringphp php php php php php php$hashType
php php php php php php*php php@paramphp php stringphp|nullphp php$attribName
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp setPasswordphp(arrayphp php&php$dataphp,php php$passwordphp,php php$hashTypephp php=php selfphp:php:PASSWORDphp_HASHphp_MDphp5php,
php php php php php php php php php$attribNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$attribNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$hashTypephp php=php=php=php selfphp:php:PASSWORDphp_UNICODEPWDphp)php php{
php php php php php php php php php php php php php php php php php$attribNamephp php=php php'unicodePwdphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$attribNamephp php=php php'userPasswordphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$hashphp php=php selfphp:php:createPasswordphp(php$passwordphp,php php$hashTypephp)php;
php php php php php php php php selfphp:php:setAttributephp(php$dataphp,php php$attribNamephp,php php$hashphp,php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp LDAPphp passwordphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$password
php php php php php php*php php@paramphp php stringphp php$hashType
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp createPasswordphp(php$passwordphp,php php$hashTypephp php=php selfphp:php:PASSWORDphp_HASHphp_MDphp5php)
php php php php php{
php php php php php php php php switchphp php(php$hashTypephp)php php{
php php php php php php php php php php php php casephp selfphp:php:PASSWORDphp_UNICODEPWDphp:
php php php php php php php php php php php php php php php php php/php*php seephp:
php php php php php php php php php php php php php php php php php php*php httpphp:php/php/msdnphp.microsoftphp.comphp/enphp-usphp/libraryphp/ccphp2php2php3php2php4php8php(PROTphp.php1php0php)php.aspx
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$passwordphp php=php php'php"php'php php.php php$passwordphp php.php php'php"php'php;
php php php php php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'mbphp_convertphp_encodingphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$passwordphp php=php mbphp_convertphp_encodingphp(php$passwordphp,php php'UTFphp-php1php6LEphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(functionphp_existsphp(php'iconvphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$passwordphp php=php iconvphp(php'UTFphp-php8php'php,php php'UTFphp-php1php6LEphp'php,php php$passwordphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$lenphp php=php strlenphp(php$passwordphp)php;
php php php php php php php php php php php php php php php php php php php php php$newphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php forphp(php$iphp=php0php;php php$iphp <php php$lenphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$newphp php.php=php php$passwordphp[php$iphp]php php.php php"php\xphp0php0php"php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$passwordphp php=php php$newphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$passwordphp;
php php php php php php php php php php php php casephp selfphp:php:PASSWORDphp_HASHphp_SSHAphp:
php php php php php php php php php php php php php php php php php$saltphp php php php php=php substrphp(shaphp1php(uniqidphp(mtphp_randphp(php)php,php truephp)php,php truephp)php,php php0php,php php4php)php;
php php php php php php php php php php php php php php php php php$rawHashphp php=php shaphp1php(php$passwordphp php.php php$saltphp,php truephp)php php.php php$saltphp;
php php php php php php php php php php php php php php php php php$methodphp php php=php php'php{SSHAphp}php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:PASSWORDphp_HASHphp_SHAphp:
php php php php php php php php php php php php php php php php php$rawHashphp php=php shaphp1php(php$passwordphp,php truephp)php;
php php php php php php php php php php php php php php php php php$methodphp php php=php php'php{SHAphp}php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:PASSWORDphp_HASHphp_SMDphp5php:
php php php php php php php php php php php php php php php php php$saltphp php php php php=php substrphp(shaphp1php(uniqidphp(mtphp_randphp(php)php,php truephp)php,php truephp)php,php php0php,php php4php)php;
php php php php php php php php php php php php php php php php php$rawHashphp php=php mdphp5php(php$passwordphp php.php php$saltphp,php truephp)php php.php php$saltphp;
php php php php php php php php php php php php php php php php php$methodphp php php=php php'php{SMDphp5php}php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:PASSWORDphp_HASHphp_MDphp5php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$rawHashphp php=php mdphp5php(php$passwordphp,php truephp)php;
php php php php php php php php php php php php php php php php php$methodphp php php=php php'php{MDphp5php}php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$methodphp php.php basephp6php4php_encodephp(php$rawHashphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp datephp/timephp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php$data
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$attribName
php php php php php php*php php@paramphp php integerphp|arrayphp|Traversablephp php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php php$utc
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php php$append
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp setDateTimeAttributephp(arrayphp php&php$dataphp,php php$attribNamephp,php php$valuephp,php php$utcphp php=php falsephp,
php php php php php php php php php$appendphp php=php falsephp)
php php php php php{
php php php php php php php php php$convertedValuesphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php php|php|php php(php$valuephp instanceofphp Traversablephp)php)
php php php php php php php php php{
php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$vphp)php php{
php php php php php php php php php php php php php php php php php$vphp php=php selfphp:php:php_valueToLdapDateTimephp(php$vphp,php php$utcphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$vphp php!php=php=php nullphp)php php$convertedValuesphp[php]php php=php php$vphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$valuephp php=php selfphp:php:php_valueToLdapDateTimephp(php$valuephp,php php$utcphp)php;
php php php php php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php$convertedValuesphp[php]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php selfphp:php:setAttributephp(php$dataphp,php php$attribNamephp,php php$convertedValuesphp,php php$appendphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php integerphp php$value
php php php php php php*php php@paramphp php booleanphp php$utc
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php privatephp staticphp functionphp php_valueToLdapDateTimephp(php$valuephp,php php$utcphp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Converterphp:php:toLdapDateTimephp(php$valuephp,php php$utcphp)php;
php php php php php php php php php}
php php php php php php php php elsephp returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp datephp/timephp attributephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$data
php php php php php php*php php@paramphp php stringphp php php$attribName
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@returnphp arrayphp|integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getDateTimeAttributephp(arrayphp php$dataphp,php php$attribNamephp,php php$indexphp php=php nullphp)
php php php php php{
php php php php php php php php php$valuesphp php=php selfphp:php:getAttributephp(php$dataphp,php php$attribNamephp,php php$indexphp)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$valuesphp)php)php php{
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<countphp(php$valuesphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$newValphp php=php selfphp:php:php_valueFromLdapDateTimephp(php$valuesphp[php$iphp]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$newValphp php!php=php=php nullphp)php php$valuesphp[php$iphp]php php=php php$newValphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$newValphp php=php selfphp:php:php_valueFromLdapDateTimephp(php$valuesphp)php;
php php php php php php php php php php php php ifphp php(php$newValphp php!php=php=php nullphp)php php$valuesphp php=php php$newValphp;
php php php php php php php php php}
php php php php php php php php returnphp php$valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp|DateTimephp php$value
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php/
php php php php privatephp staticphp functionphp php_valueFromLdapDateTimephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php returnphp php$valuephp-php>formatphp(php'Uphp'php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Converterphp:php:fromLdapDateTimephp(php$valuephp,php falsephp)php-php>formatphp(php'Uphp'php)php;
php php php php php php php php php php php php php}php catchphp php(InvalidArgumentExceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp returnphp nullphp;
php php php php php}
php}