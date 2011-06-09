SETphp SQLphp_MODEphp=php"NOphp_AUTOphp_VALUEphp_ONphp_ZEROphp"php;

CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`aclphp_php_resourcephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`aclphp_php_rolephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`aclphp_php_rolephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`parentphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`rolephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)php,
php php UNIQUEphp KEYphp php`rolephp`php php(php`rolephp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;

CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`actionphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`controllerphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php2php0php)php NOTphp NULLphp,
php php php`descriptionphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_authphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`modulephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`tablephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`databasephp_namephp`php varcharphp(php2php5php)php NOTphp NULLphp,
php php php`usernamephp_fieldphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`passwordphp_fieldphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`rolephp_fieldphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_authphp_php_rolephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`caphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`rolephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`urlphp`php varcharphp(php2php5php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_cachephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`typephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`backendphp_typephp`php varcharphp(php2php0php)php NOTphp NULLphp,
php php php`defaultphp`php enumphp(php'yesphp'php,php'nophp'php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_cachephp_php_backendphp_php_filephp_php_optionphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`ccphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`cachephp_dirphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`filephp_lockingphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`readphp_controlphp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`readphp_controlphp_typephp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`hashedphp_directoryphp_levelphp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`hashedphp_directoryphp_umaskphp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`metatadatasphp_arrayphp_maxphp_sizephp`php varcharphp(php1php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_cachephp_php_backendphp_php_sqlitephp_php_optionphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`ccphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`cachephp_dirphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`automaticphp_vacuumphp_factorphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`cachephp_dbphp_completephp_pathphp`php varcharphp(php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_cachephp_php_frontendoptionphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`ccphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`optionphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_databasephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`adapterphp`php varcharphp(php1php5php)php NOTphp NULLphp,
php php php`hostnamephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`databasephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`usernamephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`passwordphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_databasemodulephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`modulephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`databasephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;



CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`componentphp_php_translatephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`modulephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`identifiantphp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`localephp`php varcharphp(php5php)php NOTphp NULLphp,
php php php`languagephp_namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`defaultphp`php intphp(php1php1php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`controllerphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`modulephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`descriptionphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)php,
php php KEYphp php`modulephp_idphp`php php(php`modulephp_idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`templatephp`php varcharphp(php1php0php0php)php NOTphp NULLphp,
php php php`actionphp`php varcharphp(php1php0php0php)php NOTphp NULLphp,
php php php`methodphp`php enumphp(php'postphp'php,php'getphp'php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`typephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_attribsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_filtersphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`filterphp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_filtersphp_optionsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_filtersphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`optionphp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_multioptionsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_optionsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_typephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`typephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp php DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php2php0php php;


INSERTphp INTOphp php`formphp_php_fieldphp_typephp`php php(php`idphp`php,php php`typephp`php)php VALUES
php(php1php,php php'Buttonphp'php)php,
php(php2php,php php'Captchaphp'php)php,
php(php3php,php php'Checkboxphp'php)php,
php(php4php,php php'Exceptionphp'php)php,
php(php5php,php php'Filephp'php)php,
php(php6php,php php'Hashphp'php)php,
php(php7php,php php'Hiddenphp'php)php,
php(php8php,php php'Imagephp'php)php,
php(php9php,php php'Multiphp'php)php,
php(php1php0php,php php'MultiCheckboxphp'php)php,
php(php1php1php,php php'Multiselectphp'php)php,
php(php1php2php,php php'Passwordphp'php)php,
php(php1php3php,php php'Radiophp'php)php,
php(php1php4php,php php'Resetphp'php)php,
php(php1php5php,php php'Selectphp'php)php,
php(php1php6php,php php'Submitphp'php)php,
php(php1php7php,php php'Textphp'php)php,
php(php1php8php,php php'Textareaphp'php)php,
php(php1php9php,php php'Xhtmlphp'php)php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_validatorsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`validatorphp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_validatorsphp_messagephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_validatorsphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`keyphp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`messagephp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`formphp_php_fieldphp_validatorsphp_optionsphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`formphp_php_fieldphp_validatorsphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`optionphp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`localephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`localephp`php varcharphp(php1php0php)php NOTphp NULLphp,
php php php`languagephp_namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`modulephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`descriptionphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`modulephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`controllerphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`actionphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`namephp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`urlphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php php`descriptionphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)php,
php php UNIQUEphp KEYphp php`urlphp`php php(php`urlphp`php)php,
php php KEYphp php`actionphp_idphp`php php(php`actionphp_idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp_php_cssphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`identifiantphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`filephp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp_php_javascriptphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`identifiantphp`php varcharphp(php5php0php)php NOTphp NULLphp,
php php php`filephp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp_php_metaphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`localephp`php varcharphp(php1php0php)php NOTphp NULLphp,
php php php`metaphp`php varcharphp(php2php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp_php_navigationphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`parentphp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`labelphp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`pagephp_php_titlephp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`pagephp_idphp`php intphp(php1php1php)php NOTphp NULLphp,
php php php`localephp`php varcharphp(php1php0php)php NOTphp NULLphp,
php php php`valuephp`php varcharphp(php2php5php5php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)php,
php php KEYphp php`pagephp_idphp`php php(php`pagephp_idphp`php)
php)php ENGINEphp=MyISAMphp DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php1php php;


CREATEphp TABLEphp IFphp NOTphp EXISTSphp php`usersphp`php php(
php php php`idphp`php intphp(php1php1php)php NOTphp NULLphp AUTOphp_INCREMENTphp,
php php php`namephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`firstnamephp`php varcharphp(php3php0php)php NOTphp NULLphp,
php php php`emailphp`php varcharphp(php6php0php)php NOTphp NULLphp,
php php php`usernamephp`php varcharphp(php2php0php)php NOTphp NULLphp,
php php php`passwordphp`php varcharphp(php3php2php)php NOTphp NULLphp,
php php php`rolephp`php varcharphp(php2php0php)php NOTphp NULLphp,
php php php`statusphp`php enumphp(php'lockedphp'php,php'activephp'php)php NOTphp NULLphp,
php php PRIMARYphp KEYphp php(php`idphp`php)
php)php ENGINEphp=MyISAMphp php DEFAULTphp CHARSETphp=latinphp1php AUTOphp_INCREMENTphp=php4php php;




INSERTphp INTOphp php`aclphp_php_rolephp`php php(php`idphp`php,php php`parentphp`php,php php`rolephp`php)php VALUES
php(php1php,php php'php'php,php php'guestphp'php)php;

INSERTphp INTOphp php`actionphp`php php(php`idphp`php,php php`controllerphp_idphp`php,php php`namephp`php,php php`descriptionphp`php)php VALUES
php(php1php,php php1php,php php'permissionphp'php,php php'php'php)php,
php(php2php,php php1php,php php'loginphp'php,php php'php'php)php,
php(php3php,php php1php,php php'logoutphp'php,php php'php'php)php,
php(php4php,php php1php,php php'indexphp'php,php'php'php)php;

INSERTphp INTOphp php`controllerphp`php php(php`idphp`php,php php`modulephp_idphp`php,php php`namephp`php,php php`descriptionphp`php)php VALUES
php(php1php,php php1php,php php'indexphp'php,php php'Frontphp php-php IndexControllerphp'php)php;


INSERTphp INTOphp php`modulephp`php php(php`idphp`php,php php`namephp`php,php php`descriptionphp`php)php VALUES
php(php1php,php php'frontphp'php,php php'Frontphp'php)php;


