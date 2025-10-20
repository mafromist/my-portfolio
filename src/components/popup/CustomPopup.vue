<template>
	<div class="modalbox" :class="open ? 'opened' : ''">
		<div class="box_inner">
			<div class="close">
				<a href="#" @click="close"><i class="icon-cancel"></i></a>
			</div>
			<div class="description_wrap" v-html="element ? element.outerHTML : ''"></div>
		</div>
	</div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const element = ref(null);
const open = ref(false);

const close = () => {
	open.value = false;
};

onMounted(() => {
	let hidden_content = document.querySelectorAll('.hidden_content');
	hidden_content.forEach((el) => {
		let parent = el.parentElement,
			a = parent.getElementsByTagName('a')[0];
		document.querySelectorAll(`.details a`).forEach((element_) => {
			element_.addEventListener('click', () => {
				let popup_details = element_
					.closest('.list_inner')
					.getElementsByClassName('hidden_content')[0]
					.getElementsByTagName('div')[0];
				element.value = popup_details;
				open.value = true;
			});
		});
		a.addEventListener('click', () => {
			let popup_details = el.getElementsByTagName('div')[0];
			element.value = popup_details;
			open.value = true;
		});
	});
});
</script>
