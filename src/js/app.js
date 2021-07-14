
// import bootstrap from 'bootstrap';
import "bootstrap";

// Import components.
import Example from './components/example.js';


// Initialize your components on DOM Ready.
document.addEventListener("DOMContentLoaded", function() {
    
    Example.init({
        setting: 'New setting from Kafeel'
    });

});