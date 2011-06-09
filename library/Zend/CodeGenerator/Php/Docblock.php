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
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@subpackagephp PHP
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Docblockphp.phpphp php2php3php5php6php0php php2php0php1php0php-php1php2php-php1php9php php2php0php:php4php7php:php1php1Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tag
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Docblockphp/Tagphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_shortDescriptionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_longDescriptionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_indentationphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php fromReflectionphp(php)php php-php Buildphp aphp docblockphp generatorphp objectphp fromphp aphp reflectionphp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Reflectionphp_Docblockphp php$reflectionDocblock
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php publicphp staticphp functionphp fromReflectionphp(Zendphp_Reflectionphp_Docblockphp php$reflectionDocblockphp)
php php php php php{
php php php php php php php php php$docblockphp php=php newphp selfphp(php)php;

php php php php php php php php php$docblockphp-php>setSourceContentphp(php$reflectionDocblockphp-php>getContentsphp(php)php)php;
php php php php php php php php php$docblockphp-php>setSourceDirtyphp(falsephp)php;

php php php php php php php php php$docblockphp-php>setShortDescriptionphp(php$reflectionDocblockphp-php>getShortDescriptionphp(php)php)php;
php php php php php php php php php$docblockphp-php>setLongDescriptionphp(php$reflectionDocblockphp-php>getLongDescriptionphp(php)php)php;

php php php php php php php php foreachphp php(php$reflectionDocblockphp-php>getTagsphp(php)php asphp php$tagphp)php php{
php php php php php php php php php php php php php$docblockphp-php>setTagphp(Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp:php:fromReflectionphp(php$tagphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$docblockphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setShortDescriptionphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$shortDescription
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp setShortDescriptionphp(php$shortDescriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_shortDescriptionphp php=php php$shortDescriptionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getShortDescriptionphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getShortDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_shortDescriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setLongDescriptionphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$longDescription
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp setLongDescriptionphp(php$longDescriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_longDescriptionphp php=php php$longDescriptionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getLongDescriptionphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLongDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_longDescriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setTagsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tags
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp setTagsphp(Arrayphp php$tagsphp)
php php php php php{
php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTagphp(php$tagphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setTagphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp php$tag
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp setTagphp(php$tagphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$tagphp)php)php php{
php php php php php php php php php php php php php$tagphp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp(php$tagphp)php;
php php php php php php php php php}php elseifphp php(php!php$tagphp instanceofphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_CodeGeneratorphp_Phpphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'setTagphp(php)php expectsphp eitherphp anphp arrayphp ofphp methodphp optionsphp orphp anphp php'
php php php php php php php php php php php php php php php php php.php php'instancephp ofphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tagsphp[php]php php=php php$tagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getTags
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tag
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>isSourceDirtyphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_docCommentizephp(php$thisphp-php>getSourceContentphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php php=php php'php'php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$sdphp php=php php$thisphp-php>getShortDescriptionphp(php)php)php)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$sdphp php.php selfphp:php:LINEphp_FEEDphp php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ldphp php=php php$thisphp-php>getLongDescriptionphp(php)php)php)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$ldphp php.php selfphp:php:LINEphp_FEEDphp php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>getTagsphp(php)php asphp php$tagphp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$tagphp-php>generatephp(php)php php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_docCommentizephp(trimphp(php$outputphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_docCommentizephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_docCommentizephp(php$contentphp)
php php php php php{
php php php php php php php php php$indentphp php=php php$thisphp-php>getIndentationphp(php)php;
php php php php php php php php php$outputphp php=php php$indentphp php.php php'php/php*php*php'php php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php$contentphp php=php wordwrapphp(php$contentphp,php php8php0php,php selfphp:php:LINEphp_FEEDphp)php;
php php php php php php php php php$linesphp php=php explodephp(selfphp:php:LINEphp_FEEDphp,php php$contentphp)php;
php php php php php php php php foreachphp php(php$linesphp asphp php$linephp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$indentphp php.php php'php php*php'php;
php php php php php php php php php php php php ifphp php(php$linephp)php php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php php"php php$linephp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$outputphp php.php=php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}
php php php php php php php php php$outputphp php.php=php php$indentphp php.php php'php php*php/php'php php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php returnphp php$outputphp;
php php php php php}

php}
