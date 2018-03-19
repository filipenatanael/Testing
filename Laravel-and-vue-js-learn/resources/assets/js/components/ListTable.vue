<template>
  <div>
    <a v-if="create" v-bind:href="create">Create</a>
    <div class="form-inline">
      <a v-if="create" v-bind:href="create">Create</a>
      <div class="form-group pull-right">
        <input type="search" class="form-control" placeholder="Search" v-model="search">
      </div>
    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-on:click="orderByColumn(index)" v-for=" title in titles" style="cursor:pointer">{{ title }}</th>
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
    'order',
    'orderColumn',
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
  methods: {
    executeForm: function(index){
      document.getElementById(index).submit();
    },
    orderByColumn: function(column){
      this.orderColumn = column;
      console.log(column);
      if(this.order.toLowerCase() == "asc"){
        this.order = 'desc';
      }else{
        this.order = 'asc';
      }
    }
  },
  computed: {
    listOfItens: function(){

      let order = this.order || "asc";
      let orderColumn = this.orderColumn || 0;

      order = order.toLowerCase();
      orderColumn = parseInt(orderColumn);

      if(order == "asc"){
        this.itens.sort(function(a,b){
          if(a[orderColumn] > b[orderColumn]){ return 1; }
          else if(a[orderColumn] < b[orderColumn]){ return -1 }
          return 0;
        });
      } else{
        this.itens.sort(function(a,b){
          if(a[orderColumn] < b[orderColumn]){ return 1; }
          else if(a[orderColumn] > b[orderColumn]){ return -1 }
          return 0;
        });
      }

      // this.itens.sort(function(a,b){
      //   if(a[1] < b[1]){ return 1; }
      //   else if(a[1] > b[1]){ return -1 }
      //   return 0;
      // });

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

}
</script>
