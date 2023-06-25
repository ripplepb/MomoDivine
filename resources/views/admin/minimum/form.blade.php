@extends('admin.template.admin_master')

@section('page-title', 'Minimum Price')
@section('content')

<div class="right_col" role="main">
    {{-- ListArea --}}
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    @if (isset($price) && !empty($price))
                        <h2>Update Minimum Price</h2>
                    @else
                        <h2>Add Minimum Price</h2>
                    @endif

                    <div class="clearfix"></div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif 
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>
                <div class="x_content">
                    <form action="{{route('admin.min')}}" method="post">
                        @csrf

                        @if (isset($price) && !empty($price))
                            <input type="hidden" name="price_id" value="{{$price->id}}">
                        @endif

                        <div class="well" style="overflow: auto">

                            <div class="form-row mb-10">
                                <div class="col-md-3"></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mb-3" style="margin-bottom: 4px;">
                                    <label class="control-label">Minimum Price</label>
                                    
                                    <input type="text" class="form-control" name="min_price" value="{{isset($price) ? $price->min_price : old('min_price')}}">
                                    @if ($errors->has('min_price'))
                                        <span class="errors" style="color: red">{{ $errors->first('min_price') }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>                        
                        <div class="form-group text-center">
                            <input class="btn btn-success" type="submit" value="Save & Exit">
                            <a class="btn btn-primary" href="{{ route('admin.min_list') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection