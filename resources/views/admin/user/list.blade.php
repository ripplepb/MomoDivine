@extends('admin.template.admin_master')

@section('page-title', 'Users')
@section('content')
<div class="right_col" role="main">
    {{-- ListArea --}}
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="x_panel"> --}}
                <div class="x_title">
                    <h2>Name List</h2>

                    {{-- <a href="{{route('admin.location.form')}}" class="btn btn-primary btn-xs pull-right">Add Location</a> --}}
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
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody class="form-text-element">
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->mobile}}</td>
                                        <td>{{ $item->email }}</td>
                                        {{-- <td>
                                            <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        </td> --}}
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