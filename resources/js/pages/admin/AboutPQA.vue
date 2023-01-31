<template>


    <AdminTab>
        <template #tabs>
            <button  v-for="tab in tabs" :key="tab"  @click="selectTab(tab)" :class=" ['w-1/4 py-2 px-1 text-center rounded-t-lg font-medium text-base  ', selectedTab  === tab.component ? 'pqa-gold-3 text-white': '']" aria-current="page"> {{ tab.label }}</button>
        </template>
        <template #content>
            <component :is="selectedTab"></component>
        </template>
        <template #action>
            <PqaButton class="flex ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class=" w-4 h-4 mr-1">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                  </svg>
                    Attachment                  
            </PqaButton>
        </template>
    </AdminTab>
</template>

<script>
import AdminLayout from '../../layouts/admin/AdminLayout.vue';
import BackgroundPQA from './ABOUTPQA/BackgroundPQA.vue';
import AwardeesAndRecipients from './ABOUTPQA/AwardeesAndRecipients.vue';
import PQAFoundation from './ABOUTPQA/PQAFoundation.vue';
    export default {
        
        layout: AdminLayout,
        components: {
            BackgroundPQA,
            AwardeesAndRecipients,
            PQAFoundation,
            
        },
        created () {
           
        },

        data() {
            return {
                tabs: [
                    { id:1, component: 'BackgroundPQA' , label: 'Background of PQA', active: false },
                    { id:2, component: 'AwardeesAndRecipients' , label: 'Awardess & Recipients ', active: false },
                    { id:3, component: 'PQAFoundation' , label: 'PQA Foundations', active: false },
                ],
                selectedTab:'BackgroundPQA',
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