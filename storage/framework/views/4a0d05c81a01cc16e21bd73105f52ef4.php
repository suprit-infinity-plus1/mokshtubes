<?php $__env->startSection('title', 'Zirconium Alloys 702, 704, 705 – Corrosion Resistant'); ?> <!-- 52 chars -->
<?php $__env->startSection('meta_description', 'High-purity Zirconium alloys 702, 704, 705 with excellent corrosion resistance and durability for nuclear, chemical, and industrial applications.'); ?>
<?php $__env->startSection('meta_keywords', 'Zirconium Alloys, Zirconium 702, Zirconium 704, Zirconium 705, Corrosion Resistant Zirconium, Nuclear Industry Alloys, Chemical Processing Alloys, Industrial Zirconium Grades, Durable Zirconium Alloys'); ?>

<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/zirconium/zirconium-banner.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Zirconium Alloys 702, 704, 705</h1>
                </div>
            </div>
        </div>
    </section>


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Zirconium Grades</h2>
                <p class="text-muted fs-5 pb-3">Explore all available grades in the Zirconium family.</p>
            </div>

            <?php
                $grades = [
                    [
                        'name' => 'Zirconium 702',
                        'slug' => 'zirconium-702',
                        'image' => 'assets/images/zirconium/zirconium-702.webp',
                    ],
                    [
                        'name' => 'Zirconium 704',
                        'slug' => 'zirconium-704',
                        'image' => 'assets/images/zirconium/zirconium704.webp',
                    ],
                    [
                        'name' => 'Zirconium 705',
                        'slug' => 'zirconium-705',
                        'image' => 'assets/images/zirconium/zirconium-705.webp',
                    ],
                ];
            ?>

            <div class="row g-4">
                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $href = $grade['slug'] !== '#' ? url('/materials/zirconium/' . $grade['slug']) : '#';
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/materials/zirconium/index.blade.php ENDPATH**/ ?>