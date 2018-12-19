<?php

function show_author_name()
{
    return the_category();
}

add_shortcode('category', 'show_author_name');