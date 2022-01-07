<template>
    <Master>
        <div class="">
            <inertia-link href="/logout" class="btn btn-danger">Logout</inertia-link>
        </div>
    </Master>
</template>

<script>

import Master from "./Master";
export default {
    name: "Home",
    components: {Master}
}
</script>

<style scoped>

</style>
