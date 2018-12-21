<!doctype html>
<html>
<!-- field template -->
<script type="text/x-template" id="listbox-template">
    <div id="complist">
        <select v-model="selected" v-on:change="onListSelect" id="list_box" :size="size">
            <option v-for="opt in selectOptions" v-bind:value="opt">{{opt.text}}</option>
        </select>
    </div>
</script>

<script>
    function ListOption(t, v) {
        this.text = t;
        this.value = v;
    }

    Vue.component('mylistbox', {
        el: function () {return '#complist' + this.id},
        //template: "#listbox-template",
        props: ['size', 'doselect', 'id'],
        data: function () {
            return {
                list: null,
                selected: -1,
                selectOptions: [],
                selectHandler: null
            }
        },
        ready: function () {
            this.list = $('#' + this.id);
        },
        created: function () {
            if (this.size === undefined) {
                this.size = 3;
            }
            if (this.doselect !== undefined) {
                this.selectHandler = this.doselect;
            }
            var lissa = this.makeTemplate($('#listbox-template').html(), 'list_box', this.id);
            console.log(lissa);
            this.$options.template = lissa;
            //this.list = $(("#" + this.id));
            //alert(this.id);
        },
        methods: {
            makeTemplate: function (temp, target, id) {
                var replacer = (new StringReplacer())
                        .add(target, new Replacement(id))
                        .add('complist', new Replacement(id, Replacement.APPEND, 'complist'));
                return replacer.replace(temp);
            },
            setSize: function (size) {
                this.size = size;
                this.list.prop('size', size);
            },
            getSize: function () {
                return this.size;
            },
            addOption: function (text, value) {
                var opt = new ListOption(text, value);
                this.selectOptions.push(opt);
            },
            clearSelection: function () {
                this.list.val("");
            },
            onListSelect: function (e) {
                //debugger;
                if (this.selectHandler && (this.selected != -1 || this.selected != null)) {
                    var opt = new ListOption(this.selected.text, this.selected.value);
                    if (typeof this.selectHandler === "function") {
                        //fyi('function...');
                        this.selectHandler(opt);
                    } else {
                        this.$parent[this.selectHandler].apply(this.$parent, [opt]);
                    }
                }
            },
            addSelectHandler: function (handler) {
                this.selectHandler = handler;
            },
            clearList: function () {
                this.selectOptions = [];
                this.selected = -1;
            },
            setSelected: function (s) {
                this.selected = this.selectOptions[s];
            },
            getSelected: function () {
                //debugger;
                if (this.selected != -1) {
                    return this.selected.value;
                }
                return -1;
            },
        }
    });
</script>
</html>
