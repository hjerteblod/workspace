
const app = new Vue({
    el: '#app',
    data: {
        errors: [],
        username: null,
        password: null
    },

    methods: {
        checkForm: function (e) {
            this.errors = [];

            if (!this.username) {
                this.errors.push("Bitte Username eingeben.");
            }

            if (!this.password) {
                this.errors.push("Bitte Password eingeben.");
            }

            if (!this.errors.length) {
                return true;
            }

            e.preventDefault();
        }
    }

});


