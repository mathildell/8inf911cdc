var socket = io.connect( 'http://localhost:8080' );
socket.on( 'message', function( data ) {

	var actualContent = $( "#chatroom" ).html();
	var docroot = $('#docroot').val();
	console.log(data);

	var newMsgContent ='<div class="textMessage';
	if(data.users_id === $('#users_id').val() ){
		newMsgContent+= ' me';
	}
	newMsgContent+= '"><div class="content">' + data.message + '</div><li class="user">';
	if(data.users_id !== $('#users_id').val() ){
		newMsgContent+= '<a href="'+docroot+'/profile/'+data.users_id+'"> <img src="'+data.image+'" alt="'+data.username+'">'+data.username+'</a>';
	}
	newMsgContent+='<span>'+data.timestamp+'</span></li> </div>';
	//var newMsgContent ='<div class="textMessage"><div class="content">' + data.message + '</div><li class="user"> </li></div> ';


	var content = newMsgContent + actualContent;
	$( "#chatroom" ).html( content );
	$('#messageContent').val("");

});