<template>
	<div class="section animated" id="home">
		<div class="section_inner">
			<div class="home">
				<h1>{{ $t('home') }}</h1>
				<h3 class="name">Müge <span class="coloring">Alev</span></h3>
				<h3 class="job">
					<AnimationText />
				</h3>
				<div class="button transition_link">
					<a href="#contact" @click="navbarFunctions.activeSection('contact')">Get in Touch</a>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { navbarFunctions } from '@/navbarFunctions';
import AnimationText from './AnimationText.vue';
</script>
