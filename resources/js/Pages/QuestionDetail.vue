<template>
    <Master>
        <div class="card">
            <div class="card-header">
                <span class="font-weight-bolder text-capitalize badge badge-danger" v-if="q.is_fixed">need fixed!</span>
                <span class="font-weight-bolder text-capitalize badge badge-success" v-else>fixed!</span>
                <span class="">{{ q.title }}</span>
                <a href="" class="badge badge-danger p-1 float-right"><i class="fas fa-trash-alt"></i></a>
                <a href="" class="badge badge-success p-1 float-right mr-2"  v-show="isOwn(q.user_id)"><i class="fas fa-check"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--                                    categories-->
                        <div class="mb-3">
                            <span class="badge badge-pill badge-primary py-1 px-2">Frontend Development</span>
                            <span class="badge badge-pill badge-primary py-1 px-2">Android Development</span>
                        </div>
                        <!--                                 end   categories-->
                        <p>{{q.description}}</p>
                    </div>
                </div>
                <div class="row">
                    <!--                            like box-->
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <i class="fas fa-heart text-danger"></i>
                                <small>{{q.like_count}}</small>
                            </div>
                            <div class="">
                                <i class="fas fa-comment text-primary"></i>
                                <small>{{q.comment.length}}</small>
                            </div>
                            <div class="">
                                <i class="fas fa-save text-success mt-1"></i>
                            </div>
                        </div>
                    </div>
                    <!--                            like box-->
                </div>
                <hr>
                <h6 class="mb-3">All Comments</h6>
                <div class="row mb-4" v-for="c in q.comment" :key="c.id">
                    <div class="col-1">
                        <img :src="c.user.image"
                             class="rounded-circle" style="width: 50px;height: 50px;" alt="" />
                    </div>

                    <div class="col-11">
                        <div class="ml-2 bg-light px-2 rounded">
                            <p class="mb-2"><strong>{{ c.user.name }}</strong> <small class="text-muted">{{c.date}}</small></p>
                            <p>
                                {{ c.comment }}
                            </p>
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
    name: "QuestionDetail",
    props:{question:Object},
    components: {Master},
    data() {
        return {
            q: ""
        }
    },
    created() {
        this.q = this.question
    },
    methods: {
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
