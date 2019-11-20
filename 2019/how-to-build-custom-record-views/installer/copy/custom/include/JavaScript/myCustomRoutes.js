(function (app) {
    app.events.on("router:init", function () {
        var routes = [
            {
                route: 'Accounts/:id/limited',
                name: 'AccountsRecordLimited',
                callback: function () {
                    App.controller.loadView({
                        module: 'Accounts',
                        layout: 'record-limited',
                        modelId: arguments[0],
                        action: 'detail',
                    });
                }
            },
            {
                route: 'Accounts/:id/limited/edit',
                name: 'AccountsRecordLimitedEdit',
                callback: function () {
                    App.controller.loadView({
                        module: 'Accounts',
                        layout: 'record-limited',
                        modelId: arguments[0],
                        action: 'edit',
                    });
                }
            },
            {
                route: 'Accounts/limited/create',
                name: 'AccountsCreateLimited',
                callback: function () {
                    App.controller.loadView({
                        module: 'Accounts',
                        layout: 'create-limited',
                        create: true,
                        action: 'create',
                    });
                }
            }
        ];
        app.router.addRoutes(routes);
    })
})(SUGAR.App);