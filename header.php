<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php _wp_render_title_tag() ?>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_uri() ?>" rel="stylesheet">

</head>
<?php wp_head(); ?>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="top_header">
            <?php if (has_nav_menu('top_menu')) : ?>
                <?php wp_nav_menu(['theme_location' => 'top_menu', 'container' => false,]) ?>
            <?php else: ?>

            <?php endif ?>
        </div>
    </div>
</nav>