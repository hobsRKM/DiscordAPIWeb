<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \HobsRkm\SDK\PHPDiscordSDK\PHPDiscordSDKFactory;
use React\Http\Browser;

class StartBot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:bot {token}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the bot';

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
     * @return int
     */
    public function handle()
    {
        PHPDiscordSDKFactory::getInstance()->botConnect($this->argument('token'))->then(
            function ($bot) {
                $bot->on('message', function ($event) {
                    PHPDiscordSDKFactory::getInstance()->formatEvent($event)->then(function($message){
                        //All events sent from client will be available here, including the server details the bot is listening on
                        $this->console($message);
                    }, function ($reason) {
                        //message event errors
                        print($reason->getMessage());
                        //echo $reason->getMessage();
                    });
                });
            },
            function ($reason) {
                print($reason);
                //other errors, bot startup, authentication
            }
        );
    }


    public function console($message){
        (new Browser)->post(
            "http://127.0.0.1:3026/",
            array(
                'Content-Type' => 'application/json'
            ),
            json_encode($message)
        );
    }
}
