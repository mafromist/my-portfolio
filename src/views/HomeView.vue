<template>
	<MfpPopup />
	<CustomPopup />
	<AboutPopup />
	<PreloaderComponent />
	<div class="all_wrap" data-magic-cursor="show" data-enter="fadeInUp" data-exit="">
		<!-- WAVE DOTS -->
		<div class="waves"></div>
		<!-- SETTINGS -->
		<SettingsComponent />
		<!-- HEADER -->
		<HeaderComponent />
		<!-- CONTENT -->
		<div class="content">
			<!-- HOME -->
			<HomeComponent />
			<!-- ABOUT -->
			<AboutComponent />
			<!-- PORTFOLIO -->
			<PortfolioComponent />
			<!-- NEWS -->
			<NewsComponent />
			<!-- CONTACT -->
			<ContactComponent />
		</div>
		<!-- MAGIC CURSOR -->
		<CursorComponent />
	</div>
</template>

<script setup>
import { onMounted } from 'vue';
import { waves } from '@/waves';
import { dataImage, imgToSVG } from '@/utilities';
import PreloaderComponent from '@/components/layout/PreloaderComponent.vue';
import AboutPopup from '@/components/popup/AboutPopup.vue';
import CustomPopup from '@/components/popup/CustomPopup.vue';
import MfpPopup from '@/components/popup/MfpPopup.vue';
import AboutComponent from '@/components/AboutComponent.vue';
import ContactComponent from '@/components/ContactComponent.vue';
import HomeComponent from '@/components/HomeComponent.vue';
import CursorComponent from '@/components/layout/CursorComponent.vue';
import HeaderComponent from '@/components/layout/HeaderComponent.vue';
import SettingsComponent from '@/components/layout/SettingsComponent.vue';
import NewsComponent from '@/components/NewsComponent.vue';
import PortfolioComponent from '@/components/PortfolioComponent.vue';

onMounted(() => {
	waves();
	imgToSVG();
	dataImage();
});
</script>
