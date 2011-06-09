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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ViewScriptFilephp.phpphp php2php3php3php4php3php php2php0php1php0php-php1php1php-php1php5php php1php5php:php3php3php:php2php2Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Filephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filter
php php*php/
requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Wordphp_CamelCaseToDash
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Wordphp/CamelCaseToDashphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filterphp_StringToLower
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/StringToLowerphp.phpphp'php;


php/php*php*
php php*php Thisphp classphp isphp thephp frontphp mostphp classphp forphp utilizingphp Zendphp_Toolphp_Project
php php*
php php*php Aphp profilephp isphp aphp hierarchicalphp setphp ofphp resourcesphp thatphp keepphp trackphp of
php php*php itemsphp withinphp aphp specificphp projectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ViewScriptFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'viewphp.phtmlphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_forActionNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_scriptNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ViewScriptFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ViewScriptFile
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php ifphp php(php$forActionNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'forActionNamephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_forActionNamephp php=php php$forActionNamephp;
php php php php php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php php$thisphp-php>php_convertActionNameToFilesystemNamephp(php$forActionNamephp)php php.php php'php.phtmlphp'php;
php php php php php php php php php}php elseifphp php(php$scriptNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'scriptNamephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_scriptNamephp php=php php$scriptNamephp;
php php php php php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php php$scriptNamephp php.php php'php.phtmlphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Eitherphp aphp forActionNamephp orphp scriptNamephp isphp requiredphp.php'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:initphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributesphp(php)
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php php$attributesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_forActionNamephp)php php{
php php php php php php php php php php php php php$attributesphp[php'forActionNamephp'php]php php=php php$thisphp-php>php_forActionNamephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_scriptNamephp)php php{
php php php php php php php php php php php php php$attributesphp[php'scriptNamephp'php]php php=php php$thisphp-php>php_scriptNamephp;
php php php php php php php php php}

php php php php php php php php returnphp php$attributesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php php$contentsphp php=php php'php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_filesystemNamephp php=php=php php'errorphp.phtmlphp'php)php php{php php php/php/php shouldphp alsophp checkphp thatphp thephp abovephp directoryphp isphp forControllerphp=error
php php php php php php php php php php php php php$contentsphp php.php=php <php<php<EOS
<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp php1php.php0php Strictphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php/DTDphp/xhtmlphp1php-strictphp.dtdphp"php>
php<htmlphp xmlnsphp=php"httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/xhtmlphp"php>
php<headphp>
php php php<metaphp httpphp-equivphp=php"Contentphp-Typephp"php contentphp=php"textphp/htmlphp;php charsetphp=utfphp-php8php"php php/php>
php php php<titlephp>Zendphp Frameworkphp Defaultphp Application<php/titlephp>
<php/headphp>
php<bodyphp>
php php php<hphp1php>Anphp errorphp occurred<php/hphp1php>
php php php<hphp2php><php?phpphp echophp php\php$thisphp-php>messagephp php?php><php/hphp2php>

php php <php?phpphp ifphp php(issetphp(php\php$thisphp-php>exceptionphp)php)php:php php?php>

php php php<hphp3php>Exceptionphp informationphp:<php/hphp3php>
php php php<pphp>
php php php php php php php<bphp>Messagephp:<php/bphp>php <php?phpphp echophp php\php$thisphp-php>exceptionphp-php>getMessagephp(php)php php?php>
php php <php/pphp>

php php php<hphp3php>Stackphp tracephp:<php/hphp3php>
php php php<prephp><php?phpphp echophp php\php$thisphp-php>exceptionphp-php>getTraceAsStringphp(php)php php?php>
php php <php/prephp>

php php php<hphp3php>Requestphp Parametersphp:<php/hphp3php>
php php php<prephp><php?phpphp echophp varphp_exportphp(php\php$thisphp-php>requestphp-php>getParamsphp(php)php,php truephp)php php?php>
php php <php/prephp>
php php <php?phpphp endifphp php?php>

<php/bodyphp>
<php/htmlphp>

EOSphp;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_forActionNamephp php=php=php php'indexphp'php php&php&php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php-php>getAttributephp(php'forControllerNamephp'php)php php=php=php php'Indexphp'php)php php{

php php php php php php php php php php php php php$contentsphp php=<php<php<EOS
php<stylephp>
php php php php aphp:linkphp,
php php php php aphp:visited
php php php php php{
php php php php php php php php colorphp:php php#php0php3php9php8CAphp;
php php php php php}

php php php php spanphp#zfphp-name
php php php php php{
php php php php php php php php colorphp:php php#php9php1BEphp3Fphp;
php php php php php}

php php php php divphp#welcome
php php php php php{
php php php php php php php php colorphp:php php#FFFFFFphp;
php php php php php php php php backgroundphp-imagephp:php urlphp(httpphp:php/php/frameworkphp.zendphp.comphp/imagesphp/bkgphp_headerphp.jpgphp)php;
php php php php php php php php widthphp:php php php6php0php0pxphp;
php php php php php php php php heightphp:php php4php0php0pxphp;
php php php php php php php php borderphp:php php2pxphp solidphp php#php4php4php4php4php4php4php;
php php php php php php php php overflowphp:php hiddenphp;
php php php php php php php php textphp-alignphp:php centerphp;
php php php php php}

php php php php divphp#morephp-information
php php php php php{
php php php php php php php php backgroundphp-imagephp:php urlphp(httpphp:php/php/frameworkphp.zendphp.comphp/imagesphp/bkgphp_bodyphp-bottomphp.gifphp)php;
php php php php php php php php heightphp:php php1php0php0php%php;
php php php php php}
<php/stylephp>
php<divphp idphp=php"welcomephp"php>
php php php php php<hphp1php>Welcomephp tophp thephp php<spanphp idphp=php"zfphp-namephp"php>Zendphp Frameworkphp!<php/spanphp><php/hphp1php>

php php php php php<hphp3php>Thisphp isphp yourphp projectphp'sphp mainphp page<php/hphp3php>

php php php php php<divphp idphp=php"morephp-informationphp"php>
php php php php php php php php php<pphp>php<imgphp srcphp=php"httpphp:php/php/frameworkphp.zendphp.comphp/imagesphp/PoweredByphp_ZFphp_php4LightBGphp.pngphp"php php/php><php/pphp>
php php php php php php php php php<pphp>
php php php php php php php php php php php php Helpfulphp Linksphp:php php<brphp php/php>
php php php php php php php php php php php php php<aphp hrefphp=php"httpphp:php/php/frameworkphp.zendphp.comphp/php"php>Zendphp Frameworkphp Website<php/aphp>php php|
php php php php php php php php php php php php php<aphp hrefphp=php"httpphp:php/php/frameworkphp.zendphp.comphp/manualphp/enphp/php"php>Zendphp Frameworkphp Manual<php/aphp>
php php php php php php php php <php/pphp>
php php php php <php/divphp>
<php/divphp>
EOSphp;

php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$contentsphp php=php php'php<brphp php/php>php<brphp php/php>php<centerphp>Viewphp scriptphp forphp controllerphp php<bphp>php'php php.php php$thisphp-php>php_resourcephp-php>getParentResourcephp(php)php-php>getAttributephp(php'forControllerNamephp'php)php php.php php'<php/bphp>php'
php php php php php php php php php php php php php php php php php.php php'php andphp scriptphp/actionphp namephp php<bphp>php'php php.php php$thisphp-php>php_forActionNamephp php.php php'<php/bphp><php/centerphp>php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$contentsphp;
php php php php php}

php php php php protectedphp functionphp php_convertActionNameToFilesystemNamephp(php$actionNamephp)
php php php php php{
php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php$filterphp-php>addFilterphp(newphp Zendphp_Filterphp_Wordphp_CamelCaseToDashphp(php)php)
php php php php php php php php php php php php php-php>addFilterphp(newphp Zendphp_Filterphp_StringToLowerphp(php)php)php;
php php php php php php php php returnphp php$filterphp-php>filterphp(php$actionNamephp)php;
php php php php php}

php}
