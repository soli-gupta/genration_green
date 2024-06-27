<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Process;
use App\CmsBlockModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Artisan;

class TestpageCtrl extends Controller
{
    public function testpage()
    {

        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        //exec('php artisan storage:link');
        $output = [];
        $returnVar = 0;

        // exec('php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"', $output, $returnVar);


        // echo "Output:\n";
        // echo implode("\n", $output) . "\n";
        // echo "Return status: $returnVar\n";

        //Artisan::call('route:cache');
        // for storage link
        // Artisan::call('storage:link');
        // $target = storage_path('app/public');
        // $link = public_path('storage');

        // if (!file_exists($link)) {
        //     try {
        //         if (symlink($target, $link)) {
        //             echo "The [public/storage] directory has been linked successfully.";
        //             Log::info('The [public/storage] directory has been linked successfully.');
        //         } else {
        //             echo "Failed to create the symbolic link for an unknown reason.";
        //             Log::error('Failed to create the symbolic link for an unknown reason.');
        //         }
        //     } catch (\Exception $e) {
        //         Log::error('Failed to create the symbolic link: ' . $e->getMessage());
        //     }
        // } else {
        //     echo "The symbolic link already exists";
        //     Log::info('The symbolic link already exists.');
        // }
        // for storage link end
    }
}
