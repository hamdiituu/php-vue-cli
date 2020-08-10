Vue.component('rating-counter', {
    data() {
        return {
            count: 0
        }
    },
    template: `<div>
                    <button v-on:click="count--">Thumbs Down</button>
                    {{ count }}
                    <button v-on:click="count++">Thumbs Up</button>
                </div>`
})