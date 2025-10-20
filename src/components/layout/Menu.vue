<template>
	<ul class="transition_link">
		<li :class="navbarFunctions.activeNavCls('home')">
			<a href="#home" @click="navbarFunctions.activeSection('home')">Home</a>
		</li>
		<li :class="navbarFunctions.activeNavCls('about')">
			<a href="#about" @click="navbarFunctions.activeSection('about')">About</a>
		</li>
		<li :class="navbarFunctions.activeNavCls('portfolio')">
			<a href="#portfolio" @click="navbarFunctions.activeSection('portfolio')">Portfolio</a>
		</li>
		<li :class="navbarFunctions.activeNavCls('news')">
			<a href="#news" @click="navbarFunctions.activeSection('news')">News</a>
		</li>
		<li :class="navbarFunctions.activeNavCls('contact')">
			<a href="#contact" @click="navbarFunctions.activeSection('contact')">Contact</a>
		</li>
	</ul>
</template>

<script setup>
import { navbarFunctions } from '@/navbarFunctions';
</script>
