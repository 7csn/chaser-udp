<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\ConnectionlessClient;
use chaser\stream\interfaces\part\NetworkAddressInterface;
use chaser\stream\traits\{ClientContext, NetworkAddress};

/**
 * udp 客户端类
 *
 * @package chaser\udp
 */
class Client extends ConnectionlessClient implements NetworkAddressInterface
{
    use ClientContext, NetworkAddress, Service;
}
