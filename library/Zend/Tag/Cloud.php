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
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@subpackagephp Cloud
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cloudphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Tagphp_Item
php php*php/
requirephp_oncephp php'Zendphp/Tagphp/Itemphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Tagphp_Cloud
php{
php php php php php/php*php*
php php php php php php*php Decoratorphp forphp thephp cloud
php php php php php php*
php php php php php php*php php@varphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php php php php php php*php/
php php php php protectedphp php$php_cloudDecoratorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Decoratorphp forphp thephp tags
php php php php php php*
php php php php php php*php php@varphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Tag
php php php php php php*php/
php php php php protectedphp php$php_tagDecoratorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp allphp tags
php php php php php php*
php php php php php php*php php@varphp Zendphp_Tagphp_ItemList
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Pluginphp loaderphp forphp decorators
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp php$php_pluginLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Optionphp keysphp tophp skipphp whenphp callingphp setOptionsphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_skipOptionsphp php=php arrayphp(
php php php php php php php php php'optionsphp'php,
php php php php php php php php php'configphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp tagphp cloudphp withphp options
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp fromphp Zendphp_Config
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Configurationphp forphp Zendphp_Tagphp_Cloud
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'prefixPathphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>addPrefixPathsphp(php$optionsphp[php'prefixPathphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'prefixPathphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_skipOptionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp tagsphp forphp thephp tagphp cloudphp.
php php php php php php*
php php php php php php*php php$tagsphp shouldphp bephp anphp arrayphp containingphp singlephp tagsphp asphp arrayphp.php Eachphp tag
php php php php php php*php arrayphp shouldphp atphp leastphp containphp thephp keysphp php'titlephp'php andphp php'weightphp'php.php Optionally
php php php php php php*php youphp mayphp supplyphp thephp keyphp php'urlphp'php,php tophp whichphp thephp tagphp linksphp tophp.php Anyphp additional
php php php php php php*php parameterphp inphp thephp arrayphp isphp silentlyphp ignoredphp andphp canphp bephp usedphp byphp custom
php php php php php php*php decoratorsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tags
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setTagsphp(arrayphp php$tagsphp)
php php php php php{
php php php php php php php php php/php/php Validatephp andphp cleanupphp thephp tags
php php php php php php php php php$itemListphp php=php php$thisphp-php>getItemListphp(php)php;

php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php ifphp php(php$tagphp instanceofphp Zendphp_Tagphp_Taggablephp)php php{
php php php php php php php php php php php php php php php php php$itemListphp[php]php php=php php$tagphp;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$tagphp)php)php php{
php php php php php php php php php php php php php php php php php$itemListphp[php]php php=php newphp Zendphp_Tagphp_Itemphp(php$tagphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Cloudphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Cloudphp_Exceptionphp(php'Tagphp mustphp bephp anphp instancephp ofphp Zendphp_Tagphp_Taggablephp orphp anphp arrayphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp singlephp tagphp tophp thephp cloud
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Tagphp_Taggablephp|arrayphp php$tag
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp appendTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$tagsphp php=php php$thisphp-php>getItemListphp(php)php;
php php php php php php php php ifphp php(php$tagphp instanceofphp Zendphp_Tagphp_Taggablephp)php php{
php php php php php php php php php php php php php$tagsphp[php]php php=php php$tagphp;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$tagphp)php)php php{
php php php php php php php php php php php php php$tagsphp[php]php php=php newphp Zendphp_Tagphp_Itemphp(php$tagphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Cloudphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Cloudphp_Exceptionphp(php'Tagphp mustphp bephp anphp instancephp ofphp Zendphp_Tagphp_Taggablephp orphp anphp arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp itemphp list
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Tagphp_ItemListphp php$itemList
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setItemListphp(Zendphp_Tagphp_ItemListphp php$itemListphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp php=php php$itemListphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp itemphp list
php php php php php php*
php php php php php php*php Ifphp itemphp listphp isphp undefinedphp,php createsphp onephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Tagphp_ItemList
php php php php php php*php/
php php php php publicphp functionphp getItemListphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagsphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/ItemListphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setItemListphp(newphp Zendphp_Tagphp_ItemListphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_tagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp decoratorphp forphp thephp cloud
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$decorator
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setCloudDecoratorphp(php$decoratorphp)
php php php php php{
php php php php php php php php php$optionsphp php=php nullphp;

php php php php php php php php ifphp php(isphp_arrayphp(php$decoratorphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$decoratorphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$decoratorphp[php'optionsphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$decoratorphp[php'decoratorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$decoratorphp php=php php$decoratorphp[php'decoratorphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$decoratorphp)php)php php{
php php php php php php php php php php php php php$classnamephp php=php php$thisphp-php>getPluginLoaderphp(php)php-php>loadphp(php$decoratorphp)php;
php php php php php php php php php php php php php$decoratorphp php=php newphp php$classnamephp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$decoratorphp instanceofphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloudphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Cloudphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Cloudphp_Exceptionphp(php'Decoratorphp isphp nophp instancephp ofphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloudphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_cloudDecoratorphp php=php php$decoratorphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp decoratorphp forphp thephp cloud
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp getCloudDecoratorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_cloudDecoratorphp)php php{
php php php php php php php php php php php php php$thisphp-php>setCloudDecoratorphp(php'htmlCloudphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_cloudDecoratorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp decoratorphp forphp thephp tags
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$decorator
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setTagDecoratorphp(php$decoratorphp)
php php php php php{
php php php php php php php php php$optionsphp php=php nullphp;

php php php php php php php php ifphp php(isphp_arrayphp(php$decoratorphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$decoratorphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$decoratorphp[php'optionsphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$decoratorphp[php'decoratorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$decoratorphp php=php php$decoratorphp[php'decoratorphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$decoratorphp)php)php php{
php php php php php php php php php php php php php$classnamephp php=php php$thisphp-php>getPluginLoaderphp(php)php-php>loadphp(php$decoratorphp)php;
php php php php php php php php php php php php php$decoratorphp php=php newphp php$classnamephp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$decoratorphp instanceofphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Tagphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Cloudphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Cloudphp_Exceptionphp(php'Decoratorphp isphp nophp instancephp ofphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Tagphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tagDecoratorphp php=php php$decoratorphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp decoratorphp forphp thephp tags
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloudphp_Decoratorphp_Tag
php php php php php php*php/
php php php php publicphp functionphp getTagDecoratorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagDecoratorphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTagDecoratorphp(php'htmlTagphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_tagDecoratorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loadersphp forphp usephp withphp decorators
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loader
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loaderphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php php$loaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp pluginphp loaderphp forphp decorators
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_pluginLoaderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$prefixphp php php php php php=php php'Zendphp_Tagphp_Cloudphp_Decoratorphp_php'php;
php php php php php php php php php php php php php$pathPrefixphp php=php php'Zendphp/Tagphp/Cloudphp/Decoratorphp/php'php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(php$prefixphp php=php>php php$pathPrefixphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp manyphp prefixphp pathsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paths
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp addPrefixPathsphp(arrayphp php$pathsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$pathsphp[php'prefixphp'php]php)php php&php&php issetphp(php$pathsphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>addPrefixPathphp(php$pathsphp[php'prefixphp'php]php,php php$pathsphp[php'pathphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$pathsphp asphp php$pathphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$pathphp[php'prefixphp'php]php)php php|php|php php!issetphp(php$pathphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>addPrefixPathphp(php$pathphp[php'prefixphp'php]php,php php$pathphp[php'pathphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixphp pathphp forphp pluginphp loader
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Tagphp_Cloud
php php php php php php*php/
php php php php publicphp functionphp addPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php)php;
php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp thephp tagphp cloud
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$tagsphp php=php php$thisphp-php>getItemListphp(php)php;

php php php php php php php php ifphp php(countphp(php$tagsphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$tagsResultphp php php=php php$thisphp-php>getTagDecoratorphp(php)php-php>renderphp(php$tagsphp)php;
php php php php php php php php php$cloudResultphp php=php php$thisphp-php>getCloudDecoratorphp(php)php-php>renderphp(php$tagsResultphp)php;

php php php php php php php php returnphp php$cloudResultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp thephp tagphp cloud
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>renderphp(php)php;
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$messagephp php=php php"Exceptionphp caughtphp byphp tagphp cloudphp:php php"php php.php php$ephp-php>getMessagephp(php)
php php php php php php php php php php php php php php php php php php php php php php.php php"php\nStackphp Tracephp:php\nphp"php php.php php$ephp-php>getTraceAsStringphp(php)php;
php php php php php php php php php php php php triggerphp_errorphp(php$messagephp,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php}
php}
