({
    extendsFrom: 'AccountsRecordView',

    /**
     * @inheritdoc
     */
    _loadTemplate: function (options) {
        this.tplName = 'record';
        this.template = app.template.getView(this.tplName);
    },

    /**
     * @inheritdoc
     */
    setRoute: function (action) {
        if (!this.meta.hashSync) {
            return;
        }

        if (action == 'edit') {
            action = 'limited/' + action;
        } else if (action == 'detail' || _.isEmpty(action)) {
            action = 'limited';
        }

        app.router.navigate(app.router.buildRoute(this.module, this.model.id, action), { trigger: false });
    },
})