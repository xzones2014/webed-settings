<?php
if (!function_exists('cms_settings')) {
    /**
     * @return \WebEd\Base\Settings\Support\CmsSettings
     */
    function cms_settings()
    {
        return \WebEd\Base\Settings\Support\Facades\CmsSettingsFacade::getFacadeRoot();
    }
}

if (!function_exists('get_setting')) {
    /**
     * Get the available cms settings.
     *
     * @param  string|null $key
     * @return string|array
     */
    function get_setting($key = null, $default = null)
    {
        return cms_settings()->getSetting($key, $default);
    }
}
