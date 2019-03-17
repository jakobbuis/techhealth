<template>
    <div class="column is-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    {{ project.name }}
                    <a :href="project.url" target="blank" rel="noopener">
                        <i class="fas fa-link"></i>
                    </a>
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon">
                        <i class="far fa-star"></i>
                    </span>
                </a>
            </header>
            <table class="table is-bordered is-striped is-fullwidth">
                <tbody>
                    <tr>
                        <th>Backend updates</th>
                        <td class="integer">{{ project.stats.composer_outdated }}</td>
                        <td class="status">
                            <status
                                :value="project.stats.composer_outdated"
                                :warn="5" :bad="10">
                            </status>
                        </td>
                    </tr>
                    <tr>
                        <th>Frontend updates</th>
                        <td class="integer">{{ project.stats.npm_outdated }}</td>
                        <td class="status">
                            <status
                                :value="project.stats.npm_outdated"
                                :warn="5" :bad="10">
                            </status>
                        </td>
                    </tr>
                    <tr>
                        <th>Frontend vulnerabilities</th>
                        <td class="integer">{{ project.stats.npm_vulnerabilities }}</td>
                        <td class="status">
                            <status
                                :value="project.stats.npm_vulnerabilities"
                                :warn="1" :bad="2">
                            </status>
                        </td>
                    </tr>
                    <tr>
                        <th>Bugs in the last 30 days</th>
                        <td class="integer">{{ project.stats.bugs }}</td>
                        <td class="status">
                            <status
                                :value="project.stats.bugs"
                                :warn="300" :bad="1200">
                            </status>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import Status from './Status';

export default {
    props: ['project'],
    components: { Status },
};
</script>

<style scoped>
.card {
    margin-left: 0.5em;
    margin-right: 0.5em;
}
.card-header-title a {
    display: inline-block;
    margin-left: 0.5em;
}
td.status {
    text-align: center;
}
td.integer {
    text-align: right;
}
</style>
