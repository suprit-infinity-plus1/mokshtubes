<?php $__env->startSection('title', 'Incoloy Alloys 800, 825, 925 | Nickel-Iron-Chromium Supplier'); ?>
<?php $__env->startSection('meta_description',
    'Incoloy 800, 825 & 925 alloys from Moksh Tubes — high strength, oxidation-resistant &
    corrosion-protected for chemical, marine & high-temperature use.'); ?>
<?php $__env->startSection('meta_keywords',
    'Incoloy Alloys, Corrosion Resistant Incoloy, Heat Resistant Incoloy, Incoloy Pipes, Incoloy
    Tubes, Incoloy Fittings, Chemical Industry Incoloy, Power Industry Incoloy, Industrial Incoloy Alloys, High Performance
    Incoloy, Industrial Heat Resistant Alloys'); ?>

<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/incoloy/incoloy-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Incoloy Alloys <br> High Strength, Heat & Corrosion Resistance</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Inconel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the incoloy family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Incoloy 825',
                        'slug' => 'incoloy-825',
                        'image' => 'assets/images/incoloy/incoloy-825.webp',
                    ],
                    [
                        'name' => 'Incoloy 800',
                        'slug' => 'incoloy-800',
                        'image' => 'assets/images/incoloy/incoloy-800.webp',
                    ],
                    [
                        'name' => 'Incoloy 925',
                        'slug' => 'incoloy-925',
                        'image' => 'assets/images/incoloy/incoloy-925.webp',
                    ],
                    [
                        'name' => 'Incoloy 800h / 800ht',
                        'slug' => 'incoloy-800h-800ht',
                        'image' => 'assets/images/incoloy/incoloy-800h_800ht.webp',
                    ],
                    [
                        'name' => 'Incoloy 020',
                        'slug' => 'incoloy-020',
                        'image' => 'assets/images/incoloy/incoloy-020.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/incoloy/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/incoloy/index.blade.php ENDPATH**/ ?>