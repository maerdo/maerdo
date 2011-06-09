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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

interfacephp Zendphp_Mailphp_Partphp_Interfacephp extendsphp RecursiveIterator
php{
php php php php php/php*php*
php php php php php php*php Checkphp ifphp partphp isphp aphp multipartphp message
php php php php php php*
php php php php php php*php php@returnphp boolphp ifphp partphp isphp multipart
php php php php php php*php/
php php php php publicphp functionphp isMultipartphp(php)php;


php php php php php/php*php*
php php php php php php*php Bodyphp ofphp part
php php php php php php*
php php php php php php*php Ifphp partphp isphp multipartphp thephp rawphp contentphp ofphp thisphp partphp withphp allphp subphp partsphp isphp returned
php php php php php php*
php php php php php php*php php@returnphp stringphp body
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp sizephp ofphp part
php php php php php php*
php php php php php php*php php@returnphp intphp size
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp partphp ofphp multipartphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php$numphp numberphp ofphp partphp startingphp withphp php1php forphp firstphp part
php php php php php php*php php@returnphp Zendphp_Mailphp_Partphp wantedphp part
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getPartphp(php$numphp)php;

php php php php php/php*php*
php php php php php php*php Countphp partsphp ofphp aphp multipartphp part
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp subphp-parts
php php php php php php*php/
php php php php publicphp functionphp countPartsphp(php)php;


php php php php php/php*php*
php php php php php php*php Getphp allphp headers
php php php php php php*
php php php php php php*php Thephp returnedphp headersphp arephp asphp savedphp internallyphp.php Allphp namesphp arephp lowercasedphp.php Thephp valuephp isphp aphp stringphp orphp anphp array
php php php php php php*php ifphp aphp headerphp withphp thephp samephp namephp occursphp morephp thanphp oncephp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp headersphp asphp arrayphp(namephp php=php>php valuephp)
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp aphp headerphp inphp specificedphp format
php php php php php php*
php php php php php php*php Internallyphp headersphp thatphp occurphp morephp thanphp oncephp arephp savedphp asphp arrayphp,php allphp otherphp asphp stringphp.php Ifphp php$format
php php php php php php*php isphp setphp tophp stringphp implodephp isphp usedphp tophp concatphp thephp valuesphp php(withphp Zendphp_Mimephp:php:LINEENDphp asphp delimphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php php namephp ofphp headerphp,php matchesphp casephp-insensitivephp,php butphp camelphp-casephp isphp replacedphp withphp dashes
php php php php php php*php php@paramphp php stringphp php$formatphp changephp typephp ofphp returnphp valuephp tophp php'stringphp'php orphp php'arrayphp'
php php php php php php*php php@returnphp stringphp|arrayphp valuephp ofphp headerphp inphp wantedphp orphp internalphp format
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$namephp,php php$formatphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp aphp specificphp fieldphp fromphp aphp headerphp likephp contentphp typephp orphp allphp fieldsphp asphp array
php php php php php php*
php php php php php php*php Ifphp thephp headerphp occursphp morephp thanphp oncephp,php onlyphp thephp valuephp fromphp thephp firstphp header
php php php php php php*php isphp returnedphp.
php php php php php php*
php php php php php php*php Throwsphp aphp Zendphp_Mailphp_Exceptionphp ifphp thephp requestedphp headerphp doesphp notphp existphp.php If
php php php php php php*php thephp specificphp headerphp fieldphp doesphp notphp existphp,php returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php php php php php php namephp ofphp headerphp,php likephp inphp getHeaderphp(php)
php php php php php php*php php@paramphp php stringphp php$wantedPartphp thephp wantedphp partphp,php defaultphp isphp firstphp,php ifphp nullphp anphp arrayphp withphp allphp partsphp isphp returned
php php php php php php*php php@paramphp php stringphp php$firstNamephp php keyphp namephp forphp thephp firstphp part
php php php php php php*php php@returnphp stringphp|arrayphp wantedphp partphp orphp allphp partsphp asphp arrayphp(php$firstNamephp php=php>php firstPartphp,php partnamephp php=php>php valuephp)
php php php php php php*php php@throwsphp Zendphp_Exceptionphp,php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderFieldphp(php$namephp,php php$wantedPartphp php=php php0php,php php$firstNamephp php=php php0php)php;


php php php php php/php*php*
php php php php php php*php Getterphp forphp mailphp headersphp php-php namephp isphp matchedphp inphp lowercase
php php php php php php*
php php php php php php*php Thisphp getterphp isphp shortphp forphp Zendphp_Mailphp_Partphp:php:getHeaderphp(php$namephp,php php'stringphp'php)
php php php php php php*
php php php php php php*php php@seephp Zendphp_Mailphp_Partphp:php:getHeaderphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp headerphp name
php php php php php php*php php@returnphp stringphp valuephp ofphp header
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php magicphp methodphp tophp getphp contentphp ofphp part
php php php php php php*
php php php php php php*php php@returnphp stringphp content
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)php;
php}