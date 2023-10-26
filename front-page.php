<?php get_header(); ?>

<main class="wrap">

    <?php if (get_theme_mod('display_section_one', true)) : ?>
        <!-- Section One -->
        <section class="content-area content-thin section-one" id="section-one">
        <?php
        $page_id = 210; 
        $page = get_post($page_id);

        if ($page) {
            echo '<h2>' . esc_html($page->post_title) . '</h2>';
            echo apply_filters('the_content', $page->post_content);
        }
        ?>
    </div>
    
  </section>
    <?php endif; ?>

    <?php if (get_theme_mod('display_section_two', true)) : ?>
        <!-- Section Two -->
        <section class="content-area content-thin section-two" id="section-two">
      <div class="left-content">
      <?php
         $page_id = 212; 
         $page = get_post($page_id);
 
         if ($page) {
             echo '<h2>' . esc_html($page->post_title) . '</h2>';
             echo apply_filters('the_content', $page->post_content);
         }
        ?>
        </div>
      <div class="right-content">
        <img src="<?php echo get_template_directory_uri() . '/imgs/sushi.jpg'; ?>" alt="Image">

    </div>
  </section>
    <?php endif; ?>

    <?php if (get_theme_mod('display_section_three', true)) : ?>
        <!-- Section Three -->
        <section class="content-area content-thin section-three" id="section-three">
    <div id="three">
        <?php
          $page_id = 217; 
          $page = get_post($page_id);
          if ($page) {
              echo apply_filters('the_content', $page->post_content);
          }
        ?>
    </div>
  </section>
    <?php endif; ?>

    <?php if (get_theme_mod('display_section_four', true)) : ?>
        <!-- Section four -->
        <section class="content-area content-thin section-four" id="section-four">
          <h2>Gallery</h2>
        <div class="image-slider">
        <?php
          echo do_shortcode('[metaslider id="163"]');
        ?>
        </div>
        </section>
    <?php endif; ?>

    <?php if (get_theme_mod('display_section_five', true)) : ?>
        <!-- Section five -->
        <section class="content-area content-thin section-five" id="section-five">
        <div id="five">
        <?php
        $contact_page = get_post(219); 
        if ($contact_page) {
            echo apply_filters('the_content', $contact_page->post_content);
        }
        ?>
        </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
