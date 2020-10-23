<?php

declare(strict_types=1);

namespace DarkMatter\Exception\Application;

/**
 * This exception is thrown in case DarkMatter application needs to abort processing and can handle the error within
 * the application itself.
 */
class DarkMatterException extends \Exception
{
}
