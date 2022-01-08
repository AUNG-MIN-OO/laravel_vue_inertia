<template>
    <Master>
        <div class="">
            <span
                class=""
                id="btn-back-to-top"
            >
                        <div class="scroll-top">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </span>
            <div class="card mb-3" v-for="(question,index) in $page.props.questions" :key="question.id">
                <div class="card-header">
                    <span class="font-weight-bolder text-capitalize badge badge-danger" v-if="question.is_fixed">need fixed!</span>
                    <span class="font-weight-bolder text-capitalize badge badge-success" v-else>fixed!</span>
                    <span class="">{{ question.title }}</span>
                    <a href="" class="badge badge-danger p-1 float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="" class="badge badge-success p-1 float-right mr-2"  v-show="isOwn(question.user_id)"><i class="fas fa-check"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--                                    categories-->
                            <div class="mb-3">
                                <inertia-link class="badge badge-pill badge-primary py-1 px-2 mr-2" v-for="tag in question.question_tag" :key="tag.id">{{tag.name}}</inertia-link>
                            </div>
                            <!--                                 end   categories-->
                            <p>{{ question.description }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--                            like box-->
                        <div class="col-md-4">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <i class="far fa-heart" v-show="question.is_like == 'false'" style="cursor: pointer" @click="like(question.id,index)"></i>
                                    <i class="fas fa-heart text-danger" v-show="question.is_like == 'true'"></i>
                                    <small>{{ question.like_count }}</small>
                                </div>
                                <div class="">
                                    <i class="fas fa-comment text-primary"></i>
                                    <small>{{ question.comment.length }}</small>
                                </div>
                                <div class="">
                                    <i class="fas fa-save text-success mt-1 "></i>
                                </div>
                            </div>
                        </div>
                        <!--                            like box-->
                        <div class="col-md-8">
                            <div class="">
                                <inertia-link
                                    :href="route('question.detail',{slug : question.slug})"
                                    class="float-right text-primary">
                                    Read More...
                                </inertia-link>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script>
import axios from  "axios";
import Master from "./Layout/Master";
export default {
    name: "Home",
    components: {Master},
    data() {
        return {
            questions: ""
        }
    },
    created() {
        this.questions = this.$page.props.questions;
        if (this.$page.props.flash.success){
            this.$toastr.s('success',this.$page.props.flash.success)
        }
    },
    methods: {
        like(id,index) {
            this.questions[index].is_like = "true";
            this.questions[index].like_count++;
            axios.get(`/question/like/${id}`)
            .then(res=>{
                if (res.data.success == true){
                }
            })
        },

        isOwn(id){
            var auth_user_id = this.$page.props.auth_user.id;
            if (auth_user_id === id){
                return true;
            }else{
                return  false;
            }
        }
    },
}
</script>

<style scoped>

</style>
