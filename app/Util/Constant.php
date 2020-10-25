<?php

namespace App\Util;

class Constant {

    const USER_ROLE_SUPER_ADMIN = 'SUPER_ADMIN';
    const USER_ROLE_ADMIN = 'ADMIN';
    const USER_ROLE_CUSTOMER = 'CUSTOMER';

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    const STATUS_LABELS = [
    	self::STATUS_ACTIVE => 'Active',
    	self::STATUS_INACTIVE => 'Inactive'
    ];

    const MONTH_JAN = '1';
    const MONTH_FEB = '2';
    const MONTH_MAR = '3';
    const MONTH_APR = '4';
    const MONTH_MEI = '5';
    const MONTH_JUN = '6';
    const MONTH_JUL = '7';
    const MONTH_AUG = '8';
    const MONTH_SEP = '9';
    const MONTH_OCT = '10';
    const MONTH_NOV = '11';
    const MONTH_DEC = '12';

    const MONTH_LABEL = [
        self::MONTH_JAN => 'January',
        self::MONTH_FEB => 'February',
        self::MONTH_MAR => 'March',
        self::MONTH_APR => 'April',
        self::MONTH_MEI => 'May',
        self::MONTH_JUN => 'June',
        self::MONTH_JUL => 'July',
        self::MONTH_AUG => 'August',
        self::MONTH_SEP => 'September',
        self::MONTH_OCT => 'October',
        self::MONTH_NOV => 'November',
        self::MONTH_DEC => 'December'
    ];
}