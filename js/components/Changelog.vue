<template>
    <div id="changelog">
        <article v-for="release in releases" :key="release.id" :id="release.id" class="pb-4 mb-2 border-b-2 border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h1>
                    <a class="text-4xl mb-2 no-underline text-primary" :href="'#' + release.id">
                        {{ release.name }}
                    </a>
                </h1>
                <h4 class="text-lg">
                    {{ release.published_at | formatDate }}
                </h4>
            </div>
            <div>
                <vue-markdown>{{ release.body }}</vue-markdown>
            </div>
        </article>
    </div>
</template>

<script>
import axios from 'axios'
import VueMarkdown from 'vue-markdown'
import moment from 'moment'

export default {
    components: {
        VueMarkdown
    },

    data() {
        return {
            releases: []
        }
    },

    methods: {
        getChangelog() {
            axios.get('https://api.github.com/repos/damcclean/systatic/releases')
                .then(response => {
                    this.releases = response.data
                })
        }
    },

    mounted() {
        this.getChangelog()
    }
}
</script>