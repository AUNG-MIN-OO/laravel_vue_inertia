<template>
    <Master>
        <h4>Saved Questions</h4>
        <div class="card mb-3" v-for="(q,index) in questions" :key="q.question.id">
            <div class="card-body">
                <inertia-link :href="route('question.detail',q.question.slug)">{{q.question.title}}</inertia-link>
                <i class="fas fa-trash-alt text-danger float-right" @click="removeFromSaved(index, q.question.id)"></i>
            </div>
        </div>
        <Pagination></Pagination>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
import Pagination from "./Component/Pagination";
import axios from "axios";
export default {
name: "SavedQuestion",
    components: {Pagination, Master},
    data() {
        return {
            questions: []
        }
    },
    created() {
        this.questions = this.$page.props.questions.data;
    },
    methods: {
        removeFromSaved(index, q_id) {
            let question_id = {id : q_id}
            axios.get(this.route('save.question.remove',question_id))
            .then(res=>{
                if (res.data.success){
                    this.questions.splice(index, 1)
                    this.$toastr.s("success","Question is removed from saved question")
                }
            })
        }
    },
}
</script>

<style scoped>

</style>
