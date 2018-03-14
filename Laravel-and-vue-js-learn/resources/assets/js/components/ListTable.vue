<template>
  <div>
    <a v-if="create" v-bind:href="create">Create</a>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for=" title in titles">{{ title }}</th>
          <th v-if=" detail || edit || _delete"> Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in itens">
          <td v-for="i in item">{{ i }}</td>

          <td v-if=" detail || edit || _delete">
             <form  v-if="_delete && token" action="index.html" method="post">
               <input type="hidden" name="_method" value="DELETE">
               <input type="hidden" name="_token" v-bind:value="token">

               | <a v-if="detail" v-bind:href="detail">See more</a> |
               <a v-if="edit" v-bind:href="edit">Edit</a> |
               <a v-if="_delete" v-bind:href="_delete">Delete</a> |
             </form>

            | <a v-if="detail" v-bind:href="detail">See more</a> |
            <a v-if="edit" v-bind:href="edit">Edit</a> |
            <a v-if="_delete" v-bind:href="_delete">Delete</a> |
            
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
    ]
  }
</script>
