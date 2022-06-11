<template>
    <div>
        <h4 class="text-center text-danger text-decoration-underline text-uppercase fst-italic rounded m-3">
            Egy random recept angolul:
        </h4>
        <br>
        <table class="table table-sm text-center table-responsive">
            <tr>
                <th>Kategória:</th>
                <th>Nemzetiség:</th>
                <th>Recept neve:</th>
            </tr>
            <tr>
                <td>{{ meal.strCategory }}</td>
                <td>{{ meal.strArea }}</td>
                <td>{{ meal.strMeal }}</td>
            </tr>
        </table>
        <p class="fs-5 fst-italic text-decoration-underline">Elkészítés:</p>
        <p>{{ meal.strInstructions }}</p>

        <p class="fs-5 fst-italic text-decoration-underline">Forrás:</p>
        <p>{{ meal.strSource }}</p>

    </div>
</template>

<script>
export default {
    name: "OtherRecipe",
    data() {
        return {
            meal: {}
        };
    },
    methods: {
        getRandomMeal() {
            this.axios
            .get('https://www.themealdb.com/api/json/v1/1/random.php')
            .then((response) => {
                console.log(response.data.meals[0]);
                this.meal = response.data.meals[0];
            })
            .catch(() => {
                console.log('API HIBA!');
            });
        }
    },
    mounted() {
        this.getRandomMeal();
    }
}
</script>

<style scoped>

</style>
