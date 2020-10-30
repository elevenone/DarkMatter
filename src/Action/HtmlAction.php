<?php

declare(strict_types = 1);

namespace DarkMatter\Action;

use DarkMatter\Http\Request;
use DarkMatter\Components\Logger\LoggerInterface;
use DarkMatter\Responder\HtmlResponder;

/**
 * @property HtmlResponder $responder
 */

abstract class HtmlAction extends Action
{
    public function __construct(array $config, LoggerInterface $logger, Request $request)
    {
        parent::__construct($config, $logger, $request);
        $this->setResponder(new HtmlResponder($config));
    }
}
