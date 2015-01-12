<?php
namespace Dropbox\Exception;

/**
 * The Dropbox server said it couldn't fulfil our request right now, but that we should try
 * again later.
 */
final class RetryLater extends \Dropbox\Exception
{
    /**
     * @internal
     */
    function __construct($message)
    {
        parent::__construct($message);
    }
}
