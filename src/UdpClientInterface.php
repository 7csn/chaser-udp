<?php

namespace chaser\udp;

use chaser\stream\interfaces\ConnectionlessClientInterface;
use chaser\stream\interfaces\parts\NetworkAddressInterface;

/**
 * udp 客户端类
 *
 * @package chaser\udp
 */
interface UdpClientInterface extends ConnectionlessClientInterface, NetworkAddressInterface
{
}
