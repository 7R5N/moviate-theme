<?php
	$themeRoot = dirname(__DIR__, 1);
	$composer_json = file_get_contents($themeRoot . '/composer.json');
	$decoded_json = json_decode($composer_json, false);
	$themePath = '/packages/' . $decoded_json->name;
?>

<html lang="de-DE">

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="de">
        <meta name="theme-color" content="#36455d">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Lars Fuchs, Düsseldorf, Germany">

        <title> Moviate – alles was zwei Räder hat </title>
        <link href="favicon.svg" rel="icon" type="image/svg+xml">
        <link href="favicon.ico" rel="alternate icon">
        <link href="safari-pinned-tab.svg" rel="mask-icon" color="#5bbad5">

        <!-- Theme Scripts -->
        <!-- script src="<?php echo $themePath; ?>/js/libs.js" type="text/javascript"></script -->

        <!-- Theme Styles -->
        <link href="<?php echo $themePath; ?>/css/style.css" rel="stylesheet" type="text/css" media="screen">
	</head>

	<body>
