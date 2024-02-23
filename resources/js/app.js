import './bootstrap';

// Ci portiamo appresso il file scss
import '~resources/scss/app.scss';

// Ci portiamo appresso tutte le immagini che si trovano nella cartella resources/img
import.meta.glob([
    '../img/**'
]);
