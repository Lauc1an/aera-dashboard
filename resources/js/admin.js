try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('./vendor/adminbootstrap');
    require('./vendor/adminlte');
} catch (e) {
    console.error(e);
}
