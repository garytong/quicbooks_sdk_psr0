<?php

namespace QBX\Core\Configuration;

use QBX\Core\Configuration\Message;
use QBX\Core\Configuration\BaseUrl;

/**
 * This file contains Ipp Configuration
 */
class IppConfiguration
{

    /**
     * Gets or sets the Logger mechanism.
     * @var Logger 
     */
    public $Logger;

    /**
     * Gets or sets the Security mechanism like OAuth, Cookie.
     * @var RequestValidator 
     */
    public $Security;

    /**
     * Gets or sets the Message settings like Compression, Serialiation.
     * @var Message 
     */
    public $Message;

    /**
     * Gets or sets the Retry Policy used to retry service calls when Retry-able Exceptions are generated.
     * @var IntuitRetryPolicy 
     */
    public $RetryPolicy;

    /**
     * Gets or sets the Base Urls like Pre-Production url's.
     * @var BaseUrl 
     */
    public $BaseUrl;

}

?>
