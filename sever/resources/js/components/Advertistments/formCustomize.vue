<template>
    <div class="col-12">
<!--        <form  >-->
            <div class="form-group">
                <label >Add Main</label>
                <input type="radio" value="Main" v-model="categoryType" class='mr-2'>

                <label >Add Sub Category</label>
                <input type="radio" value="SubCategory" v-model="categoryType">
            </div>

            <div class="row"  v-if="categoryType == 'SubCategory' ">
                <div class="col-6">
                    <div class="form-group">
                        <label>Enter Sub Category</label>
                        <select class="form-control" v-model="MC_id">
                            <option  v-for="category in categories"  v-if="category.type=='Main'" v-bind:value=" category.id "> {{ category.description }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Enter Sub Category</label>
                        <input class="form-control" v-model="newSubCategory" aria-describedby="emailHelp" placeholder="Enter Sub Category">
                    </div>
                </div>
            </div>

            <div class="row" v-if="categoryType == 'Main' ">
                <div class="col-12">
                    <div class="form-group">
                        <label>Enter Main Category</label>
                        <input class="form-control" v-model="newMainCategory" aria-describedby="emailHelp" placeholder="Enter Main Category">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <ol >
                        <li v-for="category in categories"  v-if="category.type=='Main'" @click="getMainCategoryId(category.id)">
                            {{ category.description }} <span class="badge badge-danger badge-pill"> - </span>
                        </li>
                    </ol>
                </div>
                <div class="col-8">
                    <ol class="d-flex flex-wrap ">
                        <li v-for="category in categories"  v-if=" category.MC_id == mainCategoryId " class="mr-5" >
                            {{ category.description }} <span class="badge badge-danger badge-pill"> - </span>
                        </li >
                    </ol>
                </div>
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
                newSubCategory:null,
                newMainCategory:null,
                tempStoreCategories:null,
                MC_id:null,
                categoryType:null,
                mainCategoryId:null
            }
        },
        computed:{
            categories:function () {
                    axios.get('/AdCategory/',{}).then(response=>{
                         this.tempStoreCategories=response.data
                    })
                return this.tempStoreCategories
                },

        },

        methods:{
            submit(){
                if(this.categoryType == 'SubCategory'){
                    axios.post('/AdCategory/store' , {
                        newSubCategory:this.newSubCategory,
                        MC_id:this.MC_id,
                        categoryType:this.categoryType
                    }).then(res => {

                    }).catch(error => {
                        console.log(error.response)
                    });
                }else if(this.categoryType == 'Main'){
                    axios.post('/AdCategory/store' , {
                        newMainCategory:this.newMainCategory,
                        MC_id:this.MC_id,
                        categoryType:this.categoryType
                    }).then(res => {

                    }).catch(error => {
                        console.log(error.response)
                    });
                }
            },
            getMainCategoryId(id){
                this.mainCategoryId = id
            }



        }

    }
</script>
