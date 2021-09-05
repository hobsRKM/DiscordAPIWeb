<?php

use HobsRkm\SDK\PHPDiscordSDK\Config\Config;
$existingBotToken = (new Config)->getToken();

if (! function_exists('resetToken')) {

    function resetToken($token='')
    {
        global $existingBotToken;
        $config = new Config();

        $config->clearToken();
        if(!empty($token)){
            $config->setToken($token);
        } else {
            if(!empty($existingBotToken))
                $config->setToken($existingBotToken);
        }
        $config->saveToken();
    }
}
