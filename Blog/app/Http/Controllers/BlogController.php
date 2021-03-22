<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Urun;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloglar=Blog::all();
      //  return dd($bloglar);

       return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.create');
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
            'Head'=> 'required',
        ],[
            'Head.required' => 'Lütfen Başlık Giriniz.',
        ]);




        $resim = $request->file('resim');

        $input = $request->all();
        if($resim){

            if($resim->getSize()<2097152){
                $Image = $resim ->getClientOriginalName();
                $resim->move('storage',$Image);
                $input['Image'] = $Image;
            }
            else{
                return '<div class="row">
                <h1>Dosya boyutu büyüktür. Lütfen Daha Küçük Bir Dosya İle Deneyiniz.</h1>
                <br><br>
                <a class="button" href="javascript:history.back()">Geri</a>
                    </div>';
            }

        }
        $blog = new Blog();
        $blog->Head = $request ->input('Head');
        $blog->Body =$request-> input('Body');
        $blog->Category_ID = $request ->input( 'Category_ID');
        $blog->Image =$Image;
        $blog->Author_ID = -1;
        $blog->save();
        return redirect('/blog');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $blog = Blog::find($id);
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Blog::find($id)->update($request->all());
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =Blog::find($id);

        if($blog->Image){
            @unlink('uploads/'.$blog->Image);
        }
        $blog->delete();

        return redirect()->back();
    }

    public function goster($id){

        $blog = Blog::find($id);

        return view('blog.show',compact('blog'));


    }

}
