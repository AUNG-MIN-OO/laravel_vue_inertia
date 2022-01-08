<template>
    <div class="col-md-4">
        <div class="position-fixed">
            <a href="" class="btn btn-primary btn-block">Ask New Question</a>
            <div class="card">
                <div class="card-header">All Tags</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="tag in tags" :key="tag.id">
                            <inertia-link href="">{{tag.name}}</inertia-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "Sidebar",
    computed:{
        tags(){
            return this.$page.props.tags;
        }
    }
}
</script>

<style scoped>

</style>
