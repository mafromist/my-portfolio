<template>
	<div class="topbar">
		<div class="topbar_inner">
			<div class="logo">
				<a href="#" @click="navbarFunctions.activeSection('home')"><img src="img/logo/logo.png" alt="" /></a>
			</div>
			<div class="trigger">
				<div class="hamburger hamburger--slider" @click="navbarFunctions.toggleMobileMenu()">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile_menu" :class="navbarFunctions.mobileToggle ? 'opened' : ''">
		<div class="inner">
			<div class="menu_list">
				<Menu />
			</div>
		</div>
	</div>
</template>

<script setup>
import { navbarFunctions } from '@/navbarFunctions';
import Menu from './Menu.vue';
</script>

<style scoped>
.topbar,
.mobile_menu {
	display: none;
}
@media (max-width: 1040px) {
	.topbar,
	.mobile_menu {
		display: block;
	}
}
</style>
