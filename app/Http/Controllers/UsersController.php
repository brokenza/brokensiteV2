<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $title = 'USER';
    $value = '{ title: "Delete",
                content: "บันทึกข้อมูลผู้ใช้สำเร็จ",
                autoclose :true,
                autocloseTime: 3000,
                icon: "fa-exclamation text-white",
                iconClass:"bg-warning",}';

        session(['sweet_alert' => 'Delete']);
       /*  session::put('sweet_alert', 'sweet_alert'); */
       $users=User::all();
    /*    return view($users); */
/*        return response()->json($users); */

       return view('pages.users.usermanagement',compact('users','title' ));
     /*    return view('pages.users.usermanagement'); */
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Add User';
        return view('pages.users.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $users = new User([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'username' => $request->get('username'),
            'password' => md5($request->get('password')),
            'email' => $request->get('email'),
            'role' => $request->get('role')
        ]);
        $users->save();

        return response()->json(['successs'=>'insert complated']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
