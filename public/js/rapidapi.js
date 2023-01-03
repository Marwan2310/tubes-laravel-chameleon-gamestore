fetch('https://world-clock.p.rapidapi.com/json/est/now', {
 method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'f73bea065fmsh0c5a8c5707057b0p18f348jsnf7f74c62d4e2',
		'X-RapidAPI-Host': 'world-clock.p.rapidapi.com'
	}
})
.then(response => response.json())
.then(data => {
        console.log(data)
        // posts
        const date = data.dayOfTheWeek + " " + data.currentDateTime;
        document.querySelector('.date-now').innerHTML += date;
    })
    .catch(err => console.error(err));


//


