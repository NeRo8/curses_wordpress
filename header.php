<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 06.11.16
 * Time: 23:51
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(); ?></title>
    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_sidebar(); ?>

<div class="container">