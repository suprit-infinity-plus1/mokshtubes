<?php $__env->startSection('meta_title', 'Hastelloy Alloys | Grades, Properties & Applications | Mokshtubes'); ?>

<?php $__env->startSection('meta_description', 'Explore the full range of Hastelloy alloys including C276, C22, B2, and G30. Ideal for corrosion resistance in chemical, marine, and power plant industries.'); ?>
<?php $__env->startSection('meta_keywords', 'Hastelloy C276, Hastelloy C22, Hastelloy B2, corrosion resistant alloys, nickel alloys, chemical processing materials, marine grade alloys, oil and gas materials, industrial alloy solutions'); ?>  

<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/hastelloy/hastelloy-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Hastelloy Alloys: C276, C22, B2 <br> Corrosion Resistant Nickel Alloys</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Hastelloy Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Hastelloy family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Hastelloy C276',
                        'slug' => 'hastelloy-c276',
                        'image' => 'assets/images/hastelloy/hastelloy-c276.webp',
                    ],
                    [
                        'name' => 'Hastelloy C22',
                        'slug' => 'hastelloy-c22',
                        'image' => 'assets/images/hastelloy/hastelloy-c22.webp',
                    ],
                    [
                        'name' => 'Hastelloy C4',
                        'slug' => 'hastelloy-c4',
                        'image' => 'assets/images/hastelloy/hastelloy-C4.webp',
                    ],
                    [
                        'name' => 'Hastelloy B2',
                        'slug' => 'hastelloy-b2',
                        'image' => 'assets/images/hastelloy/hastelloy-b2.webp',
                    ],
                    [
                        'name' => 'Hastelloy B3',
                        'slug' => 'hastelloy-b3',
                        'image' => 'assets/images/hastelloy/Hastelloy-B3.webp',
                    ],
                    [
                        'name' => 'Hastelloy C2000',
                        'slug' => 'hastelloy-c2000',
                        'image' => 'assets/images/hastelloy/hastelloy-c2000.webp',
                    ],
                    [
                        'name' => 'Hastelloy G3',
                        'slug' => 'hastelloy-g3',
                        'image' => 'assets/images/hastelloy/hastelloy-G3.webp',
                    ],
                    [
                        'name' => 'Hastelloy G30',
                        'slug' => 'hastelloy-g30',
                        'image' => 'assets/images/hastelloy/Hastelloy-G30.webp',
                    ],
                    [
                        'name' => 'Hastelloy X',
                        'slug' => 'hastelloy-x',
                        'image' => 'assets/images/hastelloy/hastelloy-x.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/hastelloy/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/hastelloy/index.blade.php ENDPATH**/ ?>