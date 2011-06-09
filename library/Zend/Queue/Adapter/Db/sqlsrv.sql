php
CREATEphp TABLEphp php[dbophp]php.php[queuephp]php(php
php	php[queuephp_idphp]php php[intphp]php IDENTITYphp(php1php,php1php)php NOTphp NULLphp,php
php	php[queuephp_namephp]php php[varcharphp]php(php1php0php0php)php NOTphp NULLphp,php
php	php[timeoutphp]php php[intphp]php NOTphp NULLphp,php
php CONSTRAINTphp php[PKphp_queuephp]php PRIMARYphp KEYphp CLUSTEREDphp php
php(php
php	php[queuephp_idphp]php ASCphp
php)WITHphp php(PADphp_INDEXphp php php=php OFFphp,php STATISTICSphp_NORECOMPUTEphp php php=php OFFphp,php IGNOREphp_DUPphp_KEYphp php=php OFFphp,php ALLOWphp_ROWphp_LOCKSphp php php=php ONphp,php ALLOWphp_PAGEphp_LOCKSphp php php=php ONphp)php ONphp php[PRIMARYphp]php
php)php ONphp php[PRIMARYphp]php
php
GOphp
php
ALTERphp TABLEphp php[dbophp]php.php[queuephp]php ADDphp php DEFAULTphp php(php(php3php0php)php)php FORphp php[timeoutphp]php
GOphp
php
php
CREATEphp TABLEphp php[dbophp]php.php[messagephp]php(php
php	php[messagephp_idphp]php php[bigintphp]php IDENTITYphp(php1php,php1php)php NOTphp NULLphp,php
php	php[queuephp_idphp]php php[intphp]php NOTphp NULLphp,php
php	php[handlephp]php php[charphp]php(php3php2php)php NULLphp,php
php	php[bodyphp]php php[varcharphp]php(maxphp)php NOTphp NULLphp,php
php	php[mdphp5php]php php[charphp]php(php3php2php)php NOTphp NULLphp,php
php	php[timeoutphp]php php[decimalphp]php(php1php4php,php php4php)php NULLphp,php
php	php[createdphp]php php[intphp]php NOTphp NULLphp,php
php CONSTRAINTphp php[PKphp_messagephp]php PRIMARYphp KEYphp CLUSTEREDphp php
php(php
php	php[messagephp_idphp]php ASCphp
php)WITHphp php(PADphp_INDEXphp php php=php OFFphp,php STATISTICSphp_NORECOMPUTEphp php php=php OFFphp,php IGNOREphp_DUPphp_KEYphp php=php OFFphp,php ALLOWphp_ROWphp_LOCKSphp php php=php ONphp,php ALLOWphp_PAGEphp_LOCKSphp php php=php ONphp)php ONphp php[PRIMARYphp]php
php)php ONphp php[PRIMARYphp]php
php
GOphp
php
ALTERphp TABLEphp php[dbophp]php.php[messagephp]php php WITHphp CHECKphp ADDphp php CONSTRAINTphp php[fkphp_messagephp_queuephp_idphp]php FOREIGNphp KEYphp(php[queuephp_idphp]php)php
REFERENCESphp php[dbophp]php.php[queuephp]php php(php[queuephp_idphp]php)php
GOphp
php
ALTERphp TABLEphp php[dbophp]php.php[messagephp]php CHECKphp CONSTRAINTphp php[fkphp_messagephp_queuephp_idphp]php
GOphp
php
php
php
php
php
