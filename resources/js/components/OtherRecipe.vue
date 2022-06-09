<template>
    <div>
        <h3 class="text-center text-decoration-underline">
            Íme egy random recept:
        </h3>
        <br>
        <p>{{ meals }}</p>
    </div>
</template>

<script>
export default {
    name: "OtherRecipe",
    data() {
        return {
            meals: {}
        };
    },
    methods: {
        getRandomMeal() {
            this.axios
            .get('https://www.themealdb.com/api/json/v1/1/random.php')
            .then((response) => {
                console.log(response.data);
                this.meals = response.data;
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
