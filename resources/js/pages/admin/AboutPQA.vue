<template>


    <AdminTab class="p-4 bg-white ">
        <template #tabs>
            <button  v-for="tab in tabs" :key="tab"  @click="selectTab(tab)" :class=" ['py-2 px-6 text-center rounded-t-lg font-medium text-sm font-rubik ', selectedTab  === tab.component ? 'pqa-button-hover text-white': '']" aria-current="page"> {{ tab.label }}</button>
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