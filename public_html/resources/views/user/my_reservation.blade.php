@include('user.navbar')

<div align="center" style="padding:20px;">
<div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
    <h1 class="card-title display-2 mb-4">My Reservations</h1>
    <div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>phone</th>
            <th>Start time</th>
            <th>End time</th>
            <th>status</th>
            <th>cancel reservation</th>
        </tr>
        @if(!empty($reserve) && $reserve->count())
            @foreach($reserve as $reserves)
                <tr>
                    <td>{{$reserves->first_name}}</td>
                    <td>{{$reserves->last_name}}</td>
                    <td>{{$reserves->phone}}</td>
                    <td>{{$reserves->start_date}}</td>
                    <td>{{$reserves->end_date}}</td>
                    <td>{{$reserves->status}}</td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this!')" href="{{url('cancel_reserve',$reserves->id)}}">Cancel</a></td>
                            <!-- <td><a href="{{ url('cancel_reserve',$reserves->id) }}" class="btn icon btn-primary sm"  title="Send Email"> <i class="bi bi-envelope-fill"></i> </a></td> -->
                </tr>   
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-danger">Sorry!!! <br> You haven't made any booking</td>
            </tr>
        @endif
    </table>
</div>
</div>
</div>
</div>
</div>
</div>