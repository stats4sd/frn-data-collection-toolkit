<template>
    <ais-instant-search
    :search-client="searchClient"
    index-name="troves"
    :routing="routing"
    >
    <!-- Can add filters using ais-configure with syntax from here:
    https://www.algolia.com/doc/api-reference/api-parameters/filters/
    -->
        <ais-configure
            :filters="filters"
        />
        <div class="row mb-5 pb-5">
            <div
            class="col-md-4 col-lg-3 pr-4 mr-4"
            >
                <ais-panel
                v-if="!collectionId"
                class="pb-4 px-2"
                style="color: #0e0e0e !important;"
                >
                    <span slot="header">Types</span>
                    <ais-refinement-list
                        attribute="type.name"
                        :sort-by="['count:desc']"
                        />
                </ais-panel>
                <ais-panel
                class="px-2"
                style="color: #0e0e0e !important;"
                >
                    <span slot="header">Tags</span>
                    <ais-refinement-list
                        attribute="tags.name.en"
                        :sort-by="['count:desc']"
                        :limit="10"
                        searchable
                        show-more
                        :show-more-limit="25"
                        :transform-items="transformItems"
                        />
                </ais-panel>
                <!-- <ais-configure :hitsPerPage="8" /> -->
            </div>
            <div class="col-md-8">
                <ais-search-box class="pb-4 mt-2"/>
                <ais-current-refinements />
                <div class="d-flex justify-content-between">
                    <ais-stats class="mb-3" />
                    <ais-powered-by
                      :class-names="{
                          'ais-PoweredBy': 'MyCustomPoweredBy',
                        }"
                    />
                </div>
                <ais-hits
                    :class-names="{
                        'ais-Hits': 'resource-results',
                        'ais-Hits-list': 'resource-results-list',
                        'ais-Hits-item': 'resource-results-item',
                    }"
                >
                    <div
                    slot="item"
                    slot-scope="{ item }"
                    >
                        <div>
                            <div class="card rescard">
                                <div class="row no-gutters position-relative">
                                    <a
                                    :href="baseUrl + '/resources/' + item.id"
                                    v-if="item.cover_image"
                                    class="col-md-4 fill"
                                    style="display:block; background-color: #000000;"
                                    >
                                        <img
                                        :src=" storageUrl + item.cover_image"
                                        width="100%"
                                        height="auto"
                                        :alt="item.title"
                                        >
                                    </a>

                                     <a
                                    :href="baseUrl + '/resources/' + item.id"

                                    v-if="!item.cover_image"
                                    class="col-md-4 fill"
                                    style="display:block; background-color: #000000;"
                                    >

                                            <img
                                            :src="'https://picsum.photos/id/' + item.id + '/200/300'"
                                            :alt="item.title"
                                            >
                                    </a>
                                    <div class="col-md-8 position-static ">
                                        <div class="card-body px-0 pl-md-4 pt-0 pt-md-0">
                                            <div class="card-title mb-2">
                                                <h4 class="pb-3">
                                                    <a
                                                    :href="baseUrl + '/resources/' + item.id"
                                                    class="card-link ml-auto"
                                                    >
                                                        {{ item.title }}
                                                    </a>
                                                </h4>
                                                <p class="text-small">
                                                    {{ item.type.name }}
                                                </p>
                                            </div>
                                            <span
                                                v-for="tag in item.tags"
                                                :key="tag.id"
                                                class="badge badge-pill badge-light"
                                                >
                                                {{ tag.name.en }}
                                            </span>


                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="pull-left w-75">
                                                    <span class="text-small font-weight-bold">Author(s):</span>
                                                    <span
                                                    v-for="(author, index) in item.authors"
                                                    :key="author.id"
                                                    class="text-small"
                                                    >
                                                        {{ author.name }}<span v-if="index+1 < item.authors.length">, </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ais-hits>
            </div>
        </div>
    </ais-instant-search>
</template>

<script>

    import algoliasearch from 'algoliasearch/lite';
    import { history as historyRouter } from 'instantsearch.js/es/lib/routers';
    import { simple as simpleMapping } from 'instantsearch.js/es/lib/stateMappings';

    var algolia_id = process.env.MIX_ALGOLIA_APP_ID;

    var algolia_secret = process.env.MIX_ALGOLIA_SECRET;

    export default {

        // components: {
        //     [VueWordCloud.name]: VueWordCloud,
        // },

        props: {
            collectionId: null,
            resourceTag:  null,
            storageUrl: null,
        },

        data() {

            return {
                searchClient: algoliasearch(process.env.MIX_ALGOLIA_APP_ID,process.env.MIX_ALGOLIA_SECRET),
                filters: "",
                baseUrl: process.env.MIX_BASE_URL,
                tags: [],
                routing:  {
                    router: historyRouter(),
                    stateMapping: simpleMapping(),
                }
            }
        },

        created() {
            if(this.collectionId) {
                this.filters = '(collections.id = ' + this.collectionId + ")";

                //this.filters += 'AND tags.name.en:FAO'

            }
            if(this.resourceTag) {
               this.filters = 'tags.name.en:'+this.resourceTag+'';

            }
        },

        methods: {
            transformItems(items) {

                console.log("this",this);

                return items
            },
        },
    }
</script>
