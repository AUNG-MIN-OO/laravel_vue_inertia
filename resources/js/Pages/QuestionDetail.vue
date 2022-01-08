<template>
    <Master>
        <div class="card">
            <div class="card-header">
                <span class="font-weight-bolder text-capitalize badge badge-danger">!need fixed</span>
                <span class="">What is HTML?</span>
                <a href="" class="badge badge-danger p-1 float-right"><i class="fas fa-trash-alt"></i></a>
                <a href="" class="badge badge-success p-1 float-right mr-2"><i class="fas fa-check"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--                                    categories-->
                        <div class="mb-3">
                            <span class="badge badge-pill badge-primary py-1 px-2">Frontend Development</span>
                            <span class="badge badge-pill badge-primary py-1 px-2">Android Development</span>
                        </div>
                        <!--                                 end   categories-->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at dolorem fugiat fugit, impedit, incidunt laborum nihil quae quaerat quam quo quod quos, sed sint ut voluptate voluptatem! Dolorum, voluptatem!</p>
                    </div>
                </div>
                <div class="row">
                    <!--                            like box-->
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <i class="fas fa-heart text-danger"></i>
                                <small>4</small>
                            </div>
                            <div class="">
                                <i class="fas fa-comment text-primary"></i>
                                <small>11</small>
                            </div>
                            <div class="">
                                <i class="fas fa-save text-success"></i>
                                <small>5</small>
                            </div>
                        </div>
                    </div>
                    <!--                            like box-->
                </div>
                <hr>
                <h6 class="mb-3">All Comments</h6>
                <div class="row mb-4">
                    <div class="col-1">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                             class="rounded-circle" style="width: 50px;height: 50px;" alt="" />
                    </div>

                    <div class="col-11">
                        <div class="ml-2 bg-light px-2 rounded">
                            <p class="mb-2"><strong>Antonia Velez</strong> <small class="text-muted">1 min ago</small></p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Distinctio est ab iure inventore dolorum consectetur?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
export default {
name: "QuestionDetail",
    components: {Master}
}
</script>

<style scoped>

</style>
