<?php

namespace App\Http\Controllers;

use App\Account;
use App\Category;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $view_prefix = 'admin/account';
    public function login()
    {
        return view('login');
    }
    public function processLogin(Request $request)
    {
        $userName = $request->get('userName');
        $password = $request->get('password');
        $existingAccount = Account::where('userName', '=', $userName)->first();
        if ($existingAccount == null) {
            return 'Login fails';
        }
        if (md5($password . $existingAccount->salt) != $existingAccount->password_hash) {
            return 'Login fails 2';
        }
        $request->getSession()->put('userName', $existingAccount->userName);
        $request->getSession()->put('type', $existingAccount->type);
        return redirect('/categories');
    }

    public function register()
    {
        return view('register');
    }
    public function userProcessRegister(Request $request)
    {
        $name = $request->get('name');
        $userName = $request->get('userName');
        $password = $request->get('password');
        $salt = substr(sha1(rand()), 0, 7);
        $password_hash = md5($password . $salt);
        $phone = $request->get('phone');
        $address = $request->get('address');
        $email = $request->get('email');

        $account = new Account();
        $account->name = $name;
        $account->userName = $userName;
        $account->password_hash = $password_hash;
        $account->salt = $salt;
        $account->phone = $phone;
        $account->address = $address;
        $account->email = $email;
        $account->type = "customer";
        $account->status = "active";
        $account->save();
    }


    /**
     * Display a listing of the resource.
     *
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Account::all();
        $list = Account::where('name', 'like', '%' .$request->get('keyword'). '%')->orderBy('created_at', 'DESC')->paginate(5);
        return view($this->view_prefix . '/list')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view_prefix . '/form')->with('myErrors01', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Account();
        $obj->name = $request->get('name');
        $obj->usesName = $request->get('usesName');
        $obj->address = $request->get('address');
        $obj->email = $request->get('email');
        $obj->phone = $request->get('phone');
        $obj->status = $request->get('status');
        $obj->type = $request->get('type');
        $obj->save();
        return redirect('/' . $this->view_prefix);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Account::find($id);
        return view($this->view_prefix . '/detail')->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Account::find($id);
        if ($obj == null) {
            return view('error/not-found');
        }
        return view($this->view_prefix . '/edit')->with('obj', $obj);
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
        $obj = Account::find($id);
        if ($obj == null) {
            return view('error/not-found');
        }
        $obj->name = $request->get('name');
        $obj->save();
        return redirect('/' . $this->view_prefix);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Account::find($id);
        if ($obj == null) {
            abort(404);
        }
        $obj->delete(); // cấm
        abort(200);
    }
}
