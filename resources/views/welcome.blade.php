<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">
    {{--<my-component></my-component>--}}
    {{--<example-component></example-component>--}}
    <app></app>
</div>

<div id="components-demo">
    {{--<button-counter></button-counter>--}}
    {{--<button-counter></button-counter>--}}
    {{--<button-counter></button-counter>--}}
    {{--<test-title></test-title>--}}
</div>

{{--<div id="blog-post-demo">--}}
    {{--<blog-post--}}
            {{--v-for="post in posts"--}}
            {{--v-bind:key="post.id"--}}
            {{--v-bind:title="post.title"--}}
    {{--></blog-post>--}}
{{--</div>--}}

<div id="blog-post-demo">
    <blog-post
            v-for="post in posts"
            v-bind:key="post.id"
            v-bind:post="post"
    ></blog-post>
</div>

<div id="blog-posts-events-demo">
    {{--<div :style="{ fontSize: postFontSize + 'em' }">--}}
        {{--<blog-post--}}
            {{--v-for="post in posts"--}}
            {{--v-bind:key="post.id"--}}
            {{--v-bind:post="post"--}}
            {{--v-on:enlarge-text="onEnlargeText"--}}
        {{--></blog-post>--}}
    {{--</div>--}}
    {{--<custom-input v-model="searchText"></custom-input>--}}

    {{--<input type="checkbox" id="checkbox" v-model="checked">--}}
    {{--<label for="checkbox">@{{ checked }}</label>--}}

    {{--<select v-model="selected" id="test">--}}
        {{--<option disabled value="">Please select one</option>--}}
        {{--<option>A</option>--}}
        {{--<option>B</option>--}}
        {{--<option>C</option>--}}
    {{--</select>--}}
    {{--<span>Selected: @{{ selected }}</span>--}}
</div>

<script src="/js/app.js"></script>
<script>

    // Vue.component('button-counter', {
    //     data: function () {
    //         return {
    //             count: 0,
    //             title: "testing"
    //         }
    //     },
    //     template: '<button v-bind:title="title" v-on:click="count++">You clicked me @{{ count }} times.</button>'
    // })

    // Vue.component('blog-post', {
        // data: function () {
        //     return {
        //         posts: [
        //             { id: 1, title: 'My journey with Vue' },
        //             { id: 2, title: 'Blogging with Vue' },
        //             { id: 3, title: 'Why Vue is so fun' }
        //         ]
        //     }
        // },
        // props: ['title'],
        // template: '<div class="test-title"><h1>@{{ title }}</h1><button v-on:click="changeTitle">test title</button></div>',
        // methods: {
        //     changeTitle() {
        //         this.title = "title changed"
        //     }
        // }
    // });

    // Vue.component('blog-post', {
    //     // data: function() {
    //     //     return {
    //     //         author: 'dungha'
    //     //     }
    //     // },
    //     props: ['post'],
    //     // template: '<div><h1>author: @{{ author }}</h1><div v-html="post.content"></div></div>'
    //     template: '    <div class="blog-post">\n' +
    //         '      <h3>@{{ post.title }}</h3>\n' +
    //         // '      <div v-html="post.content"></div>\n' +
    //         '    <button v-on:click="helloWorld">helloWorld</button></div>',
    //     methods: {
    //         helloWorld() {
    //             console.log(this.post.id);
    //             console.log(this.post.title);
    //         }
    //     }
    // })

    // Vue.component('blog-post', {
    //     props: ['post'],
    //     template: `
    // <div class="blog-post">
    //   <p>@{{ post.title }}</p>
    //     <input v-model="searchText">
    //     <button v-on:click="$emit('enlarge-text', 0.1)">
    //       Enlarge text
    //     </button>
    //   <div v-html="post.content" ></div>
    // </div>
    // `,
    // })



    var data = [
        { id: 1, title: 'My journey with Vue', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'},
        { id: 2, title: 'Blogging with Vue', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit' },
        { id: 3, title: 'Why Vue is so fun', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit' },
        { id: 4, title: 'Ahihi', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'}
    ];

    Vue.component('custom-input', {
        props: ['value'],
        template: `
    <input
      v-bind:value="value"
      v-on:input="$emit('input', $event.target.value)"
    >
  `
    })

    new Vue({
        el: '#blog-posts-events-demo',
        data: {
            posts: data,
            postFontSize: 1,
            message: '',
            checked: false,
            selected: ''
        },

        methods: {
            onEnlargeText: function (enlargeAmount) {
                this.postFontSize += enlargeAmount
            }
        }
    })

    // Vue.component('blog-post', {
    //     // props: ['posts'],
    //     data: function () {
    //         return {
    //             posts: [
    //                 { id: 1, title: 'My journey with Vue' },
    //                 { id: 2, title: 'Blogging with Vue' },
    //                 { id: 3, title: 'Why Vue is so fun' }
    //             ]
    //         }
    //     },
    //     template: '<div v-for="post in posts" v-bind:key="post.id" v-bind:title="post.title">@{{ post.title }}</div>'
    // })
    //
    // new Vue({ el: '#blog-post-demo' });

</script>
</body>
</html>