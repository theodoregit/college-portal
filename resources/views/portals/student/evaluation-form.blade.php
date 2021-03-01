<link href="{{ asset('css/grade-table.css') }}" rel="stylesheet">@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Evaluation Form</div>                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">   
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course">Select Course</label>
                                        <select name="course" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="">Introduction to Computer Science - Abebe Gelaw</option>
                                            <option value="">Introduction to Computer Science - Abebe Gelaw</option>
                                            <option value="">Introduction to Computer Science - Abebe Gelaw</option>
                                            <option value="">Introduction to Computer Science - Abebe Gelaw</option>
                                        </select>                                        
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                                
                            </div>             
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>

@endsection
