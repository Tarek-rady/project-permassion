<?php

        namespace App\Repositories\Sql;
        use App\Models\Rate;
        use App\Repositories\Contract\RateRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class RateRepository extends BaseRepository implements RateRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Rate();

            }

        }
        