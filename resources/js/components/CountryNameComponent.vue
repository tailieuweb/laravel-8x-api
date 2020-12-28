<template>
    <strong>Country Name: {{country_name_new}}</strong>
</template>

<script>
export default {
    props: ['country_name', 'id'],
    data(){
        return{
            country_name_new: this.country_name
        }
    },
    mounted() {
        window.Echo.private('country-tracker.' + this.id)
            .listen('.country-change-event', (country) => {
                this.country_name_new = country.country.country_name
            })
    }
}
</script>
