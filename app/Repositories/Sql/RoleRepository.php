<?php

        namespace App\Repositories\Sql;
        use App\Models\Role;
        use App\Repositories\Contract\RoleRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class RoleRepository extends BaseRepository implements RoleRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Role();

            }

        }
        