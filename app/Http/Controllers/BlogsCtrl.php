<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\PledgeModel;
use App\CmsBannerModel;
use App\MediaGalleryModel;
use App\ProductModel;
use App\ProductCategoryModel;
use App\ProductSubCategoryModel;
use DB;

class BlogsCtrl extends Controller
{
    public function index()
    {
        $pageData = CmspageModel::where('slug', 'blogs')->first();
        if ($pageData) {
            $page_array = [
                'id' => 'blogs',
                'name' => $pageData->name,
                'sub_text' => $pageData->sub_text,
                'title' => $pageData->page_title ? $pageData->page_title : $pageData->name,
                'meta_keywords' => $pageData->meta_keywords,
                'meta_description' => $pageData->meta_description,
                'slug' => $pageData->slug,
                'content' => $pageData->content1,
                'content2' => $pageData->content2,
                'image' => $pageData->image,
                'image_mobile' => $pageData->image_mobile,
                'body_class' => 'blogs',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'blogs',

            ];
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('blogs', $page_array, 200);
    }

    public function sustainableLiving()
    {
        //$pageData = CmspageModel::where('slug', 'blogs')->first();
        //if ($pageData) {
        $page_array = [
            'id' => 'blogs',
            'name' => 'Sustainable Living Tips: Nurturing the Planet for Future Generations',
            // 'sub_text' => $pageData->sub_text,
            'title' => 'Sustainable Living Tips: Nurturing the Planet for Future Generations',
            'meta_keywords' => '',
            'meta_description' => '',
            //'slug' => $pageData->slug,
            // 'content' => $pageData->content1,
            //'content2' => $pageData->content2,
            //'image' => $pageData->image,
            // 'image_mobile' => $pageData->image_mobile,
            // 'body_class' => 'blogs',
            'meta_other' => '',
            //'image_alt' => $pageData->image_alt,
            'parent_slug' => 'Sustainable Living Tips: Nurturing the Planet for Future Generations',

        ];
        // } else {
        //     return CmspageCtrl::pageNotFound();
        // }

        return response()->view('sustainable-living', $page_array, 200);
    }

    public function embracing()
    {
        //$pageData = CmspageModel::where('slug', 'blogs')->first();
        //if ($pageData) {
        $page_array = [
            'id' => 'embracing',
            'name' => 'Embracing the Zero-Waste Lifestyle: A Path to Sustainable Living',
            // 'sub_text' => $pageData->sub_text,
            'title' => 'Embracing the Zero-Waste Lifestyle: A Path to Sustainable Living',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_other' => '',

            'parent_slug' => '',

        ];
        // } else {
        //     return CmspageCtrl::pageNotFound();
        // }

        return response()->view('embracing', $page_array, 200);
    }

    public function innovativeRenewable()
    {
        //$pageData = CmspageModel::where('slug', 'blogs')->first();
        //if ($pageData) {
        $page_array = [
            'id' => 'embracing',
            'name' => 'Innovative Renewable Energy Solutions to Combat Climate Change',
            // 'sub_text' => $pageData->sub_text,
            'title' => '',
            'meta_keywords' => '',
            'meta_description' => '',
            'meta_other' => '',

            'parent_slug' => '',

        ];
        // } else {
        //     return CmspageCtrl::pageNotFound();
        // }

        return response()->view('innovative-renewable', $page_array, 200);
    }
}
