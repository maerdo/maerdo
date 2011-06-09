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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Util
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php BinaryStreamphp.phpphp php2php2php1php0php1php php2php0php1php0php-php0php5php-php0php4php php2php0php:php0php7php:php1php3Zphp matthewphp php$
php php*php/

php/php*php*
php php*php Utilityphp classphp tophp walkphp throughphp aphp dataphp streamphp bytephp byphp bytephp withphp conventionalphp names
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Util
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Utilphp_BinaryStream
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Bytephp stream
php php php php php php*php/
php php php php protectedphp php$php_streamphp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Lengthphp ofphp stream
php php php php php php*php/
php php php php protectedphp php$php_streamLengthphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp BigEndianphp encodingphp?
php php php php php php*php/
php php php php protectedphp php$php_bigEndianphp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Currentphp positionphp inphp stream
php php php php php php*php/
php php php php protectedphp php$php_needlephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Createphp aphp referencephp tophp aphp bytephp streamphp thatphp isphp goingphp tophp bephp parsedphp orphp created
php php php php php php*php byphp thephp methodsphp inphp thephp classphp.php Detectphp ifphp thephp classphp shouldphp usephp bigphp or
php php php php php php*php littlephp Endianphp encodingphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$streamphp usephp php'php'php ifphp creatingphp aphp newphp streamphp orphp passphp aphp stringphp ifphp readingphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$streamphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$streamphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Inputdataphp isphp notphp ofphp typephp Stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_streamphp php php php php php php php=php php$streamphp;
php php php php php php php php php$thisphp-php>php_needlephp php php php php php php php=php php0php;
php php php php php php php php php$thisphp-php>php_streamLengthphp php=php strlenphp(php$streamphp)php;
php php php php php php php php php$thisphp-php>php_bigEndianphp php php php php=php php(packphp(php'lphp'php,php php1php)php php=php=php=php php"php\xphp0php0php\xphp0php0php\xphp0php0php\xphp0php1php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentphp stream
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getStreamphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_streamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp thephp numberphp ofphp bytesphp inphp aphp rowphp forphp thephp lengthphp suppliedphp.
php php php php php php*
php php php php php php*php php@todophp php php Shouldphp checkphp thatphp therephp arephp enoughphp bytesphp leftphp inphp thephp streamphp wephp arephp aboutphp tophp readphp.
php php php php php php*php php@paramphp php intphp php$length
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp forphp bufferphp underrun
php php php php php php*php/
php php php php publicphp functionphp readBytesphp(php$lengthphp)
php php php php php{
php php php php php php php php ifphp php(php(php$lengthphp php+php php$thisphp-php>php_needlephp)php php>php php$thisphp-php>php_streamLengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Bufferphp underrunphp atphp needlephp positionphp:php php'php php.php php$thisphp-php>php_needlephp php.php php'php whilephp requestingphp lengthphp:php php'php php.php php$lengthphp)php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php substrphp(php$thisphp-php>php_streamphp,php php$thisphp-php>php_needlephp,php php$lengthphp)php;
php php php php php php php php php$thisphp-php>php_needlephp+php=php php$lengthphp;
php php php php php php php php returnphp php$bytesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp anyphp lengthphp ofphp bytesphp tophp thephp stream
php php php php php php*
php php php php php php*php Usuallyphp aphp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bytes
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeBytesphp(php$bytesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp.php=php php$bytesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp aphp signedphp byte
php php php php php php*
php php php php php php*php php@returnphp intphp Valuephp isphp inphp thephp rangephp ofphp php-php1php2php8php tophp php1php2php7php.
php php php php php php*php/
php php php php publicphp functionphp readBytephp(php)
php php php php php{
php php php php php php php php ifphp php(php(php$thisphp-php>php_needlephp php+php php1php)php php>php php$thisphp-php>php_streamLengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Bufferphp underrunphp atphp needlephp positionphp:php php'php php.php php$thisphp-php>php_needlephp php.php php'php whilephp requestingphp lengthphp:php php'php php.php php$lengthphp)php;
php php php php php php php php php}

php php php php php php php php returnphp ordphp(php$thisphp-php>php_streamphp{php$thisphp-php>php_needlephp+php+php}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp thephp passedphp stringphp intophp aphp signedphp bytephp onphp thephp streamphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeBytephp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp.php=php packphp(php'cphp'php,php php$streamphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp aphp signedphp php3php2php-bitphp integerphp fromphp thephp dataphp streamphp.
php php php php php php*
php php php php php php*php php@returnphp intphp Valuephp isphp inphp thephp rangephp ofphp php-php2php1php4php7php4php8php3php6php4php8php tophp php2php1php4php7php4php8php3php6php4php7
php php php php php php*php/
php php php php publicphp functionphp readIntphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>readBytephp(php)php <php<php php8php)php php+php php$thisphp-php>readBytephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp anphp thephp integerphp tophp thephp outputphp streamphp asphp aphp php3php2php bitphp signedphp integer
php php php php php php*
php php php php php php*php php@paramphp php intphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeIntphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp.php=php packphp(php'nphp'php,php php$streamphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp aphp UTFphp-php8php stringphp fromphp thephp dataphp stream
php php php php php php*
php php php php php php*php php@returnphp stringphp Aphp UTFphp-php8php stringphp producedphp byphp thephp bytephp representationphp ofphp characters
php php php php php php*php/
php php php php publicphp functionphp readUtfphp(php)
php php php php php{
php php php php php php php php php$lengthphp php=php php$thisphp-php>readIntphp(php)php;
php php php php php php php php returnphp php$thisphp-php>readBytesphp(php$lengthphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Witephp aphp UTFphp-php8php stringphp tophp thephp outputstream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeUtfphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>writeIntphp(strlenphp(php$streamphp)php)php;
php php php php php php php php php$thisphp-php>php_streamphp.php=php php$streamphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp aphp longphp UTFphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readLongUtfphp(php)
php php php php php{
php php php php php php php php php$lengthphp php=php php$thisphp-php>readLongphp(php)php;
php php php php php php php php returnphp php$thisphp-php>readBytesphp(php$lengthphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp longphp UTFphp stringphp tophp thephp buffer
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeLongUtfphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>writeLongphp(strlenphp(php$streamphp)php)php;
php php php php php php php php php$thisphp-php>php_streamphp.php=php php$streamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp aphp longphp numericphp value
php php php php php php*
php php php php php php*php php@returnphp double
php php php php php php*php/
php php php php publicphp functionphp readLongphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>readBytephp(php)php <php<php php2php4php)php php+php php(php$thisphp-php>readBytephp(php)php <php<php php1php6php)php php+php php(php$thisphp-php>readBytephp(php)php <php<php php8php)php php+php php$thisphp-php>readBytephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp longphp numericphp valuephp tophp outputphp stream
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeLongphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp.php=php packphp(php'Nphp'php,php php$streamphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp aphp php1php6php bitphp unsignedphp shortphp.
php php php php php php*
php php php php php php*php php@todophp php php Thisphp couldphp usephp thephp unpackphp(php)php wphp/php Sphp,nphp,php orphp v
php php php php php php*php php@returnphp double
php php php php php php*php/
php php php php publicphp functionphp readUnsignedShortphp(php)
php php php php php{
php php php php php php php php php$bytephp1php php=php php$thisphp-php>readBytephp(php)php;
php php php php php php php php php$bytephp2php php=php php$thisphp-php>readBytephp(php)php;
php php php php php php php php returnphp php(php(php$bytephp1php <php<php php8php)php php|php php$bytephp2php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp anphp IEEEphp php7php5php4php doublephp-precisionphp floatingphp pointphp numberphp fromphp thephp dataphp streamphp.
php php php php php php*
php php php php php php*php php@returnphp doublephp Floatingphp pointphp number
php php php php php php*php/
php php php php publicphp functionphp readDoublephp(php)
php php php php php{
php php php php php php php php php$bytesphp php=php substrphp(php$thisphp-php>php_streamphp,php php$thisphp-php>php_needlephp,php php8php)php;
php php php php php php php php php$thisphp-php>php_needlephp+php=php php8php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_bigEndianphp)php php{
php php php php php php php php php php php php php$bytesphp php=php strrevphp(php$bytesphp)php;
php php php php php php php php php}

php php php php php php php php php$doublephp php=php unpackphp(php'dfltphp'php,php php$bytesphp)php;
php php php php php php php php returnphp php$doublephp[php'fltphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writesphp anphp IEEEphp php7php5php4php doublephp-precisionphp floatingphp pointphp numberphp fromphp thephp dataphp streamphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|doublephp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Utilphp_BinaryStream
php php php php php php*php/
php php php php publicphp functionphp writeDoublephp(php$streamphp)
php php php php php{
php php php php php php php php php$streamphp php=php packphp(php'dphp'php,php php$streamphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_bigEndianphp)php php{
php php php php php php php php php php php php php$streamphp php=php strrevphp(php$streamphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_streamphp.php=php php$streamphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
