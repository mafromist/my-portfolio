<template>
	<div class="settings" :class="toggle ? 'opened' : ''">
		<div class="icon" @click="toggle = !toggle">
			<img class="svg" src="img/setting.svg" alt="" />
			<a class="link" href="#"></a>
		</div>
		<div class="wrapper">
			<span class="title">Unlimited Colors</span>
			<ul class="colors">
				<li v-for="(color, i) in colors" :key="i">
					<a href="#" :data-color="color" :style="{ 'background-color': color }" @click="changeColor(color)"></a>
				</li>
			</ul>
			<span class="title">Magic Cursor</span>
			<ul class="cursor">
				<li>
					<a class="show" :class="magicCursor === 'show' ? 'showme' : ''" @click="magicCursorFun('show')" href="#"></a>
				</li>
				<li>
					<a class="hide" :class="magicCursor === 'hide' ? 'showme' : ''" href="#" @click="magicCursorFun('hide')"
						><img class="svg" src="img/arrow.svg" alt=""
					/></a>
				</li>
			</ul>
		</div>
	</div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const toggle = ref(false);
const magicCursor = ref(true);
const color = ref('#EB4A4C');
const colors = [
	'#4169e1',
	'#66B95C',
	'#ff9800',
	'#ff5e94',
	'#fa5b0f',
	'#f39977',
	'#9200ee',
	'#00D4BD',
	'#5e9e9f',
	'#EB4A4C',
	'#666d41',
	'#fe0000',
];

const changeColor = (value) => {
	color.value = value;
	document.querySelector('html').style.setProperty('--main-color', value);
	localStorage.setItem('edrea-color', value);
};

const magicCursorFun = (value) => {
	magicCursor.value = value;
	localStorage.setItem('edrea-cursor', value);
	const all_wrap = document.querySelector('.all_wrap');
	all_wrap.setAttribute('data-magic-cursor', value);
};

onMounted(() => {
	const savedColor = localStorage.getItem('edrea-color');
	const cursor = localStorage.getItem('edrea-cursor');

	if (savedColor) {
		changeColor(savedColor);
	} else {
		changeColor(color.value);
	}

	if (cursor) {
		magicCursorFun(cursor);
	} else {
		magicCursorFun(magicCursor.value ? 'show' : 'hide');
	}
});
</script>

<style scoped>
.colors li {
	margin: 0 2.5px;
}
</style>
