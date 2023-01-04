<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::connection()->select("SELECT TOP (1000) *
        FROM [INT_TEST1].[dbo].[Trx_Prq_Header] as a 
        LEFT JOIN [INT_TEST1].[dbo].[ST_Employee] as b
        ON a.Emp_No = b.Emp_No
        WHERE Prq_Code = 'PRQ-ID01001720-20210724-0002'");
        // dd($data);
        return view('index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($request);
        $file = $request->file('attachment')->store('image', 'public');
        $data =   DB::insert("insert into [INT_TEST1].[dbo].[Trx_Prq_Attach]
        (
            [Prq_Code]
            ,[Prq_Item_ID]
            ,[Attach_Code]
            ,[Attach_Seqn]
            ,[Entity_Code]
            ,[Profit_Center]
            ,[Cost_Center]
            ,[Prq_Req_Entity]
            ,[Prq_Req_PC]
            ,[Prq_Req_CC]
            ,[Attach_Doc_Type]
            ,[Apv_Seqn]
            ,[Apv_Order]
            ,[Apv_Model]
            ,[Apv_Version]
            ,[Apv_Class_CC]
            ,[Apv_User]
            ,[File_Path]
            ,[File_Name]
            ,[File_Ext]
        ) values (
        '-',
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '-', 
        '$file', 
        '-', 
        '-'
        )");

        // dd(DB::getQueryLog());

        if ($data) {
            return response()->json(['msg' => 200]);
        } else {
            return response()->json(['msg' => 401]);
        }

        // try {
        //     dd($data);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     dd($th);
        // }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
