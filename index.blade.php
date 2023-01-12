@extends('layout.frontpage')
@section('title', 'SIMGEPREK')
@section('bodyclass', 'berita-page')
@section('navbarclass', 'navbar-fixed-top navbar-color-on-scroll')
@section('content')
  <div class="page-header header-filter" style="background-image: url('/img/peta.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="title">Berita Terkini</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="main">
		<div class="container">
      @if ($berita->count() > 0)
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            @foreach ($berita as $key => $value)
              <div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-4">
    								<div class="card-image">
    									<img class="img img-raised" src="/storage/gambar/{{$value->featured_image}}">
                    </div>
    							</div>
    							<div class="col-md-8">
    								<h3 class="card-title">
    									<a href="/berita/detail/{{encrypt($value->id)}}">{{$value->title}}</a>
    								</h3>
    								<p class="card-description">
    									{{substr(strip_tags($value->content), 0, 70)}}....<a href="/berita/detail/{{encrypt($value->id)}}"> Read More </a>
    								</p>
                    <p class="card-description text-success">Diunggah pada {{$value->created_at}}</p>
    							</div>
    						</div>
    					</div>
            @endforeach
  				</div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            {{$berita->links()}}
          </div>
        </div>
      @else
        <center>
          <br><br><br><br><br>
          -- Belum ada Data --
          <br><br><br><br><br>
        </center>
      @endif
		</div>
	</div>
@endsection
