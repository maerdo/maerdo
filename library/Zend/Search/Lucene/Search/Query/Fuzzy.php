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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Fuzzyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Fuzzyphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{
php php php php php/php*php*php Defaultphp minimumphp similarityphp php*php/
php php php php constphp DEFAULTphp_MINphp_SIMILARITYphp php=php php0php.php5php;

php php php php php/php*php*
php php php php php php*php Maximumphp numberphp ofphp matchedphp termsphp.
php php php php php php*php Apachephp Lucenephp definesphp thisphp limitationphp asphp booleanphp queryphp maximumphp numberphp ofphp clausesphp:
php php php php php php*php orgphp.apachephp.lucenephp.searchphp.BooleanQueryphp.getMaxClauseCountphp(php)
php php php php php php*php/
php php php php constphp MAXphp_CLAUSEphp_COUNTphp php=php php1php0php2php4php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp precalculatedphp maxphp distances
php php php php php php*
php php php php php php*php keysphp arephp integersphp representingphp aphp wordphp size
php php php php php php*php/
php php php php privatephp php$php_maxDistancesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Basephp searchingphp termphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_termphp;

php php php php php/php*php*
php php php php php php*php Aphp valuephp betweenphp php0php andphp php1php tophp setphp thephp requiredphp similarity
php php php php php php*php php betweenphp thephp queryphp termphp andphp thephp matchingphp termsphp.php Forphp examplephp,php forphp a
php php php php php php*php php php_minimumSimilarityphp ofphp php0php.php5php aphp termphp ofphp thephp samephp length
php php php php php php*php php asphp thephp queryphp termphp isphp consideredphp similarphp tophp thephp queryphp termphp ifphp thephp editphp distance
php php php php php php*php php betweenphp bothphp termsphp isphp lessphp thanphp lengthphp(termphp)php*php0php.php5
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php privatephp php$php_minimumSimilarityphp;

php php php php php/php*php*
php php php php php php*php Thephp lengthphp ofphp commonphp php(nonphp-fuzzyphp)php prefix
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_prefixLengthphp;

php php php php php/php*php*
php php php php php php*php Matchedphp termsphp.
php php php php php php*
php php php php php php*php Matchedphp termsphp listphp.
php php php php php php*php Itphp'sphp filledphp duringphp thephp searchphp php(rewritephp operationphp)php andphp mayphp bephp usedphp forphp searchphp result
php php php php php php*php postphp-processing
php php php php php php*
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_matchesphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Matchedphp termsphp scores
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_scoresphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp thephp termphp keysphp.
php php php php php php*php Usedphp tophp sortphp termsphp inphp alphabeticalphp orderphp ifphp termsphp havephp thephp samephp socres
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termKeysphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Defaultphp nonphp-fuzzyphp prefixphp length
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp staticphp php$php_defaultPrefixLengthphp php=php php3php;

php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Wildcardphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp floatphp php php php$minimumSimilarity
php php php php php php*php php@paramphp integerphp php$prefixLength
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp,php php$minimumSimilarityphp php=php selfphp:php:DEFAULTphp_MINphp_SIMILARITYphp,php php$prefixLengthphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$minimumSimilarityphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'minimumSimilarityphp cannotphp bephp lessphp thanphp php0php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$minimumSimilarityphp php>php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'minimumSimilarityphp cannotphp bephp greaterphp thanphp orphp equalphp tophp php1php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$prefixLengthphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'prefixLengthphp cannotphp bephp lessphp thanphp php0php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termphp php php php php php php php php php php php php php php=php php$termphp;
php php php php php php php php php$thisphp-php>php_minimumSimilarityphp php=php php$minimumSimilarityphp;
php php php php php php php php php$thisphp-php>php_prefixLengthphp php php php php php php=php php(php$prefixLengthphp php!php=php=php nullphp)php?php php$prefixLengthphp php:php selfphp:php:php$php_defaultPrefixLengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp nonphp-fuzzyphp prefixphp length
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultPrefixLengthphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultPrefixLengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp nonphp-fuzzyphp prefixphp length
php php php php php php*
php php php php php php*php php@paramphp integerphp php$defaultPrefixLength
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultPrefixLengthphp(php$defaultPrefixLengthphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultPrefixLengthphp php=php php$defaultPrefixLengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp maximumphp distancephp forphp specifiedphp wordphp length
php php php php php php*
php php php php php php*php php@paramphp integerphp php$prefixLength
php php php php php php*php php@paramphp integerphp php$termLength
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_calculateMaxDistancephp(php$prefixLengthphp,php php$termLengthphp,php php$lengthphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_maxDistancesphp[php$lengthphp]php php=php php(intphp)php php(php(php1php php-php php$thisphp-php>php_minimumSimilarityphp)php*php(minphp(php$termLengthphp,php php$lengthphp)php php+php php$prefixLengthphp)php)php;
php php php php php php php php returnphp php$thisphp-php>php_maxDistancesphp[php$lengthphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchesphp php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_scoresphp php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_termKeysphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_termphp-php>fieldphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Searchphp throughphp allphp fields
php php php php php php php php php php php php php$fieldsphp php=php php$indexphp-php>getFieldNamesphp(truephp php/php*php indexedphp fieldsphp listphp php*php/php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fieldsphp php=php arrayphp(php$thisphp-php>php_termphp-php>fieldphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php$prefixphp php php php php php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getPrefixphp(php$thisphp-php>php_termphp-php>textphp,php php$thisphp-php>php_prefixLengthphp)php;
php php php php php php php php php$prefixByteLengthphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php$prefixUtfphp8Lengthphp php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getLengthphp(php$prefixphp)php;

php php php php php php php php php$termLengthphp php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getLengthphp(php$thisphp-php>php_termphp-php>textphp)php;

php php php php php php php php php$termRestphp php php php php php php php php php=php substrphp(php$thisphp-php>php_termphp-php>textphp,php php$prefixByteLengthphp)php;
php php php php php php php php php/php/php wephp calculatephp lengthphp ofphp thephp restphp inphp bytesphp sincephp levenshteinphp(php)php isphp notphp UTFphp-php8php compatible
php php php php php php php php php$termRestLengthphp php php php=php strlenphp(php$termRestphp)php;

php php php php php php php php php$scaleFactorphp php=php php1php/php(php1php php-php php$thisphp-php>php_minimumSimilarityphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp.phpphp'php;
php php php php php php php php php$maxTermsphp php=php Zendphp_Searchphp_Lucenephp:php:getTermsPerQueryLimitphp(php)php;
php php php php php php php php foreachphp php(php$fieldsphp asphp php$fieldphp)php php{
php php php php php php php php php php php php php$indexphp-php>resetTermsStreamphp(php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php ifphp php(php$prefixphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$indexphp-php>skipTophp(newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$prefixphp,php php$fieldphp)php)php;

php php php php php php php php php php php php php php php php whilephp php(php$indexphp-php>currentTermphp(php)php php!php=php=php nullphp php php php php php php php php php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php$indexphp-php>currentTermphp(php)php-php>fieldphp php=php=php php$fieldphp php php&php&
php php php php php php php php php php php php php php php php php php php php php php php substrphp(php$indexphp-php>currentTermphp(php)php-php>textphp,php php0php,php php$prefixByteLengthphp)php php=php=php php$prefixphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Calculatephp similarity
php php php php php php php php php php php php php php php php php php php php php$targetphp php=php substrphp(php$indexphp-php>currentTermphp(php)php-php>textphp,php php$prefixByteLengthphp)php;

php php php php php php php php php php php php php php php php php php php php php$maxDistancephp php=php issetphp(php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_calculateMaxDistancephp(php$prefixUtfphp8Lengthphp,php php$termRestLengthphp,php strlenphp(php$targetphp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$termRestLengthphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php wephp donphp'tphp havephp anythingphp tophp comparephp.php php Thatphp meansphp ifphp wephp justphp add
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php thephp lettersphp forphp currentphp termphp wephp getphp thephp newphp word
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php(php(php$prefixUtfphp8Lengthphp php=php=php php0php)php?php php0php php:php php1php php-php strlenphp(php$targetphp)php/php$prefixUtfphp8Lengthphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strlenphp(php$targetphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php(php(php$prefixUtfphp8Lengthphp php=php=php php0php)php?php php0php php:php php1php php-php php$termRestLengthphp/php$prefixUtfphp8Lengthphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$maxDistancephp <php absphp(php$termRestLengthphp php-php strlenphp(php$targetphp)php)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/justphp addingphp thephp charactersphp ofphp termphp tophp targetphp orphp vicephp-versaphp resultsphp inphp toophp manyphp edits
php php php php php php php php php php php php php php php php php php php php php php php php php/php/forphp examplephp php"prephp"php lengthphp isphp php3php andphp php"prefixesphp"php lengthphp isphp php8php.php php Wephp canphp seephp that
php php php php php php php php php php php php php php php php php php php php php php php php php/php/givenphp thisphp optimalphp circumstancephp,php thephp editphp distancephp cannotphp bephp lessphp thanphp php5php.
php php php php php php php php php php php php php php php php php php php php php php php php php/php/whichphp isphp php8php-php3php orphp morephp preciseslyphp absphp(php3php-php8php)php.
php php php php php php php php php php php php php php php php php php php php php php php php php/php/ifphp ourphp maximumphp editphp distancephp isphp php4php,php thenphp wephp canphp discardphp thisphp word
php php php php php php php php php php php php php php php php php php php php php php php php php/php/withoutphp lookingphp atphp itphp.
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php1php php-php levenshteinphp(php$termRestphp,php php$targetphp)php/php(php$prefixUtfphp8Lengthphp php+php minphp(php$termRestLengthphp,php strlenphp(php$targetphp)php)php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$similarityphp php>php php$thisphp-php>php_minimumSimilarityphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp[php]php php php=php php$indexphp-php>currentTermphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termKeysphp[php]php php=php php$indexphp-php>currentTermphp(php)php-php>keyphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_scoresphp[php]php php php php=php php(php$similarityphp php-php php$thisphp-php>php_minimumSimilarityphp)php*php$scaleFactorphp;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$maxTermsphp php!php=php php0php php php&php&php php countphp(php$thisphp-php>php_matchesphp)php php>php php$maxTermsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Termsphp perphp queryphp limitphp isphp reachedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$indexphp-php>nextTermphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$indexphp-php>skipTophp(newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php'php'php,php php$fieldphp)php)php;

php php php php php php php php php php php php php php php php whilephp php(php$indexphp-php>currentTermphp(php)php php!php=php=php nullphp php php&php&php php php$indexphp-php>currentTermphp(php)php-php>fieldphp php=php=php php$fieldphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Calculatephp similarity
php php php php php php php php php php php php php php php php php php php php php$targetphp php=php php$indexphp-php>currentTermphp(php)php-php>textphp;

php php php php php php php php php php php php php php php php php php php php php$maxDistancephp php=php issetphp(php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_calculateMaxDistancephp(php0php,php php$termRestLengthphp,php strlenphp(php$targetphp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$maxDistancephp <php absphp(php$termRestLengthphp php-php strlenphp(php$targetphp)php)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/justphp addingphp thephp charactersphp ofphp termphp tophp targetphp orphp vicephp-versaphp resultsphp inphp toophp manyphp edits
php php php php php php php php php php php php php php php php php php php php php php php php php/php/forphp examplephp php"prephp"php lengthphp isphp php3php andphp php"prefixesphp"php lengthphp isphp php8php.php php Wephp canphp seephp that
php php php php php php php php php php php php php php php php php php php php php php php php php/php/givenphp thisphp optimalphp circumstancephp,php thephp editphp distancephp cannotphp bephp lessphp thanphp php5php.
php php php php php php php php php php php php php php php php php php php php php php php php php/php/whichphp isphp php8php-php3php orphp morephp preciseslyphp absphp(php3php-php8php)php.
php php php php php php php php php php php php php php php php php php php php php php php php php/php/ifphp ourphp maximumphp editphp distancephp isphp php4php,php thenphp wephp canphp discardphp thisphp word
php php php php php php php php php php php php php php php php php php php php php php php php php/php/withoutphp lookingphp atphp itphp.
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php1php php-php levenshteinphp(php$termRestphp,php php$targetphp)php/minphp(php$termRestLengthphp,php strlenphp(php$targetphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$similarityphp php>php php$thisphp-php>php_minimumSimilarityphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp[php]php php php=php php$indexphp-php>currentTermphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termKeysphp[php]php php=php php$indexphp-php>currentTermphp(php)php-php>keyphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_scoresphp[php]php php php php=php php(php$similarityphp php-php php$thisphp-php>php_minimumSimilarityphp)php*php$scaleFactorphp;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$maxTermsphp php!php=php php0php php php&php&php php countphp(php$thisphp-php>php_matchesphp)php php>php php$maxTermsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Termsphp perphp queryphp limitphp isphp reachedphp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$indexphp-php>nextTermphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$indexphp-php>closeTermsStreamphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_matchesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$thisphp-php>php_matchesphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$thisphp-php>php_matchesphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php php$rewrittenQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;

php php php php php php php php php php php php arrayphp_multisortphp(php$thisphp-php>php_scoresphp,php php php SORTphp_DESCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termKeysphp,php SORTphp_ASCphp,php php SORTphp_STRINGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp)php;

php php php php php php php php php php php php php$termCountphp php=php php0php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_matchesphp asphp php$idphp php=php>php php$matchedTermphp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(php$matchedTermphp)php;
php php php php php php php php php php php php php php php php php$subqueryphp-php>setBoostphp(php$thisphp-php>php_scoresphp[php$idphp]php)php;

php php php php php php php php php php php php php php php php php$rewrittenQueryphp-php>addSubqueryphp(php$subqueryphp)php;

php php php php php php php php php php php php php php php php php$termCountphp+php+php;
php php php php php php php php php php php php php php php php ifphp php(php$termCountphp php>php=php selfphp:php:MAXphp_CLAUSEphp_COUNTphp)php php{
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$rewrittenQueryphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Optimizephp queryphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp optimizephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Fuzzyphp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getQueryTermsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_matchesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Searchphp orphp rewritephp operationsphp havephp tophp bephp performedphp beforephp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_matchesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Fuzzyphp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Fuzzyphp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp matchedDocsphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Fuzzyphp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Fuzzyphp queryphp shouldphp notphp bephp directlyphp usedphp forphp searchphp.php Usephp php$queryphp-php>rewritephp(php$indexphp)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php$wordsphp php=php arrayphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php$prefixphp php php php php php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getPrefixphp(php$thisphp-php>php_termphp-php>textphp,php php$thisphp-php>php_prefixLengthphp)php;
php php php php php php php php php$prefixByteLengthphp php=php strlenphp(php$prefixphp)php;
php php php php php php php php php$prefixUtfphp8Lengthphp php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getLengthphp(php$prefixphp)php;

php php php php php php php php php$termLengthphp php php php php php php php=php Zendphp_Searchphp_Lucenephp_Indexphp_Termphp:php:getLengthphp(php$thisphp-php>php_termphp-php>textphp)php;

php php php php php php php php php$termRestphp php php php php php php php php php=php substrphp(php$thisphp-php>php_termphp-php>textphp,php php$prefixByteLengthphp)php;
php php php php php php php php php/php/php wephp calculatephp lengthphp ofphp thephp restphp inphp bytesphp sincephp levenshteinphp(php)php isphp notphp UTFphp-php8php compatible
php php php php php php php php php$termRestLengthphp php php php=php strlenphp(php$termRestphp)php;

php php php php php php php php php$scaleFactorphp php=php php1php/php(php1php php-php php$thisphp-php>php_minimumSimilarityphp)php;

php php php php php php php php php$docBodyphp php=php php$highlighterphp-php>getDocumentphp(php)php-php>getFieldUtfphp8Valuephp(php'bodyphp'php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$docBodyphp,php php'UTFphp-php8php'php)php;
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php$termTextphp php=php php$tokenphp-php>getTermTextphp(php)php;

php php php php php php php php php php php php ifphp php(substrphp(php$termTextphp,php php0php,php php$prefixByteLengthphp)php php=php=php php$prefixphp)php php{
php php php php php php php php php php php php php php php php php/php/php Calculatephp similarity
php php php php php php php php php php php php php php php php php$targetphp php=php substrphp(php$termTextphp,php php$prefixByteLengthphp)php;

php php php php php php php php php php php php php php php php php$maxDistancephp php=php issetphp(php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php)php?
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_maxDistancesphp[strlenphp(php$targetphp)php]php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_calculateMaxDistancephp(php$prefixUtfphp8Lengthphp,php php$termRestLengthphp,php strlenphp(php$targetphp)php)php;

php php php php php php php php php php php php php php php php ifphp php(php$termRestLengthphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php wephp donphp'tphp havephp anythingphp tophp comparephp.php php Thatphp meansphp ifphp wephp justphp add
php php php php php php php php php php php php php php php php php php php php php/php/php thephp lettersphp forphp currentphp termphp wephp getphp thephp newphp word
php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php(php(php$prefixUtfphp8Lengthphp php=php=php php0php)php?php php0php php:php php1php php-php strlenphp(php$targetphp)php/php$prefixUtfphp8Lengthphp)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strlenphp(php$targetphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php(php(php$prefixUtfphp8Lengthphp php=php=php php0php)php?php php0php php:php php1php php-php php$termRestLengthphp/php$prefixUtfphp8Lengthphp)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$maxDistancephp <php absphp(php$termRestLengthphp php-php strlenphp(php$targetphp)php)php)php{
php php php php php php php php php php php php php php php php php php php php php/php/justphp addingphp thephp charactersphp ofphp termphp tophp targetphp orphp vicephp-versaphp resultsphp inphp toophp manyphp edits
php php php php php php php php php php php php php php php php php php php php php/php/forphp examplephp php"prephp"php lengthphp isphp php3php andphp php"prefixesphp"php lengthphp isphp php8php.php php Wephp canphp seephp that
php php php php php php php php php php php php php php php php php php php php php/php/givenphp thisphp optimalphp circumstancephp,php thephp editphp distancephp cannotphp bephp lessphp thanphp php5php.
php php php php php php php php php php php php php php php php php php php php php/php/whichphp isphp php8php-php3php orphp morephp preciseslyphp absphp(php3php-php8php)php.
php php php php php php php php php php php php php php php php php php php php php/php/ifphp ourphp maximumphp editphp distancephp isphp php4php,php thenphp wephp canphp discardphp thisphp word
php php php php php php php php php php php php php php php php php php php php php/php/withoutphp lookingphp atphp itphp.
php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php0php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$similarityphp php=php php1php php-php levenshteinphp(php$termRestphp,php php$targetphp)php/php(php$prefixUtfphp8Lengthphp php+php minphp(php$termRestLengthphp,php strlenphp(php$targetphp)php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$similarityphp php>php php$thisphp-php>php_minimumSimilarityphp)php php{
php php php php php php php php php php php php php php php php php php php php php$wordsphp[php]php php=php php$termTextphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$highlighterphp-php>highlightphp(php$wordsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php/php/php Itphp'sphp usedphp onlyphp forphp queryphp visualisationphp,php sophp wephp donphp'tphp carephp aboutphp charactersphp escaping
php php php php php php php php returnphp php(php(php$thisphp-php>php_termphp-php>fieldphp php=php=php=php nullphp)php?php php'php'php php:php php$thisphp-php>php_termphp-php>fieldphp php.php php'php:php'php)
php php php php php php php php php php php php php php.php php$thisphp-php>php_termphp-php>textphp php.php php'php~php'
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>php_minimumSimilarityphp php!php=php selfphp:php:DEFAULTphp_MINphp_SIMILARITYphp)php?php roundphp(php$thisphp-php>php_minimumSimilarityphp,php php4php)php php:php php'php'php)
php php php php php php php php php php php php php php.php php(php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php?php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php php:php php'php'php)php;
php php php php php}
php}

