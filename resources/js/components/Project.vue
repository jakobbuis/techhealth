<template>
    <div class="column is-3">
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
                        <td>0</td>
                        <td><status :status="status"></status></td>
                    </tr>
                    <tr>
                        <th>Frontend updates</th>
                        <td>0</td>
                        <td><status :status="status"></status></td>
                    </tr>
                    <tr>
                        <th>Frontend vulnerabilities</th>
                        <td>0</td>
                        <td><status :status="status"></status></td>
                    </tr>
                    <tr>
                        <th>Bugs in the last 30 days</th>
                        <td>0</td>
                        <td><status :status="status"></status></td>
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

    computed: {
        status() {
            return 'good';
        }
    },
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
td {
    text-align: center;
}
</style>
