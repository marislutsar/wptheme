<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- <link rel="stylesheet" href="<?=get_stylesheet_uri()?>"> -->
   <?php wp_head() ?>
   
</head>
<body>
   <?php get_template_part('partials/nav') ?>
   <div class="container">
      <div class="content">
         <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
               <?php the_post() ?>
                  <h1> <?=the_title()?> </h1>
                  <p> <?=the_content()?> </p>
            <?php endwhile ?>
         <?php endif ?>
         <?php wp_footer() ?>
      </div>
   </div>
</body>
</html>