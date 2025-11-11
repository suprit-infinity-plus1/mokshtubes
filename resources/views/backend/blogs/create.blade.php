@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')

    <section class="section">
        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}" class="text-white text-decoration-none">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.blogs') }}" class="text-decoration-none">
                        <i class="fas fa-list"></i> All Blogs
                    </a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white-all">
                <h4>Add New Blog</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="row">
                        <!-- Blog Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter Title" value="{{ old('title') }}" required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                                    placeholder="keyword1, keyword2" value="{{ old('meta_keywords') }}">
                                @error('meta_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="3">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Cover Image -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cover_image">Cover Image </label>
                                <input type="file" name="cover_image" id="cover_image" class="form-control"
                                    accept="image/png, image/gif, image/jpeg, image/webp"
                                    onchange="previewBlogCoverImage(event)">
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <img id="blog_cover_image_preview" src="#" alt="Cover Image Preview"
                                    style="display:none; max-width:100%; height:auto; margin-top:10px;" />
                            </div> --}}
                            <div class="col-md-3 order-3 order-md-4">
                                <div class="form-group">
                                    <img id="blog_cover_image_preview" src="#" alt="Cover Image Preview"
                                        style="display:none; max-width:100%; height:auto;" />
                                </div>
                            </div>
                            <script>
                                function previewBlogCoverImage(event) {
                                    const [file] = event.target.files;
                                    if (file) {
                                        const preview = document.getElementById('blog_cover_image_preview');
                                        preview.src = URL.createObjectURL(file);
                                        preview.style.display = 'block';
                                    }
                                }
                            </script>
                        </div>
                        <!-- Blog Category -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select name="tags[]" id="tags" class="form-control select2" multiple>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Blog Tags -->
                        <div class="col-md-6">

                        </div>



                        <!-- Blog Content -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content">Content <span class="text-danger">*</span></label>
                                <textarea name="content" id="content" class="form-control summernote" rows="10" required>{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>FAQ Section</label>
                                <div id="faq-wrapper">
                                    <div class="faq-item mb-3">
                                        <div class="d-flex gap-2 mb-2">
                                            <input type="text" name="faq[0][question]" class="form-control"
                                                placeholder="Question">
                                            <button type="button" class="btn btn-danger btn-sm remove-faq">X</button>
                                        </div>
                                        <textarea name="faq[0][answer]" class="form-control" rows="2" placeholder="Answer"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary btn-sm mt-2" id="add-faq-btn">Add
                                    FAQ</button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="schema">Schema (JSON-LD)</label>
                                <textarea name="schema" id="schema" class="form-control" rows="6" placeholder='Paste JSON-LD here'>{{ old('schema', $blog->schema ?? '') }}</textarea>
                                <small class="text-muted">Optional: Add custom JSON-LD schema for this blog post.</small>
                                @error('schema')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1"
                                        {{ old('status', $blog->status ?? '1') == '1' ? 'selected' : '' }}>Published
                                    </option>
                                    <option value="0"
                                        {{ old('status', $blog->status ?? '1') == '0' ? 'selected' : '' }}>Draft</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-send"></i> Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('extrajs')
    <script>
        let faqIndex = 1;

        document.getElementById('add-faq-btn').addEventListener('click', function() {
            const wrapper = document.getElementById('faq-wrapper');
            const html = `
        <div class="faq-item mb-3">
            <div class="d-flex gap-2 mb-2">
                <input type="text" name="faq[${faqIndex}][question]" class="form-control" placeholder="Question">
                <button type="button" class="btn btn-danger btn-sm remove-faq">X</button>
            </div>
            <textarea name="faq[${faqIndex}][answer]" class="form-control" rows="2" placeholder="Answer"></textarea>
        </div>`;
            wrapper.insertAdjacentHTML('beforeend', html);
            faqIndex++;
        });

        // Remove FAQ item
        document.getElementById('faq-wrapper').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-faq')) {
                e.target.closest('.faq-item').remove();
            }
        });
    </script>

@endsection




{{-- @if (!empty($blog->schema))
    <script type="application/ld+json">
        {!! $blog->schema !!}
    </script>
@endif --}}
