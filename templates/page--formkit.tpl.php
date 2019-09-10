<?php

/**
 * @file
 */
?>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->



  <header id="header">
    <div class="contain">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"/>
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header><!-- /header -->



<section id="mainmenu">

      <div class="contain">

<button id="hammenu" class="hamburger" title="Open navigation"><i class="fas fa-bars"></i></button>
      </div>


  <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation" class="<?php
    if (!empty($main_menu)) {
      print "with-primary";
    }
    if (!empty($secondary_menu)) {
      print " with-secondary";
    }
    ?>">
      <div class="contain">
      <?php print render($main_menu_expanded); ?>

<div class="searchicon" >
<button type="submit" class="search-init" title="Search site"><i class="fas fa-search"></i>
</button></div>

      </div>

    </nav><!-- /navigation -->
  <?php endif; ?>



</section><!-- /mainmenu -->




  <!-- ______________________ MAIN _______________________ -->

  <div id="main">
    <div class="contain">
      <section id="content">

        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <!-- <div id="content-header"> -->

            <?php print $breadcrumb; ?>

            <?php if ($page['highlighted']): ?>
              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
            <?php endif; ?>


            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if (render($tabs)): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          <!-- </div> /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <!-- <?php print $feed_icons; ?> -->

      </section><!-- /content -->





    </div>
  </div><!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="contain">
      <?php print render($page['footer']); ?>
      </div>
    </footer><!-- /footer -->
  <?php endif; ?>

</div><!-- /page -->
