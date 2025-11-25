<?php $__env->startSection('title', 'Duplex & Super Duplex Steels | MokshTubes'); ?>
<?php $__env->startSection('meta_description', 'Explore Duplex & Super Duplex stainless steels like S31803, 2205, 2507 & S32760—known for strength, corrosion resistance & durability.'); ?>
<?php $__env->startSection('meta_keywords', 'Engineering steels, EN8 steel, EN19 steel, 1045 steel, 4140 steel, high strength steel, tough steel, industrial alloy steel, mechanical steel'); ?>
<?php $__env->startSection('og_image', asset('assets/images/product/duplex-banner.jpg')); ?>
<?php $__env->startSection('og_type', 'article'); ?>
<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/duplex-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Duplex & Super Duplex</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Duplex & Super Duplex Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Duplex & Super Duplex family.</p>
            </div>

            <?php
                $grades = [
                    ['name' => 'Duplex S31803', 'slug' => 'duplex-s31803', 'image' => 'assets/images/engineering-steels/engineering-steels-1045.webp'],
                    ['name' => 'Super Duplex 2205', 'slug' => 'super-duplex-2205', 'image' => 'assets/images/engineering-steels/engineering-steels-1055.webp'],
                    ['name' => 'Super Duplex 2507', 'slug' => 'super-duplex-2507', 'image' => 'assets/images/engineering-steels/engineering-steels-4130.webp'],
                    ['name' => 'Super Duplex S32760', 'slug' => 'super-duplex-s32760', 'image' => 'assets/images/engineering-steels/engineering-steels-4140.webp'],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/duplex-and-super-duplex/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/duplex-and-super-duplex/index.blade.php ENDPATH**/ ?>