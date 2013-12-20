<?php
/**
 * User: shenzhe
 * Date: 13-6-19
 */

namespace ZPHP\Cache;

interface ICache
{
    function enable();

    function selectDb($db);

    function add($key, $value);

    function set($key, $value);

    function get($key);

    function delete($key);

    function increment($key, $step = 1);

    function decrement($key, $step = 1);

    function clear();
}