<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php  bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php wp_nav_menu(); ?>
