<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<?php CHtml::meta(array(
	'url'=>$metau,
	'type'=>$metat,
	'locale'=>'fr_FR',
	'title'=>$title,
	'description'=>$metad,
	'site_name'=>'',
	'publisher'=>'',
	'image'=>$metai
)) ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo _WEB_.'img/favicon.png' ?>">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo _WEB_.'css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/normalize.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/font-awesome.min.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/jquery.countdown.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/customScrollbar.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/bootstrap-timepicker.min.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/fullcalendar.min.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/owl.carousel.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/owl.theme.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/jquery-ui.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/transitions.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/main.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/color.css'; ?>">
<link rel="stylesheet" href="<?php echo _WEB_.'css/responsive.css'; ?>">
<script src="<?php echo _WEB_.'js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'; ?>"></script>
<script src="<?php echo _WEB_.'js/vendor/jquery-library.js'; ?>"></script>
<?php echo JS::styles(); ?>
</head>