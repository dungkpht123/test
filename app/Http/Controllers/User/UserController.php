<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use App\Models\thongSo;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $product = product::where('status',1)->limit(6)->orderBy('id','DESC')->get();
        return view('user.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu($id)
    {
        $product = product::find('id_product',$id);
        $cat = Category::find($id);
        return view('user.layout.menu',compact('product','cat'));
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

    // FRONT END
    public function about()
    {
        return view('user.about');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function blog_single()
    {
        return view('user.blog_single');
    }

    public function compare($id)
    {
        $product = product::find($id);
        $thongso = thongSo::firstwhere('id_product',$id);
        return view('user.compare',compact('thongso','product'));
    }
    public function postcontact(Request $request)
    {
        Mail::send('mail.contact',[
            'name' => $request->name,
            'content' => $request->content,
        ], function($mail) use($request) {
            $mail->to('banhangxevinfast@gmail.com', $request->name);
            $mail->from($request->email);
            $mail->subject('TEST MAIL');
        });
        return view('user.contact');
    }

    public function error()
    {
        return view('user.error');
    }
    public function sell_step()
    {
        return view('user.sell_step');
    }

    public function purchase($slug)
    {
        $categories = Category::all();
        $slug = Category::where('slug',$slug)->first();
        $id = $slug->id;
        $product = product::where('category_id',$id)->where('status',1)->paginate(9);
        if ($keyword = request()->keyword) {
            $product = product::orderBy('created_at','DESC')->search()->where('status',1)->paginate(9);
        }
        return view('user.purchase_new',compact('categories','slug','product'));
    }

    public function purchase_new_single($slug,$id)
    {
        $slug = product::where('slug',$slug)->first();
        $thongso = thongSo::firstwhere('id_product', $id);
        $product = product::find($id);
        return view('user.purchase_new_single',compact('slug','product','thongso'));
    }
    public function purchase_old()
    {
        return view('user.purchase_old');
    }
    public function purchase_used()
    {
        return view('user.purchase_used');
    }


}
