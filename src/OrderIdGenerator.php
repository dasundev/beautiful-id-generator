<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:40 AM
 ***************************************/

declare(strict_types=1);

namespace Dasundev\BeautifulIdGenerator;


/**
 * Class OrderIdGenerator
 * @package Dasundev\BeautifulIdGenerator
 */
class OrderIdGenerator
{
    /**
     * Generate ORDER ID
     * @return string
     */
    public static function generate(): string
    {
        return strtoupper('ORDER'.date('Ymd').uniqid());
    }
}
