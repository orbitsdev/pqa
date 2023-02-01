<template>
  <div>
    <section class="">
      <aside class="flex justify-between items-center ">
        <div class="-mb-px flex-1 flex items-center justify-beetween" aria-label="Tabs">
        <slot name="tabs"> #tabs for tabls </slot>
      </div>
      
      <div>
        <slot name="action"> #actions Action Here </slot>
      </div>
    </aside>
  </section>
  <section>
    <slot name="content"> #content For Content </slot>
  </section>
</div>
</template>

<script>
export default {
  props: {},
};
</script>

<style lang="scss" scoped></style>
