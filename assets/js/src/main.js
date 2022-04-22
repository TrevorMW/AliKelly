import MobileNav from './core/mobile-nav';
import ScrollAnimations from './core/scroll-animations';

import Waypoints from '../../../node_modules/waypoints/lib/jquery.waypoints';

(() => {
	'use strict';

	$(document).ready(() => {
		new MobileNav();
        new ScrollAnimations();
        
	});
})();
