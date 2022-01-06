<template>
    <div class="container mt-5">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-header text-center font-weight-bolder text-uppercase">Register Form</div>
                <div class="card-body">
                    <form action="" class="">
                        <div class="md-form">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="md-form">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                        <div class="input-group mb-3    ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
name: "Register"
}
</script>

<style scoped>

</style>
