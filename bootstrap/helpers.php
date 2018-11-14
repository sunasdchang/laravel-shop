<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/11/14
 * Time: 下午2:17
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}