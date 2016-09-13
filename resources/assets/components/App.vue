<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <nav>
                <ul class="list-inline">
                    <li><a v-link="{ name: 'home' }">Home</a></li>
                    <li class="pull-right">
                        <a v-link="{ name: 'register' }">Register</a>
                    </li>
                    <li class="pull-right">
                        <a v-link="{ name: 'signin' }">Sign in</a>
                    </li>
                    <li class="pull-right" v-if="auth.user.authenticated">
                        Hi, {{ auth.user.profile.name }}
                    </li>
                </ul>
            </nav>
        </div>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import auth from '../js/auth.js'

export default {
    data() {
            return {
                auth: auth
            }
        },
        methods: {
            signout() {
                auth.signout()
            }
        },
        ready() {
            auth.check()
        }
}
</script>