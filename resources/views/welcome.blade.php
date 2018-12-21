<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

<div id="app">
    <p>
        <router-link to="/user/foo">/user/foo</router-link>
        <router-link to="/user/foo/profile">/user/foo/profile</router-link>
        <router-link to="/user/foo/posts">/user/foo/posts</router-link>
    </p>
    <router-view></router-view>
</div>

<script>
    const User = {
        template: `
            <div class="user">
            <p v-if="logParams($route.params.id)">
                TRUE!!!!!
            </p>
            <h2>User @{{ $route.params.id }}</h2>
            <router-view></router-view>
            </div>
  `,
        methods: {
            logParams: function(id) {
                if (parseInt(id) > 5) {
                    return true
                }
                return false
            }
        }
    }

    const UserHome = { template: '<div>Home</div>' }
    const UserProfile = { template: '<div>Profile</div>' }
    const UserPosts = { template: '<div>Posts</div>' }

    const router = new VueRouter({
        routes: [
            { path: '/user/:id', component: User,
                children: [
                    // UserHome will be rendered inside User's <router-view>
                    // when /user/:id is matched
                    { path: '', component: UserHome },

                    // UserProfile will be rendered inside User's <router-view>
                    // when /user/:id/profile is matched
                    { path: 'profile', component: UserProfile },

                    // UserPosts will be rendered inside User's <router-view>
                    // when /user/:id/posts is matched
                    { path: 'posts', component: UserPosts }
                ]
            }
        ]
    })

    const app = new Vue({ router }).$mount('#app')
</script>
</body>
</html>