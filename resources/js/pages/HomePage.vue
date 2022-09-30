<template>
    <div class="container">
        <!-- @if (session('delete'))
        <div class="alert alert-success">
            {{ session('delete') }} è stato cancellato per sempre dall'orbe terracqueo
        </div>
        @endif -->
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for="post in posts" :key="post.id">
                    <th scope="row">{{ post.author }}</th>
                    <td><a>{{ post.title }}</a></td>
                    <td>{{ post.post_content }}</td>
                    <td>{{ post.post_date }}</td>
                    <td><button class="btn btn-primary"><a class="text-decoration-none text-white"
                                >{{post.id}}</a></button></td>
                    <td><button class="btn btn-secondary"><a class="text-decoration-none text-white">{{post.id}}</a></button></td>
                    <!-- <td>
                        <form action="{{ route('admin.posts.destroy', $post.id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" value="delete">
                                delete
                            </button>
                        </form>
                    </td> -->
                </tr>

            </tbody>
        </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data: function () {
        return {
            posts: [],
        }
    },
    methods: {
        getPosts(postsPage = 1) {
            axios.get("/api/posts", {
                page: postsPage
            }).then((response) => {
                console.log(response.data.results.data);
                this.posts = response.data.results.data;
            }).catch((error) => {
                console.error(error);
            })
        }
    },
    created() {
        this.getPosts();
    }
}
</script>
<style>

</style>