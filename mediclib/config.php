<?php
/*************************************
****** @copyright 2017 MEDICLIB ******
******* @Date  THU 15 JUN 2017 *******
**** @author: ANCHORA TECHNOLOIES ****
**************************************/

# G L O B A L
global $msg, $status, $page, $type, $data, $submit, $kode, $viewform, $thisname, $action;

# M A I N
define( 'DS'          , 	DIRECTORY_SEPARATOR);
define( 'ROOT'        , 	dirname(__FILE__).DS);
define( 'FRWK'        , 	$_SERVER['DOCUMENT_ROOT']);

# F R O N T
define( '_FRONT_'     ,		ROOT.'_web'.DS );
define( '_PUBLIC_'    ,		_FRONT_.'_public'.DS );
define( '_TEMPL_'     ,		_FRONT_.'_lib'.DS.'tpl'.DS );
define( '_CONTROL_'   ,		_FRONT_.'_lib'.DS.'ctrl'.DS );
define( '_AJAX_'      ,		_FRONT_.'_lib'.DS.'ajax'.DS );

# A D M I N
define( '__ADMIN__'   ,		ROOT.'_admin'.DS );
define( '__PUBLIC__'  ,		__ADMIN__.'_public'.DS );
define( '__TEMPL__'   ,		__ADMIN__.'_lib'.DS.'tpl'.DS );
define( '__CONTROL__' ,		__ADMIN__.'_lib'.DS.'ctrl'.DS );
define( '__AJAX__'    ,		__ADMIN__.'_lib'.DS.'ajax'.DS );

# U P L O A D S
define( 'IMG'    	  ,		_FRONT_.'_assets'.DS.'img'.DS );

# D A T A B A S E
define( 'DBTYPE'      ,		'mysqli' );
define( 'SERVER'      ,		'localhost' );
define( 'DTBASE'      ,		'medlib_db' );
define( 'DBUSER'      ,		'root' );
define( 'DBPASS'      ,		'root' );
define( 'DBPREF'	  ,		'md_' );

# G E N E R A L
define( 'PEPPER'      ,		'F{:}=bCqe)w}h7:}gDtfmk71=82siVEe' );
define( 'DEBUG'       ,		FALSE );
define( 'ERROR'       ,		TRUE );
define( 'MYSQL'		  , 	TRUE );

# _ F R A M E W O R K
require_once FRWK.DS.'_framework'.DS.'auto-load.php';



