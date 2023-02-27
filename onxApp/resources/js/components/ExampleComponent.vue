<template>
    <div>
        <h1>Witaj w mojej aplikacji Vue.js!</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Pierwszy komponent Vue.js!'
            }
        }
    }
</script>
