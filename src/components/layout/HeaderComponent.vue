<template>
	<MobileHeaderComponent />
	<!-- Header -->
	<div class="header">
		<div class="header_inner">
			<div class="logo">
				<a href="#" @click="navbarFunctions.activeSection('home')"><img src="img/logo/logo.png" alt="" /></a>
			</div>
			<div class="menu">
				<Menu />
			</div>
		</div>
	</div>
</template>

<script setup>
import { navbarFunctions } from '@/navbarFunctions';
import Menu from './Menu.vue';
import MobileHeaderComponent from './MobileHeaderComponent.vue';
</script>
