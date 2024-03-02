<?php \ProtoneMedia\Splade\Facades\SEO::title(__('Отзывы')); ?>

<?php if (isset($component)) { $__componentOriginal4619374cef299e94fd7263111d0abc69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4619374cef299e94fd7263111d0abc69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Отзывы')); ?>

            </h2>
            <a href="<?php echo e(route('reviews.create')); ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"><?php echo e(__('Новый отзыв')); ?></a>
        </div>
    <?php $__env->endSlot(); ?>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <?php if (isset($component)) { $__componentOriginal9e290f7144d9abd075e5cf038a814133 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e290f7144d9abd075e5cf038a814133 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Table::resolve(['for' => $reviews] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__env->slot('spladeTableCell78805a221a988e79ef3f42d7c5bfd418', function ($review) use ($__env) { ?>
                <img class="h-16 w-16" src="<?php echo e(Storage::url($review->image)); ?>" alt="">
                <?php }); ?>
                <?php $__env->slot('spladeTableCell418c5509e2171d55b0aee5c2ea4442b5', function ($reviews) use ($__env) { ?>
                    <div class="flex gap-2">
                        <Link href="<?php echo e(route('reviews.destroy', $reviews->id)); ?>" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Отмена" method="DELETE"><?php echo e(__('Удалить')); ?></Link>
                        <Link  href="<?php echo e(route('reviews.edit', $reviews->id)); ?>">Редактировать</Link>
                    </div>
                <?php }); ?>
                <?php $__env->slot('spladeTableCell2c5504ab9a86164db22a92dc8793843d', function ($review) use ($__env) { ?>
                    <?php if($review->rating == 1): ?>
                        <span>
                            <?php echo e(__('⭐️')); ?>

                        </span>
                <?php elseif($review->rating == 2): ?>
                    <span>
                            <?php echo e(__('⭐️⭐️️️️️️')); ?>

                    </span>
                <?php elseif($review->rating == 3): ?>
                    <span>
                            <?php echo e(__('⭐️⭐️️️️️️⭐️')); ?>

                    </span>
                <?php elseif($review->rating == 4): ?>
                    <span>
                            <?php echo e(__('⭐️⭐️⭐️⭐️️️️️️')); ?>

                    </span>
                <?php elseif($review->rating == 5): ?>
                    <span>
                            <?php echo e(__('⭐️⭐️⭐️⭐️⭐️️️️️️')); ?>

                    </span>
                <?php endif; ?>
                <?php }); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $attributes = $__attributesOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__attributesOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $component = $__componentOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__componentOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\laravel-splade-basic-anime\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>