<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmspageModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'cms_page';
    protected $fillable = array('id', 'page_title', 'meta_keywords', 'meta_description', 'slug', 'name', 'layout', 'status', 'content1', 'content2', 'content3', 'content4', 'image', 'sub_text', 'image_mobile', 'meta_other', 'image_alt', 'parent_menu_page_id', 'menu_name', 'menu_sort_order', 'menu_include');

    public static function getPageUrlBySlug($slug)
    {
        $parent_menu_page_id = CmspageModel::where('slug', $slug)->first()->parent_menu_page_id;
        $url = '';
        if ($parent_menu_page_id) {
            $parent_page = CmspageModel::find($parent_menu_page_id);
            if ($parent_page) {
                $url = $parent_page->slug;
                $url .= '/';
            }
        }

        $page = CmspageModel::where('slug', $slug)->where('status', '1')->first();
        if (isset($page->slug)) {
            if ($page->slug) {
                $url .= $page->slug;
            }
        }
        return url($url);
    }
}
