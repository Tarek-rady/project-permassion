<?php

        namespace App\Repositories\Sql;
        use App\Models\Banner;
        use App\Repositories\Contract\BannerRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class BannerRepository extends BaseRepository implements BannerRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Banner();

            }

        }
        