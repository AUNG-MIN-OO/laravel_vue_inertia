<template>
    <Master>
        <div class="container">
            <div class="card">
                <div class="card-title text-center text-uppercase pt-3">Ask new questions</div>
                <div class="card-body">
                    <form >
                        <div class="md-form">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control">
                        </div>
                        <div class="md-form">
                            <textarea id="question_desc" class="md-textarea form-control" rows="3"></textarea>
                            <label for="question_desc">Material textarea</label>
                        </div>
                        <div class="custom-control custom-checkbox" v-for="tag in $page.props.tags" :key="tag.id">
                            <input type="checkbox" class="custom-control-input" :id="tag.id" :value="tag.id">
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
export default {
name: "CreateQuestion",
    components: {Master},
    data() {
        return {
            title: "",
            description : "",
        }
    },
}
</script>

<style scoped>

</style>
