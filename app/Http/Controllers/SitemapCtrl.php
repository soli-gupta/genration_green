<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\BlogPostModel;
use App\ProductCategoryModel;
use App\CmsBannerModel;
use App\ProductModel;



use Illuminate\Support\Facades\DB;
class SitemapCtrl extends Controller
{

    public function sitemap() {

                $_products = ProductModel::select("slug")->where('status','1')->orderBy('sorting', 'asc')->get();
                $_categories = ProductCategoryModel::select("slug")->where('status','1')->orderBy('sorting', 'asc')->get();
                //dd($_categories); 

                $base_url = "https://www.aaaa.com/";

               // header("Content-Type: application/xml; charset=utf-8");
                $output='';
                $output.='<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 

                 $output.='<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

                // foreach($_products as $row)
                // {
                //  $output.= '<url>' . PHP_EOL;
                //  $output.= '<loc>'.$base_url.'product/'.$row["slug"] .'</loc>' . PHP_EOL;
                //  $output.= '<changefreq>daily</changefreq>' . PHP_EOL;
                //  $output.= '</url>' . PHP_EOL;
                // }
                foreach($_categories as $row) {
                    $output.= '<url>' . PHP_EOL;
                    $output.= '<loc>'.$base_url.'brand/'.$row["slug"] .'</loc>' . PHP_EOL;
                    $output.= '<changefreq>daily</changefreq>' . PHP_EOL;
                    $output.= '</url>' . PHP_EOL;
                }

                $output.= '</urlset>' . PHP_EOL;

               return response()->make($output)->header('Content-Type', 'text/xml;charset=utf-8');
                  

    }



     

    

}
