<?php
/**
 * destiny2-php
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2017, Richard Lynskey
 * @license https://opensource.org/licenses/MIT MIT
 * @version 0.1
 *
 * Built 2017-10-01 12:32 CDT by richard
 *
 */

namespace Destiny\Enums;

/**
 * Class GroupHomepage
 * @package Destiny\Enums
 */
class GroupHomepage implements Enum
{
    /**
     *
     */
    const WALL = 0;

    /**
     *
     */
    const FORUM = 1;

    /**
     *
     */
    const ALLIANCEFORUM = 2;

    /**
     * Get the label for the supplied enum
     * @param int $type
     * @return string
     */
    public static function getLabel($type) {
        switch ($type) {
            case self::WALL:
                return "Wall";
                break;
            case self::FORUM:
                return "Forum";
                break;
            case self::ALLIANCEFORUM:
                return "AllianceForum";
                break;
            default:
                return '';
                break;
        }
    }

}