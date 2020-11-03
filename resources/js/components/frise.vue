<template>
    <div>
        <article>
        <b-row class='mt-3'>
            <b-col md='2'>
                <vue-slider
                    ref="slider"
                    v-model="value"
                    v-bind="options"
                    :data="['A', 'B', 'C', 'D']"
                ></vue-slider> 
            </b-col>
            <b-col class='text-center' md='10'>
                <H2>
                    Année {{value}}
                </H2>
            </b-col>
        </b-row>
        </article>
    </div>
</template>

<script>
    import dataJson from './../data/archive_doc.json'

    export default {
        name: 'test',
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
                value: 628,
                options: {
                    dotSize: 40,
                    direction: 'ttb',
                    height: 800,
                    tooltipPlacement: 'right',
                    // min: 628,
                    // max: 1958,
                }
            }
        }
    }
</script>
