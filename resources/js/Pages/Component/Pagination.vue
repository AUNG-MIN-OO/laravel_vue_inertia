<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination pg-blue float-right">
            <li class="page-item" v-for="(l,index) in $page.props.questions.links" :key="index" :class="{active:l.active}">
                <inertia-link :href="l.url" class="page-link" :tabindex="index">
                    {{ l.label }}</inertia-link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Pagination",
    props:{links:Array},
}
</script>

<style scoped>

</style>
