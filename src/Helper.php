<?php

namespace JenryOllivierre\CoreuiStaticAdminTheme;

class Helper
{
    /**
     * Get the path to put the published assets.
     * 
     * @return string
     */
    public static function getAssetsPath()
    {
        if (is_null(config('coreui.assets_path'))) {
            return public_path('admin/');
        }

        return config('coreui.assets_path');
    }
}
