<?php

        namespace App\Repositories\Sql;
        use App\Models\Customer;
        use App\Repositories\Contract\CustomerRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Customer();

            }

        }
        