<template>
    <div>
        <h1>Customers</h1>
        <div v-if="loading">Loading...</div>
        <div v-else>
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="customer in customers" :key="customer.id">
                    <td>{{ customer.name }}</td>
                    <td>{{ customer.surname }}</td>
                    <td>{{ customer.email }}</td>
                    <td>{{ customer.phone }}</td>
                    <td>{{ customer.address }}</td>
                    <td>
                        <router-link :to="'/customers/' + customer.id + '/edit'">Edit</router-link>
                        <button @click="deleteCustomer(customer.id)">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                customers: [],
                loading: true,
            };
        },
        methods: {
            async fetchCustomers() {
                try {
                    const response = await axios.get('/api/customers');
                    this.customers = response.data;
                } catch (error) {
                    console.error(error);
                } finally {
                    this.loading = false;
                }
            },
            async deleteCustomer(id) {
                if (confirm('Are you sure you want to delete this customer?')) {
                    try {
                        await axios.delete(`/api/customers/${id}`);
                        this.customers = this.customers.filter((customer) => customer.id !== id);
                    } catch (error) {
                        console.error(error);
                    }
                }
            },
        },
        created() {
            this.fetchCustomers();
        },
    };
</script>
