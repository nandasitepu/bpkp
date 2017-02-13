<template>
    <h1>My Posts</h1>
    <h4>New Post</h4>
    <form action="#" @submit.prevent="edit ? updatePost(post.id) : createPost()">
        <div class="input-group">
            <input v-model="post.body" v-el:postinput type="text" name="body" class="form-control" autofocus>
            <span class="input-group-btn">
                <button v-show="!edit" type="submit" class="btn btn-primary">New Post</button>
                <button v-show="edit" type="submit" class="btn btn-primary">Edit Post</button>
            </span>
        </div>
    </form>
    <h4>All Posts</h4>
    <ul class="list-group">
        <li class="list-group-item" v-for="post in list">
            {{ post.body }}
            <button @click="showPost(post.id)" class="btn btn-primary btn-xs">Edit</button>
            <button @click="deletePost(post.id)" class="btn btn-danger btn-xs">Delete</button>
        </li>
    </ul>
</template>

<script>
    export default {
        data: function() {
            return {
                edit: false,
                list: [],
                post: {
                    id: '',
                    body: ''
                }
            };
        },

        ready: function() {
            this.fetchPostList();
        },

        methods: {
            fetchPostList: function() {
                this.$http.get('api/posts').then(function (response) {
                    this.list = response.data
                });
            },

            createPost: function () {
                this.$http.post('api/post/store', this.post)
                this.post.body = ''
                this.edit = false
                this.fetchPostList()
            },

            updatePost: function(id) {
                this.$http.patch('api/post/' + id, this.post)
                this.post.body = ''
                this.edit = false
                this.fetchPostList()
            },

            showPost: function(id) {
                this.$http.get('api/post/' + id).then(function(response) {
                    this.post.id = response.data.id
                    this.post.body = response.data.body
                })
                this.$els.postinput.focus()
                this.edit = true
            },

            deletePost: function (id) {
                this.$http.delete('api/post/' + id)
                this.fetchPostList()
            },
        }
    }
</script>
