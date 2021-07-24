<template>
  <div>
    <el-table
      :data="data"
      style="width: 100%">
      <el-table-column
        prop="name"
        label="Назва будинку"
        width="180">
      </el-table-column>
      <el-table-column
        prop="price"
        label="Ціна"
        width="180">
      </el-table-column>
      <el-table-column
        prop="bedrooms"
        label="Кількість спальних кімнат">
      </el-table-column>
      <el-table-column
        prop="bathrooms"
        label="Кількість ванних кімнат">
      </el-table-column>
      <el-table-column
        prop="storeys"
        label="Поверховість">
      </el-table-column>
      <el-table-column
        prop="garages"
        label="Кількість гаражів">
      </el-table-column>
    </el-table>
  </div>
</template>

<script>
  export default {
  props: ['data'],
      mounted() {
          this.update
          },
      methods: {
        update: function() {
          console.log(this.data)
        }
      }
  }
</script>
