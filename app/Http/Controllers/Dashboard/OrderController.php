<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Repositories\Sql\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepo;

    public function __construct(OrderRepository $orderRepo)
    {

        $this->middleware('permission:orders-read')->only(['index']);
        $this->middleware('permission:orders-create')->only(['create', 'store']);
        $this->middleware('permission:orders-update')->only(['edit', 'update' , 'show']);
        $this->orderRepo = $orderRepo ;
    }

    public function index()
    {
         $orders = $this->orderRepo->getAll();

         return view('dashboard.backend.orders.index' , compact('orders'));
    }

    public function show($id)
    {
        $order = $this->orderRepo->findOne($id);
        return view('dashboard.backend.orders.show' , compact('order'));
    }

    public function update(Request $request , $id)
    {
        $order = $this->orderRepo->findOne($id);
        $order->update([
          'status' => $request->status
        ]);

        return redirect(route('admin.orders.index'))->with('success', __('models.added_successfully'));
    }

    public function order_waiting()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'waiting']);
        return view('dashboard.backend.orders.waiting' , compact('orders'));
    }

     public function order_complated()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'complated']);
        return view('dashboard.backend.orders.complated' , compact('orders'));
    }


    public function order_rejected()
    {
        $orders = $this->orderRepo->getWhere(['status' => 'rejected']);
        return view('dashboard.backend.orders.rejected' , compact('orders'));
    }






}
