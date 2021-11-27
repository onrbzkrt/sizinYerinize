try {
    window._ = require('lodash');
    window.axios = require('axios');

    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    window.toastr = require('toastr');
    require('@popperjs/core/dist/cjs/popper');
    require('bootstrap/dist/js/bootstrap.min');
} catch (e) {

}
