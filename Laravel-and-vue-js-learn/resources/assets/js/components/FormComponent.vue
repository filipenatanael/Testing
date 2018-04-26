<template>
  <form v-bind:class="css" v-bind:action="action" v-bind:method="defineMethod" v-bind:enctype="enctype" role="form">
    <input v-if="alterMethod" type="hidden" name="_method" v-bind:value="alterMethod">
    <input v-if="token" type="hidden" name="_token" v-bind:value="token">
    <slot></slot>
  </form>
</template>

<script>
  export default {
    props: ['css', 'action', 'method', 'enctype', 'token'],
    data: () => {
      return {
        alterMethod: ''
      }
    },
    computed: {
      defineMethod: function() {
        if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get") {
          return this.method.toLowerCase();
        } else if(this.method.toLowerCase() == "put") {
          this.alterMethod = this.method.toLowerCase();
        } else if(this.method.toLowerCase() == "delete") {
          this.alterMethod = "delete";
        }
        return "post";
      }
    }
  }

  /*
  switch (this.method.toLowerCase()) {
    case "post":
      return this.method.toLowerCase();
      break;
    case "get":
      return this.method.toLowerCase();
      break;
    case "put":
      this.alterMethod = "put";
      break;
    case "delete":
      this.alterMethod = this.method.toLowerCase();
      break;
    default:
      return "post";
  }

  if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get") {
    return this.method.toLowerCase();
  } else if(this.method.toLowerCase() == "put") {
    this.alterMethod = this.method.toLowerCase();
  } else if(this.method.toLowerCase() == "delete") {
    this.alterMethod = "delete";
  }
  return "post";
  */
</script>
