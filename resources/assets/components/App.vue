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
                </ul>
            </nav>
        </div>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>
</template>