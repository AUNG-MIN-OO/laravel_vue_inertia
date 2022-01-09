<template>
    <Master>
        <div class="card">
            <div class="card-body" v-for="(q,index) in questions" :key="q.id">
                <span>{{q.title}}</span>
                <i class="fas fa-trash-alt text-danger float-right" @click="deleteQuestion(index,q.id)"></i>
            </div>
        </div>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
import axios from "axios";
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
