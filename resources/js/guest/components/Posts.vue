<template>
    <div>
        <div v-for="post in posts" :key="post.id">
            <h3>{{ post.title }}</h3>
            <p>{{ post.content }}</p>

            <router-link
                :to="{ name: 'single-post', params: { slug: post.slug } }"
            >
                Visualizza post
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "Posts",
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
