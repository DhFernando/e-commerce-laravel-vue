<template>
    <div class="col-12">
<!--        <form  >-->
            <div class="form-group">
                <select class="form-control" v-model="MC_id">
                    <option  v-for="categoryz in categories"  v-if="categoryz.type=='Main'" v-bind:value=" categoryz.id "> {{ categoryz.description }}</option>
                </select>
            </div>

            <div class="form-group">
                <label>Add Category</label>
                <input class="form-control" v-model="newCategory" aria-describedby="emailHelp" placeholder="Enter Category">
            </div>

            <div class="form-group">
                <select class="form-control" v-model="MC_id">
                    <option  v-for="categoryz in categories"  v-if="categoryz.type=='subcategory'" v-bind:value=" categoryz.id "> {{ categoryz.description }}</option>
                </select>
            </div>

            <button type="submit" @click="submit()" class="btn btn-sm btn-primary mt-3 ml-1 float-right">Submit</button>
            <button type="button" class="btn btn-sm btn-secondary mt-3 float-right" data-dismiss="modal">Close</button>

<!--        </form>-->
    </div>
</template>

<script>
    export default {
        components:{

        },
        mounted() {

        },
        data:function(){
            return{
                newCategory:null,
                tempStoreCategories:null,
                MC_id:null
            }
        },
        computed:{
            categories:function () {
                    axios.get('/AdCategory/',{}).then(response=>{
                         this.tempStoreCategories=response.data
                    })
                    return this.tempStoreCategories
                }
        },

        methods:{
            submit(){
                axios.post('/AdCategory/store' , {
                    newCategory:this.newCategory,
                    MC_id:this.MC_id
                }).then(res => {

                }).catch(error => {
                    console.log(error.response)
                });
            },
        }

    }
</script>
