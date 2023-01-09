<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Repositories\Sql\BannerRepository;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    protected $bannerRepo;

    public function __construct(BannerRepository $bannerRepo)
    {

            $this->middleware('permission:banners-read')->only(['index']);
            $this->middleware('permission:banners-create')->only(['create', 'store']);
            $this->middleware('permission:banners-update')->only(['edit', 'update']);
            $this->middleware('permission:banners-delete')->only(['destroy']);

        $this->bannerRepo = $bannerRepo ;
    }
    public function index()
    {
        $banners= $this->bannerRepo->getAll();
         return view('dashboard.backend.banners.index' , compact('banners'));
    }


    public function create()
    {
         return view('dashboard.backend.banners.create');
    }


    public function store(BannerRequest $request)
    {
      $data = $request->except('img','status');

      $data['status']  = 'active';

      if ($request->hasFile('img')) {
        $data['img'] = $request->file('img')->store('banners');
      }

      $this->bannerRepo->create($data);
      return redirect(route('admin.banners.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
         $banner = $this->bannerRepo->findOne($id);
         return view('dashboard.backend.banners.edit' , compact('banner'));
    }


    public function update(BannerRequest $request, $id)
    {
        $banner = $this->bannerRepo->findOne($id);
        $data = $request->except('img' );


        if ($request->hasFile('img')) {

            Storage::delete($banner->img);

            $data['img'] = $request->file('img')->store('banners');

        } else {
            $data['img'] = $banner->img;
        }

        $banner->update($data);
      return redirect(route('admin.banners.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $banner = $this->bannerRepo->findOne($id);
        if ($banner->img) {
            Storage::delete($banner->img);
        }

        $banner->delete();

         return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
