<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\subscribers\ConnectionlessServerSubscriber;

/**
 * udp 服务器事件订阅类
 *
 * @package chaser\udp
 *
 * @property UdpServer $server
 */
class UdpServerSubscriber extends ConnectionlessServerSubscriber
{
}
