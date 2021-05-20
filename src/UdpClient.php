<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\ConnectionlessClient;
use chaser\stream\traits\ClientContext;
use chaser\stream\traits\NetworkAddress;

/**
 * udp 客户端类
 *
 * @package chaser\udp
 */
class UdpClient extends ConnectionlessClient implements UdpClientInterface
{
    use ClientContext, NetworkAddress, UdpService;

    /**
     * @inheritDoc
     */
    public static function subscriber(): string
    {
        return UdpClientSubscriber::class;
    }
}
