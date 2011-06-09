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
php php*php php@versionphp php php php php$Idphp:php Defaultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp isphp thephp defaultphp collectionphp iteratorphp implementation
php php*php usingphp extphp/ldap
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp implementsphp Iteratorphp,php Countable
php{
php php php php constphp ATTRIBUTEphp_TOphp_LOWERphp php php=php php1php;
php php php php constphp ATTRIBUTEphp_TOphp_UPPERphp php php=php php2php;
php php php php constphp ATTRIBUTEphp_NATIVEphp php php php php=php php3php;

php php php php php/php*php*
php php php php php php*php LDAPphp Connection
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldap
php php php php php php*php/
php php php php protectedphp php$php_ldapphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Resultphp identifierphp resource
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_resultIdphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp resultphp entryphp identifier
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_currentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp itemsphp inphp queryphp result
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_itemCountphp php=php php-php1php;

php php php php php/php*php*
php php php php php php*php Thephp methodphp thatphp willphp bephp appliedphp tophp thephp attributephp'sphp namesphp.
php php php php php php*
php php php php php php*php php@varphp php integerphp|callback
php php php php php php*php/
php php php php protectedphp php$php_attributeNameTreatmentphp php=php selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@paramphp php resourcephp php php$resultId
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Ldapphp php$ldapphp,php php$resultIdphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_ldapphp php=php php$ldapphp;
php php php php php php php php php$thisphp-php>php_resultIdphp php=php php$resultIdphp;
php php php php php php php php php$thisphp-php>php_itemCountphp php=php php@ldapphp_countphp_entriesphp(php$ldapphp-php>getResourcephp(php)php,php php$resultIdphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_itemCountphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(php$thisphp-php>php_ldapphp,php php'countingphp entriesphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closesphp thephp currentphp resultphp set
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php$isClosedphp php=php falsephp;
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_resultIdphp)php)php php{
php php php php php php php php php php php php php php$isClosedphp php=php php@ldapphp_freephp_resultphp(php$thisphp-php>php_resultIdphp)php;
php php php php php php php php php php php php php php$thisphp-php>php_resultIdphp php=php nullphp;
php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php returnphp php$isClosedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp currentphp LDAPphp connectionphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldap
php php php php php php*php/
php php php php publicphp functionphp getLdapphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ldapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp attributephp namephp treatmentphp.
php php php php php php*
php php php php php php*php Canphp eitherphp bephp onephp ofphp thephp followingphp constants
php php php php php php*php php-php Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp:php:ATTRIBUTEphp_TOphp_LOWER
php php php php php php*php php-php Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp:php:ATTRIBUTEphp_TOphp_UPPER
php php php php php php*php php-php Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp:php:ATTRIBUTEphp_NATIVE
php php php php php php*php orphp aphp validphp callbackphp acceptingphp thephp attributephp'sphp namephp asphp itphp'sphp only
php php php php php php*php argumentphp andphp returningphp thephp newphp attributephp'sphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp|callbackphp php$attributeNameTreatment
php php php php php php*php php@returnphp Zendphp_Ldapphp_Collectionphp_Iteratorphp_Defaultphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAttributeNameTreatmentphp(php$attributeNameTreatmentphp)
php php php php php{
php php php php php php php php ifphp php(isphp_callablephp(php$attributeNameTreatmentphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$attributeNameTreatmentphp)php php&php&php php!functionphp_existsphp(php$attributeNameTreatmentphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeNameTreatmentphp php=php selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$attributeNameTreatmentphp)php php&php&
php php php php php php php php php php php php php php php php php php php php php!methodphp_existsphp(php$attributeNameTreatmentphp[php0php]php,php php$attributeNameTreatmentphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeNameTreatmentphp php=php selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeNameTreatmentphp php=php php$attributeNameTreatmentphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$attributeNameTreatmentphp php=php php(intphp)php$attributeNameTreatmentphp;
php php php php php php php php php php php php switchphp php(php$attributeNameTreatmentphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_TOphp_UPPERphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_NATIVEphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeNameTreatmentphp php=php php$attributeNameTreatmentphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeNameTreatmentphp php=php selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentlyphp setphp attributephp namephp treatment
php php php php php php*
php php php php php php*php php@returnphp integerphp|callback
php php php php php php*php/
php php php php publicphp functionphp getAttributeNameTreatmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_attributeNameTreatmentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp itemsphp inphp currentphp result
php php php php php php*php Implementsphp Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_itemCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$entryphp php=php arrayphp(php'dnphp'php php=php>php php$thisphp-php>keyphp(php)php)php;
php php php php php php php php php$berphp_identifierphp php=php nullphp;
php php php php php php php php php$namephp php=php php@ldapphp_firstphp_attributephp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_currentphp,
php php php php php php php php php php php php php$berphp_identifierphp)php;
php php php php php php php php whilephp php(php$namephp)php php{
php php php php php php php php php php php php php$dataphp php=php php@ldapphp_getphp_valuesphp_lenphp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_currentphp,php php$namephp)php;
php php php php php php php php php php php php unsetphp(php$dataphp[php'countphp'php]php)php;

php php php php php php php php php php php php switchphp(php$thisphp-php>php_attributeNameTreatmentphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_TOphp_LOWERphp:
php php php php php php php php php php php php php php php php php php php php php$attrNamephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_TOphp_UPPERphp:
php php php php php php php php php php php php php php php php php php php php php$attrNamephp php=php strtoupperphp(php$namephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:ATTRIBUTEphp_NATIVEphp:
php php php php php php php php php php php php php php php php php php php php php$attrNamephp php=php php$namephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$attrNamephp php=php callphp_userphp_funcphp(php$thisphp-php>php_attributeNameTreatmentphp,php php$namephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$entryphp[php$attrNamephp]php php=php php$dataphp;
php php php php php php php php php php php php php$namephp php=php php@ldapphp_nextphp_attributephp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_currentphp,
php php php php php php php php php php php php php php php php php$berphp_identifierphp)php;
php php php php php php php php php}
php php php php php php php php ksortphp(php$entryphp,php SORTphp_LOCALEphp_STRINGphp)php;
php php php php php php php php returnphp php$entryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp resultphp itemphp key
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_resourcephp(php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php$currentDnphp php=php php@ldapphp_getphp_dnphp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_currentphp)php;
php php php php php php php php php php php php ifphp php(php$currentDnphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Ldapphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(php$thisphp-php>php_ldapphp,php php'gettingphp dnphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$currentDnphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php@ldapphp_nextphp_entryphp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_currentphp)php;
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Ldapphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$msgphp php=php php$thisphp-php>php_ldapphp-php>getLastErrorphp(php$codephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$codephp php=php=php=php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_SIZELIMITphp_EXCEEDEDphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php wephp havephp reachedphp thephp sizephp limitphp enforcedphp byphp thephp server
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$codephp php>php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_SUCCESSphp)php php{
php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(php$thisphp-php>php_ldapphp,php php'gettingphp nextphp entryphp php(php'php php.php php$msgphp php.php php'php)php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp resultphp item
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>php_resultIdphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php@ldapphp_firstphp_entryphp(php$thisphp-php>php_ldapphp-php>getResourcephp(php)php,php php$thisphp-php>php_resultIdphp)php;
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Ldapphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp php=php=php=php falsephp php&php&
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ldapphp-php>getLastErrorCodephp(php)php php>php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_SUCCESSphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(php$thisphp-php>php_ldapphp,php php'gettingphp firstphp entryphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp resultphp item
php php php php php php*php afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(isphp_resourcephp(php$thisphp-php>php_currentphp)php)php;
php php php php php}

php}