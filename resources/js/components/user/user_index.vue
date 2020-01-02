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
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.state}}</td>
                    <td>{{user.created_at}}</td>
                    <td><a class="btn btn-sm btn-danger text-white">Block</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/user/getAllUsers',{}).then(response=>{
                this.users =  response.data
            })
        },
        data:function(){
            return{
              users: null
            }
        },
        methods:{
            // ads(){
            //     axios.get('/getAd').then(response=>{
            //         return response.data
            //     })
            // }
        }

    }
</script>
