<?php

namespace App\Http\Controllers;

use App\Propagation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propagation=Propagation::whereActive(1)->latest()->paginate();
        return view('landing',compact('propagation'));
    }

    public function search(Request $request)
    {
        $city=$request->city;
        $category=$request->category;
        $word=$request->search_word;

        if ($city == '0' and $category == '0' and $word == null)
            $propagation= Propagation::latest()->paginate();

        elseif ($city != '0' and $category != '0' and $word != null)
            $propagation= Propagation::whereActive(1)->whereCity($city)->whereCategory($category)->
            where(function ($q){
                $word=$_REQUEST['search_word'];
                $q->where('title','like','%'. $word .'%')->
                orwhere('description','like','%'.$word.'%');
            })->latest()->paginate();

        elseif ($city == '0' and $category == '0' and $word != null)
            $propagation= Propagation::whereActive(1)->where(function ($q){
                $word=$_REQUEST['search_word'];
                $q->where('title','like','%'. $word .'%')->
                orwhere('description','like','%'.$word.'%');
            })->latest()->paginate();

        elseif ($city != '0' and $category == '0' and $word == null)
            $propagation= Propagation::whereActive(1)->whereCity($city)->latest()->paginate();

        elseif ($city == '0' and $category != '0' and $word == null)
            $propagation= Propagation::whereActive(1)->whereCategory($category)->latest()->paginate();

        elseif ($city != '0' and $category == '0' and $word != null)
            $propagation= Propagation::whereActive(1)->whereCity($city)->where(function ($q){
                $word=$_REQUEST['search_word'];
                $q->where('title','like','%'. $word .'%')->
                orwhere('description','like','%'.$word.'%');
            })->latest()->paginate();

        elseif ($city != '0' and $category != '0' and $word == null)
            $propagation= Propagation::whereActive(1)->whereCity($city)->whereCategory($category)->latest()->paginate();

        elseif ($city == '0' and $category != '0' and $word != null)
            $propagation= Propagation::whereActive(1)->whereCategory($category)->
            where(function ($q){
                $word=$_REQUEST['search_word'];
                $q->where('title','like','%'. $word .'%')->
                orwhere('description','like','%'.$word.'%');
            })->latest()->paginate();


        return view('landing',compact('propagation'));

    }

    public function show($id)
    {
        $propagation=Propagation::find($id);
//        return $propagation;
        return view('show',compact('propagation'));
    }
}
