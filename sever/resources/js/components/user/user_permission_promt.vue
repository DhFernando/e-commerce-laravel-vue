<template>
    <div class="row">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Permission SerUp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form :action="'/permission/' + user_id +'/update'" method="get" enctype="multipart/form-data">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Advertisement</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <table class="table mt-0">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Update</th>
                                                <th scope="col">Permission Set </th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Make Admin</th>
                                                <th scope="col">User Block</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox"  name="userUpdate" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox"  name="userSetPermission" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox"  name="userDelete" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="userMakeAdmin" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="userSetBlock" value="1">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <table class="table mt-0">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Approve</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox"  name="advertisementApprove" value="1">
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="advertisementDelete" value="1">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                                <button>save</button>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['user_id'],
        data:function(){
            return{

            }
        },
    }
</script>
