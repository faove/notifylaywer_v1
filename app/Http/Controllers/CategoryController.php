<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // echo 'index';
        $result = null;
        $associatefindid = $request->categoryid;
        
        if (isset($categoryid) && !empty($categoryid)){

            $result = Category::find($categoryid);

        }else{

            $offset = $request->offset;
            $limit  = $request->limit;
            
            if ((isset($offset) && isset($limit)) && !empty($limit)){
                $result = Category::offset($offset)->limit($limit)->get();

            }else {
                $result = Category::all();
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        echo 'destroy';
    }
}
