<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Image;

class CmsBlockModel extends Model
{


    protected $primaryKey = 'id';
    protected $table = 'cms_block';
    protected $fillable = array('id', 'slug', 'status', 'value', 'value2');

    public static function uploadImageWebp($uploadedFile, $destinationPath)
    {

        $destination_full = 'app/public/' . $destinationPath;
        $full_path = storage_path($destination_full);

        if (!file_exists($full_path)) {
            mkdir($full_path, 0777, true);
        }

        $file_name = $uploadedFile->getClientOriginalName();
        $file_name = strtolower(str_replace(" ", "-", $file_name));
        $file_name = explode(".", $file_name);

        $new_file_name = $file_name[0] . '-' . time() . '.webp';
        $file_save_path = storage_path($destination_full . $new_file_name);

        $image = Image::make($uploadedFile)->encode('webp', 80)->save($file_save_path);
        $file_url = $destinationPath . $new_file_name;
        return $file_url;
    }


    public static function uploadFile($uploadedFile, $destinationPath)
    {

        $file_url = '';
        $file_name = $uploadedFile->getClientOriginalName();
        $file_name = strtolower(str_replace(" ", "-", $file_name));
        $file_name = explode(".", $file_name);
        $new_file_name = $file_name[0] . '-' . time() . '.' . $uploadedFile->getClientOriginalExtension();

        Storage::disk($_ENV['FILESYSTEM_DRIVER'])->putFileAs(
            $destinationPath,
            $uploadedFile,
            $new_file_name
        );
        $file_url = $destinationPath . $new_file_name;

        return $file_url;
    }
}//end Block
