<template>
    <div id="changelog">
        <article v-for="release in releases" :key="release.id" :id="release.id" class="mb-6">
            <h1>
                <a class="text-4xl mb-2 no-underline text-primary" :href="'#' + release.id">{{ release.name }}</a>
            </h1>
            <div>
                <vue-markdown>{{ release.body }}</vue-markdown>
            </div>
        </article>
    </div>
</template>

<script>
import axios from 'axios'
import VueMarkdown from 'vue-markdown'

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