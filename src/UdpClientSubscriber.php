<?php

namespace chaser\udp;

use chaser\container\ContainerInterface;
use chaser\stream\subscribers\ClientSubscriber;

/**
 * udp 客户端事件订阅类
 *
 * @package chaser\udp
 */
class UdpClientSubscriber extends ClientSubscriber
{
    /**
     * 构造方法
     *
     * @param ContainerInterface $container
     * @param UdpClientInterface $client
     */
    public function __construct(protected ContainerInterface $container, protected UdpClientInterface $client)
    {
    }
}
