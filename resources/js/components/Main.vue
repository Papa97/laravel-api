<template>
    <main>
        <div class="container">
            <h2>Lista post</h2>

            <div class="card mb-3" v-for="post in posts" :key="post.id">
                <div class="card-header">{{ post.title }}</div>
                <div class="card-body">
                    <p class="card-text">
                        {{ post.content }}
                    </p>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Main",
    data() {
        return {
            posts: [],
        };
    },
    created() {
        axios.get("/api/posts").then((response) => {
            this.posts = response.data;
        });
    },
};
</script>

<style></style>
