<template>
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
</template>

<script setup>
import { onMounted } from 'vue';
import { preLoader } from '@/utilities';

onMounted(() => {
	preLoader();
});
</script>
