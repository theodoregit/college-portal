@if (count($error)> 0 )

    <ul class="list-group">

        @foreach ($errors as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
        @endforeach

    </ul>
    
@endif