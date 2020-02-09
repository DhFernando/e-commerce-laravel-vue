<template>
    <div class="row">
        <div class="col-6">
            <img v-bind:src="imagePreview" style="width:200px" class="preview-image border" @click="openUpload" alt="">
            <input type="file" name="image" id="file-field" v-on:change="updatePreview" style="display: none">
        </div>
        <div class="col-6">
        </div>
    </div>
</template>

<script>
    export default {
        data:function(){
            return{
                imagePreview:'/images/Placeholder.jpg'
            }
        },

        methods:{
            openUpload() {
                document.getElementById('file-field').click()
            },

            updatePreview(e){
                let reader, files = e.target.files;
                if(files.length === 0){
                    console.log('empty')
                }
                    reader = new FileReader()
                    reader.onload = (e) =>{
                        this.imagePreview =  e.target.result
                    }
                    reader.readAsDataURL(files[0])

            }
        }
    }
</script>
