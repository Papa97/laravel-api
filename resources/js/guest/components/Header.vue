<template>
    <header>
        <a href="admin/home">Area Privata</a>
        <nav>
            <ul>
                <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                <li>
                    <router-link :to="{ name: 'about' }">Chi siamo</router-link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header",
};
</script>

<style></style>
