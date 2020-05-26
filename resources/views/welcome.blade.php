@include('partial.header')
			
			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
                    <h3 class="panel-title">Blogs</h3>
                    <a href="{{ url('/add-blog') }}" class="btn btn-primary a-btn-slide-text">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                        <span><strong>Add Blog</strong></span>            
                    </a>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    <img  width="200" src="{{ url('/') }}/storage/app/public/{{$blog->image}}" alt="no preview" />
                                </td>
                                <td>
                                    <a href="add-blog/{{$blog->id}}" class="btn btn-primary a-btn-slide-text">
                                        <span class="fa fa-edit" aria-hidden="true"></span>
                                        <span><strong>Edit</strong></span>            
                                    </a>
                                    <a href="blog/{{$blog->id}}" class="btn btn-primary a-btn-slide-text">
                                        <span class="fa fa-eye" aria-hidden="true"></span>
                                        <span><strong>View</strong></span>            
                                    </a>
                                    <a href="remove/{{$blog->id}}" class="btn btn-primary a-btn-slide-text">
                                    <span class="fa fa-close" aria-hidden="true"></span>
                                        <span><strong>Delete</strong></span>            
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					</div>
				</div>
			</section>
			
@include('partial.footer')		
			