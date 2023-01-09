<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\API\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repositories\Sql\CareerApllyRepository;
use App\Repositories\Sql\NotificationRepository;
use App\Repositories\Sql\OrderRepository;
use Illuminate\Http\Request;

class NotificationController extends Controller
{


    protected $notificatiohRepo , $orderRepo , $careerRepo;

    public function __construct(NotificationRepository $notificatiohRepo , OrderRepository $orderRepo , CareerApllyRepository $careerRepo)
    {
          $this->notificatiohRepo = $notificatiohRepo ;
          $this->orderRepo = $orderRepo ;
          $this->careerRepo = $careerRepo ;
    }

    public function order_notificication($id)
    {
        $notification = $this->notificatiohRepo->findOne($id);

        $notification->update([
           'read' => 1
        ]);

        if($notification->order_id ){

            $order = $this->orderRepo->findWhere(['id' => $notification->order_id ]);
            return view('dashboard.backend.orders.show' , compact('order'));
        }else{
            $career = $this->careerRepo->findWhere(['id' => $notification->career_applly_id ]);
            return view('dashboard.backend.career-apllay.show' , compact('career'));
        }




    }

    public function clear_all_notifications()
    {

        $notifications = $this->notificatiohRepo->getWhere(['read' => 0]);
        foreach ($notifications as $key => $notification) {
            $notification->update([
                'read' => 1
            ]);
        }

        return redirect()->back();

    }
}
