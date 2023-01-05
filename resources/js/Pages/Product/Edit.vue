<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import UpdateProduct from '@/Pages/Product/Partials/UpdateProduct.vue';


defineProps({
    product: Object,
});

</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products Update
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <UpdateProduct :product="$page.props.product"/>
            </div>
        </div>
    </AppLayout>
</template>
