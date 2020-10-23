<?php

declare(strict_types=1);

namespace DarkMatter\Action;

use DarkMatter\Http\Request;
use DarkMatter\Components\Logger\LoggerInterface;
use DarkMatter\Responder\JsonResponder;

/**
 * @property JsonResponder $responder
 */

abstract class JsonAction extends Action
{
    public function __construct(array $config, LoggerInterface $logger, Request $request)
    {
        parent::__construct($config, $logger, $request);
        $this->setResponder(new JsonResponder($config));
    }
}
