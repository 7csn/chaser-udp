<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\ConnectionlessClient;
use chaser\stream\interfaces\parts\NetworkAddressInterface;
use chaser\stream\traits\{ClientContext, NetworkAddress};

/**
 * udp 客户端类
 *
 * @package chaser\udp
 */
class UdpClient extends ConnectionlessClient implements NetworkAddressInterface
{
    use ClientContext, NetworkAddress, Service;

    /**
     * @inheritDoc
     */
    public static function subscriber(): string
    {
        return ClientSubscriber::class;
    }
}
