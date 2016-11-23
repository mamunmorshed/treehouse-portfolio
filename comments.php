<h3><?php comments_number( 'No responses', '1 response', '% responses' ); ?> to "<?php the_title(); ?>"</h3>

<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>

<?php comment_form(); ?>