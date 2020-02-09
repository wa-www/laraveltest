<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::all();
        return view('post.index',['posts'=>$posts]);
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
        $post=new Post;
        $params=$request->all();

        $rules=[
            'user_id'=>'integer|required',
            'title'=>'required',
            'content'=>'required',

        ];
        $message=[
            'user_id.integer'=>'System Error',
            'user_id.required'=>'System Error',
            'title.required'=>'タイトルが入力されていません',
            'content.required'=>'内容が入力されていません',
        ];
        $validator=Validator::make($params, $rules, $message);

        if ($validator->false()){
            return redirect('/post')
            ->withErrors($validator)
            ->withInput();
        }else{
            unset($params['_token']);
            $post->user_id = $request->user_id;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return redirect('/post');
        }
    
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
        $post=Post::find($id)->delete();
        return redirect('\post');
    }
}
