<?php $__env->startSection('title', 'Administrative Dashboard'); ?>
<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="<?php echo e(route('admin.blogs')); ?>" class="text-decoration-none">
                        <i class="fas fa-list"></i> All Blogs
                    </a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header bg-dark text-white-all">
                <h4>Update Blog</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('admin.blogs.update', $blog->id)); ?>" enctype="multipart/form-data"
                    autocomplete="off">
                    <?php echo csrf_field(); ?>
                    

                    <div class="row">
                        <!-- Blog Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter Title" value="<?php echo e(old('title', $blog->title)); ?>" required>
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Meta Keywords -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                                    placeholder="keyword1, keyword2"
                                    value="<?php echo e(old('meta_keywords', $blog->meta_keywords)); ?>">
                                <?php $__errorArgs = ['meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Meta Description -->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="3"><?php echo e(old('meta_description', $blog->meta_description)); ?></textarea>
                                <?php $__errorArgs = ['meta_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Cover Image -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cover_image">Cover Image</label>
                                <input type="file" name="cover_image" id="cover_image" class="form-control"
                                    accept="image/png, image/gif, image/jpeg, image/webp"
                                    onchange="previewBlogCoverImage(event)">
                                <?php $__errorArgs = ['cover_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <img id="blog_cover_image_preview"
                                    src="<?php echo e($blog->cover_image ? asset('storage/' . $blog->cover_image) : '#'); ?>"
                                    alt="Cover Image Preview"
                                    style="display: <?php echo e($blog->cover_image ? 'block' : 'none'); ?>; max-width:100%; height:auto; margin-top:10px;">
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

                        <!-- Category -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"
                                            <?php echo e(old('category_id', $blog->category_id) == $category->id ? 'selected' : ''); ?>>
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Tags -->
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select name="tags[]" id="tags" class="form-control select2" multiple>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tag->id); ?>"
                                            <?php echo e(collect(old('tags', $blog->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''); ?>>
                                            <?php echo e($tag->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Author -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="author">Author <span class="text-danger">*</span></label>
                                <input type="text" name="author" id="author" class="form-control"
                                    placeholder="Enter Author Name" value="<?php echo e(old('author', $blog->author)); ?>" required>
                                <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content">Content <span class="text-danger">*</span></label>
                                <textarea name="content" id="content" class="form-control summernote" rows="10" required><?php echo e(old('content', $blog->content)); ?></textarea>
                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- FAQ Section -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>FAQ Section</label>
                                <div id="faq-wrapper">
                                    
                                    <?php if(old('faq', $blog->faqs)): ?>
                                        <?php $__currentLoopData = old('faq', $blog->faqs->toArray()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="faq-item mb-3">
                                                <div class="d-flex gap-2 mb-2">
                                                    <input type="text" name="faq[<?php echo e($index); ?>][question]"
                                                        class="form-control" placeholder="Question"
                                                        value="<?php echo e($faq['question'] ?? ''); ?>">
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm remove-faq">X</button>
                                                </div>
                                                <textarea name="faq[<?php echo e($index); ?>][answer]" class="form-control" rows="2" placeholder="Answer"><?php echo e($faq['answer'] ?? ''); ?></textarea>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="faq-item mb-3">
                                            <div class="d-flex gap-2 mb-2">
                                                <input type="text" name="faq[0][question]" class="form-control"
                                                    placeholder="Question">
                                                <button type="button" class="btn btn-danger btn-sm remove-faq">X</button>
                                            </div>
                                            <textarea name="faq[0][answer]" class="form-control" rows="2" placeholder="Answer"></textarea>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <button type="button" class="btn btn-secondary btn-sm mt-2" id="add-faq-btn">Add
                                    FAQ</button>
                            </div>
                        </div>

                        <!-- Schema JSON-LD -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="schema">Schema (JSON-LD)</label>
                                <textarea name="schema" id="schema" class="form-control" rows="6" placeholder='Paste JSON-LD here'><?php echo e(old('schema', $blog->schema ?? '')); ?></textarea>
                                <small class="text-muted">Optional: Add custom JSON-LD schema for this blog post.</small>
                                <?php $__errorArgs = ['schema'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1" <?php echo e(old('status', $blog->status) == 1 ? 'selected' : ''); ?>>
                                        Published</option>
                                    <option value="0" <?php echo e(old('status', $blog->status) == 0 ? 'selected' : ''); ?>>Draft
                                    </option>
                                </select>
                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-send"></i> Update Blog
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extrajs'); ?>
    <script>
        $(document).ready(function() {
            $('#tags').select2({
                placeholder: 'Select tags',
                width: '100%'
            });
        });
        // let faqIndex = <?php echo e(old('faq', count($blog->faq ?? []))); ?>;
        let faqIndex = <?php echo e(old('faq') ? count(old('faq')) : count($blog->faqs ?? [])); ?>;


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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/blogs/edit.blade.php ENDPATH**/ ?>