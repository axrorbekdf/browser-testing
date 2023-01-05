<script setup>
import { ref } from 'vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import FormSection from '@/Components/FormSection.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

// import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';


// const name = ref(null);
// const price = ref(null);

// defineProps({
//     products: Array,
// });

const form = useForm({
    name: '',
    price: '',
});

const saqlash = () => {
    form.post(route('products.store'), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            // 
        },
    });
};

</script>

<template>
    <Head title="Secure Area" />
    <FormSection @submitted="saqlash">
        <template #title>
            Profile Information
        </template>

        <template #description>
            Update your account's profile information and email address.
        </template>

        <template #form>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="name"
                />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Price -->
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="price" value="Price" />
                <TextInput
                    id="price"
                    v-model="form.price"
                    type="number"
                    class="mt-1 block w-full"
                    autocomplete="price"
                />
                <InputError :message="form.errors.price" class="mt-2" />
            </div>
            
        </template>

        <template #actions>

            <PrimaryButton id="submitButton">
                Save
            </PrimaryButton>
        </template>
        
    </FormSection>
    
</template>
