<?php

        namespace App\Repositories\Sql;
        use App\Models\Category;
        use App\Repositories\Contract\CategoryRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Category();

            }

        }
        