<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Repositories\Sql\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    protected $categoryRepo ;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->middleware('permission:categories-read')->only(['index']);
        $this->middleware('permission:categories-create')->only(['create', 'store']);
        $this->middleware('permission:categories-update')->only(['edit', 'update']);
        $this->middleware('permission:categories-delete')->only(['destroy']);
        $this->categoryRepo = $categoryRepo ;
    }

    public function index()
    {
         $categories = $this->categoryRepo->getAll();

         return view('dashboard.backend.categories.index' , compact('categories'));
    }


    public function create()
    {
         return view('dashboard.backend.categories.create');
    }


    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $this->categoryRepo->create($data);
        return redirect(route('admin.categories.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
        $category = $this->categoryRepo->findOne($id);
         return view('dashboard.backend.categories.edit' , compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = $this->categoryRepo->findOne($id);

        $data = $request->all();

        $category->update($data);
        return redirect(route('admin.categories.index'))->with('success', __('models.updated_successfully'));

    }


    public function destroy($id)
    {

        $category = $this->categoryRepo->findOne($id)->delete();

         return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }

    public function get_category_data()
    {
        return Excel::download(new CategoryExport, 'categories.xlsx');
    }
}
