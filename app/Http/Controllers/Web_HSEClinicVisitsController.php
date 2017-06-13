<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;
use Khill\Lavacharts\Lavacharts;

use App\Web_HSEClinicVisit;

class Web_HSEClinicVisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $web_hseclinicvisits = Web_HSEClinicVisit::paginate(10);
        return view('web_hseclinicvisits.index', compact('web_hseclinicvisits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web_hseclinicvisits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //DB::table('web_hseclinicvisits')->insert($request->all());
        Web_HSEClinicVisit::create($request->all());

        // $add = new Web_HSEClinicVisit();
        // $add->title=$request->title;
        // $add->description=$request->description;
        // $add->save();
        flash()->success('Web_HSEClinicVisit has been created successfully.');
        return redirect('web_hseclinicvisits');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $web_hseclinicvisit = Web_HSEClinicVisit::findOrFail($id);
        // $lava = new Lavacharts; // See note below for Laravel

        // $finances = $lava->DataTable();

        // $finances->addDateColumn('Year')
        // ->addNumberColumn('Sales')
        // ->addNumberColumn('Expenses')
        // ->setDateTimeFormat('Y')
        // ->addRow(['2004', 1000, 400])
        // ->addRow(['2005', 1170, 460])
        // ->addRow(['2006', 660, 1120])
        // ->addRow(['2007', 1030, 54]);

        // $lava->ColumnChart('Finances', $finances, [
        //     'title' => 'Company Performance',
        //     'titleTextStyle' => [
        //         'color'    => '#eb6b2c',
        //         'fontSize' => 14
        //     ]
        // ]);
        return view('web_hseclinicvisits.show', compact('web_hseclinicvisit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $web_hseclinicvisit = Web_HSEClinicVisit::findOrFail($id);
        return view('web_hseclinicvisits.edit', compact('web_hseclinicvisit'));
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
        $web_hseclinicvisit = Web_HSEClinicVisit::findOrFail($id);
        $web_hseclinicvisit->update($request->all());
        flash()->success('Web_HSEClinicVisit has been updated successfully.');
        return redirect('web_hseclinicvisits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $web_hseclinicvisit = Web_HSEClinicVisit::findOrFail($id);
        $web_hseclinicvisit->delete();
        flash()->success('Web_HSEClinicVisit has been deleted successfully.');
        return redirect('web_hseclinicvisits');
    }
}
