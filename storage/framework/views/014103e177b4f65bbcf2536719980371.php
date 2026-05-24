<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="justify-content-center">
            <form action="/skaiciuok" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="weight">
                <input type="text" name="height">
                <button class="" type="submit">Skaičiuoti</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marty\skaiciuokle2026\resources\views/welcome.blade.php ENDPATH**/ ?>