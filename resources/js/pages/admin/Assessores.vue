<template>
    <AdminTab class="p-4 bg-white ">
        <template #tabs>
            <button  v-for="tab in tabs" :key="tab"  @click="selectTab(tab)" :class=" [' py-2 px-6 text-center rounded-t-lg font-medium text-sm font-rubik  ', selectedTab  === tab.component ? 'pqa-button-hover text-white': '']" aria-current="page"> {{ tab.label }}</button>
        </template>
        <template #content>
            <component :is="selectedTab"></component>
        </template>
        <template #action>  
            <PqaButton> Attach File </PqaButton>
        </template>
    </AdminTab>
</template>

<script>
import AdminLayout from '../../layouts/admin/AdminLayout.vue';
import WhoAreTheAssessors from './Assessors/WhoAreTheAssessors.vue';
import HowToBecomeAccessors from './Assessors/HowToBecomeAccessors.vue';
import Testimonials from './Assessors/Testimonials.vue';
import BenifitsOfAssesors from './Assessors/BenifitsOfAssesors.vue';


export default {

        components: {
            WhoAreTheAssessors,
            HowToBecomeAccessors,
            Testimonials,
            BenifitsOfAssesors,
        },
        
        layout: AdminLayout,

        data() {
            return {
                tabs: [
                    { id:1, component: 'WhoAreTheAssessors' , label: 'Who are the accessors?', active: false },
                    { id:2, component: 'HowToBecomeAccessors' , label: 'How to become an Accessor?', active: false },
                    { id:3, component: 'Testimonials' , label: 'Benefits of an Assesors', active: false },
                    { id:4, component: 'BenifitsOfAssesors' , label: 'Testimonials', active: false },
                ],
                selectedTab:'WhoAreTheAssessors',
            }
        },

        methods: {
            selectTab(tab){
                this.selectedTab = tab.component;
            }
        }   

    }
</script>

<style lang="scss" scoped>

</style>