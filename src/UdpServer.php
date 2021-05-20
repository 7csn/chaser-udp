<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\container\ContainerInterface;
use chaser\reactor\Driver;
use chaser\stream\ConnectionlessServer;
use chaser\stream\traits\ServerContext;

/**
 * udp 服务器类
 *
 * @package chaser\udp
 */
class UdpServer extends ConnectionlessServer
{
    use ServerContext, UdpService;

    /**
     * @inheritDoc
     */
    public function __construct(ContainerInterface $container, Driver $reactor, string $target)
    {
        parent::__construct($container, $reactor, $target);

        $this->reusePort();
    }

    /**
     * @inheritDoc
     */
    public static function subscriber(): string
    {
        return UdpServerSubscriber::class;
    }
}
