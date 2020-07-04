<?php

namespace App\Http\Controllers;

use App\pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pertanyaan::All();
        return view('qna/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id="")
    {
        if($id==""){
            $qe = "";
        }else{
            $qe = pertanyaan::where("id",$id)->first();
        }

        return view('qna/add',compact('id','qe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id="")
    {
        // return $request;
        if($id==""){
            pertanyaan::create([
                "judul"=>$request->judul,
                "isi"=>$request->isi,
            ]);
        }else{
            pertanyaan::where("id",$id)->update([
                "judul"=>$request->judul,
                "isi"=>$request->isi,
            ]);
        }

        return redirect(url('pertanyaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        // return $req;
        $modal = DB::table('questions')->where("id",$req->q_id)->first();
        $html = "<p>Judul : $modal->judul</p><br><p>Isi Pertanyaan : $modal->isi</p>";
        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pertanyaan $pertanyaan,$id)
    {
        //
        pertanyaan::where("id",$id)->delete();
        return redirect(url("pertanyaan"));
    }
}
