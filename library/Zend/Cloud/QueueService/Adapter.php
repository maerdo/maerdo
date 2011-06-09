<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Commonphp interfacephp forphp queuephp servicesphp inphp thephp cloudphp.php Thisphp interfacephp supports
php php*php mostphp queuephp servicesphp andphp providesphp somephp flexibilityphp forphp vendorphp-specific
php php*php featuresphp andphp requirementsphp viaphp anphp optionalphp php$optionsphp arrayphp inphp eachphp method
php php*php signaturephp.php Classesphp implementingphp thisphp interfacephp shouldphp implementphp URI
php php*php constructionphp forphp queuesphp fromphp thephp parametersphp givenphp inphp eachphp methodphp andphp the
php php*php accountphp dataphp passedphp inphp tophp thephp constructorphp.php Classesphp implementingphp this
php php*php interfacephp arephp alsophp responsiblephp forphp securityphp;php accessphp controlphp isnphp'tphp currently
php php*php supportedphp inphp thisphp interfacephp,php althoughphp wephp arephp consideringphp accessphp control
php php*php supportphp inphp futurephp versionsphp ofphp thephp interfacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Cloudphp_QueueServicephp_Adapter
php{
php php php php php/php*php*php Ctorphp HTTPphp adapterphp optionphp php*php/
php php php php constphp HTTPphp_ADAPTERphp php=php php'httpphp_adapterphp'php;

php php php php php/php*php*php Messagephp visibilityphp timeoutphp optionphp php*php/
php php php php constphp VISIBILITYphp_TIMEOUTphp php=php php'visibilityphp_timeoutphp'php;

php php php php php/php*php*php Defaultphp visibilityphp timeoutphp php*php/
php php php php constphp DEFAULTphp_TIMEOUTphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php Createphp aphp queuephp.php Returnsphp thephp IDphp ofphp thephp createdphp queuephp php(typicallyphp thephp URLphp)php.
php php php php php php*php Itphp mayphp takephp somephp timephp tophp createphp thephp queuephp.php Checkphp yourphp vendorphp's
php php php php php php*php documentationphp forphp detailsphp.
php php php php php php*
php php php php php php*php Namephp constraintsphp:php Maximumphp php8php0php characters
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php Onlyphp alphanumericphp charactersphp,php hyphensphp php(php-php)php,php andphp underscoresphp php(php_php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp stringphp Queuephp IDphp php(typicallyphp URLphp)
php php php php php php*php/
php php php php publicphp functionphp createQueuephp(php$namephp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp.php Allphp messagesphp inphp thephp queuephp willphp alsophp bephp deletedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp booleanphp truephp ifphp successfulphp,php falsephp otherwise
php php php php php php*php/
php php php php publicphp functionphp deleteQueuephp(php$queueIdphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Listphp allphp queuesphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp arrayphp Queuephp IDs
php php php php php php*php/
php php php php publicphp functionphp listQueuesphp(php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp givenphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp fetchQueueMetadataphp(php$queueIdphp,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Storephp aphp keyphp/valuephp arrayphp ofphp metadataphp forphp thephp specifiedphp queuephp.
php php php php php php*php WARNINGphp:php Thisphp operationphp overwritesphp anyphp metadataphp thatphp isphp locatedphp at
php php php php php php*php php$destinationPathphp.php Somephp adaptersphp mayphp notphp supportphp thisphp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php arrayphp php php$metadata
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storeQueueMetadataphp(php$queueIdphp,php php$metadataphp,php php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp stringphp Messagephp ID
php php php php php php*php/
php php php php publicphp functionphp sendMessagephp(php$queueIdphp,php php$messagephp,php php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Recievephp atphp mostphp php$maxphp messagesphp fromphp thephp specifiedphp queuephp andphp returnphp the
php php php php php php*php messagephp IDsphp forphp messagesphp recievedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php intphp php php php php$max
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp arrayphp[Zendphp_Cloudphp_QueueServicephp_Messagephp]php php Arrayphp ofphp messages
php php php php php php*php/
php php php php publicphp functionphp receiveMessagesphp(php$queueIdphp,php php$maxphp php=php php1php,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Peekphp atphp thephp messagesphp fromphp thephp specifiedphp queuephp withoutphp removingphp themphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php intphp php$numphp Howphp manyphp messages
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp arrayphp[Zendphp_Cloudphp_QueueServicephp_Messagephp]
php php php php php php*php/
php php php php publicphp functionphp peekMessagesphp(php$queueIdphp,php php$numphp php=php php1php,php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp thephp specifiedphp messagephp fromphp thephp specifiedphp queuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queueId
php php php php php php*php php@paramphp php Zendphp_Cloudphp_QueueServicephp_Messagephp php$messagephp Messagephp tophp delete
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp void
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(php$queueIdphp,php php$messagephp,php php php$optionsphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp concretephp adapterphp.
php php php php php php*php/
php php php php publicphp functionphp getClientphp(php)php;
php}
