@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Students List</div>
                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">         
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">ID Number</th> 
                                    <th scope="col">Admission</th> 
                                    <th scope="col"></th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <th scope="row">{{$student->id}}</th>
                                    <td>{{$student->fullname}}</td>
                                    <td>{{$student->idnumber}}</td>
                                    <td>{{$student->admission}}</td>
                                    <td><a href="{{route('portals.registrar.student', ['id' => $student->id])}}">See More ..</a></td>
                                </tr>   
                                @endforeach             
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>

@endsection
