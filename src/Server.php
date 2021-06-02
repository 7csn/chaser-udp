<?php

declare(strict_types=1);

namespace chaser\udp;

use chaser\stream\ConnectionlessServer;
use chaser\stream\traits\ServerContext;

/**
 * udp 服务器类
 *
 * @package chaser\udp
 */
class Server extends ConnectionlessServer
{
    use ServerContext, Service;

    /**
     * @inheritDoc
     */
    public static function subscriber(): string
    {
        return ServerSubscriber::class;
    }

    /**
     * @inheritDoc
     */
    protected function initCommon(): void
    {
        parent::initCommon();

        $this->reusePort();
    }
}
