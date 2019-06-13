@extends('layouts.adminLayout.admin_design')

@section('content')
    <!--main-container-part-->

    <div id="content">

        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{url('admin/visitors')}}">Visitors</a> <a href="#" class="current"><Settings></Settings></a> </div>
            <h1>Visitors</h1>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Data table</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Registered</th>
                            <th class="text-left">IP</th>
                            <th class="text-left">Country</th>
                            <th class="text-left">Referral</th>

                        </tr>
                        </thead>
                        <tbody>

                        @if(count($visitors)>0)

                            @foreach($visitors as $visitor)
                                <tr class="gradeX">
                                    <td>{{$visitor->id}}</td>
                                    <td>{{$visitor->registered_at}}</td>
                                    <td>{{$visitor->ip}}</td>
                                    <td>{{$visitor->country}}</td>
                                    <td>{{$visitor->referral}}</td>

                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection