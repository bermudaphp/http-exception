<?php

namespace Bermuda\HTTP\Exception;

class BadRequestException extends HttpException
{
    public function __construct(?string $reasonPhrase = null)
    {
        parent::__construct(400, $reasonPhrase);
    }
}
