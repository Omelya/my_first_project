<template>
    <div class="container">
        <el-container>
            <el-main>
                <el-alert
                    title="info alert"
                    type="info"
                    description="Пошук не дав результату"
                    show-icon
                    :closable="false">
                </el-alert>
            </el-main>
        </el-container>  
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>