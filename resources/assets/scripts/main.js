// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';
import { faCalendarAlt, faCheck, faBell, faSearchPlus, faCompass, faChevronRight, faHome, faChevronCircleRight } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter,faCalendarAlt, faCheck, faBell, faSearchPlus, faCompass, faHome, faChevronRight, faChevronCircleRight);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
