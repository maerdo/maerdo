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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php RealPathphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_RealPathphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp booleanphp php$php_pathExists
php php php php php php*php/
php php php php protectedphp php$php_existsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp booleanphp|Zendphp_Configphp php$optionsphp Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>setExistsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp thephp filteredphp pathphp mustphp exist
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getExistsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_existsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ifphp thephp pathphp hasphp tophp exist
php php php php php php*php TRUEphp whenphp thephp pathphp mustphp exist
php php php php php php*php FALSEphp whenphp notphp existingphp pathsphp canphp bephp given
php php php php php php*
php php php php php php*php php@paramphp booleanphp|Zendphp_Configphp php$existsphp Pathphp mustphp exist
php php php php php php*php php@returnphp Zendphp_Filterphp_RealPath
php php php php php php*php/
php php php php publicphp functionphp setExistsphp(php$existsphp)
php php php php php{
php php php php php php php php ifphp php(php$existsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$existsphp php=php php$existsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$existsphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$existsphp[php'existsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$existsphp php=php php(booleanphp)php php$existsphp[php'existsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_existsphp php=php php(booleanphp)php php$existsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp realpathphp(php$valuephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$pathphp php=php php(stringphp)php php$valuephp;
php php php php php php php php ifphp php(php$thisphp-php>php_existsphp)php php{
php php php php php php php php php php php php returnphp realpathphp(php$pathphp)php;
php php php php php php php php php}

php php php php php php php php php$realpathphp php=php php@realpathphp(php$pathphp)php;
php php php php php php php php ifphp php(php$realpathphp)php php{
php php php php php php php php php php php php returnphp php$realpathphp;
php php php php php php php php php}

php php php php php php php php php$drivephp php=php php'php'php;
php php php php php php php php ifphp php(substrphp(PHPphp_OSphp,php php0php,php php3php)php php=php=php php'WINphp'php)php php{
php php php php php php php php php php php php php$pathphp php=php pregphp_replacephp(php'php/php[php\php\php\php\php\php/php]php/php'php,php DIRECTORYphp_SEPARATORphp,php php$pathphp)php;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php(php[aphp-zAphp-Zphp]php\php:php)php(php.php*php)php/php'php,php php$pathphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php listphp(php$fullMatchphp,php php$drivephp,php php$pathphp)php php=php php$matchesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$cwdphp php php php=php getcwdphp(php)php;
php php php php php php php php php php php php php php php php php$drivephp php=php substrphp(php$cwdphp,php php0php,php php2php)php;
php php php php php php php php php php php php php php php php ifphp php(substrphp(php$pathphp,php php0php,php php1php)php php!php=php DIRECTORYphp_SEPARATORphp)php php{
php php php php php php php php php php php php php php php php php php php php php$pathphp php=php substrphp(php$cwdphp,php php3php)php php.php DIRECTORYphp_SEPARATORphp php.php php$pathphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(substrphp(php$pathphp,php php0php,php php1php)php php!php=php DIRECTORYphp_SEPARATORphp)php php{
php php php php php php php php php php php php php$pathphp php=php getcwdphp(php)php php.php DIRECTORYphp_SEPARATORphp php.php php$pathphp;
php php php php php php php php php}

php php php php php php php php php$stackphp php=php arrayphp(php)php;
php php php php php php php php php$partsphp php=php explodephp(DIRECTORYphp_SEPARATORphp,php php$pathphp)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$dirphp)php php{
php php php php php php php php php php php php ifphp php(strlenphp(php$dirphp)php php&php&php php$dirphp php!php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$dirphp php=php=php php'php.php.php'php)php php{
php php php php php php php php php php php php php php php php php php php php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$stackphp,php php$dirphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$drivephp php.php DIRECTORYphp_SEPARATORphp php.php implodephp(DIRECTORYphp_SEPARATORphp,php php$stackphp)php;
php php php php php}
php}
