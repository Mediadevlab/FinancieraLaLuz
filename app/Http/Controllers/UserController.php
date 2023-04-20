<?php

namespace App\Http\Controllers;

//use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravolt\Avatar\Facade as Avatar;
use Spatie\Permission\Models\Role;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('user_index'), 403);
        $users = User::paginate(3000);

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_create'), 403);
        $user = new User();
        /*return view('user.create', compact('user'));*/
        $roles = Role::all()->pluck('name', 'id');
            return view('user.create', compact('user','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(User::$rules);

        // $this -> validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|unique:users,email',
        //     'password' => 'required',
        //     'roles' => 'required'
        // ]);

        // $user = User::create($request->all());

        $user = User::create($request->only('name', 'username', 'email') + 
         ['password' => bcrypt($request->input('password'))],);

        // Avatar::create($request->name)->save(storage_path('public\avatar\avatar-' . $user->id . '.png'));
        
        // $input = $request -> all();
        // $input['password'] = Hash::make($input['password']);

        // $user -> assignRole($request -> input('roles'));
        
        $roles = $request->input('roles', []);
        $user -> syncRoles($roles);
        return redirect()->route('users.index')
            ->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($id);

        abort_if(Gate::denies('user_show'), 403);
        $user->load('roles');
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $user = User::find($id);
        abort_if(Gate::denies('user_edit'), 403);
        $roles = Role::all()->pluck('name', 'id');
        $user->load('roles');
        // $userRole = $user -> roles -> pluck('name','name') -> all();

        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // request()->validate(User::$rules);

        $user->update($request->all());

        $roles = $request->input('roles', []);
        $user -> syncRoles($roles);

        return redirect()->route('users.index')
            ->with('success', 'Datos actualizados exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        // $user = User::find($id)->delete();
        
        abort_if(Gate::denies('user_destroy'), 403);
        if (auth() -> user() -> id = $user -> id){
            return redirect()->route('users.index');    
        }

        $user -> delete();
        
        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado exitosamente');
    }
}
