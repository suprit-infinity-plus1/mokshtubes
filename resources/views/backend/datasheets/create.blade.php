@extends('layouts.admin-master')
@section('title', 'Add Datasheet')
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
                <li class="breadcrumb-item active" aria-current="page">
                    Add Datasheet
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white-all">
                <h4>Add New Datasheet</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('datasheets.store') }}" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="row">

                        {{-- Datasheet Name --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Datasheet Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="e.g. Copper Alloy C44300 Datasheet" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Page Path --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="page_path">Page Identifier <span class="text-danger">*</span></label>
                                <input type="text" name="page_path" id="page_path" class="form-control"
                                    placeholder="e.g. copper-alloys-c44300" value="{{ old('page_path') }}" required>
                                <small class="text-muted">
                                    Must match the frontend page identifier
                                </small>
                                @error('page_path')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- PDF Upload --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="file">Datasheet PDF <span class="text-danger">*</span></label>
                                <input type="file" name="file" id="file" class="form-control"
                                    accept="application/pdf" required>
                                <small class="text-muted">
                                    Allowed format: PDF only (max 10MB)
                                </small>
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="active">Status <span class="text-danger">*</span></label>
                                <select name="active" id="active" class="form-control" required>
                                    <option value="1" {{ old('active', '1') == '1' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ old('active') == '0' ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                                @error('active')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Submit
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
