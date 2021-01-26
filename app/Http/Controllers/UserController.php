<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
// Use View;

class UserController extends Controller
{
    /**
     * @param Request $request
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dump($request);
        return User::all();
        //dump($services);
        // return view('services');
        
        //Probar este
        //return response()->json($service, 200);



        // return response()->json(array($services), 207);
        // return view('services')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        //
        $values = array(
            'name' => $request->name,
            //'password' => Hash::make($request->password),
            // 'phone_number' => $request->phone_number
            'email' => $request->email
        );

        if (!empty($user)) {

            // $user->image = $values['image'];
            $user->name = $values['name'];
            $user->email = $values['email'];
            //$user->password = $values['password'];
            // $user->phone_number = $values['phone_number'];

            // $user->default_branch_office_id = $userAccessToken->branch_office_id;
            // $user->current_branch_office_id = $userAccessToken->branch_office_id;
            // $user->expiration_date = $request->expiration_date;
            $user->save();

            $message = array(
                'message' => 'Usuario Guardado Correctamente.',
                'user' => $user,
                'code' => 200
            );

            return response()->json($message, 200);
        } else {
            return response()->json(array('message' => 'Usuario no creado', 'code' => 207), 207);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('email'));
        $users->save();
        return json_encode($users);
        // print_r($request->all());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $users_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users_id)
    {
        $users = User::find($users_id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('email'));
        $users->save();
        return json_encode($users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $users = User::find($user_id);
        $users->delete();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        return User::all();
    }
    
}
