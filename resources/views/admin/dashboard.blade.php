
@extends('layouts.adminLayout.admin_design')

@section('content')
    <!--main-container-part-->
    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_lg span3">  <a href="{{url('/admin/visitors')}}"> <h2>Visits</h2> <h2>{{count($visitors)}}</h2></a> </li>
                    <li class="bg_lo span3"> <a href="{{url('/admin/registered')}}"> <h2>Subscribers</h2> <h2>{{count($subscribers)}}</h2></a> </li>
                    <li class="bg_lo span3"> <a href="{{url('/admin/settings')}}"> <h2>Cloaking</h2> <h3>{{$cloak[0]['switch']=="1" ? "Active"  : "Not Active"}} {{$cloak[0]['country']}}</h3></a> </li>

                </ul>
            </div>
            <!--End-Action boxes-->

            <hr/>


        </div>
    </div>

    <!--end-main-container-part-->
@endsection