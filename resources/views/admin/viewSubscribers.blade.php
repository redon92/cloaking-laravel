@extends('layouts.adminLayout.admin_design')

@section('content')
    <!--main-container-part-->

    <div id="content">

        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{url('admin/registered')}}">Registered</a> <a href="#" class="current"><Settings></Settings></a> </div>
            <h1>Registered</h1>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Registered</th>
                            <th>IP</th>
                            <th>Country</th>
                            <th>Referral</th>
                        </tr>
                        </thead>
                        <tbody>


                        @if(count($subscribers)>0)

                                @foreach($subscribers as $sub)
                                    <tr class="gradeX">
                                        <td>{{$sub->id}}</td>
                                        <td>{{$sub->name}}</td>
                                        <td>{{$sub->surname}}</td>
                                        <td>{{$sub->email}}</td>
                                        <td>{{$sub->phone}}</td>
                                        <td>{{$sub->created_at}}</td>
                                        <td>{{$sub->ip}}</td>
                                        <td>{{$sub->country}}</td>
                                        <td>{{$sub->referral}}</td>
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