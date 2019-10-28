<?php
/**
 * User: 周华
 * Date: 2019-10-28
 * Time: 12:02
 */

namespace Sszh\Alihbasethrift\Exception;

use Throwable;

class MethodNotFoundException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}