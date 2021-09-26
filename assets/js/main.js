new DataTable('#platesTbl');
function loadTable(){
    $("#table-container").load("./includes/methods.php",{
        searchSubmit : true,
        searchInput : document.getElementById("searchInput").value == '' ? null : document.getElementById("searchInput").value
    });
    
    $(document).ajaxStop(
        function (){
            new DataTable('#platesTbl');
        }
    );
}

function loadFullTable(){
    $("#table-container").load("./includes/methods.php",{
        fullTable : true
    });
    
    $(document).ajaxStop(
        function (){
            new DataTable('#platesTbl');
        }
    );
}

function registerPlate(){
    $.ajax({
        url: "./includes/methods.php",
        data: {
            registerPlate: true,        
            owner: document.getElementById("ownerName").value,
            phone: document.getElementById("phoneNumber").value,
            plate: document.getElementById("plateNumber").value
        },
        type: "POST",
        success: function(msg){
            console.log(msg);
        }
    });


    closeModal();
    document.getElementById("ownerName").value = "";
    document.getElementById("phoneNumber").value = "";
    document.getElementById("plateNumber").value = "";
}

function closeModal(){
    document.getElementById("add-modal-container").style.display = "none";
    document.getElementById("body-container").style.filter = "blur(0px)";
    document.getElementById("ownerName").value = "";
    document.getElementById("phoneNumber").value = "";
    document.getElementById("plateNumber").value = "";
}
function showModal(){
    document.getElementById("add-modal-container").style.display = "flex";
    document.getElementById("body-container").style.filter = "blur(5px)";

}