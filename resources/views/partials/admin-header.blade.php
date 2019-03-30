<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('blog.index') }}">Laravel Guide</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('admin.index') }}">Posts</a></li>
                <li><a href="{{route('admin.student')}}" >Student Panel</a></li>
                <li><a href="{{route('admin.index.banner')}}">Main window</a></li>
                <li><a href="{{route('admin.courses')}}">Courses Detail</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Downloads <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.downloads.pdf')}}">Pdf</a></li>
                        <li><a href="{{route('admin.downloads.image')}}">Images</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Disable</li>
                        <li><a href="#">Word</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="margin-top: 8px">LogOut<span style="padding-left: 15px"></span><i class="fas fa-sign-out-alt"></i></button>
                    </form>
                </li>
                <!-- auth nav bar -->
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
