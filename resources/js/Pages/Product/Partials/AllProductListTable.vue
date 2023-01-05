<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';

defineProps({
    products: Array,
});

const form = useForm({
    _method: 'DELETE'
});


const deleteProduct = (product) => {

    if(!confirm("Rostdan o'chirmoqchisiz?")){
      return 0;
    }

    form.post(route('products.destroy', {'product':product}), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            // 
        },
    });
};

</script>

<template>
    <Head title="Bu yerda barcha tovarlar ro'yhati!" />
    
    <section class="py-1 bg-blueGray-50">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-blueGray-700">List all product</h3>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                   <!-- <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button> -->

                   <NavLink :href="route('products.create')" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                        Create
                    </NavLink>
                </div>
              </div>
            </div>

            <div class="block w-full overflow-x-auto">
              <table class="items-center bg-transparent w-full border-collapse ">
                <thead>
                  <tr>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                      Product name
                    </th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                      Price
                    </th>
                   
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right">
                      Options
                    </th>
                  </tr>
                </thead>

                <tbody>
                  <tr v-for="item in products" :key="item.id">
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                      {{ item.name }}
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      {{ item.price }}
                    </td>
                   
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                        <NavLink :href="route('products.edit', {'product':item})" :method="get" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Edit
                        </NavLink>

                        <!-- :data="{ id: item.id }" -->
                        <!-- :href="route('products.destroy', {'product':item})" -->
                        <NavLink @click="deleteProduct(item)" :method="delete"  class="bg-rose-600 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Delete
                        </NavLink>
                    </td>
                  </tr>
                  
                </tbody>

              </table>
            </div>
          </div>
        </div>
        
    </section>
</template>
