<template>
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex" aria-label="Tabs">
  
    
          <button  v-for="tab in tabs" :key="tab"  @click="selectTab(tab)" :class=" ['w-1/4 py-2 px-1 text-center rounded-t-lg font-medium text-base  ', selectedTab  === tab.component ? 'pqa-gold-3 text-white': '']" aria-current="page"> {{ tab.label }}</button>
  
        </nav>
      </div>

      <div>
            <component :is="selectedTab"></component>
      </div>
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