<script>
    import VueGallery from 'vue-gallery';

    export default {
        components: {
            'gallery': VueGallery
        },

        data() {
            return {
                images: [
                    'https://dummyimage.com/800/ffffff/000000',
                    'https://dummyimage.com/1600/ffffff/000000',
                    'https://dummyimage.com/1280/000000/ffffff',
                    'https://dummyimage.com/400/000000/ffffff'
                ],

                index: null
            }
        }
    }
</script>

<style lang="scss" scoped>
    .image {
        float: left;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        border: 1px solid #ebebeb;
        margin: 5px;
    }
</style>
