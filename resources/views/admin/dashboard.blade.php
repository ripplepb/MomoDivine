@extends('admin.template.admin_master')

@section('page-title', 'Dashboard')

@section('content')
  <div class="right_col" role="main">
      <!-- top tiles -->
      <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
            <div class="dash-box">
              <div class="count green"></div>
              <span class="count_top"><i class="fa fa-user"></i> Total Users {{$users}}</span>
            </div>
        </div>
      </div> 
      
      <!-- /top tiles -->
    
    {{-- Catagory --}}
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>Today Location Bookings</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Book Date</th>
                        <th>Paid Amount</th>
                        <th>Pending Amount</th>
                        <th>Total Amount</th>
                        {{-- <th>Payment Status</th> --}}
                        {{-- <th>Payment Method</th> --}}
                    </tr>
                  </thead>
                  <tbody class="form-text-element">
                  </tbody>
                  @foreach ($today_rides as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{date('d M Y', strtotime($item->date))}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->price - $item->total_price}}</td>
                        <td>{{$item->total_price}}</td>
                        {{-- <td>
                          @if ($item->payment_status == 1)
                              Pending
                          @elseif ($item->payment_status == 2)
                              Completed
                          @else
                              Failed
                          @endif
                        </td> --}}
                        {{-- <td>Payment Method</td> --}}
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Product --}}
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>Today Hourly Bookings</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>For Hour</th>
                    <th>Book Date</th>
                    <th>Paid Amount</th>
                    <th>Pending Amount</th>
                    <th>Total Amount</th>
                    {{-- <th>Payment Status</th> --}}
                    {{-- <th>Payment Method</th> --}}
                  </tr>
                </thead>
                <tbody class="form-text-element">
                  @foreach ($today_ride as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->hour->hour}}</td>
                        <td>{{date('d M Y', strtotime($item->date))}}</td>
                        <td>{{$item->paid_price}}</td>
                        <td>{{$item->hour->price-$item->paid_price}}</td>
                        <td>{{$item->hour->price}}</td>
                        {{-- <td>
                          @if ($item->payment_status == 1)
                              Pending
                          @elseif ($item->payment_status == 2)
                              Completed
                          @else
                              Failed
                          @endif
                        </td>
                        <td>Payment Method</td> --}}
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- User & Contact --}}
    {{-- <div class="row"> --}}
      {{-- User --}}
      {{-- <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
              <h2>User List</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                      <th>SI</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody class="form-text-element">
                </tbody>
              </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div> --}}

      {{-- Contact --}}
      {{-- <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Enquiry List</h2>
              <div class="clearfix"></div>
          </div>
          <div>
            <div class="x_content">
              <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr>
                      <th>SI</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody class="form-text-element">
                  <tr>
                    <td>1</td>
                    <td>Lorem ipsum dolor sit amet consectetur </td>
                    <td>Catagory 21 </td>
                    <td>
                      <label class="label label-success">Active</label>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Lorem ipsum dolor sit amet consectetur </td>
                    <td>Catagory 21 </td>
                    <td>
                      <label class="label label-danger">Disabled</label>
                    </td>
                  </tr>
                  @foreach($products as $data)
                    <tr>
                      <td>{{ $loop->iteration}}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->category->name??null }}</td>
                      <td>@if($data->status ==1)
                            <a  class="btn btn btn-success btn-xs">Active</a>
                          @elseif($data->status ==2)
                            <a  class="btn btn btn-danger btn-xs">Inactive</a>
                          @else
                            <a  class="btn btn btn-warning btn-xs">Requested</a>
                          @endif
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              <div class="text-center"><a href="#" class="btn btn-round btn-primary btn-xs">View More Result</a></div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection
