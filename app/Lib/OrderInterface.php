<?php
namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * @method ResultInterface deferGetOrder()
 */
interface OrderInterface
{
    public function getOrder();
}