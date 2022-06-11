<?php
/**
 * Set allow origin
 * Default: *
 */
$CORS = "*";

/**
 * Set UserAgent.
 * Default: "ImageProxy_v1.0.0"
 */
$UA = "ImageProxy_v1.0.0";

/**
 * Set error images folder path
 * Default: __DIR__."/errors/"
 */
$EPATH = __DIR__."/errors/";

/**
 * Set custom error response.
 */
$ERROR_RESPONSE = [
    400,
    403,
    404
];

$ERROR_RESPONSE_DEFAULT = 500;