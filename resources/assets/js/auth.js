import Vue from './app.js';
import {router} from './app.js';

export default {
    user: {
        authenticated: false,
        profile: null
    },
    register(context, name, email, password) {
        Vue.http({
            url: 'api/register',
            method: 'POST',
            data: {
                name: name,
                email: email,
                password: password,
            }
        }).then(response => {
            context.success = true
        }, response => {
            context.response = response.data
            context.error = true
        })
    }
}
