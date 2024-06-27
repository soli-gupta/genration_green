<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class EWasteCtrl extends Controller
{
    public function index()
    {
        $data = CmspageModel::where('slug', 'e-waste')->first();
        if ($data) {
            $page_array = array(
                'id' => 'e-waste',
                'name' => $data->name,
                'sub_text' => $data->sub_text,
                'title' => ($data->page_title) ? $data->page_title : $data->name,
                'meta_keywords' => $data->meta_keywords,
                'meta_description' => $data->meta_description,
                'slug' => $data->slug,
                'content' => $data->content1,
                'content2' => $data->content2,
                'image' => $data->image,
                'image_mobile' => $data->image_mobile,
                'body_class' => 'e-waste',
                'meta_other' => $data->meta_other,
                'image_alt' => $data->image_alt,
                'parent_slug' => 'e-waste',

            );
        }

        return view('e-waste', $page_array);
    }

}
