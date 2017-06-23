<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;
use Khill\Lavacharts\Lavacharts;
use App\Web_AccidentReport;

class Web_AccidentReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web_accidentreports = Web_AccidentReport::paginate(10);
        return view('web_accidentreports.index', compact('web_accidentreports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web_accidentreports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Web_AccidentReport::create($request->all());
        flash()->success('Web_AccidentReport has been created successfully.');
        return redirect('web_accidentreports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $web_accidentreport = Web_AccidentReport::findOrFail($id);
        return view('web_accidentreports.show', compact('web_accidentreport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $web_accidentreport = Web_AccidentReport::findOrFail($id);
        return view('web_accidentreports.edit', compact('web_accidentreport'));
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
        $web_accidentreport = Web_AccidentReport::findOrFail($id);
        $web_accidentreport->update($request->all());
        flash()->success('Web_AccidentReport has been updated successfully.');
        return redirect('web_accidentreports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $web_accidentreport = Web_AccidentReport::findOrFail($id);
        $web_accidentreport->delete();
        flash()->success('Web_AccidentReport has been deleted successfully.');
        return redirect('web_accidentreports');
    }
}
