<?php

        namespace App\Repositories\Sql;
        use App\Models\Size;
        use App\Repositories\Contract\SizeRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class SizeRepository extends BaseRepository implements SizeRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Size();

            }

        }
        