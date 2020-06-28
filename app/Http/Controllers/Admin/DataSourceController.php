<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataSource;
use App\Http\Requests\DataSourceRequest;

class DataSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $datas = DataSource::src($type)->get();
       
        return view('admin.datasource.index', ['datas' => $datas, 'type' => $type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datasource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataSourceRequest $request, $type)
    {
        $datas = $request->input();
        DataSource::create($request->input());
        return redirect()->route('admin.datasource.index');
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
    public function edit($type, DataSource $datasource)
    {
        return view('admin.datasource.create', ['data' => $datasource]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataSourceRequest $request, $type, DataSource $datasource)
    {
        $datasource->update($request->input());
        return redirect()->route('admin.datasource.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, DataSource $datasource)
    {
        $datasource->delete();
        return response()->json(['status' => 0]);
    }
}
