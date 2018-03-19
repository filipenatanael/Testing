<template>
  <div>
    <a v-if="create" v-bind:href="create">Create</a>
    <div class="form-inline">
       <a v-if="create" v-bind:href="create">Create</a>
       <div class="form-group pull-right">
          <input type="search" class="form-control" placeholder="Search" v-model="search"> {{ search }}
       </div>
    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for=" title in titles">{{ title }}</th>
          <th v-if=" detail || edit || _delete"> Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in listOfItens">
          <td v-for="i in item">{{ i }}</td>
          <td v-if=" detail || edit || _delete">

             <form v-bind:id="index" v-if="_delete && token" v-bind:action="_delete" method="post">
               <input type="hidden" name="_method" value="DELETE">
               <input type="hidden" name="_token" v-bind:value="token">

               | <a v-if="detail" v-bind:href="detail">See more</a> |
               <a v-if="edit" v-bind:href="edit">Edit</a> |
               <a href="#" v-on:click="executeForm(index)"> Delete</a>
             </form>
              <span v-if="!token">
              | <a v-if="detail" v-bind:href="detail">See more</a> |
              <a v-if="edit" v-bind:href="edit">Edit</a> |
              <a v-if="_delete" v-bind:href="_delete">Delete</a> |
              </span>
              <span v-if="token && !_delete">
              | <a v-if="detail" v-bind:href="detail">See more</a> |
              <a v-if="edit" v-bind:href="edit">Edit</a> |
              </span>

          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  export default {
    props: [
      'titles',
      'itens',
      'create',
      'detail',
      'edit',
      '_delete',
      'token'
    ],
    data: function(){
      return {
        search: ''
      }
    },
    computed: {
      listOfItens: function(){
        return this.itens.filter(response => {
          for(let i=0; i < response.length; i++){
            if((response[i] + "").toLowerCase().indexOf(this.search.toLowerCase()) >= 0){
              return true;
            }
          }
              return false;
        });
        return this.itens;
      }
    },
    methods: {
      executeForm: function(index){
        document.getElementById(index).submit();
      }
    }
  }
</script>
