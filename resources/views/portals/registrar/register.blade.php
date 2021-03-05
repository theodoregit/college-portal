@extends('layouts.registrar.app')

@section('content')

@if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-items text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Register Students</div>
                    
                <div class="panel-body">
                    <form action="{{route('portals.registrar.student-history')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="admission">Admission Type</label>
                                    <select name="admission" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="Regular">Regular</option>
                                        <option value="Extension">Extension</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" name="firstname" value="{{old('firstname')}}" placeholder="first name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="fathername" value="{{old('fathername')}}" placeholder="father's name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="gfathername" value="{{old('gfathername')}}" placeholder="g.father's name" class="form-control">
                                        
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <select name="sex" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>  
                                    <input type="text" style='display:none' type="hidden" name="currentyear" value="<?php echo date("Y"); ?>" placeholder="g.father's name" class="form-control">
                                                                          
                                </div>
                                <div class="form-group">
                                    <label for="dept">Department</label>
                                    <select name="department" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Accounting and Finance">Accounting and Finance</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                        
                                        <div class="form-group">
                                            <label for="year">Year</label>
                                            <select name="year" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="4">6</option>
                                                <option value="5">7</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                        
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <select name="semester" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="1">I</option>
                                                <option value="2">II</option>
                                                <option value="3">III</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="desc1">Current Residential Address</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="house no" value="{{old('housenumber')}}" name="housenumber" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="kebele" value="{{old('kebele')}}" name="kebele" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="town" value="{{old('town')}}" name="town" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="woreda" value="{{old('woreda')}}" name="woreda" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="zone" value="{{old('woreda')}}" name="zone" class="form-control">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="region" value="{{old('region')}}" name="region" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc3">Date of Birth</label>
                                    <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dis">Disability</label>
                                    <select name="disability" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="None">None</option>
                                        <option value="Hearing">Hearing</option>
                                        <option value="Sight">Sight</option>
                                        <option value="Handicap">Handicap</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="desc3">Place of Birth</label>
                                    <input type="text" name="birthplace" value="{{old('birthplace')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="image">Photo(3x4)</label>
                                    <input type="file" name="image" value="{{old('image')}}" class="form-control">
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
