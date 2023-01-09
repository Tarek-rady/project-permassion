<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Repositories\Sql\CategoryRepository;
use App\Repositories\Sql\ProductRepository;
use App\Repositories\Sql\SubCategoryRepository;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo )
    {
        $this->middleware('permission:products-read')->only(['index' , 'rates']);
        $this->middleware('permission:products-create')->only(['create', 'store']);
        $this->middleware('permission:products-update')->only(['edit', 'update']);
        $this->middleware('permission:products-delete')->only(['destroy']);
        return $this->productRepo = $productRepo ;

    }
    public function index()
    {
        $products = $this->productRepo->getAll();
         return view('dashboard.backend.products.index' , compact('products'));
    }


    public function create()
    {
          $categories = Category::orderByDesc('created_at' , 'DESC')->get();
         return view('dashboard.backend.products.create' , compact('categories' ));
    }


    public function store(ProductRequest $request)
    {
        $data = $request->except('img');



        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('products');
        }

        $product =  $this->productRepo->create($data);


      return redirect(route('admin.products.index'))->with('success', __('models.added_successfully'));

    }


    public function show($id)
    {
        $product = $this->productRepo->findOne($id);

        return view('dashboard.backend.products.show' , compact('product') );


    }


    public function edit($id)
    {
        $product = $this->productRepo->findOne($id);

        $categories = Category::orderBy('created_at' , 'DESC')->get();
       return view('dashboard.backend.products.edit' , compact('product' , 'categories'));
    }


    public function update(ProductRequest $request, $id)
    {
        $product = $this->productRepo->findOne($id);

        $data = $request->except('img' , 'images');

        if ($request->hasFile('img')) {

            Storage::delete($product->img);

            $data['img'] = $request->file('img')->store('products');

        } else {
            $data['img'] = $product->img;
        }

        $product->update($data);

        if ($request->hasFile('images')) {

            Storage::delete($product->images()->pluck('images')->toArray());
            $product->images()->delete();

            $files = $request->file('images');

            foreach ($files as $file) {
                $image = $file->store('product-details/'.$product->id);
                $product->images()->create(['images'=>$image]);
            }

        }
      return redirect(route('admin.products.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
        $product = $this->productRepo->findOne($id);

        if ($product->img) {
            Storage::delete($product->img);
        }

        if ($product->images) {
            Storage::delete($product->images()->pluck('images')->toArray());
            $product->images()->delete();
        }
        $product->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }



    public function rates($product_id)
    {
        $product = $this->productRepo->findOne($product_id);
        return view('dashboard.backend.rates.index' , compact('product'));

    }
}
