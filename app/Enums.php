<?php

namespace App;

class Enums
{
    public const MESSAGE_ICON_INFO = 'info';
    public const MESSAGE_ICON_ERROR = 'error';
    public const MESSAGE_ICON_SUCCESS = 'success';
    public const MESSAGE_ICON_WARNING = 'warning';

    public const ENABLED_MESSAGES_ICONS = [
        self::MESSAGE_ICON_INFO,
        self::MESSAGE_ICON_ERROR,
        self::MESSAGE_ICON_SUCCESS,
        self::MESSAGE_ICON_WARNING,
    ];
}
