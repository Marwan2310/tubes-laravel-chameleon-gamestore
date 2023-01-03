fetch('https://free-to-play-games-database.p.rapidapi.com/api/filter?tag=3d.mmorpg.fantasy.pvp&platform=pc', {
    method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'f73bea065fmsh0c5a8c5707057b0p18f348jsnf7f74c62d4e2',
		'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
	}
})
.then(response => response.json())
.then(data => {
        const list = [...data];
        console.log(data)
        list.map((item) => {
            const game = `<img src="${item.thumbnail}">`
            document.querySelector('.games').innerHTML += game;
        })
        console.log(list)
    })
    .catch(err => {console.error(err)
    });
// asdsadsadasdasdasdasd


    // const options = {
    //     method: 'GET',
    //     headers: {
    //         'X-RapidAPI-Key': 'f73bea065fmsh0c5a8c5707057b0p18f348jsnf7f74c62d4e2',
    //         'X-RapidAPI-Host': 'free-to-play-games-database.p.rapidapi.com'
    //     }
    // };

    // fetch('https://free-to-play-games-database.p.rapidapi.com/api/filter?tag=3d.mmorpg.fantasy.pvp&platform=pc', options)
    //     .then(response => response.json())
    //     .then(response => console.log(response))
    //     .catch(err => console.error(err));
