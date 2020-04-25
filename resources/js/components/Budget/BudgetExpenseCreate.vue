<template>
    <form @submit.prevent>
        <input type="text" name="amount" v-model="amount" />
        <button type="submit" @click="postData">
            Create
        </button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            amount: null
        };
    },
    methods: {
        postData() {
            axios.post("/budget/expenses/store", this.amount);
        }
    }
};
</script>