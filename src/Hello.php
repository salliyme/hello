<?php
/**
 * PHP framework team
 * author: liupan@salliyme.com
 * Date: 2018/11/22 23:02
 */

namespace salliyme;


class Hello
{
    const VERSION = '1.0.1';

    public function say()
    {
        echo 'Hello, salliyme.'.PHP_EOL;
        echo 'This message powered by salliyme.('.static::VERSION.')'.PHP_EOL;
    }

    public function version()
    {
        echo 'Version:'.static::VERSION.PHP_EOL;
    }

    public function go()
    {
        echo 'method::go()'.PHP_EOL;
    }
}