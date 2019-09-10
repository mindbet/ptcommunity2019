<?php

/**
 * @file
 */
?>
<!DOCTYPE html>
<html<?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>
<body class="has-top-sticky-ad <?php print $classes; ?>" <?php print $attributes; ?>>
    <div class="overlay"></div>


    <div class="modal">
        <div class="modal-content">
            <span class="close-button">×</span>
            <p class="modal-title">Find Something</p>
            <form class="search-form">
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
                <input type="text" value="" id="tbSearch" placeholder="Search...">
            </form>
        </div>
    </div>

  <div id="skip">
    <a href="#content"><?php print t('Jump to Navigation'); ?></a>
  </div>



  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
