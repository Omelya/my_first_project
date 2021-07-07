<template>
  <div>
    <table>
      <thead>
        <tr>
          <th>
            Назва будинку
          </th>
          <th>
            Ціна
          </th>
          <th>
            Кількість спальних кімнат
          </th>
          <th>
            Кількість ванних кімнат
          </th>
          <th>
            Поверховість
          </th>
          <th>
            Кількість гаражів
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="result in data">
          <td>{{result.name}}</td>
          <td>{{result.price}}</td>
          <td>{{result.bedrooms}}</td>
          <td>{{result.bathrooms}}</td>
          <td>{{result.storeys}}</td>
          <td>{{result.garages}}</td>
        </tr>
      </tbody>
    </table>
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
