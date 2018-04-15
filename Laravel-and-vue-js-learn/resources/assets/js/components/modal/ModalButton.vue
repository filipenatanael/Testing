<template>
  <span>
    <button v-if="!type || (type != 'button' && type != 'link')" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
    <button v-if="type == 'button'" type="button" v-bind:class="btnclass || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</button>
    <a v-if="type == 'link'" href="#" v-bind:class="btnclass || ''" data-toggle="modal" v-bind:data-target="`#${id}`">{{ value }}</a>
  </span>
</template>

<script>
  export default {
    props: ['type', 'id', 'value','btnclass']
  }
</script>
