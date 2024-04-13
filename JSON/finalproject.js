//Final Project
//API: https://www.amiiboapi.com/api/amiibo/

async function amiiboapi() {
    const response = await fetch
    ("https://www.amiiboapi.com//api/amiibo/");
const result = await response.json();
console.log(result);
return result;
}

amiiboapi();
