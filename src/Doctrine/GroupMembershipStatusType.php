<?php

namespace App\Doctrine;

class GroupMembershipStatusType extends EnumType
{
    const CURRENT_MEMBER = 'In';
    const APPLIED_FOR_MEMBERSHIP = 'WantToBeIn';
    const KICKED_FROM_GROUP = 'Kicked';
    const INVITED_INTO_GROUP = 'Invited';

    /** @var string */
    protected $name = 'group_membership_status';

    /** @var array */
    protected $values = [
        self::CURRENT_MEMBER,
        self::APPLIED_FOR_MEMBERSHIP,
        self::KICKED_FROM_GROUP,
        self::INVITED_INTO_GROUP,
    ];
}
