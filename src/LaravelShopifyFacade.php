<?php

namespace RothrauffConsulting\LaravelShopify;

use Illuminate\Support\Facades\Facade;
use \RothrauffConsulting\Shopify\Shopify;

/**
 * @see \RothrauffConsulting\LaravelShopify\Skeleton\SkeletonClass
 */
class LaravelShopifyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shopify';
    }

    private static function init()
    {
        return new Shopify(config('shopify.shop_url'), config('shopify.app_api_key'), config('shopify.app_password'), config('shopify.api_version'));
    }

    public static function get($endpoint, Array $params = null)
    {
        return self::init()->get($endpoint, $params);
    }

    public static function post($endpoint, Array $data)
    {
        return self::init()->post($endpoint, $data);
    }

    public static function put($endpoint, Array $data)
    {
        return self::init()->put($endpoint, $data);
    }

    public static function delete($endpoint, Array $params = null)
    {
        return self::init()->delete($endpoint, $params);
    }
}
