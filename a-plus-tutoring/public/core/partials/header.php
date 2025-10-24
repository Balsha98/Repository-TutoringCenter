<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Balša Bazović">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo SERVER_PATH . '/core/assets/media/icons/site-icon.ico'; ?>">
    <!-- IMPORTED CSS STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/vars.css'; ?>">
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/general.css'; ?>">
    <link rel="stylesheet" href="<?php echo SERVER_PATH . '/core/assets/css/reusable.css'; ?>">
    <?php echo Source\Classes\Helpers\Classes\Template::importViewStyleSheets($path); ?>
    <!-- WEBSITE TITLE -->
    <title>A⁺ Tutoring | <?php echo $title; ?></title>
</head>

<body>
