<template>
    <div class="row">
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="examp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <select name="" id="">
                                <option v-for="category in categories">{{ category.category }}</option>
                            </select>
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
        components:{

        },
        mounted() {
            axios.get('/AdCategory/',{}).then(response=>{
                this.categories =  response.data
            })
        },
        data:function(){
            return{
                categories:null
            }
        },
        methods:{

        }

    }
</script>
