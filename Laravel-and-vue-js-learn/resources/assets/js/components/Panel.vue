<template>
  <div v-bind:class="defineColor">
      <div class="panel-heading">{{ title }}</div>

      <div class="panel-body">
          <slot></slot>
      </div>
  </div>
</template>

<script>
    export default {
        props: ['title','color'],
        computed: {
           defineColor: function(){
             return "panel "+(this.color || "panel-default");
           }
        }



    }
</script>


<style media="screen">
  .green {
    border-color: #8cf561;
  }
  .green > .panel-heading {
    color: #000000;
    background-color: #8cf561;
    border-color: #8cf561;
  }
  </style>
