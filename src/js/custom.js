var ViewModel = function(){
    var self = this;

    var _data_table = [];

    const coinUrl = 'https://api.coinmarketcap.com/v1/ticker/?start=100&limit=10';
    const tstUrl  = 'https://api.coinmarketcap.com/v1/ticker/';

    self.buttonHTMLClick = function (){
        $('#_table_content').empty();
        $.ajax({
            url: tstUrl,
            success:function (data) {
                $.each(data,function (key,value) {
                    _data_table.push(value);
                    $("#_table_content").append('<tr><td>'+ value.id +'</td><td>'+value.price_usd+'</td><td>'+value.market_cap_usd+'</td></tr>')
                })
            }
        })

    };

    self.print = function () {

    };
    $(document).ready(function () {
        self.buttonHTMLClick();
    })
};

ko.applyBindings(new ViewModel());