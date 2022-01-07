<template>
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="https://mdbgo.com/">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                        height="16"
                        alt="MDB Logo"
                        loading="lazy"
                        style="margin-top: -1px;"
                    />
                </a>

                <!-- Toggle button -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample"
                    aria-controls="navbarButtonsExample"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarButtonsExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-link px-3 me-2">
                            Login
                        </button>
                        <button type="button" class="btn btn-primary me-3">
                            Sign up for free
                        </button>
                        <a
                            class="btn btn-dark px-3"
                            href="https://github.com/mdbootstrap/mdb-ui-kit"
                            role="button"
                        ><i class="fab fa-github"></i
                        ></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <!--        content-->
        <div class="container mt-5 p-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="position-fixed">
                        <a href="" class="btn btn-primary btn-block">Ask New Question</a>
                        <div class="card">
                            <div class="card-header">All Tags</div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="">Frontend Development</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="">Backend Development</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <span
                        class=""
                        id="btn-back-to-top"
                    >
                        <div class="scroll-top">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </span>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
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
                                <div class="col-md-8">
                                    <div class="">
                                        <a href="" class="float-right text-primary">Read More...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        content-->

    </div>
</template>

<script>
export default {
name: "Master"
}
</script>

<style>
#btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
}
.scroll-top{
    background: red;
    color: white;
    border-radius: 50%;
    border: none;
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
html{
    scroll-behavior: smooth;
}
</style>
