<!doctype html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- prettier-ignore -->
    <main class="">
      <?php get_template_part("templates/navigation"); ?>
      <?php get_template_part("templates/frontpage-hero"); ?>
      <?php get_template_part("templates/frontpage-services"); ?>
      <?php get_template_part("templates/frontpage-about"); ?>
      <div class="prose">
        <?php the_content(); ?>
      </div>
      <?php get_template_part("templates/footer"); ?>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>
