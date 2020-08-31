<template>
    <div>
        <h3 class="text-center">Add Name</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPost">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" v-model="post.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Name</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                post: {}
            }
        },
        methods: {
            addPost() {
                this.axios.post('http://localhost:8000/api/adding', this.post)
                    .then(response => (
                        this.$router.push({path: '/'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
                    //this.$router.push({path: '/'})
            }
        }
    }
</script>