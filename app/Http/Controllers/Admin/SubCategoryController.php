<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.SubCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required'
        ]);
        auth()->user()->categories()->create([
           'name'=>$request['name'],
            'child'=>session('id')
        ]);
        return redirect(route('subcategories.show',['id'=>session('id')]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session(['id' =>$id]); //set session
        $subcategories=Category::wherechild($id)->latest()->paginate();
        return view('Admin.SubCategories.all',compact('subcategories'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory=Category::find($id);
        return view("Admin.SubCategories.edit",compact('subcategory'));
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
        $request->validate([
           'name'=>'required'
        ]);
        $category=Category::find($id);
        $category->update([
           'name'=>$request['name']
        ]);
        return redirect(route('subcategories.show',['id'=>session('id')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        Category::destroy($id);
        $category=Category::find($id);
        $category->destroy($id); //or $category->delete()
        return back();
    }
}
