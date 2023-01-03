fetch('https://world-clock.p.rapidapi.com/json/est/now', {
 method: 'GET',
	headers: {
		'X-RapidAPI-Key': '8bcf0e49e5msh05c0c25a76063d0p174d45jsna31f79857eb9',
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


