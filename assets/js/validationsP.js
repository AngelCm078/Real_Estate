function validateP(){

    let title = document.getElementById("title");

    if(title == "")
    {
        let errorDataTitle = document.getElementById("errorDataTitle");
        errorDataTitle.style.display = "block";

        return false;
    }

    return true;
}