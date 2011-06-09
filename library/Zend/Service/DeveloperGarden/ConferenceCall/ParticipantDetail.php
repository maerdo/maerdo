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
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ParticipantDetailphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/
php/php*php*
php php*php php@seephp Zendphp_Validatephp_EmailAddress
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$firstNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$lastNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$numberphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$emailphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$flagsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructorphp forphp participantphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$firstName
php php php php php php*php php@paramphp stringphp php$lastName
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@paramphp stringphp php$email
php php php php php php*php php@paramphp integerphp php$isInitiator
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$firstNamephp,php php$lastNamephp,php php$numberphp,php php$emailphp,php php$isInitiatorphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>setFirstNamephp(php$firstNamephp)
php php php php php php php php php php php php php php-php>setLastNamephp(php$lastNamephp)
php php php php php php php php php php php php php php-php>setNumberphp(php$numberphp)
php php php php php php php php php php php php php php-php>setEmailphp(php$emailphp)
php php php php php php php php php php php php php php-php>setFlagsphp(php(intphp)php php$isInitiatorphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp valuephp ofphp php$firstName
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFirstNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>firstNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$firstName
php php php php php php*
php php php php php php*php php@paramphp stringphp php$firstName
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php php php php php php*php/
php php php php publicphp functionphp setFirstNamephp(php$firstNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>firstNamephp php=php php$firstNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp valuephp ofphp php$lastName
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLastNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>lastNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$lastName
php php php php php php*
php php php php php php*php php@paramphp stringphp php$lastName
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php php php php php php*php/
php php php php publicphp functionphp setLastNamephp(php$lastNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>lastNamephp php=php php$lastNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp valuephp ofphp php$number
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNumberphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>numberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$number
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php php php php php php*php/
php php php php publicphp functionphp setNumberphp(php$numberphp)
php php php php php{
php php php php php php php php php$thisphp-php>numberphp php=php php$numberphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp valuephp ofphp php$email
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEmailphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>emailphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$email
php php php php php php*
php php php php php php*php php@paramphp stringphp email
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php php php php php php*php/
php php php php publicphp functionphp setEmailphp(php$emailphp)
php php php php php{
php php php php php php php php php$validatorphp php=php newphp Zendphp_Validatephp_EmailAddressphp(php)php;

php php php php php php php php ifphp php(php!php$validatorphp-php>isValidphp(php$emailphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'Notphp aphp validphp ephp-mailphp addressphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>emailphp php=php php$emailphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp valuephp ofphp php$flags
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getFlagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>flagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$flagsphp php(iephp,php initiatorphp flagphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$flags
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetail
php php php php php php*php/
php php php php publicphp functionphp setFlagsphp(php$flagsphp)
php php php php php{
php php php php php php php php php$thisphp-php>flagsphp php=php php$flagsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
