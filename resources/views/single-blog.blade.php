@include('partial.header')
			
			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">{{$blog->title}}</h3>
								</div>
								<img class="img-responsive" src="{{ url('/') }}/storage/app/public/{{$blog->image}}" alt="no preview" />
								<p style="color:#000000;">{{$blog->description}}</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			
@include('partial.footer')