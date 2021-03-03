@extends('layouts.app')
@section('content')
@include('includes.errors')

<div class="panel panel-default">

    <div class="panel panel-heading">
        Editing {{$profile->fullname}} profile page
    </div>

    <div class="panel panel-body">

                <form action="{{route('instructor.update', ['id'=>$profile->id ])}} " method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" value="{{$profile->fullname}} " class="form-center" placeholder="Editing Your Full Name">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Email</label>
                        <input type="text" name="email" value="{{$profile->email}}" class="form-center" placeholder="Editing Email">
                    </div>
                    <div class="form-group">
                        <label for="fullname">mobile</label>
                        <input type="text" name="mobile" value="{{$profile->mobile}}" class="form-center" placeholder="Editing mobile number">
                    </div>
                    <div class="form-group">
                        <label for="fullname">address</label>
                        <input type="text" name="address" value="{{$profile->address}}" class="form-center" placeholder="Editing your address">
                    </div>
                    <div class="form-group">
                        <div class="form-center">
                            <button class="btn btn-success" type = "submit">
                                Update you profile
                            </button>
                        </div>
                    </div>

                </form>
    </div>
</div>

@endsection
