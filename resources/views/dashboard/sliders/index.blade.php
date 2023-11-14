@extends('layouts.master')
@section('css')
    @section('title')
    {{$title}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{$title}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}" class="default-color">Dasboard</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a data-target="#create{{$title}}" data-toggle="modal"  data-effect="effect-scale" class="btn btn-success btn-sm" role="button">
                        <i class="fa fa-plus"></i>
                        Add New {{$title}}
                    </a>
                    <br><br>
                    <!--begin::Table-->
                    <!-- Start table-responsive -->
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover table-responsive-lg table-bordered p-0">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Note</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($sliders as $index=>$slider)
                                    <tr>
                                        <td>{{ $index + 1}}</td>
                                        <td><img src="{{ $slider->image_path }}" style="width: 60px;" class="rounded-circle" alt=""></td>
                                        <td>{{ $slider->name}}</td>
                                        <td>{{ $slider->note}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{ $slider->id }}" title="{{ trans('general.edit') }}">
                                                    <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $slider->id }}" title="{{ trans('general.delete') }}">
                                                    <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @include('dashboard.sliders.btn.edit')
                                    @include('dashboard.sliders.btn.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                @include('dashboard.sliders.btn.create')
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
@endsection