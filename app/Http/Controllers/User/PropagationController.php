<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Http\Requests\PropagationRequest;
use App\Propagation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $propagation=Propagation::whereUser_id(Auth::user()->id)->latest()->paginate();
        return view('User.Propagation.all',compact('propagation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Propagation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropagationRequest $request)
    {
        $input=$request->all();
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $year=Carbon::now()->year;
        $path="/upload/images/{$year}/";
        $file->move(public_path($path),$filename);
        $input['image']=$path.$filename;
        Auth::user()->Propagation()->create($input);
        return redirect(route('user_propagation.index'));

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
        return view('User.Propagation.edit',compact('propagation'));
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
            $filename=$file->getClientOriginalName();
            $year=Carbon::now()->year;
            $path="/upload/images/{$year}/";
            $file->move(public_path($path),$filename);
            $input['image']=$path.$filename;
        }
        else
            $input['image']=$propagation->image;
        $propagation->update($input);
        return redirect(route('user_propagation.index'));
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
