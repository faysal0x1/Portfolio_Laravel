@extends('admin.admin_dashboard')

@section('admin')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 px-4 pt-5">
    <div class="breadcrumb-title pe-3">Tables</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">categorys List</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('add.category') }}" class="btn btn-primary">Add category</a>
        </div>
    </div>
</div>

<hr>

	
<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example2" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>SL</th>
						<th>Image</th>
						<th>Name</th>
				
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($category as $key=> $item )
					<tr>

					
					<td>
						{{ $key+1 }}
					</td>
					<td>
						<img src="{{ asset($item->category_image) }}"  style="height: 55px; width:50px" alt="">
					</td>
					<td>
						{{ $item->category_name }}
					</td>
					<td>

						<span>
							
						</span>
						<a href="{{ route('edit.category', $item->id) }}" class="btn btn-info">

							<i class="fa-solid fa-pen-to-square"></i>
						
					</a>
					<a href="{{ route('delete.category', $item->id) }}" class="btn btn-danger delete " id="delete">

						<i class="fa-solid fa-trash"></i>

					</a></td>
						
					</tr>
					@endforeach
					
				</tbody>
				<tfoot>
					<tr>
						<th>SL</th>
						<th>Image</th>
						<th>Name</th>
						<th>Action</th>
						
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>


@endsection
