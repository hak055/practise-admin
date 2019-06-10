<template>
    <div class="container">        
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Table</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Add User 
                                    <i class="nav-icon fas fa-user-plus blue"></i>
                            </button>
                        </div>           
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Modify</th>
                        </tr>
                        <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>cas@gmail.ru</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td><a href="" class="fa fa-edit blue"></a>
                            <a href="" class="fa fa-trash red"></a>
                        </td>
                        </tr>                
                    </tbody></table>
                    </div>
                  
                </div>
            </div>
          
        </div>  



        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewLabel">Add new</h5>
                    </div>
                    <form @submit.prevent="CreateUser" methode="">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name"
                                placeholder="name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.email" type="text" name="email"
                                placeholder="email"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.bio" type="text" name="bio"
                                placeholder="bio"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="bio"></has-error>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <select v-model="form.type" id="type" name="type"     
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="">Select user role</option>
                                    <option value="admin">Admin</option>
                                    <option value="standart">Standart</option>
                                    <option value="author">Author</option>
                                </select>
                                <has-error :form="form" field="email"></has-error>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password"
                                placeholder="password"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>     
            </div>
    
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        methods: {
            CreateUser(){
                this.form.post('api/user');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
