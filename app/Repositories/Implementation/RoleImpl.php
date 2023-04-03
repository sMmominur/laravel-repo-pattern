<?php

namespace App\Implementation;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\RoleInterface;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

/**
 * Repository implementation of Role interface for the Role model.
 *
 * @author Mominur Rahman
 * @since 2023-01-01
 */

class RoleImpl extends BaseRepository implements RoleInterface
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    
}