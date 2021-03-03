@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel panel-heading">
           Editing {{$profile->instructingCourses}}  course Student's grade 
        </div>
        <div class="panel panel-body">

            <form action="{{route('instructor.grade.update', ['id'=>$grade->id])}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">{{$grades->studentname}} </label>
                </div>

                <div class="form-group">
                    <label for="assessment">Assessment</label>
                    <input type="integer" name="assessment" value={{$grades->assessment}} class="form-center">
                </div>
                <div class="form-group">
                    <label for="final">Final</label>
                    <input type="integer" name="final" value={{$grades->final}} class="form-center">
                </div>
                <div class="form-group">
                    <div class="form-center">
                        <button class="btn btn-xs btn-success" type="submit">
                            Sumbit Grade
                        </button>
                    </div>
                </div>

            </form>

            <table class="table table-hover">
                <thead>
                    <th>Student name</th>
                    <th>Assessment</th>
                    <th>Final</th>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{$grade->studentname}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection