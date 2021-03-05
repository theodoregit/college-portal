@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Course Registration</div>
                    
                <div class="panel-body">
                    <form action="{{route('portals.student.register-course', ['id'=>$id])}}" method="post">
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="checkbox" name="all" id="select-all"> Select All
                                    <script type="text/javascript">
                                        $('#select-all').click(function(event) {   
                                            if(this.checked) {
                                                // Iterate each checkbox
                                                $(':checkbox').each(function() {
                                                    this.checked = true;                        
                                                });
                                            } else {
                                                $(':checkbox').each(function() {
                                                    this.checked = false;                       
                                                });
                                            }
                                        });
                                         
                                    </script>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8" style="margin-left: 20px">
                                        @foreach($courses as $course)
                                            <div class="form-group">
                                                <input type="checkbox" name="{{$course->coursename}}" id="chk" value="{{$course->coursename}}"> {{$course->coursename}}
                                            </div>
                                        @endforeach
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
