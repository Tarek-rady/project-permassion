<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\ServerEmail;
use App\Repositories\Sql\ContactUsRepository;
use App\Repositories\Sql\SettingRepository;
use App\Repositories\Sql\StaticPageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    protected $staticRepo , $settingRepo , $contacRepo;

    public function __construct(StaticPageRepository $staticRepo , SettingRepository $settingRepo , ContactUsRepository $contacRepo)
    {

        $this->middleware('permission:contact_us-read')->only(['contact_us']);
        $this->middleware('permission:users-create')->only(['create', 'store']);
        $this->middleware('permission:users-update')->only(['edit', 'update']);
        $this->middleware('permission:users-delete')->only(['destroy', 'multi_delete']);

        $this->staticRepo = $staticRepo ;
        $this->settingRepo = $settingRepo ;
        $this->contacRepo = $contacRepo ;
    }

    public function contact_us()
    {
        $contacts = $this->contacRepo->getAll();
        return view('dashboard.backend.contact.index' , compact('contacts'));

    }

    public function about()
    {
        $about = $this->staticRepo->findWhere(['type' => 'about']);
        return view('dashboard.backend.settings.create' , compact('about'));

    }

    public function storeAbout(Request $request)
    {

        $about = $this->staticRepo->findWhere(['type' => 'about']);

        $data = $request->except('img' , 'type');
        $data['type'] = 'about';


        if ($request->hasFile('img')) {

            Storage::delete($about->img);

            $data['img'] = $request->file('img')->store('static');

        } else {
            $data['img'] = $about->img;
        }



        $about->update($data);
        return redirect(route('admin.about-us'))->with('success', __('models.added_successfully'));
    }

    public function setting()
    {
       $setting = $this->settingRepo->findWhere(['type' => 'setting']);
       return view('dashboard.backend.settings.setting' , compact('setting'));

    }

    public function storeSetting(Request $request )
    {

        $setting = $this->settingRepo->findWhere(['type' => 'setting']);
        $data = $request->except('icon' , 'type');


        $setting->update($data);
        return redirect(route('admin.setting'))->with('success', __('models.added_successfully'));
    }






}
