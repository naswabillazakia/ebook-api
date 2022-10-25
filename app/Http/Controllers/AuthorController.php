<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Author::all();
        return $data;
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
        $table = author::create([
            "name" => $request->name,
            "date_of_brith" => $request->date_of_brith,
            "place_of_brith" => $request->place_of_brith,
            "gender" => $request->gender,
            "email" => $request->email,
            "hp" => $request->hp

        ]);

        return response()->json([
            'success'=> 201,
            'message'=> 'data berhasil disimpan',
            'data' => $table
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = author::find($id);
        if ($author) {
            return response()->json([
                'status' => 200,
                'data' => $author
            ], 200);

        } else {
            return response()->json([
                'status'=> 404,
                'message'=> 'id atas' .$id . 'tidak ditemukan'
            ], 404);
        }
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
        $author = author::find($id);
        if($author){
            $author->name = $request->name ? $request->name : $book->name;
            $author->date_of_brith = $request->date_of_brith ? $request->date_of_brith : $author->date_of_brith;
            $author->place_of_brith = $request-> place_of_brith? $request->place_of_brith : $author->place_of_brith;
            $author->gender = $request->gender? $request->gender : $author->gender;
            $author->email = $request->email ? $request->email : $author->email;
            $author->hp = $request->hp ? $request->hp : $author->hp;
            $author->save();
            return response()->json([
                'status' => 200,
                'data' => $author
            ],200);
        } else{
            return response()->json([
                'status' => 400,
                'message' => $id . ' tidak ditemukan'   
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = author::where('id',$id )->first();
        if($author){
            $author->delete();
            return response()->json([
                'status' => 200,
                'data' => $author
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' =>'id ' . $id . 'tidak ditemukan'
            ],404); 
    }
    }
}
