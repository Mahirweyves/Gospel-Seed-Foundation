<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest Projects</h1>
      <div class="row mt-5">
        <!-- <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">GSF</a>
              </div>
            </div>
            <iframe width="325" height="183" src="https://www.youtube.com/embed/cSdugm9NjHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div> -->
        @foreach($projects as $project)
        <div class="col-sm-4 py-2 wow zoomIn">
          <div class="card-blog">
            <iframe width="325" height="183" src="{{ $project->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  
            <div class="body">
                <h5 class="post-title"><a href="{{url('/projects')}}">{{ $project->title }}</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="{{ asset('/images/GSF2.png') }}" alt="" style="height:30px; width:30px;">
                    </div>
                    <span>Gospel Seed Foundation</span>
                  </div>
                  <span class="mai-time"></span> {{ $project->created_at->diffForHumans() }}
                </div>
              </div>
          </div>
        </div>
        @endforeach
        
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('/projects')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
</div> <!-- .page-section -->

