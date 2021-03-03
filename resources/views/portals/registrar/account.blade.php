@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Create Account</div>
                    
                <div class="panel-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Instructor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Registrar Staff</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" name="fullname" id="">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="id">ID Number</label>
                                            <input type="text" class="form-control" name="idnumber" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="text" class="form-control" name="password" id="">
                                        </div>
                                    </div>                                    
                                    
                                </div>             
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-success" type="submit">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" name="fullname" id="">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="id">Email</label>
                                            <input type="text" class="form-control" name="email" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="text" class="form-control" name="password" id="">
                                        </div>
                                    </div>                                    
                                    
                                </div>             
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-success" type="submit">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" name="fullname" id="">
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="id">Email</label>
                                            <input type="text" class="form-control" name="email" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="text" class="form-control" name="password" id="">
                                        </div>
                                    </div>                                    
                                    
                                </div>             
                                <div class="form-group">
                                    <div class="">
                                        <button class="btn btn-success" type="submit">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection
