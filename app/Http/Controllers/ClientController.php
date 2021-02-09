<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
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
        $result = null;
        $clientfindid = $request->clientid;


        if (!empty($clientfindid)){

            // dd($userfindid);
            $result = Client::find($clientfindid);

        }else{

            $result = Client::all();
            
        }

        return json_encode($result);
        //dump($services);
        // return view('services');
        
        //Probar este
        //return response()->json($service, 200);



        // return response()->json(array($services), 207);
        // return view('services')->with('services',$services);
    }

    /**
     * @param Request $request
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        //dump($request);
        $result = null;
        $clientfindid = $request->clientid;


        if (!empty($clientfindid)){

            // dd($userfindid);
            $result = Client::find($clientfindid);

            if (!empty($result)){
                $result = [];
            }

        }else{

            $result = Client::all();
            
        }

        return json_encode($result);
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

        if (!empty($client)) {

            // $client->image = $values['image'];
            $client->name = $values['name'];
            $client->email = $values['email'];
            //$client->password = $values['password'];
            // $client->phone_number = $values['phone_number'];

            // $client->default_branch_office_id = $clientAccessToken->branch_office_id;
            // $client->current_branch_office_id = $clientAccessToken->branch_office_id;
            // $client->expiration_date = $request->expiration_date;
            $client->save();

            $message = array(
                'message' => 'Usuario Guardado Correctamente.',
                'client' => $client,
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
        $clients = new Client();
        $clients->name = $request->input('name');
        $clients->email = $request->input('email');
        $clients->save();
        return json_encode($clients);
        // print_r($request->all());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $clients_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clients_id)
    {
        $clients = Client::find($clients_id);
        $clients->name = $request->input('name');
        $clients->email = $request->input('email');
        $clients->save();
        return json_encode($clients);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($client_id)
    {
        $clients = Client::find($client_id);
        $clients->delete();

        
    }
}
