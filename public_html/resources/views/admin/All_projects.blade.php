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
                    <h4 class="card-title" style="font-weight: 500; font-size: 22px; text-align: center;">All Projects</h4>
                    <hr>
                    <div class="table-responsive pt-5">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Project Title</th>
                            <th>Youtube Embeded Link</th>
                            <th>Approve</th>
                            <th>Reject</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(!empty($data) && $data->count())
                            @foreach($data as $pro)
                            <tr>
                                <td class="text-white">{{$pro->title}}</td>
                                <td class="text-white">{{$pro->link}}</td>                       
                                <td>
                                    <a class="btn btn-success" href="{{url('update',$pro->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('delete',$pro->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                          @else
                            <tr>
                              <td colspan="6">There are no data.</td>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end col-md-6">
              <div class="row">{{ $data->links() }}</div> 
            </div>
          </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    @include('admin.script')
  </body>
</html>