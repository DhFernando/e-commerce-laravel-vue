<template>
    <div class="col-12">
<!--        <form>-->
            <div class="form-group">
                <label>Add Category</label>
                <input class="form-control" v-model="categories" aria-describedby="emailHelp" placeholder="Enter Category">
            </div>
            <button type="submit" @click="v()" class="btn btn-sm btn-primary mt-3">Submit</button>
<!--        </form>-->
    </div>
</template>

<script>
    export default {
        components:{

        },
        mounted() {
            // axios.get('/AdCategory/',{}).then(response=>{
            //     this.categories =  response.data
            // })
        },
        data:function(){
            return{
                categories:'v'
            }
        },
        methods:{
            v(){
                alert(this.categories)
            }
        }

    }
</script>
