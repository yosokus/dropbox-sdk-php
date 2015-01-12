<?php
namespace Dropbox\Exception;

/**
 * There was a network I/O error when making the request.
 */
final class NetworkIO extends \Dropbox\Exception
{
    /**
     * @internal
     */
    function __construct($message, $cause = null)
    {
        parent::__construct($message, $cause);
    }
}
