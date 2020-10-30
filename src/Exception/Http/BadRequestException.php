<?php

declare(strict_types = 1);

namespace DarkMatter\Exception\Http;

/**
 * Class BadRequestException
 *
 * This exception should be thrown in case of a bad http request (http error 400).
 *
 * @package DarkMatter\Exception\Http
 */
class BadRequestException extends HttpException
{
}
