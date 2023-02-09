const { createApp } = Vue;
const apiUri = 'http://localhost/php-dischi-json/api.php';
const app = createApp({
    data() {
        return {
            songs: []
        }
    },
    created() {
        axios.get(apiUri).then(res => {
            this.songs = res.data;
        });
    }
})

app.mount('#app')