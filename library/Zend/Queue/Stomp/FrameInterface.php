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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FrameInterfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp representsphp aphp Stompphp Framephp Interface
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Stomp
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Queuephp_Stompphp_FrameInterface
php{
php php php php php/php*php*
php php php php php php*php Getphp thephp statusphp ofphp thephp autophp contentphp length
php php php php php php*
php php php php php php*php Ifphp AutoContentLengthphp isphp truephp thisphp codephp willphp automaticallyphp putphp the
php php php php php php*php contentphp-lengthphp headerphp inphp,php evenphp ifphp itphp isphp alreadyphp setphp byphp thephp userphp.
php php php php php php*
php php php php php php*php Thisphp isphp donephp tophp makephp thephp messagephp sendingphp morephp reliablephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAutoContentLengthphp(php)php;

php php php php php/php*php*
php php php php php php*php setAutoContentLengthphp(php)
php php php php php php*
php php php php php php*php Setphp thephp valuephp onphp orphp offphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$auto
php php php php php php*php php@returnphp php$thisphp;
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAutoContentLengthphp(php$autophp)php;

php php php php php/php*php*
php php php php php php*php Getphp thephp headers
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp headers
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp arrayphp valuesphp arephp notphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$headers
php php php php php php*php php@returnphp php$this
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeadersphp(arrayphp php$headersphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp valuephp forphp aphp header
php php php php php php*php returnsphp falsephp ifphp thephp headerphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@paramphp stringphp php$header
php php php php php php*php php@returnphp php$string
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$headerphp)php;

php php php php php/php*php*
php php php php php php*php Returnsphp aphp valuephp forphp aphp header
php php php php php php*php returnsphp falsephp ifphp thephp headerphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@paramphp stringphp php$header
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp php$this
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$headerphp,php php$valuephp)php;

php php php php php/php*php*
php php php php php php*php Returnphp thephp bodyphp forphp thisphp frame
php php php php php php*php returnsphp falsephp ifphp thephp bodyphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp bodyphp forphp thisphp frame
php php php php php php*php returnsphp falsephp ifphp thephp bodyphp doesphp notphp exist
php php php php php php*
php php php php php php*php Setphp tophp nullphp forphp nophp bodyphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$body
php php php php php php*php php@returnphp php$this
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setBodyphp(php$bodyphp)php;

php php php php php/php*php*
php php php php php php*php Returnphp thephp commandphp forphp thisphp frame
php php php php php php*php returnphp falsephp ifphp thephp commandphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp getCommandphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp bodyphp forphp thisphp frame
php php php php php php*php returnsphp falsephp ifphp thephp bodyphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@returnphp php$this
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCommandphp(php$commandphp)php;


php php php php php/php*php*
php php php php php php*php Takesphp thephp currentphp parametersphp andphp returnsphp aphp Stompphp Frame
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toFramephp(php)php;

php php php php php/php*php*
php php php php php php*php php@seephp toFramephp(php)
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)php;

php php php php php/php*php*
php php php php php php*php Acceptsphp aphp framephp andphp deconstructsphp thephp framephp intophp itsphp'php componentphp parts
php php php php php php*
php php php php php php*php php@paramphp stringphp php$framephp php-php aphp stompphp frame
php php php php php php*php php@returnphp php$this
php php php php php php*php/
php php php php publicphp functionphp fromFramephp(php$framephp)php;
php}
