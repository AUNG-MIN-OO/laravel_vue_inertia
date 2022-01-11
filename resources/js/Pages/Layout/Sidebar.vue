<template>
    <div class="col-md-4">
        <div class="position-fixed">
            <inertia-link href="/question/create" class="btn btn-primary btn-block">Ask New Question</inertia-link>
            <div class="card" v-show="!isProfileUrl">
                <div class="card-header">All Tags</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="tag in tags" :key="tag.id">
                            <inertia-link :href="'/?tag='+tag.slug">{{tag.name}}</inertia-link>
                        </li>
                    </ul>
                </div>
            </div>

<!--            user side bar           -->
            <div class="card mt-3" v-show="isProfileUrl">
                <div class="card-header">User Options</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <inertia-link href="/profile/edit" class=""><i class="fas fa-user-edit mr-2"></i>Edit Profile</inertia-link>
                        </li>
                        <li class="list-group-item">
                            <inertia-link href="/profile/question/user"><i class="fas fa-question mr-3"></i>My Questions</inertia-link>
                        </li>
                        <li class="list-group-item">
                            <inertia-link href="/profile/question/saved"><i class="fas fa-question-circle mr-3"></i>Saved Questions</inertia-link>
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
        },

        isProfileUrl(){
            var url = location.pathname;
            var exp = "/profile/.*";
            var res = url.match(exp);
            if (res != null){
                return true;
            }else{
                return false;
            }
        }
    },
}
</script>

<style scoped>

</style>
