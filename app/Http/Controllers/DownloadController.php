<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Pdf;

class DownloadController extends Controller
{

    public function getAdminIndex()
    {
        return view('admin.downloads.index');
    }
    //---------------pdf---------------------
    public function postAdminCreatePdf(Request $request)
    {
        $this->validate($request,[
           'name' =>' required',
           'concept' =>' required',
           'file_name' =>' required |mimes:pdf'
        ]);
        $pdf = new Pdf([
            'name' => $request->input('name'),
            'concept' => $request->input('concept'),
            'file_name' => $request->file('file_name')->getClientOriginalName(),
            'file_size' => $request->file('file_name')->getSize(),
        ]);
        Input::file('file_name')->move('downloads/pdfs',$request->file('file_name')->getClientOriginalName());
        $pdf->save();
        return redirect()->back();
    }
    public function getAdminPdf()
    {
        $pdfs = Pdf::all();
        return view('admin.downloads.pdf',['pdfs' => $pdfs]);
    }
    public function getPdf()
    {
        $pdfs = Pdf::all();
        return view('blog.downloads.pdf',['pdfs' => $pdfs]);
    }
    public function getPdfFile($id)
    {
        $pdf = Pdf::find($id);
        $file = $pdf->file_name;
        return response()->download(public_path("downloads/pdfs/{$file}"));
    }
    public function getAdminPdfDelete($id)
    {
        $pdf = Pdf::find($id);
        $file_path =public_path("downloads/pdfs/{$pdf->file_name}");
        unlink($file_path);
        $pdf->delete();
        return redirect()->back();
    }
    //-------------------images-----------------
    public function postAdminCreateImage(Request $request)
    {
        $this->validate($request,[
            'name' =>' required',
            'concept' =>' required',
            'file_name' =>' required |mimes:jpeg,png'
        ]);
        $image = new Image([
            'name' => $request->input('name'),
            'concept' => $request->input('concept'),
            'file_name' => $request->file('file_name')->getClientOriginalName(),
            'file_size' => $request->file('file_name')->getSize(),
        ]);
        Input::file('file_name')->move('downloads/images',$request->file('file_name')->getClientOriginalName());
        $image->save();
        return redirect()->back();
    }
    public function getAdminImage()
    {
        $images = Image::all();
        return view('admin.downloads.image',['images' => $images]);
    }
    public function getImage()
    {
        $images = Image::all();
        return view('blog.downloads.image',['images' => $images]);
    }
    public function getImageFile($id)
    {
        $images = Image::find($id);
        $file = $images->file_name;
        return response()->download(public_path("downloads/images/{$file}"));
    }
    public function getAdminImageDelete($id)
    {
        $image = Image::find($id);
        $file_path =public_path("downloads/images/{$image->file_name}");
        unlink($file_path);
        $image->delete();
        return redirect()->back();
    }
}
