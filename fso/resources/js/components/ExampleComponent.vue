<template>
                        <div>
                            <form @submit="formSubmit">
                                <div class="form-group">
                                    <label>Type:</label>
                                    <v-select v-model="type_id" :options="tasktypes"></v-select>
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

        },
        props:
        [
            'users','tasktypes'
        ],
        data() {
            return {
                user_id : '',
                type_id : '',
                output: '',

            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                let url = '/workorders/1/tasks'
                axios.post(url, {
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
