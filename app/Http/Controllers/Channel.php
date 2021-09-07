<?php

namespace App\Http\Controllers;

use HobsRkm\SDK\PHPDiscordSDK\Config\Config;
use Illuminate\Http\Request;
use HobsRkm\SDK\PHPDiscordSDK\PHPDiscordSDKFactory;


class Channel extends Controller
{

    /**
     * @var Config
     */
    private $_config;

    public function __construct()
    {
        $this->_config = new Config();
    }

    public function getChannelDetails()
    {
        return view(LAYOUT,
            [
                "page" => "pages/channels/channel_apis/get_channel_details",
                "data" => array()
            ]
        );
    }

    public function getChannelMessages()
    {
        return view(LAYOUT,
            [
                "page" => "pages/channels/channel_apis/get_channel_messages",
                "data" => array()
            ]
        );
    }

    public function getUpdateChannelDetails()
    {
        return view(LAYOUT,
            [
                "page" => "pages/channels/channel_apis/update_channel_details",
                "data" => array()
            ]
        );
    }

    public function getChannelPermissions()
    {
        return view(LAYOUT,
            [
                "page" => "pages/channels/channel_apis/update_channel_permissions",
                "data" => array()
            ]
        );
    }

    /**
     * @param Request $request
     * @author: Yuvaraj Mudaliar ( @HobsRKM )
     * Date: 9/4/2021
     * Docs API : https://phpdiscordsdk.gitbook.io/sdk/apis/getchanneldetails
     */
    public function postChannelDetails(Request $request)
    {
        $channelId = $request->input('channel_id');
        $botToken = $request->input('bot_token');
        //if bot token, use this as temp token to try only this API
        if (!empty($botToken)) {
            resetToken($botToken);
        }

        $body = array(
            "TYPE" => "CHANNEL_DETAILS",
            "body" => array(
                "channel_id" => $channelId
            )
        );

        PHPDiscordSDKFactory::getInstance('Channels')
            ->getChannelDetails($body)->then(function ($data) {
                echo json_encode($data);

            }, function ($reason) {
                //message event errors
                echo json_encode($reason);

            });
        //reset token after execute
        resetToken();
    }

    /**
     * @param Request $request
     * @author: Yuvaraj Mudaliar ( @HobsRKM )
     * Date: 9/7/2021
     * Docs API : https://phpdiscordsdk.gitbook.io/sdk/apis/getchannelmessages
     */
    public function postChannelMessages(Request $request)
    {
        $channelId = $request->input('channel_id');
        $botToken = $request->input('bot_token');
        //if bot token, use this as temp token to try only this API
        if (!empty($botToken)) {
            resetToken($botToken);
        }

        $body = array(
            "TYPE" => "CHANNEL_DETAILS",
            "body" => array(
                "channel_id" => $channelId
            )
        );

        PHPDiscordSDKFactory::getInstance('Channels')
            ->getChannelMessages($body)->then(function ($data) {
                echo json_encode($data);

            }, function ($reason) {
                //message event errors
                echo json_encode($reason);

            });
        //reset token after execute
        resetToken();
    }

    /**
     * @param Request $request
     * @author: Yuvaraj Mudaliar ( @HobsRKM )
     * Date: 9/7/2021
     * Docs API : https://phpdiscordsdk.gitbook.io/sdk/apis/updateChanneldetails
     */
    public function postUpdateChannelDetails(Request $request)
    {
        $channelId = $request->input('channel_id');
        $botToken = $request->input('bot_token');
        $newChannelName = $request->input('new_channel_name');
        //if bot token, use this as temp token to try only this API
        if (!empty($botToken)) {
            resetToken($botToken);
        }

        $body = array(
            "TYPE" => "CHANNEL_DETAILS",
            "body" => array(
                "channel_id" => $channelId,
                "name" => $newChannelName,
            )
        );

        PHPDiscordSDKFactory::getInstance('Channels')
            ->updateChannelDetails($body)->then(function ($data) {
                echo json_encode($data);

            }, function ($reason) {
                //message event errors
                echo json_encode($reason);

            });
        //reset token after execute
        resetToken();
    }

    /**
     * @param Request $request
     * @author: Yuvaraj Mudaliar ( @HobsRKM )
     * Date: 9/7/2021
     * Docs API : https://phpdiscordsdk.gitbook.io/sdk/apis/updateChannepermissions
     */
    public function postUpdateChannelPermissions(Request $request)
    {
        $channelId = $request->input('channel_id');
        $botToken = $request->input('bot_token');
        $permissionId = $request->input('permission_id');
        $type = $request->input('type');
        $permission = $request->input('permission');
        $perm_type = $request->input('perm_type');
        //if bot token, use this as temp token to try only this API
        if (!empty($botToken)) {
            resetToken($botToken);
        }

        $body = array(
            "TYPE" => "CHANNEL_PERMISSIONS",
            "body" => array(
                "channel_id" => $channelId,
                "overwrite_id" => $permissionId,
                "type" => $type,
                $perm_type => $permission //Permission Value
            )
        );
        PHPDiscordSDKFactory::getInstance('Channels')
            ->updateChannelPermissons($body)->then(function ($data) {
                echo json_encode($data);

            }, function ($reason) {
                //message event errors
                echo json_encode($reason);

            });

        //reset token after execute
        resetToken();
    }
}
