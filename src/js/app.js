
// import bootstrap from 'bootstrap';
import "bootstrap";
// Import components.
import Example from './components/example.js';
import LazyLoad from "vanilla-lazyload";
const lazyLoadOptions = {/* your options here */};
const pageLazyLoad = new LazyLoad(lazyLoadOptions);
import "./custom.js";
// Initialize your components on DOM Ready.
document.addEventListener("DOMContentLoaded", function() {
    
    Example.init({
        setting: 'New setting from Kafeel'
    });

});

