<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">جستو جو</h5>
        <div class="card-body">
            <div class="input-group">
                <form action="" class="form form-control form-control-sm">
                    <input type="text" name="s" class="form-control" placeholder="Search for...">
                    <input type="submit" class="btn btn-block btn-lg btn-dark" value="جستو جو">
                </form>
                <span class="input-group-btn">

                </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">آخرین مطالب</h5>
        <div class="card-body">
            <div class="row">
                <div>
                    <ul class="list-group list">
                        <?php $query = new WP_Query(['post_type' => ['post', 'learn_programming']]) ?>
                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <li class="list-group-item list-group-item-action ">
                                    <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_query() ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the
            new Bootstrap 4 card containers!
        </div>
    </div>

</div>