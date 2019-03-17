<template>
    <span class="icon" :class="color">
        <i class="fas" :class="icon"></i>
    </span>
</template>

<script>
export default {
    props: ['value', 'warn', 'bad'],

    computed: {

        status() {
            const warn = this.warn;
            const bad = this.bad;

            if (this.value < warn) {
                return 'good';
            }
            if (this.value < bad) {
                return 'warning';
            }
            return 'bad';
        },

        color() {
            if (this.status === 'good') {
                return 'has-text-success';
            }

            if (this.status === 'warning') {
                return 'has-text-warning';
            }

            if (this.status === 'bad') {
                return 'has-text-danger';
            }
        },

        icon() {
            if (this.status === 'good') {
                return 'fa-check';
            }

            if (this.status === 'warning') {
                return 'fa-exclamation-triangle';
            }

            if (this.status === 'bad') {
                return 'fa-times';
            }
        },
    },
};
</script>
