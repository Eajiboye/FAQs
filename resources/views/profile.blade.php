@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My Profile</div>

                    <div class="card-body">
                        <span class="font-weight-bold">First Name: </span>{{$profile->fname}}</br>
                        <span class="font-weight-bold">Last Name: </span>{{$profile->lname}}</br>
                        <span class="font-weight-bold">Body: </span>{{$profile->body}}</br>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success float-right" href="#">
                            Edit
                            <a href="/home" class="btn btn-default">Go Back</a>
                        </a>

                        <div class="container">
                            <div class="content">

                                <h1>File Upload</h1>
                            <form action ="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                               <label> Select image to upload </label>
                                <input type ="file" name="file" id="file">
                                <input type="submit" value="Upload" name="submit">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            </form>

                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection