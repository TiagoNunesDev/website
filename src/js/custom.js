var ViewModel = function(){
    var self = this;

    self.print = function () {
        console.log("OK");
    };
};

ko.applyBindings(new ViewModel());