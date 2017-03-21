jQuery(document).ready(function($) {
	
(function() {

 const popUp = {

 	init: function() {
 		this.cacheDom();
 		this.bindEvents();
 	},

 	cacheDom: function() {
 		this.$popup = $("#popUp");
 		this.$plus = $("#plus");
 		this.$close = $("#close");
 		this.$scroll = 150;
 		this.$doc = $(document);
 		this.$height = $(window).height();
 		this.$scrollPos = phpVars.scrollPos / 100;
 		//phpVars.scrollPos
 	},

 	bindEvents: function() {
 		this.$plus.on("click", this.showPop.bind(this));
 		this.$close.on("click", this.closePop.bind(this));
 		this.$doc.scroll(this.listenScroll.bind(this));
 	},

 	showPop: function() {
 		this.$popup.css("margin-left", "0px");
 		this.$plus.css("margin-left", "-425px");
 	},

 	closePop: function() {
 		this.$popup.css("margin-left", "-425px");
 		this.$plus.css("margin-left", "0px");
 	},

 	listenScroll: function() {
 		if (this.$doc.scrollTop() >= (this.$doc.height() - $(window).height()) * this.$scrollPos ) {
 			this.$plus.css("margin-left", "0px");
 			this.$popup.css("margin-left", "-425px");
 			// For debuging vars
 			console.log(this.$scrollPos);
 		} else {
 			this.$plus.css("margin-left", "-425px");
 			this.$popup.css("margin-left", "-425px");
 		}
 	}

 }

popUp.init();

})();


})