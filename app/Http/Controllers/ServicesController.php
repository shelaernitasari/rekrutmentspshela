<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        $services = Service::orderBy('created_at','asc')->get();
        return view('pages.services', compact('users'))->with('services', $services);
    }

    public function view()
    {
        $users= User::all();
        $services = Service::orderBy('created_at','asc')->get();
        return view('pages.viewservices', compact('users'))->with('services', $services);
    }

    public function lihatprogres()
    {
        $users= User::all();
        $services = Service::orderBy('created_at','asc')->get();
        return view('pages.progresservices', compact('users'))->with('services', $services);
    }

    public function viewuser()
    {
        $users= User::all();
        return view('pages.viewuser', compact('users'));
    }

    public function adduser()
    {
        return view('auth.register');
    }

    public function lihatdashboard()
    {
        return view('pages.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::all();
        return view('pages.addservices', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_user' => 'required',
            'nama_perangkat' => 'required',
            'keterangan' => 'required'
           
        ]);

        //create
        $services = new Service;
        $services->id_user = $request->id_user;
        $services->nama_user = $request->nama_user;
        $services->nama_perangkat = $request->nama_perangkat;
        $services->keterangan = $request->keterangan;
        $services->created_at = $request->created_at;
       
        $services->save();
        return redirect('/services')->with('success','Created');
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
        $services = Service::find($id);
        $users= User::all();
        if(!$services)
            abort(404);
            
        return view('pages.editservices', compact('users'))->with('services', $services) ;
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
        $this->validate($request,[
            'nama_user_memperbaiki' => 'required',
            'progres' => 'required'
           
        ]);

        //create
        $services = Service::find($id);
        $services->id_user = $request->id_user;
        $services->nama_user = $request->nama_user;
        $services->nama_perangkat = $request->nama_perangkat;
        $services->keterangan = $request->keterangan;
        $services->created_at = $request->created_at;
        $services->nama_user_memperbaiki = $request->nama_user_memperbaiki;
        $services->progres = $request->progres;
        $services->updated_at = $request->updated_at;
       
        $services->save();
        return redirect('/viewservices')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect('/viewservices')->with('success','Delete');
    }
}
