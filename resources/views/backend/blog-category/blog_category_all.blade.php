@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Blog Category Data</h4>
                        <div class="text-end">
                            <a href="{{ route('add.blog.category') }}" class="text-end me-autos btn btn-primary">Add Blog Category</a>
                        </div>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Blog Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php($i = 1)
                                @foreach ($blog as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->category }}</td>

                                    <td>
                                        <a href="{{ route('edit.blog.category', $item->id) }}" class="btn btn-info">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="{{ route('delete.blog.category', $item->id) }}" title="Delete Data" class="btn btn-danger" id="delete">
                                            <i class="fas fa-trash"></i>

                                        </a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>


@endsection
