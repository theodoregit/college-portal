@extends('layouts.registrar.app')
@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Create Announcement</div>                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">   
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label >
                                        <input type="text" class="form-control" name="title" id="" placeholder="Title">                                        
                                    </div>   
                                    <div class="form-group">
                                        <label for="title">Image</label >
                                        <input type="file" class="form-control" name="image" id="">                                        
                                    </div>   
                                    <div class="form-group">
                                        <label for="body">Body</label >
                                        <textarea name="body" class="form-control" id="" cols="30" rows="10" placeholder="Write your announcement here ..."></textarea>                                        
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                                
                            </div>             
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-success" class="form-center" type="submit">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>

@endsection
