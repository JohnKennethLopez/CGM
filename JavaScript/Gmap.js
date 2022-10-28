function showGoogleMap(){
church = document.getElementById("church").value;

if(church == "Tanauan")
{
    document.getElementById("tanauan").style.display='block';
}else{
    document.getElementById("tanauan").style.display='none';
}

if(church == "CGM Balete, Batangas")
{
    document.getElementById("balete").style.display='block';
}else{
    document.getElementById("balete").style.display='none';
}

if(church == "CGM Las Piñas Main")
{
    document.getElementById("main").style.display='block';
}else{
    document.getElementById("main").style.display='none';
}

if(church == "CGM Pulilan, Bulacan")
{
    document.getElementById("pulilan").style.display='block';
}else{
    document.getElementById("pulilan").style.display='none';
}

if(church == "CGM EDSA Mandaluyong")
{
    document.getElementById("edsa").style.display='block';
}else{
    document.getElementById("edsa").style.display='none';
}

};