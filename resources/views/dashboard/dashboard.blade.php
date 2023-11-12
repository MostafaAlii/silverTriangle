@extends('layouts.master')
@section('css')
<link href="{{ URL::asset('assets/css/plugins/toastr.css') }}" rel="stylesheet">
@section('title')
{{$title}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">
                {{ get_user_data()->name . ' ' . $title }}
            </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                @section('breadcrumb')
                @show
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('layouts.common.partials.messages')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <!-- Start First Row -->
                <div class="row">
                    <!-- Start Admins Row -->
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                      <div class="card card-statistics h-100">
                        <div class="card-body">
                          <div class="clearfix">
                            <div class="float-left">
                              <span class="text-danger">
                                <i class="fa fa-user-circle highlight-icon" aria-hidden="true"></i>
                              </span>
                            </div>
                            <div class="float-right text-right">
                              <p class="card-text text-dark">Admins</p>
                              <h4>
                                {{--@if(get_user_data()->type == 'general')
                                    {{Admin::count()}}
                                @else
                                    {{Admin::whereCountryId(get_user_data()->country_id)->count()}}
                                @endif--}}
                              </h4>
                            </div>
                          </div>
                          <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            {{--  @if(get_user_data()->type == 'general')
                                {{Admin::whereStatus('active')->count()}} Active
                                <p>
                                    @if(Admin::whereType('supervisor')->count() > 0)
                                        {{Admin::whereType('supervisor')->count()}} Supervisor
                                    @else
                                        <span class="text-danger">
                                            No Supervisor Found
                                        </span>
                                    @endif
                                </p>
                            @else
                                {{Admin::whereCountryId(get_user_data()->country_id)->whereStatus('active')->count()}} Active
                                <p>
                                    @if(Admin::whereCountryId(get_user_data()->country_id)->whereType('supervisor')->count() > 0)
                                        {{Admin::whereCountryId(get_user_data()->country_id)->whereType('supervisor')->count()}} Supervisor
                                    @else
                                        <span class="text-danger">
                                            No Supervisor in {{ get_user_data()->country->name }}
                                        </span>
                                    @endif
                                </p>
                            @endif--}}
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- End Admins Row -->
                </div>
                <!-- End First Row -->
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection