<?php

namespace App\Http\Controllers;

use App\DataTables\PostsDataTable;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Blog::latest()->get();


            return datatables()->of($data)->addColumn('image', function ($data) {
                $url= asset('storage/'.$data->Image);
                return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
                })
                ->addColumn('action', function ($row) {

                    $html = '<a href="#"  onclick="edit(' . $row->id . ')" value="' . $row->id . '" data-rowid="' . $row->id . '" class="btn btn-xs btn-secondary">Edit</a> ';
                    $html .= '<button onclick="del(' . $row->id . ')" class="btn btn-xs btn-danger">Sil</button>';
                    return $html;
                }) ->addColumn('show', function ($row) {

                    $html = '<a href="#"  onclick="goster(' . $row->id . ')" value="' . $row->id . '" data-rowid="' . $row->id . '" class="btn btn-xs btn-outline-primary">goster</a> ';
                    return $html;
                })->rawColumns(['image', 'action','show'])->make(true);;


//
//            return Datatables::of($data)
//                ->addIndexColumn()
//                ->addColumn('action', function($row){
//
//                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
//
//                    return $btn;
//                })
//                ->rawColumns(['action'])
//                ->parameters([
//                    'dom'          => 'Bfrtip',
//                    'buttons'      => ['excel', 'csv'],
//                ])
//                ->make(true);
//        }
//
//        return view('users');
        }
    }


    public function usercategories (PostsDataTable $dataTable)
    {


        return $dataTable->render('Posts');

//
//            return Datatables::of($data)
//                ->addIndexColumn()
//                ->addColumn('action', function($row){
//
//                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
//
//                    return $btn;
//                })
//                ->rawColumns(['action'])
//                ->parameters([
//                    'dom'          => 'Bfrtip',
//                    'buttons'      => ['excel', 'csv'],
//                ])
//                ->make(true);
//        }
//
//        return view('users');

    }
}
