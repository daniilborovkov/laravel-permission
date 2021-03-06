<?php

namespace Daniilborovkov\Permission\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
interface Permission
{
    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles();
    /**
     * Find a permission by its name.
     *
     * @param string $name
     * @param string|null $guardName
     *
     * @throws \Daniilborovkov\Permission\Exceptions\PermissionDoesNotExist
     *
     * @return Permission
     */
    public static function findByName($name, $guardName);
    /**
     * Find a permission by its id.
     *
     * @param int $id
     * @param string|null $guardName
     *
     * @throws \Daniilborovkov\Permission\Exceptions\PermissionDoesNotExist
     *
     * @return Permission
     */
    public static function findById($id, $guardName);
    /**
     * Find or Create a permission by its name and guard name.
     *
     * @param string $name
     * @param string|null $guardName
     *
     * @return Permission
     */
    public static function findOrCreate($name, $guardName);
}