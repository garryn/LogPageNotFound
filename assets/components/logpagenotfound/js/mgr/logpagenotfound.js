var logPageNotFound = function(config) {
    config = config || {};
    logPageNotFound.superclass.constructor.call(this,config);
};
Ext.extend(logPageNotFound,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('logpagenotfound',logPageNotFound);

logPageNotFound = new logPageNotFound();
