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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp php*php/
requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp.phpphp'php;

php/php*php*
php php*php Zendphp_Servicephp_ReCaptchaphp_MailHide
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php MailHidephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp extendsphp Zendphp_Servicephp_ReCaptcha
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Encryptionphp constants
php php php php php php*php/
php php php php constphp ENCRYPTIONphp_MODEphp php=php MCRYPTphp_MODEphp_CBCphp;
php php php php constphp ENCRYPTIONphp_CIPHERphp php=php MCRYPTphp_RIJNDAELphp_php1php2php8php;
php php php php constphp ENCRYPTIONphp_BLOCKphp_SIZEphp php=php php1php6php;
php php php php constphp ENCRYPTIONphp_IVphp php=php php"php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php\php0php"php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Urlphp tophp thephp mailhidephp server
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp MAILHIDEphp_SERVERphp php=php php'httpphp:php/php/mailhidephp.recaptchaphp.netphp/dphp'php;

php php php php php/php*php*
php php php php php php*php Thephp emailphp addressphp tophp protect
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_emailphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Validatephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_emailValidatorphp;

php php php php php/php*php*
php php php php php php*php Binaryphp representationphp ofphp thephp privatephp key
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_privateKeyPackedphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp localphp partphp ofphp thephp email
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_emailLocalPartphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp domainphp partphp ofphp thephp email
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_emailDomainPartphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Localphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicKey
php php php php php php*php php@paramphp stringphp php$privateKey
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$publicKeyphp php=php nullphp,php php$privateKeyphp php=php nullphp,php php$emailphp php=php nullphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php*php Requirephp thephp mcryptphp extensionphp tophp bephp loadedphp php*php/
php php php php php php php php php$thisphp-php>php_requireMcryptphp(php)php;

php php php php php php php php php/php*php Ifphp optionsphp isphp aphp Zendphp_Configphp objectphp wephp wantphp tophp convertphp itphp tophp anphp arrayphp sophp wephp canphp mergephp itphp withphp thephp defaultphp optionsphp php*php/
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php Mergephp ifphp neededphp php*php/
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$thisphp-php>getDefaultOptionsphp(php)php,php php$optionsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getDefaultOptionsphp(php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$publicKeyphp,php php$privateKeyphp,php nullphp,php php$optionsphp)php;

php php php php php php php php ifphp php(php$emailphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEmailphp(php$emailphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp emailValidator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Validatephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getEmailValidatorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_emailValidatorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setEmailValidatorphp(newphp Zendphp_Validatephp_EmailAddressphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_emailValidatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp emailphp validator
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Validatephp_Interfacephp php$validator
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_MailHide
php php php php php php*php/
php php php php publicphp functionphp setEmailValidatorphp(Zendphp_Validatephp_Interfacephp php$validatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_emailValidatorphp php=php php$validatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Seephp ifphp thephp mcryptphp extensionphp isphp available
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_requireMcryptphp(php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'mcryptphp'php)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/MailHidephp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp(php'Usephp ofphp thephp Zendphp_Servicephp_ReCaptchaphp_MailHidephp componentphp requiresphp thephp mcryptphp extensionphp tophp bephp enabledphp inphp PHPphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp asphp string
php php php php php php*
php php php php php php*php Whenphp thephp instancephp isphp usedphp asphp aphp stringphp itphp willphp displayphp thephp emailphp addressphp.php Sincephp wephp canphp't
php php php php php php*php throwphp exceptionsphp withinphp thisphp methodphp wephp willphp triggerphp aphp userphp warningphp insteadphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>getHtmlphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$returnphp php=php php'php'php;
php php php php php php php php php php php php triggerphp_errorphp(php$ephp-php>getMessagephp(php)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp setphp ofphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDefaultOptionsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'encodingphp'php php php php php php php php=php>php php'UTFphp-php8php'php,
php php php php php php php php php php php php php'linkTitlephp'php php php php php php php=php>php php'Revealphp thisphp ephp-mailphp addressphp'php,
php php php php php php php php php php php php php'linkHiddenTextphp'php php=php>php php'php.php.php.php'php,
php php php php php php php php php php php php php'popupWidthphp'php php php php php php=php>php php5php0php0php,
php php php php php php php php php php php php php'popupHeightphp'php php php php php=php>php php3php0php0php,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp thephp setPrivateKeyphp method
php php php php php php*
php php php php php php*php Overridephp thephp parentphp methodphp tophp storephp aphp binaryphp representationphp ofphp thephp privatephp keyphp asphp wellphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$privateKey
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_MailHide
php php php php php php*php/
php php php php publicphp functionphp setPrivateKeyphp(php$privateKeyphp)
php php php php php{
php php php php php php php php parentphp:php:setPrivateKeyphp(php$privateKeyphp)php;

php php php php php php php php php/php*php Packphp thephp privatephp keyphp intophp aphp binaryphp stringphp php*php/
php php php php php php php php php$thisphp-php>php_privateKeyPackedphp php=php packphp(php'Hphp*php'php,php php$thisphp-php>php_privateKeyphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp emailphp property
php php php php php php*
php php php php php php*php Thisphp methodphp willphp setphp thephp emailphp propertyphp alongphp withphp thephp localphp andphp domainphp parts
php php php php php php*
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_MailHide
php php php php php php*php/
php php php php publicphp functionphp setEmailphp(php$emailphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_emailphp php=php php$emailphp;

php php php php php php php php php$validatorphp php=php php$thisphp-php>getEmailValidatorphp(php)php;
php php php php php php php php ifphp php(php!php$validatorphp-php>isValidphp(php$emailphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/MailHidephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp(php'Invalidphp emailphp addressphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$emailPartsphp php=php explodephp(php'php@php'php,php php$emailphp,php php2php)php;

php php php php php php php php php/php*php Decidephp onphp howphp muchphp ofphp thephp localphp partphp wephp wantphp tophp revealphp php*php/
php php php php php php php php ifphp php(strlenphp(php$emailPartsphp[php0php]php)php <php=php php4php)php php{
php php php php php php php php php php php php php$emailPartsphp[php0php]php php=php substrphp(php$emailPartsphp[php0php]php,php php0php,php php1php)php;
php php php php php php php php php}php elsephp ifphp php(strlenphp(php$emailPartsphp[php0php]php)php <php=php php6php)php php{
php php php php php php php php php php php php php$emailPartsphp[php0php]php php=php substrphp(php$emailPartsphp[php0php]php,php php0php,php php3php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$emailPartsphp[php0php]php php=php substrphp(php$emailPartsphp[php0php]php,php php0php,php php4php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_emailLocalPartphp php=php php$emailPartsphp[php0php]php;
php php php php php php php php php$thisphp-php>php_emailDomainPartphp php=php php$emailPartsphp[php1php]php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp emailphp property
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEmailphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_emailphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp localphp partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEmailLocalPartphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_emailLocalPartphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp domainphp partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEmailDomainPartphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_emailDomainPartphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp HTMLphp codephp neededphp forphp thephp mailphp hide
php php php php php php*
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHtmlphp(php$emailphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$emailphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setEmailphp(php$emailphp)php;
php php php php php php php php php}php elseifphp php(nullphp php=php=php=php php(php$emailphp php=php php$thisphp-php>getEmailphp(php)php)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/MailHidephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp(php'Missingphp emailphp addressphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_publicKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/MailHidephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp(php'Missingphp publicphp keyphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_privateKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/MailHidephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_MailHidephp_Exceptionphp(php'Missingphp privatephp keyphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php Generatephp thephp urlphp php*php/
php php php php php php php php php$urlphp php=php php$thisphp-php>php_getUrlphp(php)php;

php php php php php php php php php$encphp php=php php$thisphp-php>getOptionphp(php'encodingphp'php)php;

php php php php php php php php php/php*php Genratephp thephp HTMLphp usedphp tophp representphp thephp emailphp addressphp php*php/
php php php php php php php php php$htmlphp php=php htmlentitiesphp(php$thisphp-php>getEmailLocalPartphp(php)php,php ENTphp_COMPATphp,php php$encphp)
php php php php php php php php php php php php php.php php'php<aphp hrefphp=php"php'
php php php php php php php php php php php php php php php php php.php htmlentitiesphp(php$urlphp,php ENTphp_COMPATphp,php php$encphp)
php php php php php php php php php php php php php php php php php.php php'php"php onclickphp=php"windowphp.openphp(php\php'php'
php php php php php php php php php php php php php php php php php php php php php.php htmlentitiesphp(php$urlphp,php ENTphp_COMPATphp,php php$encphp)
php php php php php php php php php php php php php php php php php php php php php.php php'php\php'php,php php\php'php\php'php,php php\php'toolbarphp=php0php,scrollbarsphp=php0php,locationphp=php0php,statusbarphp=php0php,menubarphp=php0php,resizablephp=php0php,widthphp=php'
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_optionsphp[php'popupWidthphp'php]
php php php php php php php php php php php php php php php php php php php php php.php php'php,heightphp=php'
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_optionsphp[php'popupHeightphp'php]
php php php php php php php php php php php php php php php php php.php php'php\php'php)php;php returnphp falsephp;php"php titlephp=php"php'
php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_optionsphp[php'linkTitlephp'php]
php php php php php php php php php php php php php php php php php.php php'php"php>php'php php.php php$thisphp-php>php_optionsphp[php'linkHiddenTextphp'php]php php.php php'<php/aphp>php@php'
php php php php php php php php php php php php php php php php php.php htmlentitiesphp(php$thisphp-php>getEmailDomainPartphp(php)php,php ENTphp_COMPATphp,php php$encphp)php;

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp urlphp usedphp onphp thephp php"hiddenphp"php partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getUrlphp(php)
php php php php php{
php php php php php php php php php/php*php Figurephp outphp howphp muchphp wephp needphp tophp padphp thephp emailphp php*php/
php php php php php php php php php$numPadphp php=php selfphp:php:ENCRYPTIONphp_BLOCKphp_SIZEphp php-php php(strlenphp(php$thisphp-php>php_emailphp)php php%php selfphp:php:ENCRYPTIONphp_BLOCKphp_SIZEphp)php;

php php php php php php php php php/php*php Padphp thephp emailphp php*php/
php php php php php php php php php$emailPaddedphp php=php strphp_padphp(php$thisphp-php>php_emailphp,php strlenphp(php$thisphp-php>php_emailphp)php php+php php$numPadphp,php chrphp(php$numPadphp)php)php;

php php php php php php php php php/php*php Encryptphp thephp emailphp php*php/
php php php php php php php php php$emailEncryptedphp php=php mcryptphp_encryptphp(selfphp:php:ENCRYPTIONphp_CIPHERphp,php php$thisphp-php>php_privateKeyPackedphp,php php$emailPaddedphp,php selfphp:php:ENCRYPTIONphp_MODEphp,php selfphp:php:ENCRYPTIONphp_IVphp)php;

php php php php php php php php php/php*php Returnphp thephp urlphp php*php/
php php php php php php php php returnphp selfphp:php:MAILHIDEphp_SERVERphp php.php php'php?kphp=php'php php.php php$thisphp-php>php_publicKeyphp php.php php'php&cphp=php'php php.php strtrphp(basephp6php4php_encodephp(php$emailEncryptedphp)php,php php'php+php/php'php,php php'php-php_php'php)php;
php php php php php}
php}
