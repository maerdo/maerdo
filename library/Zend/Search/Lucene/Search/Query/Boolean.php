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
php php*php php@versionphp php php php php$Idphp:php Booleanphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{

php php php php php/php*php*
php php php php php php*php Subqueries
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_subqueriesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Subqueriesphp signsphp.
php php php php php php*php Ifphp truephp thenphp subqueryphp isphp requiredphp.
php php php php php php*php Ifphp falsephp thenphp subqueryphp isphp prohibitedphp.
php php php php php php*php Ifphp nullphp thenphp subqueryphp isphp neitherphp prohibitedphp,php norphp required
php php php php php php*
php php php php php php*php Ifphp arrayphp isphp nullphp thenphp allphp subqueriesphp arephp required
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_signsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Resultphp vectorphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_resVectorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Aphp scorephp factorphp basedphp onphp thephp fractionphp ofphp allphp queryphp subqueries
php php php php php php*php thatphp aphp documentphp containsphp.
php php php php php php*php floatphp forphp conjunctionphp queries
php php php php php php*php arrayphp ofphp floatphp forphp nonphp conjunctionphp queries
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php privatephp php$php_coordphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Createphp aphp newphp Booleanphp queryphp objectphp.
php php php php php php*
php php php php php php*php ifphp php$signsphp arrayphp isphp omittedphp thenphp allphp subqueriesphp arephp required
php php php php php php*php itphp differsphp fromphp addSubqueryphp(php)php behaviorphp,php butphp shouldphp neverphp bephp used
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$subqueriesphp php php php Arrayphp ofphp Zendphp_Searchphp_Searchphp_Queryphp objects
php php php php php php*php php@paramphp arrayphp php$signsphp php php php Arrayphp ofphp signsphp.php php Signphp isphp booleanphp|nullphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$subqueriesphp php=php nullphp,php php$signsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$subqueriesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_subqueriesphp php=php php$subqueriesphp;

php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php nullphp;
php php php php php php php php php php php php php/php/php Checkphp ifphp allphp subqueriesphp arephp required
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$signsphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$signsphp asphp php$signphp php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php php$signsphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp aphp php$subqueryphp php(Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp)php tophp thisphp queryphp.
php php php php php php*
php php php php php php*php Thephp signphp isphp specifiedphp asphp:
php php php php php php*php php php php php TRUEphp php php-php subqueryphp isphp required
php php php php php php*php php php php php FALSEphp php-php subqueryphp isphp prohibited
php php php php php php*php php php php php NULLphp php php-php subqueryphp isphp neitherphp prohibitedphp,php norphp required
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php$subquery
php php php php php php*php php@paramphp php booleanphp|nullphp php$sign
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addSubqueryphp(Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php$subqueryphp,php php$signphp=nullphp)php php{
php php php php php php php php ifphp php(php$signphp php!php=php=php truephp php|php|php php$thisphp-php>php_signsphp php!php=php=php nullphp)php php{php php php php php php php php/php/php Skipphp,php ifphp allphp subqueriesphp arephp required
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{php php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp,php Ifphp allphp previousphp subqueriesphp arephp required
php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$prevSubqueryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_signsphp[php]php php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_signsphp[php]php php=php php$signphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_subqueriesphp[php]php php=php php$subqueryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queriesphp intophp primitivephp queries
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;
php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryIdphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$subqueryphp-php>rewritephp(php$indexphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php?php php truephp php:php php$thisphp-php>php_signsphp[php$subqueryIdphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Optimizephp queryphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp optimizephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php$subqueriesphp php=php arrayphp(php)php;
php php php php php php php php php$signsphp php php php php php php=php arrayphp(php)php;

php php php php php php php php php/php/php Optimizephp allphp subqueries
php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php php$subqueriesphp[php]php php=php php$subqueryphp-php>optimizephp(php$indexphp)php;
php php php php php php php php php php php php php$signsphp[php]php php php php php php php=php php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php?php truephp php:php php$thisphp-php>php_signsphp[php$idphp]php;
php php php php php php php php php}

php php php php php php php php php/php/php Removephp insignificantphp subqueries
php php php php php php php php foreachphp php(php$subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$subqueryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp)php php{
php php php php php php php php php php php php php php php php php/php/php Insignificantphp subqueryphp hasphp tophp bephp removedphp anyway
php php php php php php php php php php php php php php php php unsetphp(php$subqueriesphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Booleanphp queryphp doesnphp'tphp hasphp nonphp-insignificantphp subqueries
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php}
php php php php php php php php php/php/php Checkphp ifphp allphp nonphp-insignificantphp subqueriesphp arephp prohibited
php php php php php php php php php$allProhibitedphp php=php truephp;
php php php php php php php php foreachphp php(php$signsphp asphp php$signphp)php php{
php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$allProhibitedphp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$allProhibitedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php}


php php php php php php php php php/php/php Checkphp forphp emptyphp subqueries
php php php php php php php php foreachphp php(php$subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$subqueryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signsphp[php$idphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Matchingphp isphp requiredphp,php butphp isphp actuallyphp empty
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Matchingphp isphp optionalphp orphp prohibitedphp,php butphp isphp empty
php php php php php php php php php php php php php php php php php php php php php/php/php Removephp itphp fromphp subqueriesphp andphp signsphp list
php php php php php php php php php php php php php php php php php php php php unsetphp(php$subqueriesphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp,php ifphp reducedphp subqueriesphp listphp isphp empty
php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp ifphp allphp nonphp-emptyphp subqueriesphp arephp prohibited
php php php php php php php php php$allProhibitedphp php=php truephp;
php php php php php php php php foreachphp php(php$signsphp asphp php$signphp)php php{
php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$allProhibitedphp php=php falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$allProhibitedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}


php php php php php php php php php/php/php Checkphp,php ifphp reducedphp subqueriesphp listphp hasphp onlyphp onephp entry
php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp queryphp withphp onlyphp onephp requiredphp orphp optionalphp clause
php php php php php php php php php php php php php/php/php php(itphp'sphp alreadyphp checkedphp,php thatphp itphp'sphp notphp aphp prohibitedphp clausephp)

php php php php php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php returnphp resetphp(php$subqueriesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optimizedQueryphp php=php clonephp resetphp(php$subqueriesphp)php;
php php php php php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$optimizedQueryphp-php>getBoostphp(php)php*php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php php php php php}


php php php php php php php php php/php/php Preparephp firstphp candidatephp forphp optimizedphp query
php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php$subqueriesphp,php php$signsphp)php;
php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;


php php php php php php php php php$termsphp php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$tsignsphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$boostFactorsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Tryphp tophp decomposephp termphp andphp multiphp-termphp subqueries
php php php php php php php php foreachphp php(php$subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$subqueryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp)php php{
php php php php php php php php php php php php php php php php php$termsphp[php]php php php php php php php php php=php php$subqueryphp-php>getTermphp(php)php;
php php php php php php php php php php php php php php php php php$tsignsphp[php]php php php php php php php php=php php$signsphp[php$idphp]php;
php php php php php php php php php php php php php php php php php$boostFactorsphp[php]php php=php php$subqueryphp-php>getBoostphp(php)php;

php php php php php php php php php php php php php php php php php/php/php removephp subqueryphp fromphp aphp subqueriesphp list
php php php php php php php php php php php php php php php php unsetphp(php$subqueriesphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;
php php php php php php php php php php php php}php elsephp ifphp php(php$subqueryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp)php php{
php php php php php php php php php php php php php php php php php$subTermsphp php=php php$subqueryphp-php>getTermsphp(php)php;
php php php php php php php php php php php php php php php php php$subSignsphp php=php php$subqueryphp-php>getSignsphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$signsphp[php$idphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Itphp'sphp aphp requiredphp multiphp-termphp subqueryphp.
php php php php php php php php php php php php php php php php php php php php php/php/php Somethingphp likephp php'php.php.php.php php+php(php+termphp1php php-termphp2php termphp3php php.php.php.php)php php.php.php.php'

php php php php php php php php php php php php php php php php php php php php php/php/php Multiphp-termphp requiredphp subqueryphp canphp bephp decomposedphp onlyphp ifphp itphp contains
php php php php php php php php php php php php php php php php php php php php php/php/php requiredphp termsphp andphp doesnphp'tphp containphp prohibitedphp termsphp:
php php php php php php php php php php php php php php php php php php php php php/php/php php.php.php.php php+php(php+termphp1php termphp2php php.php.php.php)php php.php.php.php php=php>php php.php.php.php php+termphp1php termphp2php php.php.php.
php php php php php php php php php php php php php php php php php php php php php/php/
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp this
php php php php php php php php php php php php php php php php php php php php php$hasRequiredphp php php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php$hasProhibitedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$subSignsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Allphp subtermsphp arephp required
php php php php php php php php php php php php php php php php php php php php php php php php php$hasRequiredphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$subSignsphp asphp php$signphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$signphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$hasRequiredphp php php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$signphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$hasProhibitedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php Continuephp ifphp subqueryphp hasphp prohibitedphp termsphp orphp doesnphp'tphp havephp requiredphp terms
php php php php php php php php php php php php php php php php php php php php ifphp php(php$hasProhibitedphp php php|php|php php php!php$hasRequiredphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$subTermsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termsphp[php]php php php php php php php php php=php php$termphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$tsignsphp[php]php php php php php php php php=php php(php$subSignsphp php=php=php=php nullphp)php?php truephp php:php php$subSignsphp[php$termIdphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$boostFactorsphp[php]php php=php php$subqueryphp-php>getBoostphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php removephp subqueryphp fromphp aphp subqueriesphp list
php php php php php php php php php php php php php php php php php php php php unsetphp(php$subqueriesphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;

php php php php php php php php php php php php php php php php php}php elsephp php{php php/php/php php$signsphp[php$idphp]php php=php=php=php nullphp php php|php|php php php$signsphp[php$idphp]php php=php=php=php false
php php php php php php php php php php php php php php php php php php php php php/php/php Itphp'sphp anphp optionalphp orphp prohibitedphp multiphp-termphp subqueryphp.
php php php php php php php php php php php php php php php php php php php php php/php/php Somethingphp likephp php'php.php.php.php php(php+termphp1php php-termphp2php termphp3php php.php.php.php)php php.php.php.php'
php php php php php php php php php php php php php php php php php php php php php/php/php or
php php php php php php php php php php php php php php php php php php php php php/php/php somethingphp likephp php'php.php.php.php php-php(php+termphp1php php-termphp2php termphp3php php.php.php.php)php php.php.php.php'

php php php php php php php php php php php php php php php php php php php php php/php/php Multiphp-termphp optionalphp andphp requiredphp subqueriesphp canphp bephp decomposed
php php php php php php php php php php php php php php php php php php php php php/php/php onlyphp ifphp allphp termsphp arephp optionalphp.
php php php php php php php php php php php php php php php php php php php php php/php/
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp allphp termsphp arephp optionalphp.
php php php php php php php php php php php php php php php php php php php php php$onlyOptionalphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$subSignsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Allphp subtermsphp arephp required
php php php php php php php php php php php php php php php php php php php php php php php php php$onlyOptionalphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$subSignsphp asphp php$signphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$onlyOptionalphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Continuephp ifphp nonphp-optionalphp termsphp arephp presentedphp inphp thisphp multiphp-termphp subquery
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$onlyOptionalphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$subTermsphp asphp php$termIdphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$termsphp[php]php php php=php php$termphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$tsignsphp[php]php php=php php(php$signsphp[php$idphp]php php=php=php=php nullphp)php?php nullphp php php/php*php optionalphp php*php/php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp php/php*php prohibitedphp php*php/php;
php php php php php php php php php php php php php php php php php php php php php php php php php$boostFactorsphp[php]php php=php php$subqueryphp-php>getBoostphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php removephp subqueryphp fromphp aphp subqueriesphp list
php php php php php php php php php php php php php php php php php php php php unsetphp(php$subqueriesphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$signsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php php/php/php Checkphp,php ifphp therephp arephp nophp decomposedphp subqueries
php php php php php php php php ifphp php(countphp(php$termsphp)php php=php=php php0php php)php php{
php php php php php php php php php php php php php/php/php returnphp preparedphp candidate
php php php php php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php php php php php}


php php php php php php php php php/php/php Checkphp,php ifphp allphp subqueriesphp havephp beenphp decomposedphp andphp allphp termsphp hasphp thephp samephp boostphp factor
php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php0php php php&php&php php countphp(arrayphp_uniquephp(php$boostFactorsphp)php)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php$termsphp,php php$tsignsphp)php;
php php php php php php php php php php php php php$optimizedQueryphp-php>setBoostphp(resetphp(php$boostFactorsphp)php*php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php php php php php}


php php php php php php php php php/php/php Thisphp booleanphp queryphp canphp'tphp bephp transformedphp tophp Termphp/MultiTermphp queryphp andphp stillphp contains
php php php php php php php php php/php/php severalphp subqueries

php php php php php php php php php/php/php Separatephp prohibitedphp terms
php php php php php php php php php$prohibitedTermsphp php php php php php php php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$termsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php ifphp php(php$tsignsphp[php$idphp]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$prohibitedTermsphp[php]php php php php php php php php php=php php$termphp;

php php php php php php php php php php php php php php php php unsetphp(php$termsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$tsignsphp[php$idphp]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$boostFactorsphp[php$idphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$termsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$clausephp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$termsphp)php)php;
php php php php php php php php php php php php php$clausephp-php>setBoostphp(resetphp(php$boostFactorsphp)php)php;

php php php php php php php php php php php php php$subqueriesphp[php]php php=php php$clausephp;
php php php php php php php php php php php php php$signsphp[php]php php php php php php php=php resetphp(php$tsignsphp)php;

php php php php php php php php php php php php php/php/php Clearphp termsphp list
php php php php php php php php php php php php php$termsphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$termsphp)php php>php php1php php php&php&php php countphp(arrayphp_uniquephp(php$boostFactorsphp)php)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$clausephp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php$termsphp,php php$tsignsphp)php;
php php php php php php php php php php php php php$clausephp-php>setBoostphp(resetphp(php$boostFactorsphp)php)php;

php php php php php php php php php php php php php$subqueriesphp[php]php php=php php$clausephp;
php php php php php php php php php php php php php/php/php Clausephp signphp isphp php'requiredphp'php ifphp clausephp containsphp requiredphp termsphp.php php'Optionalphp'php otherwisephp.
php php php php php php php php php php php php php$signsphp[php]php php php php php php php=php php(inphp_arrayphp(truephp,php php$tsignsphp)php)php?php truephp php:php nullphp;

php php php php php php php php php php php php php/php/php Clearphp termsphp list
php php php php php php php php php php php php php$termsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$prohibitedTermsphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php/php/php php(boostphp factorsphp arephp notphp significantphp forphp prohibitedphp clausesphp)
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$subqueriesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(resetphp(php$prohibitedTermsphp)php)php;
php php php php php php php php php php php php php$signsphp[php]php php php php php php php=php falsephp;

php php php php php php php php php php php php php/php/php Clearphp prohibitedphp termsphp list
php php php php php php php php php php php php php$prohibitedTermsphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$prohibitedTermsphp)php php>php php1php)php php{
php php php php php php php php php php php php php/php/php preparephp signsphp array
php php php php php php php php php php php php php$prohibitedSignsphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$prohibitedTermsphp asphp php$idphp php=php>php php$termphp)php php{
php php php php php php php php php php php php php php php php php/php/php allphp prohibitedphp termphp arephp groupedphp asphp optionalphp intophp multiphp-termphp query
php php php php php php php php php php php php php php php php php$prohibitedSignsphp[php$idphp]php php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php php(boostphp factorsphp arephp notphp significantphp forphp prohibitedphp clausesphp)
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$subqueriesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php$prohibitedTermsphp,php php$prohibitedSignsphp)php;
php php php php php php php php php php php php php/php/php Clausephp signphp isphp php'prohibitedphp'
php php php php php php php php php php php php php$signsphp[php]php php php php php php php=php falsephp;

php php php php php php php php php php php php php/php/php Clearphp termsphp list
php php php php php php php php php php php php php$prohibitedTermsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*php php@todophp Groupphp termsphp withphp thephp samephp boostphp factorsphp togetherphp php*php/

php php php php php php php php php/php/php Checkphp,php thatphp allphp termsphp arephp processed
php php php php php php php php php/php/php Replacephp candidatephp forphp optimizedphp query
php php php php php php php php ifphp php(countphp(php$termsphp)php php=php=php php0php php php&php&php php countphp(php$prohibitedTermsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$optimizedQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php$subqueriesphp,php php$signsphp)php;
php php php php php php php php php php php php php$optimizedQueryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$optimizedQueryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp subqueries
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSubqueriesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_subqueriesphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp subqueriesphp signs
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSignsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_signsphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php/
php php php php publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp/Booleanphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_weightphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Booleanphp(php$thisphp,php php$readerphp)php;
php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatephp resultphp vectorphp forphp Conjunctionphp query
php php php php php php*php php(likephp php'php<subqueryphp1php>php ANDphp php<subqueryphp2php>php ANDphp php<subqueryphp3php>php'php)
php php php php php php*php/
php php php php privatephp functionphp php_calculateConjunctionResultphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resVectorphp php=php nullphp;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_subqueriesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$resVectorsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$resVectorsSizesphp php=php arrayphp(php)php;
php php php php php php php php php$resVectorsIdsphp php php php=php arrayphp(php)php;php php/php/php isphp usedphp tophp preventphp arraysphp comparison
php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryIdphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php php$resVectorsphp[php]php php php php php php php=php php$subqueryphp-php>matchedDocsphp(php)php;
php php php php php php php php php php php php php$resVectorsSizesphp[php]php php=php countphp(endphp(php$resVectorsphp)php)php;
php php php php php php php php php php php php php$resVectorsIdsphp[php]php php php php=php php$subqueryIdphp;
php php php php php php php php php}
php php php php php php php php php/php/php sortphp resvectorsphp inphp orderphp ofphp subqueryphp cardinalityphp increasing
php php php php php php php php arrayphp_multisortphp(php$resVectorsSizesphp,php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$resVectorsIdsphp,php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$resVectorsphp)php;

php php php php php php php php foreachphp php(php$resVectorsphp asphp php$nextResVectorphp)php php{
php php php php php php php php php php php php ifphp(php$thisphp-php>php_resVectorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$nextResVectorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php$thisphp-php>php_resVectorphp php=php arrayphp_intersectphp_keyphp(php$thisphp-php>php_resVectorphp,php php$nextResVectorphp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Thisphp codephp isphp usedphp asphp workaroundphp forphp arrayphp_intersectphp_keyphp(php)php slownessphp problemphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resVectorphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$nextResVectorphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$updatedVectorphp[php$idphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$thisphp-php>php_resVectorphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Emptyphp resultphp setphp,php wephp donphp'tphp needphp tophp checkphp otherphp terms
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php ksortphp(php$thisphp-php>php_resVectorphp,php SORTphp_NUMERICphp)php;
php php php php php php php php php/php/php Usedphp algorithmphp doesnphp'tphp changephp elementsphp order
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatephp resultphp vectorphp forphp nonphp Conjunctionphp query
php php php php php php*php php(likephp php'php<subqueryphp1php>php ANDphp php<subqueryphp2php>php ANDphp NOTphp php<subqueryphp3php>php ORphp php<subqueryphp4php>php'php)
php php php php php php*php/
php php php php privatephp functionphp php_calculateNonConjunctionResultphp(php)
php php php php php{
php php php php php php php php php$requiredVectorsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$requiredVectorsSizesphp php=php arrayphp(php)php;
php php php php php php php php php$requiredVectorsIdsphp php php php=php arrayphp(php)php;php php/php/php isphp usedphp tophp preventphp arraysphp comparison

php php php php php php php php php$optionalphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryIdphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp[php$subqueryIdphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php/php/php required
php php php php php php php php php php php php php php php php php$requiredVectorsphp[php]php php php php php php php=php php$subqueryphp-php>matchedDocsphp(php)php;
php php php php php php php php php php php php php php php php php$requiredVectorsSizesphp[php]php php=php countphp(endphp(php$requiredVectorsphp)php)php;
php php php php php php php php php php php php php php php php php$requiredVectorsIdsphp[php]php php php php=php php$subqueryIdphp;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>php_signsphp[php$subqueryIdphp]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php/php prohibited
php php php php php php php php php php php php php php php php php/php/php Dophp nothingphp.php matchedDocsphp(php)php mayphp includephp nonphp-matchingphp idphp's
php php php php php php php php php php php php php php php php php/php/php Calculatingphp prohibitedphp vectorphp mayphp takephp significantphp timephp,php butphp dophp notphp affectphp thephp result
php php php php php php php php php php php php php php php php php/php/php Skippedphp.
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php neitherphp requiredphp,php norphp prohibited
php php php php php php php php php php php php php php php php php/php/php arrayphp union
php php php php php php php php php php php php php php php php php$optionalphp php+php=php php$subqueryphp-php>matchedDocsphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php sortphp resvectorsphp inphp orderphp ofphp subqueryphp cardinalityphp increasing
php php php php php php php php arrayphp_multisortphp(php$requiredVectorsSizesphp,php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$requiredVectorsIdsphp,php php php SORTphp_ASCphp,php SORTphp_NUMERICphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$requiredVectorsphp)php;

php php php php php php php php php$requiredphp php=php nullphp;
php php php php php php php php foreachphp php(php$requiredVectorsphp asphp php$nextResVectorphp)php php{
php php php php php php php php php php php php ifphp(php$requiredphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$requiredphp php=php php$nextResVectorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php$requiredphp php=php arrayphp_intersectphp_keyphp(php$requiredphp,php php$nextResVectorphp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Thisphp codephp isphp usedphp asphp workaroundphp forphp arrayphp_intersectphp_keyphp(php)php slownessphp problemphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$updatedVectorphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$requiredphp asphp php$idphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$nextResVectorphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$updatedVectorphp[php$idphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$requiredphp php=php php$updatedVectorphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$requiredphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Emptyphp resultphp setphp,php wephp donphp'tphp needphp tophp checkphp otherphp terms
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php ifphp php(php$requiredphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php&php$requiredphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_resVectorphp php=php php&php$optionalphp;
php php php php php php php php php}

php php php php php php php php ksortphp(php$thisphp-php>php_resVectorphp,php SORTphp_NUMERICphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp conjunctionphp queriesphp php(allphp subqueriesphp arephp requiredphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_conjunctionScorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_coordphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_coordphp php=php php$readerphp-php>getSimilarityphp(php)php-php>coordphp(countphp(php$thisphp-php>php_subqueriesphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php countphp(php$thisphp-php>php_subqueriesphp)php php)php;
php php php php php php php php php}

php php php php php php php php php$scorephp php=php php0php;

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryphp)php php{
php php php php php php php php php php php php php$subscorephp php=php php$subqueryphp-php>scorephp(php$docIdphp,php php$readerphp)php;

php php php php php php php php php php php php ifphp php(php$subscorephp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$scorephp php+php=php php$subqueryphp-php>scorephp(php$docIdphp,php php$readerphp)php php*php php$thisphp-php>php_coordphp;
php php php php php php php php php}

php php php php php php php php returnphp php$scorephp php*php php$thisphp-php>php_coordphp php*php php$thisphp-php>getBoostphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Scorephp calculatorphp forphp nonphp conjunctionphp queriesphp php(notphp allphp subqueriesphp arephp requiredphp)
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp php_nonConjunctionScorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_coordphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_coordphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$maxCoordphp php=php php0php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_signsphp asphp php$signphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$signphp php!php=php=php falsephp php/php*php notphp prohibitedphp php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php$maxCoordphp+php+php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php=php php$maxCoordphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_coordphp[php$countphp]php php=php php$readerphp-php>getSimilarityphp(php)php-php>coordphp(php$countphp,php php$maxCoordphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$scorephp php=php php0php;
php php php php php php php php php$matchedSubqueriesphp php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryIdphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php php$subscorephp php=php php$subqueryphp-php>scorephp(php$docIdphp,php php$readerphp)php;

php php php php php php php php php php php php php/php/php Prohibited
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp[php$subqueryIdphp]php php=php=php=php falsephp php&php&php php$subscorephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php isphp requiredphp,php butphp doenphp'tphp match
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp[php$subqueryIdphp]php php=php=php=php truephp php&php&php php php$subscorephp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$subscorephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$matchedSubqueriesphp+php+php;
php php php php php php php php php php php php php php php php php$scorephp php+php=php php$subscorephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$scorephp php*php php$thisphp-php>php_coordphp[php$matchedSubqueriesphp]php php*php php$thisphp-php>getBoostphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php/
php php php php publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Initializephp weightphp ifphp itphp'sphp notphp donephp yet
php php php php php php php php php$thisphp-php>php_initWeightphp(php$readerphp)php;

php php php php php php php php ifphp php(php$docsFilterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Createphp localphp documentsphp filterphp ifphp itphp'sphp notphp providedphp byphp upperphp query
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/DocsFilterphp.phpphp'php;
php php php php php php php php php php php php php$docsFilterphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$subqueryIdphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php nullphp php php|php|php php php$thisphp-php>php_signsphp[php$subqueryIdphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php/php/php Subqueryphp isphp required
php php php php php php php php php php php php php php php php php$subqueryphp-php>executephp(php$readerphp,php php$docsFilterphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$subqueryphp-php>executephp(php$readerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_calculateConjunctionResultphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_calculateNonConjunctionResultphp(php)php;
php php php php php php php php php}
php php php php php}



php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp matchedDocsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resVectorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_resVectorphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_conjunctionScorephp(php$docIdphp,php php$readerphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_nonConjunctionScorephp(php$docIdphp,php php$readerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getQueryTermsphp(php)
php php php php php{
php php php php php php php php php$termsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp php php|php|php php php$thisphp-php>php_signsphp[php$idphp]php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$termsphp php=php arrayphp_mergephp(php$termsphp,php php$subqueryphp-php>getQueryTermsphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$termsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp php php|php|php php php$thisphp-php>php_signsphp[php$idphp]php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp-php>php_highlightMatchesphp(php$highlighterphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php/php/php Itphp'sphp usedphp onlyphp forphp queryphp visualisationphp,php sophp wephp donphp'tphp carephp aboutphp charactersphp escaping

php php php php php php php php php$queryphp php=php php'php'php;

php php php php php php php php foreachphp php(php$thisphp-php>php_subqueriesphp asphp php$idphp php=php>php php$subqueryphp)php php{
php php php php php php php php php php php php ifphp php(php$idphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_signsphp php=php=php=php nullphp php|php|php php$thisphp-php>php_signsphp[php$idphp]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php+php'php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_signsphp[php$idphp]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$queryphp php.php=php php'php-php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$queryphp php.php=php php'php(php'php php.php php$subqueryphp-php>php_php_toStringphp(php)php php.php php'php)php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php=php php'php(php'php php.php php$queryphp php.php php'php)php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}

