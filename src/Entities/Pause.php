<?php

/**
 * \Wicked\Timely\Entities\Pause
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <wick.b@hotmail.de>
 * @copyright 2016 Bernhard Wick
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/wick-ed/timely
 */

namespace Wicked\Timely\Entities;

/**
 * Pause entity
 *
 * @author    Bernhard Wick <wick.b@hotmail.de>
 * @copyright 2016 Bernhard Wick
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/wick-ed/timely
 */
class Pause extends Booking
{

    /**
     *
     * @var unknown
     */
    const PAUSE_TAG_START = '_PAUSE_START_';

    /**
     *
     * @var unknown
     */
    const PAUSE_TAG_END = '_PAUSE_END_';

    /**
     *
     * @param string $comment
     * @param boolean $resuming
     */
    public function __construct($comment = '', $resuming = false)
    {
        if ($resuming === true) {
            parent::__construct($comment, self::PAUSE_TAG_END);
        } else {
            parent::__construct($comment, self::PAUSE_TAG_START);
        }
    }
}
