<?php $__env->startSection('title', 'Moksh Tubes Blog | Insights on Alloys & Engineering Materials'); ?>

<?php $__env->startSection('meta_description',
'Explore expert articles on stainless steel, nickel alloys, Hastelloy, engineering applications, technical comparisons, and industry-specific insights from Moksh Tubes LLP.'); ?>
<?php $__env->startSection('meta_keywords',
'Mokshtubes Blog, Industrial Alloys Insights, Stainless Steel Updates, Pipes and Tubes News,
Metal Industry Articles, Alloy Supply Updates, Expert Metal Solutions'); ?>



<?php $__env->startSection('og_image', asset('assets/images/slides/Mokshtubes-banner-desktop.webp')); ?>
<?php $__env->startSection('og_type', 'website'); ?>

<?php $__env->startSection('content'); ?>

<!--Start rev slider wrapper-->

<section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center">
                <h1>Moksh Tubes Blog <br> Industry Insights</h1>
            </div>
        </div>
    </div>
</section>

<section class="blog-section sec-padd2">
    <div class="container">
        <div class="section-title">
            <h2>blogs</h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated">

                    <figure class="img-holder mb-0">
                        <a href="<?php echo e(route('frontend.single-blog', $blog->slug)); ?>">
                            <img src="<?php echo e(asset('storage/' . $blog->cover_image)); ?>" alt="<?php echo e($blog->title); ?>" loading="lazy">
                        </a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="<?php echo e(route('frontend.single-blog', $blog->slug)); ?>">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <a href="<?php echo e(route('frontend.single-blog', $blog->slug)); ?>">
                            <h5><?php echo e(Str::limit($blog->title, 30)); ?></h5>
                        </a>

                        <div class="post-meta">
                            by <?php echo e($blog->author ?? 'Admin'); ?> |
                            <?php echo e($blog->created_at->format('F d, Y')); ?>

                        </div>

                        <!--<div class="text">-->
                        <!--</div>-->
                        <?php echo \Str::limit(strip_tags($blog->content, '<i>'), 120); ?>


                            <div class="link">
                                <a href="<?php echo e(route('frontend.single-blog', $blog->slug)); ?>" class="default_link">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                    </div>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Custom Pagination -->
        <div class="custom-pagination">
            <?php if($blogs->onFirstPage()): ?>
            <span class="disabled">« Prev</span>
            <?php else: ?>
            <a href="<?php echo e($blogs->previousPageUrl()); ?>">« Prev</a>
            <?php endif; ?>

            <?php $__currentLoopData = $blogs->getUrlRange(1, $blogs->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($page == $blogs->currentPage()): ?>
            <span class="active"><?php echo e($page); ?></span>
            <?php else: ?>
            <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($blogs->hasMorePages()): ?>
            <a href="<?php echo e($blogs->nextPageUrl()); ?>">Next »</a>
            <?php else: ?>
            <span class="disabled">Next »</span>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/blogs.blade.php ENDPATH**/ ?>