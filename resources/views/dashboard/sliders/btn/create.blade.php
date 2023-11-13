<div class="modal fade" id="create{{ $title }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('general.create') .' '. $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Start Avatar -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="image">{{trans('general.image')}}</label>
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- End Avatar -->
                    <!-- Start Tabs -->
                    <div class="tab round shadow">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="nav-item">
                                    <a class="nav-link @if(app()->getLocale() == $localeCode) active show @endif" id="{{$localeCode}}-tab" data-toggle="tab" href="#{{$localeCode}}" role="tab" aria-controls="{{$localeCode}}" aria-selected="true">
                                        <i class="fa fa-globe"></i>
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <!-- Start Language Panel -->
                                <div class="tab-pane fade @if(app()->getLocale() == $localeCode) active show @endif" id="{{$localeCode}}" role="tabpanel" aria-labelledby="{{$localeCode}}-tab">
                                    <div class="form-group row">
                                        <div class="input-group mb-3 col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">{{trans('slider.name')}}</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="{{trans('slider.name') . ' ' . $properties['native'] }}" value="" id="name" name="{{$localeCode}}[name]" aria-label="name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>{{trans('slider.description') . ' ' . $properties['native'] }} </label>
                                            <textarea class="form-control" id="description" name="{{$localeCode}}[description]" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label>{{trans('slider.note') . ' ' . $properties['native'] }} </label>
                                            <textarea class="form-control" id="note" name="{{$localeCode}}[note]" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Language Panel -->
                            @endforeach
                        </div>
                    </div>
                    <!-- End Tabs -->
                    
                    <!-- Start Status Status -->
                    <div class="form-group p-1">
                        <label for="status">{{trans('general.status')}}</label>
                        <select name="status" class="form-control">
                            <option selected disabled>{{trans('general.choose') . ' ' .$title. ' ' .  trans('general.status')}}...</option>
                            <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>{{ trans('general.active') }}</option>
                            <option value="0" {{ old('status')=='0' ?'selected' : '' }}>{{ trans('general.inactive') }}</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Status Selected -->



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('general.close') }}</button>
                        <button type="submit" class="btn btn-success">{{ trans('general.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>