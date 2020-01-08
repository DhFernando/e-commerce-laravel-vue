<template>
    <div class="row">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ s_user.user.name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                           <div class="col-7">
                               <table>
                                   <tbody>
                                       <tr>
                                           <th scope="row">Id</th>
                                           <td>{{s_user.user.id}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">E-Mail</th>
                                           <td>{{s_user.user.email}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">Created @</th>
                                           <td>{{s_user.user.created_at}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">State</th>
                                           <td>{{s_user.user.state}}</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">total ads</th>
                                           <td>{{s_user.userAd.length}}</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="col-5">
                               <div class="bg-danger " style="height: 150px;" ></div>
                           </div>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Set Permission</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['s_user'],
        data:function(){
            return{
            }
        },
    }
</script>
