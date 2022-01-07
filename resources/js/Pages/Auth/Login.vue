<template>
    <div class="container mt-5">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    <form action="" @submit.prevent="login">
                        <div class="md-form">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" v-model="email">
                            <small class="text-danger font-weight-bolder" v-if="errors.email">*{{errors.email[0]}}</small>
                        </div>
                        <div class="md-form">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control"  v-model="password">
                            <small class="text-danger font-weight-bolder" v-if="errors.password">*{{errors.password[0]}}</small>
                        </div>
                        <button class="btn btn-primary float-right">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        errors: Object,
    },
    name: "Login",
    data() {
        return {
            email: "",
            password:"",
        }
    },

    methods: {
        login() {
            var data = new FormData();
            data.append('email',this.email);
            data.append('password',this.password);
            this.$inertia.post('/login',data);
        }
    },


}
</script>

<style scoped>

</style>
