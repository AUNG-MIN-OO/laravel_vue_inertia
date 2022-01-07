<template>
    <div class="container mt-5">
<!--        <div class="spinner-grow" v-show="loading" role="status" style="position: fixed;top: 50%;left: 50%;z-index: 1000">-->
<!--        </div>-->
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-header text-center font-weight-bolder text-uppercase">Register Form</div>
                <div class="card-body">
                    <form @submit.prevent="register">
                        <div class="md-form">
                            <label for="name">User Name</label>
                            <input type="text" id="name" class="form-control" v-model="name">
                            <small class="text-danger font-weight-bolder" v-if="errors.name">*{{errors.name[0]}}</small>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01" @change="selectImage">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            <div class="d-block w-100">
                                <small class="text-danger font-weight-bolder" v-if="errors.image">*{{errors.image[0]}}</small>
                            </div>
                        </div>
                        <button class="btn btn-primary float-right">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {errors:Object},
    name: "Register",
    data() {
        return {
            name:"",
            email:"",
            password:"",
            image:"",
        }
    },

    methods: {

        selectImage(e) {
            this.image = e.target.files[0];
        },

        register(){
            let data = new FormData();
            data.append('name',this.name);
            data.append('email',this.email);
            data.append('password',this.password);
            data.append('image',this.image);
            this.$inertia.post('/register',data)
        }
    },
}
</script>

<style scoped>

</style>
