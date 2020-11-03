<template>
    <div>
        <article>
            <b-row>
                <b-col class='text-center' md='10' offset='2'>
                    <H2>
                        Année {{value}}
                    </H2>
                </b-col>
            </b-row>
            <b-row class='mt-3'>
                <b-col md='2'>
                    <vue-slider
                        ref="slider"
                        v-model="value"
                        v-bind="options"
                        :data="dataArray"
                        :data-value="'date'"
                        :data-label="'titre'"
                    ></vue-slider> 
                </b-col>
            </b-row>
        </article>
    </div>
</template>

<script>
    export default {
        name: 'test',
        mounted() {
            this.axios.get('/api/grand-document-et-image-de-france')
            .then((response)=>{
                this.dataArray = response.data.data
            })
        },
        data: function(){
            return {
                value: 628,
                dataAraay: [],
                options: {
                    dotSize: 40,
                    direction: 'ttb',
                    height: 800,
                    tooltipPlacement: 'right',
                }
            }
        }
    }
</script>
