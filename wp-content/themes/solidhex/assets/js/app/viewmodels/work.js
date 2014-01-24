define(['plugins/http', 'durandal/app', 'knockout'], function (http, app, ko) {
    //Note: This module exports an object.
    //That means that every module that "requires" it will get the same object instance.
    //If you wish to be able to create multiple instances, instead export a function.
    //See the "welcome" module for an example of function export.

    return {
		posts: ko.observableArray([]),
		activate: function () {		
			return http.get('/api/get_posts/').then(function (response) {
				return this.posts(response.posts);
			}.bind(this));
		},
		showGreeting: function (){
			var arr = ["greetings", "howdy", "hi", "welcome", "hi-ya", "hello"],
				greeting;
			
				greeting = arr[Math.floor(Math.random() * arr.length)];
				
				return greeting;
			
		}
    };
});