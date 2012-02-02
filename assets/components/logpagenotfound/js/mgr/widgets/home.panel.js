logPageNotFound.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,items: [{
            html: '<h2>'+_('logpagenotfound')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,bodyStyle: 'padding: 10px'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [{
                title: _('logpagenotfound.items_by_count')
                ,items: [{
                    html: '<p>'+_('logpagenotfound.items_by_count_desc')+'</p><br />'
                    ,border: false
                },{
                    xtype: 'logpagenotfound-grid-items'
                    ,preventRender: true
                }]
            }]
        }]
    });
    logPageNotFound.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(logPageNotFound.panel.Home,MODx.Panel);
Ext.reg('logpagenotfound-panel-home',logPageNotFound.panel.Home);
