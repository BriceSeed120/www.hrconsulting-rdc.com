<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $success = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('dashboard.user.index', compact('users'))->withTitle('Users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        return view('dashboard.user.create')->withTitle('Add new user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'bail|required|unique:users,email',
            'mobile' => 'required',            
            'password' => 'bail|required|same:password_confirm|min:8|max:32',
            'password_confirm' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'email.required' => 'Email filed is required',
            'mobile.required' => 'Mobile filed is required',
            'password_confirm.required' => 'Password filed is required',
        ]);
        if( $request->password ) {
            $validatedData['password'] = Hash::make( $request->password );
        }
        User::create($validatedData);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request, $id )
    {
        $user = User::find( $id );
        return view('dashboard.user.show', compact('user'))->withTitle('User : '. $user->name );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.edit', compact('user'))->withTitle('Edit user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'email.required' => 'Email filed is required',
            'mobile.required' => 'Mobile filed is required',
            'password_confirm.required' => 'Password filed is required',
        ]);
        if( $request->password &&  ($request->password_confirm == $request->password )) {

            $validatedData['password'] = Hash::make( $request->password );
        }
        $user = User::where("id", $id)->update($validatedData);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function action( Request $request )
    {
        $customer_id = $request->id;
        if( isset( $request->action ) ) {
            return call_user_func(array($this, $request->action), $request);
        }
    }

    private function active( $request )
    {
        $data = ['status' => false, 'label' => 'error', 'content' => 'User cannot activate'];
        $user = User::findOrFail($request->id);
        $user->status = 1;
        if( $user->save()) {
            $data['label'] = 'success';
            $data['status'] = true;
            $data['content'] = 'User has been successfully activated';
        }

        if( request()->ajax() || request()->wantsJson() ) {
            return response()->json($data, $this->success);
        }
        return redirect()->back()->with([
            'message' => $data
        ]);
    }

    private function deactive( $request )
    {
        $data = ['status' => false, 'label' => 'error', 'content' => 'User cannot de-activate'];
        $user = User::findOrFail($request->id);
        $user->status = 2;
        if( $user->save()) {
            $data['label'] = 'success';
            $data['status'] = true;
            $data['content'] = 'User has been successfully de-activated';
        }

        if( request()->ajax() || $request->wantsJson() ) {
            return response()->json($data, $this->success);
        }
        return redirect()->back()->with([
            'message' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    { 
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }

    /**
     * Logout the user from session.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'))->with([
            'message' => [
                'label' => 'success',
                'content' => 'You are successfully loggedout.'
            ]
        ]);;
    }

    public function export( Request $request )
    {
        return Excel::download(new CustomersExport, 'ispbillman_users.xlsx');
    }

    public function import( Request $request )
    {
        if( $request->isMethod('post') && $request->file('myFile')) {
            Excel::import(new CustomersImport, $request->myFile);
            return redirect()->route('dashboard.user.index')->with([
                'message' => [
                    'label' => 'success',
                    'content' => 'Users successfully imported.'
                ]
            ]);
        }

        return view('dashboard.user.import')->withTitle('Import users')->withCount(0);
    }
}

