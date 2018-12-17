<!DOCTYPE html>
<html lang="vi VN" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>SPA Vuejs</title>

    <!-- Main styles for this application -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
</head>
<body>
<div id="app"></div>
<div id="app1">
    <p>@{{ foo }}</p>
    <button v-on:click="created()">Change it</button>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>


    // var myObj = {
    //     a: 0
    // };
    //
    // Object.defineProperty(myObj, 'b', {
    //     get: function() {
    //         return this.a + 1;
    //     }
    // });
    // Object.defineProperty(myObj, 'c', {
    //     set: function(x) {
    //         this.a = x / 2;
    //     }
    // });
    // console.log(myObj.b) // Gọi đến get và trả về a + 1, ở đây kết quả là 0 + 1 = 1
    // myObj.c = 10;
    // console.log(myObj.a) // Kết quả là 5

    // new Vue({
    //     el: 'app1',
    //     data: {
    //         a: 1
    //     },
    //     created: function () {
    //         // `this` points to the vm instance
    //         console.log('a is: ' + this.a)
    //     }
    // })
</script>
</body>
</html>
