<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .no-arrow {
      -moz-appearance: textfield;
    }
    .no-arrow::-webkit-inner-spin-button {
      display: none;
    }
    .no-arrow::-webkit-outer-spin-button,
    .no-arrow::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
</head>
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInDown">Book an Appointment</h1>

      <form class="main-form" action="{{url('reservation')}}" method="POST">

      @csrf

        <div class="row mt-3">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="first_name" class="form-control" placeholder="First name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="last_name" class="form-control" placeholder="Last name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="text" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="number" name="phone" class="form-control no-arrow" placeholder="Phone Number" required>
          </div>
          <!-- <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="datetime-local" id="datetimepicker1" name="start_date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="datetime-local" id="datetimepicker2" name="end_date" class="form-control">
          </div> -->
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="datetime-local" id="startDate" name="start" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="datetime-local" id="endDate" name="end_date" class="form-control" required>
          </div>

          <div class="col-12 py-2 wow fadeInDown" data-wow-delay="300ms">
            <select id="comment" name="comment" class="form-control" required>
              <option>-----select-----</option>
              <option value="meeting">Meeting</option>
              <option value="seminar">Seminar</option>
              <option value="conference">Conference</option>
              <option value="overnight">Overnight</option>
              <option value="song">Song video production</option>
              <option value="discussion forum">Discussion forum</option>
              <option value="youtube content">Youtube content</option>
              <option value="fellowship">Fellowship</option>
              <option value="rehearssal">Rehearssal</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
      </form>
    </div>
  </div>

  <!-- <div class="container">
    <div class="row">
        <div class='col-sm-3'>
            <input type='text' class="form-control" id='datetimepicker4' />
        </div>
    </div>
</div> -->

<!-- <div class="container">
   <div class='col-md-5'>
      <div class="form-group">
         <div class='input-group date' id='datetimepicker6'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
         </div>
      </div>
   </div>
   <div class='col-md-5'>
      <div class="form-group">
         <div class='input-group date' id='datetimepicker7'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
         </div>
      </div>
   </div>
</div> -->

<!-- <div class="container">
  <input type="datetime-local" class="form-control" id="datetime1"/>
</div>

<script>
  var datetime = new Date();
  var minutes = datetime.getMinutes();
  var hours = datetime.getHours();
  // var seconds = datetime.getSeconds();
  var tdate = datetime.getDate();
  var month = datetime.getMonth() + 1; //4
  if(tdate < 10){
    tdate = '0' + tdate;
  }
  if(month < 10){
    month = '0' + month;
  }
  var year = datetime.getUTCFullYear();
  var minDate = year + "-" + month + "-" + tdate + " " + hours + ":" + minutes;
  document.getElementById("datetime1").setAttribute('min', minDate)
  console.log(minDate);
</script> -->


<!-- <script type="text/javascript">
   $(function () {
       $('#datetimepicker6').datetimepicker();
       $('#datetimepicker7').datetimepicker({
   useCurrent: false //Important! See issue #1075
   });
       $("#datetimepicker6").on("dp.change", function (e) {
           $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
       });
       $("#datetimepicker7").on("dp.change", function (e) {
           $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
       });
   });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker({
            defaultDate: '+7d'
        });
    });
</script> -->



<script type="text/javascript">
    window.onload=function(){//from ww  w . j  a  va2s. c  o  m
    var today = new Date().toISOString().split('T')[0];
    document.getElementsById("startDate")[0].setAttribute('min', today);
  }


  $("#startDate").on("change", function(){
  $("#endDate").attr("min", $(this).val());
});
</script>

<script>
  var today = new Date().toISOString().slice(0, 16);
  document.getElementsByName('start')[0].min = today;
</script>

