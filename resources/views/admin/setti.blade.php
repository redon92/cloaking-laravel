
@extends('layouts.adminLayout.admin_design')

@section('content')


    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{url('admin/settings')}}" class="tip-bottom">Settings</a>  </div>
            <h1>Settings</h1>

            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach

            @endif
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Set Cloaking</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form  method="post" action="{{url('admin/updateCloak')}}" class="form-horizontal">
                                {{csrf_field()}}
                                <div class="control-group">
                                    <label class="control-label">Activate Cloaking</label>
                                    <div class="controls">
                                        @if($cloak[0]->switch == 1)
                                        <label>
                                            <input type="radio" checked="checked" value="1" name="switch" />
                                            Yes</label>

                                        <label>
                                            <input type="radio" value="0" name="switch" />
                                            No</label>
                                        @else
                                            <label>
                                                <input type="radio"  value="1" name="switch" />
                                                Yes</label>

                                            <label>
                                                <input type="radio" value="0" checked="checked" name="switch" />
                                                No</label>

                                        @endif
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Select Country</label>
                                    <div class="controls">
                                        <select name="country">

                                            <option class="hidden" selected value="{{$cloak[0]->country}}">{{$cloak[0]->country}}</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Germany">Germany</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Tags for referral (with comma) :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="tags" value="{{$cloak[0]->tags}}" placeholder="Insert tags for referral" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL for referral :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="url" value="{{$cloak[0]->url}}" placeholder="Insert URL"/>
                                        <span class="help-block"></span> </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Update Password</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{url('/admin/update-pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate">{{csrf_field()}}
                                <div class="control-group">
                                    <label class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input type="password" name="current_pwd" id="current_pwd" />
                                        <span id="chkPwd" ></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <input type="password" name="new_pwd" id="new_pwd" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" name="confirm_pwd" id="confirm_pwd" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update Password" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div></div>


@endsection