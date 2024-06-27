<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        

$GET_DATA = $_GET;
 $CSRF=0;

/*
$REQUEST_URI=$_SERVER['REQUEST_URI'];
$REQUEST_METHOD=$_SERVER['REQUEST_METHOD'];
if($REQUEST_URI=='/login' && $REQUEST_METHOD=="GET"){
     //$CSRF=1;
}
*/
foreach ($GET_DATA as $get_key => $get_value) {
    $final_string=$get_key.' '.$get_value;

   if(strpos($final_string, 'onmouseover') !== false) {
        $CSRF=1;
        break;
    }elseif (strpos($final_string, '=') !== false) {
        $CSRF=1;
        break;
     }elseif (strpos($final_string, '(') !== false) {
        $CSRF=1;
        break;
     }elseif(strpos($final_string, ';') !== false) {
        $CSRF=1;
        break;
    }elseif(strpos($final_string, '%') !== false) {
        $CSRF=1;
        break;
    }
   
}
if($CSRF){
    
   abort(404);
   die;  
}




        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
