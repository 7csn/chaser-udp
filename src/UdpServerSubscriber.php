<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\container\ContainerInterface;
use chaser\stream\subscribers\ConnectionlessServerSubscriber;

/**
 * udp 服务器事件订阅类
 *
 * @package chaser\udp
 */
class UdpServerSubscriber extends ConnectionlessServerSubscriber
{
    /**
     * 构造方法
     *
     * @param ContainerInterface $container
     * @param UdpServerInterface $server
     */
    public function __construct(ContainerInterface $container, UdpServerInterface $server)
    {
        parent::__construct($container, $server);
    }
}
