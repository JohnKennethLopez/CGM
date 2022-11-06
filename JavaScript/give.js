function ShowMethod(){
    church = document.getElementById("church").value;
    
    if(church == "CGM Las Piñas Main")
    {
        document.getElementById("main").style.display='block';
    }else{
        document.getElementById("main").style.display='none';
    }
    
    };