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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Securitygroupsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp createphp,php deletephp,php describephp,php grandphp andphp revokephp sercurityphp permissionsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Securitygroupsphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp securityphp groupphp.
php php php php php php*
php php php php php php*php Everyphp instancephp isphp launchedphp inphp aphp securityphp groupphp.php Ifphp nophp securityphp groupphp isphp specified
php php php php php php*php duringphp launchphp,php thephp instancesphp arephp launchedphp inphp thephp defaultphp securityphp groupphp.php Instances
php php php php php php*php withinphp thephp samephp securityphp groupphp havephp unrestrictedphp networkphp accessphp tophp eachphp otherphp.
php php php php php php*php Instancesphp willphp rejectphp networkphp accessphp attemptsphp fromphp otherphp instancesphp inphp aphp different
php php php php php php*php securityphp groupphp.php Asphp thephp ownerphp ofphp instancesphp youphp canphp grantphp orphp revokephp specificphp permissions
php php php php php php*php usingphp thephp php{php@linkphp authorizeIpphp}php,php php{php@linkphp authorizeGroupphp}php,php php{php@linkphp revokeGroupphp}php and
php php php php php php*php php{php$linkphp revokeIpphp}php operationsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php Namephp ofphp thephp newphp securityphp groupphp.
php php php php php php*php php@paramphp stringphp php$descriptionphp php php Descriptionphp ofphp thephp newphp securityphp groupphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$descriptionphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'CreateSecurityGroupphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;
php php php php php php php php php$paramsphp[php'GroupDescriptionphp'php]php php=php php$descriptionphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp informationphp aboutphp securityphp groupsphp thatphp youphp ownphp.
php php php php php php*
php php php php php php*php Ifphp youphp specifyphp securityphp groupphp namesphp,php informationphp aboutphp thosephp securityphp groupphp isphp returnedphp.
php php php php php php*php Otherwisephp,php informationphp forphp allphp securityphp groupphp isphp returnedphp.php Ifphp youphp specifyphp aphp group
php php php php php php*php thatphp doesphp notphp existphp,php aphp faultphp isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$namephp php php php Listphp ofphp securityphp groupsphp tophp describe
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describephp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeSecurityGroupsphp'php;
php php php php php php php php ifphp(isphp_arrayphp(php$namephp)php php&php&php php!emptyphp(php$namephp)php)php php{
php php php php php php php php php php php php foreachphp(php$namephp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'GroupNamephp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$namephp)php php{
php php php php php php php php php php php php php$paramsphp[php'GroupNamephp.php1php'php]php php=php php$namephp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;

php php php php php php php php php$nodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:securityGroupInfophp/ecphp2php:itemphp'php)php;

php php php php php php php php foreachphp(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$itemphp[php'ownerIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:ownerIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'groupNamephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:groupNamephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'groupDescriptionphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:groupDescriptionphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$ipphp_nodesphp php=php php$xpathphp-php>queryphp(php'ecphp2php:ipPermissionsphp/ecphp2php:itemphp'php,php php$nodephp)php;

php php php php php php php php php php php php foreachphp(php$ipphp_nodesphp asphp php$ipphp_nodephp)php php{
php php php php php php php php php php php php php php php php php$sItemphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php$sItemphp[php'ipProtocolphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:ipProtocolphp/textphp(php)php)php'php,php php$ipphp_nodephp)php;
php php php php php php php php php php php php php php php php php$sItemphp[php'fromPortphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:fromPortphp/textphp(php)php)php'php,php php$ipphp_nodephp)php;
php php php php php php php php php php php php php php php php php$sItemphp[php'toPortphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:toPortphp/textphp(php)php)php'php,php php$ipphp_nodephp)php;

php php php php php php php php php php php php php php php php php$ipsphp php=php php$xpathphp-php>queryphp(php'ecphp2php:ipRangesphp/ecphp2php:itemphp'php,php php$ipphp_nodephp)php;

php php php php php php php php php php php php php php php php php$sItemphp[php'ipRangesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$ipsphp asphp php$ipphp)php php{
php php php php php php php php php php php php php php php php php php php php php$sItemphp[php'ipRangesphp'php]php[php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:cidrIpphp/textphp(php)php)php'php,php php$ipphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp(countphp(php$sItemphp[php'ipRangesphp'php]php)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$sItemphp[php'ipRangesphp'php]php php=php php$sItemphp[php'ipRangesphp'php]php[php0php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$itemphp[php'ipPermissionsphp'php]php[php]php php=php php$sItemphp;
php php php php php php php php php php php php php php php php unsetphp(php$ipphp_nodephp,php php$sItemphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;

php php php php php php php php php php php php unsetphp(php$itemphp,php php$nodephp)php;
php php php php php php php php php}


php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp securityphp groupphp.
php php php php php php*
php php php php php php*php Ifphp youphp attemptphp tophp deletephp aphp securityphp groupphp thatphp containsphp instancesphp,php aphp faultphp isphp returnedphp.
php php php php php php*php Ifphp youphp attemptphp tophp deletephp aphp securityphp groupphp thatphp isphp referencedphp byphp anotherphp securityphp groupphp,
php php php php php php*php aphp faultphp isphp returnedphp.php Forphp examplephp,php ifphp securityphp groupphp Bphp hasphp aphp rulephp thatphp allowsphp access
php php php php php php*php fromphp securityphp groupphp Aphp,php securityphp groupphp Aphp cannotphp bephp deletedphp untilphp thephp allowphp rulephp isphp removedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php Namephp ofphp thephp securityphp groupphp tophp deletephp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DeleteSecurityGroupphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp permissionsphp tophp aphp securityphp group
php php php php php php*
php php php php php php*php Permissionsphp arephp specifiedphp byphp thephp IPphp protocolphp php(TCPphp,php UDPphp orphp ICMPphp)php,php thephp sourcephp ofphp thephp request
php php php php php php*php php(byphp IPphp rangephp orphp anphp Amazonphp ECphp2php userphp-groupphp pairphp)php,php thephp sourcephp andphp destinationphp portphp ranges
php php php php php php*php php(forphp TCPphp andphp UDPphp)php,php andphp thephp ICMPphp codesphp andphp typesphp php(forphp ICMPphp)php.php Whenphp authorizingphp ICMPphp,php php-php1
php php php php php php*php canphp bephp usedphp asphp aphp wildcardphp inphp thephp typephp andphp codephp fieldsphp.
php php php php php php*
php php php php php php*php Permissionphp changesphp arephp propagatedphp tophp instancesphp withinphp thephp securityphp groupphp asphp quicklyphp as
php php php php php php*php possiblephp.php Howeverphp,php dependingphp onphp thephp numberphp ofphp instancesphp,php aphp smallphp delayphp mightphp occurphp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php php php php php php php php php Namephp ofphp thephp groupphp tophp modifyphp.
php php php php php php*php php@paramphp stringphp php$ipProtocolphp php php php php php php php php php php php IPphp protocolphp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php@paramphp integerphp php$fromPortphp php php php php php php php php php php php php Bottomphp ofphp portphp rangephp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp containsphp thephp ICMPphp typephp ifphp ICMPphp isphp beingphp authorizedphp.
php php php php php php*php php@paramphp integerphp php$toPortphp php php php php php php php php php php php php php php Topphp ofphp portphp rangephp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp containsphp thephp ICMPphp codephp ifphp ICMPphp isphp beingphp authorizedphp.
php php php php php php*php php@paramphp stringphp php$cidrIpphp php php php php php php php php php php php php php php php CIDRphp IPphp rangephp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp authorizeIpphp(php$namephp,php php$ipProtocolphp,php php$fromPortphp,php php$toPortphp,php php$cidrIpphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'AuthorizeSecurityGroupIngressphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;
php php php php php php php php php$paramsphp[php'IpProtocolphp'php]php php=php php$ipProtocolphp;
php php php php php php php php php$paramsphp[php'FromPortphp'php]php php=php php$fromPortphp;
php php php php php php php php php$paramsphp[php'ToPortphp'php]php php=php php$toPortphp;
php php php php php php php php php$paramsphp[php'CidrIpphp'php]php php=php php$cidrIpphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp permissionsphp tophp aphp securityphp group
php php php php php php*
php php php php php php*php Whenphp authorizingphp aphp userphp/groupphp pairphp permissionphp,php GroupNamephp,php SourceSecurityGroupNamephp and
php php php php php php*php SourceSecurityGroupOwnerIdphp mustphp bephp specifiedphp.
php php php php php php*
php php php php php php*php Permissionphp changesphp arephp propagatedphp tophp instancesphp withinphp thephp securityphp groupphp asphp quicklyphp as
php php php php php php*php possiblephp.php Howeverphp,php dependingphp onphp thephp numberphp ofphp instancesphp,php aphp smallphp delayphp mightphp occurphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php php php php php php php php php Namephp ofphp thephp groupphp tophp modifyphp.
php php php php php php*php php@paramphp stringphp php$groupNamephp php php php php php php php php php php php php Namephp ofphp securityphp groupphp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp userphp/groupphp pairphp.
php php php php php php*php php@paramphp stringphp php$ownerIdphp php php php php php php php php php php php php php php Ownerphp ofphp securityphp groupphp tophp authorizephp accessphp tophp whenphp operatingphp onphp aphp userphp/groupphp pairphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp authorizeGroupphp(php$namephp,php php$groupNamephp,php php$ownerIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'AuthorizeSecurityGroupIngressphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;
php php php php php php php php php$paramsphp[php'SourceSecurityGroupNamephp'php]php php=php php$groupNamephp;
php php php php php php php php php$paramsphp[php'SourceSecurityGroupOwnerIdphp'php]php php=php php$ownerIdphp;


php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;


php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Revokesphp permissionsphp fromphp aphp securityphp groupphp.php Thephp permissionsphp usedphp tophp revokephp mustphp bephp specified
php php php php php php*php usingphp thephp samephp valuesphp usedphp tophp grantphp thephp permissionsphp.
php php php php php php*
php php php php php php*php Permissionsphp arephp specifiedphp byphp thephp IPphp protocolphp php(TCPphp,php UDPphp orphp ICMPphp)php,php thephp sourcephp ofphp thephp request
php php php php php php*php php(byphp IPphp rangephp orphp anphp Amazonphp ECphp2php userphp-groupphp pairphp)php,php thephp sourcephp andphp destinationphp portphp ranges
php php php php php php*php php(forphp TCPphp andphp UDPphp)php,php andphp thephp ICMPphp codesphp andphp typesphp php(forphp ICMPphp)php.php Whenphp authorizingphp ICMPphp,php php-php1
php php php php php php*php canphp bephp usedphp asphp aphp wildcardphp inphp thephp typephp andphp codephp fieldsphp.
php php php php php php*
php php php php php php*php Permissionphp changesphp arephp propagatedphp tophp instancesphp withinphp thephp securityphp groupphp asphp quicklyphp as
php php php php php php*php possiblephp.php Howeverphp,php dependingphp onphp thephp numberphp ofphp instancesphp,php aphp smallphp delayphp mightphp occurphp.
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php php php php php php php php php Namephp ofphp thephp groupphp tophp modifyphp.
php php php php php php*php php@paramphp stringphp php$ipProtocolphp php php php php php php php php php php php IPphp protocolphp tophp revokephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php@paramphp integerphp php$fromPortphp php php php php php php php php php php php php Bottomphp ofphp portphp rangephp tophp revokephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp containsphp thephp ICMPphp typephp ifphp ICMPphp isphp beingphp revokedphp.
php php php php php php*php php@paramphp integerphp php$toPortphp php php php php php php php php php php php php php php Topphp ofphp portphp rangephp tophp revokedphp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp containsphp thephp ICMPphp codephp ifphp ICMPphp isphp beingphp revokedphp.
php php php php php php*php php@paramphp stringphp php$cidrIpphp php php php php php php php php php php php php php php php CIDRphp IPphp rangephp tophp revokephp accessphp tophp whenphp operatingphp onphp aphp CIDRphp IPphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp revokeIpphp(php$namephp,php php$ipProtocolphp,php php$fromPortphp,php php$toPortphp,php php$cidrIpphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'RevokeSecurityGroupIngressphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;
php php php php php php php php php$paramsphp[php'IpProtocolphp'php]php php=php php$ipProtocolphp;
php php php php php php php php php$paramsphp[php'FromPortphp'php]php php=php php$fromPortphp;
php php php php php php php php php$paramsphp[php'ToPortphp'php]php php=php php$toPortphp;
php php php php php php php php php$paramsphp[php'CidrIpphp'php]php php=php php$cidrIpphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Revokesphp permissionsphp fromphp aphp securityphp groupphp.php Thephp permissionsphp usedphp tophp revokephp mustphp bephp specified
php php php php php php*php usingphp thephp samephp valuesphp usedphp tophp grantphp thephp permissionsphp.
php php php php php php*
php php php php php php*php Permissionphp changesphp arephp propagatedphp tophp instancesphp withinphp thephp securityphp groupphp asphp quicklyphp as
php php php php php php*php possiblephp.php Howeverphp,php dependingphp onphp thephp numberphp ofphp instancesphp,php aphp smallphp delayphp mightphp occurphp.
php php php php php php*
php php php php php php*php Whenphp revokingphp aphp userphp/groupphp pairphp permissionphp,php GroupNamephp,php SourceSecurityGroupNamephp and
php php php php php php*php SourceSecurityGroupOwnerIdphp mustphp bephp specifiedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php php php php php php php php php php php php php php php php php Namephp ofphp thephp groupphp tophp modifyphp.
php php php php php php*php php@paramphp stringphp php$groupNamephp php php php php php php php php php php php php Namephp ofphp securityphp groupphp tophp revokephp accessphp tophp whenphp operatingphp onphp aphp userphp/groupphp pairphp.
php php php php php php*php php@paramphp stringphp php$ownerIdphp php php php php php php php php php php php php php php Ownerphp ofphp securityphp groupphp tophp revokephp accessphp tophp whenphp operatingphp onphp aphp userphp/groupphp pairphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp revokeGroupphp(php$namephp,php php$groupNamephp,php php$ownerIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'RevokeSecurityGroupIngressphp'php;
php php php php php php php php php$paramsphp[php'GroupNamephp'php]php php=php php$namephp;
php php php php php php php php php$paramsphp[php'SourceSecurityGroupNamephp'php]php php=php php$groupNamephp;
php php php php php php php php php$paramsphp[php'SourceSecurityGroupOwnerIdphp'php]php php=php php$ownerIdphp;


php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;


php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}
php}
