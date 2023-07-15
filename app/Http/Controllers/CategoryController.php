<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category/list',['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $addCategory = Category::insert([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        if ($addCategory){
            return redirect(route('category-list'))->with('success','Category Added Successfully.');
        }else{
            return redirect(route('add-category'))->with('error','Something went wrong. Try again.');
        }
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
        $category = Category::findorfail($id);
        return view('category/edit',['category'=>$category]);
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
        $editCategory = Category::where('id',$id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        if ($editCategory){
            return redirect(route('category-list'))->with('success','Category Updated Successfully.');
        }else{
            return redirect(route('add-category'))->with('error','Something went wrong. Try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = Category::where('id',$id)->delete();
        if ($deleteCategory){
            return redirect(route('category-list'))->with('success','Category Deleted Successfully.');
        }else{
            return redirect(route('add-category'))->with('error','Something went wrong. Try again.');
        }
    }
}
