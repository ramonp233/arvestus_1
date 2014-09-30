<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
          <?php
          $post_counter = 0;
          foreach($blog_news as $blog_post){
              if ($post_counter <= 1){
                  echo '<article class="blog-post">';
                  foreach($blog_post as $blog_title => $blog_content){
                      if ($blog_title == "post_title"){
                          echo '<h2 class="'.$blog_title.'">'.$blog_content.'</h2>';
                      }
                      else{
                          echo '<div class="'.$blog_title.'">'.$blog_content.'</div>';
                      };
                  };
                  echo '</article>';
                  $post_counter = $post_counter + 1;
              };
          };
          ?>
      </section>
    </main>
    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
