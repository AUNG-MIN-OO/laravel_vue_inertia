<template>
    <div>
        <!-- Navbar -->
        <Nav></Nav>
        <!-- Navbar -->
        <!--        content-->
        <div class="container mt-5 p-5">
            <div class="row">
                <Sidebar></Sidebar>
                <div class="col-md-8">
                    <slot/>
                </div>
            </div>
        </div>
        <!--        content-->

    </div>
</template>

<script>
import Nav from "./Nav";
import Sidebar from "./Sidebar";
export default {
name: "Master",
    components: {Sidebar, Nav}
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

.dropdown-menu{
    left: -30px!important;
}
</style>
