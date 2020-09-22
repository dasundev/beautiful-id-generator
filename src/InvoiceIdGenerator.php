<?php
/***************************************
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 9/22/2020
 * Time: 11:35 AM
 ***************************************/

declare(strict_types=1);

namespace Dasundev\BeautifulIdGenerator;

/**
 * Class InvoiceIdGenerator
 * @package Dasundev\BeautifulIdGenerator
 */
class InvoiceIdGenerator
{
    /**
     * Generate Invoice ID
     * @return string
     */
    public static function generate(): string
    {
        return strtoupper('INVOICE'.date('Ymd').uniqid());
    }
}
