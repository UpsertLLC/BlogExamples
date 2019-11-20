({
    extendsFrom: 'CreateView',

    /**
     * @inheritdoc
     */
    initialize: function (options) {
        options.meta = options.meta || {};
        options.meta = _.extend(app.metadata.getView(null, 'create'), options.meta);
        options.meta = _.extend(app.metadata.getView(options.module, 'record-limited'), options.meta);
        this._super('initialize', [options]);
    },

    /**
     * @inheritdoc
     */
    saveAndClose: function () {
        this.initiateSave(_.bind(function () {
            if (this.closestComponent('drawer')) {
                app.drawer.close(this.context, this.model);
            } else {
                app.navigate(this.context, this.model, 'limited');
            }
        }, this));
    },
})