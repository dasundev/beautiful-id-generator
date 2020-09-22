<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:10 AM
 ***************************************/

declare(strict_types=1);

namespace Dasundev\BeautifulIdGenerator;


/**
 * Class UserIdGenerator
 * @package Dasundev\BeautifulIdGenerator
 */
class UserIdGenerator
{
    /**
     * User Id generator
     * @param $name
     * @return string
     */
    public static function generate($name): string
    {
        return substr($name,0, 1).strtoupper(uniqid());
    }
}
