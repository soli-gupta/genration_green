<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\RedirectUrlModel;

class CmspageCtrl extends Controller
{

    public function pages($parent_slug = null, $child_slug = null)
    {
        $check_parent = CmspageModel::where('slug', $parent_slug)->where('parent_menu_page_id', 0)->first();
        if (!$check_parent) {
            return CmspageCtrl::pageNotFound();
        }

        $page_slug = $parent_slug;
        if ($child_slug) {
            $page_slug = $child_slug;
        }

        //  die();
        $data = CmspageModel::where('slug', $page_slug)->where('status', '1')->first();

        $menu_active = '';

        if ($data) {
            $blog_page_class = '';
            if (in_array($data->id, array(4, 3, 2))) {
                $blog_page_class .= " blog-page";
            }

            $page_array = array(
                'id' => 'page_' . $data->id,
                'name' => $data->name,
                'sub_text' => $data->sub_text,
                'title' => ($data->page_title) ? $data->page_title : $data->name,
                'meta_keywords' => $data->meta_keywords,
                'meta_description' => $data->meta_description,
                'parent_slug' => $parent_slug,
                'slug' => $data->slug,
                'content' => $data->content1,
                'content2' => $data->content2,
                'content3' => $data->content3,
                'image' => $data->image,
                'image_mobile' => $data->image_mobile,
                'body_class' => 'page_' . $data->id . ' ' . $blog_page_class,
                'meta_other' => $data->meta_other,
                'image_alt' => $data->image_alt,
            );

            $page_layout = 'cms_page';
            if ($data->layout) {
                $page_layout = $data->layout;
            }
            return view($page_layout, $page_array);
        } else {
            return CmspageCtrl::pageNotFound();
        }
    }

    static function pageNotFound()
    {
        $REQUEST_URI = $_SERVER['REQUEST_URI'];

        $url_data = RedirectUrlModel::where('from_url', $REQUEST_URI)->where('status', '1')->first();

        if ($url_data) {
            return redirect()->to($url_data->to_url, 301);
        } else {
            abort(404);
        }
    }
}
