<template>
    <div>
        <h1>Edit Customer</h1>
        <form @submit.prevent="updateCustomer">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" v-model="customer.name">
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" id="surname" v-model="customer.surname">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" v-model="customer.email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" v-model="customer.phone">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" v-model="customer.address">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <router-link :to="{ name: 'customers' }" class="btn btn-secondary">Cancel</router-link>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'CustomerEdit',
        data() {
            return {
                customer: {},
            };
        },
        mounted() {
            this.fetchCustomer();
        },
        methods: {
            fetchCustomer() {
                axios.get(`/api/customers/${this.$route.params.id}`).then((response) => {
                    this.customer = response.data;
                });
            },
            updateCustomer() {
                axios.put(`/api/customers/${this.$route.params.id}`, this.customer).then(() => {
                    this.$router.push({ name: 'customers' });
                });
            },
        },
    };
</script>
