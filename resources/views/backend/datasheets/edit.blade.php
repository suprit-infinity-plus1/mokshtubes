@extends('layouts.admin-master')
@section('title', 'Edit Datasheet')
@section('content')

    <section class="section">

        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}" class="text-white text-decoration-none">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('datasheets.index') }}" class="text-white text-decoration-none">
                        <i class="fas fa-file-pdf"></i> Datasheets
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    Edit Datasheet
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white-all">
                <h4>Edit Datasheet</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('datasheets.update', $datasheet->id) }}" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="row">

                        {{-- Name --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Datasheet Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $datasheet->name) }}" required>
                            </div>
                        </div>

                        {{-- Page Path --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Page Identifier <span class="text-danger">*</span></label>
                                <input type="text" name="page_path" class="form-control"
                                    value="{{ old('page_path', $datasheet->page_path) }}" required>
                            </div>
                        </div>

                        {{-- Current PDF --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current PDF</label><br>
                                <a href="{{ asset('storage/' . $datasheet->file_path) }}" target="_blank">
                                    View PDF
                                </a>
                            </div>
                        </div>

                        {{-- Upload New PDF --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Replace PDF (optional)</label>
                                <input type="file" name="file" class="form-control" accept="application/pdf">
                                <small class="text-muted">
                                    Leave empty to keep existing PDF
                                </small>
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="active" class="form-control">
                                    <option value="1" {{ $datasheet->active ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ !$datasheet->active ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="col-md-12 text-center mt-3">
                            <button class="btn btn-primary">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
