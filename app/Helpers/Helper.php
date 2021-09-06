<?php

use HobsRkm\SDK\PHPDiscordSDK\Config\Config;
use App\Models\BotToken;

if (! function_exists('resetToken')) {

    function resetToken($token='')
    {
        $config = new Config();
        $config->clearToken();
        if(!empty($token)){
            $config->setToken($token);
        } else {
            $token = BotToken::find(1);
            if(!empty($token->token))
                $config->setToken($token->token);
        }
        $config->saveToken();
    }
}
