function takimBul(){
    var sayi = Math.floor((Math.random() * 40) + 1);
    $.getJSON('https://api-nba-v1.p.rapidapi.com/teams/teamId/' + sayi + '?rapidapi-key=c60e12e22fmsh35462b12fa5c85cp19996ajsn96e349f583a0').then(function(cikti){
        console.log(cikti);
        console.log(cikti.api.teams[0])
        var takim = cikti.api.teams[0];
        $('#fullName').html(takim.fullName)
        $('#nickname').html(takim.nickname)
        $('#shortName').html(takim.shortName)
        $('#logo').attr('src', takim.logo);
    })
}
takimBul();