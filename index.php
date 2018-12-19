<?php get_header() ?>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4"><?php bloginfo() ?>
            </h1>

            <!-- Blog Post -->

            <?php $query = new WP_Query(['post_type' => ['post', 'learn_programming']]) ?>
            <?php if ($query->have_posts()) : ?>

                <?php while ($query->have_posts()) :
                    $query->the_post(); ?>
                    <div class="card mb-4">
                        <div class="card-body">

                            <h2 class="card-title text text-secondary"><?php echo get_the_title() ?></h2>
                            <p class="card-text"><?php echo get_the_content() ?></p>
                            <a href="<?php echo get_the_permalink() ?>" class="btn btn-lg  btn-dark"> ادامه مطلب &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php the_date() ?>
                            <a href="<?php the_category_rss() ?>"><?php the_category() ?></a>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <?php get_template_part('partials/sidebar') ?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>


