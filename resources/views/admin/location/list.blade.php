@extends('admin.template.admin_master')

@section('page-title', 'Location')
@section('content')
<div class="right_col" role="main">
    {{-- ListArea --}}
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="x_panel"> --}}
                <div class="x_title">
                    <h2>Name List</h2>

                    <a href="{{route('admin.location.form')}}" class="btn btn-primary btn-xs pull-right">Add Loation</a>
                    <div class="clearfix"></div>
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        
                    </div>
                    
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap dataTable collapsed" id="myTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>pincode</th>
                                        <th>Place</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="form-text-element">
                                    @foreach ($locations as $item)
                                    @if ($loop->first) @continue @endif
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pincode }}</td>
                                        <td>{{ $item->location_name}}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{route('admin.location.form', ['id' => $item->id])}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection