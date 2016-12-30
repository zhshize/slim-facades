<?php
/**
 * User: zhangshize
 * Date: 2016/12/30
 * Time: 下午 3:53
 */

namespace SlimFacades;

/**
 * The facades for Slim\App instance.
 * @package SlimFacades
 */
class App extends Facade
{
    /**
     * Overriding Facades::self() to set Slim\App instance is in order to tell
     * Facades to proxy it.
     * @return \Slim\App
     */
    public static function self()
    {
        return self::$app;
    }

    public static function get($key = null)
    {
        if ($key === null) {
            return self::self()->getContainer()['settings'];
        } else {
            return self::self()->getContainer()['settings'][$key];
        }
    }

    public static function set($key, $value)
    {
        if (is_array($key)) {
            $now = self::self()->getContainer()['settings'];
            foreach ($key as $item) {
                $now = $now[$item];
            }
            $now = $value;
        } else {
            self::self()->getContainer()['settings'][$key] = $value;
        }
    }
}