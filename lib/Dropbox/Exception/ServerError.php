<?php
namespace Dropbox\Exception;

/**
 * The Dropbox server said that there was an internal error when trying to fulfil our request.
 * This usually corresponds to an HTTP 500 response.
 */
final class ServerError extends \Dropbox\Exception
{
    /** @internal */
    function __construct($message = "")
    {
        parent::__construct($message);
    }
}
