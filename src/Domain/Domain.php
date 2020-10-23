<?php

declare(strict_types=1);

namespace DarkMatter\Domain;

use DarkMatter\Components\Logger\LoggerInterface;
use DarkMatter\Payload\Payload;
use DarkMatter\Payload\Status;

abstract class Domain
{
    /**
     * @var array $config
     */
    protected $config;

    /**
     * @var LoggerInterface $logger
     */
    protected $logger;

    public function __construct(array $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;
    }
}
