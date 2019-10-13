var movie_id =document.getElementById('movie[id]');
var movie_name;
if(movie_id = 'ACT'){
	movie_name='Avengers: Endgame';
}else if(movie_id = 'RMC'){
	movie_name ='Top End Wedding';
}else if(movie_id= 'ANM'){
	movie_name='Dumbo'
}else if(movie_id='AHF'){
	movie_name='The Happy Prince';
}
document.getElementById('movie_title').innerHTML = movie_name;

var time = document.getElementById('movie[day]');
var hour

if(time ='T12'){
	hour = '12PM'
}else if(time = 'T15'){
	hour ='3PM'
}else if(time = 'T18'){
	hour = '6PM'
}else if(time ='T21'){
	hour = '9PM'
}
document.getElementById('movie_hour').innerHTML = hour;




