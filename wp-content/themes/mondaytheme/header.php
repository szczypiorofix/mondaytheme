<?php
/**
 * The head of Monday Theme
 * 
 * This is the template that displays all of the <head> section and part of the <body> with navigation bar and login/register modal
 * 
 * @package Monday Theme
 * @since 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="html">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <meta name="author" content="Piotr Wróblewski (szczypiorofix)">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="theme-color" content="#DBF0FF">

    <title><?php bloginfo('name');?><?php wp_title();?></title>

    <!-- the below three lines are a fix to get HTML5 semantic elements working in old versions of Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <?php wp_head();?>
    
</head>
<body <?= body_class(); ?>>

    <!--[if lte IE 9]>
        <div style="margin: 50px 0;">
            <h3>You are using an <strong>outdated</strong> browser.</h3>
            <p>Many things may be non-functional if you continue, please upgrade your browser to improve your experience.</p>
        </div>
    <![endif]-->

    <header>

        <nav class="container">

            <?php
                wp_nav_menu( array( 'theme-location' => 'primary' ) );
            ?>

        </nav>


    </header>


