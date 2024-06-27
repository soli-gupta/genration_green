<?php
 
namespace App\Console\Commands;
 
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\OrderReportModel;
class Subscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:cron';
     
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'subscription tracking generate';
     
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
     
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
    $mail_subject="relaxo-cron-".date('Y-m-d H:i:s');
    mail("satishsuper7@gmail.com",$mail_subject,$mail_subject);
         
        $this->info('subscription  run');
    }
}