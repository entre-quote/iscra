<?php
/**
 * @package    Grav\Framework\Cache
 *
 * @copyright  Copyright (C) 2014 - 2017 RocketTheme, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Cache\Exception;

use Psr\SimpleCache\InvalidArgumentException as SimpleCacheInvalidArgumentException;

/**
 * InvalidArgumentException class for PSR-16 compatible "Simple Cache" implementation.
 * @package Grav\Framework\Cache\Exception
 */
class InvalidArgumentException extends \InvalidArgumentException implements SimpleCacheInvalidArgumentException
{
}
