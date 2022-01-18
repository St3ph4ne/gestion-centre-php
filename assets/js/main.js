window.onload = function (){
    let params = window.location.search
    let table = new URLSearchParams(params).get('table')
    getData(table)
}


function getData(param) {
    fetch('../tables/data.php/?table='+param)
    .then(function(response) {
        console.log(response.text())
})

}