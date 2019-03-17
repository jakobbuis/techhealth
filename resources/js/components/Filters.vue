<template>
    <div>
        <a href="#" @click.prevent="$emit('update:filter', 'all')" :class="filter === 'all' ? 'selected' : null">All projects</a> |
        <a href="#" @click.prevent="$emit('update:filter', 'stars')" :class="filter === 'stars' ? 'selected' : null">Starred</a> |
        <a href="#" @click.prevent="$emit('update:filter', 'problems')" :class="filter === 'problems' ? 'selected' : null">Problems</a> |
        <a href="#" @click.prevent="$emit('update:filter', 'warnings')" :class="filter === 'warnings' ? 'selected' : null">Problems and warnings</a>
    </div>
</template>

<script>
export default {
    props: ['filter'],
};
</script>

<style scoped>
a:hover {
    text-decoration: underline;
}

a:focus {
    outline: none;
}

.selected {
    font-weight: bold;
    text-decoration: underline;
}

</style>
