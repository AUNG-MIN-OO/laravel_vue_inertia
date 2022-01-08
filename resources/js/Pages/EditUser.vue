<template>
    <Master>
        <div  class="card">
            <div class="card-header">
                Welcome Aung Min Oo!
            </div>
            <div class="card-body">
                <div class="alert alert-success alert-dismissible fade show" role="alert" v-show="$page.props.flash.success">
                    <p class="mb-0">{{$page.props.flash.success}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="update">
                    <div class="md-form">
                        <label for="name">User Name</label>
                        <input type="text" id="name" class="form-control" v-model="name" >
                    </div>
                    <div class="md-form">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" v-model="email">
                    </div>
                    <div class="md-form">
                        <label for="password">Password</label>
                        <input type="text" id="password" class="form-control" v-model="password">
                    </div>
                    <div class="input-group mb-3">
                        <div class="w-100 mb-3">
                            <img :src="this.$page.props.auth_user.image" alt="" style="width: 100px;">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                   aria-describedby="inputGroupFileAddon01" @change="selectImage">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        <div class="d-block w-100">
<!--                            <small class="text-danger font-weight-bolder" v-if="errors.image">*{{errors.image[0]}}</small>-->
                        </div>
                    </div>
                    <button class="btn btn-primary float-right">Update</button>
                </form>
            </div>
        </div>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
import {InertiaProgress} from "@inertiajs/progress";
export default {
name: "EditUser",
    components: {Master},
    data() {
        return {
            name: "",
            email:"",
            image:"",
            password:"",
        }
    },
    created() {
        const {name,email} = this.$page.props.auth_user;
        this.name = name;
        this.email = email;
    },
    methods: {
        selectImage(e) {
            this.image = e.target.files[0];
        },

        update(){
            var data = new FormData();
            data.append('name',this.name);
            data.append('email',this.email);
            data.append('password',this.password);
            data.append('image',this.image);

            this.$inertia.post('/edit-profile',data)

        }
    },
}
</script>

<style scoped>

</style>
