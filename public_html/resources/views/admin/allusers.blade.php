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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <a href="{{ url('adduser') }}" class="btn btn-gray px-2 py-2" style="background-color:#41a39f">Add New User</a>
                    </div>
                    <div class="card-header d-flex justify-content-between font-weight-bold" style="font-weight: 500;
                            font-size: 22px;">All Users
                      <a href="{{ url('allusers') }}" class="btn btn-primary">Back</a>
                    </div>
                    <hr>
                    <div class="table table-responsive pt-5">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>User Type</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $users)
                        <tr>
                            <td class="text-white">{{$users->name}}</td>
                            <td class="text-white">{{$users->email}}</td>
                            <td class="text-white">{{$users->phone_number}}</td>
                            <td class="text-white">{{$users->usertype == '1' ? 'Admin':'User'}}</td>
                            <td class="text-white">
                                <a class="btn btn-success" href="{{url('edit',$users->id)}}">Update</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user {{($users->name)}}!')" href="{{url('deleteuser',$users->id)}}">Delete</a>
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