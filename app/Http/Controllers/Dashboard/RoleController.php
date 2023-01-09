<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleRequest;
use App\Models\Role;
use App\Repositories\Sql\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoleController extends Controller
{
    protected $roleRepo ;

    public function __construct(RoleRepository $roleRepo)
    {

        $this->middleware('permission:roles-read')->only(['index']);
        $this->middleware('permission:roles-create')->only(['create', 'store']);
        $this->middleware('permission:roles-update')->only(['edit', 'update']);
        $this->middleware('permission:roles-delete')->only(['destroy']);

        $this->roleRepo = $roleRepo ;
    }

    public function index()
    {
         $roles = Role::Roles()->get();
        //  $roles = $this->roleRepo->Roles()->getAll();
         return view('dashboard.backend.roles.index' , compact('roles'));
    }


    public function create()
    {
         return view('dashboard.backend.roles.create');
    }


    public function store(RoleRequest $request)
    {

       $data = $request->only('name');
       $role = $this->roleRepo->create($data);
       $role->attachPermissions($request->permissions);

        return redirect(route('admin.roles.index'))->with('success', __('models.added_successfully'));

    }

    public function edit($id)
    {
        $role  = $this->roleRepo->findOne($id);
        return view('dashboard.backend.roles.edit' , compact('role'));

    }


    public function update(RoleRequest $request, $id)
    {
        $role = $this->roleRepo->findOne($id);
        $data = $request->only('name');
        $role->update($data);



        $role->syncPermissions($request->permissions);
        return redirect(route('admin.roles.index'))->with('success', __('models.added_successfully'));

    }


    public function destroy($id)
    {
         $role = $this->roleRepo->findOne($id);

        $role->delete();

        return \response()->json([
            'message' => __('models.deleted_successfully')
        ]);
    }
}
