<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropagationRequest;
use App\Propagation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropagationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propagation=Propagation::latest()->paginate();

        return view('Propagation.all',compact('propagation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Propagation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropagationRequest $request)
    {
        $file=$request->file('image');
        $year = Carbon::now()->year;
        $imagepath = "/upload/images/{$year}/";
        $filename = $file->getClientOriginalName(); //name.jpg
        $imagepath = $file->move(public_path($imagepath), $filename);
        Auth::user()->propagation()->create(array_merge($request->all(),['image'=>$imagepath]));
        return redirect(route('propagation.index'));
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
        $propagation=Propagation::find($id);
        return view('Propagation.edit',compact('propagation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropagationRequest $request, $id)
    {
        $propagation=Propagation::find($id);
        $file=$request->file('image');
        $input=$request->all();
        if ($file){
            $year = Carbon::now()->year;
            $imagepath = "/upload/images/{$year}/";
            $filename = $file->getClientOriginalName(); //name.jpg
            $imagepath = $file->move(public_path($imagepath), $filename);
            $input['image']=$imagepath;
        }
        else
        {
            $input['image']=$propagation->image;
        }
        $propagation->update($input);
        return redirect(route('propagation.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propagation::destroy($id);
        return back();
    }
}
