define(['plugins/http', 'durandal/app', 'knockout'], function (http, app, ko) {
    //Note: This module exports an object.
    //That means that every module that "requires" it will get the same object instance.
    //If you wish to be able to create multiple instances, instead export a function.
    //See the "welcome" module for an example of function export.

    return {
		project: ko.observable(), 
		activate: function (slug) {
			return http.get('/api/get_post/?post_slug=' + slug).then(function (response) {
				return this.project(response.post);
			}.bind(this));
		}
    };
});