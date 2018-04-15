<template>
  <div>
    <a v-if="create" v-bind:href="create">Create</a>
    <div class="form-inline">

      <button type="button" v-on:click="mutationsTesting()"> Mutations Testing</button>
      <p><b>{{ "this.$store.state.item: " }}</b> {{ this.$store.state.item }}</p>

      <a v-if="create && !modal" v-bind:href="create">Create</a>
      <modal-button v-if="create && modal" type="button" id="addModal" value="Create" btnclass=""></modal-button>
      <div class="form-group pull-right">
        <input type="search" class="form-control" placeholder="Search" v-model="search">
      </div>
    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-on:click="orderByColumn(index)" v-for="(title, index) in titles" style="cursor:pointer">{{ title }}</th>
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

              <a v-if="detail && !modal" v-bind:href="detail">| Details |</a>
              <modal-button v-if="detail && modal" v-bind:item="item" type="link" id="detailsModal" value="Details |" btnclass=""></modal-button>
              <a v-if="create && !modal" v-bind:href="edit">Edit |</a>
              <!-- Pass data(item) to ModalButton by: v-bind:item="item" -->
              <modal-button v-if="create && modal" v-bind:item="item" type="link" id="editModal" value="Edits |" btnclass=""></modal-button>

              <a href="#" v-on:click="executeForm(index)"> Delete |</a>
            </form>

            <span v-if="!token">
              <a v-if="detail && !modal" v-bind:href="detail">| Details |</a>
              <modal-button v-if="detail && modal" v-bind:item="item" type="link" id="detailsModal" value="Details |" btnclass=""></modal-button>
              <a v-if="create && !modal" v-bind:href="edit">Edit |</a>
              <modal-button v-if="create && modal" type="link" id="editModal" value="Edit |" btnclass=""></modal-button>
              <a v-if="_delete" v-bind:href="_delete">Delete |</a>
            </span>

            <span v-if="token && !_delete">
              <a v-if="detail && !modal" v-bind:href="detail">| Details |</a>
              <modal-button v-if="detail && modal" v-bind:item="item" type="link" id="detailsModal" value="Details |" btnclass=""></modal-button>
              <a v-if="create && !modal" v-bind:href="edit">Edit |</a>
              <modal-button v-if="create && modal" type="link" id="editModal" value="Edit |" btnclass=""></modal-button>
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
    'token',
    'modal'
  ],
  data: function(){
    return {
      search: '',
      orderAux: this.order || "asc",
      orderColumnAux: this.orderColumn || 0
    }
  },
  methods: {
    executeForm: function(index){
      document.getElementById(index).submit();
    },
    orderByColumn: function(column){
      this.orderColumnAux = column;
      if(this.orderAux.toLowerCase() == "asc"){
        this.orderAux = 'desc';
      }else{
        this.orderAux = 'asc';
      }
    },
    mutationsTesting: function() {
        this.$store.commit('setItem',{ hello:"Hello would!" });
    }
  },
  computed: {
    listOfItens: function(){

      let order = this.orderAux;
      let orderColumn = this.orderColumnAux;

      order = order.toLowerCase();
      orderColumn = parseInt(orderColumn);

      if(order == "asc"){
        this.itens.sort(function(a,b){
          if(Object.values(a)[orderColumn] > Object.values(b)[orderColumn]){ return 1; }
          else if(Object.values(a)[orderColumn] <Object.values(b)[orderColumn]){ return -1 }
          return 0;
        });
      } else{
        this.itens.sort(function(a,b){
          if(Object.values(a)[orderColumn] < Object.values(b)[orderColumn]){ return 1; }
          else if(Object.values(a)[orderColumn] > Object.values(b)[orderColumn]){ return -1 }
          return 0;
        });
      }

      // this.itens.sort(function(a,b){
      //   if(a[1] < b[1]){ return 1; }
      //   else if(a[1] > b[1]){ return -1 }
      //   return 0;
      // });

      if(this.search) {
        return this.itens.filter(response => {
          for(let i=0; i < response.length; i++){
            if((response[i] + "").toLowerCase().indexOf(this.search.toLowerCase()) >= 0){
              return true;
            }
          }
          return false;
        });
      }

      return this.itens;
    }
  },

}
</script>
