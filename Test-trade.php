<script>
    // Run first
    var script = document.createElement('script');
    script.src = "https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js";
    document.getElementsByTagName('head')[0].appendChild(script);


    // And then
	var socket = io('http://huu.yez.vn:5000');
	socket.on('server-send-num',function(data){
        $('#bet-amount').val(data);			
	});
	document.getElementById('btn-buy1').onclick= function(){
        var redClicked =$('#bet-amount').val();
        socket.emit('client-send-num',redClicked);
	};
	document.getElementById('btn-sell1').onclick= function(){
        var greenClicked =$('#bet-amount').val();
        socket.emit('client-send-num',greenClicked);
	};
	