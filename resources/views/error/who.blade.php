@if(Auth::guard('web')->check())

<span class="text-success">
    Logged in as User &nbsp; |
</span>

@else

<span class="text-danger">

    Logged Out as User &nbsp; |
</span>

@endif

@if(Auth::guard('admin')->check())

<span class="text-success">

    Logged in as Admin &nbsp; |
</span>

@else

<span class="text-danger">

    Logged Out as Admin &nbsp; |
</span>

@endif