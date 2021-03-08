<link href="{{ asset('css/grade-table.css') }}" rel="stylesheet">@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">My Courses</div>                    
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Course</th>
                                <th scope="col">Course Outline</th>
                                <th scope="col">Handouts</th>
                                <th scope="col">Text Book</th>
                                <th scope="col">Reference</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$course->coursename}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        @endforeach                           
                        </tbody>
                    </table>                               
                </div>
            </div>

@endsection
