<?php $attributes = $attributes->exceptProps(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')]); ?>
<?php foreach (array_filter((['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="<?php echo e(json_encode(['show' => true, 'style' => $style, 'message' => $message])); ?>"
            :class="{ 'bg-indigo': style == 'success', 'bg-danger': style == 'danger' }"
            x-show="show && message"
            x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    show = true;
                });
            ">
    <div class="container mx-auto py-2 px-md-2 px-sm-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center flex-1">
                <span class="d-flex p-2 rounded-lg" :class="{ 'bg-indigo': style == 'success', 'bg-danger': style == 'danger' }">
                    <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>

                <p class="m-0 ms-3 font-weight-normal text-white" x-text="message"></p>
            </div>

            <div class="flex-shrink-0">
                <button
                    type="button"
                    class="btn btn-link d-flex p-2 rounded-md"
                    aria-label="Dismiss"
                    x-on:click="show = false">
                    <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/vendor/jetstream/components/banner.blade.php ENDPATH**/ ?>