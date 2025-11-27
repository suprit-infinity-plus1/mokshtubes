<?php $__env->startSection('title', 'Industrial Pipes, Tubes & Fittings – Mokshtubes LLP'); ?> <!-- 52 characters -->
<?php $__env->startSection('meta_description',
    'Explore pipes, tubes, fittings, flanges & fasteners in stainless steel, nickel alloys, and titanium. Global delivery.'); ?> <!-- 153 characters -->
<?php $__env->startSection('meta_keywords',
    'Pipe Fittings, Flanges, Fasteners, Stainless Steel Fittings, Nickel Alloy Fittings, Titanium Fittings, Custom Fabricated Fittings'); ?>
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Pipe Fittings, Flanges & Fasteners</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>




    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Pipe Fittings Flanges Fasteners Types</h2>
            </div>

            <div class="row g-4">
                <?php
                    $types = [
                        [
                            'name' => 'Fittings And Flanges',
                            'slug' => 'fittings-and-flanges',
                            'image' => 'assets/images/product/flangs/Flanges-&-Pipe-Fittings.webp',
                        ],
                        [
                            'name' => 'Flanges And Gaskets',
                            'slug' => 'flanges-and-gaskets',
                            'image' => 'assets/images/product/flangs/Flange-Gaskets.webp',
                        ],
                        [
                            'name' => 'Custom Fabricated Fittings',
                            'slug' => 'custom-fabricated-fittings',
                            'image' => 'assets/images/product/flangs/custom-fabricated-fittings.webp',
                        ],
                        [
                            'name' => 'Fasteners',
                            'slug' => 'fasteners',
                            'image' => 'assets/images/product/flangs/FASTENERS.webp',
                        ],
                        [
                            'name' => 'Pipe Fittings ',
                            'slug' => 'pipe-fittings ',
                            'image' => 'assets/images/product/flangs/Pipe-Fittings.webp',
                        ],
                    ];
                ?>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
    <a href="<?php echo e(url('/products/pipe-fittings-flanges-fasteners/' . $type['slug'])); ?>" class="text-decoration-none d-block h-100">
        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
             style="border-color: #db7227; transition: 0.3s;">

            <img src="<?php echo e(asset($type['image'] ?? 'assets/images/default.webp')); ?>"
                 alt="<?php echo e($type['name']); ?>"
                 class="img-fluid rounded mb-3"
                 style="border-radius: 8px;">

            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                style="background-color: #174268; color: #fff; display: inline-block;">
                <?php echo e($type['name']); ?>

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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/products/pipe-fittings-flanges-fasteners/index.blade.php ENDPATH**/ ?>