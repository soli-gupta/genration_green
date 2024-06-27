<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\ProductModel;
use App\ProductCategoryModel;
use App\AttributesOptionModel;
use App\LocateDealerModel;
use session;
use Exception;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class ProductCtrl extends Controller
{




 public function product_detail($slug) {

    $product_data = ProductModel::where('slug', $slug)->where('status','1')->first();
   
    if($product_data){

        $views_count_update=ProductModel::find($product_data->id);
        $views_count_update->views_count++;
        $views_count_update->save();

                $page_array=array(
                    'id' => $product_data->id,
                    'title' => $product_data->page_title,
                    'meta_keywords' => $product_data->meta_keywords,
                    'meta_description' => $product_data->meta_description,
                    'slug' => $slug,
                    'name' => $product_data->name,                   
                    'image' => $product_data->image,
                    'body_class' => '',
                    'menu_active' => '',
                    'image_alt' => $product_data->image_alt,
                    'head_seo_section' => $product_data->head_seo_section,
                    'product_data'=>$product_data,
           
                   
                    );

            $page_layout = 'community.community_detail';
            return view($page_layout, $page_array);

        }  else {

        return CmspageCtrl::pageNotFound();
        
    }
        
    }



 public function product_category($slug) {

            $data = ProductCategoryModel::where('slug', $slug)->where('status','1')->first();
           
            if($data){

                        $page_array=array(
                            'id' => $data->id,
                            'title' => $data->page_title,
                            'meta_keywords' => $data->meta_keywords,
                            'meta_description' => $data->meta_description,
                            'slug' => $slug,
                            'name' => $data->name,                   
                            'image' => $data->image_banner,
                            'image_mobile' => $data->image_banner_mobile,

                            'body_class' => '',
                            'menu_active' => '',
                            'image_alt' => $data->image_alt,
                            'head_seo_section' => $data->head_seo_section,
                            'data'=>$data,
                   
                           
                            );

                    $page_layout = 'community.work_detail';
                    return view($page_layout, $page_array);

                }  else {

                return CmspageCtrl::pageNotFound();
                
            }
                
    }







}
