<?php

namespace Daniilborovkov\Permission\Exceptions;

use InvalidArgumentException;
class PermissionAlreadyExists extends InvalidArgumentException
{
    public static function create($permissionName, $guardName)
    {
        return new static("A `{$permissionName}` permission already exists for guard `{$guardName}`.");
    }
}