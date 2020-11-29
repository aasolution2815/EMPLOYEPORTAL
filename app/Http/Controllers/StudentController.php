<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
           // $data = Student::latest()->get();
           $data = DB::table('students')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)"><i class="feather icon-edit-2 mid_icon"></i></a> <a href="javascript:void(0)" ><i class="feather icon-trash mid_icon"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('checkbox', function($row){
                    $checkbox = '<label class="container-checkbox" style="    margin-bottom: 15px !important;
                    margin-top: 0px  !important;">
                    <input type="checkbox" id="idd">
                    <span class="checkmark"></span>
                </label>';
                    return $checkbox;
                })
                ->rawColumns(['action','checkbox'])
                ->make(true);
        }
    }
}
