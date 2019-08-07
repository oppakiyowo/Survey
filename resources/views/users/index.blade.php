@extends('layouts.backend')
	@section ('content')
		<div class="main-panel">
            @if($users->count() > 0)
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">USERS PANEL</h4>
						    <ul class="breadcrumbs">
							    <li class="nav-home">
								    <a href="{{ route('home') }}">
									<i class="flaticon-home"></i>
								    </a>
							    </li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="{{ route('users.index') }}">Table User</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a>List</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
						<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">User List</h4>
										<a href="#" class="btn btn-primary btn-round ml-auto">  
										<i class="fa fa-plus"> Add User </i> </a>
									</div>
								</div>
								<div class="card-body">
									
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Foto</th>
													<th>Nama</th>
													<th>Email</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tbody>
                                            @foreach ($users as $user)
												<tr>
													<td>
                                                        <img width="80px" height="80px"style="border-radius:50%" src="{{ Gravatar::src($user->email) }}">
                                                    </td>
													<td>{{ $user->name }}</td>
													<td>{{ $user->email }}</td>
													
													<td> 
														<div class="form-button-action">

												 
												 <form action="#" method="POST">
													@csrf
													@method ('DELETE')
												   
													<button data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete Permanently">
															<i class="fa fa-times"></i>
												  </form>   
												</td>
											</div>
                                             </tr>
                                                @endforeach
											</tbody>
                                        </table>
                                        
                                        @endif
									</div>
								</div>
							</div>
						</div>


						<!-- Modal -->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<form action="" method="POST" id="deleteUserForm">
	@csrf
  
	  @method('DELETE')
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="deleteModalLabel">Hapus Users</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	 
		<div class="modal-body">
		  <p class="text-center text-bold"> Apakah anda ingin mengapus users ini?  </p>
		  
  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak,Kembali</button>
          <button type="summit" class="btn btn-danger">Ya,Hapus</button>
        </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>		
</div>			
				
	@endsection

	@section('scripts')

<script>
    function handleDelete(id) {
        
        var form = document.getElementById('deleteUserForm')
        form.action = '/users/' + id
       
        $('#deleteModal').modal('show')
    }
</script>

@endsection
