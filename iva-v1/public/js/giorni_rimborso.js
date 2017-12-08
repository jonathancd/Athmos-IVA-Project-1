$('#btn-continue').click(function(){

    var empty = $("input").filter(function() {
        return this.value === "";
    });
    if(empty.length) {
        console.log("faltan inputs: "+empty.length);
    }

});