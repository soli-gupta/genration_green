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

class HomepageCtrl extends Controller
{
    public function homepage()
    {

        $counterPledge = DB::table('pledge')->count();


        $formattedCounter = $counterPledge < 10 ? '0' . $counterPledge : $counterPledge;

        $pageData = CmspageModel::where('slug', 'home')->first();
        if ($pageData) {
            $page_array = [
                'id' => 'homepage',
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
                'body_class' => 'homepage',
                'meta_other' => $pageData->meta_other,
                'image_alt' => $pageData->image_alt,
                'parent_slug' => 'homepage',
                'formattedCounter' => $formattedCounter
            ];
            // echo $formattedCounter;
            // die();
        } else {
            return CmspageCtrl::pageNotFound();
        }

        return response()->view('home_page', $page_array, 200);
    }
}
