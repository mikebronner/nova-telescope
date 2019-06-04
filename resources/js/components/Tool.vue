<script>
export default {
    data: function () {
        return {
            path: "",
        };
    },

    created() {
        this.getPath();
    },

    computed: {
        telescopePath: function () {
            return ("/" + this.path)
                .replace("\/\/", "\/");
        },
    },

    methods: {
        getPath: function () {
            var self = this;

            Nova.request().get("/genealabs/nova-telescope/path")
                .then(function (response) {
                    self.path = response.data;
                });
        },
    },
}
</script>

<template>
    <iframe
        :src="telescopePath"
        class="w-full"
        frameborder="0"
        scrolling="auto"
    ></iframe>
</template>

<style scoped lang="scss">
    iframe {
        margin-top: -50px;
        height: 100vh;
    }
</style>
