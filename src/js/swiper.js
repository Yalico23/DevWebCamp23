import Swiper from "swiper";
import 'swiper/css';
import { Navigation, Pagination } from 'swiper/modules';

Swiper.use([Navigation, Pagination]);

(function() {
    const slider = document.querySelector('.slider');
    if (slider) {
        const opciones = {
            slidesPerView :3,
            spaceBetween: 15
        };

        new Swiper('.slider', opciones);
    }
})();
