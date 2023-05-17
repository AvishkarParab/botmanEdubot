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
let subt = document.querySelector("#subtopic");
let linkswap = document.querySelector("#swaplink");
let end = document.querySelector(".end");
let linkinput = document.querySelector("#linkInput");
linkswap.onclick = () => {
    console.log("inside onclikkk");
    if (linkswap.value == 'videolink') {
        linkinput.placeholder = 'Enter the Video link';
        linkinput.name = "vidLink";
        linkswap.value = 'imagelink';
        linkswap.innerHTML = "Image Link";
    } else {
        linkinput.placeholder = 'Enter the Image link';
        linkswap.value = 'videolink';
        linkinput.name = "imgLink";
        linkswap.innerHTML = "Video Link";
    }
}
qtypebtn.onclick = () => {

    console.log(qtype.value)
    inpquest.style.display = "block"
    subt.style.display = "block";
    qt.forEach((ele) => {
        ele.style.display = "none"
    })

    if (qtype.value === "shorttext" || qtype.value === "longtext") {

        shorttextquest.style.display = "block"
        end.style.display = "block";

    } else if (qtype.value === "mcq2") {

        mcqquest2.style.display = "block"
        end.style.display = "block";
    } else if (qtype.value === "mcq4") {

        mcqquest4.style.display = "block"
        end.style.display = "block";
    } else if (qtype.value === "chk2") {

        chkquest2.style.display = "block"
        end.style.display = "block";
    } else if (qtype.value === "chk4") {

        chkquest4.style.display = "block"
        end.style.display = "block";
    } else {
        alert("Please select valid option");
    }
}


let gobtn = document.querySelector("#gobtn");
let quest = document.querySelector("#quest");
</script>