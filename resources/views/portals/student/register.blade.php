@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Course Registration</div>
                    
                <div class="panel-body">
                    <form action="" method="post">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="checkbox" name="all" id=""> Select All
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8" style="margin-left: 20px">
                                        <div class="form-group">
                                            <input type="checkbox" name="all" id=""> Introduction to Computer Science
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="all" id=""> Fundamentals of Web Designs
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="all" id=""> Object Oriented Programming I
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="all" id=""> Applied Mathematics
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="all" id=""> Communications
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            
                            
                        </div>             
                        <div class="form-group">
                            <div class="">
                                <button class="btn btn-success" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
