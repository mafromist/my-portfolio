<template>
  <span class="cd-headline rotate-1">
    <span class="blc">Creative </span>
    <span class="cd-words-wrapper">
      <b
        :class="text == i ? 'is-visible' : 'is-hidden'"
        v-for="(skill, i) in skills"
        :key="i"
      >
        {{ skill }}</b
      >
    </span>
  </span>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const skills = ["Designer", "Developer", "Freelancer"];
const text = ref(0);
let interval = null;

onMounted(() => {
  interval = setInterval(() => {
    text.value = text.value < skills.length - 1 ? text.value + 1 : 0;
  }, 3000);
});

onBeforeUnmount(() => {
  if (interval) {
    clearInterval(interval);
  }
});
</script>
