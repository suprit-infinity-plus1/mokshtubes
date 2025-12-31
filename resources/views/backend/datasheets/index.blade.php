@extends('layouts.admin-master')
@section('title', 'Manage Datasheets')
@section('content')

    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}" class="text-white text-decoration-none">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item active">
                <i class="fas fa-file-pdf"></i> Datasheets
            </li>
        </ul>

        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="{{ route('datasheets.add') }}" class="text-decoration-none"><i
                        class="fas fa-plus"></i> Add
                    Datasheet</a></li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Datasheets</h4>
        </div>

        <div class="card-body">

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white">{{ Session::get('success') }}</span></li>
                    </ul>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white">{{ $errors->first() }}</span></li>
                    </ul>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Page</th>
                            <th>PDF</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($datasheets as $datasheet)
                            <tr>
                                <td>{{ $datasheet->id }}</td>
                                <td>{{ $datasheet->name }}</td>
                                <td>{{ $datasheet->page_path }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $datasheet->file_path) }}" target="_blank">
                                        View PDF
                                    </a>
                                </td>
                                <td>{{ $datasheet->created_at->format('d-M-Y') }}</td>
                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            {{-- <a href="{{ url('blogs/' . $blog->slug) }}"
                                                class="dropdown-item has-icon text-info" target="_blank" title="View Blog">
                                                <i class="fa fa-eye"></i> View
                                            </a> --}}
                                            <a href="{{ route('datasheets.edit', $datasheet->id) }}"
                                                class="dropdown-item has-icon action-edit-btn1" title="Edit Datasheet">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                                onclick="confirmDeleteDatasheet({{ $datasheet->id }})"
                                                title="Delete Datasheet">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                            <form id="delete-datasheet-form-{{ $datasheet->id }}"
                                                action="{{ route('datasheets.delete', $datasheet->id) }}" method="POST"
                                                style="display:none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="6" class="text-danger">
                                    <h5>No Datasheets Found.</h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Page</th>
                            <th>PDF</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- ADD MODAL --}}
    <div class="modal fade" id="addDatasheetModal">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('datasheets.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Datasheet</h5>
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" class="form-control mb-2" placeholder="Datasheet Name"
                            required>

                        <input type="text" name="page_path" class="form-control mb-2"
                            placeholder="Page Path (e.g. copper-alloys-c44300)" required>

                        <input type="file" name="file" class="form-control" accept="application/pdf" required>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function confirmDeleteDatasheet(id) {
            if (confirm('Delete this Datasheet?')) {
                document.getElementById('delete-datasheet-form-' + id).submit();
            }
        }
    </script>
@endsection
