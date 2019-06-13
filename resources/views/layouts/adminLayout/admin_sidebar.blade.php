<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="{{ Request::url() == url('admin/dashboard') ? 'active' : '' }}"><a href="{{url('admin/dashboard')}}"><i class="icon icon-home "></i> <span>Dashboard</span></a> </li>
        <li class="{{ Request::url() == url('admin/registered') ? 'active' : '' }}"> <a href="{{url('admin/registered')}}"><i class="icon icon-signal "></i> <span>Registered</span></a> </li>
        <li class="{{ Request::url() == url('admin/visitors') ? 'active' : '' }}"> <a href="{{url('/admin/visitors')}}"><i class="icon icon-inbox"></i> <span>Visitors</span></a> </li>
        <li class="{{ Request::url() == url('admin/settings') ? 'active' : '' }}"><a href="{{url('/admin/set')}}"><i class="icon icon-th"></i> <span>Settings</span></a></li>
        <li ><a href="{{url('/logout')}}"><i class="icon icon-fullscreen"></i> <span>Logout</span></a></li>

    </ul>
</div>
<!--sidebar-menu-->