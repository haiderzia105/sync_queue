<?php

namespace App\Jobs;
use App\Mail\SendMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNameJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
  
    protected $details;
    public $deck = '';
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($deck = '1')
    {
        // $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle($deck = '2')
    {
    // Mail::to('haiderzia096@gmail.com')->send(new SendMailable());
    //  $deck = $this->info('Haider Zia');
    //  dd($deck);
 
      $guide = $this->$deck;
      dd($guide);
    }
}
