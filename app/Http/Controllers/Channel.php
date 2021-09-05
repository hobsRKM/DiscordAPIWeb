<?php

namespace App\Http\Controllers;

use HobsRkm\SDK\PHPDiscordSDK\Config\Config;
use Illuminate\Http\Request;
use HobsRkm\SDK\PHPDiscordSDK\PHPDiscordSDKFactory;


class Channel extends Controller
{
    //

    /**
     * @var Browser
     */
    private $_client;
    /**
     * @var Config
     */
    private $_config;

    public function __construct()
    {
        $this->_config = new Config();
    }

    public function index()
    {
        return view('layout/layout',
            [
                "page" => "pages/channels/channel_apis/get_channel_details",
                "data" => array("test" => "hello")
            ]
        );
    }

    /**
     * @author: Yuvaraj Mudaliar ( @HobsRKM )
     * Date: 9/4/2021
     * Docs API : https://phpdiscordsdk.gitbook.io/sdk/apis/getchanneldetails
     */
    public function getChannelDetails(Request $request)
    {
        $channelId = $request->input('channel_id');
        $botToken = $request->input('bot_token');
        //if bot token, use this as temp token to try only this API
        if(!empty($botToken)){
           resetToken($botToken);
        }

        $body = array(
            "TYPE"=>"CHANNEL_DETAILS",
            "body"=>array(
                "channel_id"=>$channelId
            )
        );

        PHPDiscordSDKFactory::getInstance('Channels')
            ->getChannelMessages($body)->then(function ($data) {
                echo json_encode($data);

            }, function ($reason) {
                //message event errors
                echo json_encode($reason);

            });
        //restore token after execute
        resetToken();
    }
}
