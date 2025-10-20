import { reactive } from 'vue';
import { sectionActiveFunc } from './utilities';

export const navbarFunctions = reactive({
	active: 'home',
	mobileToggle: false,
	activeSection(value) {
		this.active = value;
		this.mobileToggle = false;
		sectionActiveFunc(value);
	},
	activeNavCls(value) {
		return this.active == value ? 'active' : '';
	},
	toggleMobileMenu() {
		this.mobileToggle = !this.mobileToggle;
	},
});
