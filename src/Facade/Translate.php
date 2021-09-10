<?php

namespace Tmaic\LaravelTranslate\Facade;



use Illuminate\Support\Facades\Facade;
use Tmaic\Translate\TranslateService;


/**
 * Class Facade
 * @package Tmaic\GeTui
 */
class Translate extends Facade
{
    public static function getFacadeAccessor()
    {
        return TranslateService::class;
    }
}