<template>
    <div class="container is-clearfix">
        <div class="columns" v-for="row in projectsPerRow">
            <project
                v-for="project in row"
                :key="project.id"
                :project="project">
            </project>
        </div>
    </div>
</template>

<script>
import Project from './Project';

export default {
    components: { Project },

    data() {
        return {
            projects: [],
        };
    },

    mounted() {
        axios.get('api/projects').then(response => {
            this.projects = response.data;
        });
    },

    computed: {
        projectsPerRow() {
            const rows = [];
            for (let i = 0; i < this.projects.length; i += 4) {
                rows.push(this.projects.slice(i, i + 4));
            }
            return rows;
        },
    },
};
</script>

<style scoped>
.container {
    margin-top: 1em;
}
</style>
