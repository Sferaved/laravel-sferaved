<template>
    <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-5">Users</h1>
            <p class="lead">Edit information about user's</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit user</div>

                    <div class="card-body">
                        <div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end"> Name</label>

                                <div class="col-md-6">
                                    <input id="name" class="form-control" v-model.text="name" required  autofocus>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input id="email" class="form-control " v-model.email="email" required autocomplete="email">


                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ 'Password' }}</label>

                                <div class="col-md-6">
                                    <input id="password" class="form-control" v-model.password = "password" required autocomplete="new-password" >

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{'Confirm Password' }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" v-model.password = "password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"  @click="Submit" class="btn btn-primary">
                                        Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import axios from "axios";

    export default {
        name: "UserEdit",
        props: {
            name: {
                type: String,
                default: ""
            },
            email: {
                type: String,
                default: ""
            },

            data: () => ({
                password: "",
                password_confirmation: ""
            }),
        },
        methods: {
            Submit() {
                 axios.post('/users/all')
                        .then(
                        )
                }
            }
        }
</script>
<style scoped>

</style>
