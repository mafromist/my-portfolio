<template>
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
</template>

<script setup>
import { onMounted } from 'vue';
import { customCursor } from '@/utilities';

onMounted(() => {
	customCursor();
});
</script>
