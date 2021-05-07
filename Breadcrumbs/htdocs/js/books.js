$(document).ready(function(){
    var book = null;
    $("#note").click(function(){
        $("#tableBody").html("");
        const title = $("#title").val();
        const author = $("#author").val();
        if(title == "" && author == ""){
            $("#message").html("Nothing found :(");
        }
        else{
            searchBooks(title, author);
        }
    })

    $("#interested").click(function(){

    });
});

function getInfo(e){
    const bookId = "book" + $(e).closest('tr').attr('id') + ".html";
    jQuery.ajax({
        url: "../includes/bookController.php",
        type: "POST",
        data: {
            book: bookId,
            method: 1,
        },
        dataType: "json",
        success: function(res){
            $("#about").html(res);
        }
    });
}

function modal(){
    return '<button type="button" onclick="getInfo(this)" class="btn btn-outline-warning" data-toggle="modal" data-target="#actionModal">Book</button>';
}

function searchBooks(title, author){
    jQuery.ajax({
        url: "../includes/bookController.php",
        type: "POST",
        data: {
            title: title,
            author: author,
            method: 0,
        },
        dataType: "json",
        success: function(res){
            if(res.length == 0 || res == false){
                $("#message").html("Nothing found :(");
            }
            else{
                let ret = "";
                for(book in res){
                    $("#message").html("");
                    ret += "<tr id='" + res[book].id + "'>";
                    ret += "<td>"+res[book].title+"</td>";
                    ret += "<td>"+res[book].author+"</td>";
                    ret += "<td>" + modal() + "</td>";
                    ret += "</tr>";
                    $("#tableBody").html(ret)
                }
            }
        }
    });
}