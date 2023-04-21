
<script>
    let qtbox = document.querySelector(".questionbox")
    let qtypebtn = document.querySelector(".qtypebtn")
    let qtype = document.querySelector("#qtype")

    let qt = document.querySelectorAll(".qt")
    let shorttextquest = document.querySelector("#shorttextquest")

    let mcqquest2 = document.querySelector("#mcqquest2")
    let mcqquest4 = document.querySelector("#mcqquest4")

    let chkquest2 = document.querySelector("#chkquest2")
    let chkquest4 = document.querySelector("#chkquest4")

    let inpquest = document.querySelector("#quest")
    
    qtypebtn.onclick = ()=>{

        console.log(qtype.value)
        inpquest.style.display="block"

        qt.forEach((ele)=>{
            ele.style.display="none"
        })

        if(qtype.value === "shorttext" ||qtype.value === "longtext"){

            shorttextquest.style.display="block"

        }else if(qtype.value === "mcq2"){

            mcqquest2.style.display="block"

        }else if(qtype.value === "mcq4"){

            mcqquest4.style.display="block"

        }else if(qtype.value === "chk2"){

            chkquest2.style.display="block"

        }else if(qtype.value === "chk4"){

            chkquest4.style.display="block"

        }else{
            alert("Please select valid option");
        }
    }

    
    let gobtn = document.querySelector("#gobtn");
    let quest = document.querySelector("#quest");

</script>