@extends('admin.template.admin_master')

@section('page-title', 'Location Rides')
@section('content')
<div class="right_col" role="main">
    {{-- ListArea --}}
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="x_panel"> --}}
                <div class="x_title">
                    <h2>Rides List</h2>
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
                                        <th>User</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Paid</th>
                                        <th>Pending Price</th>
                                        <th>Total Price</th>
                                        <th>Ride</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="form-text-element">
                                    @foreach ($rides as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->location}}</td>
                                        <td>{{ date('d F Y', strtotime($item->date))}}</td>
                                        <td>{{ date('g:i a', strtotime($item->time))}}</td>
                                        <td>{{ $item->price}}</td>
                                        <td>{{ $item->pending_price}}</td>
                                        <td>{{ $item->total_price }}</td>
                                        <td>
                                            @if ($item->ride_type == 1)
                                                Airport to Destination
                                            @else
                                                Destination to Airport
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->total_payment_status == 2)
                                                <label class="label label-success"><i class="fa fa-check"></i> Completed</label>
                                            @else
                                                <a href="{{route('admin.complete_pending', ['id' => $item->id, 'type' => 1])}}" class="btn btn-warning btn-xs"><i class="fa fa-inr"></i> Complete Pending</a>
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