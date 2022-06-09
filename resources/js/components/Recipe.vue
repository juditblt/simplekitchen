<template>
    <h3>A kiválasztott recept leírása</h3>
    <table class="table table-sm">
        <tr>
            <th>Étel neve</th>
            <th>Leírás</th>
        </tr>
        <tr>
            <td>{{ recipe.name }}</td>
            <td class="text-break">{{ recipe.description }}</td>
        </tr>
    </table>
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
