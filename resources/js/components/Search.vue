<template>
  <div>
    <div style="margin: 0 auto; width: 300px; padding: 10px; display: flex; flex-direction: column; align-items: center; line-height: 25px">
      <label for="name">Назва</label>
      <el-input placeholder="Please input" name="name" v-model="name"></el-input>
      <label for="priceFrom">Ціна від</label>
      <el-input placeholder="Please input" name="priceFrom" v-model="priceFrom"></el-input>
      <label for="priceTo">Ціна до</label>
      <el-input placeholder="Please input" name="priceTo" v-model="priceTo"></el-input>
      <label for="bedrooms">Кількість спальних кімнат</label>
      <el-input placeholder="Please input" name="bedrooms" v-model="bedrooms"></el-input>
      <label for="bathrooms">Кількість ванних кімнат</label>
      <el-input placeholder="Please input" name="bathrooms" v-model="bathrooms"></el-input>
      <label for="storeys">Кількість поверхів</label>
      <el-input placeholder="Please input" name="storeys" v-model="storeys"></el-input>
      <label for="garages">Кількість гаражів</label>
      <el-input placeholder="Please input" name="garages" v-model="garages"></el-input>
      <div style="padding: 10px">
        <el-button native-type="submit" type="primary">Пошук</el-button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
  export default {
    data() {
      return {
        name: '',
        priceTo: '',
        priceFrom: '',
        bedrooms: '',
        bathrooms: '',
        storeys: '',
        garages: ''
      }
    },
    mounted() {
      axios({
        method: 'post',
        url: '/api/search',
        data: {
          name: '',
          priceTo: '',
          priceFrom: '',
          bedrooms: '',
          bathrooms: '',
          storeys: '',
          garages: ''
          } 
        })
        .then(function (response) {
          console.log(response);
        })
      }
  }
</script>
