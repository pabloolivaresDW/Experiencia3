function reseteo() {
    document.getElementById("myForm").reset();
    //onsole.log("holi");
}


$(function(){
	$('#titulo').keyup(function(){
		var _this = $('#titulo');
		var _button=$('#submit');
		var _user = $('#titulo').val().toUpperCase();
		if(_user=="MATRIX" | _user=="PSICOSIS"){
    		_this.attr('style', 'background:#ccff99');
    		_button.attr("disabled", false);

		}else{
			_this.attr('style', 'background:#ff3300');
			_button.attr("disabled", true);
		}
		if(_user==''){
			_this.attr('style', 'background:#ffffff');
			_button.attr("disabled", true);
		}
});
});

function info(){
	var cad=$.getJSON('https://api.themoviedb.org/3/search/movie?api_key=73b997888008f97f542667c617a28db7&query=Matrix', {format: "json"}, function(data) { 
	var var1=JSON.stringify(cad);
	alert(var1);
});
}