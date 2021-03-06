<?php
/**
 * destiny2-php
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2017, Richard Lynskey
 * @license https://opensource.org/licenses/MIT MIT
 *
 */

namespace Destiny\Enums;

/**
 * Class HostGuidedGamesPermissionLevel
 *
 * Used for setting the guided game permission level override (admins and founders can always host guided games).
 *
 * @package Destiny\Enums
 *
 * @link https://bungie-net.github.io/multi/schema_GroupsV2-HostGuidedGamesPermissionLevel.html#schema_GroupsV2-HostGuidedGamesPermissionLevel
 */
class HostGuidedGamesPermissionLevel implements Enum
{
    /**
     *
     */
    const NONE = 0;

    /**
     *
     */
    const BEGINNER = 1;

    /**
     *
     */
    const MEMBER = 2;

    /**
     * Returns the string version of the enum value
     *
     * @param int $type
     * @return string
     */
    public static function getLabel($type) {
        switch ($type) {
            case self::NONE:
                return "None";
                break;
            case self::BEGINNER:
                return "Beginner";
                break;
            case self::MEMBER:
                return "Member";
                break;
            default:
                return "";
                break;
        }
    }

}