<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Repositories\Sql\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    protected $newsRepo ;

    public function __construct(NewsRepository $newsRepo)
    {

        $this->middleware('permission:news-read')->only(['index']);
        $this->middleware('permission:news-create')->only(['create', 'store']);
        $this->middleware('permission:news-update')->only(['edit', 'update']);
        $this->middleware('permission:news-delete')->only(['destroy']);

        $this->newsRepo = $newsRepo ;

    }

    public function index()
    {
         $news = $this->newsRepo->getAll();
         return view('dashboard.backend.news.index' , compact('news'));
    }


    public function create()
    {
         return view('dashboard.backend.news.create');
    }


    public function store(NewsRequest $request)
    {

       $data = $request->except('img' , 'user_id' , 'images');
       $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('news');
        }

        $create_news = $this->newsRepo->create($data);



        return redirect(route('admin.news.index'))->with('success', __('models.added_successfully'));

    }



    public function edit($id)
    {
         $news = $this->newsRepo->findOne($id);
        return view('dashboard.backend.news.edit' , compact('news'));

    }


    public function update(NewsRequest $request, $id)
    {
         $news = $this->newsRepo->findOne($id);

         $data = $request->except('img' , 'user_id' , 'images');
         $data['user_id'] = auth()->user()->id;


          if ($request->hasFile('img')) {

            Storage::delete($news->img);

            $data['img'] = $request->file('img')->store('news');

        } else {
            $data['img'] = $news->img;
        }

        $news->update($data);



        return redirect(route('admin.news.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
         $news = $this->newsRepo->findOne($id);

        if ($news->img) {
            Storage::delete($news->img);
        }

        
        $news->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
