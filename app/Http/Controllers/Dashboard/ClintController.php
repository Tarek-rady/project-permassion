<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClintRequest;
use App\Models\Clint;
use App\Repositories\Sql\ClintRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ClintController extends Controller
{
    protected $clintRepo ;

    public function __construct(ClintRepository $clintRepo)
    {
        $this->middleware('permission:clints-read')->only(['index']);
        $this->middleware('permission:clints-create')->only(['create', 'store']);
        $this->middleware('permission:clints-update')->only(['edit', 'update']);
        $this->middleware('permission:clints-delete')->only(['destroy', 'multi_delete']);
        $this->clintRepo = $clintRepo ;

    }

    public function index()
    {
         $clints = $this->clintRepo->getAll();
         return view('dashboard.backend.clints.index' , compact('clints'));
    }


    public function create()
    {
         return view('dashboard.backend.clints.create');
    }


    public function store(ClintRequest $request)
    {

        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('clints');
        }

        $this->clintRepo->create($data);

        return redirect(route('admin.clints.index'))->with('success', __('models.added_successfully'));

    }





    public function edit($id)
    {
        $clint = $this->clintRepo->findOne($id);

        return view('dashboard.backend.clints.edit' , compact('clint'));

    }


    public function update(ClintRequest $request, $id)
    {
         $clint = $this->clintRepo->findOne($id);
         $data = $request->except('img' );

          if ($request->hasFile('img')) {

            Storage::delete($clint->img);

            $data['img'] = $request->file('img')->store('clints');

        } else {
            $data['img'] = $clint->img;
        }

        $clint->update($data);
        return redirect(route('admin.clints.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
         $clint = $this->clintRepo->findOne($id);

        if ($clint->img) {
            Storage::delete($clint->img);
        }

        $clint->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }



   
}
