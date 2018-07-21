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
        return config('coreui.assets_path', public_path('admin/'));
    }
}
