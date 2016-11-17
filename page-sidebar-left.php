<?php 
/*
	Template Name: Left Sidebar Page
*/
 ?>

<?php get_header(); ?>

    <section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">
    
            <?php if (have_posts()): while (have_posts()): the_post(); ?>

        		<h1><?php the_title(); ?></h1>
        		<p><?php the_content(); ?></p>        

			<?php endwhile; else: ?>

				<p>Sorry, Nothing Found.</p>

			<?php endif ?>
    
            </div>
          </div>

          <!-- Secondary Column -->
          <div class="small-12 medium-4 medium-pull-8 columns">
            <div class="secondary">
              <div class="module-search">
  <form class="search">
    <div class="form-item wrapper">
      <input type="text" id="search" placeholder="Search" />
    </div>
  </form>
</div>

<div class="module-category">
  <h2 class="module-heading">Blog Categories</h2>
  <ul class="no-bullet">
    <li><a href="search-results.html">Category 1</a></li>
    <li><a href="search-results.html">Category 2</a></li>
    <li><a href="search-results.html">Category 3</a></li>
    <li><a href="search-results.html">Category 4</a></li>
  </ul>
</div>

<div class="module-whatever">
  <h2 class="module-heading">Whatever</h2>
  <ul>
    <li>This is an Unordered List Item</li>
    <li>This is a <a href="">link</a> in an Unordered List Item</li>
    <li>This is an Unordered List Item</li>
    <li>This is an Unordered List Item</li>
  </ul>
</div>

<div class="module-whatever">
  <h2 class="module-heading">Whatever</h2>
  <ol>
    <li>This is an Ordered List Item</li>
    <li>This is an Ordered List Item</li>
    <li>This is an Ordered List Item</li>
    <li>This is an Ordered List Item</li>
    <li>This is an Ordered List Item</li>
  </ol>
</div>
            </div>
          </div>

        </div>
      </div>
    </section>


<?php get_footer(); ?>