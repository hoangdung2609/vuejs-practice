<!DOCTYPE html>
<html>
<head>
    <title>Vue.js</title>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>

{{--<div id="app">--}}
    {{--<v-app id="inspire">--}}
        {{--<v-toolbar app>--}}
            {{--<v-toolbar-title>@{{ dataAppName }}</v-toolbar-title>--}}
        {{--</v-toolbar>--}}
        {{--<v-navigation-drawer app></v-navigation-drawer>--}}
        {{--<v-content>--}}
            {{--<v-container fluid>--}}
                {{--@{{ dataHello }}--}}
            {{--</v-container>--}}
        {{--</v-content>--}}
        {{--<v-footer></v-footer>--}}
    {{--</v-app>--}}

    {{--<p>--}}
        {{--<router-link to="/user/foo">/user/foo</router-link>--}}
        {{--<router-link to="/user/foo/profile">/user/foo/profile</router-link>--}}
        {{--<router-link to="/user/foo/posts">/user/foo/posts</router-link>--}}
    {{--</p>--}}
    {{--<router-view></router-view>--}}
{{--</div>--}}

<div id="app">
    <v-app id="inspire">
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Login form</v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-tooltip bottom>
                                    <v-btn
                                            icon
                                            large
                                            :href="source"
                                            target="_blank"
                                            slot="activator"
                                    >
                                        <v-icon large>code</v-icon>
                                    </v-btn>
                                    <span>Source</span>
                                </v-tooltip>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field prepend-icon="person" name="login" label="Login" type="text"></v-text-field>
                                    <v-text-field prepend-icon="lock" name="password" label="Password" id="password" type="password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="primary">Login</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</div>

<div>
    <v-app>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-toolbar app></v-toolbar>
        <v-content>
            <v-container fluid>
                <route-view></route-view>
            </v-container>
        </v-content>
        <v-footer app></v-footer>
    </v-app>

    {{--<v-app>--}}
        {{--<v-navigation-drawer app fixed clipped>--}}
            {{--<v-list>--}}
                {{--<v-list-tile v-for="i in 3" :to="{path: '/page' + i}">--}}
                    {{--<v-list-tile-action>--}}
                        {{--<v-icon> @{{ icons[i-1] }}</v-icon>--}}
                    {{--</v-list-tile-action>--}}
                    {{--<v-list-tile-content>--}}
                        {{--<v-list-tile-title>Page @{{ i }}</v-list-tile-title>--}}
                    {{--</v-list-tile-content>--}}
                {{--</v-list-tile>--}}
            {{--</v-list>--}}
        {{--</v-navigation-drawer>--}}
        {{--<v-toolbar app fixed clipped-left>--}}
            {{--<v-menu :nudge-width="-100">--}}
                {{--<v-toolbar-title slot="activator">--}}
                    {{--Toolbar--}}
                {{--</v-toolbar-title>--}}
                {{--<v-list>--}}
                    {{--<v-list-tile :to="'/page1'">--}}
                        {{--Settings--}}
                    {{--</v-list-tile>--}}
                    {{--<v-list-tile :to="'/page2'">--}}
                        {{--<v-list-tile-title v-text="'Account'"></v-list-tile-title>--}}
                    {{--</v-list-tile>--}}
                {{--</v-list>--}}
            {{--</v-menu>--}}
        {{--</v-toolbar>--}}
        {{--<v-content>--}}
            {{--<v-container fluid>--}}
                {{--<v-fade-transition mode="out-in">--}}
                    {{--<router-view></router-view>--}}
                {{--</v-fade-transition>--}}
            {{--</v-container>--}}
        {{--</v-content>--}}
    {{--</v-app>--}}
</div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vuex/3.0.1/vuex.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
<script>
    Vue.use(VueRouter)

    new Vue({
        el: '#app',
        data: () => ({
            drawer: null
        }),
        props: {
            source: String
        }
    })
    // let component1 = {
    //     template:`<div class="title">Page 1</div>`
    // }
    // let component2 = {
    //     template:`<div class="title">Page 2</div>`
    // }
    // let component3 = {
    //     template:`<div class="title">Page 3</div>`
    // }
    //
    // let router = new VueRouter({
    //     routes: [
    //         {
    //             path: '/page1',
    //             name: 'Page 1',
    //             component: component1,
    //         },
    //         {
    //             path: '/page2',
    //             name: 'Page 2',
    //             component: component2,
    //         },
    //         {
    //             path: '/page3',
    //             name: 'Page Three',
    //             component: component3,
    //         },
    //         { path: '*', redirect: '/page1' }
    //     ]
    // })
    //
    // new Vue({
    //     el: '#app',
    //     router,
    //     data() {
    //         return {
    //             icons: ['dashboard', 'home', 'event']
    //         }
    //     }
    // })
</script>

<script>
    // const store = new Vuex.Store({
    //     state: {
    //         count: 0,
    //         finished: false
    //     },
    //     mutations: {
    //         increment (state) {
    //             state.count++
    //         }
    //     }
    // })
    //
    // store.commit('increment')
    // console.log(store.state.count);
    //
    // const Counter = {
    //     template: `<div>@{{ count }}</div>`,
    //     computed: {
    //         count () {
    //             return store.state.count
    //         }
    //     }
    // }
    //
    // const app = new Vue({
    //     el: '#app',
    //     // provide the store using the "store" option.
    //     // this will inject the store instance to all child components.
    //     store,
    //     components: { Counter },
    //     template: `
    //         <div class="app">
    //           <counter></counter>
    //         </div>
    //       `
    // })


  //   const User = {
  //       template: `
  //           <div class="user">
  //           <p v-if="logParams($route.params.id)">
  //               TRUE!!!!!
  //           </p>
  //           <h2>User @{{ $route.params.id }}</h2>
  //           <router-view></router-view>
  //           </div>
  // `,
  //       methods: {
  //           logParams: function(id) {
  //               if (parseInt(id) > 5) {
  //                   return true
  //               }
  //               return false
  //           }
  //       }
  //   }
  //
  //   const UserHome = { template: '<div>Home</div>' }
  //   const UserProfile = { template: '<div>Profile</div>' }
  //   const UserPosts = { template: '<div>Posts</div>' }
  //
  //   const router = new VueRouter({
  //       routes: [
  //           { path: '/user/:id', component: User,
  //               children: [
  //                   // UserHome will be rendered inside User's <router-view>
  //                   // when /user/:id is matched
  //                   { path: '', component: UserHome },
  //
  //                   // UserProfile will be rendered inside User's <router-view>
  //                   // when /user/:id/profile is matched
  //                   { path: 'profile', component: UserProfile },
  //
  //                   // UserPosts will be rendered inside User's <router-view>
  //                   // when /user/:id/posts is matched
  //                   { path: 'posts', component: UserPosts }
  //               ]
  //           }
  //       ]
  //   })
  //
  //   const app = new Vue({ router }).$mount('#app')
</script>
</body>
</html>