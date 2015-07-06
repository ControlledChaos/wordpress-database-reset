<p>1. <?php _e( 'Select the database tables you would like to reset', 'wp-reset' ) ?>:</p>

<div id="select-container">
  <a href='#' id="select-all"><?php _e( 'Select All', 'wp-reset' ) ?></a>
  <select id="wp-tables" multiple="multiple" name="db-reset-tables[]">
    <?php foreach ( $this->wp_tables as $key => $value ) : ?>
      <option value="<?php echo $key ?>"><?php echo $key ?></option>
    <?php endforeach ?>
  </select>
</div>

<p id="reactivate" style="display: none">
  <label for="db-reset-reactivate-theme-data">
    <input type="checkbox" name="db-reset-reactivate-theme-data" id="db-reset-reactivate" checked="checked" value="true" />
    <?php _e( 'Reactivate current theme and plugins after reset?', 'wp-reset' ) ?>
  </label>
</p>

<hr>