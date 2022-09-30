<template>
    <div>
        <h3>ciao</h3>
    </div>
</template>
<script>
export default {
    name:'TagsPage',
    data: function () {
        return {
            tags: [],
        }
    },
    methods: {
        getTags(tagsPage = 1) {
            axios.get("/api/tags", {
                page: tagsPage
            }).then((response) => {
                console.log(response.data.results.data);
                this.tags = response.data.results.data;
            }).catch((error) => {
                console.error(error);
            })
        }
    },
    created() {
        this.getTags();
    }
}
</script>
<style>
    
</style>