let url_string=location.href;
let url=new URL(url_string);
let st=url.searchParams.get("status");
let arr = url_string.split("&");

function CurentPageName(){
    let path=location.pathname;
    return path.split("/").pop();
}
function GetUrlQuery(){
    if(st==="ok"){
        swal({
            title: "Good job !",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
        }).then( function () {
            setTimeout(Redirect,1000)

        });

    }
    if(st==="no"){
        swal({
            title: "Sorry !",
            text: "You clicked the button!",
            icon: "error",
            button: "Aww yiss!",
        }).then( function () {
            setTimeout(Redirect,1000)

        });
    }





}
function Redirect(){
    window.location.href = url_string.replace('&'+arr[arr.length - 1], "")

}
GetUrlQuery();
function KatSil(id,page){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url:`./code/delete.php`,
                    data:{ks:true,id:id,page:page},
                    method:"POST",
                    success: function(data){
                        if(data){
                            console.log(data);
                            window.location.href=`index.php?link=${page}-list&status=ok`;

                        }
                        else{
                            console.log("error");
                            window.location.href=`index.php?link=${page}-list&status=no`;
                        }
                    },
                    error:function(x,sts){
                        alert("error");
                    }

                })
                console.log(CurentPageName());
            } else {
                swal("Your imaginary file is safe!");
            }
        });
}
function KatRedakte(id,i){
    let elmt=document.getElementsByClassName("CatSiyahi")[i].getElementsByTagName("td");
    console.log(elmt);
    let ids=elmt[0].textContent;
    let ad=elmt[1].textContent;
    document.getElementById("title").value=ad;
    document.getElementById("id").value=ids;

}
function GetCategory(elem){
    let opt=`<option value="" disabled="disabled" selected="selected">Sec</option>`;
    let id=elem.value;
    let PKS=[];
    $.ajax({
        url:`./code/subCategory/getCategory.php`,
        data:{sub:true,id:id},
        method:"POST",
        success: function(data){
            PKS=JSON.parse(data);
            console.log(PKS)
            for(let i=0;i<=Object.keys(PKS).length-2;i++){
                opt+=`<option value="${i}">${PKS[i]}</option>`;
             }
            console.log(opt);
            document.getElementById("subkategoriya").innerHTML=opt;

        },
        error:function(x,sts){
            alert("error");
        }

    })
}