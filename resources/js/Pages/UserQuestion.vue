<template>
    <Master>
        <div class="card mb-3" v-for="(q,index) in questions" :key="q.id">
            <div class="card-body">
                <inertia-link :href="route('question.detail',q.slug)">{{q.title}}</inertia-link>
                <i class="fas fa-trash-alt text-danger float-right" @click="deleteQuestion(index,q.id)"></i>
            </div>
        </div>
        <Pagination></Pagination>

    </Master>
</template>

<script>
import Master from "./Layout/Master";
import axios from "axios";
import Pagination from "./Component/Pagination";
export default {
name: "UserQuestion",
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
        deleteQuestion(index, q_id) {
            let question_id = {id : q_id}
            axios.get(this.route('question.delete',question_id) )
            .then(res=>{
                if(res.data.success){
                    this.questions.splice(index, 1);
                    this.$toastr.s('success',"Question is deleted!");
                }
            })
        }
    },
}
</script>

<style scoped>

</style>
