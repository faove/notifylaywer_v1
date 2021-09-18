<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //echo 'index';
        $result = null;
        $categoryfindid = $request->categoryid;
        
        if (isset($categoryfindid) && !empty($categoryfindid)){

            $result = Categories::find($categoryfindid);

        }else{

            $offset = $request->offset;
            $limit  = $request->limit;
            
            if ((isset($offset) && isset($limit)) && !empty($limit)){
                $result = Categories::offset($offset)->limit($limit)->get();

            }else {
                $result = Categories::all();
            }
            
        }

        return json_encode($result);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'store';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        //
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        //
        echo 'destroy';
    }
}
