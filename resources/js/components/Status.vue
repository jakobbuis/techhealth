<template>
    <span class="icon" :class="color">
        <i class="fas" :class="icon"></i>
    </span>
</template>

<script>
export default {
    props: ['status'],

    computed: {
        color() {
            // if (this.status === 'good') {
            return 'has-text-success';
            // }
        },

        icon() {
            // if (this.status === 'good') {
            return 'fa-check';
            // }
        },
    },
};
</script>
