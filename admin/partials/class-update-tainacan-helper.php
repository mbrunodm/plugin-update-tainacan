<?php

/**
 * This class defines helper code that is used at admin partials
 *
 * @since      1.0.0
 * @package    Update_Tainacan_Helper
 * @subpackage Update_Tainacan/admin/partials
 * @author     Marcus Molinari <mbrunodm@gmail.com>
 */
class Update_Tainacan_Helper extends Update_Tainacan {

    public $plugins = [
        'ibram-tainacan' => 'https://github.com/medialab-ufg/ibram-tainacan/archive/master.zip',
        'data_aacr2' => 'https://github.com/medialab-ufg/data_aacr2/archive/master.zip'
    ];
    public $themes = [
        'tainacan' => 'https://github.com/medialab-ufg/tainacan/archive/dev.zip'
    ];
    
}
