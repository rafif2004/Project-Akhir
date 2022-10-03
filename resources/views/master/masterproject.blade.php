@extends('master.admin')
@section('title', 'masterproject')
@section('content-title', 'Masterproject')
@section('content')
	<div class="row">
		<div class="col-lg-6">
			<div class="card shadow mb-4">
		        <div style="font-weight: 500;" class="card-header bg-gradient-primary text-white">
			        <i class="fas fa-user me-1" style="margin-right: 5px;"></i>
			        Data Siswa
			    </div>
			    <div class="card-body">
					<table class="table table-bordered display nowrap" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Nisn</th>
					            <th>nama</th>
                                <th>Action</th>
					        </tr>
					    </thead>
                        <tr>
                            <td>
                                <a class="btn btn-info"><i class="fas fa-folder-open"></i></a>
								<br>
                                <a class="btn btn-info"><i class="fas fa-plus"></i></a>
                            </td>
                        </tr>
                    
					</table>
                    <div class="card-footer">
                    </div>
			    </div>
		    </div>
		</div>

		<div class="col-lg-6">
			<div class="card shadow mb-4" style="border: 1px solid #bbb;">
		        <div style="font-weight: 500;" class="card-header bg-gradient-primary text-white">
			        <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
			        Project Siswa
			    </div>
			    <div class="card-body">
					<section class="text-center">
					    <h3></h3>
					</section>
			    </div>
		    </div>
		</div>

	</div>
@endsection