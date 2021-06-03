<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\subscriber\ConnectionlessServerSubscriber;

/**
 * udp 服务器事件订阅类
 *
 * @package chaser\udp
 *
 * @property Server $server
 */
class ServerSubscriber extends ConnectionlessServerSubscriber
{
}
