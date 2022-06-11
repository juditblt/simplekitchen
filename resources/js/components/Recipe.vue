<template>
    <h3 class="text-center text-success text-uppercase fst-italic text-decoration-underline rounded m-3">{{ recipe.name }}</h3>

    <div class="col-sm-12 col-md-4 offset-2">
        <p class="fs-5 fst-italic text-decoration-underline">Elkészítés:</p>
        <p>{{ recipe.description }}</p>
    </div>

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
