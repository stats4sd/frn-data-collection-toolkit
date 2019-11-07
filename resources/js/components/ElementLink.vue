<template>
    <div class="card-body py-3">
        <div
        class="d-flex flex-wrap justify-content-between res-el flex-row mt-1"
        style="font-size: 1.1em"
        >
            <a
            :href="element.path"
            class="stretched-link"
            target="_blank"
            >
                <div class="d-flex justify-content-start flex-row flex-wrap">

                    <ion-icon
                    name="link"
                    class="ml-lg-4 mr-4 font-weight-bold"
                    style="width: 1.5em; height: 1.5em"
                    />
                    <div>   {{ element.path }} </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['element','element_id'],
  }
</script>
