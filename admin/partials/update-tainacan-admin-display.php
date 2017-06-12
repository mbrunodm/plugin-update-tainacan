<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/medialab-ufg
 * @since      1.0.0
 *
 * @package    Update_Tainacan
 * @subpackage Update_Tainacan/admin/partials
 */
$helper = new Update_Tainacan_Helper();
?>

<div class="wrap">

    <h2> <?php echo esc_html(get_admin_page_title()); ?> - Tainacan </h2> <hr>

    <form action="" method="post" name="update_config">
        <p>
            <?php esc_attr_e("Select the plugins / themes you'd like to update", $this->plugin_name); ?>:
            <br/>
        </p>
        <h4> <?php esc_attr_e("Plugins", $this->plugin_name); ?> </h4> <hr>
        <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        foreach ($helper->plugins as $key => $value):
            ?>
            <fieldset class="update_options">
                <input type="checkbox" name="update_plugins" value="<?= $key ?>" />
                <label for="update_plugins">
                    <?php // printf( __("Configure the collection %s", $this->plugin_name),  $form_title ); ?>
                    <?php echo $key ?>
                </label>
            </fieldset>
            <?php
        endforeach;
        ?>

        <br><hr>

        <h4> <?php esc_attr_e("Temas", $this->plugin_name); ?> </h4> <hr>
        <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        foreach ($helper->themes as $key => $value):
            ?>
            <fieldset class="update_options">
                <input type="checkbox" name="update_themes" value="<?= $key ?>" />
                <label for="update_themes">
                    <?php echo $key ?>
                </label>
            </fieldset>
            <?php
        endforeach;
        ?>
        <div class="ibram-btn-container">
            <?php submit_button(__('Update', $this->plugin_name), 'primary', 'submit', TRUE); ?>
        </div>

    </form>
</div>

