@extends('layouts.admin')
@section('content')
    <form method="post" action="{{route('admin.create.downloads.pdf')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">File Name</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="name">Concept</label>
            <input class="form-control" type="text" name="concept">
        </div>
        <div class="form-group">
            <input class="form-control" type="file" name="file_name">
        </div>
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>
    <br>
    <h1>Pdf Download Files List</h1><span>Number of pdf files :{{count($pdfs)}}</span>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>index</th>
                        <th>File Name</th>
                        <th>Concept</th>
                        <th>File Size</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pdfs as $pdf)
                        <tr>
                            <td>{{$pdf->id}}</td>
                            <td>{{$pdf->name}}</td>
                            <td>{{$pdf->concept}}</td>
                            <td>{{number_format(($pdf->file_size/1024),2)}}kb</td>
                            <td><button  class="btn btn-danger"><a style="text-decoration: none" href="{{route('admin.delete.downloads.pdf',['id' => $pdf->id])}}">Delete</a></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection