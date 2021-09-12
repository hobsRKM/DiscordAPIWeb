<?php

namespace App\Console\Commands;

use HobsRkm\SDK\PHPDiscordSDK\Config\Config;
use Illuminate\Console\Command;
use \HobsRkm\SDK\PHPDiscordSDK\PHPDiscordSDKFactory;
use React\Http\Browser;
use App\Models\BotToken;

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
    public function handle($token=null)
    {
        PHPDiscordSDKFactory::getInstance()->botConnect(!empty($token)?$token:$this->argument('token'))->then(
            function ($bot)  {
                $this->saveToken();
                PHPDiscordSDKFactory::getInstance('Presence')
                    ->setActivity(
                        array(
                            "activity"=>"discordapidemo.com",
                            "status"=>"online",
                            "type"=>'WATCHING'
                        )
                    );
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

                $bot->on('close', function ($event) {
                   // in case of unexpected close events, re-authenticate
                    $token = BotToken::find(1);
                    $this->handle($token->token);
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
            SOCKET_HTTP_URL,
            array(
                'Content-Type' => 'application/json'
            ),
            json_encode($message)
        );
    }

    private function saveToken()
    {
        $botModel = new BotToken;
        BotToken::truncate();
        $botModel->token = (new Config)->getToken();
        $botModel->save();
    }
}
