<?php $__env->startSection('title', 'Haynes Superalloys: 188, 230, 242, 160 | MokshTubes'); ?>
<?php $__env->startSection('meta_description', 'Haynes superalloys 188, 230, 242 & 160 – extreme strength, oxidation-resistant, and durable for demanding industrial applications.'); ?>
<?php $__env->startSection('meta_keywords', 'Haynes Superalloys, Haynes 188, Haynes 230, Haynes 242, Haynes 160, High-Temperature Alloys, Corrosion Resistant Alloys, Industrial Superalloys, Heat Resistant Alloys, Nickel-Based Superalloys, Aerospace Alloys, Power Generation Alloys'); ?>

<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Haynes Superalloys 188, 230, 242, 160</h1>

                </div>
            </div>
        </div>
    </section>

    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Haynes Superalloys Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Haynes Superalloys family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'haynes-superalloys 160',
                        'slug' => 'haynes-superalloys-160',
                        'image' => 'assets/images/haynes/haynes-alloy-160.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 188',
                        'slug' => 'haynes-superalloys-188',
                        'image' => 'assets/images/haynes/haynes-alloy-188.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 230',
                        'slug' => 'haynes-superalloys-230',
                        'image' => 'assets/images/haynes/haynes-230.webp',
                    ],
                    [
                        'name' => 'haynes-superalloys 242',
                        'slug' => 'haynes-superalloys-242',
                        'image' => 'assets/images/haynes/haynes-242.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/haynes-superalloys/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/haynes-superalloys/index.blade.php ENDPATH**/ ?>