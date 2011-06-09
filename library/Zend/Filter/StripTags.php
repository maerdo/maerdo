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
php php*php php@versionphp php php php php$Idphp:php StripTagsphp.phpphp php2php2php8php0php6php php2php0php1php0php-php0php8php-php0php8php php0php8php:php3php1php:php2php8Zphp thomasphp php$
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
classphp Zendphp_Filterphp_StripTagsphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Uniquephp IDphp prefixphp usedphp forphp allowingphp comments
php php php php php php*php/
php php php php constphp UNIQUEphp_IDphp_PREFIXphp php=php php'php_php_Zendphp_Filterphp_StripTagsphp_php_php'php;

php php php php php/php*php*
php php php php php php*php Whetherphp commentsphp arephp allowed
php php php php php php*
php php php php php php*php Ifphp falsephp php(thephp defaultphp)php,php thenphp commentsphp arephp removedphp fromphp thephp inputphp stringphp.
php php php php php php*
php php php php php php*php Thisphp settingphp isphp nowphp deprecatedphp,php andphp ignoredphp internallyphp.
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$commentsAllowedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp allowedphp tagsphp andphp allowedphp attributesphp forphp eachphp allowedphp tag
php php php php php php*
php php php php php php*php Tagsphp arephp storedphp inphp thephp arrayphp keysphp,php andphp thephp arrayphp valuesphp arephp themselves
php php php php php php*php arraysphp ofphp thephp attributesphp allowedphp forphp thephp correspondingphp tagphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tagsAllowedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp allowedphp attributesphp forphp allphp allowedphp tags
php php php php php php*
php php php php php php*php Attributesphp storedphp herephp arephp allowedphp forphp allphp ofphp thephp allowedphp tagsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributesAllowedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp thephp filterphp options
php php php php php php*php Allowedphp optionsphp are
php php php php php php*php php php php php php'allowTagsphp'php php php php php php=php>php Tagsphp whichphp arephp allowed
php php php php php php*php php php php php php'allowAttribsphp'php php php=php>php Attributesphp whichphp arephp allowed
php php php php php php*php php php php php php'allowCommentsphp'php php=php>php Arephp commentsphp allowedphp php?
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php(php!isphp_arrayphp(php$optionsphp)php)php php|php|php php(isphp_arrayphp(php$optionsphp)php php&php&php php!arrayphp_keyphp_existsphp(php'allowTagsphp'php,php php$optionsphp)php php&php&
php php php php php php php php php php php php php!arrayphp_keyphp_existsphp(php'allowAttribsphp'php,php php$optionsphp)php php&php&php php!arrayphp_keyphp_existsphp(php'allowCommentsphp'php,php php$optionsphp)php)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'allowTagsphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'allowAttribsphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'allowCommentsphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowTagsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTagsAllowedphp(php$optionsphp[php'allowTagsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowAttribsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAttributesAllowedphp(php$optionsphp[php'allowAttribsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowCommentsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCommentsAllowedphp(php$optionsphp[php'allowCommentsphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp commentsAllowedphp option
php php php php php php*
php php php php php php*php Thisphp settingphp isphp nowphp deprecatedphp andphp ignoredphp internallyphp.
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getCommentsAllowedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>commentsAllowedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp commentsAllowedphp option
php php php php php php*
php php php php php php*php Thisphp settingphp isphp nowphp deprecatedphp andphp ignoredphp internallyphp.
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@paramphp php booleanphp php$commentsAllowed
php php php php php php*php php@returnphp Zendphp_Filterphp_StripTagsphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCommentsAllowedphp(php$commentsAllowedphp)
php php php php php{
php php php php php php php php$thisphp-php>commentsAllowedphp php=php php(booleanphp)php php$commentsAllowedphp;
php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp tagsAllowedphp option
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTagsAllowedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tagsAllowedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp tagsAllowedphp option
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php$tagsAllowed
php php php php php php*php php@returnphp Zendphp_Filterphp_StripTagsphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTagsAllowedphp(php$tagsAllowedphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$tagsAllowedphp)php)php php{
php php php php php php php php php php php php php$tagsAllowedphp php=php arrayphp(php$tagsAllowedphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$tagsAllowedphp asphp php$indexphp php=php>php php$elementphp)php php{
php php php php php php php php php php php php php/php/php Ifphp thephp tagphp wasphp providedphp withoutphp attributes
php php php php php php php php php php php php ifphp php(isphp_intphp(php$indexphp)php php&php&php isphp_stringphp(php$elementphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Canonicalizephp thephp tagphp name
php php php php php php php php php php php php php php php php php$tagNamephp php=php strtolowerphp(php$elementphp)php;
php php php php php php php php php php php php php php php php php/php/php Storephp thephp tagphp asphp allowedphp withphp nophp attributes
php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsAllowedphp[php$tagNamephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Otherwisephp,php ifphp aphp tagphp wasphp providedphp withphp attributes
php php php php php php php php php php php php elsephp ifphp php(isphp_stringphp(php$indexphp)php php&php&php php(isphp_arrayphp(php$elementphp)php php|php|php isphp_stringphp(php$elementphp)php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Canonicalizephp thephp tagphp name
php php php php php php php php php php php php php php php php php$tagNamephp php=php strtolowerphp(php$indexphp)php;
php php php php php php php php php php php php php php php php php/php/php Canonicalizephp thephp attributes
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$elementphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$elementphp php=php arrayphp(php$elementphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php Storephp thephp tagphp asphp allowedphp withphp thephp providedphp attributes
php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsAllowedphp[php$tagNamephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$elementphp asphp php$attributephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$attributephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Canonicalizephp thephp attributephp name
php php php php php php php php php php php php php php php php php php php php php php php php php$attributeNamephp php=php strtolowerphp(php$attributephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsAllowedphp[php$tagNamephp]php[php$attributeNamephp]php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp attributesAllowedphp option
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttributesAllowedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_attributesAllowedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp attributesAllowedphp option
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php$attributesAllowed
php php php php php php*php php@returnphp Zendphp_Filterphp_StripTagsphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAttributesAllowedphp(php$attributesAllowedphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$attributesAllowedphp)php)php php{
php php php php php php php php php php php php php$attributesAllowedphp php=php arrayphp(php$attributesAllowedphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Storephp eachphp attributephp asphp allowed
php php php php php php php php foreachphp php(php$attributesAllowedphp asphp php$attributephp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$attributephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Canonicalizephp thephp attributephp name
php php php php php php php php php php php php php php php php php$attributeNamephp php=php strtolowerphp(php$attributephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_attributesAllowedphp[php$attributeNamephp]php php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php php@todophp improvephp docblockphp descriptions
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;

php php php php php php php php php/php/php Stripphp HTMLphp commentsphp first
php php php php php php php php whilephp php(strposphp(php$valuephp,php php'<php!php-php-php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$posphp php php php=php strrposphp(php$valuephp,php php'<php!php-php-php'php)php;
php php php php php php php php php php php php php$startphp php=php substrphp(php$valuephp,php php0php,php php$posphp)php;
php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php$posphp)php;

php php php php php php php php php php php php php/php/php Ifphp therephp isphp nophp commentphp closingphp tagphp,php stripphp wholephp text
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php-php-php\sphp*php>php/sphp'php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php'php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valuephp php=php pregphp_replacephp(php'php/<php(php?php:php!php(php?php:php-php-php[php\sphp\Sphp]php*php?php-php-php\sphp*php)php?php(php>php)php)php/sphp'php,php php'php'php,php php php$valuephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuephp php=php php$startphp php.php php$valuephp;
php php php php php php php php php}

php php php php php php php php php/php/php Initializephp accumulatorphp forphp filteredphp data
php php php php php php php php php$dataFilteredphp php=php php'php'php;
php php php php php php php php php/php/php Parsephp thephp inputphp dataphp iterativelyphp asphp regularphp prephp-tagphp textphp followedphp byphp a
php php php php php php php php php/php/php tagphp;php eitherphp mayphp bephp emptyphp strings
php php php php php php php php pregphp_matchphp_allphp(php'php/php(php[php^<php]php*php)php(<php?php[php^php>php]php*php>php?php)php/php'php,php php(stringphp)php php$valuephp,php php$matchesphp)php;

php php php php php php php php php/php/php Iteratephp overphp eachphp setphp ofphp matches
php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$indexphp php=php>php php$preTagphp)php php{
php php php php php php php php php php php php php/php/php Ifphp thephp prephp-tagphp textphp isphp nonphp-emptyphp,php stripphp anyphp php"php>php"php charactersphp fromphp it
php php php php php php php php php php php php ifphp php(strlenphp(php$preTagphp)php)php php{
php php php php php php php php php php php php php php php php php$preTagphp php=php strphp_replacephp(php'php>php'php,php php'php'php,php php$preTagphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Ifphp aphp tagphp existsphp inphp thisphp matchphp,php thenphp filterphp thephp tag
php php php php php php php php php php php php php$tagphp php=php php$matchesphp[php2php]php[php$indexphp]php;
php php php php php php php php php php php php ifphp php(strlenphp(php$tagphp)php)php php{
php php php php php php php php php php php php php php php php php$tagFilteredphp php=php php$thisphp-php>php_filterTagphp(php$tagphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tagFilteredphp php=php php'php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php Addphp thephp filteredphp prephp-tagphp textphp andphp filteredphp tagphp tophp thephp dataphp buffer
php php php php php php php php php php php php php$dataFilteredphp php.php=php php$preTagphp php.php php$tagFilteredphp;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp thephp filteredphp data
php php php php php php php php returnphp php$dataFilteredphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filtersphp aphp singlephp tagphp againstphp thephp currentphp optionphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterTagphp(php$tagphp)
php php php php php{
php php php php php php php php php/php/php Parsephp thephp tagphp intophp:
php php php php php php php php php/php/php php1php.php aphp startingphp delimiterphp php(mandatoryphp)
php php php php php php php php php/php/php php2php.php aphp tagphp namephp php(ifphp availablephp)
php php php php php php php php php/php/php php3php.php aphp stringphp ofphp attributesphp php(ifphp availablephp)
php php php php php php php php php/php/php php4php.php anphp endingphp delimiterphp php(ifphp availablephp)
php php php php php php php php php$isMatchphp php=php pregphp_matchphp(php'php~php(<php/php?php)php(php\wphp*php)php(php(php/php(php?php!php>php)php|php[php^php/php>php]php)php*php)php(php/php?php>php)php~php'php,php php$tagphp,php php$matchesphp)php;

php php php php php php php php php/php/php Ifphp thephp tagphp doesphp notphp matchphp,php thenphp stripphp thephp tagphp entirely
php php php php php php php php ifphp php(php!php$isMatchphp)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php/php/php Savephp thephp matchesphp tophp morephp meaningfullyphp namedphp variables
php php php php php php php php php$tagStartphp php php php php php php=php php$matchesphp[php1php]php;
php php php php php php php php php$tagNamephp php php php php php php php=php strtolowerphp(php$matchesphp[php2php]php)php;
php php php php php php php php php$tagAttributesphp php=php php$matchesphp[php3php]php;
php php php php php php php php php$tagEndphp php php php php php php php php=php php$matchesphp[php5php]php;

php php php php php php php php php/php/php Ifphp thephp tagphp isphp notphp anphp allowedphp tagphp,php thenphp removephp thephp tagphp entirely
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tagsAllowedphp[php$tagNamephp]php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php/php/php Trimphp thephp attributephp stringphp ofphp whitespacephp atphp thephp ends
php php php php php php php php php$tagAttributesphp php=php trimphp(php$tagAttributesphp)php;

php php php php php php php php php/php/php Ifphp therephp arephp nonphp-whitespacephp charactersphp inphp thephp attributephp string
php php php php php php php php ifphp php(strlenphp(php$tagAttributesphp)php)php php{
php php php php php php php php php php php php php/php/php Parsephp iterativelyphp forphp wellphp-formedphp attributes
php php php php php php php php php php php php pregphp_matchphp_allphp(php'php/php(php\wphp+php)php\sphp*php=php\sphp*php(php?php:php(php"php)php(php.php*php?php)php"php|php(php\php'php)php(php.php*php?php)php\php'php)php/sphp'php,php php$tagAttributesphp,php php$matchesphp)php;

php php php php php php php php php php php php php/php/php Initializephp validphp attributephp accumulator
php php php php php php php php php php php php php$tagAttributesphp php=php php'php'php;

php php php php php php php php php php php php php/php/php Iteratephp overphp eachphp matchedphp attribute
php php php php php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$indexphp php=php>php php$attributeNamephp)php php{
php php php php php php php php php php php php php php php php php$attributeNamephp php php php php php php=php strtolowerphp(php$attributeNamephp)php;
php php php php php php php php php php php php php php php php php$attributeDelimiterphp php=php emptyphp(php$matchesphp[php2php]php[php$indexphp]php)php php?php php$matchesphp[php4php]php[php$indexphp]php php:php php$matchesphp[php2php]php[php$indexphp]php;
php php php php php php php php php php php php php php php php php$attributeValuephp php php php php php=php emptyphp(php$matchesphp[php3php]php[php$indexphp]php)php php?php php$matchesphp[php5php]php[php$indexphp]php php:php php$matchesphp[php3php]php[php$indexphp]php;

php php php php php php php php php php php php php php php php php/php/php Ifphp thephp attributephp isphp notphp allowedphp,php thenphp removephp itphp entirely
php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$attributeNamephp,php php$thisphp-php>php_tagsAllowedphp[php$tagNamephp]php)
php php php php php php php php php php php php php php php php php php php php php&php&php php!arrayphp_keyphp_existsphp(php$attributeNamephp,php php$thisphp-php>php_attributesAllowedphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php Addphp thephp attributephp tophp thephp accumulator
php php php php php php php php php php php php php php php php php$tagAttributesphp php.php=php php"php php$attributeNamephp=php"php php.php php$attributeDelimiter
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$attributeValuephp php.php php$attributeDelimiterphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Reconstructphp tagsphp endingphp withphp php"php/php>php"php asphp backwardsphp-compatiblephp XHTMLphp tag
php php php php php php php php ifphp php(strposphp(php$tagEndphp,php php'php/php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$tagEndphp php=php php"php php$tagEndphp"php;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp thephp filteredphp tag
php php php php php php php php returnphp php$tagStartphp php.php php$tagNamephp php.php php$tagAttributesphp php.php php$tagEndphp;
php php php php php}
php}
