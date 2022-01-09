<template>
    <Master>
        <div class="container">
            <div class="card">
                <div class="card-title text-center text-uppercase pt-3">Ask new questions</div>
                <div class="card-body">
                    <form @submit.prevent="createQuestion">
                        <div class="md-form">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" v-model="title">
                        </div>
                        <div class="md-form">
                            <textarea id="question_desc" class="md-textarea form-control" rows="3" v-model="description"></textarea>
                            <label for="question_desc">Material textarea</label>
                        </div>
                        <div class="custom-control custom-checkbox" v-for="tag in $page.props.tags" :key="tag.id">
                            <input type="checkbox" class="custom-control-input" :id="tag.id" v-model="tags" :value="tag.id">
                            <label class="custom-control-label" :for="tag.id">{{tag.name}}</label>
                        </div>
                        <button class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </Master>
</template>

<script>
import Master from "./Layout/Master";
import axios from "axios";
export default {
name: "CreateQuestion",
    components: {Master},
    data() {
        return {
            title: "",
            description : "",
            tags : [],
        }
    },
    methods: {
        createQuestion() {
            var data = new FormData();
            data.append('title',this.title);
            data.append('description',this.description);
            data.append('tags',this.tags);
            axios.post('/question/create',data)
            .then(res=>{
                const {success,question} = res.data;
                if (success){
                    this.$toastr.s('success','Question is created');
                }
            })
        }
    },
}
</script>

<style scoped>

</style>
