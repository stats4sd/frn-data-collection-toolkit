<template>
    <div
    class="container px-4 pt-4"
    >
        <a
        href="javascript:history.back()"
        class="pl-sm-4"
        >Back to listing</a>

        <div class="px-4 pb-4">
            <!-- ###################################### TOP SECTION ################################################ -->
            <listing-top-section
            :listing="resource"
            />

            <!-- ###################################### Authors Row ################################################ -->
            <div class="card border-light pb-4">
                <div class="card-body pl-0">
                    <span class="font-weight-bold">Author(s):</span>
                    <span
                    v-for="(author, index) in resource.authors"
                    :key="author.id"
                    >
                        {{ author.name }}<span v-if="index+1 < resource.authors.length">, </span>
                    </span>
                </div>
            </div>

            <!-- ###################################### Embeded Video ################################################ -->
            <div
            v-if="resource.video_id"
            class="card border-dark pb-4 mb-4"
            >
                <p class="alert alert-success">
                    This resource includes a video on our YouTube channel, embedded here. You can download the original video file below.
                </p>
                <div class="d-flex flex-row justify-content-center">
                    <iframe
                    width="560"
                    height="315"
                    :src="'https://www.youtube.com/embed/' + resource.video_id"
                    frameborder="0"
                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    />
                </div>
            </div>

            <!-- ###################################### List of Trove Elements ################################################ -->
            <div class="alert alert-info pb-4 mb-4 flex-wrap">
                <p class="mb-3">
                    The individual components of the resource are listed below. Click on one to download the file or go to the external url. You can download the full resource below as a .zip file. External urls will be included as .url files. These files act as bookmarks and can be opened with any web browser.
                </p>
                <element-file
                v-for="element in resource.elements_files"
                :key="element.id"
                :element="element"
        :slug="resource.slug"
                class="card element-card my-1"
                />
                <element-video
                v-for="element in resource.elements_videos"
                :key="element.id"
                :element="element"
        :slug="resource.slug"
                class="card element-card my-1"
                />
                <element-link
                v-for="element in resource.elements_urls"
                :key="element.id"
                :element="element"
                class="card element-card my-1"
                />
            </div>
        </div>

    <!-- ###################################### Full Download Button ################################################ -->
        <div
        v-if="resource.full_download"
        class="py-4 mt-4 d-flex justify-content-end"
        >
            <a
            :href="resource.full_download"
            class="btn btn-stats btn-reslist pb-2 mt-0 mr-3"
            >
                Download All (zip)
                <ion-icon
                name="download"
                class="ml-2 font-weight-bold"
                style="width: 1.4em; height: 1.4em; color: white; position: relative; top: 4px"
                />
            </a>
        </div>

        <div class="mt-5">
            <a href="javascript:history.back()">Back to listing</a>
        </div>
    </div>
</template>

<script>

    export default {
        props: {
            resource: {
                type: Object,
                default: () => {return {}}
            }
        },

        created() {

            // if a "full resource" zip file has been generated for this trove, include the download option for it.
            if(this.resource.full_download) {
                let downloadName = this.resource.full_download.split('/');

                this.resource.full_download = '/download/' + this.resource.full_download.replace("files/","") + '/' + downloadName[downloadName.length - 1];
            }

        },
    }



</script>
