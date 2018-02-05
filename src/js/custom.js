var ViewModel = function(){
    var self = this;
    //constants
    // const coinUrl = 'https://api.coinmarketcap.com/v1/ticker/?start=100&limit=10';
    const  _first100Coins = 100;
    const _allCoinsUrl = 'https://api.coinmarketcap.com/v1/ticker/?limit=0';
    const _firstCoinsUrl  = 'https://api.coinmarketcap.com/v1/ticker/';
    //variables
    self._data_table_complete = [];
    self._data_table = ko.observableArray();
    self.search_value = ko.observable('');

    // "id": "bitcoin",
    //     "name": "Bitcoin",
    //     "symbol": "BTC",
    //     "rank": "1",
    //     "price_usd": "11386.2",
    //     "price_btc": "1.0",
    //     "24h_volume_usd": "9328420000.0",
    //     "market_cap_usd": "191586193785",
    //     "available_supply": "16826175.0",
    //     "total_supply": "16826175.0",
    //     "max_supply": "21000000.0",
    //     "percent_change_1h": "0.68",
    //     "percent_change_24h": "0.9",
    //     "percent_change_7d": "-2.77",
    //     "last_updated": "1516912466"
    //
    self.getAllCoins = function(){
        $.ajax({
            url: _allCoinsUrl,
            success:function (data) {
                $.each(data,function (key,value) {
                   var coin = {id:value.id, name: value.name, rank: value.rank, price:value.price_usd, cap:value.market_cap_usd, symbol:value.symbol};
                   if(key < _first100Coins)
                        self._data_table.push(coin);
                   self._data_table_complete.push(coin);
                })
            }
        });
    };

    self.voteInCoin = function (data){
        console.log(data);
        $.ajax({
            type: "POST",
            url: '/crypto/includes/dbvoting.php',
            // dataType:"json",
            data: {name: 'Wayne', age: 27},
            success: function(data){
                alert(data);
            },
            error:function(jqXHR, textStatus, errorThrown){
                alert("Error type" + textStatus + "occured, with value " + errorThrown);
            }
        });
    };

    self.search_engine = function () {
        self._data_table.removeAll();

    };


    $(document).ready(function () {
        // self.voteInCoin();
        // self.getInitialCoins();
        self.getAllCoins();
    })
};

ko.applyBindings(new ViewModel());