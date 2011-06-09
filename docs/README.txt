README
php=php=php=php=php=php=

Thisphp directoryphp shouldphp bephp usedphp tophp placephp projectphp specficphp documentationphp including
butphp notphp limitedphp tophp projectphp notesphp,php generatedphp APIphp/phpdocphp documentationphp,php orphp 
manualphp filesphp generatedphp orphp handphp writtenphp.php php Ideallyphp,php thisphp directoryphp wouldphp remain
inphp yourphp developmentphp environmentphp onlyphp andphp shouldphp notphp bephp deployedphp withphp your
applicationphp tophp itphp'sphp finalphp productionphp locationphp.


Settingphp Upphp Yourphp VHOST
php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=

Thephp followingphp isphp aphp samplephp VHOSTphp youphp mightphp wantphp tophp considerphp forphp yourphp projectphp.

php<VirtualHostphp php*php:php8php0php>
php php php DocumentRootphp php"php/homephp/sitesphp/maerdophp-wsphp/maerdophp/publicphp"
php php php ServerNamephp maerdophp.local

php php php php#php Thisphp shouldphp bephp omittedphp inphp thephp productionphp environment
php php php SetEnvphp APPLICATIONphp_ENVphp development
php php php php 
php php php php<Directoryphp php"php/homephp/sitesphp/maerdophp-wsphp/maerdophp/publicphp"php>
php php php php php php php Optionsphp Indexesphp MultiViewsphp FollowSymLinks
php php php php php php php AllowOverridephp All
php php php php php php php Orderphp allowphp,deny
php php php php php php php Allowphp fromphp all
php php php <php/Directoryphp>
php php php php 
<php/VirtualHostphp>
