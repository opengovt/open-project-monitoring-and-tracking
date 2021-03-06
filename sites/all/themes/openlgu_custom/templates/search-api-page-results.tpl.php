<?php
/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and the
 * child template are dependent on one another, sharing the markup for
 * definition lists.
 *
 * Note that modules and themes may implement their own search type and theme
 * function completely bypassing this template.
 *
 * Available variables:
 * - $index: The search index this search is based on.
 * - $result_count: Number of results.
 * - $spellcheck: Possible spelling suggestions from Search spellcheck module.
 * - $search_results: All results rendered as list items in a single HTML
 *   string.
 * - $items: All results as it is rendered through search-result.tpl.php.
 * - $search_performance: The number of results and how long the query took.
 * - $sec: The number of seconds it took to run the query.
 * - $pager: Row of control buttons for navigating between pages of results.
 * - $keys: The keywords of the executed search.
 * - $classes: String of CSS classes for search results.
 * - $page: The current Search API Page object.
 * - $no_results_help: Help text to display under the header if no results were
 *   found.
 *
 * View mode is set in the Search page settings. If you select
 * "Themed as search results", then the child template will be used for
 * theming the individual result. Any other view mode will bypass the
 * child template.
 *
 * @see template_preprocess_search_api_page_results()
 */

?>
<div class="<?php print $classes;?>">
  <?php if ($result_count) : ?>
    <?php print render($search_performance); ?>
    <?php print render($spellcheck); ?>
    <h2><?php print t('Search results');?></h2>
    <ol class="search-results">
      <?php 
      	$output = render($search_results);
      	$output = str_replace("</p><h4","</p></li><h4",$output);
      	$output = str_replace("<h4","<li><h4",$output); 
      	print $output;
      ?>
    </ol>
    <?php print render($pager); ?>
  <?php else : ?>
    <h3><?php print t('Your search yielded no results.');?></h3>
    <?php //print $no_results_help; ?>
    <p>Dignissim qui blandit praesent : </p>
    <ul>
    	<li><strong>Lorem ipsum.</strong> At vero eos et accusam et justo duo dolores et ea rebum.</li>
    	<li><strong>Justo labore.</strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut laboreet dolore magna aliquyam erat.</li>
    	<li><strong>Est Lorem.</strong> At vero eos et accusam et justo duo dolores et ea rebum.</li>
    	<li><strong>Ipsum dolor sit amet.</strong>At vero eos et accusam et justo duo dolores.</li>
    </ul>
  <?php endif; ?>
</div>
