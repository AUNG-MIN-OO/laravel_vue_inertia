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
            <div class="card mb-3" v-for="question in $page.props.questions" :key="question.id">
                <div class="card-header">
                    <span class="font-weight-bolder text-capitalize badge badge-danger">!need fixed</span>
                    <span class="">{{ question.title }}</span>
                    <a href="" class="badge badge-danger p-1 float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="" class="badge badge-success p-1 float-right mr-2"><i class="fas fa-check"></i></a>
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
                                    <i class="fas fa-heart text-danger"></i>
                                    <small>{{ question.like.length }}</small>
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
                                <inertia-link href="/question-detail" class="float-right text-primary">Read More...</inertia-link>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script>

import Master from "./Layout/Master";
export default {
    name: "Home",
    components: {Master},
    created() {
        if (this.$page.props.flash.success){
            this.$toastr.s('success',this.$page.props.flash.success)
        }
    }
}
</script>

<style scoped>

</style>
