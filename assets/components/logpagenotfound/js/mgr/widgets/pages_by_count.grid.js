logPageNotFound.grid.Items = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'logpagenotfound-grid-items'
        ,url: logPageNotFound.config.connector_url
        ,baseParams: {
            action: 'mgr/getpagesbycount'
        }
        ,fields: ['count','page','menu']
        ,autoHeight: true
        ,paging: true
        ,remoteSort: true
        ,columns: [{
            header: _('logpagenotfound.page')
            ,dataIndex: 'page'
            ,width: 100
            ,sortable: true
        },{
            header: _('logpagenotfound.count')
            ,dataIndex: 'count'
            ,width: 20
            ,sortable: true
        }]
    });
    logPageNotFound.grid.Items.superclass.constructor.call(this,config);
};
Ext.extend(logPageNotFound.grid.Items,MODx.grid.Grid,{
    windows: {},

    resolvePage: function(btn,e) {
        if (!this.resolvePageWindow) {
            this.resolvePageWindow = MODx.load({
                xtype: 'logpagenotfound-window-page-resolve'
                ,record: this.menu.record
                ,listeners: {
                    'success': {fn:this.refresh,scope:this}
                }
            });
        }
        this.resolvePageWindow.reset();
        this.resolvePageWindow.setValues(this.menu.record);
        this.resolvePageWindow.show(e.target);
    }

});
Ext.reg('logpagenotfound-grid-items',logPageNotFound.grid.Items);

logPageNotFound.window.ResolvePage = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('logpagenotfound.page_resolve')
        ,url: logPageNotFound.config.connector_url
        ,baseParams: {
            action: 'mgr/resolvepage'
        }
        ,fields: [{
            xtype: 'hidden'
            ,name: 'page'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('logpagenotfound.fieldname.notes')
            ,name: 'resolution'
            ,width: 360
        }]
    });
    logPageNotFound.window.ResolvePage.superclass.constructor.call(this,config);
};
Ext.extend(logPageNotFound.window.ResolvePage,MODx.Window);
Ext.reg('logpagenotfound-window-page-resolve',logPageNotFound.window.ResolvePage);
