<template>
    <div>
        <el-container>
            <el-main>
                <el-form :inline="true" :model="search" class="demo-form-inline">
                    <el-form-item label="Назва">
                        <el-input placeholder="Please input" v-model="search.name"></el-input>
                    </el-form-item>
                    <el-form-item label="Ціна від">
                        <el-input placeholder="Please input" v-model="search.priceFrom"></el-input>
                    </el-form-item>
                    <el-form-item label="Ціна до">
                        <el-input placeholder="Please input" v-model="search.priceTo"></el-input>
                    </el-form-item>
                    <el-form-item label="Спальні кімнати">
                        <el-input placeholder="Please input" v-model="search.bedrooms"></el-input>
                    </el-form-item>
                    <el-form-item label="Ванні кімнати">
                        <el-input placeholder="Please input" v-model="search.bathrooms"></el-input>
                    </el-form-item>
                    <el-form-item label="Поверховість">
                        <el-input placeholder="Please input" v-model="search.storeys"></el-input>
                    </el-form-item>
                    <el-form-item label="Гаражі">
                        <el-input placeholder="Please input" v-model="search.garages"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="onSubmit">Search</el-button>
                    </el-form-item>
                </el-form>
            </el-main>
        </el-container>
        <el-container>
            <el-main>
                <el-table
                    v-if="result"
                    :data="result"
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
                <el-alert
                    title="За вашим запитом нічого не знайдено"
                    type="info"
                    effect="dark"
                    v-if="notFound">
                </el-alert>
                <el-alert
                    title="error alert"
                    type="error"
                    effect="dark"
                    :closable="false"
                    v-if="errored">
                </el-alert>
            </el-main>
        </el-container>
  </div>
</template>

<script>
import axios from 'axios'
    export default {
        data() {
            return {
                search: {
                    name: '',
                    priceFrom: '',
                    priceTo: '',
                    bedrooms: '',
                    bathrooms: '',
                    storeys: '',
                    garages: ''
                },
                result: {
                    name: '',
                    priceFrom: '',
                    priceTo: '',
                    bedrooms: '',
                    bathrooms: '',
                    storeys: '',
                    garages: ''
                },
                notFound: false,
                errored: false,
                result: false,
                loading: true
            }
        },
        methods:{
            onSubmit() {
                axios.post('/api/', {
                        name: this.search.name,
                        priceFrom: this.search.priceFrom,
                        priceTo: this.search.priceTo,
                        bedrooms: this.search.bedrooms,
                        bathrooms: this.search.bathrooms,
                        storeys: this.search.storeys,
                        garages: this.search.garages
                })
                .then(response => {
                    this.result = response.data
                    if(this.result === 'За вашим запитом нічого не знайдено'){
                        this.notFound = true
                        this.result = false
                    }
                    console.log(this.result)
                })
                .catch(error => {
                    console.log(error)
                    this.errored = true
                })
            }
        },
        mounted() {
            this.onSubmit
            if(this.result == 'За вашим запитом нічого не знайдено') {
                console.log('Ok')
            }
        }
}
</script>