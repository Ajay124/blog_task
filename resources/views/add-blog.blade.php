@include('partial.header')
			
			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									@if( !empty($blog)  && $blog->id > 0 )
										@php 
											$update = true;
											$text = 'Update ';
											$action = 'update_blog';
										@endphp
									@else
										@php 
											$text = 'Add'; 
											$update = false;
										@endphp
									@endif
									<h3 class="panel-title">{{$text ?? ''}} Blog</h3>
									
								</div>
								<div class="panel-body">
									<form method="post" enctype="multipart/form-data" action="{{route('save_blog')}}" mth="form">
									@csrf
										@if($update)
											<input type='hidden' name='blog_id' value="{{$blog->id}}" />
										@endif
										<fieldset>
											<div class="form-group">
												<input class="form-control" placeholder="Title" name="title" type="text" value="{{$blog->title ?? ''}}" autofocus>
											</div>
											<div class="form-group">
												<textarea style="color:#000000" placeholder="Description" name="description" >{{$blog->description ?? ''}}</textarea>
											</div>
											<div class="form-group">
												@if($update)
												<img  width="200" src="{{ url('/') }}/storage/app/public/{{$blog->image}}" alt="no preview" />
												<br>
												<label>Change Image</label>
												@endif
												<input class="form-control" placeholder="Confirm Password" name="image" type="file" value="">
											</div>
											@include('alerts')
											<!-- Change this to a button or input when using this as a form -->
											<button href="index.html" class="btn btn-login">{{$text}}</button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
@include('partial.footer')