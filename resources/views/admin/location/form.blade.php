@extends('admin.template.admin_master')

@section('page-title', 'Location')
@section('content')

<div class="right_col" role="main">
    {{-- ListArea --}}
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                        <h2>Location Form</h2>

                    <div class="clearfix"></div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif 
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>
                <div class="x_content">
                    <form action="{{route('admin.location.submit')}}" method="post">
                        @csrf

                        @if (isset($location) && !empty($location))
                            <input type="hidden" name="location_id" value="{{$location->id}}">
                        @endif

                        <div class="well" style="overflow: auto">

                            <div class="form-row mb-10">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-3" style="margin-bottom: 4px;">
                                    <label class="control-label">Location</label>
                                    
                                    <input type="text" class="form-control" name="location" value="{{isset($location) ? $location->location_name : old('location')}}">
                                    @if ($errors->has('location'))
                                        <span class="errors" style="color: red">{{ $errors->first('location') }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-3" style="margin-bottom: 4px;">
                                    <label class="control-label">Pincode</label>
                                    
                                    <input type="number" class="form-control" name="pincode" value="{{isset($location) ? $location->pincode : old('pincode')}}">
                                    @if ($errors->has('pincode'))
                                        <span class="errors" style="color: red">{{ $errors->first('pincode') }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-3" style="margin-bottom: 4px;">
                                    <label class="control-label">Price</label>
                                    
                                    <input type="number" class="form-control" name="price" value="{{isset($location) ? $location->price : old('price')}}">
                                    @if ($errors->has('price'))
                                        <span class="errors" style="color: red">{{ $errors->first('price') }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>                        
                        <div class="form-group text-center">
                            <input class="btn btn-success" type="submit" value="Save & Exit">
                            <a class="btn btn-primary" href="{{ route('admin.location.list') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection