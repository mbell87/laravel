<template>
                        <div>
                            <form @submit="formSubmit">
                                <div class="form-group">
                                    <label>Type:</label>
                                    <select class="selectable" v-model="type_id">
                                        <option v-for="type in taskTypes" :value="type.id">
                                            {{type.name}}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name:</label>
                                    <select class="selectable" v-model="user_id">
                                        <option v-for="user in users" :value="user.value">
                                            {{user.label}}
                                        </option>
                                    </select>
                                </div>
                            <button class="btn btn-success">Submit</button>
                            </form>
                            <strong>Output:</strong>
                            <pre>
                            {{output}}
                            </pre>
                        </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/tasktypes/getjson').then(response => this.taskTypes = response.data);

        },
        data() {
            return {
                users: [],
                taskTypes: [],
                user_id : '',
                type_id : '',
                output: '',

            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/formSubmit', {
                    user_id: this.user_id,
                    type_id: this.type_id
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }
    }
</script>
