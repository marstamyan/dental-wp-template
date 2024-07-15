<?php

function custom_breadcrumbs()
{
    echo '<ul class="breadcrumbs-list">';

    echo '<li><a href="' . get_home_url() . '">' . pll__( 'Home' ) . '</a></li>';

    if ( is_category() ) {
        $category = get_queried_object();
        $parent_category = $category->parent;
        while ($parent_category) {
            $parent_category = get_category( $parent_category );
            echo '<li><a href="' . get_category_link( $parent_category->term_id ) . '">' . $parent_category->name . '</a></li>';
            $parent_category = $parent_category->parent;
        }
        echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . single_cat_title( '', false ) . '</a></li>';
    } elseif ( is_single() ) {
        $post = get_queried_object();
        $post_categories = get_the_category( $post->ID );
        if ( $post_categories ) {
            $post_category = $post_categories[0]; // Get only the first category
            $ancestors = array_reverse( get_ancestors( $post_category->term_id, 'category' ) );
            foreach ( $ancestors as $ancestor ) {
                $ancestor_category = get_category( $ancestor );
                echo '<li><a href="' . get_category_link( $ancestor_category->term_id ) . '">' . $ancestor_category->name . '</a></li>';
            }
            echo '<li><a href="' . get_category_link( $post_category->term_id ) . '">' . $post_category->name . '</a></li>';
        }
        echo '<li>' . get_the_title() . '</li>';
    } elseif ( is_page() ) {
        global $post;
        if ( isset($post) ) {
            $ancestors = get_post_ancestors( $post );
            if ( $ancestors ) {
                $ancestors = array_reverse( $ancestors );
                foreach ( $ancestors as $ancestor ) {
                    echo '<li>' . get_the_title( $ancestor ) . '</li>';
                }
            }
            echo '<li>' . get_the_title() . '</li>';
        }
    } elseif ( is_search() ) {
        echo '<li>' . pll__( 'Search results for' ) . ' "' . get_search_query() . '"</li>';
    } elseif ( is_404() ) {
        echo '<li>' . pll__( 'Error 404: Page not found' ) . '</li>';
    }

    echo '</ul>';
}