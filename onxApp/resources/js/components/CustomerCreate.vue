<template>
    <div>
        <h1>Create Customer</h1>
        <form @submit.prevent="createCustomer">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" v-model="customer.name" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" v-model="customer.surname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" v-model="customer.email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" v-model="customer.phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" v-model="customer.address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                customer: {
                    name: '',
                    surname: '',
                    email: '',
                    phone: '',
                    address: '',
                },
            };
        },
        methods: {
            createCustomer() {
                axios.post('/customers', this.customer)
                    .then(() => {
                        this.$router.push({ name: 'customers.index' });
                    })
                    .catch(error => console.log(error));
            },
        },
    };
</script>
