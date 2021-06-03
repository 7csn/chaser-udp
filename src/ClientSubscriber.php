<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\subscriber\ClientSubscriber as StreamClientSubscriber;

/**
 * udp 客户端事件订阅类
 *
 * @package chaser\udp
 *
 * @property Client $client
 */
class ClientSubscriber extends StreamClientSubscriber
{
}
