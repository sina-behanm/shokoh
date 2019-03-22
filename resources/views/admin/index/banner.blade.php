@extends('layouts.admin')
@section('content')
    @include('partials.error')
    <br>
    <br>
    <hr>
    <br>
    <h1>Control Bottom index</h1>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('admin.create.index.bottom')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="bottom_title">Bottom title</label>
                    <input type="text" class="form-control" name="bottom_title">
                </div>
                <div class="form-group">
                    <label for="bottom_content">Bottom content</label>
                    <textarea type="text" class="form-control" name="bottom_content"></textarea>
                </div>
                <div class="form-group">
                    <label for="bottom_img">Bottom image</label>
                    <input type="file" class="form-control" name="bottom_image">
                </div>

                <button type="submit" class="btn btn-primary">Submit Bottom Post</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
     <div class="row">
        @foreach($bottoms as $bottom)
        <div class="col-md-4 col-sm-3">
            <div class="card margin-top" style="width: 18rem;">
                <img class="card-img-top img-responsive" src="images/bottom_body/{{$bottom->image_name}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$bottom->title}}</h5>
                    <p class="card-text">{{$bottom->content}}.</p>
                    <a href="{{route('admin.delete.index.bottom',['id'=>$bottom->id])}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
         @endforeach
     </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection