import './bootstrap';
import '../css/app.css';
import 'flowbite';
import Swiper from "swiper";
import { Navigation, Pagination } from 'swiper/modules';
import "swiper/css/bundle"
import "swiper/css/pagination";




Swiper.use([Navigation, Pagination]);
window.Swiper=Swiper
window.Swiper.Pagination=Pagination
window.Swiper.Navigation=Navigation
