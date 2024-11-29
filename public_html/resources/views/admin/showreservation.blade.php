<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <div class=" page-body-wrapper">
          
          <div class="container">            
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="">
                    <h4 class="card-title" style="font-weight: 500; font-size: 22px; text-align: center;">All Reservations</h4>
                    <hr>
                    <div class="table-responsive pt-5">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Reject</th>
                            <th>Send</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $reserves)
                    <tr>
                        <td class="text-white">{{$reserves->first_name}}</td>
                        <td class="text-white">{{$reserves->last_name}}</td>
                        <td class="text-white">{{$reserves->email}}</td>
                        <td class="text-white">{{$reserves->phone}}</td>
                        <td class="text-white">{{$reserves->start_date}}</td>
                        <td class="text-white">{{$reserves->end_date}}</td>
                        <td class="text-white">{{$reserves->comment}}</td>
                        <td class="badge badge-outline-success">{{$reserves->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$reserves->id)}}">Approve</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('rejected',$reserves->id)}}">Reject</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('emailview',$reserves->id)}}">Send Mail</a>
                        </td>
                    </tr>
                    @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex justify-content-end col-md-6">
                      <div class="row pt-4">{{ $data->links() }}</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>