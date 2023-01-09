<?php

        namespace App\Repositories\Sql;
        use App\Models\News;
        use App\Repositories\Contract\NewsRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class NewsRepository extends BaseRepository implements NewsRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new News();

            }

        }
        