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
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Expr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Exprphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Classphp forphp SQLphp SELECTphp fragmentsphp.
php php*
php php*php Thisphp classphp simplyphp holdsphp aphp stringphp,php sophp thatphp fragmentsphp ofphp SQLphp statementsphp canphp be
php php*php distinguishedphp fromphp identifiersphp andphp valuesphp thatphp shouldphp bephp implicitlyphp quoted
php php*php whenphp interpolatedphp intophp SQLphp statementsphp.
php php*
php php*php Forphp examplephp,php whenphp specifyingphp aphp primaryphp keyphp valuephp whenphp insertingphp intophp aphp new
php php*php rowphp,php somephp RDBMSphp brandsphp mayphp requirephp youphp tophp usephp anphp expressionphp tophp generatephp the
php php*php newphp valuephp ofphp aphp sequencephp.php php Ifphp thisphp expressionphp isphp treatedphp asphp anphp identifierphp,
php php*php itphp willphp bephp quotedphp andphp thephp expressionphp willphp notphp bephp evaluatedphp.php php Anotherphp example
php php*php isphp thatphp youphp canphp usephp Zendphp_Dbphp_Exprphp inphp thephp Zendphp_Dbphp_Selectphp:php:orderphp(php)php methodphp to
php php*php orderphp byphp anphp expressionphp insteadphp ofphp simplyphp aphp columnphp namephp.
php php*
php php*php Thephp wayphp thisphp worksphp isphp thatphp inphp eachphp contextphp inphp whichphp aphp columnphp namephp canphp be
php php*php specifiedphp tophp methodsphp ofphp Zendphp_Dbphp classesphp,php ifphp thephp valuephp isphp anphp instancephp of
php php*php Zendphp_Dbphp_Exprphp insteadphp ofphp aphp plainphp stringphp,php thenphp thephp expressionphp isphp notphp quotedphp.
php php*php Ifphp itphp isphp aphp plainphp stringphp,php itphp isphp assumedphp tophp bephp aphp plainphp columnphp namephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Expr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Expr
php{
php php php php php/php*php*
php php php php php php*php Storagephp forphp thephp SQLphp expressionphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_expressionphp;

php php php php php/php*php*
php php php php php php*php Instantiatephp anphp expressionphp,php whichphp isphp justphp aphp stringphp storedphp as
php php php php php php*php anphp instancephp memberphp variablephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$expressionphp Thephp stringphp containingphp aphp SQLphp expressionphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$expressionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_expressionphp php=php php(stringphp)php php$expressionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp stringphp Thephp stringphp ofphp thephp SQLphp expressionphp storedphp inphp thisphp objectphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_expressionphp;
php php php php php}

php}
