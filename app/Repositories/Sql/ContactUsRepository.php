<?php

        namespace App\Repositories\Sql;
        use App\Models\ContactUs;
        use App\Repositories\Contract\ContactUsRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class ContactUsRepository extends BaseRepository implements ContactUsRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new ContactUs();

            }

        }
        