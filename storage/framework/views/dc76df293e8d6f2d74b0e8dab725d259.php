<?php $__env->startSection('title', 'Monel Alloys – Nickel-Copper Grades | MokshTubes'); ?> <!-- 53 chars -->
<?php $__env->startSection('meta_description', 'Explore Monel 400, K500 & R405 alloys—offering superior corrosion and impact resistance for marine, chemical, and oil & gas applications.'); ?>
<?php $__env->startSection('meta_keywords', 'Monel Alloys, Monel 400, Monel K500, Monel R405, Nickel-Copper Alloys, Marine Industry Alloys, Chemical Processing Alloys, Oil and Gas Alloys, Corrosion Resistant Alloys, Impact Resistant Alloys'); ?>

<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Monel Alloys <br> Nickel-Copper Grades for Industrial Applications</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Monel Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Monel family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Monel K500',
                        'slug' => 'monel-k500',
                        'image' => 'assets/images/monel/Monel-400.webp'
                    ],
                    [
                        'name' => 'Monel R405',
                        'slug' => 'monel-r405',
                        'image' => 'assets/images/monel/Monel-R405.webp'
                    ],
                    [
                        'name' => 'Monel 400',
                        'slug' => 'monel-400',
                        'image' => 'assets/images/material/monel-400.jpg'
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/monel/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/frontend/materials/monel/index.blade.php ENDPATH**/ ?>