<?php
/*
Template Name: home
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyGPT</title>

<?php get_header(); ?>

<section class="containerS">
    <div class="headHome">
      <h1><?php the_field('title'); ?></h1>
     </div>
<div><h2><?php the_field('subtitle'); ?> </h2></div>
</section>

<?php get_footer(); ?>