<?php

        namespace App\Repositories\Sql;
        use App\Models\Order;
        use App\Repositories\Contract\OrderRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class OrderRepository extends BaseRepository implements OrderRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Order();

            }

        }
        