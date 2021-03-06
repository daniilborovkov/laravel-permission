<?php

namespace Daniilborovkov\Permission\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
interface Role
{
    /**
     * A role may be given various permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions();
    /**
     * Find a role by its name and guard name.
     *
     * @param string $name
     * @param string|null $guardName
     *
     * @return \Daniilborovkov\Permission\Contracts\Role
     *
     * @throws \Daniilborovkov\Permission\Exceptions\RoleDoesNotExist
     */
    public static function findByName($name, $guardName);
    /**
     * Find a role by its id and guard name.
     *
     * @param int $id
     * @param string|null $guardName
     *
     * @return \Daniilborovkov\Permission\Contracts\Role
     *
     * @throws \Daniilborovkov\Permission\Exceptions\RoleDoesNotExist
     */
    public static function findById($id, $guardName);
    /**
     * Find or create a role by its name and guard name.
     *
     * @param string $name
     * @param string|null $guardName
     *
     * @return \Daniilborovkov\Permission\Contracts\Role
     */
    public static function findOrCreate($name, $guardName);
    /**
     * Determine if the user may perform the given permission.
     *
     * @param string|\Daniilborovkov\Permission\Contracts\Permission $permission
     *
     * @return bool
     */
    public function hasPermissionTo($permission);
}