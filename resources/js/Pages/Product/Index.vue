<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AllProductListTable from '@/Pages/Product/Partials/AllProductListTable.vue';

defineProps({
    products: Array,
});
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products {{$page.props.user.name}}
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <AllProductListTable :products="$page.props.products" />
            </div>
        </div>
    </AppLayout>
</template>
