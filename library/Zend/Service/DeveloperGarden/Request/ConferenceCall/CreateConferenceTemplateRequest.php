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
php php*php php@versionphp php php php php$Idphp:php CreateConferenceTemplateRequestphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/RequestAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_ConferenceCallphp_CreateConferenceTemplateRequest
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php{
php php php php php/php*php*
php php php php php php*php uniquephp ownerphp id
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$ownerIdphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php objectphp withphp detailsphp forphp thisphp conference
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ConferenceDetail
php php php php php php*php/
php php php php publicphp php$detailphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php arrayphp withphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ParticipantDetailphp elements
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$participantsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructor
php php php php php php*
php php php php php php*php php@paramphp integerphp php$environment
php php php php php php*php php@paramphp stringphp php$ownerId
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ConferenceDetailphp php$conferenceDetails
php php php php php php*php php@paramphp arrayphp php$conferenceParticipants
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$environmentphp,php php$ownerIdphp,
php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ConferenceDetailphp php$conferenceDetailsphp,
php php php php php php php php arrayphp php$conferenceParticipantsphp php=php null
php php php php php)php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$environmentphp)php;
php php php php php php php php php$thisphp-php>setOwnerIdphp(php$ownerIdphp)
php php php php php php php php php php php php php php-php>setDetailphp(php$conferenceDetailsphp)
php php php php php php php php php php php php php php-php>setParticipantsphp(php$conferenceParticipantsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$participants
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$participants
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_ConferenceCallphp_CreateConferenceTemplateRequest
php php php php php php*php/
php php php php publicphp functionphp setParticipantsphp(arrayphp php$participantsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>participantsphp php=php php$participantsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$detail
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ConferenceDetailphp php$detail
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_ConferenceCallphp_CreateConferenceTemplateRequest
php php php php php php*php/
php php php php publicphp functionphp setDetailphp(Zendphp_Servicephp_DeveloperGardenphp_ConferenceCallphp_ConferenceDetailphp php$detailphp)
php php php php php{
php php php php php php php php php$thisphp-php>detailphp php=php php$detailphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp php$ownerId
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ownerId
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_ConferenceCallphp_CreateConferenceTemplateRequest
php php php php php php*php/
php php php php publicphp functionphp setOwnerIdphp(php$ownerIdphp)
php php php php php{
php php php php php php php php php$thisphp-php>ownerIdphp php=php php$ownerIdphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
