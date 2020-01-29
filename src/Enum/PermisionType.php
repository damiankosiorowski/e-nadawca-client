<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Enum;

class PermisionType
{
    const MANAGE_USERS                = 'MANAGE_USERS';
    const TRANSMIT                    = 'TRANSMIT';
    const MANAGE_PROFILES             = 'MANAGE_PROFILES';
    const MANAGE_ORGANIZATION_UNIT    = 'MANAGE_ORGANIZATION_UNIT';
    const MANAGE_TEMPLATES            = 'MANAGE_TEMPLATES';
    const EDIT_PARCELS                = 'EDIT_PARCELS';
    const EDIT_PARCELS_FROM_TEMPLATES = 'EDIT_PARCELS_FROM_TEMPLATES';
    const MANAGE_ADDRESS_BOOK         = 'MANAGE_ADDRESS_BOOK';
    const SAVE_SELF_SETTINGS          = 'SAVE_SELF_SETTINGS';
    const MANAGE_DICTIONARIES         = 'MANAGE_DICTIONARIES';
}
