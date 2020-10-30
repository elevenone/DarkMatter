<?php

declare(strict_types = 1);

namespace DarkMatter\Action;

use DarkMatter\Http\Request;
use DarkMatter\Components\Logger\LoggerInterface;
use DarkMatter\Responder\ResponderInterface;

abstract class Action implements ActionInterface
{
    /**
     * @var array $config
     */
    protected $config;

    /**
     * @var LoggerInterface $logger
     */
    protected $logger;

    /**
     * @var Request $request
     */
    protected $request;

    /**
     * @var ResponderInterface $responder
     */
    protected $responder;

    public function __construct(array $config, LoggerInterface $logger, Request $request)
    {
        $this->config = $config;
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * Sets a responder.
     *
     * @param ResponderInterface $responder
     * @return void
     */
    public function setResponder(ResponderInterface $responder): void
    {
        $this->responder = $responder;
    }

    /**
     * Returns the responder.
     *
     * @return ResponderInterface
     */
    public function getResponder(): ResponderInterface
    {
        return $this->responder;
    }
}
