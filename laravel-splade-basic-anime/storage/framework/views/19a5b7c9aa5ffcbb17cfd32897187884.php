<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal9f93807798659eeec3d6d3a3f12702f0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f93807798659eeec3d6d3a3f12702f0 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
 <?php $__env->slot('trigger', null, []); ?> <?php echo e($trigger); ?> <?php $__env->endSlot(); ?>
<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f93807798659eeec3d6d3a3f12702f0)): ?>
<?php $attributes = $__attributesOriginal9f93807798659eeec3d6d3a3f12702f0; ?>
<?php unset($__attributesOriginal9f93807798659eeec3d6d3a3f12702f0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f93807798659eeec3d6d3a3f12702f0)): ?>
<?php $component = $__componentOriginal9f93807798659eeec3d6d3a3f12702f0; ?>
<?php unset($__componentOriginal9f93807798659eeec3d6d3a3f12702f0); ?>
<?php endif; ?><?php /**PATH C:\OSPanel\domains\mariz\matiz\laravel-splade-basic-anime\storage\framework\views/a9f752962e9cfff997e49cb1af51c84e.blade.php ENDPATH**/ ?>