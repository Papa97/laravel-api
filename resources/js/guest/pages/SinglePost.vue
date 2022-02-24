<template>
    <div>
        <h2>{{ post.title }}</h2>
    </div>
</template>

<script>
export default {
    name: "SinglePost",
    data() {
        return {
            post: {},
        };
    },
    created() {
        axios.get(`/api/posts/${this.$route.params.slug}`).then((response) => {
            this.post = response.data;
        });
    },
};
</script>

<style></style>
