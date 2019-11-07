<template>
    <div>
        <element-file
            v-for="element in trove.elements_files"
            :key="element.id"
            :element="element"
            :slug="trove.slug"
            class="card element-card my-1"
        />
        <element-video
            v-for="element in trove.elements_videos"
            :key="element.id"
            :element="element"
            :slug="trove.slug"
            class="card element-card my-1"
        />
        <element-link
            v-for="element in trove.elements_urls"
            :key="element.id"
            :element="element"
            class="card element-card my-1"
        />
    </div>

</template>

<script>

    export default {
        props: {
                trove: {
                    type: Object,
                    default: () => { return {} }
                }
        },
        created() {

            console.log("trove elements ready");

        }
    }




</script>
