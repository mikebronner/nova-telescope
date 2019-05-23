<template>
    <iframe
        ref="horizon-frame"
        :src="telescopePath"
        class="w-full"
        frameborder="0"
        scrolling="auto"
    ></iframe>
</template>

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

<style lang="scss">
    div.px-view.py-view.mx-auto,
    div.px-view.py-view.mx-auto > div,
    div.px-view.py-view.mx-auto > div > iframe {
        height: 100%;
    }

    div.px-view.py-view.mx-auto {
        padding-top: 0;
    }
</style>
