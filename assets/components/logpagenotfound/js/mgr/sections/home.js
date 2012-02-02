Ext.onReady(function() {
    MODx.load({ xtype: 'logpagenotfound-page-home'});
});

logPageNotFound.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'logpagenotfound-panel-home'
            ,renderTo: 'logpagenotfound-panel-home-div'
        }]
    });
    logPageNotFound.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(logPageNotFound.page.Home,MODx.Component);
Ext.reg('logpagenotfound-page-home',logPageNotFound.page.Home);
