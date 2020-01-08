<template>
    <div class="col-12 m-0 p-0 d-flex bd-highlight">
        <div class="form-group mr-1 flex-fill bd-highlight">
            <label >Category</label>
            <select name="category" v-model="selectedCategory" type="text" class="form-control">
                <option v-for="category in categories">{{category}}</option>
            </select>
        </div>
        <div class="form-group ml-1 mr-1 flex-fill bd-highlight">
            <label >sub Category</label>
            <select name="subCategory"  type="text" class="form-control">
                <option v-for="subCategory in subCategories">{{subCategory}}</option>
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
                categories:[
                    'Electronic','Lands','Foods'
                ],
                subCategoryElectronic:[
                    'phone','handfree','speaker'
                ],
                subCategoryLands:[
                    'Big','Small'
                ],
                selectedCategory:null,
                v:8
            }
        },
        computed:{
            subCategories:function(){
                if(this.selectedCategory == 'Electronic'){
                    return this.subCategoryElectronic
                }else if(this.selectedCategory == 'Lands'){
                    return this.subCategoryLands
                }
            }
        }
    }
</script>
