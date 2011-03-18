<?php

/**
 * @file
 * Default implementation of the shopping cart block template.
 *
 * Available variables:
 * - $panes: An array of checkout panes containing title and data.
 *
 * Helper variables:
 * - $form: The complete checkout review form array.
 *
 * @see template_preprocess()
 * @see template_process()
 */
?>

<div class="clearfix">
  <?php foreach ($panes as $pane_id => $pane): ?>
    <div class="<?php print $pane_id; ?>">
      <h3 class="pane-title"><?php print $pane['title']; ?></h3>
      <?php print $pane['data']; ?>
    </div>
  <?php endforeach ?>
</div>
