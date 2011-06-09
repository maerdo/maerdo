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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Hostnamephp.phpphp php2php3php4php8php8php php2php0php1php0php-php1php2php-php1php0php php0php7php:php2php2php:php5php5Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Ip
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Ipphp.phpphp'php;

php/php*php*
php php*php Pleasephp notephp therephp arephp twophp standalonephp testphp scriptsphp forphp testingphp IDNphp charactersphp duephp tophp problems
php php*php withphp filephp encodingphp.
php php*
php php*php Thephp firstphp isphp testsphp/Zendphp/Validatephp/HostnameTestStandalonephp.phpphp whichphp isphp designedphp tophp bephp runphp on
php php*php thephp commandphp linephp.
php php*
php php*php Thephp secondphp isphp testsphp/Zendphp/Validatephp/HostnameTestFormphp.phpphp whichphp isphp designedphp tophp bephp runphp viaphp HTML
php php*php tophp allowphp usersphp tophp testphp enteringphp UTFphp-php8php charactersphp inphp aphp formphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Hostnamephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp CANNOTphp_DECODEphp_PUNYCODEphp php php=php php'hostnameCannotDecodePunycodephp'php;
php php php php constphp INVALIDphp php php php php php php php php php php php php php php php php php=php php'hostnameInvalidphp'php;
php php php php constphp INVALIDphp_DASHphp php php php php php php php php php php php php=php php'hostnameDashCharacterphp'php;
php php php php constphp INVALIDphp_HOSTNAMEphp php php php php php php php php=php php'hostnameInvalidHostnamephp'php;
php php php php constphp INVALIDphp_HOSTNAMEphp_SCHEMAphp php=php php'hostnameInvalidHostnameSchemaphp'php;
php php php php constphp INVALIDphp_LOCALphp_NAMEphp php php php php php php=php php'hostnameInvalidLocalNamephp'php;
php php php php constphp INVALIDphp_URIphp php php php php php php php php php php php php php=php php'hostnameInvalidUriphp'php;
php php php php constphp IPphp_ADDRESSphp_NOTphp_ALLOWEDphp php php=php php'hostnameIpAddressNotAllowedphp'php;
php php php php constphp LOCALphp_NAMEphp_NOTphp_ALLOWEDphp php php=php php'hostnameLocalNameNotAllowedphp'php;
php php php php constphp UNDECIPHERABLEphp_TLDphp php php php php php php=php php'hostnameUndecipherableTldphp'php;
php php php php constphp UNKNOWNphp_TLDphp php php php php php php php php php php php php php=php php'hostnameUnknownTldphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:CANNOTphp_DECODEphp_PUNYCODEphp php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp DNSphp hostnamephp butphp thephp givenphp punycodephp notationphp cannotphp bephp decodedphp"php,
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php php php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:INVALIDphp_DASHphp php php php php php php php php php php php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp DNSphp hostnamephp butphp containsphp aphp dashphp inphp anphp invalidphp positionphp"php,
php php php php php php php php selfphp:php:INVALIDphp_HOSTNAMEphp php php php php php php php php=php>php php"php'php%valuephp%php'php doesphp notphp matchphp thephp expectedphp structurephp forphp aphp DNSphp hostnamephp"php,
php php php php php php php php selfphp:php:INVALIDphp_HOSTNAMEphp_SCHEMAphp php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp DNSphp hostnamephp butphp cannotphp matchphp againstphp hostnamephp schemaphp forphp TLDphp php'php%tldphp%php'php"php,
php php php php php php php php selfphp:php:INVALIDphp_LOCALphp_NAMEphp php php php php php php=php>php php"php'php%valuephp%php'php doesphp notphp appearphp tophp bephp aphp validphp localphp networkphp namephp"php,
php php php php php php php php selfphp:php:INVALIDphp_URIphp php php php php php php php php php php php php php=php>php php"php'php%valuephp%php'php doesphp notphp appearphp tophp bephp aphp validphp URIphp hostnamephp"php,
php php php php php php php php selfphp:php:IPphp_ADDRESSphp_NOTphp_ALLOWEDphp php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp anphp IPphp addressphp,php butphp IPphp addressesphp arephp notphp allowedphp"php,
php php php php php php php php selfphp:php:LOCALphp_NAMEphp_NOTphp_ALLOWEDphp php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp localphp networkphp namephp butphp localphp networkphp namesphp arephp notphp allowedphp"php,
php php php php php php php php selfphp:php:UNDECIPHERABLEphp_TLDphp php php php php php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp DNSphp hostnamephp butphp cannotphp extractphp TLDphp partphp"php,
php php php php php php php php selfphp:php:UNKNOWNphp_TLDphp php php php php php php php php php php php php php=php>php php"php'php%valuephp%php'php appearsphp tophp bephp aphp DNSphp hostnamephp butphp cannotphp matchphp TLDphp againstphp knownphp listphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'tldphp'php php=php>php php'php_tldphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Allowsphp Internetphp domainphp namesphp php(ephp.gphp.php,php examplephp.comphp)
php php php php php php*php/
php php php php constphp ALLOWphp_DNSphp php php php=php php1php;

php php php php php/php*php*
php php php php php php*php Allowsphp IPphp addresses
php php php php php php*php/
php php php php constphp ALLOWphp_IPphp php php php php=php php2php;

php php php php php/php*php*
php php php php php php*php Allowsphp localphp networkphp namesphp php(ephp.gphp.php,php localhostphp,php wwwphp.localdomainphp)
php php php php php php*php/
php php php php constphp ALLOWphp_LOCALphp php=php php4php;

php php php php php/php*php*
php php php php php php*php Allowsphp allphp typesphp ofphp hostnames
php php php php php php*php/
php php php php constphp ALLOWphp_ALLphp php php php=php php7php;

php php php php php/php*php*
php php php php php php*php Allowsphp allphp typesphp ofphp hostnames
php php php php php php*php/
php php php php constphp ALLOWphp_URIphp php=php php8php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp validphp topphp-levelphp-domains
php php php php php php*
php php php php php php*php php@seephp ftpphp:php/php/dataphp.ianaphp.orgphp/TLDphp/tldsphp-alphaphp-byphp-domainphp.txtphp php Listphp ofphp allphp TLDsphp byphp domain
php php php php php php*php php@seephp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/rootphp/dbphp/php Officialphp listphp ofphp supportedphp TLDs
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validTldsphp php=php arrayphp(
php php php php php php php php php'acphp'php,php php'adphp'php,php php'aephp'php,php php'aerophp'php,php php'afphp'php,php php'agphp'php,php php'aiphp'php,php php'alphp'php,php php'amphp'php,php php'anphp'php,php php'aophp'php,php php'aqphp'php,php php'arphp'php,php php'arpaphp'php,
php php php php php php php php php'asphp'php,php php'asiaphp'php,php php'atphp'php,php php'auphp'php,php php'awphp'php,php php'axphp'php,php php'azphp'php,php php'baphp'php,php php'bbphp'php,php php'bdphp'php,php php'bephp'php,php php'bfphp'php,php php'bgphp'php,php php'bhphp'php,php php'biphp'php,
php php php php php php php php php'bizphp'php,php php'bjphp'php,php php'bmphp'php,php php'bnphp'php,php php'bophp'php,php php'brphp'php,php php'bsphp'php,php php'btphp'php,php php'bvphp'php,php php'bwphp'php,php php'byphp'php,php php'bzphp'php,php php'caphp'php,php php'catphp'php,php php'ccphp'php,
php php php php php php php php php'cdphp'php,php php'cfphp'php,php php'cgphp'php,php php'chphp'php,php php'ciphp'php,php php'ckphp'php,php php'clphp'php,php php'cmphp'php,php php'cnphp'php,php php'cophp'php,php php'comphp'php,php php'coopphp'php,php php'crphp'php,php php'cuphp'php,
php php php php php php php php php'cvphp'php,php php'cxphp'php,php php'cyphp'php,php php'czphp'php,php php'dephp'php,php php'djphp'php,php php'dkphp'php,php php'dmphp'php,php php'dophp'php,php php'dzphp'php,php php'ecphp'php,php php'eduphp'php,php php'eephp'php,php php'egphp'php,php php'erphp'php,
php php php php php php php php php'esphp'php,php php'etphp'php,php php'euphp'php,php php'fiphp'php,php php'fjphp'php,php php'fkphp'php,php php'fmphp'php,php php'fophp'php,php php'frphp'php,php php'gaphp'php,php php'gbphp'php,php php'gdphp'php,php php'gephp'php,php php'gfphp'php,php php'ggphp'php,
php php php php php php php php php'ghphp'php,php php'giphp'php,php php'glphp'php,php php'gmphp'php,php php'gnphp'php,php php'govphp'php,php php'gpphp'php,php php'gqphp'php,php php'grphp'php,php php'gsphp'php,php php'gtphp'php,php php'guphp'php,php php'gwphp'php,php php'gyphp'php,php php'hkphp'php,
php php php php php php php php php'hmphp'php,php php'hnphp'php,php php'hrphp'php,php php'htphp'php,php php'huphp'php,php php'idphp'php,php php'iephp'php,php php'ilphp'php,php php'imphp'php,php php'inphp'php,php php'infophp'php,php php'intphp'php,php php'iophp'php,php php'iqphp'php,
php php php php php php php php php'irphp'php,php php'isphp'php,php php'itphp'php,php php'jephp'php,php php'jmphp'php,php php'jophp'php,php php'jobsphp'php,php php'jpphp'php,php php'kephp'php,php php'kgphp'php,php php'khphp'php,php php'kiphp'php,php php'kmphp'php,php php'knphp'php,php php'kpphp'php,
php php php php php php php php php'krphp'php,php php'kwphp'php,php php'kyphp'php,php php'kzphp'php,php php'laphp'php,php php'lbphp'php,php php'lcphp'php,php php'liphp'php,php php'lkphp'php,php php'lrphp'php,php php'lsphp'php,php php'ltphp'php,php php'luphp'php,php php'lvphp'php,php php'lyphp'php,
php php php php php php php php php'maphp'php,php php'mcphp'php,php php'mdphp'php,php php'mephp'php,php php'mgphp'php,php php'mhphp'php,php php'milphp'php,php php'mkphp'php,php php'mlphp'php,php php'mmphp'php,php php'mnphp'php,php php'mophp'php,php php'mobiphp'php,php php'mpphp'php,
php php php php php php php php php'mqphp'php,php php'mrphp'php,php php'msphp'php,php php'mtphp'php,php php'muphp'php,php php'museumphp'php,php php'mvphp'php,php php'mwphp'php,php php'mxphp'php,php php'myphp'php,php php'mzphp'php,php php'naphp'php,php php'namephp'php,php php'ncphp'php,
php php php php php php php php php'nephp'php,php php'netphp'php,php php'nfphp'php,php php'ngphp'php,php php'niphp'php,php php'nlphp'php,php php'nophp'php,php php'npphp'php,php php'nrphp'php,php php'nuphp'php,php php'nzphp'php,php php'omphp'php,php php'orgphp'php,php php'paphp'php,php php'pephp'php,
php php php php php php php php php'pfphp'php,php php'pgphp'php,php php'phphp'php,php php'pkphp'php,php php'plphp'php,php php'pmphp'php,php php'pnphp'php,php php'prphp'php,php php'prophp'php,php php'psphp'php,php php'ptphp'php,php php'pwphp'php,php php'pyphp'php,php php'qaphp'php,php php'rephp'php,
php php php php php php php php php'rophp'php,php php'rsphp'php,php php'ruphp'php,php php'rwphp'php,php php'saphp'php,php php'sbphp'php,php php'scphp'php,php php'sdphp'php,php php'sephp'php,php php'sgphp'php,php php'shphp'php,php php'siphp'php,php php'sjphp'php,php php'skphp'php,php php'slphp'php,
php php php php php php php php php'smphp'php,php php'snphp'php,php php'sophp'php,php php'srphp'php,php php'stphp'php,php php'suphp'php,php php'svphp'php,php php'syphp'php,php php'szphp'php,php php'tcphp'php,php php'tdphp'php,php php'telphp'php,php php'tfphp'php,php php'tgphp'php,php php'thphp'php,
php php php php php php php php php'tjphp'php,php php'tkphp'php,php php'tlphp'php,php php'tmphp'php,php php'tnphp'php,php php'tophp'php,php php'tpphp'php,php php'trphp'php,php php'travelphp'php,php php'ttphp'php,php php'tvphp'php,php php'twphp'php,php php'tzphp'php,php php'uaphp'php,
php php php php php php php php php'ugphp'php,php php'ukphp'php,php php'umphp'php,php php'usphp'php,php php'uyphp'php,php php'uzphp'php,php php'vaphp'php,php php'vcphp'php,php php'vephp'php,php php'vgphp'php,php php'viphp'php,php php'vnphp'php,php php'vuphp'php,php php'wfphp'php,php php'wsphp'php,
php php php php php php php php php'yephp'php,php php'ytphp'php,php php'yuphp'php,php php'zaphp'php,php php'zmphp'php,php php'zwphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tldphp;

php php php php php/php*php*
php php php php php php*php Arrayphp forphp validphp Idns
php php php php php php*php php@seephp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/php Officialphp listphp ofphp supportedphp IDNphp Chars
php php php php php php*php php(php.ACphp)php Ascensionphp Islandphp httpphp:php/php/wwwphp.nicphp.acphp/pdfphp/ACphp-IDNphp-Policyphp.pdf
php php php php php php*php php(php.ARphp)php Argentiniaphp httpphp:php/php/wwwphp.nicphp.arphp/faqidnphp.html
php php php php php php*php php(php.ASphp)php Americanphp Samoaphp httpphp:php/php/wwwphp.nicphp.asphp/idnphp/charsphp.cfm
php php php php php php*php php(php.ATphp)php Austriaphp httpphp:php/php/wwwphp.nicphp.atphp/enphp/servicephp/technicalphp_informationphp/idnphp/charsetphp_converterphp/
php php php php php php*php php(php.BIZphp)php Internationalphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/
php php php php php php*php php(php.BRphp)php Brazilphp httpphp:php/php/registrophp.brphp/faqphp/faqphp6php.html
php php php php php php*php php(php.BVphp)php Bouvettphp Islandphp httpphp:php/php/wwwphp.noridphp.nophp/domeneregistreringphp/idnphp/idnphp_nyetegnphp.enphp.html
php php php php php php*php php(php.CATphp)php Catalanphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/catphp_caphp_php1php.php0php.html
php php php php php php*php php(php.CHphp)php Switzerlandphp httpsphp:php/php/nicphp.switchphp.chphp/regphp/ocViewphp.actionphp?resphp=EFphp6GWphp2JBPVTGphp6php7DLNIQXUphp2php3php4MNphp6SCphp3php3JNQQGIphp7Lphp6php#anhangphp1
php php php php php php*php php(php.CLphp)php Chilephp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/clphp_latnphp_php1php.php0php.html
php php php php php php*php php(php.COMphp)php Internationalphp httpphp:php/php/wwwphp.verisignphp.comphp/informationphp-servicesphp/namingphp-servicesphp/internationalizedphp-domainphp-namesphp/indexphp.html
php php php php php php*php php(php.DEphp)php Germanyphp httpphp:php/php/wwwphp.denicphp.dephp/enphp/domainsphp/idnsphp/listephp.html
php php php php php php*php php(php.DKphp)php Danmarkphp httpphp:php/php/wwwphp.dkphp-hostmasterphp.dkphp/indexphp.phpphp?idphp=php1php5php1
php php php php php php*php php(php.ESphp)php Spainphp httpsphp:php/php/wwwphp.nicphp.esphp/mediaphp/php2php0php0php8php-php0php5php/php1php2php1php0php1php4php7php7php0php5php2php8php7php.pdf
php php php php php php*php php(php.FIphp)php Finlandphp httpphp:php/php/wwwphp.ficoraphp.fiphp/enphp/indexphp/palvelutphp/fiverkkotunnuksetphp/aakkostenkayttophp.html
php php php php php php*php php(php.GRphp)php Greecephp httpsphp:php/php/grwebphp.icsphp.forthphp.grphp/CharacterTablephp1php_enphp.jsp
php php php php php php*php php(php.HUphp)php Hungaryphp httpphp:php/php/wwwphp.domainphp.huphp/domainphp/Englishphp/szabalyzatphp/szabalyzatphp.html
php php php php php php*php php(php.INFOphp)php Internationalphp httpphp:php/php/wwwphp.nicphp.infophp/infophp/idn
php php php php php php*php php(php.IOphp)php Britishphp Indianphp Oceanphp Territoryphp httpphp:php/php/wwwphp.nicphp.iophp/IOphp-IDNphp-Policyphp.pdf
php php php php php php*php php(php.IRphp)php Iranphp httpphp:php/php/wwwphp.nicphp.irphp/Allowablephp_Charactersphp_dotphp-iran
php php php php php php*php php(php.ISphp)php Icelandphp httpphp:php/php/wwwphp.isnicphp.isphp/domainphp/rulesphp.php
php php php php php php*php php(php.KRphp)php Koreaphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/krphp_kophp-krphp_php1php.php0php.html
php php php php php php*php php(php.LIphp)php Liechtensteinphp httpsphp:php/php/nicphp.switchphp.chphp/regphp/ocViewphp.actionphp?resphp=EFphp6GWphp2JBPVTGphp6php7DLNIQXUphp2php3php4MNphp6SCphp3php3JNQQGIphp7Lphp6php#anhangphp1
php php php php php php*php php(php.LTphp)php Lithuaniaphp httpphp:php/php/wwwphp.domregphp.ltphp/staticphp/docphp/publicphp/idnphp_symbolsphp-enphp.pdf
php php php php php php*php php(php.MDphp)php Moldovaphp httpphp:php/php/wwwphp.registerphp.mdphp/
php php php php php php*php php(php.MUSEUMphp)php Internationalphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/museumphp_latnphp_php1php.php0php.html
php php php php php php*php php(php.NETphp)php Internationalphp httpphp:php/php/wwwphp.verisignphp.comphp/informationphp-servicesphp/namingphp-servicesphp/internationalizedphp-domainphp-namesphp/indexphp.html
php php php php php php*php php(php.NOphp)php Norwayphp httpphp:php/php/wwwphp.noridphp.nophp/domeneregistreringphp/idnphp/idnphp_nyetegnphp.enphp.html
php php php php php php*php php(php.NUphp)php Niuephp httpphp:php/php/wwwphp.worldnamesphp.netphp/
php php php php php php*php php(php.ORGphp)php Internationalphp httpphp:php/php/wwwphp.pirphp.orgphp/indexphp.phpphp?dbphp=contentphp/FAQsphp&tblphp=FAQsphp_Registrantphp&idphp=php2
php php php php php php*php php(php.PEphp)php Peruphp httpsphp:php/php/wwwphp.nicphp.pephp/nuevasphp_politicasphp_faqphp_php2php.php
php php php php php php*php php(php.PLphp)php Polandphp httpphp:php/php/wwwphp.dnsphp.plphp/IDNphp/allowedphp_characterphp_setsphp.pdf
php php php php php php*php php(php.PRphp)php Puertophp Ricophp httpphp:php/php/wwwphp.nicphp.prphp/idnphp_rulesphp.asp
php php php php php php*php php(php.PTphp)php Portugalphp httpsphp:php/php/onlinephp.dnsphp.ptphp/dnsphp_php2php0php0php8php/dophp?comphp=DSphp;php8php2php1php6php3php2php0php2php3php3php;php1php1php1php;php+PAGEphp(php4php0php0php0php0php5php8php)php+Kphp-CATphp-CODIGOphp(Cphp.php1php2php5php)php+RCNTphp(php1php0php0php)php;
php php php php php php*php php(php.RUphp)php Russiaphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/ruphp_ruphp-ruphp_php1php.php0php.html
php php php php php php*php php(php.SAphp)php Saudiphp Arabiaphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/saphp_arphp_php1php.php0php.html
php php php php php php*php php(php.SEphp)php Swedenphp httpphp:php/php/wwwphp.iisphp.sephp/englishphp/IDNphp_campaignsitephp.shtmlphp?langphp=en
php php php php php php*php php(php.SHphp)php Saintphp Helenaphp httpphp:php/php/wwwphp.nicphp.shphp/SHphp-IDNphp-Policyphp.pdf
php php php php php php*php php(php.SJphp)php Svalbardphp andphp Janphp Mayenphp httpphp:php/php/wwwphp.noridphp.nophp/domeneregistreringphp/idnphp/idnphp_nyetegnphp.enphp.html
php php php php php php*php php(php.THphp)php Thailandphp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/thphp_thphp-thphp_php1php.php0php.html
php php php php php php*php php(php.TMphp)php Turkmenistanphp httpphp:php/php/wwwphp.nicphp.tmphp/TMphp-IDNphp-Policyphp.pdf
php php php php php php*php php(php.TRphp)php Turkeyphp httpsphp:php/php/wwwphp.nicphp.trphp/indexphp.php
php php php php php php*php php(php.VEphp)php Venicephp httpphp:php/php/wwwphp.ianaphp.orgphp/domainsphp/idnphp-tablesphp/tablesphp/vephp_esphp_php1php.php0php.html
php php php php php php*php php(php.VNphp)php Vietnamphp httpphp:php/php/wwwphp.vnnicphp.vnphp/englishphp/php5php-php6php-php3php0php0php-php2php-php2php-php0php4php-php2php0php0php7php1php1php1php5php.htmphp#php1php.php%php2php0Introduction
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validIdnsphp php=php arrayphp(
php php php php php php php php php'ACphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿāăąćĉċčďđēėęěĝġģĥħīįĵķĺļľŀłńņňŋőœŕŗřśŝşšţťŧūŭůűųŵŷphpźphpżphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'ARphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-ãçphp-êìíñphp-õüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'ASphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿāăąćĉċčďđēĕėęěĝğġģĥħĩīĭįıĵķĸĺļľłńņňŋōŏőœŕŗřśŝşšţťŧũūŭůűųŵŷphpźphpżphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'ATphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿœšphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'BIZphp'php php=php>php php'Hostnamephp/Bizphp.phpphp'php,
php php php php php php php php php'BRphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-ãçéíóphp-õúüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'BVphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáäphp-éêñphp-ôöøüčđńŋšŧphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'CATphp'php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphp·àçphp-éíïòóúüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'CHphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿœphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'CLphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíñóúüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'CNphp'php php php=php>php php'Hostnamephp/Cnphp.phpphp'php,
php php php php php php php php php'COMphp'php php=php>php php'Zendphp/Validatephp/Hostnamephp/Comphp.phpphp'php,
php php php php php php php php php'DEphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿăąāćĉčċďđĕěėęēğĝġģĥħĭĩįīıĵķĺľļłńňņŋŏőōœĸŕřŗśŝšşťţŧŭůűũųūŵŷphpźphpžphpżphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'DKphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäéöüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'ESphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáçèéíïñòóúüphp·php]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'EUphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zāăąćĉċčďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőœŕŗřśŝšťŧũūŭůűųŵŷphpźphpżphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zșțphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php4php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphpΐphpάphpέphpήphpίphpΰphpαphpβphpγphpδphpεphpζphpηphpθphpιphpκphpλphpμphpνphpξphpοphpπphpρphpςphpσphpτphpυphpφphpχphpψphpωphpϊphpϋphpόphpύphpώphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php5php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphpаphpбphpвphpгphpдphpеphpжphpзphpиphpйphpкphpлphpмphpнphpоphpпphpрphpсphpтphpуphpфphpхphpцphpчphpшphpщphpъphpыphpьphpэphpюphpяphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php6php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphpἀphp-phpἇphpἐphp-phpἕphpἠphp-phpἧphpἰphp-phpἷphpὀphp-phpὅphpὐphp-phpὗphpὠphp-phpὧphpὰphp-phpώphpᾀphp-phpᾇphpᾐphp-phpᾗphpᾠphp-phpᾧphpᾰphp-phpᾴphpᾶphpᾷphpῂphpῃphpῄphpῆphpῇphpῐphp-phpΐphpῖphpῗphpῠphp-phpῧphpῲphpῳphpῴphpῶphpῷphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'FIphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäåöphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'GRphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphpΆphpΈphpΉphpΊphpΌphpΎphp-phpΡphpΣphp-phpώphpἀphp-phpἕphpἘphp-phpἝphpἠphp-phpὅphpὈphp-phpὍphpὐphp-phpὗphpὙphpὛphpὝphpὟphp-phpώphpᾀphp-phpᾴphpᾶphp-phpᾼphpῂphpῃphpῄphpῆphp-phpῌphpῐphp-phpΐphpῖphp-phpΊphpῠphp-phpῬphpῲphpῳphpῴphpῶphp-phpῼphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'HKphp'php php php=php>php php'Zendphp/Validatephp/Hostnamephp/Cnphp.phpphp'php,
php php php php php php php php php'HUphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíóöúüőűphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'INFOphp'php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäåæéöøüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíóöúüőűphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záæéíðóöúýphpþphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php4php php=php>php php'php/php^php[php\xphp{ACphp0php0php}php-php\xphp{Dphp7Aphp3php}php]php{php1php,php1php7php}php$php/iuphp'php,
php php php php php php php php php php php php php5php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zāčēģīķļņōŗšūphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php6php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-ząčėęįšūųphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php7php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zóąćęłńśphpźphpżphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php8php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíñóúüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'IOphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿăąāćĉčċďđĕěėęēğĝġģĥħĭĩįīıĵķĺľļłńňņŋŏőōœĸŕřŗśŝšşťţŧŭůűũųūŵŷphpźphpžphpżphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'ISphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéýúíóphpþæöðphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'JPphp'php php php=php>php php'Zendphp/Validatephp/Hostnamephp/Jpphp.phpphp'php,
php php php php php php php php php'KRphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{ACphp0php0php}php-php\xphp{Dphp7Aphp3php}php]php{php1php,php1php7php}php$php/iuphp'php)php,
php php php php php php php php php'LIphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿœphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'LTphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9ąčęėįšųūphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'MDphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9ăâîşţphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'MUSEUMphp'php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿāăąćċčďđēėęěğġģħīįıķĺļľłńņňŋōőœŕŗřśşšţťŧūůűųŵŷphpźphpżphpžǎǐǒǔphp\xphp{php0php1Ephp5php}php\xphp{php0php1Ephp7php}php\xphp{php0php1Ephp9php}php\xphp{php0php1EFphp}əphp\xphp{php0php2php9php2php}ẁẃẅỳphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'NETphp'php php=php>php php'Zendphp/Validatephp/Hostnamephp/Comphp.phpphp'php,
php php php php php php php php php'NOphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáäphp-éêñphp-ôöøüčđńŋšŧphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'NUphp'php php php=php>php php'Zendphp/Validatephp/Hostnamephp/Comphp.phpphp'php,
php php php php php php php php php'ORGphp'php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíñóúüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zóąćęłńśphpźphpżphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záäåæéëíðóöøúüýphpþphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php4php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíóöúüőűphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php5php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-ząčėęįšūųphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php6php php=php>php php'php/php^php[php\xphp{ACphp0php0php}php-php\xphp{Dphp7Aphp3php}php]php{php1php,php1php7php}php$php/iuphp'php,
php php php php php php php php php php php php php7php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zāčēģīķļņōŗšūphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'PEphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zñáéíóúüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'PLphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zāčēģīķļņōŗšūphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}phpаphp-phpиphpкphp-phpшphp\xphp{php0php4php5php0php}phpѓphpѕphpјphpљphpњphpќphpџphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zâîăşţphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php4php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpяphpёphp\xphp{php0php4Cphp2php}php]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php5php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáâèéêìíîòóôùúûċġħphpżphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php6php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàäåæéêòóôöøüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php7php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zóąćęłńśphpźphpżphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php8php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáâãçéêíòóôõúüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php9php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zâîăşţphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php0php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záäéíóôúýčďĺľňŕšťphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php1php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zçëphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php2php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpиphpкphp-phpшphpђphpјphpљphpњphpћphpџphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php3php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zćčđšphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php4php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zâçöûüğışphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php5php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíñóúüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php6php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäõöüšphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php7php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zĉĝĥĵŝŭphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php8php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zâäéëîôphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php1php9php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáâäåæçèéêëìíîïðñòôöøùúûüýćčłńřśšphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php0php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäåæõöøüšphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php1php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáçèéìíòóùúphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php2php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáéíóöúüőűphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php3php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpΐphpάphp-phpώphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php4php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáâåæçèéêëðóôöøüphpþœphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php5php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záäéíóöúüýčďěňřšťůphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php6php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphp·àçèéíïòóúüphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php7php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpъphpьphpюphpяphp\xphp{php0php4php5php0php}php\xphp{php0php4php5Dphp}php]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php8php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpяphpёphpіphpўphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php2php9php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-ząčėęįšūųphpžphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php0php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záäåæéëíðóöøúüýphpþphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php1php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàâæçèéêëîïñôùûüÿœphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php2php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpщphpъphpыphpьphpэphpюphpяphpёphpєphpіphpїphpґphp]php{php1php,php6php3php}php$php/iuphp'php,
php php php php php php php php php php php php php3php3php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpאphp-phpתphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'PRphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíóúñäëïüöâêîôûàèùæçœãõphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'PTphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záàâãçéêíóôõúphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'RUphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9phpаphp-phpяphpёphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'SAphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php.php0php-php9php\xphp{php0php6php2php1php}php-php\xphp{php0php6php3Aphp}php\xphp{php0php6php4php1php}php-php\xphp{php0php6php4Aphp}php\xphp{php0php6php6php0php}php-php\xphp{php0php6php6php9php}php]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'SEphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zäåéöüphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'SHphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿăąāćĉčċďđĕěėęēğĝġģĥħĭĩįīıĵķĺľļłńňņŋŏőōœĸŕřŗśŝšşťţŧŭůűũųūŵŷphpźphpžphpżphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'SJphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàáäphp-éêñphp-ôöøüčđńŋšŧphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'THphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zphp\xphp{php0Ephp0php1php}php-php\xphp{php0Ephp3Aphp}php\xphp{php0Ephp4php0php}php-php\xphp{php0Ephp4Dphp}php\xphp{php0Ephp5php0php}php-php\xphp{php0Ephp5php9php}php]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'TMphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zàphp-öøphp-ÿāăąćĉċčďđēėęěĝġģĥħīįĵķĺļľŀłńņňŋőœŕŗřśŝşšţťŧūŭůűųŵŷphpźphpżphpžphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'TWphp'php php php=php>php php'Zendphp/Validatephp/Hostnamephp/Cnphp.phpphp'php,
php php php php php php php php php'TRphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-zğıüşöçphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'VEphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php0php2dphp}php0php-php9aphp-záéíóúüñphp]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'VNphp'php php php=php>php arrayphp(php1php php=php>php php'php/php^php[ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚÝàáâãèéêìíòóôõùúýĂăĐđĨĩŨũƠơƯưphp\xphp{php1EAphp0php}php-php\xphp{php1EFphp9php}php]php{php1php,php6php3php}php$php/iuphp'php)php,
php php php php php php php php php'phpاphpیphpرphpاphpنphp'php php=php>php arrayphp(php1php php=php>php php'php/php^php[php\xphp{php0php6php2php1php}php-php\xphp{php0php6php2php4php}php\xphp{php0php6php2php6php}php-php\xphp{php0php6php3Aphp}php\xphp{php0php6php4php1php}php\xphp{php0php6php4php2php}php\xphp{php0php6php4php4php}php-php\xphp{php0php6php4php8php}php\xphp{php0php6php7Ephp}php\xphp{php0php6php8php6php}php\xphp{php0php6php9php8php}php\xphp{php0php6Aphp9php}php\xphp{php0php6AFphp}php\xphp{php0php6CCphp}php\xphp{php0php6Fphp0php}php-php\xphp{php0php6Fphp9php}php]php{php1php,php3php0php}php$php/iuphp'php)php,
php php php php php php php php php'php中php国php'php php=php>php php'Zendphp/Validatephp/Hostnamephp/Cnphp.phpphp'php,
php php php php php php php php php'php公php司php'php php=php>php php'Zendphp/Validatephp/Hostnamephp/Cnphp.phpphp'php,
php php php php php php php php php'php网php络php'php php=php>php php'Zendphp/Validatephp/Hostnamephp/Cnphp.phpphp'
php php php php php)php;

php php php php protectedphp php$php_idnLengthphp php=php arrayphp(
php php php php php php php php php'BIZphp'php php=php>php arrayphp(php5php php=php>php php1php7php,php php1php1php php=php>php php1php5php,php php1php2php php=php>php php2php0php)php,
php php php php php php php php php'CNphp'php php php=php>php arrayphp(php1php php=php>php php2php0php)php,
php php php php php php php php php'COMphp'php php=php>php arrayphp(php3php php=php>php php1php7php,php php5php php=php>php php2php0php)php,
php php php php php php php php php'HKphp'php php php=php>php arrayphp(php1php php=php>php php1php5php)php,
php php php php php php php php php'INFOphp'php=php>php arrayphp(php4php php=php>php php1php7php)php,
php php php php php php php php php'KRphp'php php php=php>php arrayphp(php1php php=php>php php1php7php)php,
php php php php php php php php php'NETphp'php php=php>php arrayphp(php3php php=php>php php1php7php,php php5php php=php>php php2php0php)php,
php php php php php php php php php'ORGphp'php php=php>php arrayphp(php6php php=php>php php1php7php)php,
php php php php php php php php php'TWphp'php php php=php>php arrayphp(php1php php=php>php php2php0php)php,
php php php php php php php php php'phpاphpیphpرphpاphpنphp'php php=php>php arrayphp(php1php php=php>php php3php0php)php,
php php php php php php php php php'php中php国php'php php=php>php arrayphp(php1php php=php>php php2php0php)php,
php php php php php php php php php'php公php司php'php php=php>php arrayphp(php1php php=php>php php2php0php)php,
php php php php php php php php php'php网php络php'php php=php>php arrayphp(php1php php=php>php php2php0php)php,
php php php php php)php;

php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'allowphp'php php=php>php selfphp:php:ALLOWphp_DNSphp,
php php php php php php php php php'idnphp'php php php php=php>php truephp,
php php php php php php php php php'tldphp'php php php php=php>php truephp,
php php php php php php php php php'ipphp'php php php php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp integerphp php php php php php php php php php php$allowphp php php php php php php OPTIONALphp Setphp whatphp typesphp ofphp hostnamephp tophp allowphp php(defaultphp ALLOWphp_DNSphp)
php php php php php php*php php@paramphp booleanphp php php php php php php php php php php$validateIdnphp OPTIONALphp Setphp whetherphp IDNphp domainsphp arephp validatedphp php(defaultphp truephp)
php php php php php php*php php@paramphp booleanphp php php php php php php php php php php$validateTldphp OPTIONALphp Setphp whetherphp thephp TLDphp elementphp ofphp aphp hostnamephp isphp validatedphp php(defaultphp truephp)
php php php php php php*php php@paramphp Zendphp_Validatephp_Ipphp php$ipValidatorphp OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php php@seephp httpphp:php/php/wwwphp.ianaphp.orgphp/cctldphp/specificationsphp-policiesphp-cctldsphp-php0php1aprphp0php2php.htmphp php Technicalphp Specificationsphp forphp ccTLDs
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'allowphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'idnphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'tldphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'ipphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$optionsphp php+php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp optionsphp forphp thisphp validator
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Validatephp_Hostname
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAllowphp(php$optionsphp[php'allowphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idnphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setValidateIdnphp(php$optionsphp[php'idnphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'tldphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setValidateTldphp(php$optionsphp[php'tldphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'ipphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setIpValidatorphp(php$optionsphp[php'ipphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp ipphp validator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Validatephp_Ip
php php php php php php*php/
php php php php publicphp functionphp getIpValidatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'ipphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_Validatephp_Ipphp php$ipValidatorphp OPTIONAL
php php php php php php*php php@returnphp voidphp;
php php php php php php*php/
php php php php publicphp functionphp setIpValidatorphp(Zendphp_Validatephp_Ipphp php$ipValidatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ipValidatorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$ipValidatorphp php=php newphp Zendphp_Validatephp_Ipphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'ipphp'php]php php=php php$ipValidatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp allowphp option
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getAllowphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'allowphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp allowphp option
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$allow
php php php php php php*php php@returnphp Zendphp_Validatephp_Hostnamephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAllowphp(php$allowphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'allowphp'php]php php=php php$allowphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp idnphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getValidateIdnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'idnphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp IDNphp domainsphp arephp validated
php php php php php php*
php php php php php php*php Thisphp onlyphp appliesphp whenphp DNSphp hostnamesphp arephp validated
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$allowedphp Setphp allowedphp tophp truephp tophp validatephp IDNsphp,php andphp falsephp tophp notphp validatephp them
php php php php php php*php/
php php php php publicphp functionphp setValidateIdnphp php(php$allowedphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'idnphp'php]php php=php php(boolphp)php php$allowedphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp tldphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getValidateTldphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'tldphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp thephp TLDphp elementphp ofphp aphp hostnamephp isphp validated
php php php php php php*
php php php php php php*php Thisphp onlyphp appliesphp whenphp DNSphp hostnamesphp arephp validated
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$allowedphp Setphp allowedphp tophp truephp tophp validatephp TLDsphp,php andphp falsephp tophp notphp validatephp them
php php php php php php*php/
php php php php publicphp functionphp setValidateTldphp php(php$allowedphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'tldphp'php]php php=php php(boolphp)php php$allowedphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp php$valuephp isphp aphp validphp hostnamephp withphp respectphp tophp thephp currentphp allowphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp ifphp aphp fatalphp errorphp occursphp forphp validationphp process
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php php/php/php Checkphp inputphp againstphp IPphp addressphp schema
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php[php0php-php9php.aphp-ephp:php.php]php*php$php/iphp'php,php php$valuephp)php php&php&
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'ipphp'php]php-php>setTranslatorphp(php$thisphp-php>getTranslatorphp(php)php)php-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php ifphp php(php!php(php$thisphp-php>php_optionsphp[php'allowphp'php]php php&php selfphp:php:ALLOWphp_IPphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:IPphp_ADDRESSphp_NOTphp_ALLOWEDphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php RFCphp3php9php8php6php php3php.php2php.php2php statesphp:
php php php php php php php php php/php/php 
php php php php php php php php php/php/php php php php php Thephp rightmostphp domainphp labelphp ofphp aphp fullyphp qualifiedphp domainphp name
php php php php php php php php php/php/php php php php php inphp DNSphp mayphp bephp followedphp byphp aphp singlephp php"php.php"php andphp shouldphp bephp ifphp itphp isphp 
php php php php php php php php php/php/php php php php php necessaryphp tophp distinguishphp betweenphp thephp completephp domainphp namephp and
php php php php php php php php php/php/php php php php php somephp localphp domainphp.
php php php php php php php php php/php/php php php php php 
php php php php php php php php php/php/php Stripphp trailingphp php'php.php'php sincephp itphp isphp notphp necessaryphp tophp validatephp aphp nonphp-IP
php php php php php php php php php/php/php hostnamephp.
php php php php php php php php php/php/
php php php php php php php php php/php/php php(seephp ZFphp-php6php3php6php3php)
php php php php php php php php ifphp php(substrphp(php$valuephp,php php-php1php)php php=php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php0php,php strlenphp(php$valuephp)php-php1php)php;
php php php php php php php php php}
php php php php php php php php 
php php php php php php php php php/php/php Checkphp inputphp againstphp DNSphp hostnamephp schema
php php php php php php php php php$domainPartsphp php=php explodephp(php'php.php'php,php php$valuephp)php;
php php php php php php php php ifphp php(php(countphp(php$domainPartsphp)php php>php php1php)php php&php&php php(strlenphp(php$valuephp)php php>php=php php4php)php php&php&php php(strlenphp(php$valuephp)php <php=php php2php5php4php)php)php php{
php php php php php php php php php php php php php$statusphp php=php falsephp;

php php php php php php php php php php php php php$origencphp php=php iconvphp_getphp_encodingphp(php'internalphp_encodingphp'php)php;
php php php php php php php php php php php php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php/php/php Firstphp checkphp TLD
php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php(php[php^php.php]php{php2php,php1php0php}php)php$php/iphp'php,php endphp(php$domainPartsphp)php,php php$matchesphp)php php|php|
php php php php php php php php php php php php php php php php php php php php php(endphp(php$domainPartsphp)php php=php=php php'phpاphpیphpرphpاphpنphp'php)php php|php|php php(endphp(php$domainPartsphp)php php=php=php php'php中php国php'php)php php|php|
php php php php php php php php php php php php php php php php php php php php php(endphp(php$domainPartsphp)php php=php=php php'php公php司php'php)php php|php|php php(endphp(php$domainPartsphp)php php=php=php php'php网php络php'php)php)php php{

php php php php php php php php php php php php php php php php php php php php resetphp(php$domainPartsphp)php;

php php php php php php php php php php php php php php php php php php php php php/php/php Hostnamephp charactersphp arephp:php php*php(labelphp dotphp)php(labelphp dotphp labelphp)php;php maxphp php2php5php4php chars
php php php php php php php php php php php php php php php php php php php php php/php/php labelphp:php idphp-prefixphp php[php*ldhphp{php6php1php}php idphp-prefixphp]php;php maxphp php6php3php chars
php php php php php php php php php php php php php php php php php php php php php/php/php idphp-prefixphp:php alphaphp php/php digit
php php php php php php php php php php php php php php php php php php php php php/php/php ldhphp:php alphaphp php/php digitphp php/php dash

php php php php php php php php php php php php php php php php php php php php php/php/php Matchphp TLDphp againstphp knownphp list
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tldphp php=php strtolowerphp(php$matchesphp[php1php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'tldphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$thisphp-php>php_tldphp,php php$thisphp-php>php_validTldsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:UNKNOWNphp_TLDphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$statusphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php Matchphp againstphp IDNphp hostnames
php php php php php php php php php php php php php php php php php php php php php php*php Notephp:php Keepphp labelphp regexphp shortphp tophp avoidphp issuesphp withphp longphp patternsphp whenphp matchingphp IDNphp hostnames
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Hostnamephp_Interface
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php$regexCharsphp php=php arrayphp(php0php php=php>php php'php/php^php[aphp-zphp0php-php9php\xphp2dphp]php{php1php,php6php3php}php$php/iphp'php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'idnphp'php]php php&php&php php issetphp(php$thisphp-php>php_validIdnsphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_validIdnsphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$regexCharsphp php+php=php includephp(php$thisphp-php>php_validIdnsphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$regexCharsphp php+php=php php$thisphp-php>php_validIdnsphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp eachphp hostnamephp part
php php php php php php php php php php php php php php php php php php php php php$checkphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$domainPartsphp asphp php$domainPartphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Decodephp Punycodephp domainnamesphp tophp IDN
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$domainPartphp,php php'xnphp-php-php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$domainPartphp php=php php$thisphp-php>decodePunycodephp(substrphp(php$domainPartphp,php php4php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$domainPartphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp dashphp php(php-php)php doesphp notphp startphp,php endphp orphp appearphp inphp php3rdphp andphp php4thphp positions
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(strposphp(php$domainPartphp,php php'php-php'php)php php=php=php=php php0php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php|php|php php(php(strlenphp(php$domainPartphp)php php>php php2php)php php&php&php php(strposphp(php$domainPartphp,php php'php-php'php,php php2php)php php=php=php php2php)php php&php&php php(strposphp(php$domainPartphp,php php'php-php'php,php php3php)php php=php=php php3php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php|php|php php(strposphp(php$domainPartphp,php php'php-php'php)php php=php=php=php php(strlenphp(php$domainPartphp)php php-php php1php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_DASHphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$statusphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp eachphp domainphp part
php php php php php php php php php php php php php php php php php php php php php php php php php$checkedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$regexCharsphp asphp php$regexKeyphp php=php>php php$regexCharphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$statusphp php=php php@pregphp_matchphp(php$regexCharphp,php php$domainPartphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$statusphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lengthphp php=php php6php3php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(strtoupperphp(php$thisphp-php>php_tldphp)php,php php$thisphp-php>php_idnLengthphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php(arrayphp_keyphp_existsphp(php$regexKeyphp,php php$thisphp-php>php_idnLengthphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lengthphp php=php php$thisphp-php>php_idnLengthphp[strtoupperphp(php$thisphp-php>php_tldphp)php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(iconvphp_strlenphp(php$domainPartphp,php php'UTFphp-php8php'php)php php>php php$lengthphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_HOSTNAMEphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$checkedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$checkedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php+php+php$checkphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Ifphp onephp ofphp thephp labelsphp doesnphp'tphp matchphp,php thephp hostnamephp isphp invalid
php php php php php php php php php php php php php php php php php php php php ifphp php(php$checkphp php!php=php=php countphp(php$domainPartsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_HOSTNAMEphp_SCHEMAphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$statusphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Hostnamephp notphp longphp enough
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:UNDECIPHERABLEphp_TLDphp)php;
php php php php php php php php php php php php php php php php php php php php php$statusphp php=php falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php whilephp php(falsephp)php;

php php php php php php php php php php php php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php$origencphp)php;
php php php php php php php php php php php php php/php/php Ifphp thephp inputphp passesphp asphp anphp Internetphp domainphp namephp,php andphp domainphp namesphp arephp allowedphp,php thenphp thephp hostname
php php php php php php php php php php php php php/php/php passesphp validation
php php php php php php php php php php php php ifphp php(php$statusphp php&php&php php(php$thisphp-php>php_optionsphp[php'allowphp'php]php php&php selfphp:php:ALLOWphp_DNSphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_optionsphp[php'allowphp'php]php php&php selfphp:php:ALLOWphp_DNSphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_HOSTNAMEphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp URIphp Syntaxphp php(RFCphp3php9php8php6php)
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'allowphp'php]php php&php selfphp:php:ALLOWphp_URIphp)php php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^php(php[aphp-zAphp-Zphp0php-php9php-php.php_php~php!php$php&php\php'php(php)php*php+php,php;php=php]php|php%php[php[php:xdigitphp:php]php]php{php2php}php)php{php1php,php2php5php4php}php$php/iphp"php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_URIphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp inputphp againstphp localphp networkphp namephp schemaphp;php lastphp chancephp tophp passphp validation
php php php php php php php php php$regexLocalphp php=php php'php/php^php(php(php[aphp-zAphp-Zphp0php-php9php\xphp2dphp]php{php1php,php6php3php}php\xphp2ephp)php*php[aphp-zAphp-Zphp0php-php9php\xphp2dphp]php{php1php,php6php3php}php)php{php1php,php2php5php4php}php$php/php'php;
php php php php php php php php php$statusphp php=php php@pregphp_matchphp(php$regexLocalphp,php php$valuephp)php;

php php php php php php php php php/php/php Ifphp thephp inputphp passesphp asphp aphp localphp networkphp namephp,php andphp localphp networkphp namesphp arephp allowedphp,php thenphp the
php php php php php php php php php/php/php hostnamephp passesphp validation
php php php php php php php php php$allowLocalphp php=php php$thisphp-php>php_optionsphp[php'allowphp'php]php php&php selfphp:php:ALLOWphp_LOCALphp;
php php php php php php php php ifphp php(php$statusphp php&php&php php$allowLocalphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp thephp inputphp doesphp notphp passphp asphp aphp localphp networkphp namephp,php addphp aphp message
php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_LOCALphp_NAMEphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp localphp networkphp namesphp arephp notphp allowedphp,php addphp aphp message
php php php php php php php php ifphp php(php$statusphp php&php&php php!php$allowLocalphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:LOCALphp_NAMEphp_NOTphp_ALLOWEDphp)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp aphp punycodephp encodedphp stringphp tophp itphp'sphp originalphp utfphp8php string
php php php php php php*php Inphp casephp ofphp aphp decodingphp failurephp thephp originalphp stringphp isphp returned
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$encodedphp Punycodephp encodedphp stringphp tophp decode
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp decodePunycodephp(php$encodedphp)
php php php php php{
php php php php php php php php php$foundphp php=php pregphp_matchphp(php'php/php(php[php^aphp-zphp0php-php9php\xphp2dphp]php{php1php,php1php0php}php)php$php/iphp'php,php php$encodedphp)php;
php php php php php php php php ifphp php(emptyphp(php$encodedphp)php php|php|php php(php$foundphp php>php php0php)php)php php{
php php php php php php php php php php php php php/php/php nophp punycodephp encodedphp stringphp,php returnphp asphp is
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CANNOTphp_DECODEphp_PUNYCODEphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php strrposphp(php$encodedphp,php php'php-php'php)php;
php php php php php php php php ifphp php(php$separatorphp php>php php0php)php php{
php php php php php php php php php php php php forphp php(php$xphp php=php php0php;php php$xphp <php php$separatorphp;php php+php+php$xphp)php php{
php php php php php php php php php php php php php php php php php/php/php preparephp decodingphp matrix
php php php php php php php php php php php php php php php php php$decodedphp[php]php php=php ordphp(php$encodedphp[php$xphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CANNOTphp_DECODEphp_PUNYCODEphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$lengthdphp php=php countphp(php$decodedphp)php;
php php php php php php php php php$lengthephp php=php strlenphp(php$encodedphp)php;

php php php php php php php php php/php/php decoding
php php php php php php php php php$initphp php php=php truephp;
php php php php php php php php php$basephp php php=php php7php2php;
php php php php php php php php php$indexphp php=php php0php;
php php php php php php php php php$charphp php php=php php0xphp8php0php;

php php php php php php php php forphp php(php$indexephp php=php php(php$separatorphp)php php?php php(php$separatorphp php+php php1php)php php:php php0php;php php$indexephp <php php$lengthephp;php php+php+php$lengthdphp)php php{
php php php php php php php php php php php php forphp php(php$oldphp_indexphp php=php php$indexphp,php php$posphp php=php php1php,php php$keyphp php=php php3php6php;php php1php php;php php$keyphp php+php=php php3php6php)php php{
php php php php php php php php php php php php php php php php php$hexphp php php php=php ordphp(php$encodedphp[php$indexephp+php+php]php)php;
php php php php php php php php php php php php php php php php php$digitphp php=php php(php$hexphp php-php php4php8php <php php1php0php)php php?php php$hexphp php-php php2php2
php php php php php php php php php php php php php php php php php php php php php php php php:php php(php(php$hexphp php-php php6php5php <php php2php6php)php php?php php$hexphp php-php php6php5
php php php php php php php php php php php php php php php php php php php php php php php php:php php(php(php$hexphp php-php php9php7php <php php2php6php)php php?php php$hexphp php-php php9php7
php php php php php php php php php php php php php php php php php php php php php php php php:php php3php6php)php)php;

php php php php php php php php php php php php php php php php php$indexphp php+php=php php$digitphp php*php php$posphp;
php php php php php php php php php php php php php php php php php$tagphp php php php php=php php(php$keyphp <php=php php$basephp)php php?php php1php php:php php(php(php$keyphp php>php=php php$basephp php+php php2php6php)php php?php php2php6php php:php php(php$keyphp php-php php$basephp)php)php;
php php php php php php php php php php php php php php php php ifphp php(php$digitphp <php php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$posphp php=php php(intphp)php php(php$posphp php*php php(php3php6php php-php php$tagphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$deltaphp php php php=php intvalphp(php$initphp php?php php(php(php$indexphp php-php php$oldphp_indexphp)php php/php php7php0php0php)php php:php php(php(php$indexphp php-php php$oldphp_indexphp)php php/php php2php)php)php;
php php php php php php php php php php php php php$deltaphp php php+php=php intvalphp(php$deltaphp php/php php(php$lengthdphp php+php php1php)php)php;
php php php php php php php php php php php php forphp php(php$keyphp php=php php0php;php php$deltaphp php>php php9php1php0php php/php php2php;php php$keyphp php+php=php php3php6php)php php{
php php php php php php php php php php php php php php php php php$deltaphp php=php intvalphp(php$deltaphp php/php php3php5php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$basephp php php php=php intvalphp(php$keyphp php+php php3php6php php*php php$deltaphp php/php php(php$deltaphp php+php php3php8php)php)php;
php php php php php php php php php php php php php$initphp php php php=php falsephp;
php php php php php php php php php php php php php$charphp php php+php=php php(intphp)php php(php$indexphp php/php php(php$lengthdphp php+php php1php)php)php;
php php php php php php php php php php php php php$indexphp php%php=php php(php$lengthdphp php+php php1php)php;
php php php php php php php php php php php php ifphp php(php$lengthdphp php>php php0php)php php{
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php$lengthdphp;php php$iphp php>php php$indexphp;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php php php php php$decodedphp[php$iphp]php php=php php$decodedphp[php(php$iphp php-php php1php)php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$decodedphp[php$indexphp+php+php]php php=php php$charphp;
php php php php php php php php php}

php php php php php php php php php/php/php convertphp decodedphp ucsphp4php tophp utfphp8php string
php php php php php php php php foreachphp php(php$decodedphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp <php php1php2php8php)php php{
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php=php chrphp(php$valuephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$valuephp <php php(php1php <php<php php1php1php)php)php php{
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php php=php chrphp(php1php9php2php php+php php(php$valuephp php>php>php php6php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php$valuephp php&php php6php3php)php)php;
php php php php php php php php php php php php php}php elseifphp php(php$valuephp <php php(php1php <php<php php1php6php)php)php php{
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php php=php chrphp(php2php2php4php php+php php(php$valuephp php>php>php php1php2php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php(php$valuephp php>php>php php6php)php php&php php6php3php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php$valuephp php&php php6php3php)php)php;
php php php php php php php php php php php php php}php elseifphp php(php$valuephp <php php(php1php <php<php php2php1php)php)php php{
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php php=php chrphp(php2php4php0php php+php php(php$valuephp php>php>php php1php8php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php(php$valuephp php>php>php php1php2php)php php&php php6php3php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php(php$valuephp php>php>php php6php)php php&php php6php3php)php)php;
php php php php php php php php php php php php php php php php php$decodedphp[php$keyphp]php php.php=php chrphp(php1php2php8php php+php php(php$valuephp php&php php6php3php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CANNOTphp_DECODEphp_PUNYCODEphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php$decodedphp)php;
php php php php php}
php}
