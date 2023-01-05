<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import CreateProduct from '@/Pages/Product/Partials/CreateProduct.vue';
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products Create
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <CreateProduct/>
            </div>
        </div>
    </AppLayout>
</template>
