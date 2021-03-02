@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Create Account</div>
                    
                <div class="panel-body">
                <form action="{{route('portals.registrar.create-account')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" name="fullname" placeholder="full name" class="form-control">
                                        </div>
                                        
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                
                                <div class="form-group">
                                    <label for="desc3">ID Number</label>
                                    <input type="text" name="idnumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="desc3">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                
                            </div>
                            
                        </div>             
                        <div class="form-group">
                            <div class="">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
