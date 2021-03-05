<link href="{{ asset('css/grade-table.css') }}" rel="stylesheet">@extends('layouts.students.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Latest Announcements</div>                    
                <div class="panel-body">
                    @foreach($posts as $post)
                        <div style="background-color: #f5f8fa">   
                            <h3><strong>{{$post->title}}</strong></h3>
                            <p><strong>Posted Date: {{$post->created_at}}</strong></p>
                            <p>{{$post->body}}</p>
                        </div> 
                    @endforeach                                
                </div>
            </div>

@endsection
