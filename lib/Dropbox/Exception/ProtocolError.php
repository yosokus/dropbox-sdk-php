<?php
namespace Dropbox\Exception;

/**
 * There was an protocol misunderstanding between this SDK and the server.  One of us didn't
 * understand what the other one was saying.
 */
class ProtocolError extends \Dropbox\Exception
{
    /**
     * @internal
     */
    function __construct($message)
    {
        parent::__construct($message);
    }
}
