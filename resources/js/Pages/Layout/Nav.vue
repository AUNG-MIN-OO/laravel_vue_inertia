<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="">
                    <span class="font-weight-bolder text-uppercase text-primary">Questions Forum</span>
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
                            <inertia-link class="nav-link" href="/">Home</inertia-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Answered Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Unanswered Questions</a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-link px-3 me-2">
                            Login
                        </button>
                        <a
                            class="btn btn-dark px-3"
                            href="#"
                            role="button"
                        ><i class="fab fa-github"></i
                        ></a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle btn btn-primary text-white" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">{{$page.props.auth_user.name}}</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <inertia-link class="nav-link" href="/edit-profile">Edit Profile</inertia-link>
                                    <inertia-link class="dropdown-item" href="/logout">Logout</inertia-link>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
    </div>
</template>

<script>
export default {
    name: "Nav"
}
</script>

<style scoped>

</style>
