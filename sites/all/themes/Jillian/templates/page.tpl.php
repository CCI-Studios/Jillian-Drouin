<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper">
    <div id="main_page_section">
      <div id="header">
          <div>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                Jillian<span>Drouin</span>
                </a>
                <?php print render($page['header']); ?>
           </div>
      </div>
            <?php print render($page['main_page_section']); ?>
    </div>



    <div id="main-wrapper">
      
      <?php if ($page['section2']): ?>
          <div id="about">
          </div>
          <div id="section2"  class="section-content">

            <?php print render($page['section2']); ?>
         
          </div>
            <div id="about-after">
          </div>
        <?php endif; ?>

        <?php if ($page['section3']): ?>
           <div id="section3">
              <?php print render($page['section3']); ?>
           </div>
        <?php endif; ?>

         <div id="partners">
         </div>

        <div id="journey">
          </div>
        <?php if ($page['section5']): ?>
           <div id="section5" class="parallax">
              <?php print render($page['section5']); ?>
           </div>
        <?php endif; ?>
          <div id="journey-after">
          </div>
         
        
         <div id="section6" class="section-content">
         </div>

         <?php if ($page['section7']): ?>

          <div id="blog">
          </div>
             <div id="section7">

                <?php print render($page['section7']); ?>
           
             </div>
           <div id="blog-after">
          </div>
          <?php endif; ?>

         <div id="running-bg" class="section-content">
         </div>
          <?php if ($page['section8']): ?>
           <div id="contribute">
            </div>
           <div id="section8"  class="section-content" >
              <?php print render($page['section8']); ?>
               <div class="button">
                <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="B4MK4BCTG4SJU">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                <input type="submit" name="submit" value="SUPPORT JILLIAN">
                </form>
              </div>
         
           </div>

          <?php endif; ?>

          <?php if ($page['section7']): ?>

            <div id="sponsor">
            </div>
             <div id="section9">

                <?php print render($page['section9']); ?>
           
             </div>
             
           <div id="contribute-after">
          </div>
          <?php endif; ?>
          <div id="jillianbg" class="section-content">
          </div>

          <div id="content">
            <div>
              <div>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
              </div>
            </div>
          </div> <!-- /#content -->
     
  
      </div><!-- /#main, /#main-wrapper -->
      <?php if ($page['section10']): ?>
        <div id="sponsor-logos">
        </div>
          <div id="section10">
            <?php print render($page['section10']); ?>
          </div>
        
    <?php endif; ?>
    <div id="contact">
    </div>
    <div id="footer">
      <div>
        <div>
            <?php print render($page['footer']); ?>
        </div>
      </div>
       <div class="clearfix"></div>
    </div> <!-- /#footer -->


</div> <!-- /#page-wrapper -->
