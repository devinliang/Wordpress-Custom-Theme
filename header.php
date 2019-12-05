<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
    <?php wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation'
        )); ?>
    <hr />
