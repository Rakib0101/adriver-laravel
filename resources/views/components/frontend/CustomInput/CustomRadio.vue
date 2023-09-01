<template>
    <div class="flex custom-radio">
        <input type="radio" :name="name" :id="id" />
        <label :for="id" class="cursor-pointer text-sm select-none">{{label}}</label>
    </div>
</template>
<script>
    export default{
        props:{
            name:{
                type: String,
                default: ''
            },
            id:{
                type: String,
                default: ''
            },
            label:{
                type: String,
                default: ''
            }
        }
    }
</script>