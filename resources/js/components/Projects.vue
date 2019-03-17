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
    props: ['filter'],

    components: { Project },

    data() {
        return {
            projects: [],
        };
    },

    mounted() {
        axios.get('api/projects').then(response => {
            this.projects = response.data.data;
        });
    },

    computed: {
        // Filter the list of projects based on current filter selected
        filteredProjects() {
            const projects = this.projects;
            const filter = this.filter;
            if (this.filter === 'all') {
                return projects;
            }
            return [];
        },

        // Chunk the current set of projects in sets of 3 for use in multiple rows
        projectsPerRow() {
            const rows = [], chunkSize = 3, projects = this.filteredProjects;
            for (let i = 0; i < projects.length; i += chunkSize) {
                rows.push(projects.slice(i, i + chunkSize));
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
