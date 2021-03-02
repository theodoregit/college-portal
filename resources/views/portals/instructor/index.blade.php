@extends('layouts.app')
@section('content')
    <div class="panel panel-default">

        <div class="panel panel-heading">
            Instructor's profile page
        </div>
        
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                        <th>
                            Full name
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            mobile number
                        </th>
                        <th>
                            address
                        </th>
                        <th>
                            instructing course
                        </th>
                        <th><a href="{{route('portals.instructor.edit', ['id'=>$profile->id])}} " class="btn btn-xs btn-info"></a></th>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>
                            <td>{{$profile -> fullname }} </td>
                            <td>{{$profile -> email }} </td>
                            <td>{{$profile -> mobilenumber }} </td>
                            <td>{{$profile -> address }} </td>
                            <td>{{$profile -> instructingCourses }} </td>
                            <td><a href="{{route('instructor.edit', ['id'=>$profile->id])}}" class="btn btn-xs btn-info">
                                Edit
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection