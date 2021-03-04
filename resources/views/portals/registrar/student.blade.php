@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Students List</div>
                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">  
                        <h4><strong><i>General Information</i></strong></h4>     
                        <div class="row">
                            <div class="col-md-3">
                                <p><strong>Full Name</strong></p>
                                <p>{{$history->fullname}}</p><hr>
                                <p><strong>Department</strong></p>
                                <p>{{$history->department}}</p>
                            </div>
                            <div class="col-md-3">
                                <p><strong>Sex</strong></p>
                                <p>{{$history->sex}}</p><hr>
                                <p><strong>Year</strong></p>
                                <p>{{$history->year}}</p>
                            </div>
                            <div class="col-md-3">
                                <p><strong>Full Name</strong></p>
                                <p>{{$history->admission}}</p><hr>
                                <p><strong>ID Number</strong></p>
                                <p>{{$history->idnumber}}</p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset($history->image)}}" alt="" width="100px" height="115px">
                            </div>
                        </div><hr>
                        <h4><strong><i>Address</i></strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>House No</strong></p>
                                <p>{{$history->housenumber}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Kebele</strong></p>
                                <p>{{$history->kebele}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Town</strong></p>
                                <p>{{$history->town}}</p>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Woreda</strong></p>
                                <p>{{$history->woreda}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Zone</strong></p>
                                <p>{{$history->zone}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Region</strong></p>
                                <p>{{$history->region}}</p>
                            </div>
                        </div><hr>
                        <h4><strong><i>Other</i></strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Place of Birth</strong></p>
                                <p>{{$history->birthplace}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Disability</strong></p>
                                <p>{{$history->disability}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Date of Birth</strong></p>
                                <p>{{$history->dob}}</p>
                            </div>
                        </div>
                        <a href="{{route('portals.registrar.edit', ['id' => Request::segment(4)])}}" class="btn btn-info">Edit</a>
                        <!-- <a href="{{route('portals.registrar.account-create', ['id' => Request::segment(4)])}}" class="btn btn-success">Create Account</a> -->
                        
                                                  
                        <!-- Button trigger modal -->
                        
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Create Account</button>                        
                       
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                @if(!App\StudentAccount::where('idnumber', '=', $history->idnumber)->exists())
                                    <form action="{{route('portals.registrar.account-create', ['id' => Request::segment(4)])}}" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">                                            
                                                <div class="form-group">
                                                    <label for="">Full Name</label>
                                                    <input readonly="readonly" class="form-control" type="text" name="fullname" value="{{$history->fullname}}" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">ID Number</label>
                                                    <input readonly="readonly" class="form-control" type="text" name="idnumber" value="{{$history->idnumber}}" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">                                            
                                                <div class="form-group">
                                                    <label for="">Department</label>
                                                    <input readonly="readonly" class="form-control" type="text" name="department" value="{{$history->department}}" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input readonly="readonly" class="form-control" type="text" name="password" value="{{$password}}" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Create</button>
                                        </div>                                   
                                    </form>
                                @else
                                <h4><strong>{{$history->fullname}}</strong> has already an account.</h4>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                @endif
                                </div>                            
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection
