<?php $__env->startSection('title', 'Austenitic Stainless Steels: 304, 316, 310, 321 | MokshTubes'); ?>
<?php $__env->startSection('meta_description', 'MokshTubes offers stainless steels 304, 316, 310 & 321 with superior corrosion resistance,
    strength, and versatility for diverse applications.'); ?>
<?php $__env->startSection('meta_keywords', 'Austenitic Stainless Steels, Stainless Steel 304, Stainless Steel 316, Stainless Steel 310,
    Stainless Steel 321, Corrosion Resistant Stainless Steel, High Strength Stainless Steel, Versatile Stainless Steels,
    Industrial Stainless Steel Grades, Marine Stainless Steel Alloys, Chemical Processing Stainless Steels'); ?>

<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/austenitic-stainless-steel/austenitic-stainless-steel.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Austenitic Stainless Steel</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Austenitic Stainless Steel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Austenitic Stainless Steel family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Austenitic Stainless Steel 304',
                        'slug' => 'austenitic-stainless-steel-304',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-304.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 309',
                        'slug' => 'austenitic-stainless-steel-309',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-309.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 310',
                        'slug' => 'austenitic-stainless-steel-310',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-310.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 316',
                        'slug' => 'austenitic-stainless-steel-316',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 316ti',
                        'slug' => 'austenitic-stainless-steel-316ti',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-316Ti.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 317',
                        'slug' => 'austenitic-stainless-steel-317',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-317.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 321',
                        'slug' => 'austenitic-stainless-steel-321',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-321.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel 347',
                        'slug' => 'austenitic-stainless-steel-347',
                        'image' => 'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-347.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel Nitronic 50',
                        'slug' => 'austenitic-stainless-steel-nitronic-50',
                        'image' =>
                            'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-nitronic-50_9_11zon.webp',
                    ],
                    [
                        'name' => 'Austenitic Stainless Steel Nitronic 60',
                        'slug' => 'austenitic-stainless-steel-nitronic-60',
                        'image' =>
                            'assets/images/austenitic-stainless-steel/austenitic-stainless-steel-nitronic-60_10_11zon.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href =
                            $grade['slug'] !== '#'
                                ? url('/materials/austenitic-stainless-steel/' . $grade['slug'])
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/austenitic-stainless-steel/index.blade.php ENDPATH**/ ?>