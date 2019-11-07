<template>
    <div class="card-body py-3">
        <div
        class="d-flex flex-wrap justify-content-between res-el flex-row mt-1"
        style="font-size: 1.1em"
        >
            <a :href="element.download">
                <div class="d-flex justify-content-start flex-row flex-wrap res-und">
                    <ion-icon
                    name="videocam"
                    class="ml-lg-4 mr-4 font-weight-bold pt-2"
                    style="width: 1.5em; height: 1.5em"
                    />
                    <div class="font-weight-bold mr-2 pt-2">{{ element.name }}</div>
                    <div class="ml-md-2 pt-2 mb-3 mb-md-0">(File Size: - {{ element.size }})</div>
                </div>
            </a>

            <a
            :href="element.download"
            class="stretched-link btn btn-stats btn-reslist pb-2 mt-0"
            >
                Download <ion-icon
                name="download"
                class="ml-2 font-weight-bold"
                style="width: 1.4em; height: 1.4em; color: white; position: relative; top: 4px"
                />
            </a>
        </div>
    </div>
</template>

<script>

    export default {

        props: ['element','element_id','slug'],

        created() {
            this.element.size = filesize(this.element.size);
            this.element.download = '/download/' + this.slug + '/' + this.element.storedName + '/' + this.element.name;
        }
    }

</script>
