<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Balša Bazović">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo SERVER_PATH . '/core/assets/media/icons/site-icon.ico'; ?>">
    <!-- IMPORTED CSS STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/variables.css'; ?>">
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/general.css'; ?>">
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/reusable.css'; ?>">
    <?php echo Source\Handlers\Helpers\Classes\Template::importViewStyleSheet($route['data']['path']); ?>
    <?php echo Source\Handlers\Helpers\Classes\Template::importPartials($route['data']['path'], 'css'); ?>
    <!-- WEBSITE TITLE -->
    <title>A⁺ Tutoring | <?php echo $route['data']['title']; ?></title>
</head>

<body>
