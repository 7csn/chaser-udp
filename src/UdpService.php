<?php

namespace chaser\udp;

use chaser\stream\interfaces\parts\ServiceInterface;

/**
 * udp 服务特征
 *
 * @package chaser\udp
 *
 * @see ServiceInterface
 */
trait UdpService
{
    /**
     * @inheritDoc
     */
    public static function transport(): string
    {
        return 'udp';
    }
}
