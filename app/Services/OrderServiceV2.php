<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Services;

use App\Lib\OrderInterface;
use Swoft\Bean\Annotation\Enum;
use Swoft\Bean\Annotation\Floats;
use Swoft\Bean\Annotation\Number;
use Swoft\Bean\Annotation\Strings;
use Swoft\Rpc\Server\Bean\Annotation\Service;
use Swoft\Core\ResultInterface;

/**
 * OrderInterface service
 *
 * @method ResultInterface deferGetOrder()
 * @Service(version="1.0.1")
 */
class OrderServiceV2 implements OrderInterface
{
    public function getOrder()
    {
        return ['from order 192.168.99.102 v2'];
    }
}