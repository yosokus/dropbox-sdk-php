<?php
namespace Dropbox\Exception;

/**
 * The Dropbox server said that the access token you used is invalid or expired.  You should
 * probably ask the user to go through the OAuth authorization flow again to get a new access
 * token.
 */
final class InvalidAccessToken extends \Dropbox\Exception
{
    /**
     * @internal
     */
    function __construct($message = "")
    {
        parent::__construct($message);
    }
}
