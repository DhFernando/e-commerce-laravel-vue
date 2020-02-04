<template>
    <div class="col-12">
<!--        <form  >-->
            <div class="form-group">
                <select class="form-control" v-model="MC_id">
                    <option  v-for="categoryz in categories" v-bind:value=" categoryz.id "> {{ categoryz.description }}</option>
                </select>
            </div>

            <div class="form-group">
                <label>Add Category</label>
                <input class="form-control" v-model="newCategory" aria-describedby="emailHelp" placeholder="Enter Category">
            </div>
            <button type="submit" @click="submit()" class="btn btn-sm btn-primary mt-3">Submit</button>
<!--        </form>-->
        {{ test }}

    </div>
</template>

<script>
    export default {
        components:{

        },
        mounted() {
            axios.get('/AdCategory/',{}).then(response=>{
                this.categories =  response.data
            })
        },
        data:function(){
            return{
                newCategory:null,
                categories:null,
                MC_id:null,
                test:null
            }
        },
        computed:{

        },

        methods:{
            submit(){
                axios.post('/AdCategory/store' , {
                    newCategory:this.newCategory,
                    MC_id:this.MC_id
                }).then(res => {
                    this.test = res.data
                }).catch(error => {
                    console.log(error.response)
                });
            },
        }

    }
</script>
