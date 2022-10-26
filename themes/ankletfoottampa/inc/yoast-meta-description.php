<?php
//Add page number to Yoast meta description and page titles to avoid duplication (when using customised titles/descriptions)
if (!function_exists('ankletfoottampa__pageNumber'))
{
    function ankletfoottampa__pageNumber($s)
    {
        global $page;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        !empty($page) && 1 < $page && $paged = $page;
        $paged > 1 && $s .= ' - ' . sprintf(__('Page %s'), $paged);
        return $s;
    }

    add_filter('wpseo_metadesc', 'ankletfoottampa__pageNumber', 100, 1);
    add_filter('wpseo_title', 'ankletfoottampa__pageNumber', 100, 1);
}



function ankletfoottampa__yoastBottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'ankletfoottampa__yoastBottom');
