<?php

        namespace App\Repositories\Sql;
        use App\Models\Product;
        use App\Repositories\Contract\ProductRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class ProductRepository extends BaseRepository implements ProductRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Product();

            }

        }
        