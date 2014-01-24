define(['plugins/router', 'durandal/app'], function (router, app) {
    return {
        router: router,
        activate: function () {
            router.map([
                { route: '', title:'Work', moduleId: 'viewmodels/work', nav: true },
				{ route: 'work/:slug', moduleId: 'viewmodels/detail'},
                { route: 'about', moduleId: 'viewmodels/about', nav: true }
            ]).buildNavigationModel();
            
			router.updateDocumentTitle = function () {
				return false;
			};
			
            return router.activate();
        }
    };
});