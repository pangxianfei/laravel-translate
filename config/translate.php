<?php

return [
    //使用什么翻译驱动
    // 目前支持这几种: "baidu", "youdao","google"
    /*
     *  默认使用google  google使用的是免费接口爬取，目前能用，为了确保稳定，请配置一个备用服务，
     */
    'defaults' => [
        'driver' => 'baidu',   //默认使用google翻译
        'spare_driver' => 'baidu',  // 备用翻译api ,第一个翻译失败情况下，调用备用翻译服务，填写备用翻译api 需要在下面对应的drivers中配置你参数
        'from' => 'zh',   //原文本语言类型 ，目前支持：auto【自动检测】,en【英语】,zh【中文】，jp【日语】,ko【韩语】，fr【法语】，ru【俄文】，pt【西班牙】
        'to' => 'en',     //翻译文本 ：en,zh-CH,
    ],


    'drivers' => [
        'baidu' => [
            'base_url' => 'http://api.fanyi.baidu.com/api/trans/vip/translate',
            'app_id' => '20180611000174972',
            'app_key' => 'cEXha7w4elaXO23NJ2Tt',
        ],

        'youdao' => [
            'base_url' => 'https://openapi.youdao.com/api',
            //App id of the translation api
            'app_id' => '',
            //secret of the translation api
            'app_key' => '',
        ],

        'google' => [
            'base_url' => 'http://translate.google.cn/translate_a/single',
            'app_id' => '',
            'app_key' => '',
        ],
    ],


];