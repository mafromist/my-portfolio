import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { createI18n } from 'vue-i18n';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

// Import main SCSS files
import './assets/css/style.scss';


const app = createApp(App)
const i18n = createI18n({
  locale: 'tr',
  messages: {
    en: {
      home: 'Home',
      about: 'About',
      portfolio: 'Portfolio',
      blog: 'Blog',
      contact: 'Contact',
      creative: 'Creative',
      fullStackDeveloper: 'Full Stack Developer',
      businessConsultant: 'Business Consultant',
      graphicDesigner: 'Graphic Designer',
      webDesigner: 'Web Designer',
      webDeveloper: 'Web Developer',
      webDesigner: 'Web Designer',
      getInTouch: 'Get in Touch',
      downloadCV: 'Download CV',
      hello: 'Hello',
      everybody: 'everybody!',
      me: 'Me',
    },
    tr: {
      home: 'Ana Sayfa',
      about: 'Hakkımda',
      portfolio: 'Projeler',
      blog: 'Blog',
      contact: 'İletişim',
      creative: 'Yaratıcı',
      fullStackDeveloper: 'Yazılım Geliştirici',
      businessConsultant: 'Danışman',
      graphicDesigner: 'Grafik Tasarımcı',
      webDesigner: 'Web Tasarımcı',
      webDeveloper: 'Web Geliştirici',
      webDesigner: 'Web Tasarımcı',
      getInTouch: 'İletişime Geç',
      downloadCV: 'CV İndir',
      hello: 'Merhaba',
      everybody: 'herkese!',
      me: 'Ben',
    }
  }
})
app.use(router)
app.use(i18n)
app.mount('#app');
export default app;