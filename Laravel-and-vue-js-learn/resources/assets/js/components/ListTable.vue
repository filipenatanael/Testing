<template>
  <div>
    <a href="">Create</a>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th v-for=" title in titles">{{ title }}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Testing Laravel</td>
          <td>Testing by using laravel framework</td>
          <td>John W.</td>
          <td>05/23/2010</td>
          <td>
            | <a href="">See more</a> |
            <a href="">Edit</a> |
            <a href="">Delete</a> |
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  export default {
    props: ['titles']
  }
</script>
