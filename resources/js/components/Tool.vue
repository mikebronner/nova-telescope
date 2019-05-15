<template>
    <iframe
        ref="horizon-frame"
        src="/telescope"
        class="w-full"
        frameborder="0"
        scrolling="auto"
    ></iframe>
</template>

<script>
export default {
    mounted() {
        //
    },
}
</script>

<style>
    div.px-view.py-view.mx-auto,
    div.px-view.py-view.mx-auto > div,
    div.px-view.py-view.mx-auto > div > iframe {
        height: 100%;
    }

    div.px-view.py-view.mx-auto {
        padding-top: 0;
    }
</style>
