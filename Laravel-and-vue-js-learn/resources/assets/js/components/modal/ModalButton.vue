<template>
  <span>
    <span v-if="item">
      <button v-on:click="fillOutTheForm()" v-if="!type || (type != 'button' && type != 'link')" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
      <button v-on:click="fillOutTheForm()" v-if="type == 'button'" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
      <a v-on:click="fillOutTheForm()" v-if="type == 'link'" href="#" v-bind:class="btnclass || ''" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</a>
    </span>
    <span v-if="!item">
      <button v-if="!type || (type != 'button' && type != 'link')" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
      <button v-if="type == 'button'" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
      <a v-if="type == 'link'" href="#" v-bind:class="btnclass || ''" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</a>
    </span>
  </span>
</template>

<script>
  export default {
    props: ['type', 'id', 'value','btnclass','item', 'url'],
    methods: {
      fillOutTheForm: function() {
        //admin/articles/id
        axios.get(this.url + this.item.id).then(response => {
          console.log(response.data);
          this.$store.commit('setItem', response.data);
        });
        //this.$store.commit('setItem', this.item);
      }
    }
  }
</script>
