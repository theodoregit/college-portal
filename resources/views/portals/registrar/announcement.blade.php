@extends('layouts.registrar.app')
@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Create Announcement</div>                    
                <div class="panel-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Create Announcement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Announcements</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div style="background-color: #f5f8fa">   
                                <form action="{{route('portals.registrar.announcement')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title</label >
                                                <input type="text" class="form-control" name="title" id="" placeholder="Title">                                        
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div style="background-color: #f5f8fa">         
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th> 
                                            <th scope="col">Posted Date</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>                                 
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($announcements as $announcement)                                   
                                            <tr>
                                                <th scope="row">{{$announcement->id}}</th>
                                                <td>{{$announcement->title}}</td>
                                                <td>{{$announcement->body}}</td>
                                                <td>{{$announcement->created_at}}</td>
                                                <td><a href="" class="btn btn-primary">Repost</a></td>
                                                <td><a href="" class="btn btn-danger">Delete Post</a></td>
                                            </tr> 
                                        @endforeach                                             
                                    </tbody>
                                </table>                        
                            </div>
                        </div>                        
                    </div>         
                </div>
            </div>

@endsection
