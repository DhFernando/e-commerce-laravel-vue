<template>
    <div class="col-12 m-0 p-0 d-flex bd-highlight">
        <div class="form-group mr-1 flex-fill bd-highlight">
            <label >Category</label>
            <select class="form-control" v-model="MC_id" name="category"  @change="findSC">
                <option  v-for="categoryz in categories" v-bind:value=" categoryz.id" v-if="categoryz.type == 'Main'"> {{ categoryz.description }}</option>
            </select>
        </div>
        <div class="form-group ml-1 mr-1 flex-fill bd-highlight">
            <label >Sub Category</label>
            <select class="form-control"  name="subCategory">
                <option  v-for="SC in SCs" v-bind:value="SC.id "> {{ SC.description }}</option>
            </select>
        </div>
        <div class="form-group ml-1 flex-fill bd-highlight">
            <label >Location</label>
            <select name="location" type="text" class="form-control">
                <option>Gampaha</option>
                <option>Colombo</option>
            </select>
        </div>
    </div>



</template>

<script>
    export default {
        data:function(){
            return{
                category:null,
                categories:null,
                MC_id:null,
                SCs:null
            }
        },
        mounted() {
            axios.get('/AdCategory/',{}).then(response=>{
                this.categories =  response.data
            })
        },
        computed:{

        },
        methods:{
            findSC(){
                axios.post('/AdCategory/findSC' , {
                    MC_id:this.MC_id
                }).then(res => {
                    this.SCs = res.data
                }).catch(error => {
                    console.log(error.response)
                });
            }
        }
    }
</script>
