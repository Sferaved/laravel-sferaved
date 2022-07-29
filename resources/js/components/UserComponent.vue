<template>
    <div class="container">
        <table>

                <thead>
                <tr>
                        <th class="col-md-2">#</th>
                        <th class="col-md-5">name</th>
                        <th class="col-md-5">email</th>
                </tr>

                </thead>
            <tbody>
            <tr v-for="row in users" :key="row.id">
                <td>{{ row.id }}</td>
                <td>{{ row.name }}</td>
                <td>{{ row.email }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button class="btn btn-danger" @click="deleteUser(row.id)">Delete</button>
                    </div>
                </td>

            </tr>
            </tbody>


        </table>
    </div>

</template>

<script>
import axios from 'axios';
export default {
    name: "UserComponent",
    data: () => ({
        loading: true,
        users: [],
    }),
    mounted() {
        this.getUsers()
    },
    methods: {
        getUsers() {
            axios.get('/users/all')
                .then(
                    res => {
                        this.users = res.data;
                        this.loading = false;
                    }
                )
        },
        deleteUser(id) {

            axios.get('/users/destroy/'+ id)
                .then(response => {
                    let i = this.users.map(data => data.id).indexOf(id);
                    this.users.splice(i, 1);
                    alert(response.data)
                });
        }
    }
}
</script>

<style scoped>

</style>
