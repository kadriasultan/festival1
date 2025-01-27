<?php $__env->startSection('content'); ?>
    <h1>Reservering voor <?php echo e($concert->name ?? 'Onbekend concert'); ?></h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('concert.reserve.submit', ['slug' => $concert->slug])); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Naam</label>
            <input type="text" id="name" name="name" class="p-2 border border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">E-mail</label>
            <input type="email" id="email" name="email" class="p-2 border border-gray-300 rounded w-full" required>
        </div>
        <div class="mb-4">
            <label for="concert" class="block text-gray-700">Concert</label>
            <input type="text" id="concert" name="concert" value="<?php echo e($concert->name); ?>" class="p-2 border border-gray-300 rounded w-full" readonly>
        </div>
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Reserveer</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kadri\Desktop\festival1\resources\views/reserve/index.blade.php ENDPATH**/ ?>