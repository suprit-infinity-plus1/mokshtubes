<?php $__env->startSection('title', 'Special & Rare Alloys – Nimonic, Tantalum, Stellite'); ?>
<?php $__env->startSection('meta_description',
    'Explore special alloys Nimonic, Tantalum, Stellite & Tungsten at MokshTubes for superior strength, heat resistance & corrosion protection.'); ?>


    
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Special & Rare Alloys for High-Performance Applications</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Hard To Find & Special Alloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Hard To Find & Special Alloys family.
                </p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Hard To Find Special Alloys Carbide',
                        'slug' => 'hard-to-find-special-alloys-carbide',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-carbide.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Nimonic',
                        'slug' => 'hard-to-find-special-alloys-nimonic',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nimonic.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Nitinol',
                        'slug' => 'hard-to-find-special-alloys-nitinol',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-nitinol.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Stellite',
                        'slug' => 'hard-to-find-special-alloys-stellite',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-stellite.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Tantalum',
                        'slug' => 'hard-to-find-special-alloys-tantalum',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tantalum.webp',
                    ],
                    [
                        'name' => 'Hard To Find Special Alloys Tungsten',
                        'slug' => 'hard-to-find-special-alloys-tungsten',
                        'image' =>
                            'assets/images/hard-to-find-and-special-alloys/hard-to-find-and-special-alloys-tungsten.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/hard-to-find-special-alloys/' . $grade['slug'])
                                : '#';
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo e($href); ?>" class="text-decoration-none d-block h-100">
                            <div class="grade-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">
                                
                                <img src="<?php echo e(asset($grade['image'])); ?>" alt="<?php echo e($grade['name']); ?>"
                                    class="img-fluid rounded mb-3" style="border-radius: 8px;">
                                <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                                    style="background-color: #174268; color: #fff; display: inline-block;">
                                    <?php echo e($grade['name']); ?>

                                </h6>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>




    <!--End breadcrumb area-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/hard-to-find-special-alloys/index.blade.php ENDPATH**/ ?>