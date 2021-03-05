<link href="{{ asset('css/grade-table.css') }}" rel="stylesheet">@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Grade Report</div>                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">   
                        <p><u><strong>Year: {{$year}}</strong></u></p>
                        <p><u><strong>Semester: {{$semester}}</strong></u></p>          
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Assessment</th>
                                    <th scope="col">Project</th>
                                    <th scope="col">Final Exam</th>
                                    <th scope="col">Sum</th>
                                    <th scope="col">Credit Hour</th>
                                    <th scope="col">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($grades as $grade)
                                <tr>
                                    <th scope="row">{{$grade->id}}</th>
                                    <td>{{$grade->coursename}}</td>
                                    <td>{{$grade->assessment}}</td>
                                    <td>{{$grade->project}}</td>
                                    <td>{{$grade->finalexam}}</td>
                                    <td>{{$grade->sum}}</td>
                                    <td>0</td>
                                    <td>{{$grade->grade}}</td>
                                </tr>
                                @endforeach                           
                            </tbody>
                        </table>
                        <div style="margin-left=100%">
                            <p>Semester GPA: <strong></strong></p>
                            <p>Comulative GPA: <strong></strong></p>
                            <p>Status GPA: <strong></strong></p>
                        </div>
                    </div>
                </div>
            </div>

@endsection
