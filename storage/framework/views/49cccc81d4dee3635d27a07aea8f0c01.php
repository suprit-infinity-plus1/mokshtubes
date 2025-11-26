<?php $__env->startSection('title', 'Copper Alloys: CU-Ni, Brass, Bronze | MokshTubes'); ?>
<?php $__env->startSection('meta_description', 'Discover premium copper alloys including CU-Ni, brass, bronze, and beryllium copper at MokshTubes, with excellent durability and corrosion resistance.'); ?>
<?php $__env->startSection('meta_keywords', 'Copper alloys, CU-Ni, brass, bronze, beryllium copper, corrosion resistant copper, high conductivity copper, durable copper alloys, marine copper alloy, industrial copper alloy'); ?>
<?php $__env->startSection('og_image', asset('assets/images/copper-alloys/copper-alloys-banner.webp')); ?>
<?php $__env->startSection('og_type', 'article'); ?>
<?php $__env->startSection('content'); ?>

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/copper-alloys/copper-alloys-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Copper Alloy Materials <br> Durable & Reliable Solutions</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Copper Alloys</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Copper Alloys family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Copper Alloys Aluminium Bronze',
                        'slug' => 'copper-alloys-aluminium-bronze',
                        'image' => 'assets/images/copper-alloys/copper alloys aluminium bronze.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Beryllium Copper',
                        'slug' => 'copper-alloys-beryllium-copper',
                        'image' => 'assets/images/copper-alloys/copper-alloys-beryllium-copper.webp',
                    ],
                    [
                        'name' => 'Copper Alloys C44300',
                        'slug' => 'copper-alloys-c44300',
                        'image' => 'assets/images/copper-alloys/copper-alloys-c44300.webp',
                    ],
                    [
                        'name' => 'Copper Alloys C46400',
                        'slug' => 'copper-alloys-c46400',
                        'image' => 'assets/images/copper-alloys/copper-alloys-c46400.webp',
                    ],
                    [
                        'name' => 'Copper Alloys C63000',
                        'slug' => 'copper-alloys-c63000',
                        'image' => 'assets/images/copper-alloys/Copper Alloys C63000.webp',
                    ],
                    [
                        'name' => 'Copper Alloys C71500',
                        'slug' => 'copper-alloys-c71500',
                        'image' => 'assets/images/copper-alloys/copper-alloys-c71500.webp',
                    ],
                    [
                        'name' => 'Copper Alloys C71520',
                        'slug' => 'copper-alloys-c71520',
                        'image' => 'assets/images/copper-alloys/copper-alloys-c71520.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Cartridge Brass',
                        'slug' => 'copper-alloys-cartridge-brass',
                        'image' => 'assets/images/copper-alloys/copper-alloys-cartridge-brass.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Cu Ni 70_30',
                        'slug' => 'copper-alloys-cu-ni-70-30',
                        'image' => 'assets/images/copper-alloys/copper-alloys-cu-ni-70_30.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Cu Ni-90_10',
                        'slug' => 'copper-alloys-cu-ni-90-10',
                        'image' => 'assets/images/copper-alloys/copper-alloys-cu-ni-90_10.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Ec Copper',
                        'slug' => 'copper-alloys-ec-copper',
                        'image' => 'assets/images/copper-alloys/copper-alloys-ec-copper.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Etp Copper',
                        'slug' => 'copper-alloys-etp-copper',
                        'image' => 'assets/images/copper-alloys/copper-alloys-etp-copper.webp',
                    ],
                    [
                        'name' => 'Copper Alloys Navel Brass',
                        'slug' => 'copper-alloys-navel-brass',
                        'image' => 'assets/images/copper-alloys/copper-alloys-navel-brass.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/copper-alloys/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/copper-alloys/index.blade.php ENDPATH**/ ?>