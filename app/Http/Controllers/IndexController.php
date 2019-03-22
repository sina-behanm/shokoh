<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Bottom;

class IndexController extends Controller
{


    public function getAdminIndexBanner()
    {
        $bottoms = Bottom::all();
        return view('admin.index.banner',['bottoms' => $bottoms]);
    }

    public function getIndexBottom()
    {

    }
    public function postAdminCreateBottomContent(Request $request){
        $bottom =new  Bottom([
            'title' => $request->input('bottom_title'),
            'content' => $request->input('bottom_content'),
            'image_name' => $request->file('bottom_image')->getClientOriginalName(),
        ]);
        Input::file('bottom_image')->move('images/bottom_body',$request->file('bottom_image')->getClientOriginalName());
        $bottom->save();
        return redirect()->back();
    }
    public function getBottomDelete($id)
    {
        $bottom = Bottom::find($id);
        $file_path = public_path("images/bottom_body/{$bottom->image_name}");
        unlink($file_path);
        $bottom->delete();
        return redirect()->back()->with('info','Bottom post deleted');
    }
    //
    public function ViewCounter(Request $request,Session $session)
    {

        if (isset($session['view'])){
            $session['view']++;
        }
        else {
            $session['view'] = 1;
        }
        $viewer = $request->session()->get('view');
        return redirect()->route('blog.index');

    }
}
