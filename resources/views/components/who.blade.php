@if(Auth::guard('web')->check())
    <div class="text-success">
        You're logged in as a USER.
    </div>
@else
    <div class="text-danger">
        You're logged out as a USER.
    </div>
@endif
@if(Auth::guard('admin')->check())
    <div class="text-success">
        You're logged in as a Admin.
    </div>
@else
    <div class="text-danger">
        You're logged out as a USER.
    </div>
@endif
