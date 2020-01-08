<template>
    <div class="row">
        <div class="col-12">
            <table class="table flued">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">State</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <th scope="row" v-on:click="getUser(user.id)" class="text-primary" data-toggle="modal" data-target="#exampleModal" >{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.state}}</td>
                    <td>{{user.created_at}}</td>
                    <td><a class="btn btn-sm btn-danger text-white">Block</a></td>
                </tr>
                </tbody>
            </table>
            <user_show_promt :s_user='s_user' ></user_show_promt>
        </div>
    </div>
</template>

<script>
    import user_show_promt from "./user_show_promt"
    export default {
        components:{
            user_show_promt
        },
        mounted() {
            axios.get('/user/getAllUsers',{}).then(response=>{
                this.users =  response.data
            })
        },
        data:function(){
            return{
                users: null,
                s_user: {
                    user:null,
                    userAd: null
                }
            }
        },
        methods:{
            getUser(id){
                axios.get("/user/"+id+"/s_user",{}).then(response=>{
                    this.s_user.user =  response.data.user
                    this.s_user.userAd = response.data.userAd
                })
            }
        }

    }
</script>
