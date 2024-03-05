<SpladeRehydrate :name='<?php echo json_encode($name, 15, 512) ?>' <?php echo e($attributes->mergeVueBinding(':on', json_encode($on))->mergeVueBinding(':passthrough', $passthroughValue())); ?>>
    <?php echo e($slot ?? ""); ?>

</SpladeRehydrate><?php /**PATH C:\OSPanel\domains\mariz\matiz\laravel-splade-basic-anime\vendor\protonemedia\laravel-splade\src/../resources/views/functional/rehydrate.blade.php ENDPATH**/ ?>