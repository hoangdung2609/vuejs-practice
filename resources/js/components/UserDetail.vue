<template>
    <div class="component">
        <h3>User Details</h3>
        <p>Tuoi toi: {{ age }}</p>
        <button v-on:click="changeAge">Doi tuoi</button>
    </div>
</template>

<script>
    export default {
        props: ['age'],
        methods: {
            changeAge() {
                this.age = 24;
                this.$emit('ageUpdated', this.age)
            }
        }
    }
</script>