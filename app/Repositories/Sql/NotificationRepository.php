<?php

        namespace App\Repositories\Sql;
        use App\Models\Notification;
        use App\Repositories\Contract\NotificationRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class NotificationRepository extends BaseRepository implements NotificationRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new Notification();

            }

        }
        