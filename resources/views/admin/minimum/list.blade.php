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

                    <a href="{{route('admin.min_form')}}" class="btn btn-primary btn-xs pull-right">Add Minimum Price</a>
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
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="form-text-element">
                                    @foreach ($price as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->min_price }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <label class="label label-success">Enabled</label>
                                            @else
                                                <label class="label label-danger">Disabled</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.min_form', ['id' => $item->id])}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                            @if ($item->status == 1)
                                                <a href="{{route('admin.min_status', ['id' => $item->id])}}" class="btn btn-danger btn-xs">Disable</a>
                                            @else
                                                <a href="{{route('admin.min_status', ['id' => $item->id])}}" class="btn btn-success btn-xs">Enable</a>
                                            @endif
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