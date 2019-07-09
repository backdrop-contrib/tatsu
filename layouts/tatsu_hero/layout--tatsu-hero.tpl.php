<?php
/**
 * @file
 * Template for the Boxton Hero layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['nav']
 *   - $content['hero']
 *   - $content['top']
 *   - $content['content']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="hero-layouts layout--tatsu-hero <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid row">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>
  <?php if ($content['nav']): ?>
    <nav class="l-header l-nav" role="banner" aria-label="<?php print t('Site nav'); ?>">
      <div class="l-nav-inner container container-fluid row">
        <?php print $content['nav']; ?>
      </div>
    </nav>
  <?php endif; ?>

  <div class="l-wrapper">

    <?php if ($messages): ?>
      <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
        <div class="container container-fluid row">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="l-page-title">
      <div class="container container-fluid row">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
    </div>

    <?php if ($tabs): ?>
      <nav class="tabs" role="tablist" aria-label="<?php print t('Admin content navigation tabs.'); ?>">
        <div class="container container-fluid row">
          <?php print $tabs; ?>
        </div>
      </nav>
    <?php endif; ?>

      <div class="container container-fluid row">
        <?php print $action_links; ?>
      </div>

    <?php if (!empty($content['hero'])): ?>
      <div class="l-hero-1">
        <div class="no-container">
          <?php print $content['hero']; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($content['hero_two'])): ?>
        <div class="l-hero-2">
            <div class="no-container">
              <?php print $content['hero_two']; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($content['hero_three'])): ?>
        <div class="l-hero-3">
            <div class="no-container">
              <?php print $content['hero_three']; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php if (!empty($content['hero_four'])): ?>
        <div class="l-hero-4">
            <div class="no-container">
              <?php print $content['hero_four']; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!empty($content['top'])): ?>
      <div class="l-top">
        <div class="container container-fluid row">
          <?php print $content['top']; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="l-content" role="main" aria-label="<?php print t('Main content'); ?>">
      <div class="container container-fluid row">
        <?php print $content['content']; ?>
      </div>
    </div>

    <?php if (!empty($content['bottom'])): ?>
      <div class="l-bottom">
        <div class="container container-fluid row">
          <?php print $content['bottom']; ?>
        </div>
      </div>
    <?php endif; ?>

  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid row">
        <?php print $content['footer']; ?>
      </div><!-- /.container -->
    </footer>
  <?php endif; ?>
</div><!-- /.layout--tatsu-hero -->
