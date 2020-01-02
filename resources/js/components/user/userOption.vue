<template>
    <div class="col-12">
        <div class="row">
            <button class="btn btn-primary btn-sm" @click="myposts">my posts</button>
            <button v-show="user.state == 'Admin' " class="btn btn-primary ml-3 btn-sm" @click="currentReqs">Current Requests <span class="bg-warning rounded ml-1 p-0 pl-1 pr-1">{{reqCount}}</span></button>
            <button  class="btn btn-primary ml-3 btn-sm">All Users</button>
        </div>
        <div class="row mt-5">
            <div class="d-flex justify-content-between">
                <div class="mr-3" v-for="ad in ads">
                    <a :href="'/advertisement/'+ ad.id "><div style="height: 150px; width: 150px" class="bg-danger"></div></a>
                    <div><strong><h4>{{ad.itemName}}</h4></strong></div>
                    <div class="text-secondary">{{ad.description}}</div>
                    <div class="text-secondary">Rs {{ad.price}} /=</div>
                </div>
            </div>
        </div>
        <div class="row">
            <users_index></users_index>
        </div>
    </div>
</template>

<script>
    import users_index from './user_index.vue'
    export default {
        components:{
            users_index
        },
        data:function(){
            return{
                ads: null,
                reqCount:null,
                user:null,
            }
        },
        mounted() {
            axios.get('/reqCount',{}).then(response=>{
                this.reqCount =  response.data
            })

            axios.get('/user/getUserDetails',{}).then(response=>{
                this.user = response.data
            })
        },

        methods:{
            myposts(){
                axios.get('/getAds',{}).then(response=>{
                    this.ads =  response.data
                })
            },
            currentReqs(){
                axios.get('/currentReqs',{}).then(response=>{
                    this.ads =  response.data
                })
            },

        },


    }
</script>
