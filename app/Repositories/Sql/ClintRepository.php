<?php

        namespace App\Repositories\Sql;
        use App\Models\Clint;
        use App\Repositories\Contract\ClintRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class ClintRepository extends BaseRepository implements ClintRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Clint();

            }

        }
        