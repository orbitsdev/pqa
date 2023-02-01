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
import AwardAndRecognition from './Applicants/AwardAndRecognition.vue';
import Criteria from './Applicants/Criteria.vue';
import Benifits from './Applicants/Benifits.vue';
import Testimonials from './Applicants/Testimonials.vue';
import PqaApplicant from './Applicants/PqaApplicant.vue';
    export default {
        
        layout: AdminLayout,
        components: {
            AwardAndRecognition,
            Criteria,
            Benifits,
            Testimonials,
            PqaApplicant,
        },

        data() {
            return {
                tabs: [
                    { id:1, component: 'AwardAndRecognition' , label: 'Award and Recognition', active: false },
                    { id:2, component: 'Criteria' , label: 'Criteria ', active: false },
                    { id:3, component: 'Benifits' , label: 'Benifits', active: false },
                    { id:4, component: 'Testimonials' , label: 'Testimonials', active: false },
                    { id:5, component: 'PqaApplicant' , label: 'Pqa Applicant', active: false },
                ],
                selectedTab:'AwardAndRecognition',
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