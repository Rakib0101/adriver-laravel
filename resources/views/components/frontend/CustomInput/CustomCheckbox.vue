<template>
    <div class="flex custom-checkbox">
        <input type="checkbox" :name="name" :id="id" />
        <label :for="id" class="cursor-pointer text-sm select-none">{{label}}</label>
    </div>
</template>
<script>
    export default {
        props: {
            name: {
                type: String,
                default: ''
            },
            id: {
                type: String,
                default: ''
            },
            label: {
                type: String,
                default: ''
            }
        }
    }
</script>