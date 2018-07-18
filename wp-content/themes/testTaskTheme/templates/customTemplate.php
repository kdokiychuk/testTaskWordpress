<?php
/**
 * Created by PhpStorm.
 * User: mikol
 * Date: 18.07.2018
 * Time: 11:23
 * /*
 * Template Name:customTemplate
 */
?>
<?php get_header(); ?>
<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
    <?php the_content();?>
<?php endwhile; ?>
<?php endif; ?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <?php
            global $wpdb;
            global $post;
            $querystr = "
                SELECT DISTINCT wposts.* 
                FROM $wpdb->posts wposts
                    LEFT JOIN $wpdb->postmeta wpostmeta ON wposts.ID = wpostmeta.post_id 
                    LEFT JOIN $wpdb->term_relationships ON (wposts.ID = $wpdb->term_relationships.object_id)
                    LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
                WHERE $wpdb->term_taxonomy.taxonomy = 'category'
                    AND $wpdb->term_taxonomy.term_id IN(3)
                ORDER BY wpostmeta.meta_value ASC ";
            $pageposts = $wpdb->get_results($querystr, OBJECT);
            ?>
            <?php if ($pageposts): ?>
                <?php global $post; ?>
                <?php foreach ($pageposts as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="col-sm-12 col-md-4" style="margin-bottom: 20px; text-align: center;">
                        <div class="post" id="post-<?php the_ID(); ?>">
                            <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
                            <div class="bodyContent"> <?php the_content(); ?> </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2 class="center">posts NOT FOUND</h2>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>