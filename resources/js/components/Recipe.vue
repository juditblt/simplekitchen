<template>
    <h3 class="text-center text-decoration-underline">{{ recipe.name }}</h3>
    <p class="fs-5 fst-italic">Elkészítés:</p>
    <p>{{ recipe.description }}</p>
</template>

<script>
export default {
    name: "Recipe",
    props: {
        recipe: {}
    }
}
</script>

<style scoped>

</style>
