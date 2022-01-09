<template>
    <Master>
        <div class="card">
            <div class="card-body" v-for="q in questions" :key="q.id">
                <span>{{q.title}}</span>
                <i class="fas fa-trash-alt text-danger float-right"></i>
            </div>
        </div>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
export default {
name: "UserQuestion",
    components: {Master},
    data() {
        return {
            questions: []
        }
    },
    created() {
        this.questions = this.$page.props.questions;
    }
}
</script>

<style scoped>

</style>
